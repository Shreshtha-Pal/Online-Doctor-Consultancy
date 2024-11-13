
<?php
session_start();
?>

<?php
 
    if (isset($_POST['save']))
    {
        $state = $_POST['state'] ;
        $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
      

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
       
        $sql = "INSERT INTO `tbl_state`( `state_name`) VALUES ('$state')";
        $result = mysqli_query($conn, $sql);

        if ( $result)  
        {
        $_SESSION['message']= '<div class="alert alert-success" role="alert">Success</div>';
        
        }
        else
        {
        $_SESSION['message']= '<div class="alert alert-danger" role="alert">Try Again</div>'; 
        }
        header("Location: add_state.php");  
      }

    }

    
?>