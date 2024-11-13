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
        <?php include('header.php'); ?>
        <?php include('OuterSidebar.php'); ?>

        <?php
        // Get products from database 
        include('dbConfig.php');

        if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
            if ($_REQUEST['action'] == 'GoToDoctor' && !empty($_REQUEST['dept'])) {

                $dept = $_REQUEST['dept'];
                $doct = $_REQUEST['doc']; 
            }
        }


        $result = $db->query("SELECT a.doctor_name,b.dprt_name,a.address ,s.state_name,d.district_name,a.email,a.mobile,a.doctor_name,a.gender,a.specialist,a.Photo,a.Clinic_contact,a.doc_bio,a.work_at FROM tbl_doctor a inner join doc_department b on a.department=b.dprt_id    inner join tbl_state s on s.state_slno=a.state     inner join tbl_district d on d.district_slno=a.district and d.state_slno=a.state where a.doctor_slno='$doct'    and  a.department='$dept' ");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <center><h1 class="page-head-line">Welcome To Profile Of <?php echo $row["doctor_name"]; ?></h1></center>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                    </div>

                                </div>
                                <div class="container-fliud rounded bg-white ">

                                    <div class="row" style="font-size: 15px;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12 border-right">
                                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                    <img class="rounded-circle mt-5" src="<?php echo $row["Photo"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label>Doctor Name:</label>
                                                <input class="form-control" type="text" name="doctorname" value="<?php echo $row["doctor_name"]; ?>"readonly>
                                                <label>Department:</label>
                                                <input class="form-control" type="text" name="department" value="<?php echo $row['dprt_name']; ?>"readonly>
                                                <label>Gender:</label>
                                                <input class="form-control" type="text" name="gender" value="<?php echo $row['gender']; ?>"readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label>Email:</label>
                                                <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>"readonly>

                                                <label>Mobile:</label>
                                                <input class="form-control" type="text" name="mobile" value="<?php echo $row['mobile']; ?>"readonly>

                                                <label>Speacialist:</label>
                                                <input class="form-control" type="text" name="specialist" value="<?php echo $row['specialist']; ?>"readonly>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label>State:</label>
                                                <input class="form-control" type="text" name="state" value="<?php echo $row['state_name']; ?>"readonly>

                                                <label>District:</label>
                                                <input class="form-control" type="text" name="district" value="<?php echo $row['district_name']; ?>"readonly>

                                                <label>Address :</label>
                                                <input class="form-control" type="text" value="<?php echo $row['address']; ?>" name="address"readonly>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label>Consultation Fees:</label>
                                                <input class="form-control" type="text" name="bio" value="<?php echo $row['doc_bio']; ?>"readonly>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label>Currently Working At:</label>
                                                <input class="form-control" type="text" name="work_at" value="<?php echo $row['work_at']; ?>"readonly>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label>Clinic Contact:</label>
                                                <input class="form-control" type="text" value="<?php echo $row['Clinic_contact']; ?>" name="clinic_address"readonly>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <br>
                                                <label>Clinic Location :</label>
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1823.7647387105224!2d91.2492868!3d23.906298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753f7abd2566ae5%3A0x998a22c7b15bb2aa!2sTripura%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1654861013170!5m2!1sen!2sin" width="100%" height="250" style="border:1;" allowfullscreen="" loading="lazy"></iframe>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {

            ?> <p>Records not found.....</p>
        <?php
        }
        ?>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>