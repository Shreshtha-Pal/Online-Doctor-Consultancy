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
        <?php include('lb_sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                       
                    <div class="col-md-12">
                        <h1 class="page-head-line">Welcome </h1>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                            <center>
                                            <h4 style="font-family:'Book Antiqua'"><strong>View Patient Details</strong></h4>
                                        </center>
                            </div>


                            <div class="panel-body">
                                <input class="form-control" id="demo" type="text" placeholder="Search here,..">
                                <br>

                                <?php
                                    // Include the database config file 
                                    include_once 'dbConfig.php';

                                    $query="SELECT a.lb_slno,a.pt_slno,a.book_date,b.patient_name,b.patient_slno,b.gender,b.age,b.blood,b.mobile from lab_book_report a inner join tbl_patient b on a.pt_slno=b.patient_slno WHERE a.lb_slno=" . $_SESSION['lb_slno'] ."";
                                    $result = $db->query($query);

                                    if ($result->num_rows > 0)
                                    {
                                        echo "  <table id='apptime' class='table table-striped'>";
                                        echo "<thead><tr><th>Patient Name</th><th>Age</th><th>Gender</th><th>Blood Group</th><th>Contact No.</th><th>Appointment Date</th><th>Upload Report</th></tr></thead><tbody id = 'test'>";
                                        while ($row = $result->fetch_assoc())
                                        {
                                            echo '<tr><td>' . $row['patient_name'] . '</td><td>' . $row['age'] . '</td><td>' . $row['gender'] . '</td><td>' . $row['blood'] . '</td><td>' . $row['mobile'] . '</td><td>' . $row['book_date'] . '</td><td><a href="1report.php?action=GoToReport&lab=' . $row['lb_id'] . '&pnt=' . $_SESSION['patient_slno'] . '&lbslno='.$row['lb_slno'].'" class="btn btn-primary">Book</a></td><tr>';
                                        }
                                        echo "</tbody></table>";
                                    } else 
                                    {
                                        echo '<h1>Not available</h1>';
                                    }

                                ?>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div></div>
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