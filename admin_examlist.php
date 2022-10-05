<!-- Language: PHP -->
<?php
		?>
<!DOCTYPE html>
<html>
    <head>
        <title>Erovoutika Exam Website - Admin</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
            crossorigin="anonymous"
        />

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="src/css/admin_examlist_style.css">
    </head>

    <header class="header" id="header">
            <div class="header_toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div id="i--account--admin">
                <div class="header_img">
                    <img src="src/images/Display Picture Icon.png" alt="display picture">
                </div>
                <div>
                    <button type="button" class="btn btn-outline-light ms-4 mt-2">
                        <a href="#" id="i--button--logout">Logout</a>
                    </button>
                </div>
            </div>
    </header>

    <body id="body-pd">

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <i>
                            <img src="src/images/Logo.png" alt="Erovoutika Logo" id="i--logo--erovoutika">
                        </i>
                        <span class="nav_logo-name fs-5">Erouvotika</span>
                    </a>
                    <div class="nav_list">
                        <a href="#" class="nav_link">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Dashboard</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Edit Profile</span>
                        </a>
                        <a href="#" class="nav_link active">
                            <i class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Exam List</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-bookmark nav_icon'></i>
                            <span class="nav_name">Bookmark</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-folder nav_icon'></i>
                            <span class="nav_name">Files</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                            <span class="nav_name">Stats</span>
                        </a>
                    </div>
                </div>
                <button type="button" class="btn btn-primary ms-3 mb-3">
                    <i class="bi bi-pencil-square"></i>
                    <span class="nav_name" id="i--label--signout">Sign Up</span>
                </button>
            </nav>
        </div>

        <!--Container Main start-->
        <div class="height-100" id="i--container--mainContent">
            <div class="container my-3">
                <!-- Exam List -->
                <div class="row mt-5">
                    <div class="col display-6">
                        EXAM LIST
                    </div>
                </div>
                <!-- Blue Line -->
                <div class="row">
                    <div class="col-3" id="i--line--blue"></div>
                </div>
                <!-- Edit Banners -->
                <div class="row my-2 gy-3">
                    <div class="col-12">
                        <div class="row">
                            <div class="card">
                                <img src="src/images/Logo.png" alt="Admin" class="rounded-circle ms-1 mt-2 mb-2" width="150">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-9 col-lg-10 mt-3">
                                            <h5 class="card-title text-primary text-uppercase fs-1 fw-bold">EXAM NAME</h5>
                                            <p class="card-text text-primary fs-5">
                                              Exam Information
                                            </p>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <a href="#" class="btn btn-primary" id="i--button--edit">Edit Exam</a>
                                            <br>
                                            <a href="#" class="btn btn-primary mt-2" id="i--button--check">Check Exam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="card">
                                <img src="src/images/Logo.png" alt="Admin" class="rounded-circle ms-1 mt-2 mb-2" width="150">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-9 col-lg-10 mt-3">
                                            <h5 class="card-title text-primary text-uppercase fs-1 fw-bold">EXAM NAME</h5>
                                            <p class="card-text text-primary fs-5">
                                              Exam Information
                                            </p>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <a href="#" class="btn btn-primary" id="i--button--edit">Edit Exam</a>
                                            <br>
                                            <a href="#" class="btn btn-primary mt-2" id="i--button--check">Check Exam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="card">
                                <img src="src/images/Logo.png" alt="Admin" class="rounded-circle ms-1 mt-2 mb-2" width="150">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-9 col-md-9 col-lg-10 mt-3">
                                            <h5 class="card-title text-primary text-uppercase fs-1 fw-bold">EXAM NAME</h5>
                                            <p class="card-text text-primary fs-5">
                                              Exam Information
                                            </p>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <a href="#" class="btn btn-primary" id="i--button--edit">Edit Exam</a>
                                            <br>
                                            <a href="#" class="btn btn-primary mt-2" id="i--button--check">Check Exam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Container Main end-->

        <!-- Custom Javascript -->
        <script src="src/javascript/admin_home_script.js"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    </body>

     <footer>
        <!-- This is where the footer is -->
    </footer>
</html>
<?php

?>
