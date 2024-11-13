<?php 
// Include the database config file 
include_once 'dbConfig.php'; 

if(!empty($_POST["drpt_id"]))
{ 
    if(!empty($_POST["doctor_slno"]))
    {
        if(!empty($_POST["app_date"]))
    {

        // Fetch state data based on the specific country 
    $query = "SELECT slno, app_date, start_time, end_time,remaining_app FROM schedule_time WHERE doctor_slno=".$_POST['doctor_slno']."   and department = ".$_POST['drpt_id']." and app_date = '".$_POST['app_date']."'"; 
    $result = $db->query($query); 

   
     
    // Generate HTML of state options list 
    if($result->num_rows > 0)
    { 
      
        echo "<tr><td>Appointment Date</td><td>Opening Time</td><td>Closing Time</td><td>Remaining</td><td>Choose</td></tr>";
        while($row = $result->fetch_assoc())
        {  
            echo '<tr><td>'.date("d-m-Y", strtotime($row['app_date'])).'</td><td>'.  date("g:i a", strtotime($row['start_time'])) .'</td><td>'.date("g:i a", strtotime($row['end_time'])).'</td><td>'.$row['remaining_app'].'</td><td> <button name="GO" id="GO" class="btn btn-primary" value='. $row['slno'] .' >Select</button> </td><tr>'; 
        } 

       
    }
    else
    { 
        echo '<h1>Not available</h1>'; 
    }
    }
    }
}


?>