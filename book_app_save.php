<?php
session_start();
?>



<?php
include_once 'connect.php';

//extract($_POST);

if (isset($_POST['department']) && isset($_POST['doctor']) && isset($_POST['app_date']) && isset($_POST['GO'])) {


        $patient_slno = $_SESSION['patient_slno'];
        $patient_name = $_SESSION['patient_name'];
        $department = $_POST['department'];
        $doctor = $_POST['doctor'];
        $app_date = $_POST['app_date'];
        $Diseases=$_POST['Diseases'];
        $slot_sl = $_POST['GO'];


        $sql1 = "select td.time_per_patient ,tt.total_app,tt.remaining_app ,tt.start_time from schedule_time tt inner join 
        tbl_doctor td on tt.department=td.department and tt.doctor_slno=td.doctor_slno where tt.app_date='$app_date' and  
        td.doctor_slno='$doctor' and td.department='$department' and tt.slno='$slot_sl'";


        // echo $sql1;

        $result1 = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_array($result1)) {
                global  $time_per_patient;
                $time_per_patient = $row['time_per_patient'];

                global  $total_app;
                $total_app = $row['total_app'];

                global  $remaining_app;
                $remaining_app = $row['remaining_app'];

                global  $start_time;
                $start_time = $row['start_time'];
        }

        if ($remaining_app==0)
        {
                $_SESSION['message'] = '<div class="alert alert-warning alert-dismissible show" role="alert">
                <strong>Booking Failed!</strong> No more booking allowed for this time.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
                 </div>';
               
                header("Location:book_app.php");
                exit();
        }



        $sql2 = "select    count(*)  as total_app  from patient_app_details    where app_date='$app_date' and  
        doctor_slno='$doctor' and dept_id='$department' ";

       // echo $sql2;

        $result2 = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_array($result2)) {
                global  $cnt;
                $cnt = $row['total_app'];
        }




        $sql4 = "select    count(*)  as total_app  from patient_app_details    where patient_slno='$patient_slno' and 
        app_date='$app_date' and  doctor_slno='$doctor' and dept_id='$department' ";




        // echo $sql2;
 
         $result4 = mysqli_query($conn, $sql4);
         while ($row = mysqli_fetch_array($result4)) {
                 global  $cont;
                 $cont = $row['total_app'];
         }

         if ($cont>1)
         {
                 $_SESSION['message'] = '<div class="alert alert-info alert-dismissible show" role="alert">
                 <strong>Booking Failed !</strong> You have already booked an appointment.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </div>';
                
                 header("Location:book_app.php");
                 exit();
         }




         
        $sql6 = "select    sum(amount)  as total_amt  from patient_wallet    where patient_slno='$patient_slno' ";





        // echo $sql2;
 
         $result6 = mysqli_query($conn, $sql6);
         while ($row = mysqli_fetch_array($result6)) {
                 global  $amt;
                 $amt = $row['total_amt'];
         }

         if ($amt<300)
         {
                 $_SESSION['message'] = '<div class="alert alert-info  center-block" role="alert" style="width: 100%">
                 <p class="text-center">
                 <i class="fa fa-exclamation-triangle">
                 <strong>Please recharge your wallet and proceed !!</strong>
                 </i>
                 </p>
                 </div>';
                
                 header("Location:book_app.php");
                 exit();
         }

         






        $tym = strtotime($start_time);

        //echo $tym;
        

        if ($cnt == 0) 
        {
                global $apptime;
                global $app_sl;

                $apptime = date("H:i", $tym);
                $app_sl = $total_app - ($total_app - 1);
        } 
        else 
        {
                $apptime = date("H:i", strtotime('+' . $time_per_patient * $cnt . 'minutes', $tym));
                $app_sl = $total_app - ($total_app - ($cnt + 1));
        }





        $svsql = "INSERT INTO `patient_app_details`(`patient_slno`, `dept_id`, `doctor_slno`, `app_sl`, `app_time`, `app_date`, 
        `payment_date`) VALUES('$patient_slno', '$department',  '$doctor', '$app_sl', '$apptime', '$app_date', now() )";
        $_result = mysqli_query($conn, $svsql);




        $alsql = "INSERT INTO `comments`(`dept_id`, `doctor_slno`,`comment_subject`, `comment_text`, `comment_status`, `alert_time`) 
                VALUES ('$department', '$doctor','$patient_name','$Diseases',0,'$app_date.' '.$apptime' )";





//echo $alsql;


        $_alresult = mysqli_query($conn, $alsql);




        $sql3 = "UPDATE `schedule_time` SET `remaining_app` = `remaining_app`-1  WHERE slno='$slot_sl' and  app_date='$app_date' and 
        doctor_slno='$doctor' and department='$department'"; 
        $result3 = mysqli_query($conn, $sql3);





//echo $svsql;



        $sql7 = "UPDATE `Patient_wallet` SET `remaining_amount` = `remaining_amount`-300  WHERE patient_slno='$patient_slno' ";
        $result7 = mysqli_query($conn, $sql7);




        $dsvsql = "INSERT INTO `doctor_wallet`(`department`,`doctor_slno`, `patient_slno`, `app_date`, `app_sl`, `amount`, 
        `payment_date`, `cancel_status`) VALUES('$department', '$doctor',  '$patient_slno', '$app_date', '$app_sl', 300,now(),0 )";





        $_result10 = mysqli_query($conn, $dsvsql);


        if($_result && $result3 && $_result10) 
        {

                $_SESSION['message'] = '<div class="alert alert-success  center-block" role="alert" style="width: 100%" id="GFG">
                <p class="text-center">
                <i class="fa fa-exclamation-triangle">
                <strong>Success!!</strong>
                </i>
                '. $patient_name . ' your appointment has been Booked Successfully with  '. $doctor_name .'  on ' . $app_date . ' and Your 
                Serial no is ' . $app_sl . ' at ' . date("g:i a",strtotime($apptime) ). ' and You have Paid Rs. 300/- for this booking.</p>
                </div> '. '<input type="button" value="Print" onclick="printDiv()"> ';
                                        
                header("Location:book_app.php");
               
        }


}

?>

                                   

