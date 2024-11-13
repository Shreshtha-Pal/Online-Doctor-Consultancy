<?php
session_start();
?>

<?php
include('connect.php');
//$conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");

if ($_SERVER['REQUEST_METHOD'] ==  'POST') 
{

   $_patient_name = $_REQUEST['salutation'] . " " . $_REQUEST['fname'] . " " . $_REQUEST['mname'] . " " . $_REQUEST['lname'];
   $_gender = $_REQUEST['gender'];
   $_DOB = $_REQUEST['dob'];
   $_age = $_REQUEST['age'];
   $_blood = $_REQUEST['blood'];
   $_email = $_REQUEST['email'];
   $_mobile = $_REQUEST['mobile1'];
   $_address = $_REQUEST['address'];
   $_user_name = $_REQUEST['user'];
   $_password = $_REQUEST['password'];
   $filename = $_FILES["file"]["name"];
   $tmp_name = $_FILES["file"]["tmp_name"];
   $path = "patient_img/" . $filename;


   $sql = "SELECT max(patient_slno) as 'psl' FROM tbl_patient";
   $result = mysqli_query($conn, $sql);



   while ($row = mysqli_fetch_array($result)) {
      global  $pid;
      $pid = $row['psl'];
   }

   if ($pid == NULL) {
      $pid = 1;
   } else {
      $pid = $pid + 1;
   }




   $sql1 = "INSERT INTO `tbl_patient`(`patient_slno`, `patient_name`, `gender`,`date_of_birth`, `age`, `blood`,`email`, `mobile`, `address`,`user`, `password`,`photo` )
             values('$pid', '$_patient_name', '$_gender','$_DOB','$_age','$_blood', '$_email', '$_mobile','$_address', '$_user_name', '$_password', '$path')";

   $_result = mysqli_query($conn, $sql1);

   if (move_uploaded_file($tmp_name, $path) && $result) {
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
   header("Location:Patient_Registration.php");
}

?>