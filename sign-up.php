<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title Icon -->
    <link rel="shortcut icon" href="img/belajarsantailogo.ico" type="image/x-icon">

    <!-- Bootstrap's CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap's JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>BelajarSantai | Sign Up</title>

    <style>
        body {
            background-color: #3590F3;
            font-family: Montserrat;
            font-size: 100%;
            display: inline-block;
            height: 100vh;
        }

        #main-box {
            background-color: #FFFFFF;
            width: 32.5rem; /* 520px */
            height: 35rem; /* 560px */
            border-radius: 10px;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        #welcome {
            font-weight: 700;
            font-size: 1.25rem;
            line-height: 1.5rem;
            display: block;
            margin: 1rem 0 0 0;
        }

        #message {
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.25rem;
            margin: 0.5rem 0 1rem 0;
            color: #7A7A7A;
        }

        /* Form */
        .label-form {
            padding: 0 0 0 4.5rem;
        }
        label#email-label, label#username-label {
            margin: 1rem 0 0 0;
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.25rem;
            text-align: left;
        }
        input#email, input#username {
            width: 25rem;
            height: 2.5rem;
            border: 2px solid #3590F3;
            border-radius: 0.625rem;
            margin: 0.5rem 0 0 0;
            padding: 0 1rem;
        }
        input#lanjut-button {
            width: 13rem;
            height: 3rem;
            background: #F39835;
            border-radius: 0.625rem;
            border: none;
            font-weight: 700;
            font-size: 1rem;
            color: #FFFFFF;
            margin: 2.5rem 0 0 0;
        }
        input#lanjut-button:hover {
            background: #D5852E;;
            color: #FDF2E6;
        }
        .sign-acc-row {
            margin: 0.5rem 0 0 0;
        }
        #sign-acc-q {
            font-weight: 600;
            font-size: 0.8rem;
            line-height: 1rem;
            color: #7A7A7A;
        }
        a#sign-acc {
            font-weight: 700;
            color: #F39835;
            text-decoration: none;
        }
        a#sign-acc:hover {
            color: #D5852E;
            text-decoration: underline;
        }
    </style>
</head>

<body class="container-fluid d-flex main_container justify-content-center align-items-center">
    <div id="main-box" class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <!-- Image -->
                <img src="img/belajarsantailogo-header.svg" alt="logobelajarsantai" style="width: 7.5rem; height: 7.5rem; display: block; margin: 1.5rem 0 0 0; text-align: center; ">
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <!-- Welcome -->
                <span id="welcome">
                    Selamat Datang Kembali!
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <!-- Message -->
                <span id="message">
                    Ayo masuk dan belajar bersama
                </span>
            </div>
        </div>

        <form action="sign-up-password.php" method="POST">
            <div class="row">
                <div class="label-form col-12 text-start">
                    <!-- Label -->
                    <label id="email-label" for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Input box -->
                    <input type="text" id="email" name="email" value="">
                </div>
            </div>
            <div class="row">
                <div class="label-form col-12 text-start">
                    <!-- Label -->
                    <label id="username-label" for="username">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" id="username" name="username">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Submit -->
                    <input id="lanjut-button" type="submit" value="Lanjut" href="sign-up-password.php">
                </div>
            </div>
        </form>

        <div class="row sign-acc-row">
            <div class="col-12">
                <span id="sign-acc-q">Sudah mempunyai akun? <a href="sign-in.php" id="sign-acc">Masuk</a></span>
            </div>
        </div>
    </div>
</body>
</html>