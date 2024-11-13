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
    #design_head {
      font-size: large;
      color: darkred;
    }

    #design_body {
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
                <center>
                  <h1 class="page-head-line">Know Your Prescription</h1>
                </center>

              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="panel-group">
                  <div class="panel panel-default">
                    <div class="container-fluid">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a id="design_head" data-toggle="collapse" href="#collapse1">Clinical Condition Term</a>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">

                          <ul>
                            <li><strong>Rx :</strong> Prescription</li>
                            <li><strong>Dx :</strong> Diagnosis</li>
                            <li><strong>Sx :</strong> Symptoms</li>
                            <li><strong>Vx :</strong> Vomiting</li>
                            <li><strong>Tx :</strong> Treatment</li>
                            <li><strong>T1 Diab :</strong> Type 1 Diabetes</li>
                            <li><strong>T2 Diab :</strong> Type 2 Diabetes</li>
                          </ul>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse2">Pharmacy and drug terms</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">

                          <ul>
                            <li><strong>A.D. :</strong> As directed</li>
                            <li><strong>BD/BID :</strong> Twice a Day</li>
                            <li><strong>TID :</strong> Three Times Daily </li>
                            <li><strong>QHS/Nocte :</strong> At night/ Befor bed</li>
                            <li><strong>OD/QD :</strong> Once a Day</li>
                            <li><strong>QDS/QID :</strong> Four Times a Day</li>
                            <li><strong>OCC :</strong> Ointments</li>
                            <li><strong>GT :</strong> One Drop</li>
                            <li><strong>G.T.T :</strong> Drops </li>
                            <li><strong>UNG :</strong> Ointments</li>
                            <li><strong>PC :</strong> After meal (Post Cibum) </li>
                            <li><strong>AC :</strong> Before meal (Ante Cibum)</li>
                            <li><strong>HS :</strong> At Bedtime (Hora Somni) </li>
                            <li><strong>PRN :</strong> As needed (Pro Re Nata)</li>
                            <li><strong>QOD :</strong> Every Other Day </li>
                            <li><strong>Q4H :</strong> Every Four Hour</li>
                            <li><strong>Q6H :</strong> Every Six Hour</li>

                          </ul>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse3">Eye examination terms </a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <strong>Terms Use in Eye treatement :</strong>
                          <br>
                          <ul>
                            <li><strong>OS :</strong> Oculus Sinister (Left eye)</li>
                            <li><strong>OD :</strong> Oculus Dexter (Right eye)</li>
                            <li><strong>OU :</strong> Oculus Uterque (Both eyes)</li>
                            <li><strong>PD :</strong> Pupillary Distance</li>
                            <li><strong>GT :</strong> One drop</li>
                            <li><strong>AC :</strong> Anterior Chamber</li>
                            <li><strong>LVA :</strong> Low Vision Aid</li>
                          </ul>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse4">SOS (Saviour Drug)</a>
                        </h4>
                      </div>
                      <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <strong>If necessary :</strong> SOS in medicine means taken as required or used as needed. This SOS for medicine is used while writing prescription
                          where the physician informs his patient when a drug or medication should be taken. In medical terms, SOS is referred
                          to as “Saviour Drug or Medicine.”

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
                          <a id="design_head" data-toggle="collapse" href="#collapse5">5X a day</a>
                        </h4>
                      </div>
                      <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <strong>Five times a day :</strong> It just means take your meds as prescribed, spaced out 5 times a day, you'll get in a routine, first dose when you awake,
                          then about 5ish, then before bed.The 'x' indicates this prescription is taken for a period of 5 days.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>









            <!-- https://en.wikipedia.org/wiki/List_of_optometric_abbreviations 
      https://www.medicinenet.com/common_medical_abbreviations_and_terms/index.htm-->




          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>