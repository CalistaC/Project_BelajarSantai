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

    <style>
        body {
            background-color: #FFFFFF;
            color: #000000;
            font-family: Montserrat;
            font-size: 100%;
        }

        /* Header */
        header {
            width: 100%;
            height: 3rem; /* 48px */
            margin: 0;
            padding: 0;
            background-color: #3590F3;
            color: white;
            display: inline-block;
            z-index: 1032 !important;
        }
        #header-logo {
            margin: 0 0 0 1rem; /* 0 0 0 16px */
            padding: 0;
            display: inline-block;
            vertical-align: middle;
        }
        .header-brand {
            margin: 0 0 0 0.25rem; /* 4px */
            padding: 0;
            display: inline-block;
            font-family: montserrat;
            font-weight: 700;
            font-size: 1rem; /* 16px */
        }
        #header-account {
            display: inline-block;
            font-weight: 500; /* medium */
            font-size: 1rem; /* 16px */
            margin: 0 2.5rem 0 0; /* 0 40px 0 0 */
        }
        .account-img {
            width: initial;
            height: initial;
            display: inline-block;
            margin: 0 0.25rem 0 0; /* 0 4px 0 0 */
            padding: 0;
        }
        .nav-link{
            display: inline-block;
            margin: 0;
            padding: 0;
        }
        .dropdown-menu {
            width: 10rem; /* 160px */
            background-color: #E6F1FD;
            border-radius: 0.625rem; /* 10px */
            border: none;
            padding: 0;
        }
        .dropdown-item {
            color: #F39835;
            font-weight: 700;
            font-size: 1rem; /* 16px */
            border-radius: 0.625rem; /* 10px */
        }
        .dropdown-item:hover {
            color: #D5852E;
            background-color: #CCE3FC;
            border-radius: 0.625rem; /* 10px */
        }
        .logout {
            width: initial;
            height: initial;
        }
        .dropdown-item .logout-default {
            display: inline-block;
        }
        .dropdown-item:hover .logout-default {
            display: none;
        }
        .dropdown-item .logout-hover {
            display: none;
        }
        .dropdown-item:hover .logout-hover {
            display: inline-block;
        }

        /* Navigation bar*/
        aside {
            margin: 0;
            padding: 0;
            width: 12.5rem; /* 200px */
            background-color: #68ACF6;
            position: fixed;
            height: 100%;
            font-size: 1rem; /* 16px */
            top: 3rem; /* 64px */
            z-index: 1031 !important;
        }
        #sidebar {
            position: relative;
            top: 3rem; /* 48px */
        }
        .list-group-item {
            height: 4rem; /* 64px*/
            width: 12.5rem; /* 200px */
            padding: 0 0 0 2rem; /* 32px */
            border-radius: 0 !important;
            background-color: #68ACF6 !important;
            border: none;
            color: #FFFFFF;
            font-family: montserrat;
            font-weight: 600; /* semibold */
        }
        .list-group-item:hover:not(.active), .list-group-item.active {
            background-color: #E6F1FD !important;
            color: #3590F3 !important;
        }
        #footer {
            position: absolute;
            bottom: 2rem;
            left: 1.875rem; /* 30px */
            font-size: 0.64rem; /* 10.24px */
            font-weight: 700;
            line-height: 0.78rem; /* 12.48px */
            color: #FFFFFF;;
        }

        /* Content */
        #content {
            padding: 3rem 0 0 12.5rem; /* 48px 0 0 200px */
            margin:  2rem 0 0 2rem; /* 32px 0 0 32px */
        }
    </style>
</head>
<body class="d-flex">
    <div class="container-fluid main_container d-flex">
        <!-- Header -->
        <header class="fixed-top d-flex justify-content-between align-items-center">
            <!-- BelajarSantai Logo -->
            <nav id="header-logo">
                <img src="img/belajarsantailogo-header.svg" alt="Logo" style="width: initial; height: initial; display: inline-block;">
                <span class="header-brand align-middle">BelajarSantai</span>
            </nav>
            <!-- User Account Icon and Dropdown -->
            <nav id="header-account">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/account-icon.svg" alt="Account Icon" class="account-img">
                        <span class="align-middle">Juvita Theodra</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="">
                            <img src="img/logout-default.svg" alt="Account Icon" class="logout logout-default">
                            <img src="img/logout-hover.svg" alt="Account Icon Hover" class="logout logout-hover">
                            Logout
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Side Navigation Bar -->
        <aside class="d-flex fixed-top">
            <!-- Sidebar Buttons -->
            <nav id="sidebar" class="list-group">
                <button type="button" class="list-group-item list-group-item-action <?php if($this_page=='beranda'){echo 'active';}?>" onclick="location.href='home.php'">
                    Beranda
                </button>
                <button type="button" class="list-group-item list-group-item-action <?php if($this_page=='kursus' or $this_page=='kursus-detail'){echo 'active';}?>" onclick="location.href='courses.php'">
                    Kursus
                </button>
                <button type="button" class="list-group-item list-group-item-action <?php if($this_page=='tentang-kami'){echo 'active';}?>" onclick="location.href='about-us.php'">
                    Tentang Kami
                </button>
            </nav>
            <!-- Footer -->
            <footer id="footer" class="text-center">
                <span>
                    Copyright &copy; BelajarSantai
                </span>
            </footer>
        </aside>

        <!-- 
        Continue with content from each pages
        There's no div and body closing tag
        This is for continuation in other pages using this page as template
        -->
</html>