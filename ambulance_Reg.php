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
        <?php include('admin_sidebar.php'); ?>


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome Admin</h1>
                                </center>

                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center><h4 style="font-family:'Book Antiqua'"><strong>AMBULANCE'S &nbsp; REGISTRATION</strong></h4></center>
                                    </div>
                                    <div class="panel-body" style="font-size: 15px;">
                                        <form role="form" action="ambulance_save.php" method="post" enctype="multipart/form-data">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label>Ambulance Type :</label>
                                                        <select class="form-control form-select" name="type" required>
                                                            <option selected>Select Ambulance Type</option>
                                                            <option value="Collective">Collective Ambulance</option>
                                                            <option value="Individual">Individual Ambulance</option>
                                                            <option value="Mobile_ICU">Mobile ICU Ambulance</option>
                                                            <option value="Basic_Life_Support">Basic Life Support Ambulance</option>
                                                            <option value="Medical_and_Nursing_care">Medical and Nursing Care Vehicle</option>
                                                            <option value="Hospital_Tent">Hospital Tent</option>
                                                            <option value="MVA_Logistics">MVA Logistics</option>
                                                            <option value="Neonatal_Incubator">Neonatal Incubator</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label>Ambulance Reg Number :</label>
                                                        <input class="form-control" type="text" name="rnumber" placeholder="Enter Ambulance Number" maxlength="20" required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label for="photo" class="control-label">Ambulance Documents :</label>
                                                        <input type="file" class="form-control" id="photo" name="dphoto" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label>Driver Name :</label>
                                                        <input class="form-control" type="text" name="name" placeholder="Enter Driver Name" maxlength="50" required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label>Contact Number :</label>
                                                        <input class="form-control" type="text" name="cnumber" placeholder="Enter Contact Number" maxlength="10" required>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label for="photo" class="control-label">Driving License :</label>
                                                        <input type="file" class="form-control" id="photo" name="lphoto" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <label>Is The AMBULANCE Presently Available ?</label>
                                                        <br>

                                                        <label>
                                                            <input type="radio" name="available" id="available" value="YES" required> YES
                                                        </label>

                                                        <label>
                                                            <input type="radio" name="available" id="available" value="NO"> NO
                                                        </label>

                                                        <label>
                                                            <input type="radio" name="available" id="available" value="Will Be Notified"> Will Be Notified
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">

                                                    <div class="col-md-12 col-sm-12 col-xs-12"> <br>
                                                        <button type="submit" class="btn btn-success center-block" name="upload">Save</button>

                                                        <?php if (isset($_SESSION['message'])) :
                                                            echo $_SESSION['message'];
                                                            unset($_SESSION['message']);
                                                        ?>
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                                    </div>
                                                </div>

                                        </form>
                                    </div>
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