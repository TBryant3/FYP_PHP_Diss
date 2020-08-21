<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoJō Test Centre</title>

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
            <img src="../assets/img/CoJo_Logo.png"  title="CoJō Logo" alt="CoJō Home - Click to return to the home page" style="width:7%; float:left" />
            <a class="navbar-brand" href="../index.php" style="font-size: large">CoJō Home</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="topicsPage.php" style="font-size: medium">Topics</a>
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

<div class="Welcoming">
    <h1 style="text-align:center"><strong>CoJō Test Centre</strong></h1>
    <h3 style="text-align:center">Welcome to our Test Centre where you can check your progress on different topics and also test your knowledge on the areas you have learnt from our main Topic Languages</h3>
    <h3 style="text-align:center">Each test has been created with the intention to help build on your knowledge and expand further with each previous tests experience, this is to help show how each component comes together to give you a more coherent understanding of what you are accomplishing </h3>
</div>
<br>
<!--First Section - Beginner-->
<h2 style="text-align:center; color: grey"><b>Test Set - White</b></h2>
<div class="row" style="height:225px">
    <div class="col-xs-2">
        <div id="alertBox1" style="margin-left: 15px; margin-top: 40px">
            <div>
                <div id="alertBoxHeader1"><b></b></div>
                <div id="alertBoxBody1"></div>
            </div>
        </div>
    </div>
    <!-- HTML/CSS -->
    <div class="col-xs-4" style="border-style:solid; height:100%; border-radius:5%; ">
        <span style="cursor: pointer; color: lightgrey" id="favTest1" onclick="testAlert.favTestHTML('<b>HTML & CSS Tests:</b> <br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="text-align:center"><b style="color:orange">HTML</b><img class="topicLogos" alt="HTML Logo"  src="../assets/img/HTML5_logo.png"  /><b style="color: blue"> CSS </b><img class="CSS_logo"  alt="CSS Logo" src="../assets/img/CSS3_logo.png"  /> <b style="color: orange">Tes</b><b style="color: blue">ts</b></h2>
        <p style="text-align:center"><i>Web Development Mark-up language used to produce web pages for websites. Use HTML to structure and then CSS to style your webpages and stand out from the crowd</i></p>
        <p><a class="btn btn-default" href="htmlTestPage.php" style="color:orange"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
<!--        <div id="pbTest1" style="margin-bottom:1%;">-->
<!--            Tests Completed: <b><span id="htmlTest-label" style="position:relative;"></span></b>-->
<!--        </div>-->
    </div>
    <!-- JavaScript -->
    <div class="col-xs-4" style="border-style:solid; height:100%; border-radius:5%;">
        <span style="cursor: pointer; color: lightgrey" id="favTest2" onclick="testAlert.favTestJS('<b>JavaScript Tests:</b> <br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:goldenrod; text-align:center"><b>JavaScript Tests<img class="topicLogos" alt="JavaScript_Logo"  src="../assets/img/js-logo.png" /></b></h2>
        <p style="text-align:center"><i>These tests will go through the basics through to more complicated JavaScript functions with a well-rounded approach against what you have learnt from using this application</i></p>
        <p><a class="btn btn-default" href="jsTestPage.php" style="color:goldenrod"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
<!--        <div id="pbTest4" style="margin-bottom:1%;">-->
<!--            Tests Completed: <b><span id="jsTest-label" style="position:relative;"></span></b>-->
<!--        </div>-->
    </div>
    <div class="col-xs-2">
        <div id="alertBox2" style="margin-top: 40px">
            <div>
                <div id="alertBoxHeader2"><b></b></div>
                <div id="alertBoxBody2"></div>
            </div>
        </div>
    </div>
</div>
<br>

