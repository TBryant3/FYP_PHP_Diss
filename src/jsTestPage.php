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
    <h1 style="text-align:center;font-family: monospace"><b>JavaScript Tests</b><img class="topicLogos" alt="JavaScript_Logo"  src="../assets/img/js-logo.png" /></h1>
    <h2 style="text-align:center">These tests are designed to take the information that you have learnt about JavaScript and apply it to see how the language works for yourself!</h2>
    <h3>Each test set is colour coded similar to that of Martial Art belts as this hopes to give yourself more sense of progression as you move up the tiers </h3>
    <h3 style="text-align:center">You can check out our <a class="btn-link" href="jsPage.php"><b><i style="color: lightblue">JavaScript Page HERE</i></b></a> if you need a refresher</h3>
</div>
<br>
<!--------------------------Test Tier 1 WHITE----------------------------------------------------------------------------->
<div class="row" style="color: papayawhip; height: auto">
    <h2 style="text-align: center"><u>Press the belt icon to minimise that tier</u></h2>
    <h1 style="text-align:center"><b> White Belt Tests </b> <i class="fas fa-ribbon fa-1x" id="whiteBelt"></i></h1>
    <h3 style="text-align:center">The following tests are short and more straight forward which allow for you to answer in confidence and build up your overall approach to the rest of the tests!</h3>
    <div class="row" id="whiteGlobal">
        <div class="col-md-4">
            <h3 style="text-align: center"><u>Test 1</u></h3>
            <div class="jsWContainer" style="border-style: solid">
                    <div class="jsQuestions" id="jsQuestion1"></div>
                    <div class="jsAnswers" id="jsAnswers1">
                        <div class="jsWChoices" id="A1" onclick="jsCheckAnswer1('A')"></div>
                        <div class="jsWChoices" id="B1" onclick="jsCheckAnswer1('B')"></div>
                        <div class="jsWChoices" id="C1" onclick="jsCheckAnswer1('C')"></div>
                    </div>
                    <div class="jsResultProgress" id="jsResultProgress1"></div>
                <div class="jsScoreContainer" id="jsScoreContainer1" style="display: none"></div>
            </div>
        </div>
        <!-- Second set of questions-->
        <div class="col-md-4">
            <h3 style="text-align: center"><u>Test 2</u></h3>
            <div class="jsWContainer" style="border-style: solid">
                    <div class="jsQuestions" id="jsQuestion2"></div>
                    <div class="jsAnswers" id="jsAnswers2">
                        <div class="jsWChoices" id="A2" onclick="jsCheckAnswer2('A')"></div>
                        <div class="jsWChoices" id="B2" onclick="jsCheckAnswer2('B')"></div>
                        <div class="jsWChoices" id="C2" onclick="jsCheckAnswer2('C')"></div>
                    </div>
                    <div class="jsResultProgress" id="jsResultProgress2"></div>
                <div class="jsScoreContainer" id="jsScoreContainer2" style="display: none"> </div>
            </div>
        </div>
        <!-- Third set of questions-->
        <div class="col-md-4">
            <h3 style="text-align: center"><u>Test 3</u></h3>
            <div class="jsWContainer" style="border-style: solid">
                    <div class="jsQuestions" id="jsQuestion3"></div>
                    <div class="jsAnswers" id="jsAnswers3">
                        <div class="jsWChoices" id="A3" onclick="jsCheckAnswer3('A')"></div>
                        <div class="jsWChoices" id="B3" onclick="jsCheckAnswer3('B')"></div>
                        <div class="jsWChoices" id="C3" onclick="jsCheckAnswer3('C')"></div>
                    </div>
                    <div class="jsResultProgress" id="jsResultProgress3"></div>
                <div class="jsScoreContainer" id="jsScoreContainer3" style="display: none"> </div>
            </div>
        </div>
    </div>
</div>
    <!------------------------------END OF WHITE TESTS------------------------------------------------------------------------->

    <br>

    <!------------------------------Test Tier 2 ORANGE------------------------------------------------------------------------->
