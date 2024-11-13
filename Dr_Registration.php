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
                                    <h1 class="page-head-line">DOCTOR REGISTRATION</h1>
                                </center>
                            </div>
                        </div>

                        <div class="row" style="font-size:15px;">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="panel-body">
                                    <form role="form" action="doctor_save.php" method="post" enctype="multipart/form-data">

                                        <?php if (isset($_SESSION['message'])) :
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                        ?>
                                        <?php endif ?>


                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"> <strong>BASIC INFORMATION :</strong></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Departments :</label>
                                                            <select class="form-control form-select" name="department" required>
                                                                <option selected>Select Departments</option>
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                                                $sql = mysqli_query($conn, "Select `dprt_id`,`dprt_name` from `doc_department` order by dprt_name");
                                                                while ($row = mysqli_fetch_array($sql)) {
                                                                    $id = $row['dprt_id'];
                                                                    $name = $row['dprt_name'];
                                                                ?>
                                                                    <option value='<?php echo $id; ?>'><?php echo $name; ?></option>
                                                                <?php
                                                                } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>First Name :</label>
                                                            <input class="form-control" type="text" name="fname" placeholder="Enter First Name" maxlength="18" required>

                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Middle Name :</label>
                                                            <input class="form-control" type="text" name="mname" placeholder="Enter Middle Name" maxlength="8">

                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Last Name :</label>
                                                            <input class="form-control" type="text" name="lname" placeholder="Enter Last Name" maxlength="18" required>

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
                                                            <label>Mobile :</label>
                                                            <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile Number" maxlength="10" required>

                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Email :</label>
                                                            <input class="form-control" type="email" name="email" placeholder="Enter Email" maxlength="50" required>

                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label for="photo" class="control-label">Photo :</label>
                                                            <input type="file" class="form-control" id="photo" name="profile_photo" required>

                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <label>Specialist In :</label>
                                                            <input class="form-control" rows="1" name="specialist" placeholder="Enter Your Specialisation" maxlength="100" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <label>Time per patient :</label>
                                                            <input class="form-control" type="number" name="time" placeholder="Maximum consultation time (in min)" min="5" max="20" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"><strong>ADDRESS DETAILS :</strong></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>State :</label>
                                                            <select class="form-control form-select" name="state" id="state" required>
                                                                <option selected>Select State</option>
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                                                $sql = mysqli_query($conn, "Select `state_slno`,`state_name` from `tbl_state`");
                                                                while ($row = mysqli_fetch_array($sql)) {
                                                                    $id = $row['state_slno'];
                                                                    $name = $row['state_name'];
                                                                ?>
                                                                    <option value='<?php echo $id; ?>'><?php echo $name; ?></option>
                                                                <?php
                                                                } ?>

                                                            </select>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>District :</label>
                                                            <select class="form-control form-select" name="district" id="district" required>
                                                                <option selected>Select District</option>

                                                            </select>
                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>City :</label>
                                                            <input class="form-control" type="text" name="city" placeholder="Enter city" maxlength="50" required>

                                                        </div>

                                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                                            <label>Pincode :</label>
                                                            <input class="form-control" type="text" name="pin" placeholder="Enter PIN Code" maxlength="10" required>

                                                        </div>

                                                    </div>

                                                    <div class="form-group">

                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label>Address :</label>
                                                            <textarea class="form-control" rows="1" name="address" placeholder="Enter Personal Address" maxlength="100" required></textarea>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"><strong>PROFESSIONAL DETAILS :</strong></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <label>Clinic Address :</label>
                                                                <textarea class="form-control" rows="1" name="clinic_address" placeholder="Enter Clinic Address" maxlength="100" required></textarea>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Clinic Contact :</label>
                                                                <input class="form-control" type="text" name="clinic_contact" placeholder="Enter Clinic Contact Number" maxlength="10" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Consultation Fees :</label>
                                                                <input class="form-control" type="text" name="bio" placeholder="In rupees" maxlength="10" required>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Experience :</label>
                                                                <textarea class="form-control" rows="1" name="experience" placeholder="Enter Your Experience" maxlength="100" required></textarea>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Currently Working At :</label>
                                                                <textarea class="form-control" rows="1" name="work_at" placeholder="Working At @Hospital" maxlength="50"></textarea>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label for="certificate" class="control-label">Upload Your Signature :</label>
                                                                <input type="file" class="form-control" id="certificate" name="certificate" required>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"><strong> USER INFORMATION :</strong></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>UserName :</label>
                                                            <input class="form-control" type="text" placeholder="Enter UserName" name="user" placeholder="Enter User Name" maxlength="50" required>
                                                        </div>

                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>Password :</label>
                                                            <input class="form-control" type="password" placeholder="Enter Password" name="password" maxlength="50" id="psw1" required>

                                                        </div>

                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>Confirm Password :</label>
                                                            <input class="form-control" type="password" placeholder="Re-Enter Password" name="cpassword" maxlength="50" id="psw2" required>
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
    <script src="jQuery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function checkPasswordMatch() {
            var password = $("#psw1").val();
            var confirmPassword = $("#psw2").val();
            if (password != confirmPassword) {
                $("#CheckPasswordMatch").html("Passwords does not match!");
                $("#CheckPasswordMatch").css('color', 'red');
                $(this).css('color', 'red');
            } else {
                $("#CheckPasswordMatch").html("Passwords match.");
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