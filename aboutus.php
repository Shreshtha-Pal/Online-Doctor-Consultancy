<?php
// Include the database config file 
require_once 'dbConfig.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MEDIGROW</title>
  <?php include('links.php'); ?>
  <link href="style_dr_view1.css" rel="stylesheet" />
  <style type="text/css">
    .ratings i {
      color: #ff9900;
    }

    p {
      margin: auto;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div id="wrapper">
    <?php include('header.php'); ?>
    <?php include('OuterSidebar.php'); ?>
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <center>
                  <h1 class="page-head-line">ABOUT US</h1>
                </center>
              </div>
            </div>
            <br>


            <div class="row" style="font-size: 13px;">

              <div class="col-md-4">
                <div class="panel panel-default" style="background-color:aliceblue">
                  <div class="panel-body">
                    <p class="card-img"> <img src="assets/img/Anushka.png" class="img-rounded" alt="Cinque Terre"> </p>
                    <p class="card-text"><strong>Name:&nbsp;&nbsp;</strong>Anuskha Banik</p>
                    <p class="card-text"><strong>Mobile:&nbsp;&nbsp;</strong>8258844122</p>
                    <p class="card-text"><strong>Email:&nbsp;&nbsp;</strong>banushka003@gmail.com</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="panel panel-default" style="background-color:lightyellow">
                  <div class="panel-body">
                    <p class="card-img"> <img src="assets/img/Ayana.png" class="img-rounded" alt="Cinque Terre"> </p>
                    <p class="form_control"><strong>Name:&nbsp;&nbsp;</strong>Ayana Ghosh</p>
                    <p class="card-text"><strong>Mobile:&nbsp;&nbsp;</strong>8974328193</p>
                    <p class="card-text"><strong>Email:&nbsp;&nbsp;</strong>ayanaagt773@gmail.com</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="panel panel-default" style="background-color:aliceblue">
                  <div class="panel-body">
                    <p class="card-img"> <img src="assets/img/Tammanna.png" class="img-rounded" alt="Cinque Terre"> </p>
                    <p class="card-text"><strong>Name:&nbsp;&nbsp;</strong>Tammanna Debnath</p>
                    <p class="card-text"><strong>Mobile:&nbsp;&nbsp;</strong>6009318220</p>
                    <p class="card-text"><strong>Email:&nbsp;&nbsp;</strong>tammannadebnath@gmail.com</p>
                  </div>
                </div>
              </div>


            </div>


            <div class="row" style="font-size: 13px;">

              <div class="col-md-4">
                <div class="panel panel-default" style="background-color:lightyellow">
                  <div class="panel-body">
                    <p class="card-img"> <img src="assets/img/Shreshtha.png" class="img-rounded" alt="Cinque Terre"> </p>
                    <p class="form_control"><strong>Name:&nbsp;&nbsp;</strong>Shreshtha Pal</p>
                    <p class="form_control"><strong>Mobile:&nbsp;&nbsp;</strong>9366063387</p>
                    <p class="form_control"><strong>Email:&nbsp;&nbsp;</strong>aenypaul1234@gmail.com</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="panel panel-default" style="background-color:aliceblue">
                  <div class="panel-body">
                    <p class="card-img"> <img src="assets/img/Ankan.png" class="img-rounded" alt="Cinque Terre"> </p>
                    <p class="card-text"><strong>Name:&nbsp;&nbsp;</strong>Ankan Deb</p>
                    <p class="card-text"><strong>Mobile:&nbsp;&nbsp;</strong>8132820541</p>
                    <p class="card-text"><strong>Email:&nbsp;&nbsp;</strong>debankan7865@gmail.com</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="panel panel-default" style="background-color:lightyellow">
                  <div class="panel-body">
                    <p class="card-img"> <img src="assets/img/Bishal.png" class="img-rounded" alt="Cinque Terre"> </p>
                    <p class="card-text"><strong>Name:&nbsp;&nbsp;</strong>Bishal Debnath</p>
                    <p class="card-text"><strong>Mobile:&nbsp;&nbsp;</strong>9366213190</p>
                    <p class="card-text"><strong>Email:&nbsp;&nbsp;</strong>www.bishaldebnath321@gmail.com</p>
                  </div>
                </div>
              </div>

            </div>
          </div>


          <div class="row" style="font-size: 15px;">
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
              <center><img class="rounded-circle mt-5" src="assets/img/india.png"></center>
            </div>

            <div class="col-md-4">
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>