<div class="row" style="color: orange">
    <h1 style="text-align:center"><b> Orange Belt Tests </b><i class="fas fa-ribbon fa-1x" id="orangeBelt"></i></h1>
    <h3 style="text-align:center">Orange belt tests will be of a similar to White Belt but will use more technical terminology with increased difficulty</h3>
    <div class="row" id="orangeGlobal">
        <div class="col-md-4">
            <div class="jsOContainer" style="border-style: solid">
                    <div class="jsQuestions" id="jsQuestion4"></div>
                    <div class="jsAnswers" id="jsAnswers4">
                        <div class="jsOChoices" id="A4" onclick="jsCheckAnswer4('A')"></div>
                        <div class="jsOChoices" id="B4" onclick="jsCheckAnswer4('B')"></div>
                        <div class="jsOChoices" id="C4" onclick="jsCheckAnswer4('C')"></div>
                    </div>
                    <div class="jsResultProgress" id="jsResultProgress4"></div>
                <div class="jsScoreContainer" id="jsScoreContainer4" style="display: none"> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="jsOContainer" style="border-style: solid">
                    <div class="jsQuestions" id="jsQuestion5"></div>
                    <div class="jsAnswers" id="jsAnswers5">
                        <div class="jsOChoices" id="A5" onclick="jsCheckAnswer5('A')"></div>
                        <div class="jsOChoices" id="B5" onclick="jsCheckAnswer5('B')"></div>
                        <div class="jsOChoices" id="C5" onclick="jsCheckAnswer5('C')"></div>
                    </div>
                    <div class="jsResultProgress" id="jsResultProgress5"></div>
                <div class="jsScoreContainer" id="jsScoreContainer5" style="display: none"> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="jsOContainer" style="border-style: solid">
                    <div class="jsQuestions" id="jsQuestion6"></div>
                    <div class="jsAnswers" id="jsAnswers6">
                        <div class="jsOChoices" id="A6" onclick="jsCheckAnswer6('A')"></div>
                        <div class="jsOChoices" id="B6" onclick="jsCheckAnswer6('B')"></div>
                        <div class="jsOChoices" id="C6" onclick="jsCheckAnswer6('C')"></div>
                    </div>
                    <div class="jsResultProgress" id="jsResultProgress6"></div>
                <div class="jsScoreContainer" id="jsScoreContainer6" style="display: none"> </div>
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
                <h3><b><u>Equation 1:</u></b><br>Complete the function to change the colour of SINGLE div</h3>
                <br>
                <div>
                    <p style="font-size: medium">
                        function changeColour()
                        {
                        <div class="dropZoneQ1">


                        </div>_____________________
                        <br>
                        (colourBox).style.backgroundColor = "green";
                        }
                    </p>
                </div>
                <div class="results">
                    <h3 class="correct" id="correct1" style="display: none">That is correct! <br> Well done!<br> :) </h3> <h3 class="wrong" id="wrong1" style="display: none">This is incorrect! <br> Try again!<br>:( </h3>
                </div>
            </div>
            <!--////////////////////////////////////////////////////////////////////////-->
            <div class="col-md-4">
                <h3><b><u>Equation 2:</u></b><br> Complete the EventListener</h3>
                <br>
                <div>
                    <p style="font-size: medium">
                        btnEvent.addEventListener("click",
                        <div class="dropZoneQ2" style="width: 200px; padding-left: 27px">


                        </div>______________________);
                        <br>
                        function displayAlert()
                        {
                            alert('Hello World')
                        }
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
                <div class="jsPieces">
                   <img src="../assets/img/Screenshots/getElementSnip.png" style="height:25px" class="draggableContentQ1" id="e1Snip1" draggable="true" alt="First droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/getElementClassNameSnip.png" style="height:25px;" class="draggableContentQ1" id="e1Snip2" draggable="true" alt="Second droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/getElementTagNameSnip.png" style="height:25px;" class="draggableContentQ1" id="e1Snip3" draggable="true" alt="Third droppable item">
                </div>
                <button style="text-align: center; color: black">RESET</button>
            </div>
            <div class="col-md-4">
                <h3><b><u>Equation 2 Pieces:</u></b></h3>
                <div class="jsPieces">
                    <img src="../assets/img/Screenshots/jsE2Snip2.png" style="height:25px; width: 150px" class="draggableContentQ2" id="e2Snip1" draggable="true" alt="First droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/jsE2Snip.png" style="height:25px; width: 150px" class="draggableContentQ2" id="e2Snip2" draggable="true" alt="Second droppable item">
                    <br>
                    <img src="../assets/img/Screenshots/jsE2Snip3.png" style="height:25px; width: 75px" class="draggableContentQ2" id="e2Snip3" draggable="true" alt="Third droppable item">
                </div>
                <button style="text-align: center; color: black" onclick="">RESET</button>
            </div>
            <div class="col-md-4">
                <h3><b><u>Equation 3 Pieces:</u></b></h3>
                <div class="jsPieces">
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
<br>
<br>
<br>
    <!------------------------------------Test Tier 4 Brown------------------------------------------------------------------->
    <div class="container" style="color: saddlebrown">
        <h1 style="text-align:center"><b> Brown Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
        <h3 style="text-align:center">These tests will be designed to take the information that you learn and apply it to real examples with code generated by yourself to see if you really know your stuff!</h3>
        <h2 style="color:saddlebrown; text-align:center"><b><i>Coming Soon</i></b></h2>
        <p id="countDownArea" style="text-align:center; font-size: x-large"></p>
    </div>
    <br>
    <!------------------------------------Test Tier 5------------------------------------------------------------------->
    <div class="container" style="color: black">
        <h1 style="text-align:center"><b> Black Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
        <h3 style="text-align:center">These tests will be designed to push you to the limit of your knowledge! Expertly devise your own answer to complex questions that will prove if you have learnt truly what it means to be a Coding Master!</h3>
        <h2 style="color:black; text-align:center"><b><i>Coming Soon</i></b></h2>
        <p id="countDownArea1" style="text-align:center; font-size: x-large"></p>
    </div>
<br>

<!-- External Test Scripts -->
<script src="../assets/js/CustomScripts/jsWhiteQuestions.js"></script>
<script src="../assets/js/CustomScripts/jsOrangeQuestions.js"></script>
<script src="../assets/js/CustomScripts/jsYellowQuestions.js"></script>

<script src="../assets/js/CustomScripts/countDownScript.js"></script>
</body>
</html>