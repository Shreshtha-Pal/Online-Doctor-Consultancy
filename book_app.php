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
        <?php include('pt_Sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <center><h1 class="page-head-line">Welcome Patient</h1></center>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                            <center>
                                <h4 style="font-family:'Book Antiqua'"><strong>BOOK &nbsp; APPOINTMENT</strong></h4>
                                </center>   
                            </div>


                            <div class="panel-body" style="font-size: 15px;">
                                <form role="form" action="book_app_save.php" method="POST">

                                    <div class="form-group">
                                        <label>Patient Name :</label>
                                        <input class="form-control" type="text" name="ptname" value="<?php echo $_SESSION['patient_name']; ?>">

                                    </div>
                                    <div class="form-group">
                                        <label>Diseases :</label>
                                        <input class="form-control" type="text" name="Diseases">

                                    </div>

                                    <div class="form-group">


                                        <label>Departments :</label>
                                        <select class="form-control form-select" name="department" id="department" required>
                                            <option selected>Select Departments</option>
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = mysqli_query($conn, "Select `dprt_id`,`dprt_name` from `doc_department`");
                                            while ($row = mysqli_fetch_array($sql)) {
                                                $id = $row['dprt_id'];
                                                $name = $row['dprt_name'];
                                            ?>
                                                <option value='<?php echo $id; ?>'><?php echo $name; ?></option>
                                            <?php
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Doctor :</label>
                                        <select class="form-control form-select" name="doctor" id="doctor" required>
                                            <option selected>Select Department Fist </option>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label>Available Date :</label>
                                        <select class="form-control form-select" name="app_date" id="app_date" required>
                                            <option selected>Select Doctor First</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Time Slot :</label>
                                        <table id="apptime" class="table table-striped">

                                        </table>

                                    </div>

                                    
                                    <?php if (isset($_SESSION['message'])): 
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                            ?>
                                            <?php endif ?>
                                </form>



                                
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jQuery1.js"></script>

    <?php include('footer.php'); ?>

    <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1>Appointment Details <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</body>

</html>