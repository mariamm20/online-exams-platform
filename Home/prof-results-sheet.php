<?php
session_start();
include('../Controllers/dbconnection.class.php');
include('../Controllers/professorCont.class.php');
include('../Views/professorView.class.php');
$professor = new professorView();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Exams Platform </title>
    <link rel="icon" href="../assests/cartoon.ico" />
    <link rel="stylesheet" href="../assests/node_modules/aos/dist/aos.css" />
    <link href="../assests/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assests/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assests/global.css" />
    <link rel="stylesheet" href="css/admin.css" />
</head>

<body>
    <div id="app">
        <?php include('../includes/header_prof_stud.inc.php'); ?>

        <section class="container" data-aos="fade-up">
            <div class="table-content">

                <table class="table  table-responsive ">

                    <tbody>
                        <tr class="table-head">
                            <td scope="col">#</td>
                            <td scope="col">Student Name</td>
                            <td scope="col">Acadimic&nbsp;ID</td>
                            <td scope="col">Level</td>
                            <td scope="col">Department</td>
                            <td scope="col">Student Result</td>
                            <td scope="col">Total Marks</td>
                        </tr>

                        <?php $professor->showResultSheet($_GET['exam_id']); ?>

                    </tbody>
                </table>



            </div>
        </section>





    </div>
    <!--Scripts part-->

    <script src="../assests/node_modules/aos/dist/aos.js"></script>
    <script src="../assests/global.js"></script>
    <script src="../assests/bootstrap.bundle.min.js"></script>
</body>

</html>