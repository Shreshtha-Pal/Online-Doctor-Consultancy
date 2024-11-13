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
                                <center>
                                    <h1 class="page-head-line"><strong>LOGIN FOR PATIENTS</strong></h1>
                                </center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <form role="form" action="allLogin_info.php" method="POST">
                                    <div class="row">
                                        <br>
                                        <div class="col-md-4 ">
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="alert alert-danger text-center">
                                                <h4> Patient Login</h4>
                                                <hr />
                                                <i class="fa fa-male" style="font-size:144px;color:red"></i>
                                                <!-- <img src="/doc_img/Picture 005.jpg" alt="Missing"> -->
                                                <hr />
                                                <button type="submit" class="btn btn-danger btn-md" name="Patient">Click Here To Login </button>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">

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