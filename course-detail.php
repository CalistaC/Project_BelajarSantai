<?php
    $this_page='kursus-detail'; /* Ingat pindahin ke dalam if logged in nya ya */
    require("template.php"); /* Ingat pindahin ke dalam if logged in nya ya */

    // Authentication
    // require('../config.php');
    // if(is_logged_in()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BelajarSantai | Statistika</title>
    <style>
        #course-title {
            font-weight: 700;
            font-size: 39.06px;
            line-height: 48px;
            color: #F39835;
            margin: 0;
            padding: 0;
        }
        #content-overview-title {
            font-weight: 600;
            font-size: 20px;
            line-height: 24px;
            margin: 1.5rem 0 0.5rem 0;
            padding: 0;
        }
        .content-overview-num {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #3590F3;
        }
        .content-overview-name {
            font-weight: 500;
            font-size: 20px;
            line-height: 24px;
            margin: 0.5rem 0 0 0;
            padding: 0;
        }
        #topic-box {
            height: 608px;
            color: #FFFFFF;
            border: 1px solid rgba(217, 217, 217, 0.5);
            border-radius: 10px;    
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
                <span>Instruktur: <span class="content-overview-num" style="margin-left: 72px;">Justin Thames</span></span>
            </div>
        </div>

        <!-- Topic Box -->
        <div class="row">
            <div id="topic-box" class="col-12">
                ehe
            </div>
        </div>
    </main>
    </div>
</body>
</html>


<?php  
// Authentication
// } else {
//     header('Location: ../index.php');
// }
?>