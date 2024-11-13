

<?php

session_start(); 
// Include database connection file
include_once('dbconfig.php');

if (isset($_POST['submit'])) { 

  $username = $db->real_escape_string($_POST['username']);
  $password = $db->real_escape_string(md5($_POST['password']));
  $msg = ''; 

  // If the captcha is valid 
  if ($_POST['captcha'] == $_SESSION['captcha']) {

      $query = "SELECT * FROM admins WHERE username = '$username' AND password ='$password'";

      $result = $db->query($query);
      
      $row =  $result->fetch_assoc();

      if ($result->num_rows > 0) {
          $_SESSION['NAME'] = $row['name'];
          header("Location:dashboard.php");
          die();       
      }else{
        $msg = 'Username or Password Invalid';
      }
    }else{
      $msg = 'Invalid Captcha please try again!';   
    }
} 
        
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Implement captcha code login validation in PHP with Mysql</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="card text-center" style="padding:20px;">
      <h3>Implement captcha code login validation in PHP with Mysql</h3>
    </div><br>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <!-- Error message -->
          <?php if (isset($msg)) { ?>
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $msg; ?>
            </div>
          <?php } ?>
          <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="text-center">
              <h1>Log In</h1>
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <a href="<?php echo $_SERVER['PHP_SELF']; ?>"> <img src="captcha.php"></a>
             
            </div>
            <div class="form-group">
              <label for="captcha">Captch</label>
              <input type="text" class="form-control" name="captcha" placeholder="Captch" required>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-primary btn-block" value="Sign in">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

