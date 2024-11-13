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
                                <center><h1 class="page-head-line"><strong>LOGIN FOR USERS</strong></h1></center>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">

                                <form role="form" action="allLogin_info.php" method="POST">
                                    <div class="row">
                                        <br>
                                        <div class="col-md-4 ">
                                            <div class="alert alert-info text-center">
                                                <h4> Doctor Login</h4>
                                                <hr />
                                                <i class="fa fa-user-md" style="font-size:100px;color:lightblue"></i>

                                                <hr />

                                                <button type="submit" class="btn btn-info btn-md" name="Doctor">Click Here To Login </button>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="alert alert-danger text-center">
                                                <h4> Patient Login</h4>
                                                <hr />
                                                <i class="fa fa-male" style="font-size:100px;color:red"></i>

                                                <hr />
                                                <button type="submit" class="btn btn-danger btn-md" name="Patient">Click Here To Login </button>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="alert alert-success text-center">
                                                <h4>Lab login</h4>
                                                <hr />
                                                <i class="fa fa-medkit" style="font-size:100px;color:green"></i>
                                                <hr />
                                                <button type="submit" class="btn btn-success btn-md " name="Lab">Click Here To Login </button>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="row-md-2 col-md-6 ">
                                        </div>
                                        <div class="row-md-2 col-md-6 ">
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0 end-0">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <br><br>
                                        <div class="col-md-10 ">
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0 end-0">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <br><br>
                                        <div class="col-md-10 ">
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0 end-0">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <br><br>
                                        <div class="col-md-10 ">
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0 end-0">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <br><br>
                                        <div class="col-md-10 ">
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0 end-0">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <br><br>
                                        <div class="col-md-10 ">
                                        </div>

                                        <div class="col-md-2 ">
                                            <div class="position-relative">
                                                <div class="position-absolute bottom-0 end-0">
                                                    <button type="submit" class="btn btn-danger float-right  btn-md" name="admin">Administrator Login </button>

                                                </div>
                                            </div>
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

    <?php include('footer.php'); ?>
</body>

</html>