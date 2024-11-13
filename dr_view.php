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
      line-height: 0.5;
    }

    h4 {
      line-height: 0.5;
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
                  <h1 class="page-head-line" style="font-family:'Book Antiqua'"><strong>Welcome</strong></h1>
                </center>
              </div>
            </div>

            <div class="panel-body">
              <form role="form" method="post">
                <div class="row">
                  <div class="col-md-12">

                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">


                          <?php
                          $result_d = $db->query("SELECT distinct dprt_id,dprt_name FROM tbl_doctor a inner join doc_department b on a.department=b.dprt_id order by dprt_id asc");
                          $result_p = array();
                          while ($row_user = mysqli_fetch_assoc($result_d)) {
                            $result_p[] = $row_user;
                          }
                          $rows = mysqli_num_rows($result_d);
                          for ($i = 0; $i <  $rows; $i++) {
                            $dprt_id = $result_p[$i]["dprt_id"];
                            $dprt_name = $result_p[$i]["dprt_name"];
                            for ($j = 0; $j < $rows - 1; $j++) { ?>

                              <h3 style="font-family:'Book Antiqua'; color:darkblue;"> <i class="fa fa-user-md"></i> &nbsp; DEPARTMENT:&nbsp;&nbsp;<strong style="Text-transform:uppercase;"><?php echo $dprt_name; ?></strong></h3>
                              <?php
                              $result_z = $db->query("SELECT * FROM tbl_doctor a inner join doc_department b on a.department=b.dprt_id  where  b.dprt_id= '$dprt_id'  ORDER BY department asc ");
                              if ($result_z->num_rows > 0) {
                                while ($row = $result_z->fetch_assoc()) { ?>
                                  <center>
                                    <div class="card col-md-3 col-sm-3 col-xs-12">
                                      <div class="card-body">
                                        <h4 class="card-img"> <img src="<?php echo $row["Photo"]; ?>" class="img-rounded" alt="Cinque Terre"> </h4>
                                        <h4 class="card-title"><strong style="font-family:'Book Antiqua';color:red;"><?php echo $row["doctor_name"]; ?></strong></h4>
                                        <p class="card-text"><strong style="font-family:'Book Antiqua'">Mobile:&nbsp;</strong><?php echo '' . $row["mobile"] . ' '; ?></p>
                                        <p class="card-text"><strong style="font-family:'Book Antiqua'">Email:&nbsp;</strong><?php echo $row["email"]; ?></p>
                                        <div class="ratings">
                                          <P> 3.5 <?php echo Star_rating(3.5) ?></P>
                                        </div>
                                        <a href="dr_profile.php?action=GoToDoctor&dept=<?php echo $row["department"]; ?>&doc=<?php echo $row["doctor_slno"]; ?>" class="btn btn-primary">View Profile</a>
                                      </div>
                                    </div>
                                  </center>
                          <?php
                                }
                              }
                            }
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>






  <?php
  function star_rating($rating)
  {
    $rating_round = round($rating * 2) / 2;

    if ($rating_round <= 0.5 && $rating_round > 0) {
      return '<i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 1 && $rating_round > 0.5) {
      return '<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 1.5 && $rating_round > 1) {
      return '<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 2 && $rating_round > 1.5) {
      return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 2.5 && $rating_round > 2) {
      return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 3 && $rating_round > 2.5) {
      return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 3.5 && $rating_round > 3) {
      return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 4 && $rating_round > 3.5) {
      return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 4.5 && $rating_round > 4) {
      return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>';
    }
    if ($rating_round <= 5 && $rating_round > 4.5) {
      return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
    }
  }
  ?>


  <?php include('footer.php'); ?>
</body>

</html>