<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIGROW</title>
    <?php include('links.php'); ?>

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
                                    <h1 style="font-family:'Book Antiqua'" class="page-head-line"><strong>Welcome</strong></h1>
                                </center>

                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-md-12">
                                <div class="panel panel-default">

                                    <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 5px solid #000;">

                                        <div class="carousel-inner">
                                            <div class="item active">

                                                <img src="assets/img/slideshow/1.jpeg" alt="" />

                                            </div>
                                            <div class="item">
                                                <img src="assets/img/slideshow/2.jpg" alt="" />

                                            </div>
                                            <div class="item">
                                                <img src="assets/img/slideshow/1.jpeg" alt="" />

                                            </div>
                                        </div>
                                        <!--INDICATORS-->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example" data-slide-to="1"></li>
                                            <li data-target="#carousel-example" data-slide-to="2"></li>
                                        </ol>
                                        <!--PREVIUS-NEXT BUTTONS-->
                                        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    <?php include('newfooter.php'); ?>
</body>

</html>