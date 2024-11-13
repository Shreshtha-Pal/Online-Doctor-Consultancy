<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["state_slno"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM tbl_district WHERE state_slno = ".$_POST['state_slno'].""; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
       // echo '<option value="">Select District</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['district_slno'].'">'.$row['district_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">State not available</option>'; 
    } 
}
?>