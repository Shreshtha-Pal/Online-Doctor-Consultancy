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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    
    <script src="jQuery5.js"></script>
    <?php include('links.php'); ?>

</head>

<body>
    <div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('lb_Sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome</h1>
                                </center>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center>
                                            <h4 style="font-family:'Book Antiqua'"><strong>UPLOAD &nbsp; REPORT</strong></h4>
                                        </center>
                                    </div>


                                    <div class="panel-body" style="font-size: 15px;">
                                        <form role="form" action="lb_report_save.php" method="POST" enctype="multipart/form-data">  

                                            <div class="form-group">
                                            <input type="hidden" id="lab" name="lab" value="<?php echo  $_SESSION['lb_slno'];  ?>">

                                                <label>Appointment Date :</label>
                                                <input class="form-control" type="Date" name="lbappdate" id="ptappdate"><br>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Patient Name :</label>

                                                        <select class="form-control form-select" name="ptname" id="ptname" required>
                                                            <option selected>Select patient First</option>

                                                        </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="photo" class="control-label">Upload Report :</label>
                                                <input type="file" class="form-control" id="photo" name="file" maxlength="100" required>
                                            </div>

                                            <div class="form-group">
                                                    <center><button type="submit" class="btn btn-success center-block" name="upload">Save</button></center>
                                            </div>



                                    </div>


                                    <?php if (isset($_SESSION['message'])) :
                                        echo $_SESSION['message'];
                                        unset($_SESSION['message']);
                                    ?>
                                    <?php endif ?>
                                    </form>




                                </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jQuery4.js"></script>

    <?php include('footer.php'); ?>
</body>

</html>