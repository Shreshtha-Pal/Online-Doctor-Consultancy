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
        #image {
            display: none;
        }
    </style>

</head>

<body>
    <div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('pt_Sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line"><strong>Welcome Patient</strong></h1>
                                </center>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                    <center><h4 style="font-family:'Book Antiqua'"><strong>Get Your Report</strong></h4></center>
                                    </div>
                                    <div class="panel-body">
                                        <?php
                                        // Include the database config file 
                                        include_once 'dbConfig.php';
                                        $query="SELECT a.`lb_slno`,a.`pt_slno`,a.`report`,b.`lb_slno`,b.`lb_name`,a.`upload_date` from `lb_report` a inner join `tbl_lab` b on a.`lb_slno`=b.`lb_slno` where a.`pt_slno`=".$_SESSION['patient_slno'];
                                        $result = $db->query($query);
                                        

                                        if ($result->num_rows > 0) {
                                            echo "  <table id='apptime' class='table table-striped' style='font-size:15px'>";
                                            echo "<thead><tr><th>Laboratory Name</th><th>Report</th><th>Uploaded Report Date</th></tr></thead><tbody id = 'test'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr><td>' . $row['lb_name'] . '</td><td><a class="btn btn-primary" href="download.php?path='.$row['report'].'">Download Report</a>  </td></td><td>' . $row['upload_date'] . '</td>';
                                            }
                                            echo "</tbody></table>";
                                        } else {
                                            echo '<h1>Not available</h1>';
                                        }

                                        ?>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
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