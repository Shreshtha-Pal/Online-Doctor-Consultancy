<?php
// Include the database config file 
require_once 'dbConfig.php';
?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                            <?php
                            // Get products from database 
                            include('dbConfig.php');

                            $patient = $_SESSION['patient_slno'];


                            $result = $db->query("SELECT * FROM tbl_patient where patient_slno='$patient'");
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <div class="col-md-12">
                                        <center><h1 class="page-head-line">Welcome <?php echo $row["patient_name"]; ?></h1></center>
                                    </div>
                        </div>


                        <div class="container rounded bg-white ">
                            <div class="row" style="font-size: 15px;">

                                <div class="col-md-2 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?php echo $row["photo"]; ?>">
                                    </div>
                                </div>

                                <div class="col-md-10 border-right">
                                    <div class="p-3 py-5">
                                        <div class="row mt-2">
                                            <div class="col-md-10"><label class="labels">Patient's Name :</label><input type="text" class="form-control" value="<?php echo $row["patient_name"]; ?>" readonly></div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-5"><label class="labels">Gender :</label><input type="text" class="form-control" placeholder="Enter Gender" value="<?php echo $row["gender"]; ?>" readonly></div>
                                            <div class="col-md-5"><label class="labels">Date of Birth :</label><input type="text" class="form-control" placeholder="Enter Date of Birth" value="<?php echo $row["date_of_birth"]; ?>" readonly></div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-5"><label class="labels">Age :</label><input type="text" class="form-control" placeholder="Enter Age" value="<?php echo $row["age"]; ?>" readonly></div>
                                            <div class="col-md-5"><label class="labels">Blood Group :</label><input type="text" class="form-control" placeholder="Enter Blood Group" value="<?php echo $row["blood"]; ?>" readonly></div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-5"><label class="labels">Mobile :</label><input type="text" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $row["mobile"]; ?>" readonly></div>
                                            <div class="col-md-5"><label class="labels">Email :</label><input type="text" class="form-control" placeholder="Enter Email" value="<?php echo $row["email"]; ?>" readonly></div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-10"><label class="labels">Address :</label><input type="text" class="form-control" placeholder="Enter Address" value="<?php echo $row["address"]; ?>" readonly></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            } else {

                            ?>
                            <p>Product(s) not found.....</p>
                        <?php } ?>
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