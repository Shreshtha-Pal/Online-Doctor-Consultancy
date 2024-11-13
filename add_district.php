<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<title>MEDIGROW</title>
        <?php include('links.php'); ?>

</head>

<body>
    <div id="wrapper">
        <?php include('header.php'); ?>
        <?php include('admin_sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome Admin</h1>
                                </center>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center><h4 style="font-family:'Book Antiqua'"><strong>DISTRICT &nbsp; ENTRY</strong></h4></center>
                                    </div>


                                    <div class="panel-body">
                                        <form role="form" action="add_district_save.php" method="post">

                                            <div class="form-group" style="font-size: 15px;">

                                                <label>Select State Name :</label>

                                                <select class="form-control form-select" name="state" required>
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

                                            <div class="form-group">
                                                <label>Enter District Name :</label>
                                                <input class="form-control" type="text" name="district">

                                            </div>


                                            <center><button type="submit" class="btn btn-success" name="save">Save </button></center>
                                            <?php if (isset($_SESSION['message'])) :
                                                echo $_SESSION['message'];
                                                unset($_SESSION['message']);
                                            ?>
                                            <?php endif ?>
                                        </form>
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
        <?php include('footer.php'); ?>
    </div>

</body>

</html>