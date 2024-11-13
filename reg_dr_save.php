
<?php
session_start();
?>

<?php
 
    if (isset($_POST['upload']))
    {
        $dr_full_name = $_POST['fn'] .' '.$_POST['mn'].' '. $_POST['ln'];
        $dr_email = $_POST['email'];
        $dr_mobile = $_POST['mobile'];


        $filename = $_FILES["file"]["name"];        
        $tmp_name = $_FILES["file"]["tmp_name"];

        //echo $filename;

        
        $path = "doc_img/".$filename;

        //echo $path;

        $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
      

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `doctor`( `dr_name`, `dr_email`, `dr_mobile`, `photo_path`)
                    VALUES ('$dr_full_name', '$dr_email', '$dr_mobile','$path')";
        $result = mysqli_query($conn, $sql);


       // echo $filename;
       // echo '<br>';
       // echo $path;
       // echo '<br>';
       
      

        if (move_uploaded_file($tmp_name, $path) && $result)  
        {
        $_SESSION['message']= '<div class="alert alert-success" role="alert">Success</div>';
        
        }
        else
        {
        $_SESSION['message']= '<div class="alert alert-danger" role="alert">Tryagain</div>'; 
        }
        header("Location: reg_dr.php");  
      }

    }

    
?>