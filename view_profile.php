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

                        $dept = $_SESSION['department'];
                        $doct = $_SESSION['doctor_slno'];



                        $result = $db->query("SELECT a.doctor_name,b.dprt_name,a.address ,s.state_name,d.district_name,a.email,a.mobile,a.doctor_name,a.gender,a.specialist,a.Photo FROM tbl_doctor a inner join doc_department b on a.department=b.dprt_id    inner join tbl_state s on s.state_slno=a.state     inner join tbl_district d on d.district_slno=a.district and d.state_slno=a.state where a.doctor_slno='$doct'    and  a.department='$dept' ");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) 
                            {
                        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Welcome To Profile Of <?php echo $row["doctor_name"]; ?></h1>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <iframe src="notifications/index.php" width="100%" height="150px" style="border:1px solid white;"> </iframe>
                    </div>

                </div>
                <div class="container-fliud rounded bg-white ">
                    <div class="row">



                        

                                <div class="form-group">
                                <div class="col-md-3 col-sm-3 col-xs-12 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        <img class="rounded-circle mt-5"  src="<?php echo $row["Photo"]; ?>">
                                    </div>

                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>Doctor Name:</label>
                                        <input class="form-control" type="text" name="doctorname" value="<?php echo $row["doctor_name"]; ?>"  >
                                        <label>Department:</label>
                                        <input class="form-control" type="text" name="department" value="<?php echo $row['dprt_name']; ?>"  >
                                        <label>Gender:</label>
                                        <input class="form-control" type="text" name="gender" value="<?php echo $row['gender']; ?>"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>Email:</label>
                                        <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>"  >

                                        <label>Mobile:</label>
                                        <input class="form-control" type="text" name="mobile" value="<?php echo $row['mobile']; ?>" >

                                        <label>Speacialist:</label>
                                        <input class="form-control" type="text" name="specialist" value="<?php echo $row['specialist']; ?>"  >

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <label>State:</label>
                                        <input class="form-control" type="text" name="state" value="<?php echo $row['state_name']; ?>"  >

                                        <label>District:</label>
                                        <input class="form-control" type="text" name="district" value="<?php echo $row['district_name']; ?>"  >

                                        <label>Address :</label>
                                        <input class="form-control" type="text" value="<?php echo $row['address']; ?>" name="address" >
                                    </div>
                                </div>


                            <?php
                            }
                            } 
                            else 
                            {

                            ?>
                            <p>Records not found.....</p>
                        <?php 
                            } 
                        ?>

                        

                        
                        <div class="form-group">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <label>Clinic Location :</label>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29205.01349698525!2d91.21134389385757!3d23.796304426364333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37538cafffffffff%3A0x2dc28610a7143d77!2sWomen&#39;s%20Polytechnic!5e0!3m2!1sen!2sin!4v1622014034696!5m2!1sen!2sin" width="100%" height="250" style="border:1;" 
                                        allowfullscreen="" loading="lazy"></iframe>
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