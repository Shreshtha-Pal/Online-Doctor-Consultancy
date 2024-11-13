<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIGROW</title>
    <?php include('links.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('lb_sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <?php
                        // Get products from database 
                        include('dbConfig.php');

                        $lab = $_SESSION['lb_slno'];
                            

                        $result = $db->query("SELECT * FROM tbl_lab where lb_slno='$lab'");
                        if ($result->num_rows > 0) 
                        {
                            while ($row = $result->fetch_assoc()) 
                            {
                        ?>
                    <div class="col-md-12">
                        <center><h1 class="page-head-line">Welcome <?php echo $row["lb_name"];?></h1><center>
                    </div>
                </div>


                <div class="container rounded bg-white ">
                    <div class="row">
                        
                                <div class="col-md-2 border-right">
                                   
                                </div>

                                <div class="col-md-10 border-right">
                                    <div class="p-3 py-5">
                                        <div class="row mt-2">
                                            <div class="col-md-10"><label class="labels">Lab's Name :</label><input type="text" class="form-control" value="<?php echo $row["lb_name"]; ?>"readonly></div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-5"><label class="labels">Mobile :</label><input type="text" class="form-control" placeholder="Enter Mobile Number" value="<?php echo $row["lb_phone"]; ?>"readonly></div>
                                            <div class="col-md-5"><label class="labels">Email :</label><input type="text" class="form-control" placeholder="Enter Email" value="<?php echo $row["lb_email"]; ?>"readonly></div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-10"><label class="labels">Address :</label><input type="text" class="form-control" placeholder="Enter Address" value="<?php echo $row["address"]; ?>"readonly></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {

                            ?>
                            <p>Product(s) not found.....</p>
                        <?php } ?>
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