<!-- Second Section - Intermediate-->
<h2 style="text-align:center; color: orange"><strong>Test Set - Orange</strong></h2>
<div class="row" style="height:225px">
    <div class="col-xs-2">
        <div id="alertBox3" style="margin-left: 15px; margin-top: 40px">
            <div>
                <div id="alertBoxHeader3"><b></b></div>
                <div id="alertBoxBody3"></div>
            </div>
        </div>
    </div>
    <!-- CPlusPlus -->
    <div class="col-xs-4" style="border-style:solid; height:100%; border-radius: 5%;">
        <span style="cursor: pointer; color: lightgrey" id="favTest3" onclick="testAlert.favTestPlus('<b>C++ Tests: </b><br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:deepskyblue; text-align:center"><b>C++ Tests <img class="topicLogos" alt="C_Plus_Logo"  src="../assets/img/Cplusplus_logo.png" /></b></h2>
        <p style="text-align:center"><i>A high-level programming language extension of C that uses the Object-oriented paradigm</i></p>
        <p><a class="btn btn-default" href="cPlusPlusTestPage.php" style="color:deepskyblue"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
<!--        <div id="pbTest3" style="margin-bottom:1%;">-->
<!--            Tests Completed: <b><span id="cplusTest-label" style="position:relative;"></span></b>-->
<!--        </div>-->
    </div>
    <!-- C-Sharp -->
    <div class="col-xs-4" style="border-style: solid; height:100%; border-radius: 5%;">
        <span style="cursor: pointer; color: lightgrey" id="favTest4" onclick="testAlert.favTestSharp('<b>C# Tests:</b> <br> favourite settings have been updated!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:rebeccapurple; text-align:center"><b>C# Tests <img class="topicLogos" alt="C_Sharp_Logo" src="../assets/img/Csharp_logo.png" /></b></h2>
        <p style="text-align:center"><i>A general multi-purpose programming language developed using the .NET Framework that uses the Object-oriented paradigm</i></p>
        <p><a class="btn btn-default" href="cSharpTestPage.php" style="color:rebeccapurple"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
<!--        <div id="pbTest2" style="margin-bottom:1%;">-->
<!--            Tests Completed: <b><span id="csharpTest-label" style="position:relative;"></span></b>-->
<!--        </div>-->
    </div>
    <div class="col-xs-2">
        <div id="alertBox4" style="margin-top: 40px">
            <div>
                <div id="alertBoxHeader4"><b></b></div>
                <div id="alertBoxBody4"></div>
            </div>
        </div>
    </div>
</div>
<br>
<h2 style="text-align:center; color: goldenrod"><strong>Test Set - Yellow</strong></h2>
<div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4" style="border-style: solid; border-radius: 3%;">
        <h2 style="text-align:center; color: goldenrod"><b>Coming Soon</b></h2>
        <p id="countDownArea" style="text-align:center; font-size: x-large; color: goldenrod"></p>
    </div>
    <div class="col-xs-4"></div>
</div>
<br>
<h2 style="text-align:center"><strong>Test Set - Black</strong></h2>
<div class="row">
    <div class="col-xs-4"></div>
    <div class="col-xs-4" style="border-style: solid; border-radius: 3%;">
        <h2 style="text-align:center"><b>Coming Soon</b></h2>
        <p id="countDownArea1" style="text-align:center; font-size: x-large"></p>
    </div>
    <div class="col-xs-4"></div>
</div>
<br>
<!--Support-->
<div class="row">
    <div class="col-xs-2"></div>
    <div class="col-xs-4" style="border-style: solid; border-radius: 5%;">
        <h2 style="color:lightsalmon; text-align:center"><strong>FAQ</strong></h2>
        <p style="text-align:center"><i>See if anyone else has asked the same as you!</i></p>
        <p><a class="btn btn-default" href="aboutUs.php"><b>Learn more &raquo;</b></a></p>
    </div>
    <div class="col-xs-4" style="border-style:solid; border-radius:5%;">
        <h2 style="color:lightsalmon; text-align:center"><strong>Ask an expert!</strong></h2>
        <p style="text-align:center"><i>Still can't find what you're looking for? Ask Us!</i></p>
        <p><a class="btn btn-default" href="contactUs.php"><b>Learn more &raquo;</b></a></p>
    </div>
    <div class="col-xs-2">
        <div id="alertBox4" style="margin-top: 40px">
        <div>
            <div id="alertBoxHeader4"><b></b></div>
            <div id="alertBoxBody4"></div>
        </div>
    </div>
    </div>
</div>

<!-- Custom Scripts -->
<script src="../assets/js/CustomScripts/testsPageScripts.js"></script>
<script src="../assets/js/CustomScripts/countDownScript.js"></script>

</body>
</html>