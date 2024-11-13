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
                <center>
                  <h1 class="page-head-line"">FREQUENTLY ASKED Questions</h1></center>
          </div>
        </div>

        <div class=" row">
                    <div class="col-md-12">
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="container-fluid">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a id="design" data-toggle="collapse" href="#collapse1">What are allergies?</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body" id="body_design">An allergic reaction is a reaction to a substance that is typically harmless to most other people.
                                Allergies happen when a person’s immune system overreacts to a substance that the person has breathed in, touched, or eaten.
                                Allergens—the antigens that bring on an allergic reaction—may be foods, medications, plants or animals, chemicals, dust, or molds.
                                <br><br>Some common allergic reactions are high fever, an eye reaction, asthma, skin reactions, and many others.
                                A common cause for allergies are dust mites, a large part of household dust.
                                Cat and dog dander, or skin flakes, can cause an allergic reaction, such as sneezing, wheezing, and runny eyes and nose.
                                Common food allergy triggers are the proteins in cow’s milk, eggs, peanuts, wheat, soy, fish, shellfish, and tree nuts.
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
                            <a id="design" data-toggle="collapse" href="#collapse2">What are antibiotics?</a>
                          </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">Antibiotics are medicines that help the human body fight bacteria, either by killing the offending germs directly or by weakening them
                            so that the body’s own immune system can fight and kill them more easily.
                            The most widely known antibiotic is penicillin, which is made from mold.
                            Penicillin kills bacteria by interfering with the formation of the cell walls or cell contents of the bacteria.
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
                            <a id="design" data-toggle="collapse" href="#collapse3">Why is exercise important to health?</a>
                          </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">Exercise is good for your health.
                            Regular physical activity helps a person have stronger bones and muscles, helps control body fat,
                            helps prevent certain illnesses, and contributes to a good outlook on life. <br><br>Regular exercise helps promote digestion and a good night’s sleep.
                            When children exercise as part of their busy lives, they are better equipped to manage the physical and emotional challenges of a busy day.
                            Many governments and other organizations recommend at least 150 minutes of moderate-intensity physical activity every week.
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
                            <a id="design" data-toggle="collapse" href="#collapse4">Why is sleep necessary for good health?</a>
                          </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">Scientists do not know exactly why people need sleep, but studies show that sleep is necessary for survival.
                            Sleep appears to be necessary for the nervous system to work properly.
                            While too little sleep one night may leave us feeling drowsy and unable to concentrate the next day, a long period of too little sleep leads to poor memory
                            and physical performance. Hallucinations (experiencing things that aren’t really there), vision problems, and mood swings may develop if sleep deprivation continues.
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
                            <a id="design" data-toggle="collapse" href="#collapse5">How does substance abuse (drugs) affect a person’s health?</a>
                          </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">Taking drugs (other than those prescribed by a doctor for a specific illness) in amounts that are dangerous
                            or that prevent a person from doing everyday things, including going to school or work.
                            <br><br>The substance being abused can be <strong>alcohol, marijuana, pills called tranquilizers</strong> that make people feel very tired or relaxed,
                            household products that are inhaled, or a number of other drugs. Drug abuse happens all over the world, to all kinds of people, young and old.
                            It frequently causes terrible damage to a person’s body, to relationships with family and friends, and to career or education.
                            In some cases, substance abuse leads to death, because the abuser gets involved in an accident or because he or she takes enough of the substance to cause the body to completely shut down.
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
                            <a id="design" data-toggle="collapse" href="#collapse6">Can alcohol be bad for your health?</a>
                          </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">Alcohol is a type of drug known as a depressant that slows down the body’s central nervous system.
                            After a person has had a few drinks, it immediately affects the way they think or act.
                            Alcohol can make a person feel sleepy, less coordinated, and slow to react.
                            And it can cause your brain to feel foggy as well as make you think and see differently. <br>
                            After years of drinking, alcohol use can cause stomach and intestinal problems, liver damage, nerve and muscle damage, heart problems, and brain damage.
                            Alcohol can cause everything from blackouts to permanent loss of brain function and memory. Researchers have also linked long-term drinking to cancer of the throat, mouth, liver, esophagus, and larynx. Drinking alcohol can also lead to emotional and psychological problems such as sadness and depression.
                            If a pregnant woman drinks too much alcohol, it can seriously injure her unborn baby and result in birth defects.
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
                            <a id="design" data-toggle="collapse" href="#collapse7">Why is smoking cigarettes unhealthy?</a>
                          </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">In addition to the stimulant nicotine, cigarettes contain many harmful chemicals, <b>including tar and the poisonous gas carbon monoxide.</b>
                            These chemicals present health risks that range from bronchitis to cancer.
                            Doctors believe that cigarette smoking is the cause of 90 percent of all cases of lung cancer.
                            Heart disease, heart attack, and stroke are far more common in smokers.
                            <br><br>One of the effects of <b>nicotine</b> is constricting the blood vessels, which causes high blood pressure.
                            Another effect is that smoking raises your heart rate, which adds extra stress on your heart.
                            Smoking also affects every part of the body’s circulatory system. Your blood becomes thicker and stickier, making it harder for your heart to work effectively.
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
                            <a id="design" data-toggle="collapse" href="#collapse8">why should a person take proper diet?</a>
                          </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">A healthy diet is essential for good health and nutrition.
                            It protects you against many chronic noncommunicable diseases, such as heart disease, diabetes and cancer. Eating a variety of foods and consuming less salt, sugars and saturated and industrially-produced trans-fats, are essential for healthy diet.
                            A healthy diet comprises a combination of different foods. <br>These include:
                            <br>
                            <ul>
                              <li>Staples like cereals (wheat, barley, rye, maize or rice) or starchy tubers or roots (potato, yam, taro or cassava)</li><br>
                              <li>Legumes (lentils and beans).</li><br>
                              <li>Foods from animal sources (meat, fish, eggs and milk).</li><br>
                              <li>Fruit and vegetables.</li><br>
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
                            <a id="design" data-toggle="collapse" href="#collapse9">what precautions should be taken to prevent omicron?</a>
                          </h4>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">Protect yourself and those around you:<br>
                            <ul>
                              <li>Get vaccinated as soon as it’s your turn and follow local guidance on vaccination.</li><br>
                              <li>Keep physical distance of at least 1 metre from others, even if they don’t appear to be sick. Avoid crowds and close contact.</li><br>
                              <li>Wear a properly fitted mask when physical distancing is not possible and in poorly ventilated settings.</li><br>
                              <li>Clean your hands frequently with alcohol-based hand rub or soap and water.</li><br>
                              <li>Cover your mouth and nose with a bent elbow or tissue when you cough or sneeze. Dispose of used tissues immediately and clean hands regularly.</li><br>
                              <li>If you develop symptoms or test positive for COVID-19, self-isolate until you recover.</li><br>
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
                            <a id="design" data-toggle="collapse" href="#collapse10">what should we do to keep our body healthy and disease free?</a>
                          </h4>
                        </div>
                        <div id="collapse10" class="panel-collapse collapse">
                          <div class="panel-body" id="body_design">Protect yourself and those around you:<br>
                            <ul>
                              <li>Maintain a Healthy Weight.</li><br>
                              <li>Exercise Regularly.</li><br>
                              <li>Don't Smoke.</li><br>
                              <li>Eat a Healthy Diet.</li><br>
                              <li>Drink Alcohol Only in Moderation, If at All.</li><br>
                              <li>Protect Yourself from the Sun.</li><br>
                              <li>Protect Yourself From Sexually Transmitted Infections.</li><br>
                              <li>Get Screening Tests.</li><br>
                            </ul>
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