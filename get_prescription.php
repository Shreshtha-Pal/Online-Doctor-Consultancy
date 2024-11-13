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
        h2 {
            color: darkslateblue;
            font-weight: bold;
        }

        h5 {
            color: darkcyan;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('pt_Sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php
                        include('dbConfig.php');
                        $patient = $_SESSION['patient_slno'];
                        ?>

                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome Patient</h1>
                                </center>

                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <center>
                                            <h4 style="font-family:'Book Antiqua'"><strong>YOUR &nbsp; PRESCRIPTION</strong></h4>
                                        </center>
                                    </div>
                                    <?php
                                    include('dbConfig.php'); ?>


                                    <div class="panel-body">
                                        <form role="form" id="pres" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <img src="logo.png" height="110px" width="300px">
                                                </div>
                                                <div class="col-md-5">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <h2 style="font-family:'Book Antiqua'">MEDIGROW</h2>
                                                        </center>
                                                    </div>
                                                    <div class="col-md-5">
                                                    </div>
                                                    <div class="col-md-4">
                                                    </div>
                                                    <div class="col-md-3">

                                                        <?php

                                                        $query1 = "SELECT b.patient_slno,c.doctor_name,c.specialist,c.Clinic_address,c.Clinic_contact,c.email,d.dprt_name FROM `tbl_prescription` a inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dprt_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno);";
                                                        $result = $db->query($query1);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) { ?>
                                                                <strong>
                                                                    <p> <?php echo '' . $row["doctor_name"] . "<br>" . $row["specialist"] . ' Specialist  <br>' . ' Department: ' . $row["dprt_name"] .  '<br>' . 'Clinic Adress:  ' . $row["Clinic_address"] . "<br>" . 'Contact no.:  ' . $row["Clinic_contact"] . "<br>" . $row["email"]; ?></p>
                                                                </strong>
                                                        <?php }
                                                        }

                                                        ?>

                                                        <hr>
                                                    </div>

                                                </div>




                                                <div class="form-group">
                                                    <p>

                                                    <h5>Patient Information</h5>
                                                    <center>


                                                        <?php
                                                        $query = "SELECT b.patient_slno,b.gender,b.age,b.blood,b.mobile,b.patient_name,c.doctor_name,a.symptoms,a.medicine,a.medical_test FROM `tbl_prescription` a inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dprt_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno);";
                                                        $result = $db->query($query);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo 'Name:  ' . $row["patient_name"] . str_repeat('&nbsp;', 5) . 'Age:  ' . $row["age"] . str_repeat('&nbsp;', 5) . 'Gender:  ' . $row["gender"] . str_repeat('&nbsp;', 5) . 'Blood Group:  ' . $row["blood"] . str_repeat('&nbsp;', 5) . 'Ph-No.: ' . $row["mobile"];
                                                            }
                                                        }

                                                        ?>
                                                    </center>
                                                    </p>


                                                    <hr>

                                                </div>
                                                <div class="form-group">
                                                    <h5>Doctor's Note</h5>
                                                    <div class=col-md-12>
                                                        <strong>Appointment Date:</strong>
                                                        <br>

                                                        <?php
                                                        $query = "SELECT a.app_date FROM `tbl_prescription` a inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dprt_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno);";
                                                        $result = $db->query($query);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo $row["app_date"];
                                                            }
                                                        } ?>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-5">
                                                        <strong>Symptoms:</strong><br>


                                                        <?php
                                                        $query = "SELECT a.symptoms FROM `tbl_prescription` a inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dprt_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno);";
                                                        $result = $db->query($query);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo $row["symptoms"];
                                                            }
                                                        } ?>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <strong>Test to Perform:</strong><br>


                                                        <?php
                                                        $query = "SELECT a.medical_test FROM `tbl_prescription` a inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dprt_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno);";
                                                        $result = $db->query($query);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo $row["medical_test"];
                                                            }
                                                        } ?>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <strong>Medicine:</strong><br>


                                                        <?php
                                                        $query = "SELECT a.medicine FROM `tbl_prescription` a inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dprt_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno);";
                                                        $result = $db->query($query);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo $row["medicine"];
                                                            }
                                                        } ?>

                                                    </div>

                                                    <div class="col-md-9">
                                                    </div>
                                                    <div class="col-md-3"><br>
                                                        <h5>Doctor's Signature</h5>
                                                        <?php
                                                        $query = "SELECT c.doc_certificate FROM `tbl_prescription` a inner join tbl_patient b on a.patient_slno=b.patient_slno inner join tbl_doctor c on a.doctor_slno=c.doctor_slno inner join doc_department d on a.dprt_id=d.dprt_id WHERE a.patient_slno=" . $_SESSION['patient_slno'] . " AND d.dprt_id=(select c.department where c.doctor_slno=a.doctor_slno);";
                                                        $result = $db->query($query);

                                                        if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo '<img class="rounded-circle mt-5" height="100px" width="200px" src="' . $row["doc_certificate"] .' ">';
                                                            }
                                                        } ?>
                                                        


                                                        <h5>.....................................</h5>
                                                    </div>
                                                </div>
                                        </form>

                                        <br><br>




                                    </div>
                                    <div class="col-md-12">
                                        <center><button class="btn btn-success" onclick="print_pres()" id="print_prescription">Print</button></center>
                                    </div>

                                </div>

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
        function print_pres() {
            var divContents = document.getElementById("pres").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            // a.document.write('<body > <h1>Hii..!!!! <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</body>

</html>