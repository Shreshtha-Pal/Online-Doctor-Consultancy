
<?php
session_start();
?>

<?php
 
    if (isset($_POST['save']))
    {
        $state = $_POST['state'] ;
        $district = $_POST['district'] ;

        $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
      

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 


        $sql = "SELECT max(district_slno) as 'dsl' FROM tbl_district where state_slno='$state'";
        // WHERE dprt_id='" . $_department . "'
        $result = mysqli_query($conn, $sql);
     
        while ($row = mysqli_fetch_array($result)) {
           global  $pid;
           $pid = $row['dsl'];
        }
     
        if ($pid == NULL) {
           $pid = 1;
        } else {
           $pid = $pid + 1;
        }
       
        $sql = "INSERT INTO `tbl_district`( `state_slno`,`district_slno`,`district_name`) VALUES ('$state','$pid','$district')";
        $result = mysqli_query($conn, $sql);

        if ( $result)  
        {
        $_SESSION['message']= '<div class="alert alert-success" role="alert">Success</div>';
        
        }
        else
        {
        $_SESSION['message']= '<div class="alert alert-danger" role="alert">Try Again</div>'; 
        }
        header("Location: add_district.php");  
      }

    }

    
?>