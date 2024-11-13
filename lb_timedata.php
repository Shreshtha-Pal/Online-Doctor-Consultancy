<?php 
// Include the database config file 
include_once 'dbConfig.php'; 

if(!empty($_POST["lb_slno"])){


if(!empty($_POST["book_date"]))
{ 
   

        // Fetch state data based on the specific country 
    $query = "SELECT a.lb_slno,a.pt_slno,a.book_date,b.patient_name from lab_book_report a inner join tbl_patient b on b.patient_slno=a.pt_slno WHERE a.lb_slno=".$_POST['lb_slno']." and a.book_date=".$_POST['book_date']." "; 
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

?>