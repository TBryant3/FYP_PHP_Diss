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
    <script src="assets/js/CustomScripts/accordionScripts.js"></script>
    <script src="assets/js/CustomScripts/countDownScript.js"></script>
    <script src="assets/js/CustomScripts/whiteTierQuestions.js"></script>
    <script src="assets/js/CustomScripts/orangeTierQuestions.js"></script>

    <!--Personal Icons-->
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/fontawesome.min.css" rel="stylesheet" />

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/base/accordion.css" rel="stylesheet" type="text/css" />
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
    <h1 style="text-align:center; font-family: monospace"><b>HTML & CSS Tests</b><img class="topicLogos" alt="HTML_Logo" src="assets/img/HTML5_logo.png" /></h1>
    <h2 style="text-align:center">These tests are designed to take the information that you have learnt about HTML and apply it to see how the language works for yourself!</h2>
    <h3>Each test set is colour coded similar to that of Martial Art belts as this hopes to give yourself more sense of progression as you move up the tiers </h3>
    <h3 style="text-align:center">You can check out our <a class="btn-link" href="htmlPage.php"><b><i style="color: lightblue">HTML & CSS Page HERE</i></b></a> if you need a refresher</h3>
</div>
<!--------------------------Test Tier 1----------------------------------------------------------------------------->
<div class="row" style="border: dashed; color: papayawhip; height: 350px">
    <h1 style="text-align:center"> <b> White Belt Tests </b> <i class="fas fa-ribbon fa-1x"></i></h1>
    <h3 style="text-align:center">The following tests are short and more straight forward which allow for you to answer in confidence and build up your overall approach to the rest of the tests!</h3>
    <div class="col-xs-4">
        <div class="HTMLcontainer1" style="border-style: solid">
            <div id="HTMLtest1" style="display: none">
                <div id="HTMLquestion1"></div>
                <div id="HTMLanswers1">
                    <div class="HTMLchoices1" id="HTMLA1" onclick="checkHTMLAnswer1('A')"></div>
                    <div class="HTMLchoices1" id="HTMLB1" onclick="checkHTMLAnswer1('B')"></div>
                    <div class="HTMLchoices1" id="HTMLC1" onclick="checkHTMLAnswer1('C')"></div>
                </div>
                <div id="HTMLresultProgress1"></div>
            </div>
            <div id="HTMLscoreContainer1" style="display: none"></div>
        </div>
    </div>


    <!-- Second set of questions-->
    <div class="col-xs-4">
        <div class="HTMLcontainer2" style="border-style: solid">
            <div id="HTMLtest2" style="display: none">
                <div id="HTMLquestion2"></div>
                <div id="HTMLanswers2">
                    <div class="HTMLchoices2" id="HTMLA2" onclick="checkHTMLAnswer2('A')"></div>
                    <div class="HTMLchoices2" id="HTMLB2" onclick="checkHTMLAnswer2('B')"></div>
                    <div class="HTMLchoices2" id="HTMLC2" onclick="checkHTMLAnswer2('C')"></div>
                </div>
                <div id="HTMLresultProgress2"></div>
            </div>
            <div id="HTMLscoreContainer2" style="display: none"> </div>
        </div>
    </div>
    <!-- Third set of questions-->
    <div class="col-xs-4">
        <div class="HTMLcontainer3" style="border-style: solid">
            <div id="HTMLtest3" style="display: none">
                <div id="HTMLquestion3"></div>
                <div id="HTMLanswers3"> <!-- This is 'choices' in video-->
                    <div class="HTMLchoices3" id="HTMLA3" onclick="checkHTMLAnswer3('A')"></div>
                    <div class="HTMLchoices3" id="HTMLB3" onclick="checkHTMLAnswer3('B')"></div>
                    <div class="HTMLchoices3" id="HTMLC3" onclick="checkHTMLAnswer3('C')"></div>
                </div>
                <div id="HTMLresultProgress3"></div>
            </div>
            <div id="HTMLscoreContainer3" style="display: none"> </div>
        </div>
    </div>
</div>
<br>
<!------------------------------------------------------------------------------------------------------------------------->
<!------------------------------Test Tier 2 ORANGE------------------------------------------------------------------------->
<div class="row" style="border: dashed; color: orange">
    <h1 style="text-align:center"><b> Orange Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <h3>Orange tier tests will be similar to Tier 1 but will use more technical terminology</h3>
    <div class="col-xs-4">
        <div class="HTMLcontainer4" style="height: 30%">
            <div id="HTMLquestion4"><h3>QUESTION</h3></div>
            <div id="HTMLanswers4">
                <div class="HTMLchoices4" id="HTMLA4" onclick="checkHTMLAnswer4('A')">Script</div>
                <div class="HTMLchoices4" id="HTMLB4" onclick="checkHTMLAnswer4('B')">Div</div>
                <div class="HTMLchoices4" id="HTMLC4" onclick="checkHTMLAnswer4('C')">Style</div>
            </div>
        </div>
    </div>
</div>
<br>
<!------------------------------------Test Tier 3 YELLOW------------------------------------------------------------------->
<div class="row" style="border: dashed; color: gold">
    <h1 style="text-align:center"><b> Yellow Belt Tests </b> <i class="fas fa-ribbon fa-1x"></i></h1>
    <p style="text-align:center">Yellow tier tests will now introduce a new way to answer questions as to keep your mind engaged</p>
    <div class="HTMLcontainer5" style="height: 30%">
        <div id="HTMLquestion5"><h3>QUESTION</h3></div>
        <div id="HTMLanswers5">
            <div class="HTMLchoices5" id="HTMLA5" onclick="checkAnswer5('A')">Script</div>
            <div class="HTMLchoices5" id="HTMLB5" onclick="checkAnswer5('B')">Div</div>
            <div class="HTMLchoices5" id="HTMLC5" onclick="checkAnswer5('C')">Style</div>
        </div>
    </div>
</div>
<br />
<!------------------------------------Test Tier 4 BROWN------------------------------------------------------------------->
<!--<div class="row" style="border: dashed; color: saddlebrown">-->
<!--    <h1 style="text-align:center"><b> Brown Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>-->
<!--    <p style="text-align:center">These tests are designed to take the information that you have learnt from the JavaScript Topic Page and apply it to see how the code works for yourself.</p>-->
<!--    <div class="container" style="height: 30%">-->
<!--        <div id="question"><h3>QUESTION</h3></div>-->
<!--        <div id="answers">-->
<!--            <div class="choices" id="A" onclick="checkHTMLAnswer1('A')">Script</div>-->
<!--            <div class="choices" id="B" onclick="checkHTMLAnswer1('B')">Div</div>-->
<!--            <div class="choices" id="C" onclick="checkHTMLAnswer1('C')">Style</div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row" style="height: 30%">-->
<!---->
<!--    </div>-->
<!--    <div class="row" style="height: 30%">-->
<!---->
<!--    </div>-->
<!--    <br>-->
<!---->
<!--    <div style="border: solid; height: 10%; margin-bottom: 1%">-->
<!--        <p>HINT AREA</p>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--<br />-->
<!------------------------------------Test Tier 5------------------------------------------------------------------->
<div class="container" style="border: dashed; color: black">
    <h1 style="text-align:center"><b> Black Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <h2 style="color:black; text-align:center"><b>Coming Soon</b></h2>
    <p id="countDownArea" style="text-align:center; font-size: x-large"></p>
</div>
</div>

</body>
</html>



