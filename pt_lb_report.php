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
                            
                            <div class="col-md-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center>
                                            <h4 style="font-family:'Book Antiqua'"><strong>BOOK &nbsp;YOUR &nbsp;PREFERABLE&nbsp; LABORATORY &nbsp; & &nbsp; GET&nbsp; THE &nbsp; REPORTS</strong></h4>
                                        </center>
                                    </div>


                                    <div class="panel-body" style="font-size: 15px;">

                                        <?php
                                        // Include the database config file
                                        include_once 'dbConfig.php';


                                        $query = "SELECT `lb_slno`, `lb_name`, `lb_phone`, `lb_email`, `address`, `lb_id`, `password`, `test_done`, `open_time`,`close_time` FROM `tbl_lab`";
                                        $result = $db->query($query);

                                        if ($result->num_rows > 0) {
                                            echo "  <table id='lab' class='table table-striped'>";
                                            echo "<thead><tr><th>Available Laboratory</th><th>Contact no.</th><th>Email-id</th><th>Address</th><th>Test Done here</th><th>Visit Time</th><th>Book</th><tbody id = 'lab_test'>";
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<tr><td>' . $row['lb_name'] . '</td><td>' . $row['lb_phone'] . '</td><td>' . $row['lb_email'] . '</td><td>' . $row['address'] . '</td><td>' . $row['test_done'] . '</td><td>' . $row['open_time'] . ' to ' . $row['close_time'] . '</td><td><a href="book_lab.php?action=GoToLab&lab=' . $row['lb_id'] . '&pnt=' . $_SESSION['patient_slno'] . '&lbslno=' . $row['lb_slno'] . '" class="btn btn-primary">Book</a></td><tr>';
                                            }
                                            echo "</tbody></table>";
                                        } else {
                                            echo '<h1>Not available</h1>';
                                        }

                                        ?>
                                        <br>
                                        <?php if (isset($_SESSION['message'])) :
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                        ?>
                                        <?php endif ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <?php include('footer.php'); ?>
        <!-- <script type="text/javascript">
            document.getElementById("book").onclick = function () 
            {   <?php ?>
                document.getElementById('texto').innerHTML = "<?php $message = "SUCCESSFUL!"; ?>"
            };
        </script> -->



        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#demo").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#test tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script> -->
</body>

</html>