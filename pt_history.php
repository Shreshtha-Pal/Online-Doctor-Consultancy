<?php include('dbConfig.php'); ?>

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
        <?php include('header.php'); ?>
        <?php include('pt_sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Your Medical History</h1>
                    </div>
                </div>

                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">Sl.No</th>
                                <th scope="col">Department</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Appointment Date</th>
                                <th scope="col">Appointment Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                            $sql = "SELECT * from `patient_app_details` inner join `tbl_doctor` on `tbl_doctor`.`doctor_slno`=`patient_app_details`.`doctor_slno`
                            inner join `doc_department` on `doc_department`.`dprt_id`=`patient_app_details`.`dept_id`;";
                            $result = mysqli_query($conn, $sql);
                            $sno = 0;
                            while($row = mysqli_fetch_assoc($result)){
                            $sno = $sno + 1;
                               
                                echo "<tr>
                                <th scope='row'>" . $sno . "</th>
                                <td>" . $row['dprt_name'] . "</td>
                                <td>" . $row['doctor_name'] . "</td>
                                <td>" . $row['app_date'] . "</td>
                                <td>" . $row['app_time'] . "</td> </tr>";
                            }
                            ?>


                        </tbody>
                    </table>

            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>