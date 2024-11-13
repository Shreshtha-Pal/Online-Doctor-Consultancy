
<?php
session_start();
?>

<?php
 
    if (isset($_POST['save']))
    {
        $question = $_POST['question'] ;
        $answer = $_POST['answer'];
       


        $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
      

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
       
        $sql = "INSERT INTO `chatbot`( `queries`, `replies`) VALUES ('$question','$answer')";
        $result = mysqli_query($conn, $sql);

        if ( $result)  
        {
        $_SESSION['message']= '<div class="alert alert-success" role="alert">Success</div>';
        
        }
        else
        {
        $_SESSION['message']= '<div class="alert alert-danger" role="alert">Tryagain</div>'; 
        }
        header("Location: question_answer.php");  
      }

    }

    
?>