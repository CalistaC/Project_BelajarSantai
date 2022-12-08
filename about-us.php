<?php
    $this_page='tentang-kami'; /* Ingat pindahin ke dalam if logged in nya ya */
    require("template.php"); /* Ingat pindahin ke dalam if logged in nya ya */

    // Authentication
    // require('../config.php');
    // if(is_logged_in()){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BelajarSantai | Tentang Kami</title>
    <style>
        .logo-pic {
            margin: 0;
            padding: 0;
        }
        #company-profile {
            font-weight: 500;
            font-size: 20px;
            line-height: 24px;
            text-align: center;
            margin: 1rem 0 0 0;
            padding: 0;
        }
        #company-profile-bold {
            font-weight: 700;
        }
        .vision-mission {
            margin: 1rem 0 0 0;
        }
        #vision, #mission {
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            text-align: center;
        }
        #vision-detail, #mission-detail {
            font-weight: 500;
            font-size: 16px;
            line-height: 20px;
            text-align: center;
        }
        #discord-button {
            width: 17.5rem;
            height: 4rem;
            border-radius: 0.625rem;
        }
    </style>
</head>
<body>
    <!-- This is Content Section -->
    <main id="content" class="container-fluid">
        <!-- Start here for content in each file -->

        <div class="row">
            <div class="col logo-pic d-flex justify-content-center">
                <img src="img/belajarsantailogo-header.svg" alt="Logo BelajarSantai" style="width: 10rem; height: 10rem;">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-8 logo-pic">
                <h1 id="company-profile"><span id="company-profile-bold">BelajarSantai</span> adalah sebuah platform edukasi yang dibuat oleh Kelompok BelajarSantai sebagai proyek UAS di tahun 2022.</h1>
            </div>
        </div>

        <div class="row vision-mission d-flex justify-content-center">
            <div class="col-3 logo-pic">
                <h2 id="vision">VISI</h2>
                <p id="vision-detail">Calon mahasiswa yang memiliki persiapan dalam statistika</p>
            </div>
            <div class="col-3 logo-pic">
                <h2 id="mission">MISI</h2>
                <p id="mission-detail">Memberikan perkenalan terhadap statistika, metode penelitian yang dapat dilakukan, serta pemahaman betapa pentingnya statistika dalam penelitian</p>
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