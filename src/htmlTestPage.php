<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoJō Home Page</title>

    <!--Browser version support-->
    <script src="../assets/js/modernizr-2.8.3.js"></script>
    <!--jQuery Link-->
    <script src="../assets/js/jquery-3.4.1.js"></script>
    <!--jQuery-UI Link-->
    <script src="../assets/js/jquery-ui-1.12.1.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/js/bootstrap.js"></script>
    <!--Personal Icons-->
    <link href="../assets/css/all.min.css" rel="stylesheet" />
    <link href="../assets/css/fontawesome.min.css" rel="stylesheet" />
    <!-- Stylesheets -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/themes/base/accordion.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/testStyles.css" rel="stylesheet" type="text/css" />

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
            <img src="../assets/img/CoJo_Logo.png"  title="CoJō Logo" alt="CoJō Home - Click to return to the home page" style="width:7%; float:left" />
            <a class="navbar-brand" href="../index.php" style="font-size: large">CoJō Home</a>
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
    <h1 style="text-align:center; font-family: monospace"><b>HTML & CSS Tests</b><img class="topicLogos" alt="HTML_Logo" src="../assets/img/HTML5_logo.png" /><img class="CSS_logo" alt="CSS_Logo" src="../assets/img/CSS3_logo.png" /></h1>
    <h2 style="text-align:center">These tests are designed to take the information that you have learnt about HTML and apply it to see how the language works for yourself!</h2>
    <h3>Each test set is colour coded similar to that of Martial Art belts as this hopes to give yourself more sense of progression as you move up the tiers </h3>
    <h3 style="text-align:center">You can check out our <a class="btn-link" href="htmlPage.php"><b><i style="color: lightblue">HTML & CSS Page HERE</i></b></a> if you need a refresher</h3>
</div>
<br>
<!--------------------------Test Tier 1----------------------------------------------------------------------------->
<div class="row" style=" color: papayawhip; height: auto">
    <h2 style="text-align: center"><u>Press the belt icon to minimise that tier</u></h2>
    <h1 style="text-align:center"> <b> White Belt Tests </b> <i class="fas fa-ribbon fa-1x" id="whiteBelt"></i></h1>
    <h3 style="text-align:center">The following tests are short and more straight forward which allow for you to answer in confidence and build up your overall approach to the rest of the tests!</h3>
    <div class="row" id="whiteGlobal">
        <div class="col-md-4">
            <h3 style="text-align: center"><u>Test 1</u></h3>
            <div class="htmlWContainer" style="border-style: solid; height: 250px;">
                    <div class="htmlQuestions" id="htmlQuestion1"></div>
                    <div class="htmlAnswers" id="htmlAnswers1">
                        <div class="htmlWChoices" id="htmlA1" onclick="checkHTMLAnswer1('A')"></div>
                        <div class="htmlWChoices" id="htmlB1" onclick="checkHTMLAnswer1('B')"></div>
                        <div class="htmlWChoices" id="htmlC1" onclick="checkHTMLAnswer1('C')"></div>
                    </div>
                    <div class="htmlResultProgress" id="htmlResultProgress1"></div>
                <div class="htmlScoreContainer" id="htmlScoreContainer1" style="display: none"></div>
            </div>
        </div>
        <!-- Second set of questions-->
        <div class="col-md-4">
            <h3 style="text-align: center"><u>Test 2</u></h3>
            <div class="htmlWContainer" style="border-style: solid; height: 250px;">
                    <div class="htmlQuestions" id="htmlQuestion2"></div>
                    <div class="htmlAnswers" id="htmlAnswers2">
                        <div class="htmlWChoices" id="htmlA2" onclick="checkHTMLAnswer2('A')"></div>
                        <div class="htmlWChoices" id="htmlB2" onclick="checkHTMLAnswer2('B')"></div>
                        <div class="htmlWChoices" id="htmlC2" onclick="checkHTMLAnswer2('C')"></div>
                    </div>
                    <div class="htmlResultProgress" id="htmlResultProgress2"></div>
                <div class="htmlScoreContainer" id="htmlScoreContainer2" style="display: none"> </div>
            </div>
        </div>
        <!-- Third set of questions-->
        <div class="col-md-4">
            <h3 style="text-align: center"><u>Test 3</u></h3>
            <div class="htmlWContainer" style="border-style: solid; height: 250px;">
                    <div class="htmlQuestions" id="htmlQuestion3"></div>
                    <div class="htmlAnswers" id="htmlAnswers3"> <!-- This is 'choices' in video-->
                        <div class="htmlWChoices" id="htmlA3" onclick="checkHTMLAnswer3('A')"></div>
                        <div class="htmlWChoices" id="htmlB3" onclick="checkHTMLAnswer3('B')"></div>
                        <div class="htmlWChoices" id="htmlC3" onclick="checkHTMLAnswer3('C')"></div>
                    </div>
                    <div class="htmlResultProgress" id="htmlResultProgress3"></div>
                <div class="htmlScoreContainer" id="htmlScoreContainer3" style="display: none"> </div>
            </div>
        </div>
    </div>
