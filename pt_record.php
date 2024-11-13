<?php 
// Include the database config file 
include_once 'dbConfig.php'; 


    if(!empty($_POST["pt_slno"]))
    {

        // Fetch state data based on the specific country 
    $query = "SELECT * FROM `tbl_patient` WHERE patient_slno = '".$_POST['pt_slno']."'"; 
    $result = $db->query($query); 

   
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
      
        echo "<thead><th>Patient Name</th><th>Gender</th><th>Age</th><th>Email</th><th>Mobile</th><th>Blood Group</th></thead>";
        while($row = $result->fetch_assoc()){  
            echo '<tr><td>'.$row['patient_name'].'</td><td>'.$row['gender'].'</td><td>'.$row['age'].'</td><td>'.$row['email'].'</td><td> '.$row['mobile'].' </td><td> '.$row['blood'].' </td><tr>'; 
        } 

       
    }
    else
    { 
        echo '<h1>Not available</h1>'; 
    }
    }
    

?>