<!DOCTYPE html>
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

<!-- External Test Scripts -->
<script src="assets/js/CustomScripts/whiteTierQuestions.js"></script>
<script src="assets/js/CustomScripts/orangeTierQuestions.js"></script>
<script src="assets/js/CustomScripts/countDownScript.js"></script>



<!--Personal Icons-->
<link href="assets/css/all.min.css" rel="stylesheet" />
<link href="assets/css/fontawesome.min.css" rel="stylesheet" />

<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet"/>
<link href="assets/css/bootstrap-theme.css" rel="stylesheet"/>
<link href="assets/css/themes/base/jquery-ui.css" rel="stylesheet"/>
<link href="assets/css/Site.css" rel="stylesheet"/>
<link href="assets/css/allTopicStyles.css" rel="stylesheet" />
<link href="assets/css/themes/base/accordion.css" rel="stylesheet"/>
<link href="assets/css/testStyles.css" rel="stylesheet" />

</head>

<body style="background-color: lightslategrey">
<!------------------NAV BAR SETTINGS------------------------>
<nav class="navbar navbar-inverse navbar-fixed-top">
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
</nav>
<div class="Welcoming">
    <h1 style="text-align:center;font-family: monospace"><b>JavaScript Tests</b><img class="topicLogos" alt="JavaScript_Logo"  src="assets/img/js-logo.png" /></h1>
    <h2 style="text-align:center">These tests are designed to take the information that you have learnt about JavaScript and apply it to see how the language works for yourself!</h2>
    <h3>Each test set is colour coded similar to that of Martial Art belts as this hopes to give yourself more sense of progression as you move up the tiers </h3>
    <h3 style="text-align:center">You can check out our <a class="btn-link" href="jsPage.php"><b><i style="color: lightblue">JavaScript Page HERE</i></b></a> if you need a refresher</h3>
</div>
    <!--------------------------Test Tier 1 WHITE----------------------------------------------------------------------------->
    <div class="row" style="border: dashed; color: papayawhip; height: 350px">
        <h1 style="text-align:center"> <b> White Belt Tests </b> <i class="fas fa-ribbon fa-1x"></i></h1>
        <h3 style="text-align:center">The following tests are short and more straight forward which allow for you to answer in confidence and build up your overall approach to the rest of the tests!</h3>
        <div class="col-xs-4">
            <div class="container1" style="border-style: solid">
                <div id="test1" style="display: none">
                    <div id="question1"></div>
                    <div id="answers1">
                        <div class="choices1" id="A1" onclick="checkAnswer1('A')"></div>
                        <div class="choices1" id="B1" onclick="checkAnswer1('B')"></div>
                        <div class="choices1" id="C1" onclick="checkAnswer1('C')"></div>
                    </div>
                    <div id="resultProgress1"></div>
                </div>
                <div id="scoreContainer1" style="display: none"></div>
            </div>
        </div>
        <!-- Second set of questions-->
        <div class="col-xs-4">
            <div class="container2" style="border-style: solid">
                <div id="test2" style="display: none">
                    <div id="question2"></div>
                    <div id="answers2">
                        <div class="choices2" id="A2" onclick="checkAnswer2('A')"></div>
                        <div class="choices2" id="B2" onclick="checkAnswer2('B')"></div>
                        <div class="choices2" id="C2" onclick="checkAnswer2('C')"></div>
                    </div>
                    <div id="resultProgress2"></div>
                </div>
                <div id="scoreContainer2" style="display: none"> </div>
            </div>
        </div>
        <!-- Third set of questions-->
        <div class="col-xs-4">
            <div class="container3" style="border-style: solid">
                <div id="test3" style="display: none">
                    <div id="question3"></div>
                    <div id="answers3"> <!-- This is 'choices' in video-->
                        <div class="choices3" id="A3" onclick="checkAnswer3('A')"></div>
                        <div class="choices3" id="B3" onclick="checkAnswer3('B')"></div>
                        <div class="choices3" id="C3" onclick="checkAnswer3('C')"></div>
                    </div>
                    <div id="resultProgress3"></div>
                </div>
                <div id="scoreContainer3" style="display: none"> </div>
            </div>
        </div>
    </div>
    <!------------------------------END OF WHITE TESTS------------------------------------------------------------------------->

    <br>

    <!------------------------------Test Tier 2 ORANGE------------------------------------------------------------------------->
    <div class="row" style="border: dashed; color: orange">
        <h1 style="text-align:center"><b> Orange Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
        <h3>Orange tier tests will be similar to Tier 1 but will use more technical terminology</h3>
        <div class="col-xs-4">
            <div class="container4" style="border-style: solid">
                <div id="test4" style="display: none">
                    <div id="question4"></div>
                    <div id="answers4">
                        <div class="choices4" id="A4" onclick="checkAnswer4('A')"></div>
                        <div class="choices4" id="B4" onclick="checkAnswer4('B')"></div>
                        <div class="choices4" id="C4" onclick="checkAnswer4('C')"></div>
                    </div>
                    <div id="resultProgress4"></div>
                </div>
                <div id="scoreContainer4" style="display: none"> </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="container5" style="border-style: solid">
                <div id="test5" style="display: none">
                    <div id="question5"></div>
                    <div id="answers5">
                        <div class="choice5" id="A5" onclick="checkAnswer5('A')"></div>
                        <div class="choice5" id="B5" onclick="checkAnswer5('B')"></div>
                        <div class="choice5" id="C5" onclick="checkAnswer5('C')"></div>
                    </div>
                    <div id="resultProgress5"></div>
                </div>
                <div id="scoreContainer5" style="display: none"> </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="container6" style="border-style: solid">
                <div id="test6" style="display: none">
                    <div id="question6"></div>
                    <div id="answers6">
                        <div class="choices6" id="A6" onclick="checkAnswer6('A')"></div>
                        <div class="choices6" id="B6" onclick="checkAnswer6('B')"></div>
                        <div class="choices6" id="C6" onclick="checkAnswer6('C')"></div>
                    </div>
                    <div id="resultProgress6"></div>
                </div>
                <div id="scoreContainer6" style="display: none"> </div>
            </div>
        </div>
    </div>
    <!------------------------------END OF ORANGE TESTS------------------------------------------------------------------------->
    <br>
    <!------------------------------------Test Tier 3 Yellow------------------------------------------------------------------->
    <div class="container" style="border: dashed; color: gold">
        <h1 style="text-align:center"><b> Yellow Belt Tests </b> <i class="fas fa-ribbon fa-1x"></i></h1>
        <h3 style="text-align:center">Yellow tier tests will now introduce a new way to answer questions as to keep your mind engaged</h3>

    </div>
    <br>
    <!------------------------------------Test Tier 4 Brown------------------------------------------------------------------->
    <div class="container" style="border: dashed; color: saddlebrown">
        <h1 style="text-align:center"><b> Brown Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
        <h3 style="text-align:center">These tests are designed to take the information that you have learnt from the JavaScript Topic Page and apply it to see how the code works for yourself.</h3>

    </div>
    <br>
    <!------------------------------------Test Tier 5------------------------------------------------------------------->
    <div class="container" style="border: dashed; color: black">
        <h1 style="text-align:center"><b> Black Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
            <h2 style="color:black; text-align:center"><b>Coming Soon</b></h2>
            <p id="countDownArea" style="text-align:center; font-size: x-large"></p>
    </div>
</body>
</html>