</div>
<br>
<!------------------------------------------------------------------------------------------------------------------------->
<!------------------------------Test Tier 2 ORANGE------------------------------------------------------------------------->
<div class="row" style="color: orange">
    <h1 style="text-align:center"><b> Orange Belt Tests </b><i class="fas fa-ribbon fa-1x" id="orangeBelt"></i></h1>
    <h3 style="text-align:center">Orange belt tests will be of a similar to White Belt but will use more technical terminology with increased difficulty</h3>
    <div class="row" id="orangeGlobal">
        <div class="col-md-4">
            <div class="htmlOContainer" style="border-style: solid">
                <div class="htmlQuestions"  id="htmlQuestion4"></div>
                <div class="htmlOAnswers" id="htmlAnswers4">
                    <div class="htmlOChoices" id="htmlA4" onclick="htmlCheckAnswer4('A')"></div>
                    <div class="htmlOChoices" id="htmlB4" onclick="htmlCheckAnswer4('B')"></div>
                    <div class="htmlOChoices" id="htmlC4" onclick="htmlCheckAnswer4('C')"></div>
                </div>
                <div class="htmlOResultProgress"  id="htmlResultProgress4" style="margin-top:18%"></div>
                <div class="htmlScoreContainer"  id="htmlScoreContainer4" style="display: none"> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="htmlOContainer" style="border-style: solid">
                <div class="htmlQuestions"  id="htmlQuestion5"></div>
                    <div class="htmlOAnswers" id="htmlAnswers5">
                        <div class="htmlOChoices" id="htmlA5" onclick="htmlCheckAnswer5('A')"></div>
                        <div class="htmlOChoices" id="htmlB5" onclick="htmlCheckAnswer5('B')"></div>
                        <div class="htmlOChoices" id="htmlC5" onclick="htmlCheckAnswer5('C')"></div>
                    </div>
                    <div class="htmlOResultProgress"  id="htmlResultProgress5" style="margin-top: 18%"></div>
                <div class="htmlScoreContainer"  id="htmlScoreContainer5" style="display: none"> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="htmlOContainer" style="border-style: solid">
                <div class="htmlQuestions"  id="htmlQuestion6"></div>
                    <div class="htmlOAnswers" id="htmlAnswers6">
                        <div class="htmlOChoices" id="htmlA6" onclick="htmlCheckAnswer6('A')"></div>
                        <div class="htmlOChoices" id="htmlB6" onclick="htmlCheckAnswer6('B')"></div>
                        <div class="htmlOChoices" id="htmlC6" onclick="htmlCheckAnswer6('C')"></div>
                    </div>
                <div class="htmlOResultProgress"  id="htmlResultProgress6"></div>
                <div class="htmlScoreContainer"  id="htmlScoreContainer6" style="display: none"> </div>
            </div>
        </div>
    </div>
</div>
<!-----------------------------------------END OF ORANGE TESTS------------------------------------------------------------>

<br>

