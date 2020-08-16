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
<div class="row" style="border: dashed; color: saddlebrown">
    <h1 style="text-align:center"><b> Brown Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <p style="text-align:center">These tests are designed to take the information that you have learnt from the JavaScript Topic Page and apply it to see how the code works for yourself.</p>
    <div class="container" style="height: 30%">
        <div id="question"><h3>QUESTION</h3></div>
        <div id="answers">
            <div class="choices" id="A" onclick="checkHTMLAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkHTMLAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkHTMLAnswer1('C')">Style</div>
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
    <h2 style="color:black; text-align:center"><b>Coming Soon</b></h2>
    <p id="countDownArea" style="text-align:center; font-size: x-large"></p>
</div>
</div>

</body>
</html>


<!--Scripts-->
<script>
    //Declaring Variables by getting their HTML elements
    //Set 1
    const HTMLtest1 = document.getElementById("HTMLtest1");
    const HTMLquestion1 = document.getElementById("HTMLquestion1");
    const HTMLanswerA1 = document.getElementById("HTMLA1");
    const HTMLanswerB1 = document.getElementById("HTMLB1");
    const HTMLanswerC1 = document.getElementById("HTMLC1");
    const HTMLresultProgress1 = document.getElementById("HTMLresultProgress1");
    const HTMLscoreContainer1 = document.getElementById("HTMLscoreContainer1");
    let HTMLscore1 = 0;
    //Set 2
    const HTMLtest2 = document.getElementById("HTMLtest2");
    const HTMLquestion2 = document.getElementById("HTMLquestion2");
    const HTMLanswerA2 = document.getElementById("HTMLA2");
    const HTMLanswerB2 = document.getElementById("HTMLB2");
    const HTMLanswerC2 = document.getElementById("HTMLC2");
    const HTMLresultProgress2 = document.getElementById("HTMLresultProgress2");
    const HTMLscoreContainer2 = document.getElementById("HTMLScoreContainer2");
    let HTMLscore2 = 0;
    //Set 3s
    const HTMLtest3 = document.getElementById("HTMLtest3");
    const HTMLquestion3 = document.getElementById("HTMLquestion3");
    const HTMLanswerA3= document.getElementById("HTMLA3");
    const HTMLanswerB3 = document.getElementById("HTMLB3");
    const HTMLanswerC3 = document.getElementById("HTMLC3");
    const HTMLresultProgress3 = document.getElementById("HTMLresultProgress3");
    const HTMLscoreContainer3 = document.getElementById("HTMLscoreContainer3");
    let HTMLscore3 = 0;

    // Tier 1 Question Creation
    let whiteHTMLQuestions1 = [
        {
            HTMLquestion1 : "Which of these HTML tags do you need to add JavaScript to a HTML document?",
            HTMLanswerA1 : "< script >",
            HTMLanswerB1 : "< div >",
            HTMLanswerC1 : "< style >",
            HTMLcorrectAnswer1 : "A"
        },
        {
            HTMLquestion1 : "What type of computing language is JavaScript?",
            HTMLanswerA1 : "Mark-Up",
            HTMLanswerB1 : "StyleSheet",
            HTMLanswerC1 : "Scripting",
            HTMLcorrectAnswer1 : "C"
        },
        {
            HTMLquestion1 : "JavaScript can be used to create webpages instead of HTML?",
            HTMLanswerA1 : "True",
            HTMLanswerB1 : "False",
            HTMLanswerC1 : "Sometimes",
            HTMLcorrectAnswer1 : "B"
        },
    ];
    //Declaring the question the test is on
    const lastHTMLQuestion1 = whiteHTMLQuestions1.length - 1;
    let currentHTMLQuestion1 = 0;
    //This loads in the test's questions
    function loadWhiteHTMLQuestion1()
    {
        let wq1 = whiteHTMLQuestions1[currentHTMLQuestion1];

        HTMLquestion1.innerHTML = "<p>"+ wq1.HTMLquestion1 +"</p>";
        HTMLanswerA1.innerHTML = wq1.HTMLanswerA1;
        HTMLanswerB1.innerHTML = wq1.HTMLanswerB1;
        HTMLanswerC1.innerHTML = wq1.HTMLanswerC1;
    }
    //Execute function to load questions and show the test area
    loadWhiteHTMLQuestion1();
    HTMLtest1.style.display = "block";

    function HTMLprogressRender1()
    {
        for(let qIndex1 = 0; qIndex1 <= lastHTMLQuestion1; qIndex1++)
        {
            HTMLresultProgress1.innerHTML += "<div class='HTMLprog1' id="+ qIndex1 +"></div>";
        }
    }
    HTMLprogressRender1();

    //Turns marker green if correct
    function correctHTMLAnswer1()
    {
        document.getElementById(currentHTMLQuestion1).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongHTMLAnswer1()
    {
        document.getElementById(currentHTMLQuestion1).style.backgroundColor = "red";
    }

    // Function to check if the user has input the right answer
    function checkHTMLAnswer1(HTMLanswer1)
    {
        if (HTMLanswer1 === whiteHTMLQuestions1[currentHTMLQuestion1].HTMLcorrectAnswer1)
        {
            HTMLscore1++;
            // Turns user input into an immediate feedback system
            // Turn answer green
            correctHTMLAnswer1();
        }
        else
        {
            // Turns user input into an immediate feedback system
            // Turn answer red
            wrongHTMLAnswer1();
        }
        if (currentHTMLQuestion1 < lastHTMLQuestion1)
        {
            currentHTMLQuestion1++;
            loadWhiteHTMLQuestion1();
        }
        else
        {
            HTMLscoreRender1();
        }
    }
    // Functions to show the score percentage at end of test
    function HTMLscoreRender1()
    {
        HTMLscoreContainer1.style.display = "block";
        const HTMLscorePercent1 = Math.round(100 * HTMLscore1/whiteHTMLQuestions1.length);

        HTMLscoreContainer1.innerHTML = "<p>"+ HTMLscorePercent1 +"%</p>";
    }





    ////////////////////////////////////////////////////////////
    // Tier 2 Question Creation/////////////////////////////////
    let whiteHTMLQuestions2 = [
        {
            HTMLquestion2: "Which of these were developed first?",
            HTMLanswerA2: "HTML",
            HTMLanswerB2: "CSS",
            HTMLanswerC2: "JavaScript",
            HTMLcorrectAnswer2: "A"
        },
        {
            HTMLquestion2: "Which of these elements are used to reference a decimal value?",
            HTMLanswerA2: "var",
            HTMLanswerB2: "number",
            HTMLanswerC2: "value",
            HTMLcorrectAnswer2: "A"
        },
        {
            HTMLquestion2: "Where can JavaScript reference tags be placed in a HTML document?",
            HTMLanswerA2: "head",
            HTMLanswerB2: "body",
            HTMLanswerC2: "both",
            HTMLcorrectAnswer2: "C"
        },
    ];
    //Declaring the 2nd set of questions
    const lastHTMLQuestion2 = whiteHTMLQuestions2.length - 1;
    let currentHTMLQuestion2 = 0;

    //This loads in the test's questions
    function loadWhiteHTMLQuestion2()
    {
        let wq2 = whiteHTMLQuestions2[currentHTMLQuestion2];

        HTMLquestion2.innerHTML = "<p>"+ wq2.HTMLquestion2 +"</p>";
        HTMLanswerA2.innerHTML = wq2.HTMLanswerA2;
        HTMLanswerB2.innerHTML = wq2.HTMLanswerB2;
        HTMLanswerC2.innerHTML = wq2.HTMLanswerC2;
    }

    //NEED IF STATEMENT FOR IF THE TIER 1 SCORE IS SHOWN
    loadWhiteHTMLQuestion2();
    HTMLtest2.style.display = "block";


    // Second set of progress indicators
    function HTMLprogressRender2()
    {
        for(let qIndex2 = 0; qIndex2 <= lastHTMLQuestion2; qIndex2++)
        {
            HTMLresultProgress2.innerHTML += "<div class='HTMLprog2' id="+ qIndex2 +"></div>";
        }
    }
    HTMLprogressRender2();


    //Turns marker green if correct
    function correctHTMLAnswer2()
    {
        document.getElementById(currentHTMLQuestion2).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongHTMLAnswer2()
    {
        document.getElementById(currentHTMLQuestion2).style.backgroundColor = "red";
    }



    //Second Answer renderer
    function checkHTMLAnswer2(HTMLanswer2)
    {
        if (HTMLanswer2 === whiteHTMLQuestions2[currentHTMLQuestion2].HTMLcorrectAnswer2)
        {
            HTMLscore2++;
            // Turns user input into an immediate feedback system
            // Turn answer green
            correctHTMLAnswer2();
        }
        else
        {
            // Turns user input into an immediate feedback system
            // Turn answer red
            wrongHTMLAnswer2();
        }
        if (currentHTMLQuestion2 < lastHTMLQuestion2)
        {
            currentHTMLQuestion2++;
            loadWhiteHTMLQuestion2();
        }
        else
        {
            HTMLscoreRender2();
        }
    }

    function HTMLscoreRender2()
    {
        HTMLscoreContainer2.style.display = "block";
        const scoreHTMLPercent2 = Math.round(100 * HTMLscore2/whiteHTMLQuestions2.length);

        HTMLscoreContainer2.innerHTML = "<p>"+ scoreHTMLPercent2 +"%</p>";
    }


    ///////////////////////////////////////////////
    //////// Third question set //////////////////
    let whiteHTMLQuestions3 = [
        {
            HTMLquestion3 : "Which of these tags do you need to add JavaScript to a HTML document?",
            HTMLanswerA3 : "< script >",
            HTMLanswerB3 : "< div >",
            HTMLanswerC3 : "< style >",
            HTMLcorrectAnswer3 : "A"
        },
        {
            HTMLquestion3 : "What type of computing language is JavaScript?",
            HTMLanswerA3 : "Mark-Up",
            HTMLanswerB3 : "StyleSheet",
            HTMLanswerC3 : "Scripting",
            HTMLcorrectAnswer3 : "C"
        },
        {
            HTMLquestion3 : "JavaScript can be used to create webpages instead of HTML?",
            HTMLanswerA3 : "True",
            HTMLanswerB3 : "False",
            HTMLanswerC3 : "Sometimes",
            HTMLcorrectAnswer3 : "B"
        },
    ];
    //Declaring the question the test is on
    const lastHTMLQuestion3 = whiteHTMLQuestions3.length - 1;
    let currentHTMLQuestion3 = 0;
    //This loads in the test's questions
    function loadWhiteHTMLQuestion3()
    {
        let wq3 = whiteHTMLQuestions3[currentHTMLQuestion3];

        HTMLquestion3.innerHTML = "<p>"+ wq3.HTMLquestion3 +"</p>";
        HTMLanswerA3.innerHTML = wq3.HTMLanswerA3;
        HTMLanswerB3.innerHTML = wq3.HTMLanswerB3;
        HTMLanswerC3.innerHTML = wq3.HTMLanswerC3;
    }
    //Execute function to load questions and show the test area
    loadWhiteHTMLQuestion3();
    HTMLtest3.style.display = "block";

    function HTMLprogressRender3()
    {
        for(let qIndex3 = 0; qIndex3 <= lastHTMLQuestion3; qIndex3++)
        {
            HTMLresultProgress3.innerHTML += "<div class='HTMLprog3' id="+ qIndex3 +"></div>";
        }
    }
    HTMLprogressRender3();

    //Turns marker green if correct
    function correctHTMLAnswer3()
    {
        document.getElementById(currentHTMLQuestion3).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongHTMLAnswer3()
    {
        document.getElementById(currentHTMLQuestion3).style.backgroundColor = "red";
    }

    // Function to check if the user has input the right answer
    function checkHTMLAnswer3(HTMLanswer3)
    {
        if (HTMLanswer3 === whiteHTMLQuestions3[currentHTMLQuestion3].correctAnswer3)
        {
            HTMLscore3++;
            // Turns user input into an immediate feedback system
            // Turn answer green
            correctHTMLAnswer3();
        }
        else
        {
            // Turns user input into an immediate feedback system
            // Turn answer red
            wrongHTMLAnswer3();
        }
        if (currentHTMLQuestion3 < lastHTMLQuestion3)
        {
            currentHTMLQuestion3++;
            loadWhiteHTMLQuestion3();
        }
        else
        {
            scoreHTMLRender3();
        }
    }
    // Functions to show the score percentage at end of test
    function scoreHTMLRender3()
    {
        HTMLscoreContainer3.style.display = "block";
        const scoreHTMLPercent3 = Math.round(100 * HTMLscore3/whiteHTMLQuestions3.length);

        HTMLscoreContainer3.innerHTML = "<p>"+ scoreHTMLPercent3 +"%</p>";
    }


</script>
