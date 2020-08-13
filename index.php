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
            <li class="nav-item">
                <a class="nav-link" href="contactUs.php" style="font-size: medium">Contact Us</a>
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


<!------------------CONTENT START------------------------>
<div class="Welcoming">
    <h1 style="text-align:center"><b>CoJō - A Code Learning Dōjō</b></h1>
    <p style="text-align:center; font-size: x-large">Welcome to this Code Learning Dōjō application where you're the one in control of how and what you learn!</p>
</div>
<br>
<!--Row 1 - 1 box -->
<div class="row" style="text-align: center">
    <div class="col-xs-4">
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
            <img title="Click me for HTML" src="assets/img/HTML5_logo.png" alt="HTML Logo" class="center-block" id="HTML_logo" />
        </div>
    <div class="col-xs-4">
        <h2><u>Multiple Computing Languages to choose from!</u></h2>
        <p style="font-size: x-large">
            At CoJō, we want to give you the best possible experience and so we have a selection of languages from <i>Website Mark-Up</i> <b>HTML</b> to <i>Programming languages</i> such as <b>JavaScript</b> and beyond!
        <br>
        </p>
    </div>
    <div class="col-xs-4">
        <br />
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
        <a href="cSharpPage.php"><img title="Click me for C#" src="assets/img/Csharp_logo.png" alt="C_Sharp_Logo" class="center-block" id="Csharp_logo"/></a>
    </div>

</div>
<br>
<br>
<br>

<!--Row 2 ----- 3 boxes-->
<div class="row" style="text-align: center; height:250px">
    <div class="col-xs-4" style="border:solid">
        <h2><u><b style="color: lightgreen">STEP 1:</b> What exactly is "Code" & "Coding"?</u></h2>
        <p style="font-size: medium">
            We at CoJō want to give you the best possible experience and so you'll want to understand what a coding language is!
        </p>
        <p>
            <a class="btn btn-default" href="">Click me to find out &raquo;</a>
        </p>
    </div>
    <div class="col-xs-4" style="border:solid">
        <h2><u><b style="color: goldenrod">STEP 2:</b> Getting started</u></h2>
        <p style="font-size: medium">
            All of the available Topics have their own accompanying educational elements breaking them down and explaining them in terms you can understand!
        </p>
        <p>
            <a class="btn btn-default" onclick="" style="color: goldenrod">Tell me more &raquo;</a>
        </p>
    </div>
    <div class="col-xs-4" style="border:solid">
        <h2><u><b style="color: lightcoral">STEP 3:</b> Let's start learning! </u></h2>
        <p style="font-size: medium">
            Alongside the educational element, we include tests to practice what you've learnt and help you where you may have been going wrong.
        </p>
        <p>
            <a class="btn btn-default" href="topicsPage.php" style="color: lightcoral">Take me there &raquo;</a>
        </p>
    </div>
</div>

<!--Row 3 - 1 box -->
<div class="row" style="text-align: center">
    <div class="col-xs-4">
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
        <a href="cPlusPlusPage.php"><img title="Click me for C++" src="assets/img/Cplusplus_logo.png" alt="C_Plus_Logo" class="center-block" id="Cplus_logo" /></a>
    </div>
    <div class="col-xs-4">
        <h2><u><b style="color: purple">STEP 4:</b> For the Coder looking for a challenge!</u></h2>
        <p style="font-size: medium">
            If you feel confident enough, you can jump into our Tests and see how you fair! Each Topic has their own accompanying sets of Tests which uses a progressive difficulty system to slowly build-up your confidence and familiarity with the testing methods.
        </p>
        <p>
            <a class="btn btn-default" href="testsPage.php" style="color: purple">I'm Ready! &raquo;</a>
        </p>
    </div>
    <div class="col-xs-4">
        <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
        <a href="jsPage.php"><img title="Click me for JavaScript" src="assets/img/js-logo.png" alt="JavaScript_Logo" class="center-block" id="JavaScript_logo" /></a>
    </div>

</div>


</body>

</html>