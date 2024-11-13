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
        <?php include('headeri.php'); ?>
        <?php include('dr_sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome Doctor</h1>
                                </center>
                            </div>
                        </div>


                        <div class="row">
                            
                            <div class="col-md-1">
                            </div>

                            <div class="col-md-10">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center>
                                            <h4 style="font-family:'Book Antiqua'"><strong>PAYMENT &nbsp; DETAILS</strong></h4>
                                        </center>
                                    </div>


                                    <div class="panel-body" style='font-size:15px'>
                                        <input class="form-control" id="demo" type="text" placeholder="Search here,.." style='font-size:15px'>
                                        <br>

                                        <?php
                                        // Include the database config file 
                                        include_once 'dbConfig.php';


                                        $query = "SELECT b.patient_name,b.email,b.mobile,a.amount,a.app_date FROM doctor_wallet a inner join tbl_patient b on a.patient_slno=b.patient_slno WHERE doctor_slno=" . $_SESSION['doctor_slno'] . "   and department = " . $_SESSION['department'] . " ";
                                        $result = $db->query($query);

                                        if ($result->num_rows > 0) {
                                            echo "  <table id='apptime' class='table table-striped'>";
                                            echo "<thead><tr><th>Patient Name</th><th>Email</th><th>Mobile</th><th>Amount</th><th>Appointment Date</th></tr></thead><tbody id = 'test'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr><td>' . $row['patient_name'] . '</td><td>' . $row['email'] . '</td><td>' . $row['mobile'] . '</td><td>' . $row['amount'] . '</td><td>' . date("d-m-Y", strtotime($row['app_date'])) . '</td><tr>';
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
        <?php include('footer.php'); ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#demo").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#test tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
</body>

</html>