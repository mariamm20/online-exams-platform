<?php
include('../Controllers/dbconnection.class.php');
include('../Controllers/AdminCont.class.php');
include('../Views/AdminView.class.php');
$adminview = new AdminView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link href="../assests/magic-master/dist/magic.min.css" rel="stylesheet"/>
    <link rel="icon" href="../assests/cartoon.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/admin.css" />

</head>

<body>
    <div id="app">
        <div class="d-flex main" data-aos="zoom-in">

            <div class=" divs-container">
              <a class="d-flex col align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi" width="40" height="32">
                  <use xlink:href="#bootstrap"></use>
                </svg>
                </a>
                  <div class="d-flex justify-content-around">
                    <a class="navbar-brand" href="../Home/home.php">
                      Online Exams <br />
                      <span class="platform-word">Platform </span>
      
                    </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                  </button>
                </div>
                
              
              <ul class="navbar-nav nav-pills flex-column mb-auto elements" id="navbarSupportedContent">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../Admin/dashboard.php">
                            <font-awesome-icon icon="fa-solid fa-gauge" /><i class="fa-solid fa-palette"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../Admin/requests.php">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Requests
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../Admin/professors.php">
                            <i class="fa-solid fa-users"></i> Professors
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-current="page" href="../Admin/levels.php">
                            <i class="fa-solid fa-border-all"></i> Levels
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-current="page" href="../Admin/contactus.php">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            Contact Us

                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" aria-current="page" href="../Home/home.php">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign
                            out
                        </a>
                    </li>
                </ul>
            </div>


            <section class="container content ">
                <div class="title">Dashboard</div>
                <div class="dashboard-cards">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-info">Professors</p>
                                <p class="number"><?php $adminview->showProfessorsNumber(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category">Students</p>
                                <p class="number"><?php $adminview->showStudentsNumber(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-warning">Requests</p>
                                <p class="number"><?php $adminview->showRequestsNumber(); ?></p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-success">Finished Exams</p>
                                <p class="number">10</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-circle-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-primary">Success</p>
                                <p class="number">2400</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-thumbs-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <p class="category text-danger">Failure</p>
                                <p class="number">116</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-thumbs-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-img">
                    <img src="img/dashboard.jpg" height="160" />
                </div>
            </section>
        </div>
    </div>
    </div>
    <!--Scripts part-->
    <script src="js/admin.js"></script>
    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>