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

    <title>BelajarSantai | Sign In</title>

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
            width: 32.5rem;
            /* 520px */
            height: 35rem;
            /* 560px */
            border-radius: 10px;
            padding: 0;
            margin: 0;
        }

        .form-text-box {
            width: 400px;
            height: 40px;
            background-color: hotpink;
        }

        #welcome {
            font-size: 1.563rem;
            font-weight: 700;
            line-height: 1.875rem;
            display: block;
        }

        #message {
            font-weight: 500;
            font-size: 1rem;
            line-height: 1.25rem;
            margin: 0.5rem 0 0 0;
            color: #7A7A7A;
        }
    </style>
</head>

<body class="container-fluid d-flex main_container justify-content-center align-items-center">
    <div id="main-box" class="justify-content-center container">
        <div class="row">
            <div class="col-12">
                <!-- Image -->
                <img src="img/belajarsantailogo-header.svg" alt="logobelajarsantai" style="width: 7.5rem; height: 7.5rem; display: block; margin: 1.5rem 0 0 0;">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12 justify-content-center">
                <!-- Welcome -->
                <span id="welcome">
                    Halo!
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-12 justify-content-center">
                <!-- Message -->
                <span id="message">
                    Mari belajar bersama di BelajarSantai
                </span>
            </div>
        </div>

        <form action="">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <!-- Email -->
                    <div class="row">
                        <label for="email">Email:</label>
                    </div>
                    <div class="">
                        <input type="text" id="email" name="email" value="">
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 justify-content-center">
                    <!-- Username -->
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username" value="">

                </div>
            </div>

            <div class="row">
                <div class="col-12 justify-content-center">
                    <!-- Lanjut -->
                    <input type="submit" value="Submit">

                </div>
            </div>
        </form>

    </div>
</body>

</html>