<!------------------------------------Test Tier 3 Yellow------------------------------------------------------------------->
<div class="row" style="color: gold">
    <h1 style="text-align:center"><b> Yellow Belt Tests </b> <i class="fas fa-ribbon fa-1x" id="yellowBelt"></i></h1>
    <h3 style="text-align:center">These tests will now introduce a new way to answer questions as to keep your mind thinking!</h3>
    <div class="row" id="yellowGlobal">
        <h3 style="text-align:center">Try and complete these equations with the provided pieces of code!</h3>

        <!--        Equation / area where elements are dragged to-->
        <div class="row" id="equations" style="text-align: center; height: auto">
            <div class="col-md-4">
                <h3><b><u>Equation 1:</u></b><br>What is the missing tag in this example?</h3>
                <br>
                <div>
                    <img src="../assets/img/Screenshots/whatIsMissing.png" style="height:235px; width: 450px">
                    <div class="dropZoneQ1" style="padding-left: 10%; text-align: center; width: 100%">


                    </div>_____________________
                    <br>

                </div>
                <div class="results">
                    <h3 class="correct" id="correct1" style="display: none">That is correct! <br> Well done!<br> :) </h3> <h3 class="wrong" id="wrong1" style="display: none">This is incorrect! <br> Try again!<br>:( </h3>
                </div>
            </div>
            <!--////////////////////////////////////////////////////////////////////////-->
            <div class="col-md-4">
                <h3><b><u>Equation 2:</u></b><br> Which of these correctly applies a Bold effect on text?</h3>
                <br>
                <div>
                    <p style="font-size: medium">
                    <div class="dropZoneQ2" style="width: 200px; padding-left: 27px">


                    </div>______________________);
                    <br>
                    </p>
                </div>
                <div class="results">
                    <h3 class="correct" id="correct2" style="display: none">That is correct! <br> Well done!<br> :) </h3> <h3 class="wrong" id="wrong2" style="display: none">This is incorrect! <br> Try again!<br>:( </h3>
                </div>
                <!--/////////////////////////////////////////////////////////////////////////-->
            </div>
            <div class="col-md-4">
                <h3><b><u>Equation 3:</u></b><br> Which is the correct output of 'values'?</h3>
                <br>
                <p style="font-size: medium">
                    var x = "0.3";
                    var y = "2.11";
                    var z = "7"
                    <br>
                    var values = x + y + z;
                </p>
                <br>

                <div class="dropZoneQ3">

                </div>________________
                <br>
                <div class="results">
                    <h3 class="correct" id="correct3" style="display: none">That is correct! <br> Well done!<br> :) </h3> <h3 class="wrong" id="wrong3" style="display: none">This is incorrect! <br> Try again!<br>:( </h3>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!--        Area for the draggable content-->
        <div class="row" id="codePieces" style="text-align: center; height: auto">
            <div class="col-md-4">
                <h3><b><u>Equation 1 Pieces:</u></b></h3>
                <div class="htmlPieces">
                    <img src="../assets/img/Screenshots/htmlChoice1.png" style="height:30px; width: 150px" class="draggableContentQ1" draggable="true" alt="First droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/htmlChoice2.png" style="height:25px; width: 250px" class="draggableContentQ1" draggable="true" alt="Second droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/htmlChoice3.png" style="height:30px; width: 400px; margin-right: 2%" class="draggableContentQ1" draggable="true" alt="Third droppable item">
                </div>
                <button style="text-align: center; color: black">RESET</button>
            </div>
            <div class="col-md-4">
                <h3><b><u>Equation 2 Pieces:</u></b></h3>
                <div class="htmlPieces">
                    <img src="../assets/img/Screenshots/boldTextExample1.png" style="height:30px; width: 350px" class="draggableContentQ2" draggable="true" alt="First droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/boldExample2.png" style="height:150px; width: 200px" class="draggableContentQ2" draggable="true" alt="Second droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/boldExample3.png" style="height:35px; width: 350px" class="draggableContentQ2" draggable="true" alt="Third droppable item">
                </div>
                <button style="text-align: center; color: black" onclick="">RESET</button>
            </div>
            <div class="col-md-4">
                <h3><b><u>Equation 3 Pieces:</u></b></h3>
                <div class="htmlPieces">
                    <p style="font-size: large" class="draggableContentQ3" id="e2Snip1" draggable="true">9.41</p>
                    <br>
                    <p style="font-size: large" class="draggableContentQ3" id="e2Snip2" draggable="true">0.32.117</p>
                    <br>
                    <p style="font-size: large" class="draggableContentQ3" id="e2Snip3" draggable="true">0.37.1099999</p>
                </div>
                <button style="text-align: center; color: black">RESET</button>
            </div>
        </div>

    </div>
</div>
<br>
<!------------------------------------Test Tier 4 Brown------------------------------------------------------------------->
<div class="container" style="color: saddlebrown">
    <h1 style="text-align:center"><b> Brown Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <h3 style="text-align:center">These tests will be designed to take the information that you learn and apply it to real examples with code generated by yourself to see if you really know your stuff!</h3>

    <h2 style="color:saddlebrown; text-align:center"><b><i>Coming Soon</i></b></h2>
    <p id="countDownArea" style="text-align:center; font-size: x-large"></p>
</div>

<!------------------------------------Test Tier 5------------------------------------------------------------------->
<div class="container" style="color: black">
    <h1 style="text-align:center"><b> Black Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <h3 style="text-align:center">These tests will be designed to push you to the limit of your knowledge! Expertly devise your own answer to complex questions that will prove if you have learnt truly what it means to be a Coding Master!</h3>
    <h2 style="color:black; text-align:center"><b>Coming Soon</b></h2>
    <p id="countDownArea1" style="text-align:center; font-size: x-large"></p>
</div>

<script src="../assets/js/CustomScripts/htmlWhiteQuestions.js"></script>
<script src="../assets/js/CustomScripts/htmlOrangeQuestions.js"></script>
<script src="../assets/js/CustomScripts/htmlYellowQuestions.js"></script>

<script src="../assets/js/CustomScripts/countDownScript.js"></script>

</body>
</html>