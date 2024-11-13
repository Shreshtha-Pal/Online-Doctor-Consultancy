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
                                    <h1 class="page-head-line">LABORATORY REGISTRATION</h1>
                                </center>
                            </div>
                        </div>
                        <div class="row" style="font-size:15px;">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="panel-body">
                                    <form role="form" action="lb_save.php" method="POST" enctype="multipart/form-data">
                                        <?php if (isset($_SESSION['message'])) :
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                        ?>
                                        <?php endif ?>

                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"><strong>BASIC INFORMATION :</strong><h5>
                                                </div>
                                                <div class="panel-body">

                                                    <div class="form-group">
                                                        <div class="row">

                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Lab Name :</label>
                                                                <textarea class="form-control" rows="1" name="labname" maxlength="100" placeholder="Enter Lab Name"></textarea>
                                                            </div>

                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Contact Number :</label>
                                                                <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile Number" maxlength="10" required>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Open Time :</label>
                                                                <input class="form-control" type="time" name="open_time" maxlength="10" placeholder="eg:10 a.m."></textarea>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Close Time :</label>
                                                                <input class="form-control" type="time" placeholder="eg:6 p.m." name="close_time" maxlength="100" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                                <label>Test To Be Done :</label>
                                                                <textarea class="form-control" rows="1" name="test_done" maxlength="100" placeholder="Enter all the test details to be done"></textarea>
                                                            </div>
                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                <label>Email :</label>
                                                                <input class="form-control" type="text" placeholder="example@gmail.com." name="email" maxlength="100" required>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </DIV>
                                            </div>
                                        </div>


                                        <div class="panel-group">
                                            <div class="panel panel-success">
                                                <div class="panel-heading" id="panel_heading">
                                                    <h5 style="font-family:'Book Antiqua'"><strong>ADDRESS DETAILS :</strong></h5>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <label>Address :</label>
                                                            <textarea class="form-control" rows="1" name="address" maxlength="100" placeholder="Enter your address"></textarea>
                                                        </div>

                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>State :</label>
                                                            <br>
                                                            <select class="form-control form-select" name="state" aria-label="Default select example" required>
                                                                <option selected>Select State</option>
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                                                $sql = mysqli_query($conn, "Select `state_slno`,`state_name` from `tbl_state`");
                                                                echo var_dump($sql);
                                                                while ($row = mysqli_fetch_array($sql)) {
                                                                    global $state_id;
                                                                    $state_id = $row['state_slno'];
                                                                    $state_name = $row['state_name'];
                                                                ?>
                                                                    <option value='<?php echo $state_id; ?>'><?php echo $state_name; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>City :</label>
                                                            <br>
                                                            <select class="form-control form-select" name="city" aria-label="Default select example" required>
                                                                <option selected>Select City</option>
                                                                <?php
                                                                $conn = mysqli_connect("localhost", "root", "", "world") or die("Database Error");
                                                                $sql = mysqli_query($conn, "Select `city_id`,`city_name` from `cities`");
                                                                echo var_dump($sql);
                                                                while ($row = mysqli_fetch_array($sql)) {
                                                                    global $city_id;
                                                                    $city_id = $row['city_id'];
                                                                    $city_name = $row['city_name'];
                                                                ?>
                                                                    <option value='<?php echo $city_id; ?>'><?php echo $city_name; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 col-sm-14 col-xs-12">
                                                            <label>Postal/Zip code :</label>
                                                            <textarea class="form-control" rows="1" name="pincode" maxlength="10" placeholder="Enter Pin code"></textarea>

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
                                                            <label>Lab ID :</label>
                                                            <input class="form-control" type="text" placeholder="Enter Lab ID" name="id" maxlength="50" required>
                                                        </div>

                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>Password :</label>
                                                            <input class="form-control" type="password" placeholder="Enter Password" name="password" maxlength="10" required>
                                                        </div>

                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <label>Confirm Password :</label>
                                                            <input class="form-control" type="password" placeholder="Re-Enter Password" name="cpassword" maxlength="10" required>
                                                        </div>
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
        <?php include('footer.php'); ?>

        <div>
        </div>
</body>

</html>