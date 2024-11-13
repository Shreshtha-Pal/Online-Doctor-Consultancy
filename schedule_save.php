<?php
session_start();
?>


<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] ==  'POST') 
{

    $_date = $_REQUEST['appdate'];
    $_start_from = $_REQUEST['apptimefrom'];
    $_start_to = $_REQUEST['apptimeto'];


    $sql = "SELECT max(slno) as 'dsl' FROM schedule_time";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) 
    {
        global  $pid;
        $pid = $row['dsl'];
    }

    if ($pid == NULL) 
    {
        $pid = 1;
    } else 
    {
        $pid = $pid + 1;
    }

    $dept = $_SESSION['department'];
    $doct = $_SESSION['doctor_slno'];



    $sql = "SELECT `time_per_patient` as 'time' FROM tbl_doctor where doctor_slno='$doct' and department='$dept' ";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) 
    {
        global  $time;
        $time = $row['time'];
    }


    $start = strtotime($_start_from);
    $end = strtotime($_start_to);
    $mins = ($end - $start) / 60;
   


    $_total_app=$mins/$time;

    

    $sql1 = "INSERT INTO `schedule_time`(`slno`, `department`, `doctor_slno`, `app_date`, `start_time`, `end_time`, `total_app`, `remaining_app`) VALUES
        ('$pid','$dept','$doct','$_date','$_start_from','$_start_to','$_total_app','$_total_app')";

    $_result = mysqli_query($conn, $sql1);

  


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
    header("Location:addschedule.php");
}
