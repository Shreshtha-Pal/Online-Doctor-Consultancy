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
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Doctor Entry Form
                            </div>
                            <div class="panel-body">
                                <form role="form" action="reg_dr_save.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label>First Name</label>
                                            <input class="form-control" type="text" name="fn">

                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label>Middle Name</label>
                                            <input class="form-control" type="text" name="mn">

                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label>Last Name</label>
                                            <input class="form-control" type="text" name="ln">

                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="email" name="email">

                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label>Mobile</label>
                                            <input class="form-control" type="text" name="mobile">
                                        </div>

                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label for="photo" class="control-label"> Photo</label>
                                        <input type="file" class="form-control" id="photo" name="file">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <br>
                                    <button type="submit" class="btn btn-info" name="upload">Save </button>

                                   



                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <?php 
                                 
                                 if (isset($_SESSION['message']))
                                 {
                                    
                                     echo $_SESSION['message'];
                                     session_unset();
                                     session_destroy();
                                

                                 }    
                                 ?>

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
    <?php include('footer.php'); ?>
</body>

</html>