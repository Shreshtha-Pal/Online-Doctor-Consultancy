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

    <link href="resource/css/time/bootstrap-clockpicker.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <?php include('header.php'); ?>
        <?php include('dr_Sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="font-family:'Book Antiqua'">Welcome</h1>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <br>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Schedule
                            </div>


                            <div class="panel-body">
                                <form role="form" action="schedule_save.php" method="post">

                                    <div class="form-group">
                                        <label>Date</label>
                                        <input class="form-control" type="Date" name="appdate">

                                    </div>

                                    <div class="form-group">
                                        <label>Start Time</label>
                                        <input class="form-control" type="time" name="apptimefrom">

                                    </div>
                                    <div class="form-group">
                                        <label>End Time</label>
                                        <input class="form-control" type="time" name="apptimeto">

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <button type="submit" class="btn btn-info center-block" name="upload">Save</button>
                                            <br>
                                        <?php
                                            if (isset($_SESSION['message'])) 
                                            {
                                                echo $_SESSION['message'];
                                                session_unset();
                                                session_destroy();
                                            }
                                        ?>
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
    <?php include('footer.php'); ?>

</body>

</html>