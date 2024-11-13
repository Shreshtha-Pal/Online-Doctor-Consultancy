<?php
session_start();
?>


<?php
include('connect.php');
//$conn = mysqli_connect("localhost", "root", "", "drapp") or die("Database Error");

if ($_SERVER['REQUEST_METHOD'] ==  'POST') 
{

    $_appdate = $_REQUEST['ptappdate'];
    $_pt_slno = $_REQUEST['ptname'];
    $_symptoms = $_REQUEST['Symptomps'];
    $_medicaltest = $_REQUEST['MedicalTest'];
    $medicine = $_REQUEST['medicine'];

    $sql = "SELECT max(prescription_slno) as 'dsl' FROM `tbl_prescription`";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) 
    {
        global  $pid;
        $pid = $row['dsl'];
    }

    if ($pid == NULL) 
    {
        $pid = 1;
    } else 
    {
        $pid = $pid + 1;
    }
    

    $dept = $_SESSION['department'];
    $doct = $_SESSION['doctor_slno'];


    $sql1 = "INSERT INTO `tbl_prescription`(`prescription_slno`, `dprt_id`, `doctor_slno`, `patient_slno`, `symptoms`, `medical_test`, `medicine`, `app_date`)
    values('$pid','$dept','$doct','$_pt_slno','$_symptoms','$_medicaltest','$medicine','$_appdate')";
    

    $_result = mysqli_query($conn, $sql1);
    
    
    if ($_result)
    {
        $_SESSION['message'] = '<div class="alert alert-success center-block" role="alert" style="width: 50%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Success!!</strong>
                                    </i>
                                    Prescription made Successfully...</p>
                              </div>';
    } 
    else 
    {
        $_SESSION['message'] =  '<div class="alert alert-danger center-block" role="alert" style="width: 50%">
                                 <p class="text-center">
                                    <i class="fa fa-exclamation-triangle">
                                       <strong>Try Again!!</strong>
                                    </i>
                                    Please, Try Again...
                                 </p>
                             </div>';
                            
    }
    header("Location:prescribe.php");
}
