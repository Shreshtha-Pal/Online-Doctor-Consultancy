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
        <?php include('OuterSidebar.php');?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line"><strong>REGISTRATION FOR USERS</strong></h1>
                                    <center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row">
                                    <br>
                                    <div class="col-md-4 ">
                                        <div class="alert alert-info text-center">
                                            <h4> Doctor Registration</h4>
                                            <hr />
                                            <i class="fa fa-user-md" style="font-size:100px;color:lightblue"></i>

                                            <hr />
                                            <a href="dr_registration.php" class="btn btn-info">Click Here for Registration</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="alert alert-danger text-center">
                                            <h4> Patient Registration</h4>
                                            <hr />
                                            <i class="fa fa-male" style="font-size:100px;color:red"></i>

                                            <hr />
                                            <a href="patient_registration.php" class="btn btn-danger">Click Here for Registration</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="alert alert-success text-center">
                                            <h4>Lab Registration</h4>
                                            <hr />
                                            <i class="fa fa-medkit" style="font-size:100px;color:green"></i>
                                            <hr />
                                            <a href="lb_registration.php" class="btn btn-success">Click Here for Registration</a>
                                        </div>
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