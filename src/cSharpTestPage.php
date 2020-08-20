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
    <!-- Stylesheets -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/themes/base/accordion.css" rel="stylesheet" type="text/css" />
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
    <h1 style="text-align:center"><b>C# Tests </b><img class="topicLogos" alt="C_Sharp_Logo" src="../assets/img/Csharp_logo.png" /></h1>
    <h2 style="text-align:center">These tests are designed to take the information that you have learnt about HTML and apply it to see how the language works for yourself!</h2>
    <h3>Each test set is colour coded similar to that of Martial Art belts as this hopes to give yourself more sense of progression as you move up the tiers </h3>
    <h3 style="text-align:center">You can check out our <a class="btn-link" href="cSharpPage.php"><b><i style="color: lightblue">C# Page HERE</i></b></a> if you need a refresher</h3>
</div>
<!--------------------------Test Tier 1----------------------------------------------------------------------------->
<div class="container" style="border: dashed; color: papayawhip">
    <h1 style="text-align:center"> <b> White Belt Tests </b> <i class="fas fa-ribbon fa-1x"></i></h1>
    <h3 style="text-align:center">The following tests are short and more straight forward which allow for you to answer in confidence and build up your overall approach to the rest of the tests!</h3>

    <div class="row" style="height: 30%">
        <div id="question"><h3>Question 1:</h3></div>
        <div id="answers">
            <div class="choices" id="A" onclick="checkCSAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkCSAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkCSAnswer1('C')">Style</div>
        </div>
    </div>

    <div class="row" style="height: 30%">

    </div>
    <div class="row" style="height: 30%">

    </div>
    <br>

    <div style="border: solid; height: 10%; margin-bottom: 1%">
        <p>HINT AREA</p>
    </div>
</div>
<br>
<!------------------------------Test Tier 2------------------------------------------------------------------------->
<div class="container" style="border: dashed; color: orange">
    <h1 style="text-align:center"><b> Orange Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <h3>Orange tier tests will be similar to Tier 1 but will use more technical terminology</h3>
    <div class="row" style="height: 30%">
        <div id="question"><h3>QUESTION</h3></div>
        <div id="answers">
            <div class="choices" id="A" onclick="checkCSAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkCSAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkCSAnswer1('C')">Style</div>
        </div>
    </div>
    <div class="row" style="height: 30%">

    </div>
    <div class="row" style="height: 30%">

    </div>
    <br>

    <div style="border: solid; height: 10%; margin-bottom: 1%">
        <p>HINT AREA</p>
    </div>
</div>
<br>
<!------------------------------------Test Tier 3------------------------------------------------------------------->
<div class="container" style="border: dashed; color: gold">
    <h1 style="text-align:center"><b> Yellow Belt Tests </b> <i class="fas fa-ribbon fa-1x"></i></h1>
    <p style="text-align:center">Yellow tier tests will now introduce a new way to answer questions as to keep your mind engaged</p>

    <div class="row" style="height: 30%">
        <div id="question"><h3>QUESTION</h3></div>
        <div id="answers">
            <div class="choices" id="A" onclick="checkCSAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkCSAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkCSAnswer1('C')">Style</div>
        </div>
    </div>
    <div class="row" style="height: 30%">

    </div>
    <div class="row" style="height: 30%">

    </div>
    <br>

    <div style="border: solid; height: 10%; margin-bottom: 1%">
        <p>HINT AREA</p>
    </div>
</div>
<br />
<!------------------------------------Test Tier 4------------------------------------------------------------------->
<div class="container" style="border: dashed; color: saddlebrown">
    <h1 style="text-align:center"><b> Brown Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <p style="text-align:center">These tests are designed to take the information that you have learnt from the JavaScript Topic Page and apply it to see how the code works for yourself.</p>

    <div class="row" style="height: 30%">
        <div id="question"><h3>QUESTION</h3></div>
        <div id="answers">
            <div class="choices" id="A" onclick="checkCSAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkCSAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkCSAnswer1('C')">Style</div>
        </div>
    </div>
    <div class="row" style="height: 30%">

    </div>
    <div class="row" style="height: 30%">

    </div>
    <br>

    <div style="border: solid; height: 10%; margin-bottom: 1%">
        <p>HINT AREA</p>
    </div>

</div>
<br />
<!------------------------------------Test Tier 5------------------------------------------------------------------->
<div class="container" style="border: dashed; color: black">
    <h1 style="text-align:center"><b> Black Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <p style="text-align:center">These tests are designed to take the information that you have learnt from the JavaScript Topic Page and apply it to see how the code works for yourself.</p>

    <div class="row" style="height: 30%">
        <div id="question"><h3>QUESTION</h3></div>
        <div id="answers">
            <div class="choices" id="A" onclick="checkCSAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkCSAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkCSAnswer1('C')">Style</div>
        </div>
    </div>
    <div class="row" style="height: 30%">

    </div>
    <div class="row" style="height: 30%">

    </div>
    <br>

    <div style="border: solid; height: 10%">
        <p>HINT AREA</p>
    </div>
    <br>
</div>

</body>
</html>


<!--Scripts-->
<script>
//
//    const question = document.getElementById("question");
//    const answerA = document.getElementById("A");
//    const answerB = document.getElementById("B");
//    const answerC = document.getElementById("C");
//
//    let whiteQuestions = [
//        {
//            question : "Which of these tags do you need to add JavaScript to a HTML document?",
//            answerA : "Script",
//            answerB : "Div",
//            answerC : "Style",
//            correctAnswer : "A"
//        },
//        {
//            question : "What type of computing language is JavaScript?",
//            answerA : "Mark-Up",
//            answerB : "StyleSheet",
//            answerC : "Scripting",
//            correctAnswer : "C"
//        },
//        {
//            question : "JavaScript can be used to create webpages instead of HTML?",
//            answerA : "True",
//            answerB : "False",
//            answerC : "Sometimes",
//            correctAnswer : "B"
//        },
//    ];
//
//    function correctAnswer()
//    {
//
//    }
//    function wrongAnswer()
//    {
//
//    }



    //Function for collapsing the Accordion information //
    function collapse()
    {

        // Set 1 //
        $("#accordJTW1").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}

            });
        $("#accordJTW2").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}

            });
        $("#accordJTW3").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}

            });

    }

    collapse();

</script>
