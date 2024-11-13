
<?php
session_start();
?>

<?php
 
    if (isset($_POST['save']))
    {
        $bank = $_POST['bank'] ;
        $Account = $_POST['Account'];
        $ifsc = $_POST['ifsc'];
        $Amount= $_POST['Amount'];
        $patient_slno = $_SESSION['patient_slno'];

        $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
      

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
       
        $sql = "SELECT count(*) as 'dsl' FROM patient_wallet where patient_slno='$patient_slno'";
        $result = mysqli_query($conn, $sql);

        //echo $sql;
     
        while ($row = mysqli_fetch_array($result)) {
           global  $pid;
           $pid = $row['dsl'];
        }

        $sql1="";

        if ($pid == 0) {
            $sql1 = "INSERT INTO `patient_wallet`(`patient_slno`,  `amount`, `addmoneydate`, `remaining_amount`) VALUES ('$patient_slno',  '$Amount',Now(), '$Amount')";
        } else {
            $sql1 = "Update `patient_wallet` set amount=amount+'$Amount',remaining_amount=remaining_amount+'$Amount' where patient_slno='$patient_slno'";
        }

        //echo $sql1;

        $result1 = mysqli_query($conn, $sql1);

        if ($result1)  
        {
        $_SESSION['message']= '<div class="alert alert-success" role="alert">Success</div>';
        
        }
        else
        {
        $_SESSION['message']= '<div class="alert alert-danger" role="alert">Tryagain</div>'; 
        }
       header("Location: patient_wallet.php");  
      }

    }

    
?>