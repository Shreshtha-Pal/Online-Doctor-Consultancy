<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIGROW</title>
    <?php include('links.php'); ?>

</head>

<body>
    <div id="wrapper">
        <?php include('header.php'); ?>
        <?php include('OuterSidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center><h1 style="font-family:'Book Antiqua'" class="page-head-line"><strong>DASHBOARD</strong></h1></center>
                            </div>
                        </div>
                        <br>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="main-box mb-red">
                                    
                                        <i class="fa fa-user-md fa-5x"></i>
                                        <h5 style="font-family:'Book Antiqua'">Registered Doctor</h5>
                                        <h5 style="font-family:'Book Antiqua'">
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = "Select * from tbl_doctor";

                                            if ($result = mysqli_query($conn, $sql)) {
                                                $rowcount = mysqli_num_rows($result);
                                                printf("%d", $rowcount);
                                            }
                                            mysqli_close($conn);
                                            ?>
                                        </h5>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="main-box mb-dull">
                                    
                                        <i class="fa fa-male fa-5x"></i>
                                        <h5 style="font-family:'Book Antiqua'">Registered Patient</h5>
                                        <h5 style="font-family:'Book Antiqua'">
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = "Select * from tbl_patient";

                                            if ($result = mysqli_query($conn, $sql)) {
                                                $rowcount = mysqli_num_rows($result);
                                                printf("%d", $rowcount);
                                            }
                                            mysqli_close($conn);
                                            ?>
                                        </h5>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="main-box mb-pink">
                                    
                                        <i class="fa fa-ambulance fa-5x"></i>
                                        <h5 style="font-family:'Book Antiqua'">Total Ambulance</h5>
                                        <h5 style="font-family:'Book Antiqua'">
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = "Select * from tbl_ambulance";

                                            if ($result = mysqli_query($conn, $sql)) {
                                                $rowcount = mysqli_num_rows($result);
                                                printf("%d", $rowcount);
                                            }
                                            mysqli_close($conn);
                                            ?>
                                        </h5>
                                    
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="main-box mb-pink">
                                    
                                        <i class="fa fa-medkit fa-5x"></i>
                                        <h5 style="font-family:'Book Antiqua'">Registered Pathology</h5>
                                        <h5 style="font-family:'Book Antiqua'">
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = "Select * from tbl_lab";

                                            if ($result = mysqli_query($conn, $sql)) {
                                                $rowcount = mysqli_num_rows($result);
                                                printf("%d", $rowcount);
                                            }
                                            mysqli_close($conn);
                                            ?>
                                        </h5>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="main-box mb-dull">
                                    
                                        <i class="fa fa-hospital-o fa-5x"></i>
                                        <h5 style="font-family:'Book Antiqua'">Booked Appointment</h5>
                                        <h5 style="font-family:'Book Antiqua'">
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = "Select * from patient_app_details";

                                            if ($result = mysqli_query($conn, $sql)) {
                                                $rowcount = mysqli_num_rows($result);
                                                printf("%d", $rowcount);
                                            }
                                            mysqli_close($conn);
                                            ?>
                                        </h5>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="main-box mb-red">
                                    
                                        <i class="fa fa-plus-square fa-5x"></i>
                                        <h5 style="font-family:'Book Antiqua'">Clinic/Department</h5>
                                        <h5 style="font-family:'Book Antiqua'">

                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = "Select * from doc_department";

                                            if ($result = mysqli_query($conn, $sql)) {
                                                $rowcount = mysqli_num_rows($result);
                                                printf("%d", $rowcount);
                                            }
                                            mysqli_close($conn);
                                            ?>

                                        </h5>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php include('footer.php'); ?>
</body>

</html>