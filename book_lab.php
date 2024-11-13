<?php
session_start();
?>
<?php include('dbConfig.php');?>
  
        <?php
       

        if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) 
        {
            if ($_REQUEST['action'] == 'GoToLab' && !empty($_REQUEST['lab']) && !empty($_REQUEST['pnt']) && !empty($_REQUEST['lbslno'])) 
            {
                
                $lb_slno = $_REQUEST['lbslno'];
                $lab=$_REQUEST['lab'];
                $pt_slno = $_REQUEST['pnt'];

               

            }
        }

                // echo $lb_slno ;
                // echo "<br>";
                // echo $pt_slno;



    $result = $db->query("SELECT max(slno) as 'dsl' FROM lab_book_report");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) 
        {

            global  $pid;
            $pid = $row['dsl'];
            }
    if ($pid == NULL) {
    $pid = 1;
    } else {
    $pid = $pid + 1;
    }
    //global $book_time=now();



  $sql1 = "INSERT INTO `lab_book_report`(`slno`,`lb_slno`, `pt_slno`,`book_date`)  VALUES ('$pid','$lb_slno','$pt_slno',now())";

  //echo $sql1;

  $_result = mysqli_query($db, $sql1);

  if ($_result) {
    //echo $pid;
    $_SESSION['message'] = '<div class="alert alert-success center-block" role="alert" style="width: 40%">
      <p class="text-center">
         <i class="fa fa-exclamation-triangle">
            <strong>Success!!</strong>
         </i>
         Booking Successfull...
      </p>
   </div>';
  } 
}else ?> 
  <?php
header("Location:pt_lb_report.php");
  ?>
 