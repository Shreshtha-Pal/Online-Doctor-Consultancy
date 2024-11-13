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

</head>

<body>
    <div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('pt_sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
            <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                    <center><h1 class="page-head-line">Welcome Patient</h1></center>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <center><h4 style="font-family:'Book Antiqua'"><strong> MONEY &nbsp; TO &nbsp; WALLET</strong></h4></center>
                            </div>


                            <div class="panel-body" style="font-size: 15px;">
                                <form role="form" action="patient_wallet_save.php" method="post">

                                    <div class="form-group">
                                        <label>Select Bank :</label>

                                        <select class="form-control form-select" name="bank" id="bank" required>
                                            <option selected>Select Bank</option>
                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");
                                            $sql = mysqli_query($conn, "Select `bank_id`,`bank_name` from `bank`");
                                            while ($row = mysqli_fetch_array($sql)) {
                                                $id = $row['bank_id'];
                                                $name = $row['bank_name'];
                                            ?>
                                                <option value='<?php echo $id; ?>'><?php echo $name; ?></option>
                                            <?php
                                            } ?>
                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <label>Account No :</label>
                                        <input class="form-control" type="text" name="Account">

                                    </div>

                                    <div class="form-group">
                                        <label>IFSC Code :</label>
                                        <input class="form-control" type="text" name="ifsc">

                                    </div>


                                    <div class="form-group">
                                        <label>Amount :</label>
                                        <input class="form-control" type="text" name="Amount">

                                    </div>

                                    <div class="form-group">
                                        <label>Enter secret Password to bring money from Bank Account to Wallet :</label>
                                        <input class="form-control" type="password" name="Secret">

                                    </div>

                                    <center><button type="submit" class="btn btn-success" name="save">Save </button></center>
                                    <br>
                                    <?php if (isset($_SESSION['message'])): 
                                            echo $_SESSION['message'];
                                            unset($_SESSION['message']);
                                            ?>
                                            <?php endif ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2">
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