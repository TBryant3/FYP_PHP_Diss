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

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/Site.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />

    <script>
        function customPopAlert()
        {
            this.step1Render = function(popText)
            {
                let popBox1 = document.getElementById('popBox1');

                let winH = window.innerHeight;
                let popOverlay = document.getElementById('popOverlay');
                popOverlay.style.display = "block";
                popOverlay.style.height = winH + "px";

                popBox1.style.top = (winH/2) + "px";
                popBox1.style.display = "block";
                document.getElementById('popBoxHeader1').innerHTML = "Computing and Computer Science";
                document.getElementById('popBoxBody1').innerHTML = popText;
                document.getElementById('popBoxFooter1').innerHTML = '<button onclick="popUp.ok()">OK</button>';
            }
            this.step2Render = function(popText2)
            {
                let popBox2 = document.getElementById('popBox2');

                let winH = window.innerHeight;
                let popOverlay = document.getElementById('popOverlay');
                popOverlay.style.display = "block";
                popOverlay.style.height = winH + "px";

                popBox2.style.top = (winH/2) + "px";
                popBox2.style.display = "block";
                document.getElementById('popBoxHeader2').innerHTML = "Code is the generalised technical term for which ever language is being written in on the computer!";
                document.getElementById('popBoxBody2').innerHTML = popText2;
                document.getElementById('popBoxFooter2').innerHTML = '<button onclick="popUp.ok()">OK</button>';
            }
            this.ok = function()
            {
                document.getElementById('popOverlay').style.display = "none";
                document.getElementById('popBox1').style.display = "none";
                document.getElementById('popBox2').style.display = "none";
            }
        }
        let popUp = new customPopAlert();
    </script>
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
                    <a class="nav-link" href="src/topicsPage.php" style="font-size: medium">Topics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="src/testsPage.php" style="font-size: medium">Tests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="src/aboutUs.php" style="font-size: medium">About CoJō</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="src/contactUs.php" style="font-size: medium">Contact Us</a>
                </li>
            </ul>
                <div class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="src/Login.php" style="font-size: medium">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="src/Register.php" style="font-size: medium">Register</a>
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
    <!-- Creates Pop up overlay to prevent background inputs when pop-ups are shown-->
        <div id="popOverlay"></div>
    <!--Row 1 - 1 box -->
    <div class="row" style="text-align: center">
        <div class="col-xs-4">
            <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
            <img title="HTML Logo" src="assets/img/HTML5_logo.png" alt="HTML Logo" class="center-block" id="HTML_logo" />
        </div>
        <div class="col-xs-4">
            <h3><u>Multiple Computing Languages to choose from!</u></h3>
            <p style="font-size: x-large">
                At CoJō, we want to give you the best possible experience and so we have a selection of languages from <i>Website Mark-Up</i> <b>HTML</b> to <i>Programming languages</i> such as <b>JavaScript</b> and beyond!
            </p>
        </div>
        <div class="col-xs-4">
            <br />
            <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
            <img title="C# Logo" src="assets/img/Csharp_logo.png" alt="C_Sharp_Logo" class="center-block" id="Csharp_logo"/>
        </div>
    </div>
    <br>


    <!--Row 2 ----- 3 boxes-->
    <div class="row" style="text-align: center; height:225px">
        <div class="col-xs-4" style="height: 100%">
            <!--Informative Pop-up-->
            <div id="popBox1" style="width: 30%">
                <div>
                    <div id="popBoxHeader1"></div>
                    <div id="popBoxBody1"></div>
                    <div id="popBoxFooter1"></div>
                </div>
            </div>
            <h2><u><b style="color: green">STEP 1:</b> Getting started </u></h2>
            <p style="font-size: medium">
                This application strives to help you grow your knowledge but you'll want to understand what Computing is first!
                <br>
                Here's a short breakdown on everything you'll need to know before taking on the world of Computer Science and coding practices.

            </p>
            <div>
                <a class="btn btn-success" onclick="popUp.step1Render('Computing is about the design, development and then implementation of a computer based system to carry out specific tasks which would usually take us a very long time to carry out on our own. <br> There are many ways for Computing to be carried out as there are many different computing languages and formats, most of which have their own integrated development environments (IDE) which allow for intense and detailed programs to be created without needing multiple software types or expensive computer hardware.')">Click me to find out &raquo;</a>
            </div>
        </div>
        <div class="col-xs-4" style="height: 100%">
            <!--Informative Pop-up-->
            <div id="popBox2" style="width: 30%">
                <div>
                    <div id="popBoxHeader2"></div>
                    <div id="popBoxBody2"></div>
                    <div id="popBoxFooter2"></div>
                </div>
            </div>
            <h2><u><b style="color: goldenrod">STEP 2:</b> What exactly is "Code" & "Coding"? </u></h2>
            <p style="font-size: medium">
                To be able to carry out computer programming, you will need to be able to design and create an executable with which the computer uses to then accomplish the specific task set out for it.
            </p>
            <div>
                <a class="btn btn-warning" onclick="popUp.step2Render('The act of <b>Coding</b> is in turn the process of assigning code instructions and then submitting them to a computer in a specific language that the computer then compiles and reads to carry out said instructions. <br> Generally speaking, computer code is usually broken down into <b>5</b> main sections: <br> <b>Inputs:</b> This is the data / commands used to control the computer and programs. <br> <b>Outputs:</b> These are the results of what the computer was told to do or the outcome of specific tests committed <br> <b>Arithmetic:</b> These are the mathematical equations and calculations put to the computer to analyse and/or process data inputs <br> <b>Conditions:</b> This is the element in which the computer tests, and is tested, based on certain elements defined by either the coding language or by the developer to see if the data conditions have been met or not <br> & <b>Looping:</b> The act of going through multiple rounds, cycling, of instructions set out by the developer to see if certain conditions and or required fields are met.')" style="font">Tell me more &raquo;</a>
            </div>
        </div>
        <div class="col-xs-4" style="height: 100%">
            <h2><u><b style="color: lightcoral">STEP 3:</b> Let's start learning! </u></h2>
            <p style="font-size: medium">
                Alongside the educational element, we include tests to practice what you've learnt and help you where you may have been going wrong. The learning curve begins now, click below or from the navigation bar above to get your coding journey started!
            </p>
            <div>
                <a class="btn btn-danger" href="src/topicsPage.php">Take me there &raquo;</a>
            </div>
        </div>
    </div>
<br>

    <!--Row 3 - 1 box -->
    <div class="row" style="text-align: center">
        <div class="col-xs-4">
            <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
            <img title="C++ Logo" src="assets/img/Cplusplus_logo.png" alt="C_Plus_Logo" class="center-block" id="Cplus_logo" />
        </div>
        <div class="col-xs-4">
            <h2><u><b style="color: purple">STEP 4:</b> For the Coder looking for a challenge!</u></h2>
            <p style="font-size: medium">
                If you feel confident enough, you can jump into our Tests and see how you fair! Each Topic has their own accompanying sets of Tests which uses a progressive difficulty system to slowly build-up your confidence and familiarity with the testing methods.
            </p>
            <p>
                <a class="btn btn-info" href="src/testsPage.php" style="color: purple"><b>I'm Ready! &raquo;</b></a>
            </p>
        </div>
        <div class="col-xs-4">
            <!--ADD IMAGE HERE -> PUT IN AN ANIMATION -->
            <img title="JavaScript Logo" src="assets/img/js-logo.png" alt="JavaScript_Logo" class="center-block" id="JavaScript_logo" />
    </div>
</body>
</html>