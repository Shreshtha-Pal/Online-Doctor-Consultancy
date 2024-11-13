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
  <style>
    #design {
      font-size: large;
      color: darkred;
    }

    #body_design {
      font-size: medium;
      color: black;

    }
  </style>

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
            <center><h1 class="page-head-line">Help Center</h1></center>
          </div>
        </div>


        
        <div class="row">
          <div class="col-md-12">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="container-fluid">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a id="design" data-toggle="collapse" href="#b">Accounts and Profile</a>
                    </h4>
                  </div>
                  <div id="b" class="panel-collapse collapse">
                    <div class="panel-body" id="body_design">
                      ayana
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="container-fluid">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a id="design" data-toggle="collapse" href="#c">Payment</a>
                    </h4>
                  </div>
                  <div id="c" class="panel-collapse collapse">
                    <div class="panel-body" id="body_design">
                      anushka
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="container-fluid">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a id="design" data-toggle="collapse" href="#d">Troubleshooting</a>
                    </h4>
                  </div>
                  <div id="d" class="panel-collapse collapse">
                    <div class="panel-body" id="body_design">
                      tammanna
                    </div>
                  </div>
                </div>
              </div>
            </div>
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