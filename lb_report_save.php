<?php
session_start();
?>

<?php
include('connect.php');
//$conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");

if ($_SERVER['REQUEST_METHOD'] ==  'POST') {
   $lb_slno = $_SESSION['lb_slno'];
   $pt_slno = $_REQUEST['ptname'];
   $book_date = $_REQUEST['lbappdate'];
   $filename = $_FILES["file"]["name"];
   $tmp_name = $_FILES["file"]["tmp_name"];
   $path = "lab_img/" . $filename;
   echo $filename;
   echo "<br>";
   echo $path;

   $sql = "SELECT max(slno) as 'psl' FROM lb_report";
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




   $sql1 = "INSERT INTO `lb_report`(`slno`, `lb_slno`, `pt_slno`, `report`,`upload_date`) VALUES ('$pid','$lb_slno','$pt_slno','$path',now())";
   $_result = mysqli_query($conn, $sql1);

   if (move_uploaded_file($tmp_name, $path) && $result) {
      $_SESSION['message'] = '<div class="alert alert-success center-block" role="alert" style="width: 40%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Success!!</strong>
                                    </i>
                                    Uploaded Report Successfully...
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
   header("Location:lb_report.php");
}

?>