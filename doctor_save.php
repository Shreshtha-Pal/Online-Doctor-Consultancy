<?php
session_start();
?>


<?php
include('connect.php');
//$conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");

if ($_SERVER['REQUEST_METHOD'] ==  'POST') 
{

   $_department = $_REQUEST['department'];
   $_doc_name = "Dr." . " " . $_REQUEST['fname'] . " " . $_REQUEST['mname'] . " " . $_REQUEST['lname'];
   $_gender = $_REQUEST['gender'];
   $_specialist = $_REQUEST['specialist'];
   $_time_for_each=$_REQUEST['time'];
   $_email = $_REQUEST['email'];
   $_state = $_REQUEST['state'];
   $_city = $_REQUEST['city'];
   $_district = $_REQUEST['district'];
   $_pincode=$_REQUEST['pin'];
   $_mobile = $_REQUEST['mobile'];
   $_user_name = $_REQUEST['user'];
   $_password = $_REQUEST['password'];
   $_address = $_REQUEST['address'];
   $_clinic_address=$_REQUEST['clinic_address'];
   $_clinic_contact=$_REQUEST['clinic_contact'];
   $_bio=$_REQUEST['bio'];
   $_experience=$_REQUEST['experience'];
   $_work_at=$_REQUEST['work_at'];

   $filename1 = $_FILES["profile_photo"]["name"];
   $tmp_name1 = $_FILES["profile_photo"]["tmp_name"];
   $path1 = "doc_img/" . $filename1;

   $filename2 = $_FILES["certificate"]["name"];
   $tmp_name2 = $_FILES["certificate"]["tmp_name"];
   $path2 = "doc_img/" . $filename2;


   $sql = "SELECT max(doctor_slno) as 'dsl' FROM tbl_doctor where department='$_department'";
   $result = mysqli_query($conn, $sql);

   while ($row = mysqli_fetch_array($result)) {
      global  $pid;
      $pid = $row['dsl'];
   }

   if ($pid == NULL) {
      $pid = 1;
   } else {
      $pid = $pid + 1;
   }


   $sql1 = "INSERT INTO `tbl_doctor`(`doctor_slno`, `department`, `doctor_name`, `specialist`, `Photo`, `gender`, `state`, `city`, `district`, `pincode`, `mobile`, `email`, `address`, `Clinic_address`, `Clinic_contact`, `doc_bio`, `doc_experience`, `work_at`, `doc_certificate`, `user_name`, `password`, `time_per_patient`)
       VALUES ('$pid','$_department','$_doc_name','$_specialist','$path1','$_gender','$_state','$_city','$_district','$_pincode','$_mobile','$_email','$_address','$_clinic_address','$_clinic_contact','$_bio','$_experience','$_work_at','$path2','$_user_name','$_password','$_time_for_each')";

   $_result = mysqli_query($conn, $sql1);


   if (move_uploaded_file($_FILES["profile_photo"]["tmp_name"], $path1) && move_uploaded_file($_FILES["certificate"]["tmp_name"], $path2)  && $_result) 
   {
      

      $_SESSION['message'] = '<div class="alert alert-success center-block" role="alert" style="width: 40%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Success!!</strong>
                                    </i>
                                    Registration Successfull...
                                 </p>
                              </div>';

                             
   } else {
      $_SESSION['message'] = '<div class="alert alert-danger center-block" role="alert" style="width: 40%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Try Again!!</strong>
                                    </i>
                                    Please, Try Again...
                                 </p>
                             </div>';
   }
   header("Location:Dr_Registration.php");
}
