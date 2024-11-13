<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["drpt_id"]))
{ 
    if(!empty($_POST["doctor_slno"])  )
    {

        // Fetch state data based on the specific country 
    $query = "SELECT distinct app_date FROM schedule_time WHERE doctor_slno=".$_POST['doctor_slno']."   and department = ".$_POST['drpt_id'].""; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select Date</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['app_date'].'">'.$row['app_date'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Date not available</option>'; 
    }
    }
     
}




?>