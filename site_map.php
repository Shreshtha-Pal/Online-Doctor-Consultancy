<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDIGROW</title>
    <style>
        /* (A) LIST TO MENU */
        .tree,
        .section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .tree {
            background: #fbfbfb;
            border: 0;
        }

        .tree li {
            border-bottom: 1px solid #d2d2d2;
            padding: 0;
        }

        .tree li:last-child {
            border: 0;
        }

        /* (B) SUB-SECTIONS */
        /* (B1) TOGGLE SHOW/HIDE */
        .section ul {
            display: none;
        }

        .section input:checked~ul {
            display: block;
        }

        /* (B2) HIDE CHECKBOX */
        .section input[type=checkbox] {
            display: none;
        }

        /* (B3) ADD EXPAND/COLLAPSE ICON  */
        .section {
            position: relative;
            padding-left: 35px !important;
        }

        .section label:after {
            content: "\0002B";
            position: absolute;
            top: 0;
            left: 0;
            padding: 0;
            text-align: center;
            font-size: 30px;
            color: #f00;
            transition: all 0.5s;
        }

        .section input:checked~label:after {
            color: #23c37a;
            transform: rotate(45deg);
        }

        /* (B4) SUB-SECTION ITEMS */
        .section ul {
            margin-top: 5px;
            margin-bottom: 20px;
        }

        .section ul li {
            color: blue;
        }
    </style>
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
                                <center><h1 class="page-head-line">Site Map</h1></center>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                            </div>

                            <div class="col-md-6" style='font-size:17px'>
                                <div class="panel-group">
                                    <div class="panel panel-success">
                                        <div class="panel-body">
                                            <div class="container-fluid">
                                                <ul class="tree">
                                                    <!-- (C) SECTION WITH SUB-SECTION -->
                                                    <li>
                                                        <label>
                                                            <h4 style="font-family:'Book Antiqua'"><i class="fa fa-user-md"></i> &nbsp;&nbsp; <strong>MEDIGROW</strong></h4>
                                                        </label>
                                                        <ul>
                                                            <li class="section">
                                                                <input type="checkbox" id="dashboard" />
                                                                <label for="dashboard">Dashboard</label>
                                                                <ul>
                                                                    <li>Registered Doctor.</li>
                                                                    <li>Registered Patient.</li>
                                                                    <li>Total Ambulance.</li>
                                                                    <li>Registered Pathology.</li>
                                                                    <li>Booked Appointment.</li>
                                                                    <li>Clinic/Departent.</li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="register" />
                                                                <label for="register">Registration</label>
                                                                <ul>
                                                                    <li>Doctor Registration.</li>
                                                                    <li>Patient Registration.</li>
                                                                    <li>Lab Registration.</li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="login" />
                                                                <label for="login">Login</label>
                                                                <ul>
                                                                    <li class="section">
                                                                        <input type="checkbox" id="doctor" />
                                                                        <label for="doctor">Doctor Login</label>
                                                                        <ul>
                                                                            <li>Doctor's Profile.</li>
                                                                            <li>Schedule.</li>
                                                                            <li>Prescribe.</li>
                                                                            <li>Payment Details.</li>
                                                                            <li>Logout.</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="section">
                                                                        <input type="checkbox" id="patient" />
                                                                        <label for="patient">Patient Login</label>
                                                                        <ul>
                                                                            <li>Patient's Profile.</li>
                                                                            <li>Book Appointment.</li>
                                                                            <li>Patient Medical History.</li>
                                                                            <li>Lab Booking.</li>
                                                                            <li> Lab Reports.</li>
                                                                            <li>Patient Wallet.</li>
                                                                            <li>Ambulance Service.</li>
                                                                            <li>Logout.</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="section">
                                                                        <input type="checkbox" id="lab" />
                                                                        <label for="lab">Laboratory Login</label>
                                                                        <ul>

                                                                            <li>Laboratory's Profile.</li>
                                                                            <li>Patient Profile.</li>
                                                                            <li>Reports.</li>
                                                                            <li>Logout.</li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="medibot" />
                                                                <label for="medibot">Medibot</label>
                                                                <ul>
                                                                    <li>Ask About Your Quearies to the Medibot <b>(chatbot)</b>.</li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="viewdr" />
                                                                <label for="viewdr">View Doctors</label>
                                                                <ul>
                                                                    <li>View the Doctor's Profile of Different Departments.</li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="faq" />
                                                                <label for="faq">FAQ</label>
                                                                <ul>
                                                                    <li>Get the Answers of some Frequently asked Questions.</li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="sidemap" />
                                                                <label for="sidemap">Site Map</label>
                                                                <ul>
                                                                    <li>Whole Site View of This Website for The Users</li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="help" />
                                                                <label for="help">Help</label>
                                                                <ul>
                                                                    <li>Help Center.</li>
                                                                    <li>Contact Us.</li>
                                                                    <li>About Us.</li>
                                                                </ul>
                                                            </li>
                                                            <li class="section">
                                                                <input type="checkbox" id="others" />
                                                                <label for="others">Others</label>
                                                                <ul>
                                                                    <li class="section">
                                                                        <input type="checkbox" id="ttd" />
                                                                        <label for="ttd">Tips Talk to Doctor</label>
                                                                        <ul>
                                                                            <li>Some Tips to Talk to Your Doctor.</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="section">
                                                                        <input type="checkbox" id="ttp" />
                                                                        <label for="ttp">Tips Talk to Pharmacy</label>
                                                                        <ul>
                                                                            <li>How to Talk to Pharmacy.</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="section">
                                                                        <input type="checkbox" id="kyp" />
                                                                        <label for="kyp">Know Your Prescription</label>
                                                                        <ul>
                                                                            <li>Know About Your Prescription Details.</li>
                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
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