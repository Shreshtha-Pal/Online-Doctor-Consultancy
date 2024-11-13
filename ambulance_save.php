<?php
session_start();
?>


<?php
include('connect.php');
//$conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");

if ($_SERVER['REQUEST_METHOD'] ==  'POST') 
{
   $ambulance_type = $_REQUEST['type'];
   $ambulanceReg_no = $_REQUEST['rnumber'];
   $driver_name = $_REQUEST['name'];
   $contact_number = $_REQUEST['cnumber'];
   $available = $_REQUEST['available'];
   
   $filename = $_FILES["dphoto"]["name"];
   $tmp_name = $_FILES["dphoto"]["tmp_name"];
   $path = "doc_img/" . $filename;

   $filename = $_FILES["lphoto"]["name"];
   $tmp_name = $_FILES["lphoto"]["tmp_name"];
   $path1 = "doc_img/" . $filename;

   $sql= "INSERT INTO `tbl_ambulance`(`ambulance_type`, `ambulanceReg_no`, `ambulance_doc`, `driver_name`, `contact_number`, `driving_license`, `available`) 
   VALUES ('$ambulance_type','$ambulanceReg_no','$path','$driver_name','$contact_number','$path1','$available')";

$_result = mysqli_query($conn, $sql);


    if ($_result)
    {
        $_SESSION['message'] = '<div class="alert alert-success center-block" role="alert" style="width: 100%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Success!!</strong>
                                    </i>
                                    Schedule Successfull...</p>
                              </div>';
    } 
    else 
    {
        $_SESSION['message'] =  '<div class="alert alert-danger center-block" role="alert" style="width: 100%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Try Again!!</strong>
                                    </i>
                                    Please, Try Again...
                                 </p>
                             </div>';
                            
    }
 

 header("Location:ambulance_Reg.php");
}

?>