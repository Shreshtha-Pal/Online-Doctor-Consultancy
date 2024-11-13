<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Appointment</title>
    <?php include('links.php'); ?>
    <link href="resource/css/time/bootstrap-clockpicker.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('dr_Sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome Doctor</h1>
                                </center>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <br>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center>
                                            <h4 style="font-family:'Book Antiqua'"><strong>SCHEDULE</strong></h4>
                                        </center>
                                    </div>



                                    <div class="panel-body" style='font-size:15px'>
                                        <form role="form" action="schedule_save.php" method="post">

                                            <div class="form-group">


                                                <?php
                                                $dept = $_SESSION['department'];
                                                $doct = $_SESSION['doctor_slno'];

                                                ?>

                                                <label>Date :</label>
                                                <input class="form-control" type="Date" name="appdate" id="date_picker">

                                            </div>

                                            <div class="form-group">
                                                <label>Start Time :</label>
                                                <input class="form-control" type="time" name="apptimefrom">

                                            </div>
                                            <div class="form-group">
                                                <label>End Time :</label>
                                                <input class="form-control" type="time" name="apptimeto">

                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <button type="submit" class="btn btn-success center-block" name="upload">Save</button>
                                                    <br>
                                                    <?php if (isset($_SESSION['message'])): 
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                            ?>
                                            <?php endif ?>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min', today);
    </script>
</body>

</html>