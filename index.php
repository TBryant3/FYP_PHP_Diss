<?php
//
//include 'config/dbFunctions.php';
//?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoJō Home Page</title>

    <!--Browser version support-->
    <script src="assets/js/modernizr-2.8.3.js"></script>
    <!--jQuery Link-->
    <script src="assets/js/jquery-3.4.1.js"></script>
    <!--jQuery-UI Link-->
    <script src="assets/js/jquery-ui-1.12.1.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.js"></script>

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />
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


<!------------------CONTENT START------------------------>
<div class="Welcoming">
    <h1 style="text-align:center">CoJō -A Code Learning Dōjō</h1>
    <p style="text-align:center; font-size: large">Welcome to this Code Learning Dōjō application where you're the one in control of how and what you learn!</p>
</div>
<!--Row 1 - 1 box -->
<div class="row" style="text-align: center">
    <div class="col-xs-2"></div>
    <div class="col-xs-2">
        <br />
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
        <img class="center-block" id="HTML_logo" title="HTML Logo" alt="HTML_Logo" src="assets/img/HTML5_logo.png" />
    </div>
    <div class="col-xs-4">
        <h3><u>Multiple Computing Languages to choose from!</u></h3>
        <p style="font-size: medium">
            We at CoJō want to give you the best possible experience and so we have a selection of languages from <b>Website Mark-Up HTML</b> to <b>Programming language JavaScript</b> and more!
        <br>
        </p>
    </div>
    <div class="col-xs-2">
        <br />
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
        <img class="center-block" id="Csharp_logo" title="C-Sharp Logo" alt="C_Sharp_Logo" src="assets/img/Csharp_logo.png" />
    </div>
    <div class="col-xs-2"></div>
</div>

<!--Row 2 ----- 3 boxes-->
<div class="row" style="text-align: center">
    <div class="col-xs-1"></div>
    <div class="col-xs-3" style="border:solid">
        <h2>Getting started</h2>
        <p>
            All of our Topics have their own accompanying educational elements breaking them down and explaining them in terms you can understand!
        </p>
        <p>
            <a class="btn btn-default" href="">Learn more &raquo;</a>
        </p>
    </div>
    <div class="col-xs-4" style="border:solid">
        <h2>Find out more about us</h2>
        <p>
            We at CoJō want to give you the best possible experience and so you'll want to understand what a coding language is! Click here to find out more
        </p>
        <p>
            <a class="btn btn-default" href="">Learn more &raquo;</a>
        </p>
    </div>
    <div class="col-xs-3" style="border:solid">
        <h2>For the Coder looking for a challenge!</h2>
        <p>
            Alongside the educational element, we include tests to practice what you've learnt and help you where you may have been going wrong.
        </p>
    </div>
    <div class="col-xs-1"></div>
</div>

<!--Row 3 - 1 box -->
<div class="row" style="text-align: center">
    <div class="col-xs-2"></div>
    <div class="col-xs-2">
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
        <img class="center-block" id="Cplus_logo" title="C Plus Plus Logo" alt="C_Plus_Logo"  src="assets/img/Cplusplus_logo.png" />
    </div>
    <div class="col-xs-4">
        <h2>Find out more about us</h2>
        <p>
            We at CoJō want to give you the best possible experience and so you'll want to understand what a coding language is! Click here to find out more
        </p>
    </div>
    <div class="col-xs-2">
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
        <img class="center-block" id="JavaScript_logo" title="JavaScript Logo" alt="JavaScript_Logo"  src="assets/img/js-logo.png" />
    </div>
    <div class="col-xs-2"></div>
</div>

</body>

</html>