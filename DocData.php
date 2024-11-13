<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["drpt_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM tbl_doctor WHERE department = ".$_POST['drpt_id'].""; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select Doctor</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['doctor_slno'].'">'.$row['doctor_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Doctor not available</option>'; 
    } 
}
?>