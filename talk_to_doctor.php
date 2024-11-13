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
                <center><h1 class="page-head-line">Some Tips To Talk To Your Doctor</h1></center>
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
                            <a id="design_head" data-toggle="collapse" data-toggle="dropdown" href="#collapse1">Set an Agenda</a>
                          </div>
                        </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          Many doctors’ visits last only 15–20 minutes, so it’s important to prioritize your concerns by setting an agenda, Roter says. According to her research, the length of an appointment matters less than its quality.
                          Before the visit begins, create a list of topics that you want to address.
                          Introduce them at the start of your visit.<br><br>
                          “The way in which time is used really makes a critical difference,”.
                          “Your outline doesn’t need to be complex; it can simply be that you have medical problems, fears or worries that you want to discuss.”
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
                          <a id="design_head" data-toggle="collapse" href="#collapse2">Be honest to your Doctor</a>
                        </h4>
                      </div>
                      <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">Roter urges patients to be honest about worries and concerns. She calls this telling the “real deal.” <br><br>
                          “It’s important to share things about your lifestyle, social obligations and relationships at home and at work,” she says.
                          “Sometimes patients are fearful that the doctor isn’t interested or that it isn’t relevant.” But providing detailed information helps a doctor get the full picture of your overall well-being and assess lifestyle factors that might contribute to your health. <br><br>
                          Also, don’t be afraid to bring up pain or a feeling that’s bothering you, even if it’s embarrassing. Your doctor’s job is to help you feel better, and he or she is required to protect your privacy.
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
                          <a id="design_head" data-toggle="collapse" href="#collapse3">Don't feel shy to ask questions</a>
                        </h4>
                      </div>
                      <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">Medical visits can be overwhelming and sometimes even the most well-meaning doctor can present too much information too quickly and in complex terms.
                          It’s OK to ask questions, and Roter stresses that you should feel comfortable asking as many of them as you need to understand your doctor’s advice.<br><br>
                          “Sometimes people are reluctant to ask questions. Ask your doctor to clarify what they’re saying in plain language if they’re talking in medical-speak,” . “It’s perfectly fine to say, ‘Sorry, I’m just not following you. Can you explain that in another way?’”<br><br>
                          Next, repeat the information back to your doctor. It will help the doctor know whether you understood. And if you didn’t understand everything? That’s perfectly natural, too. Often, a doctor will need to repeat information in a different way so that it’s clearer.<br><br>
                          Be sure your doctor has understood what you told him or her. If you emphasize your concerns, your doctor can explain his or her reason for reassuring you and revisit the issue more deeply.
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
                          <a id="design_head" data-toggle="collapse" href="#collapse4">Work Collaboratively</a>
                        </h4>
                      </div>
                      <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">It’s important to work together with your doctor for the best outcome. If your doctor recommends a treatment, share your worries about possible side effects or questions about other options.<br><br>
                          This is a way to actively partner with your doctor to make treatment decisions that are most likely to work for you. <br><br>
                          Most of all, try to control your anxiety by expecting a good outcome before the appointment starts.<br><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse5">What will your doctor do for you?</a>
                        </h4>
                      </div>
                      <div id="collapse5" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          You might not feel comfortable talking to your doctor about any mental or emotional problems you are having. But your doctor can help you. He or she can:
                          <ul>
                            <li>Ask you questions about your thoughts and feelings that might help you better understand what you are going through.</li><br>
                            <li>Give you reassurance that you aren’t “crazy” but have a medical problem.</li><br>
                            <li>Tell you what kinds of support are available, such as counseling.</li><br>
                            <li>Recommend lifestyle changes that can help improve your mental health, such as exercise.</li><br>
                            <li>Refer you to a specialist, if they think that would be more helpful.</li><br>
                            <li>See you at follow-up appointments to monitor how you are doing and how you are responding to treatment.</li><br>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse6">What to do before your appointment?</a>
                        </h4>
                      </div>
                      <div id="collapse6" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <ol>
                            <li><strong>Set reasonable goals for the appointment.</strong> : Diagnosing and treating mental illness takes time. If you set a goal of having your symptoms go away immediately, you will likely be disappointed. Instead, set a few reasonable goals. These could include explaining your symptoms to your doctor, learning a possible diagnosis, and coming up with a treatment plan.</li><br>
                            <li><strong>Write down important information.</strong> : Take some time before your appointment to write down what you’d like to talk about. This will help you make sure you don’t forget anything when you’re in the doctor’s office. Some things you can write down include:<br>
                              <ul>
                                <li>Your symptoms: These could be physical, mental, emotional, or behavioral changes that you’ve noticed in your life.</li><br>
                                <li>How your mood affects your everyday life.</li><br>
                                <li>Key personal information, such as traumatic events in your past, or current stressful situations you are facing.</li><br>
                                <li>Your medical information, such as other physical or mental conditions you currently have. Also write down all medicines you are taking, including over-the-counter medicine and herbal supplements.</li><br>
                                <li>Questions you want to ask your doctor.</li>
                              </ul>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse7">What to do during your appointment</a>
                        </h4>
                      </div>
                      <div id="collapse7" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <ul>
                            <li><strong>State your concerns plainly.</strong> : It’s important to tell your doctor all of your symptoms. But before you get into that, tell him or her what you think may be wrong. </li><br>
                            <li><strong>Be as open and honest with your doctor as possible.</strong> : He or she can’t help you if they don’t know everything that is going on. It can be hard to open up about your feelings. But your doctor is trained to deal with sensitive issues. They will be supportive and professional, and you won’t tell them anything they haven’t heard before.</li><br>
                            <li><strong>Refer to your notes.</strong> : It’s common to forget half of what you were going to say once you get in the doctor’s office. That’s why it’s important to write things down beforehand. If you use the notes you’ve prepared ahead of time, you won’t have to worry about forgetting important details.</li><br>
                            <li><strong>Understand the diagnosis process.</strong> : There is no simple blood test or scan that can tell you if you have depression, anxiety, bipolar disorder, or another mental illness. Sometimes it can be challenging for your doctor to be able to name the specific condition you have. Plus, you may have a combination of conditions that are causing your symptoms. </li><br>
                            <li><strong>Bring someone with you.</strong> : If you need support, invite a friend or family member to go to your appointment with you. They can help you understand and remember what the doctor tells you. They also may be able to tell the doctor about the changes they’ve noticed in you.</li>

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
                          <a id="design_head" data-toggle="collapse" href="#collapse8">What to do after your appointment</a>
                        </h4>
                      </div>
                      <div id="collapse8" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          <ol>
                            <li><strong>Follow through with treatment.</strong> : After you’ve shared your concerns and your doctor has given his or her diagnosis, together you will come up with a treatment plan. This may include talk therapy, medicine, lifestyle changes, or a referral to a specialist. It is your job to follow through with the treatment. Schedule appointments with a specialist or a therapist. Get your prescription filled and take the medicine as directed. Give the lifestyle changes a try, even if you don’t feel like it.<br>
                            <li><strong>Follow up with your doctor.</strong> : Your doctor will want to see you again in a few weeks to see if the treatment is working. It is important that you schedule a follow-up visit and go to the appointment, whether you are feeling better or not. If you aren’t feeling better, your doctor may have other ideas on ways to treat you. This could include changing your medicine, adding another medicine, or recommending other courses of action.</li><br>
                            <li><strong>Be patient.</strong> : It is important that you are patient with yourself and with your doctor through this process. You might have to try different medicines or a combination of medicines. You might need talk therapy and a mix of self-care strategies. It can take time to find the right treatment plan for you. Just don’t give up. You will feel better as long as you keep trying to find a solution.</li>
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
                          <a id="design_head" data-toggle="collapse" href="#collapse10">what are the things to consider?</a>
                        </h4>
                      </div>
                      <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body" id="design_body">
                          Having trouble with your mental health can affect you in many ways. It can make everything seem more difficult, and you might have trouble trying to get help. It can also affect your memory and concentration. That can make it more difficult to talk to your doctor and remember what he or she said. That’s why it’s important for you to write things down before you go into your appointment.
                          It may also be a good idea to write down what your doctor says during the appointment, so you don’t forget it later.The most important thing is that you get help.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 
        <div class="row">
          <div class="col-md-12">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="container-fluid">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a id="design_head"  data-toggle="collapse" href="#collapse10">what should we do to keep our body healthy and disease free?</a>
                    </h4>
                  </div>
                  <div id="collapse10" class="panel-collapse collapse">
                    <div class="panel-body" id="design_body">Protect yourself and those around you:<br>
                    <ul>
                    <li>Maintain a Healthy Weight.</li>
                    <li>Exercise Regularly.</li>
                    <li>Don't Smoke.</li>
                    <li>Eat a Healthy Diet.</li>
                    <li>Drink Alcohol Only in Moderation, If at All.</li>
                    <li>Protect Yourself from the Sun.</li>
                    <li>Protect Yourself From Sexually Transmitted Infections.</li>
                    <li>Get Screening Tests.</li>
                    </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>

</html>