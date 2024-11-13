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
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line"><strong>Welcome</strong></h1>
                                    <center>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-10">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center>
                                            <h4 style="font-family:'Book Antiqua'"><strong>AMBULANCE &nbsp; SERVICE</strong></h4>
                                        </center>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        // Include the database config file 
                                        include_once 'dbConfig.php';


                                        $query = "SELECT `ambulance_slno`, `ambulance_type`, `ambulanceReg_no`, `ambulance_doc`, `driver_name`, `contact_number`, `driving_license`, `available` FROM `tbl_ambulance`";
                                        $result = $db->query($query);

                                        if ($result->num_rows > 0) {
                                            echo "  <table id='apptime' class='table table-striped' style='font-size:15px'>";
                                            echo "<thead><tr><th>Ambulance type</th><th>Plate Number</th><th>Driver Name</th><th>Contact Number</th><th>Available</th><tbody id = 'test'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr><td>' . $row['ambulance_type'] . '</td><td>' . $row['ambulanceReg_no'] . '</td><td>' . $row['driver_name'] . '</td><td>' . $row['contact_number'] . '</td><td>' . $row['available'] . '</td><td>';
                                            }
                                            echo "</tbody></table>";
                                        } else {
                                            echo '<h1>Not available</h1>';
                                        }

                                        ?>
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
</body>
<?php include('footer.php'); ?>

</html>