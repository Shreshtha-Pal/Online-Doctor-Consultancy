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
    <style>
        #panel_heading {
            font-weight: bold;
        }
    </style>

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
                                    <h1 class="page-head-line">PATIENT REGISTRATION</h1>
                                </center>
                            </div>
                        </div>

                        <div class="row" style="font-size:15px;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel-body">
                                    <form role="form" action="patient_save.php" method="post" enctype="multipart/form-data">

                                        <?php if (isset($_SESSION['message'])) :
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                        ?>
                                        <?php endif ?>

                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"><strong>BASIC INFORMATION :</strong></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Salutation :</label>
                                                            <select class="form-control form-select" name="salutation" required>
                                                                <option>Select Salutation</option>
                                                                <option>Mr.</option>
                                                                <option>Mrs.</option>
                                                                <option>Miss</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>First Name :</label>
                                                            <input class="form-control" type="text" name="fname" placeholder="Enter First Name" maxlength="22" required>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Middle Name :</label>
                                                            <input class="form-control" type="text" name="mname" placeholder="Enter Middle Name" maxlength="20">
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Last Name :</label>
                                                            <input class="form-control" type="text" name="lname" placeholder="Enter Last Name" maxlength="22" required>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Gender :</label>
                                                            <br>
                                                            <label>
                                                                <input type="radio" name="gender" id="gender" value="Male" required> Male
                                                            </label>

                                                            <label>
                                                                <input type="radio" name="gender" id="gender" value="Female"> Female
                                                            </label>

                                                            <label>
                                                                <input type="radio" name="gender" id="gender" value="Others"> Others
                                                            </label>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Date of Birth :</label>
                                                            <input class="form-control" type="date" name="dob" placeholder="Enter Date of Birth" maxlength="10" required>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Age :</label>
                                                            <input class="form-control" type="number" min="1" max="200" name="age" placeholder="Enter Age" maxlength="20" required>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label for="photo" class="control-label">Photo :</label>
                                                            <input type="file" class="form-control" id="photo" name="file" maxlength="100" required>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Blood Group :</label>
                                                            <select class="form-control form-select" name="blood" required>
                                                                <option>Select Blood Group</option>
                                                                <option>A+</option>
                                                                <option>B+</option>
                                                                <option>AB+</option>
                                                                <option>O+</option>
                                                                <option>A-</option>
                                                                <option>B-</option>
                                                                <option>AB-</option>
                                                                <option>O-</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Email :</label>
                                                            <input class="form-control" type="email" name="email" placeholder="Enter Email" maxlength="50" required>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Mobile Number :</label>
                                                            <input class="form-control" type="text" name="mobile1" placeholder="Enter Mobile Number" maxlength="10" required>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label>Address :</label>
                                                            <textarea class="form-control" rows="1" name="address" placeholder="Enter Address" maxlength="100" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"><strong>USER INFORMATION :</strong></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>Enter User Name :</label>
                                                            <input class="form-control" type="text" name="user" placeholder="Enter User Name" maxlength="50" required>

                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label for="psw1">Password :</label>
                                                            <input class="form-control" type="password" name="password" placeholder="Enter Password" maxlength="50" id="psw1" required>
                                                        </div>

                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label for="psw2">Confirm Password :</label>
                                                            <input class="form-control" type="password" name="cpassword" placeholder="Enter Confirm Password" maxlength="50" id="psw2" required>
                                                            <div class="registrationFormAlert" id="CheckPasswordMatch">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <button type="submit" class="btn btn-success center-block" name="upload">Save</button>
                                                <br>
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

    <?php include('footer.php'); ?>
    <script src="jQuery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function checkPasswordMatch() {
            var password = $("#psw1").val();
            var confirmPassword = $("#psw2").val();
            if (password != confirmPassword) {
                $("#CheckPasswordMatch").html("Passwords does not match..!!");
                $("#CheckPasswordMatch").css('color', 'red');
                $(this).css('color', 'red');
            } else {
                $("#CheckPasswordMatch").html("Passwords match..!!");
                $("#CheckPasswordMatch").css('color', 'green');
                $(this).css('color', 'green');
            }
        }
        $(document).ready(function() {
            $("#psw2").keyup(checkPasswordMatch);
        });
    </script>
</body>

</html>