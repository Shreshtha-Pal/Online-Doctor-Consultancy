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
                  <h1 class="page-head-line">How to talk to Pharmacy</h1>
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
                          <div class="dropdown">
                            <a id="design_head" data-toggle="collapse" data-toggle="dropdown" href="#collapse1">What to ask your Pharmacy</a>
                          </div>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <ul>
                            <li>What is the most important information I should know about this medicine?</li><br>
                            <li>How do I pronounce the name of my medicine? Does it go by any other name(s)? What are the brand and generic (non-brand) names?</li><br>
                            <li>Are there any cheaper options? Is a generic available? Are there any co-pay assistance coupons?</li><br>
                            <li>How does this medicine work and what is it used for?</li><br>
                            <li>How and when should I use it? How much do I use? Should I take it with food or without food, before a meal or after a meal? What time of the day should I use it? How many times a day is it used? Is there a limit on how often I should use it?</li><br>
                            <li>How long should I use it? Can I stop using the medicine or use less if I feel better? In what circumstances should I stop taking this medicine?</li><br>
                            <li>What should I do if I …miss a dose? ….throw up shortly after taking a dose? ….use too much? ….lose the medicine?</li><br>
                            <li>Will this take the place of anything else I am taking?</li><br>
                            <li>When will the medicine start working? How should I expect to feel?</li><br>
                            <li>Are there any special directions for using this?</li><br>
                            <li>Should I avoid any other medicines, dietary supplements, drinks, foods, activities, or other things? Do I have to space this medicine out from any other medicines or food?</li><br>
                            <li>Does this medicine contain any ingredients I am allergic to?</li><br>
                            <li>Is there anything I should watch for, like allergic reactions or side effects? What are the serious side effects? What do I do if I get any?</li><br>
                            <li>Will I need any tests to check the medicine's effects (blood tests, x-rays, other)? When will I need those?</li><br>
                            <li>How and where should I store this medicine? Is it stored at room temperature or refrigerated or frozen? What should I do if I left it in a hot car?</li><br>
                            <li>When should I throw out this medicine? When does it expire?</li><br>
                            <li>Is there a medication guide or other patient information for this medicine?</li><br>
                            <li>Where and how can I get more written information?</li><br>
                            <li>When should I contact my doctor about this medicine? In what situation should I call 911?</li><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse2">What to do before you leave the pharmacy after picking up your prescription</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <ul>
                            <li><strong>Look to be sure you have the right medicine</strong> : If you've bought the medicine before, make sure this medicine has the same shape, color, size, markings, and packaging. Anything different? Don’t hesitate to ask your pharmacist. If it seems different when you use it, tell your pharmacist, doctor, or other healthcare professional.</li><br>
                            <li><strong>Be sure you know the right dose for the medicine and you know how to use it</strong> : Unsure about anything? Ask your pharmacist.</li><br>
                            <li><strong>For liquid medicines, make sure there is a measuring spoon, cup, or syringe</strong> : If the medicine doesn't come with a special measuring tool, ask your pharmacist for one. (Spoons used for eating and cooking may give the wrong dose. Don't use them.)</li><br>
                            <li><strong>Be sure you have any information the pharmacist can give you about the medicine</strong> : Read it and save it.</li><br>
                            <li><strong>Get the pharmacy’s phone number and hours</strong> : so you can call back for any questions or refills.</li><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse3">What questions to ask Pharmacy about your medicine</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <ul>
                            <li><strong>What is this medication called?</strong><br>Medications usually have two names: a brand name and a generic name.
                              Pharmacy will let you know both and give you information that has both names printed out for you. </li><br>
                            <li><strong>What does this medication do?</strong><br>Medicines have intended effects and side effects, and it is important your pharmacist describes these for you.
                              They review that record to see precisely why a specific medicine was chosen for your care and explain to you how it works for your particular condition. They will explain what to watch for and what to avoid. They’ll always remind you when a side effect is serious enough to get follow-up attention.</li><br>
                            <li><strong>When do I stop taking this medication?</strong><br>It is important to take your medications as your doctor prescribed them. If you have any question about whether it’s OK to stop taking a medication, contact our provider immediately.</li><br>
                            <li><strong>What if I take herbal medicines and nonprescription drugs?</strong><br>Certain vitamins, supplements, and over-the-counter medications can interact with your prescribed medications. </li><br>
                            <li><strong>What if I forget to take this medication on time?</strong><br>Pharmacy will give you instructions that explain what to do if you forget a dose of your new medication. If you misplace your instructions please give them a call. </li><br>
                            <li><strong>What if I become pregnant?</strong><br>Contact your Pharmacy immediately. Certain medications can affect unborn babies. Some medicines require a pregnancy test before they’re given to be certain there won’t be any complications to you or a developing baby. </li><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse4">what are the precautions to take before buying pharmacy products</a>
                        </h4>
                      </div>
                      <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <ol>
                            <li><strong>Carry the prescription</strong></li><br>
                            <li><strong>Insist on a bill or a receipt</strong></li><br>
                            <li><strong>Understand what an active-ingredient is</strong></li><br>
                            <li><strong>Look out for the expiration date as well as date of manufacture</strong></li><br>
                            <li><strong>General precautions :</strong>
                              <ul>
                                <li>Never accept medication where the packaging seems damaged or puffed up</li>
                                <li>Never accept medicines that don’t look authentic or if they look tampered with</li>
                                <li>Avoid self-medication</li>
                                <li>Check dosage</li>
                              </ul>
                            </li>
                          </ol>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse5">What kinds of medications are hazardous?</a>
                        </h4>
                      </div>
                      <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          Some hazardous medications include:<br><br>
                          <ul>
                            <li><strong>Chemotherapy [kee-moe-THAIR-eh-pee]</strong> medications that keep certain cells from growing or acting abnormally.</li><br>
                            <li><strong>Immunotherapy [in-myoo-no-THAIR-eh-pee]</strong> medications that boost the body’s immune (disease fighting) system.</li><br>
                            <li><strong>Immunosuppressant [im-myoo-no-suh-PRESS-ent]</strong> medications that suppress the immune system.</li><br>
                          </ul>These medications may be given as pills, skin creams, injections, or through an IV (intravenous) line.
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
                          <a id="design_head" data-toggle="collapse" href="#collapse6">How to keep others safe while taking hazardous medications at home?</a>
                        </h4>
                      </div>
                      <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          To keep others safe at home, follow these steps:<br><br>
                          <ul>
                            <li><strong>Use caution around anyone who is pregnant or breastfeeding.</strong> Those who are pregnant, breastfeeding, or who may become pregnant, should NOT handle these medications.</li><br>
                            <li><strong>The medication should only be handled by the person taking it or the caregiver,</strong> if possible.</li><br>
                            <li><strong>Wash your hands</strong> before and after handling the medication.</li><br>
                            <li><strong>Wear latex or nitrile gloves</strong> when using all medications, except pills. Wash your hands before putting on the gloves. When finished, throw the gloves away and wash your hands again.</li><br>
                            <li><strong>Keep others away from any spills.</strong> Clean up the spill right away. Clean the area with a moist paper towel and dish detergent, then rinse. Use a spill kit if you are given one. Paper towels or cloths used to clean a spill can be put in the regular trash.</li><br>
                            <li><strong>If medication gets on the skin,</strong> wash and rinse the area using soap and a lot of water. If the skin stays red for more than an hour, call your doctor.</li><br>
                            <li><strong>If medication gets into the eye,</strong> rinse the eye for 15 minutes using tap water. Seek emergency care.</li><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse7">How to Buy Medicines Safely From an Online Pharmacy</a>
                        </h4>
                      </div>
                      <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          Ever been tempted to buy your medicines from an online pharmacy or another website?<br><br>
                          Protect yourself and your family by using caution when buying medicine online. There are many pharmacy websites that operate legally and offer convenience, privacy, and safeguards for purchasing medicines.<br><br>
                          But the U.S. Food and Drug Administration warns that there are many rogue online pharmacies that claim to sell prescription medicines at deeply discounted prices, often without requiring a valid prescription. These Internet-based pharmacies often sell unapproved or counterfeit medicines outside the safeguards followed by licensed pharmacies.<br><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse8">Signs of a Rogue Online Pharmacy</a>
                        </h4>
                      </div>
                      <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <strong>Beware of online pharmacies that:</strong><br><br>
                          <li>Allow you to buy prescription medicine without a valid prescription from your health care provider.</li><br>
                          <li>Do not have a U.S. state-licensed pharmacist available to answer your questions.</li><br>
                          <li>Offer very low prices that seem too good to be true.</li><br>
                          <li>Send spam or unsolicited email offering cheap medicine.</li><br>
                          <li>Are located outside of the United States or ship worldwide.</li><br>
                          <strong>These pharmacies often sell medicines that can be dangerous because they may:</strong><br><br>
                          <li>Have too much or too little of the active ingredient you need to treat your disease or condition.</li><br>
                          <li>Not contain the right active ingredient.</li><br>
                          <li>Contain the wrong or other harmful ingredients.</li><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse9">Know the Signs of a Safe Online Pharmacy</a>
                        </h4>
                      </div>
                      <div id="collapse9" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <strong>There are ways you can identify a safe online pharmacy. They:</strong><br><br>

                          <li>Require a valid prescription from a doctor or another licensed health care professional.</li><br>
                          <li>Are licensed by your state board of pharmacy, or equivalent state agency. (To verify the licensing status of a pharmacy check your <a href="https://www.fda.gov/drugs/besaferx-your-source-online-pharmacy-information/know-your-online-pharmacy">board of pharmacy.)</a> </li><br>
                          <li>Have a U.S. state-licensed pharmacist available to answer your questions.</li><br>
                          <li>Are in the United States, and provide a street address.</li><br>
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