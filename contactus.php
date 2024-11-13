<?php
// Include the database config file 
require_once 'dbConfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIGROW</title>
    <?php include('links.php'); ?>
    <link rel="stylesheet" href="captcha.css">

    <link href="style_dr_view1.css" rel="stylesheet" />
    <style>
        #design {
            font-size: large;
            color: darkred;
        }

        #body_design {
            font-size: medium;
            color: black;

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
                                    <h1 class="page-head-line">Contact Us</h1>
                                </center>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                            </div>

                            <div class="col-md-10">

                                <div class="row ">
                                    <div class="col-md-10 col-md-offset-1 ">
                                        <section id="captcha">
                                            <div class="title">
                                            </div>
                                            <form method="POST" style="font-size: 15px;">

                                                <div class="form-group">

                                                    <div class="col-sm-2 col-sm-offset-1 ">
                                                        <label for="userName">User Name:</label>
                                                    </div>
                                                    <div class="col-sm-7 col-sm-offset-1 ">
                                                        <input type="text" name="user" maxlength="25" class="form-control" id="userName" onkeypress="return isAlpha(event);" required autocomplete="off" placeholder="Enter User name ...">
                                                    </div>
                                                </div>
                                                <br>
                                                <br><br>

                                                <div class="form-group">
                                                    <div class="col-sm-2 col-sm-offset-1 ">
                                                        <label for="phone">Mobile No:</label>
                                                    </div>
                                                    <div class="col-sm-7 col-sm-offset-1 ">
                                                        <input type="text" name="phone" maxlength="10" class="form-control" id="phone" required autocomplete="off" placeholder="Enter Phone no...">
                                                    </div>
                                                </div>



                                                <br>
                                                <br>



                                                <div class="form-group">
                                                    <div class="col-sm-2 col-sm-offset-1 ">
                                                        <label for="email">Email:</label>
                                                    </div>
                                                    <div class="col-sm-7 col-sm-offset-1 ">
                                                        <input type="email" name="email" maxlength="25" class="form-control" id="email" required autocomplete="off" placeholder="Enter Email ...">
                                                    </div>
                                                </div>
                                                <br>
                                                <br>





                                                <div class="form-group">
                                                    <div class="col-sm-2 col-sm-offset-1 ">
                                                        <label>State :</label>
                                                    </div>
                                                    <div class="col-sm-7 col-sm-offset-1 ">
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
                                                </div>
                                                <br><br>

                                                <div class="form-group">
                                                    <div class="col-sm-2 col-sm-offset-1 ">
                                                        <label for="city">City:</label>
                                                    </div>
                                                    <div class="col-sm-7 col-sm-offset-1 ">
                                                        <input type="text" name="city" maxlength="25" class="form-control" id="city" required autocomplete="off" placeholder="Enter City...">
                                                    </div>
                                                </div>
                                                <br><br>



                                                <div class="form-group">
                                                    <div class="col-sm-2 col-sm-offset-1 ">
                                                        <label for="sub">Subject:</label>
                                                    </div>
                                                    <div class="col-sm-7 col-sm-offset-1 ">
                                                        <input type="text" name="subject" maxlength="25" class="form-control" id="sub" required autocomplete="off" placeholder="Question about our website ...">
                                                    </div>
                                                </div>

                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-sm-2 col-sm-offset-1 ">
                                                        <label for="issue">Issue:</label>
                                                    </div>

                                                    <div class="col-sm-7 col-sm-offset-1 ">
                                                        <textarea class="form-control" rows="2" name="issue" placeholder="Tell us about your issue" maxlength="100" required></textarea>

                                                    </div>
                                                    <br>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <button type="submit" class="btn btn-primary center-block" name="cancel">Refresh</button>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <button type="submit" class="btn btn-primary center-block" name="submit">Submit</button>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                    </div>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-1">
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