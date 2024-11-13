<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Appointment</title>
    <?php    include('links.php'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .ratings i {
      color: #ff9900;
    }
  </style>
</head>
<body>
<div id="wrapper">
        <?php    include('header.php'); ?>
        <?php    include('OuterSidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Welcome</h1>
                       
                    </div>
                </div>
            

                <div class="row">
                    <div class="col-md-12">
                       <div class="panel panel-default">

                       <div class="ratings">
     <p>3.5 star ratings: <?php echo star_rating(3.5); ?></p>
     <p>5 star ratings: <?php echo star_rating(5); ?></p>
     <p>2.5 star ratings: <?php echo star_rating(2.5); ?></p>
     <p>4.5 star ratings: <?php echo star_rating(4.5); ?></p>
     <p>4 star ratings: <?php echo star_rating(4); ?></p>

     <p>0.5 star ratings: <?php echo star_rating(0.5); ?></p>
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








                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
<?php    include('footer.php'); ?>
</body>
</html>