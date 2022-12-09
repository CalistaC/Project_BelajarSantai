<?php
    // Authentication
    require('config.php');
    if(is_logged_in()){
        $this_page='tentang-kami'; /* Ingat pindahin ke dalam if logged in nya ya */
        require("template.php"); /* Ingat pindahin ke dalam if logged in nya ya */
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
            font-size: 1.25rem;
            line-height: 1.5rem;
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
            font-size: 1.25rem;
            line-height: 1.5rem;
            text-align: center;
        }
        #vision-detail, #mission-detail {
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.25rem;
            text-align: center;
        }
        .contact-us {
            margin: 3rem 0 0 0;
        }
        #more-info, #join-discord {
            font-weight: 700;
            font-size: 1.25rem;
            line-height: 1.5rem;
            padding: 0;
            margin: 0 0 1rem 0;
        }
        #join-discord {text-align: center;}
        .contact-info {
            margin: 0 0 0.5rem 0;
        }
        #email-link, #ig-link {
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.25rem;
            padding: 0;
            margin: 0 0 0 0.5rem;
        }
        a#email-link, a#ig-link {
            color: #000000;
            text-decoration: none;
        }
        #discord-button {
            width: 17.5rem;
            height: 4rem;
            border-radius: 0.625rem;
            background-color: #F39835;
            color: #FFFFFF;
            border: none;
        }
        #discord-button:hover{
            color: #D9D9D9;
        }
        #discord-button #discord-icon-default {
            display: inline-block;
        }
        #discord-button:hover #discord-icon-default {
            display: none;
        }
        #discord-button #discord-icon-hover {
            display: none;
        }
        #discord-button:hover #discord-icon-hover {
            display: inline-block;
        }
        #discord-text {
            font-weight: 700;
            font-size: 1rem;
            line-height: 1.25rem;
            display: inline-block;
            margin: 0 0 0 1rem;
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

        <div class="row contact-us d-flex justify-content-center">
            <div class="col-4 logo-pic">
                <h2 id="more-info">Untuk informasi lebih lanjut</h2>
                <div class="contact-info">
                    <img src="img/email-icon.svg" alt="Email" style="width: initial; height: initial;">
                    <a id="email-link" href="mailto:belajarsantai@gmail.com">belajarsantai@gmail.com</a>
                </div>
                <div class="contact-info">
                    <img src="img/ig-icon.svg" alt="Email" style="width: initial; height: initial;">
                    <a href="#" id="ig-link">@belajarsantai</a>
                </div>
            </div>
            <div class="col-4 logo-pic">
                <h2 id="join-discord">Masuk komunitas BelajarSantai!</h2>
                <div class="d-flex justify-content-center">
                    <button id="discord-button" class="d-flex justify-content-center align-items-center" onclick="location.href='#'">
                        <div id="discord-icon">
                            <img id="discord-icon-default" src="img/discord-icon-default.svg" alt="Discord Icon">
                        <img id="discord-icon-hover" src="img/discord-icon-hover.svg" alt="Discord Icon">
                        </div>
                        <p id="discord-text">Discord BelajarSantai</p>
                    </button>
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