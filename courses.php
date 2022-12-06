<?php
    $this_page='kursus'; /* Ingat pindahin ke dalam if logged in nya ya */
    require("template.php"); /* Ingat pindahin ke dalam if logged in nya ya */

    // Authentication
    // require('../config.php');
    // if(is_logged_in()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BelajarSantai | Kursus</title>
    <style>
        #courses {
            margin: 0;
            padding: 0;
        }
        #available-courses {
            margin: 2.5rem 0 0 0;
            padding: 0;
        }
        .page-tabs {
            font-size: 1.563rem; /* 25px */
            font-weight: 700;
            line-height: 1.905rem; /* 30.48px */
            color: #F39835;
        }
        .course-box {
            margin: 1.125rem 2.25rem 0 0;/* 18px 36px 0 0 */
            height: 15.5rem; /* 248px */
            width: 15.5rem; /* 248px */
            border-radius: 0.625rem; /* 10px */
            box-shadow: 0px 0px 0px 0px #0000001A, 0px 1px 2px 0px #0000001A, 0px 3px 3px 0px #00000017, 0px 7px 4px 0px #0000000D, 0px 13px 5px 0px #00000003, 0px 20px 6px 0px #00000000;
        }
        .course-box:hover {
            box-shadow: 0px 0px 0px 0px #0000001A, 0px 2px 4px 0px #0000001A, 0px 7px 7px 0px #00000017, 0px 16px 9px 0px #0000000D, 0px 28px 11px 0px #00000003, 0px 44px 12px 0px #00000000;
        }
        .course-pic {
            width: 15.5rem; /* 248px */
            height: 10rem; /* 160px */
            border-radius: 0.625rem 0.625rem 0 0; /* 10px 10px 0 0 */
            background: url(img/statistika-course-pic.png);
        }
        .course-name-instructor{
            margin: 1rem 0 0 0;
        }
        .course-name-instructor #course-title{
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.219rem; /* 19.5px */
        }
        .course-name-instructor #course-instructor {
            font-size: 0.75rem; /* 12px */
            font-weight: 700;
            line-height: 0.914rem; /* 14.63px */
        }
        #available-courses-pic {
            margin: 2.5rem 0 1.5rem 0;
        }
        #available-courses-text {
            font-size: 1.25rem;
            font-weight: 600;
            line-height: 1.524rem;
            color: #3590F3;
        }
    </style>
</head>
<body>
    <!-- This is Content Section -->
    <main id="content" class="container-fluid">
        <!-- Start here for content in each file -->

        <!-- Kursus Saya -->
        <div class="row">
            <div id="courses">
               <div class="col-12 page-tabs">Kursus Saya</div> 
                <div class="col-12 d-flex">
                    <!-- Kyknya bs taru looping utk generate boxnya -->
                    <div class="col-3 course-box">
                        <div class="course"> 
                            <!-- Kayaknya ini isi2nya bs pake db -->
                            <div class="course-pic"></div>
                            <div class="course-name-instructor text-center">
                                <span id="course-title">Statistika</span>
                                <br>
                                <span id="course-instructor">Instruktur: <span style="font-weight: 600;">Justin Thames</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="available-courses">
                <div class="col-12 page-tabs">
                    Kursus yang Tersedia
                </div>
                <div class="col justify-content-center">
                    <img id="available-courses-pic" src="img/no-course-available.svg" alt="no courses available">
                    <div id="available-courses-text" class="row">Tidak ada kursus yang tersedia saat ini :(</div>
                </div>
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