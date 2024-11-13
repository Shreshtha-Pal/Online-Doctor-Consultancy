<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 

    if(!empty($_POST["lb_slno"]))
    {
        if(!empty($_POST["book_date"]))
    {

        // Fetch state data based on the specific country 
    //$query = "SELECT b.lb_slno, a.patient_slno,a.patient_name FROM `tbl_patient` a inner join lab_book_report b on a.patient_slno=b.patient_slno WHERE b.lb_slno='".$_SESSION['lab']."' and b.book_date = '".$_POST['book_date']."'"; 
        $query= "SELECT b.lb_slno, a.patient_slno,a.patient_name FROM `tbl_patient` a inner join lab_book_report b on a.patient_slno=b.pt_slno WHERE b.lb_slno='".$_SESSION['lb_slno']."' AND b.book_date = ".$_POST['book_date']."'"; 
//echo $query ;
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
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