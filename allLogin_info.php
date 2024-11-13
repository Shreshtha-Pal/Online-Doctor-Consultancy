<?php
session_start();
?>

<?php

if (isset($_POST['admin']))
{

    $_SESSION['user']='Administrator';
}

 
    if (isset($_POST['Doctor']))
    {

        $_SESSION['user']='Doctor';
    }


    if (isset($_POST['Patient']))
    {

        $_SESSION['user']='Patient';
    }



    if (isset($_POST['Lab']))
    {
        $_SESSION['user']='Laboratory';

    }
    
    
    header("Location: Login.php"); 

    ?>