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
<br>
<!------------------------------Test Tier 2------------------------------------------------------------------------->
<div class="container" style="border: dashed; color: orange">
    <h1 style="text-align:center"><b> Orange Belt Tests </b><i class="fas fa-ribbon fa-1x"></i></h1>
    <h3>Orange tier tests will be similar to Tier 1 but will use more technical terminology</h3>
    <div class="row" style="height: 30%">
        <div id="question"><h3>QUESTION</h3></div>
        <div id="answers">
            <div class="choices" id="A" onclick="checkAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkAnswer1('C')">Style</div>
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
            <div class="choices" id="A" onclick="checkAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkAnswer1('C')">Style</div>
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
            <div class="choices" id="A" onclick="checkAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkAnswer1('C')">Style</div>
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
            <div class="choices" id="A" onclick="checkAnswer1('A')">Script</div>
            <div class="choices" id="B" onclick="checkAnswer1('B')">Div</div>
            <div class="choices" id="C" onclick="checkAnswer1('C')">Style</div>
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
</div>

</body>
</html>


<!--Scripts-->
<script>
    //Declaring Variables by getting their HTML elements
    //Set 1
    const test1 = document.getElementById("test1");
    const question1 = document.getElementById("question1");
    const answerA1 = document.getElementById("A1");
    const answerB1 = document.getElementById("B1");
    const answerC1 = document.getElementById("C1");
    const resultProgress1 = document.getElementById("resultProgress1");
    const scoreContainer1 = document.getElementById("scoreContainer1");
    let score1 = 0;
    //Set 2
    const test2 = document.getElementById("test2");
    const question2 = document.getElementById("question2");
    const answerA2 = document.getElementById("A2");
    const answerB2 = document.getElementById("B2");
    const answerC2 = document.getElementById("C2");
    const resultProgress2 = document.getElementById("resultProgress2");
    const scoreContainer2 = document.getElementById("scoreContainer2");
    let score2 = 0;
    //Set 3s
    const test3 = document.getElementById("test3");
    const question3 = document.getElementById("question3");
    const answerA3= document.getElementById("A3");
    const answerB3 = document.getElementById("B3");
    const answerC3 = document.getElementById("C3");
    const resultProgress3 = document.getElementById("resultProgress3");
    const scoreContainer3 = document.getElementById("scoreContainer3");
    let score3 = 0;

    // Tier 1 Question Creation
    let whiteQuestions1 = [
        {
            question1 : "Which of these HTML tags do you need to add JavaScript to a HTML document?",
            answerA1 : "< script >",
            answerB1 : "< div >",
            answerC1 : "< style >",
            correctAnswer1 : "A"
        },
        {
            question1 : "What type of computing language is JavaScript?",
            answerA1 : "Mark-Up",
            answerB1 : "StyleSheet",
            answerC1 : "Scripting",
            correctAnswer1 : "C"
        },
        {
            question1 : "JavaScript can be used to create webpages instead of HTML?",
            answerA1 : "True",
            answerB1 : "False",
            answerC1 : "Sometimes",
            correctAnswer1 : "B"
        },
    ];
    //Declaring the question the test is on
    const lastQuestion1 = whiteQuestions1.length - 1;
    let currentQuestion1 = 0;
    //This loads in the test's questions
    function loadWhiteQuestion1()
    {
        let wq1 = whiteQuestions1[currentQuestion1];

        question1.innerHTML = "<p>"+ wq1.question1 +"</p>";
        answerA1.innerHTML = wq1.answerA1;
        answerB1.innerHTML = wq1.answerB1;
        answerC1.innerHTML = wq1.answerC1;
    }
    //Execute function to load questions and show the test area
    loadWhiteQuestion1();
    test1.style.display = "block";

    function progressRender1()
    {
        for(let qIndex1 = 0; qIndex1 <= lastQuestion1; qIndex1++)
        {
            resultProgress1.innerHTML += "<div class='prog1' id="+ qIndex1 +"></div>";
        }
    }
    progressRender1();

    //Turns marker green if correct
    function correctAnswer1()
    {
        document.getElementById(currentQuestion1).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongAnswer1()
    {
        document.getElementById(currentQuestion1).style.backgroundColor = "red";
    }

    // Function to check if the user has input the right answer
    function checkAnswer1(answer1)
    {
        if (answer1 === whiteQuestions1[currentQuestion1].correctAnswer1)
        {
            score1++;
            // Turns user input into an immediate feedback system
            // Turn answer green
            correctAnswer1();
        }
        else
        {
            // Turns user input into an immediate feedback system
            // Turn answer red
            wrongAnswer1();
        }
        if (currentQuestion1 < lastQuestion1)
        {
            currentQuestion1++;
            loadWhiteQuestion1();
        }
        else
        {
            scoreRender1();
        }
    }
    // Functions to show the score percentage at end of test
    function scoreRender1()
    {
        scoreContainer1.style.display = "block";
        const scorePercent1 = Math.round(100 * score1/whiteQuestions1.length);

        scoreContainer1.innerHTML = "<p>"+ scorePercent1 +"%</p>";
    }





    ////////////////////////////////////////////////////////////
    // Tier 2 Question Creation/////////////////////////////////
    let whiteQuestions2 = [
        {
            question2: "Which of these were developed first?",
            answerA2: "HTML",
            answerB2: "CSS",
            answerC2: "JavaScript",
            correctAnswer2: "A"
        },
        {
            question2: "Which of these elements are used to reference a decimal value?",
            answerA2: "var",
            answerB2: "number",
            answerC2: "value",
            correctAnswer2: "A"
        },
        {
            question2: "Where can JavaScript reference tags be placed in a HTML document?",
            answerA2: "head",
            answerB2: "body",
            answerC2: "both",
            correctAnswer2: "C"
        },
    ];
    //Declaring the 2nd set of questions
    const lastQuestion2 = whiteQuestions2.length - 1;
    let currentQuestion2 = 0;

    //This loads in the test's questions
    function loadWhiteQuestion2()
    {
        let wq2 = whiteQuestions2[currentQuestion2];

        question2.innerHTML = "<p>"+ wq2.question2 +"</p>";
        answerA2.innerHTML = wq2.answerA2;
        answerB2.innerHTML = wq2.answerB2;
        answerC2.innerHTML = wq2.answerC2;
    }

    //NEED IF STATEMENT FOR IF THE TIER 1 SCORE IS SHOWN
    loadWhiteQuestion2();
    test2.style.display = "block";


    // Second set of progress indicators
    function progressRender2()
    {
        for(let qIndex2 = 0; qIndex2 <= lastQuestion2; qIndex2++)
        {
            resultProgress2.innerHTML += "<div class='prog2' id="+ qIndex2 +"></div>";
        }
    }
    progressRender2();


    //Turns marker green if correct
    function correctAnswer2()
    {
        document.getElementById(currentQuestion2).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongAnswer2()
    {
        document.getElementById(currentQuestion2).style.backgroundColor = "red";
    }



    //Second Answer renderer
    function checkAnswer2(answer2)
    {
        if (answer2 === whiteQuestions2[currentQuestion2].correctAnswer2)
        {
            score2++;
            // Turns user input into an immediate feedback system
            // Turn answer green
            correctAnswer2();
        }
        else
        {
            // Turns user input into an immediate feedback system
            // Turn answer red
            wrongAnswer2();
        }
        if (currentQuestion2 < lastQuestion2)
        {
            currentQuestion2++;
            loadWhiteQuestion2();
        }
        else
        {
            scoreRender2();
        }
    }

    function scoreRender2()
    {
        scoreContainer2.style.display = "block";
        const scorePercent2 = Math.round(100 * score2/whiteQuestions2.length);

        scoreContainer2.innerHTML = "<p>"+ scorePercent2 +"%</p>";
    }


    ///////////////////////////////////////////////
    //////// Third question set //////////////////
    let whiteQuestions3 = [
        {
            question3 : "Which of these tags do you need to add JavaScript to a HTML document?",
            answerA3 : "< script >",
            answerB3 : "< div >",
            answerC3 : "< style >",
            correctAnswer3 : "A"
        },
        {
            question3 : "What type of computing language is JavaScript?",
            answerA3 : "Mark-Up",
            answerB3 : "StyleSheet",
            answerC3 : "Scripting",
            correctAnswer3 : "C"
        },
        {
            question3 : "JavaScript can be used to create webpages instead of HTML?",
            answerA3 : "True",
            answerB3 : "False",
            answerC3 : "Sometimes",
            correctAnswer3 : "B"
        },
    ];
    //Declaring the question the test is on
    const lastQuestion3 = whiteQuestions3.length - 1;
    let currentQuestion3 = 0;
    //This loads in the test's questions
    function loadWhiteQuestion3()
    {
        let wq3 = whiteQuestions3[currentQuestion3];

        question3.innerHTML = "<p>"+ wq3.question3 +"</p>";
        answerA3.innerHTML = wq3.answerA3;
        answerB3.innerHTML = wq3.answerB3;
        answerC3.innerHTML = wq3.answerC3;
    }
    //Execute function to load questions and show the test area
    loadWhiteQuestion3();
    test3.style.display = "block";

    function progressRender3()
    {
        for(let qIndex3 = 0; qIndex3 <= lastQuestion1; qIndex3++)
        {
            resultProgress3.innerHTML += "<div class='prog3' id="+ qIndex3 +"></div>";
        }
    }
    progressRender3();

    //Turns marker green if correct
    function correctAnswer3()
    {
        document.getElementById(currentQuestion3).style.backgroundColor = "green";
    }
    //Turns marker red if wrong
    function wrongAnswer3()
    {
        document.getElementById(currentQuestion3).style.backgroundColor = "red";
    }

    // Function to check if the user has input the right answer
    function checkAnswer3(answer3)
    {
        if (answer3 === whiteQuestions1[currentQuestion3].correctAnswer3)
        {
            score3++;
            // Turns user input into an immediate feedback system
            // Turn answer green
            correctAnswer3();
        }
        else
        {
            // Turns user input into an immediate feedback system
            // Turn answer red
            wrongAnswer3();
        }
        if (currentQuestion3 < lastQuestion3)
        {
            currentQuestion3++;
            loadWhiteQuestion3();
        }
        else
        {
            scoreRender3();
        }
    }
    // Functions to show the score percentage at end of test
    function scoreRender3()
    {
        scoreContainer3.style.display = "block";
        const scorePercent3 = Math.round(100 * score3/whiteQuestions3.length);

        scoreContainer3.innerHTML = "<p>"+ scorePercent3 +"%</p>";
    }


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


    function showHint1()
    {
        document.getElementById("hintText1").innerHTML = "Remember that adding values is the same as in maths equations";
    }
    function checkAnswer1()
    {
        // if (){};
    }


    collapse();

</script>
