<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Appointment</title>
    <?php include('links.php'); ?>

</head>

<body>
    <div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('pt_sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome Patient</h1>
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
                                            <h4 style="font-family:'Book Antiqua'"><strong>MEDICAL &nbsp; HISTORY</strong></h4>
                                        </center>
                                    </div>


                                    <div class="panel-body" style="font-size: 15px;">
                                        <input class="form-control" id="demo" type="text" placeholder="Seach here,..">
                                        <br>

                                        <?php
                                        // Include the database config file 
                                        include_once 'dbConfig.php';


                                        $query = "SELECT b.patient_slno,b.patient_name,b.age,b.gender,c.doctor_name,d.dprt_name,a.app_time,a.app_sl,a.app_date FROM patient_app_details a  inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dept_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " and c.department AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno)";
                                        $result = $db->query($query);

                                        if ($result->num_rows > 0) {
                                            echo "  <table id='apptime' class='table table-striped'>";
                                            echo "<thead><tr><th>Patient Name</th><th>Age</th><th>Gender</th><th>Doctor Name</th><th>Department</th><th>App sl.no.</th><th>App Date</th><th>Get Prescription</th></tr></thead><tbody id = 'test'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr><td>' . $row['patient_name'] . '</td><td>' . $row['age'] . '</td><td>' . $row['gender'] . '</td><td>' . $row['doctor_name'] . '</td><td>' . $row['dprt_name'] . '</td><td>' . $row['app_sl'] . '</td><td>' . date("d-m-Y", strtotime($row['app_date'])) . '</td><td><button name="prescription" id="prescription" class="btn btn-primary" >Click Here</button> </td><tr>';
                                            }
                                            echo "</tbody></table>";
                                        } else {
                                            echo '<h1>Not available</h1>';
                                        }

                                        ?>
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
        <script type="text/javascript">
            document.getElementById("prescription").onclick = function() {
                location.href = "get_prescription.php";
            };
        </script>
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