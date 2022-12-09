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
        a.topic-num {
            color: #000000;
            text-decoration: none;
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
            width: 16rem; /* 255px */
            height: 9rem; /* 144px */
            background-color: #3590F3;
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
        <div class="row">
            <div class="content-overview-name" class="col">
                <span><span class="content-overview-num">6</span> Topik</span>
            </div>
        </div>
        <div class="row">
            <div class="content-overview-name" class="col">
                <span><span class="content-overview-num">6</span> Video</span>
            </div>
        </div>
        <div class="row">
            <div class="content-overview-name" class="col">
                <span>Instruktur: <span class="content-overview-num" style="margin-left: 1rem;">Justin Thames</span></span>
            </div>
        </div>

        <!-- Topic Box -->
        <div class="row">
            <div id="topic-box" class="col-9">
                <!-- BUat defaultnya topic 1, lalu nanti berubah klo kita klik link lain -->
                <div class="row">
                    <a href="#" class="col topic-num active">Topic 1</a>
                    <a href="#" class="col topic-num">Topic 1</a>
                    <a href="#" class="col topic-num">Topic 1</a>
                    <a href="#" class="col topic-num">Topic 1</a>
                    <a href="#" class="col topic-num">Topic 1</a>
                    <a href="#" class="col topic-num">Topic 1</a>
                </div>

                <div id="topic-content" class="row">
                    <div class="col-12 topic-title">Topic 1</div>
                    <div class="col-12 topic-name">Pengenalan Statistika</div>
                    <div class="col-12 topic-video"></div>
                    <div class="col-12 file d-flex align-items-center">
                        <input class="form-check-input" type="checkbox" value="" id="topic-content-checkbox">
                        <a href="#" class="topic-content-link">Slide Pengenalan Statistika</a>
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