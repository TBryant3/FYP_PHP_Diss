<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>

    <!--Browser version support-->
    <script src="/scripts/modernizr-2.8.3.js"></script>
    <!--jQuery Link-->
    <script src="/scripts/jquery-3.4.1.js"></script>
    <!--jQuery-UI Link-->
    <script src="/scripts/jquery-ui-1.12.1.js"></script>
    <!-- Bootstrap -->
    <script src="/scripts/bootstrap.js"></script>
    <!--Personal Icons-->
    <script src="https://kit.fontawesome.com/70ac388725.js" crossorigin="anonymous"></script>

    <!-- Stylesheets -->
    <link href="/styles/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/styles/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="/styles/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="/styles/Site.css" rel="stylesheet" type="text/css" />
    <link href="/styles/allTopicStyles.css" rel="stylesheet" type="text/css" />

    <style>
        .formContainer {
            padding: 1%;
            background-color: white;
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
<!--NAV BAR SETTINGS-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="img/CoJo_Logo.png"  title="CoJō Logo" alt="CoJō Home - Click to return to the home page" style="width:7%; float:left" />
            <a class="navbar-brand" href="index.php"> CoJō Home</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="topicsPage.php">Topics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testsPage.php">Tests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About CoJō</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
            </ul>
            <div class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>




<h1 style="text-align:center">Contact CoJo </h1>
<h2 style="text-align:center">This is the space to get in contact to ask questions and or to find out more information about any of the topics included in this application</h2>

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
                    <label>Extra Information:</label>
                    <input type="text" id="infoInput" name="extraInfo" placeholder="Any more details can go here..."></>
                </div>
                <br />
                <div class="row">
                    <button type="submit" id="submitBtn" onclick="confirmMessage()" style="border-radius:5%; height:15%; width:20%; margin-left:45%">Submit</button>
                </div>
                
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <div id="formContainer">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <h3><u>Where we are:</u></h3>
                <address>
                    <br />
                    <abbr title="Office Address"><b>Address:</b></abbr>
                    123 Carendan Road<br />
                    London, EC1A 4NT<br />
                    <abbr title="Telephone Number"><b>Telephone:</b></abbr>
                    0118 999 881 999 119 725 3
                </address>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.5132215270094!2d-0.06746489616339846!3d51.50794376357336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760357196b5e3d%3A0xb885ac56e90836e!2sIpsos%20MORI!5e0!3m2!1sen!2suk!4v1585769091840!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:solid" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


                <address>
                    <strong>Support:</strong>   <a href="mailto:CoJoSupport@cojo.com">CoJoSupport@cojo.com</a><br />
                </address>
            </div>
            <div class="col-md-4"></div>
            

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