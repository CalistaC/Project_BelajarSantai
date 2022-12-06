<?php
    $this_page='beranda'; /* Ingat pindahin ke dalam if logged in nya ya */
    require("template.php"); /* Ingat pindahin ke dalam if logged in nya ya */

    // Authentication
    // require('../config.php');
    // if(is_logged_in()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BelajarSantai | Beranda</title>
    <style>
        #greeting {
            font-size: 1.563rem; /* 25px */
            font-weight: 600;
            padding: 0;
            line-height: 1.905rem; /* 30.48px */
        }
        #acc-name {
            color: #F39835;
            font-weight: 600;
        }
        #greeting-bottom {
            font-size: 1.25rem; /* 20px */
            font-weight: 600;
            padding: 0.5rem 0 0 0;
            line-height: 1.524rem; /* 24.38px */
        }
        #overview-box {
            height: 12.5rem; /* 200px */
            border: 0.063rem solid rgba(217, 217, 217, 0.5);
            border-radius: 0.625rem; /* 10px */
            margin: 2rem 0 0 0;
            padding: 1rem; /* 16px */
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1), 0px 2px 3px 0px rgba(0, 0, 0, 0.1), 0px 6px 6px 0px rgba(0, 0, 0, 0.09), 0px 14px 9px 0px rgba(0, 0, 0, 0.05), 0px 25px 10px 0px rgba(0, 0, 0, 0.01), 0px 40px 11px 0px rgba(0, 0, 0, 0);
        }
        #overview-upper-text {
            line-height: 1.219rem; /* 19.5px */
            font-size: 1rem; /* 16px */
            font-weight: 500;
        }
        #overview-content {
            margin: 0.75rem 0 0 0; /* 12px 0 0 0 */
        }
        .overview-content-num {
            font-size: 3.815rem; /* 61.04px */
            font-weight: 700;
            line-height: 4.651rem; /* 74.41px */
            color: #3590F3;
        }
        .overview-content-title {
            font-size: 1.25rem; /* 20px */
            font-weight: 600;
            line-height: 1.552rem; /* 24.38px */
        }
        #courses, #our-instructors {
            margin: 2rem 0 0 0;
            padding: 0;
        }
        .page-tabs {
            font-size: 1.563rem; /* 25px */
            font-weight: 700;
            line-height: 1.905rem; /* 30.48px */
        }
        .page-tabs-link {
            color: #F39835;
            text-decoration: none;
        }
        .page-tabs-link:hover {
            color: #D5852E;
            text-decoration: underline;
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
        #add-course-margin {
            margin: 1.125rem 0 0 0; /* 18px 0 0 0 */
        }
        #add-course {
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.219rem; /* 19.5px */
            color: #F39835;
            text-decoration: none;
        }
        #add-course-button {
            margin: 0 0 0.625rem 0; /* 10px */
        }
        #add-course:hover {
            color: #D5852E;
            text-decoration: underline;
        }
        #add-course .add-course-default {
            display: inline-block;
            text-decoration: none;
        }
        #add-course:hover .add-course-default {
            display: none;
            text-decoration: underline;
        }
        #add-course .add-course-hover {
            display: none;
        }
        #add-course:hover .add-course-hover {
            display: inline-block;
        }
        .instructor-box {
            margin: 2.125rem 0 4.125rem 0; /* 34px 0 66px 0 */
            width: 41.5rem; /* 664px */
            height: 10rem; /* 160px */
            border-radius: 0.625rem; /* 10px */
            border: 0.063rem solid rgba(217, 217, 217, 0.5);
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1), 0px 2px 4px 0px rgba(0, 0, 0, 0.1), 0px 8px 8px 0px rgba(0, 0, 0, 0.09), 0px 17px 10px 0px rgba(0, 0, 0, 0.05), 0px 31px 12px 0px rgba(0, 0, 0, 0.01),  0px 48px 14px 0px rgba(0, 0, 0, 0);
        }
        .instructor-pic {
            width: 10rem; /* 160px */
            height: 10rem; /* 160px */
            margin: -1rem 0 0 1rem;
            border-radius: 0.625rem; /* 10px */
            background: url(img/justinthames-instructor.png);
            display: inline-block;
        }
        .instructor-detail {
            display: inline-block;
            width: 27.5rem; /* 440px */
            margin: 0 0 0 1.5rem;
            font-size: 1rem;
            font-weight: 500;
            line-height: 1.219rem; /* 19.5px */
            text-align: justify;
        }
    </style>
</head>
<body>
    <!-- This is Content Section -->
    <main id="content" class="container-fluid">
        <!-- Start here for content in each file -->

        <!-- User Greeting -->
        <div class="row">
            <div id="greeting" class="col">
                <span>Selamat datang <span id="acc-name">Juvita Theodra</span></span>
                <br>
                <span id="greeting-bottom">Mari belajar!</span>
            </div>
        </div>

        <!-- Overview Box -->
        <div class="row">
            <div id="overview-box" class="col-11">
                <div id="overview-upper-text">Anda memiliki... </div>
                <div id="overview-content" class="container">
                    <div class="row text-center">
                        <div class="col-3"></div>
                        <div class="col">
                            <span class="overview-content-num">3</span>
                            <br>
                            <span class="overview-content-title">Kursus</span>
                        </div>
                        <div class="col">
                            <span class="overview-content-num">2</span>
                            <br>
                            <span class="overview-content-title">Tugas</span>
                        </div>
                        <div class="col">
                            <span class="overview-content-num">1</span>
                            <br>
                            <span class="overview-content-title">Video</span>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <!-- Kursus Saya -->
        <div class="row">
            <div id="courses">
               <div class="col-12 page-tabs">
                    <a href="courses.php" class="page-tabs-link">Kursus Saya</a>
                </div> 
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
                    <div id="add-course-margin" class="col-1 d-flex align-items-center">
                        <a href="courses.php" id="add-course" class="text-center">
                            <div id="add-course-button">
                                <img src="img/add-course-button-default.svg" alt="Add Course" class="add-course-default">
                                <img src="img/add-course-button-hover.svg" alt="Add Course Hover" class="add-course-hover">
                            </div>
                            <div>
                                <span>Add Course</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="our-instructors">
                <div class="col-12 page-tabs">
                    <a href="#" class="page-tabs-link">Instruktur Kami</a>
                </div> 
                <div class="col-12">
                    <div class="col instructor-box">
                        <div class="instructor-pic"></div>
                        <div class="instructor-detail">
                            <span>Justin Thames memiliki minat terkait statistika dan pengolahan data menggunakan bahasa pemrograman Python. Salah satu penelitian yang pernah dilakukan dalam topik analisis data adalah dengan menggunakan bahasa pemrograman Python dan aplikasi Rapid Miner.</span>
                        </div>
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
// } else {
//     header('Location: ../index.php');
// }
?>