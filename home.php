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
    <title>Beranda BelajarSantai</title>
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
            border: 1px solid rgba(217, 217, 217, 0.5);
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
        #courses {
            margin: 2rem 0 0 0; /* 32px 0 0 0 */
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
            margin: 18px 0 0 0;
            height: 248px;
            width: 248px;
            border-radius: 10px;
            box-shadow: 0px 0px 0px 0px #0000001A, 0px 1px 2px 0px #0000001A, 0px 3px 3px 0px #00000017, 0px 7px 4px 0px #0000000D, 0px 13px 5px 0px #00000003, 0px 20px 6px 0px #00000000;
        }
    </style>
</head>
<body>
    <!-- This is Content Section -->
    <main id="content" class="container-fluid">
        <!-- Start here for content in each file -->
        <div class="row">
            <div id="greeting" class="col">
                <span>Selamat datang <span id="acc-name">Juvita Theodra</span></span>
                <br>
                <span id="greeting-bottom">Mari belajar!</span>
            </div>
        </div>

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

        <div class="row">
            <div id="courses">
               <div class="col-12 page-tabs">
                    <a href="#" class="page-tabs-link">Kursus Saya</a>
                </div> 
                <div class="col-12">
                    <div class="col course-box">
                        <div class="course">
                            EHE
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