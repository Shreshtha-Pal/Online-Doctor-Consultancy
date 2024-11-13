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
    <link rel="stylesheet" href="ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
    <script src="jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="captcha.css">
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
                                    <h1 class="page-head-line">Welcome</h1>
                                </center>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-10 col-md-offset-1 ">
                                <section id="captcha">
                                    <div class="title">
                                        <h1 style="font-family:'Book Antiqua'">
                                            <strong>
                                                <?php
                                                if (isset($_SESSION['user'])) {
                                                    echo $_SESSION['user'];
                                                    //session_unset();
                                                    //session_destroy();
                                                }
                                                ?>
                                                Login
                                            </strong>
                                        </h1>
                                    </div><!-- ./title -->

                                    <!-- default form layout -->
                                    <strong>
                                        <form class="captcha-from" action="LoginCheck.php" method="POST" style="font-size: 16px;">
                                            <div class="form-group">
                                                <?php
                                                if (isset($_SESSION['invalid'])) {
                                                    echo $_SESSION['invalid'];
                                                    unset($_SESSION['invalid']);
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="firstName">User Name:</label>
                                                <input type="text" name="user" maxlength="25" class="form-control" id="firstName" onkeypress="return isAlpha(event);" required autocomplete="off" placeholder="First name ...">
                                            </div>


                                            <div class="form-group">
                                                <label for="pwd">Password:</label>
                                                <input type="password" name="pass" maxlength="25" class="form-control" id="pwd" required autocomplete="off" placeholder="Enter password ...">
                                            </div>


                                            <div class="form-group">
                                                <label for="pwd">Captcha:</label>

                                                <!-- input captcha -->
                                                <div class="captcha-code">
                                                    <div class="code">
                                                        <div class="dynamic-code"></div>
                                                    </div>
                                                    <div class="captcha-reload">
                                                        <i class="fa fa-refresh"></i>

                                                    </div>
                                                </div>
                                                <div class="captcha-input">
                                                    <input type="text" class="form-control" id="captcha-input" required autocomplete="off" placeholder="Enter captcha code ...">
                                                    <span id="errCaptcha"></span>
                                                </div>

                                            </div>


                                            <br>
                                            <center><button type="submit" class="btn btn-success" name="Login">Login</button></center>



                                        </form>
                                    </strong>


                                </section><!-- #/main -->

                                <script src="captcha.js"></script>


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