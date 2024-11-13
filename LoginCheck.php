<?php
session_start();
?>

<?php

if (isset($_POST['Login']) &&  $_SESSION['user'] == 'Doctor') {

  include('dbConfig.php');
  $username = $_POST['user'];
  $password = $_POST['pass'];

  //to prevent from mysqli injection  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($db, $username);
  $password = mysqli_real_escape_string($db, $password);

  $sql = "select * from tbl_doctor where user_name = '$username' and password = '$password'";
  $result = mysqli_query($db, $sql);



  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $_SESSION['doctor_slno'] = $row["doctor_slno"];
  $_SESSION['department'] = $row["department"];


  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "<h1><center><i class='fa fa-exclamation-triangle'> <strong>Login successful..!!</strong></i></center></h1>";
    header("Location: dr_profile2.php");
  } else {
    $_SESSION['invalid'] = '<div class="alert alert-warning alert-dismissible show" role="alert">
                                      <i class="fa fa-exclamation-triangle">
                                        <strong>
                                          Login Failed!!
                                        </strong>
                                        </i>
                                      Invalid User Name or Password..
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>';
    header("Location: Login.php");
  }
}
if (isset($_POST['Login']) &&  $_SESSION['user'] == 'Patient') {

  include('dbConfig.php');
  $username = $_POST['user'];
  $password = $_POST['pass'];

  //to prevent from mysqli injection  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($db, $username);
  $password = mysqli_real_escape_string($db, $password);

  $sql = "select * from tbl_patient where user = '$username' and password = '$password'";
  $result = mysqli_query($db, $sql);

  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $_SESSION['patient_slno'] = $row["patient_slno"];

  $_SESSION['patient_name'] = $row["patient_name"];


  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "<h1><center><i class='fa fa-exclamation-triangle'> <strong>Login successful..!!</strong></i></center></h1>";
    header("Location: pt_profile.php");
  } else {
    $_SESSION['invalid'] = '<div class="alert alert-warning alert-dismissible show" role="alert">
                              <i class="fa fa-exclamation-triangle">
                                <strong>
                                  Login Failed!!
                                </strong>
                              </i>
                              Invalid User Name or Password..
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                             </div>';
    header("Location: Login.php");
  }
}
if (isset($_POST['Login']) &&  $_SESSION['user'] == 'Laboratory') {

  include('dbConfig.php');
  $username = $_POST['user'];
  $password = $_POST['pass'];

  //to prevent from mysqli injection  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($db, $username);
  $password = mysqli_real_escape_string($db, $password);

  $sql = "select * from tbl_lab where lb_id = '$username' and password = '$password'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $_SESSION['lb_slno'] = $row["lb_slno"];

  $_SESSION['lb_name'] = $row["lb_name"];


  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "<h1><center><i class='fa fa-exclamation-triangle'> <strong>Login successful..!!</strong></i></center></h1>";
    header("Location: lb_profile.php");
  } else {
    $_SESSION['invalid'] = '<div class="alert alert-warning alert-dismissible show" role="alert">
                              <i class="fa fa-exclamation-triangle">
                                <strong>
                                  Login Failed!!
                                </strong>
                              </i>
                              Invalid User Name or Password..
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                             </div>';
    header("Location: Login.php");
  }
}
if (isset($_POST['Login']) &&  $_SESSION['user'] == 'Administrator') {

  include('dbConfig.php');
  $username = $_POST['user'];
  $password = $_POST['pass'];

  //to prevent from mysqli injection  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysqli_real_escape_string($db, $username);
  $password = mysqli_real_escape_string($db, $password);

  $sql = "select * from admins where admin_name = '$username' and admin_pass = '$password'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    echo "<h1><center><i class='fa fa-exclamation-triangle'> <strong>Login successful..!!</strong></i></center></h1>";
    header("Location: admin_profile.php");
  } else {
    $_SESSION['invalid'] = '<div class="alert alert-warning alert-dismissible show" role="alert">
                              <i class="fa fa-exclamation-triangle">
                                <strong>
                                  Login Failed!!
                                </strong>
                              </i>
                              Invalid User Name or Password..
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                             </div>';
    header("Location: Login.php");
  }
}

?>