<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="jQuery2.js"></script>
    <script src="jQuery3.js"></script>
    <title>Doctor's Appointment</title>
    <?php include('links.php'); ?>

</head>

<body>

    <div id="wrapper">
        <?php include('headeri.php'); ?>
        <?php include('dr_Sidebar.php'); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <center>
                                    <h1 class="page-head-line">Welcome Doctor</h1>
                                </center>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">


                                <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <br>
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <center>
                                                    <h4 style="font-family:'Book Antiqua'"><strong>PRESCRIPTION</strong></h4>
                                                </center>
                                            </div>



                                            <div class="panel-body" style='font-size:15px'>
                                                <form role="form" action="prescription_save.php" method="post">
                                                    <br>
                                                    <?php if (isset($_SESSION['message'])) :
                                                        echo $_SESSION['message'];
                                                        unset($_SESSION['message']);
                                                    ?>
                                                    <?php endif ?>


                                                    <div class="form-group">
                                                        <?php
                                                        $dept = $_SESSION['department'];
                                                        $doct = $_SESSION['doctor_slno'];

                                                        ?>
                                                        <input type="hidden" id="department" name="department" value="<?php echo  $_SESSION['department'];  ?>">
                                                        <input type="hidden" id="doctor" name="doctor" value="<?php echo $_SESSION['doctor_slno']; ?>">

                                                        <label>Date :</label>
                                                        <input class="form-control" type="Date" name="ptappdate" id="ptappdate"><br>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Patient Name :</label>

                                                        <select class="form-control form-select" name="ptname" id="ptname" required>
                                                            <option selected>Select patient First</option>

                                                        </select>




                                                    </div>

                                                    <div class="form-group">
                                                        <table id="ptrecord" class="table table-striped">

                                                        </table>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <label>Symptoms :</label>
                                                                <textarea class="form-control" name="Symptomps" id="" cols="30" rows="5" placeholder="Write the symptoms.."></textarea>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <label>Medical Test to be Done :</label>
                                                                <textarea class="form-control" name="MedicalTest" id="" cols="30" rows="5" placeholder="Write Required Medical Tests.."></textarea>
                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 col-xs-2"><label><img src="doc_img/rx.png" alt="" class="img-fluid" width="75px" height="75px"> </label>
                                                            </div>
                                                            <div class="col-md-10 col-sm-10 col-xs-10"> <textarea class="form-control" name="medicine" id="" cols="30" rows="5" placeholder="Write Medicines with proper time table.."></textarea>
                                                            </div>
                                                        </div>

                                                    </div>



                                                    <div class="form-group">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <button type="submit" class="btn btn-success center-block" name="upload">Save</button>
                                                            <br>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                        </div>
                                                        <br><br>


                                                    </div>


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
            </div>
        </div>


    </div>
    <?php include('footer.php'); ?>


</body>

</html>