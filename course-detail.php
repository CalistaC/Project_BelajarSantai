<?php
    // Authentication
    require('config.php');
    if(is_logged_in()){
        $this_page='kursus-detail'; /* Ingat pindahin ke dalam if logged in nya ya */
        require("template.php"); /* Ingat pindahin ke dalam if logged in nya ya */
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BelajarSantai | Statistika</title>
    <style>
        #course-title {
            font-weight: 700;
            font-size: 1.563rem;
            line-height: 1.875rem;
            color: #F39835;
            margin: 0;
            padding: 0;
        }
        #content-overview-title {
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.25rem;
            margin: 1rem 0 0 0;
            padding: 0;
        }
        .content-overview-num {
            font-weight: 700;
            font-size: 1rem;
            line-height: 1.25rem;
            color: #3590F3;
        }
        .content-overview-name {
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.25rem;
            margin: 0.5rem 0 0 0;
            padding: 0;
        }
        #topic-box {
            margin: 2rem 0 2rem 0;
            padding: 1.5rem;
            height: 25rem;
            color: #FFFFFF;
            border: 1px solid rgba(217, 217, 217, 0.5);
            border-radius: 0.625rem;    
        }
        button.topic-num {
            background-color: #FFFFFF;
            border: none;
            color: #000000;
            text-decoration: none;
            display: inline-block;
        }
        .topic-num {
            font-weight: 700;
            font-size: 1rem;
            line-height: 1.25rem;
        }
        .topic-num:hover, .topic-num.active{
            color: #F39835;
            text-decoration: underline;
        }
        #topic-content {
            margin: 2rem 0 0 0;
        }
        .topic-title {
            padding: 0;
            font-weight: 700;
            font-size: 1.25rem;
            line-height: 1.5rem;
            color: #000000;
        }
        .topic-name {
            padding: 0;
            margin: 0.5rem 0 0 0;
            font-weight: 700;
            font-size: 1rem;
            line-height: 1.25rem;
            color: #000000;
        }
        .topic-video {
            margin: 1.5rem 0 0 0;
            padding: 0;
            width: 16rem; /* 255px */
            height: 9rem; /* 144px */
            border-radius: 0.625rem;
        }
        .file {
            margin: 1rem 0 0 0;
            padding: 0;
            display: inline-block;
        }
        #topic-content-checkbox {
            width: 1.5rem;
            height: 1.5rem;
            margin: 0;
            border: 3px solid #F39835;
        }
        #topic-content-checkbox:checked {
            background-color: #F39835;
        }
        .topic-content-link {
            color: #000000;
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.25rem;
            display: inline-block;
            margin: 0 0 0 0.5rem;
        }
    </style>
</head>
<body>
    <!-- This is Content Section -->
    <main id="content" class="container-fluid">
        <!-- Start here for content in each file -->

        <div class="row">
            <div id="course-title" class="col">
               <span>Statistika</span> 
            </div>
        </div>
        <div class="row">
            <div id="content-overview-title" class="col">
                <span >Ringkasan</span>
            </div>
        </div>
        <!-- PHP Code for dinamic overview -->
        <?php
        // Topic
        $query_overview_topic = "SELECT * FROM statistika WHERE topic_num IS NOT NULL";
        $result_overview_topic = mysqli_query($conn, $query_overview_topic);
        $overview_topic_num = mysqli_num_rows($result_overview_topic);

         // Video
         $query_overview_video = "SELECT * FROM statistika WHERE video IS NOT NULL";
         $result_overview_video = mysqli_query($conn, $query_overview_video);
         $overview_video_num = mysqli_num_rows($result_overview_video);

        // Instructor
        $query_overview_instructor = "SELECT * FROM course WHERE course_name = 'Statistika'";
        $result_overview_instructor = mysqli_query($conn, $query_overview_instructor);
        $overview_instructor = mysqli_fetch_assoc($result_overview_instructor);
        ?>
        <div class="row">
            <div class="content-overview-name" class="col">
                <span><span class="content-overview-num"><?php echo $overview_topic_num;?></span> Topik</span>
            </div>
        </div>
        <div class="row">
            <div class="content-overview-name" class="col">
                <span><span class="content-overview-num"><?php echo $overview_video_num;?></span> Video</span>
            </div>
        </div>
        <div class="row">
            <div class="content-overview-name" class="col">
                <span>Instruktur: <span class="content-overview-num" style="margin-left: 1rem;"><?php echo $overview_instructor['instructor'];?></span></span>
            </div>
        </div>

        <!-- Topic Box -->
        <div class="row">
            <div id="topic-box" class="col-9">
                <div class="row">
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                        <!-- Buat defaultnya topic 1, lalu nanti berubah klo kita klik link lain -->
                        <?php
                        if (isset($_POST['topic'])){
                            $topic_num_selected = $_POST['topic'];
                        }
                        else{
                            $topic_num_selected = 1;
                        }
                        
                        $topic_num = 1;
                        $query = "SELECT * FROM statistika ORDER BY topic_num";
                        $result = mysqli_query($conn, $query);

                        // Query result will be printed with while loop
                        while($row = mysqli_fetch_assoc($result)){
                            $topic_num = $row['topic_num'];
                        ?>
                        <button type="submit" value="<?php echo $topic_num;?>" href="course-detail.php" name="topic" class="col topic-num <?php if ($topic_num == $topic_num_selected ){echo "active";}?>">
                        Topic <?php echo $topic_num;?>
                        </button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
                
                <div id="topic-content" class="row">
                    <!-- Show content from selected Topic -->
                    <?php 
                    // Default Topic
                    $topic_id = 1;
                    $topic_name = "Pengenalan Statistika";
                    $video = "https://drive.google.com/file/d/1UzSrZtcS6TXHmVHiG1orTdlgnEQ_rie1/preview";
                    $file = "https://docs.google.com/presentation/d/1zXcs8uCIivJaO1vC5v2cqdWJTq2eR6g6/edit?usp=share_link&ouid=107454760171132006031&rtpof=true&sd=true";

                    //If there's input
                    if (isset($_POST['topic'])){
                        $topic = $_POST['topic'];

                        $query_get_content = "SELECT * FROM statistika WHERE topic_num = $topic";
                        $result_get_content = mysqli_query($conn, $query_get_content);
                        $content = mysqli_fetch_assoc($result_get_content);
                        $topic_id = $content['topic_num'];
                        $topic_name = $content['topic_name'];
                        $video = $content['video'];
                        $file = $content['topic_file'];
                    }
                    ?>
                    <div class="col-12 topic-title">Topic <?php echo $topic_id;?></div>
                    <div class="col-12 topic-name"><?php echo $topic_name;?></div>
                    <div class="col-12 topic-video"><iframe src="<?php echo $video?>" width="255" height="144" allow="autoplay"></iframe></div>
                    <div class="col-12 file d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" value="" id="topic-content-checkbox">
                        <a href="<?php echo $file;?>" target="_blank" class="topic-content-link">Slide <?php echo $topic_name;?></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
</body>
</html>


<?php  
// Authentication
} else {
    header('Location: index.php');
}
?>