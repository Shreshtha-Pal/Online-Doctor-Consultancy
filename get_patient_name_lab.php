<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["lab"]))
{ 
    
        if(!empty($_POST["app_date"]))
        {

        
    $query = "SELECT a.patient_slno,a.patient_name FROM `tbl_patient` a inner join lab_book_report b on a.patient_slno=b.pt_slno WHERE b.lb_slno=".$_POST['lab']."     and b.book_date = '".$_POST['app_date']."'"; 
    $result = $db->query($query); 
     
    
    if($result->num_rows > 0){ 
        echo '<option value="">Select Patient</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['patient_slno'].'">'.$row['patient_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Data not available</option>'; 
    }
    }
     


}


?>