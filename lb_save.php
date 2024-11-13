<?php
session_start();
?>


<?php include('connect.php');
//$conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");

if ($_SERVER['REQUEST_METHOD'] ==  'POST') {

  $lab_name = $_REQUEST['labname'];
  $phone = $_REQUEST['mobile']; 
  $email = $_REQUEST['email'];
  $address = $_REQUEST['address'];
  $state = $_REQUEST['state'];
  $city = $_REQUEST['city'];
  $pincode = $_REQUEST['pincode'];
  $lab_id = $_REQUEST['id'];
  $password = $_REQUEST['password'];
  $cpassword = $_REQUEST['cpassword'];
  $start_time= $_REQUEST['open_time'];
  $close_time= $_REQUEST['close_time'];
  $test_done= $_REQUEST['test_done'];



  $sql = "SELECT max(lb_slno) as 'dsl' FROM tbl_lab";
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



  $sql1 = "INSERT INTO `tbl_lab`(`lb_slno`, `lb_name`, `lb_phone`, `lb_email`, `address`, `state`, `city`, `pin_code`, `lb_id`, `password`,`test_done`, `open_time`, `close_time`)
                   VALUES ('$pid','$lab_name','$phone','$email','$address', '$state','$city','$pincode','$lab_id', '$password','$test_done','$start_time','$close_time')";

  $_result = mysqli_query($conn, $sql1);



  if ($password === $cpassword) 
  {
    if ($result) {
      //echo $pid;
      $_SESSION['message'] = '<div class="alert alert-success center-block" role="alert" style="width: 40%">
        <p class="text-center">
           <i class="fa fa-exclamation-triangle">
              <strong>Success!!</strong>
           </i>
           Registration Successfull...
        </p>
     </div>';
    } else {
      $_SESSION['message'] =  '<div class="alert alert-danger center-block" role="alert" style="width: 40%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Try Again!!</strong>
                                    </i>
                                    Please, Try Again...
                                 </p>
                             </div>';
    }
  }
  header("Location:lb_registration.php");
} 
