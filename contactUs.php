<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>

    <!--Browser version support-->
    <script src="assets/js/modernizr-2.8.3.js"></script>
    <!--jQuery Link-->
    <script src="assets/js/jquery-3.4.1.js"></script>
    <!--jQuery-UI Link-->
    <script src="assets/js/jquery-ui-1.12.1.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.js"></script>


    <!--Personal Icons-->
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/fontawesome.min.css" rel="stylesheet" />

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />

    <style>
        .formContainer {
            padding: 1%;

        }

        input[type=text] {
            width: 100%;
            padding: 1%;
        }

        input[type=text]:focus {
            background-color: #ddd;
        }

        .submit:hover {
            background-color: darkgray;
        }
    </style>
</head>

<body>
<!------------------NAV BAR SETTINGS------------------------>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="assets/img/CoJo_Logo.png"  title="CoJō Logo" alt="CoJō Home - Click to return to the home page" style="width:7%; float:left" />
            <a class="navbar-brand" href="index.php" style="font-size: large">CoJō Home</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="topicsPage.php" style="font-size: medium">Topics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testsPage.php" style="font-size: medium">Tests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php" style="font-size: medium">About CoJō</a>
                </li>
            </ul>
            <div class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php" style="font-size: medium">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php" style="font-size: medium">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>




<h1 style="text-align:center"><u><b>Contact CoJō</b></u></h1>
<h2 style="text-align:center">This is the area to get in contact to ask questions and or to find out more information about any of the topics included in this application</h2>
<h3 style="text-align:center">The following form asks for the details used for your account as to help get a more tailored response for you!</h3>
<form method="post" id="contactForm" action="">
    <div class="formContainer">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="row" style="width:100%">
                    <i class="fa fa-user"></i>
                    <label for="username" style="width:25%">Username:</label>
                    <input type="text" id="usernameInput" name="username" placeholder="Insert Username...." required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-envelope"></i>
                    <label for="email" style="width:25%">Email:</label>
                    <input type="text" id="emailInput" name="email" placeholder="_________.co.uk" required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-book"></i>
                    <label for="subject" style="width:25%">Subject:</label>
                    <input type="text" id="subjectInput" name="subject" placeholder="Insert your subject matter..." required>
                </div>
                <br />
                <div class="row" style="width:100%">                    
                    <i class="fa fa-info"></i>
                    <label for="extraInfo" style="width:26%">Extra Information:</label>
                    <input type="text" id="infoInput" name="extraInfo" placeholder="Any more details can go here..." >
                </div>
                <br />
                <div class="row">
                    <button type="submit" id="submitBtn" onclick="confirmMessage()" style="border-radius:5%; height:5%; width:10%; margin-left:52%">Submit</button>
                </div>
                
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <div class="row" style="text-align:center">
    <h1 style="text-align: center"><i><b>Alternatively</b></i></h1>
    <h1 style="text-align: center"><u><b>Find us on Social Media</b></u></h1>
        <div class="col-xs-3"></div>
        <div class="col-xs-6" style="color: dodgerblue">
            <a  href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square fa-9x" style="cursor: pointer"></i></a>
            <a  href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-9x" style="cursor: pointer"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter-square fa-9x" style="cursor: pointer"></i></a>
        </div>
        <div class="col-xs-3"></div>
    </div>
    <br>
    <br>

    <div id="formContainer">
        <div class="row" style="text-align:center">
            <h1><u><b>Where we are</b></u></h1>
                <address>
                    <br>
                    <abbr title="Office Address" style="font-size: x-large"><b>Address:</b></abbr>
                    <p style="font-size: medium">123 Carendan Road<br />
                    London, EC1A 4NT</p><br />
                    <abbr title="Telephone Number" style="font-size: x-large"><b>Telephone:</b></abbr>
                    <p style="font-size: medium">0118 999 881 999 119 725 3</p>
                </address>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.5132215270094!2d-0.06746489616339846!3d51.50794376357336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760357196b5e3d%3A0xb885ac56e90836e!2sIpsos%20MORI!5e0!3m2!1sen!2suk!4v1585769091840!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:solid" allowfullscreen="" aria-hidden="false" tabindex="0" id="map"></iframe>
                <address>
                    <strong>Support:</strong>   <a href="mailto:CoJoSupport@cojo.com">CoJoSupport@cojo.com</a><br />
                </address>


            

        </div>
    </div>
</form>
</body>
</html>

<!--// JS SCRIPTS //-->

<script>
    $('#submitBtn').button(); 
    function confirmMessage()
    {
        window.alert("Thank you!" + "\n" + "This feature is not functional but is to show the form submission");
    };

    if ($("#usernameInput").Text == null)
    {
        $('#submitBtn').button("disable");
    };

</script>