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
    <link href="assets/css/themes/base/accordion.css" rel="stylesheet" type="text/css" />

    <style>

    </style>
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

<div class="container" style="overflow:hidden">
    <div class="Welcoming">
        <h1 style="text-align:center"><strong>JavaScript Tests</strong><img class="topicLogos" alt="JavaScript_Logo"  src="assets/img/js-logo.png" /></h1>
    </div>
    <br />
    <!--------------------------Test 1------------------------------------>
    <div class="row" style="border: dashed">
        <h1 style="text-align:center"><strong>White Belt Tests</strong></h1>
        <p style="text-align:center">These tests are designed to take the information that you have learnt from the JavaScript Topic Page and apply it to see how the code works for yourself.</p>
        <p style="text-align:center">You can check out our JavaScript Page <a class="btn-link" href="jsPage.php"><i>HERE</i></a> if you need a refresher</p>
    </div>
    <br />
    <!------------------------------Test 2------------------------------------------------------------------------->
    <div class="row" style="border: dashed">

    </div>
    <br />
    <!------------------------------------Test 3------------------------------------------------------------------------->
    <div class="row" style="border: dashed">

    </div>
    <!--------------Set 2 Tests Medium Difficulty----------------->
    <h1 style="text-align:center"><strong> Brown Belt Tests</strong></h1>
    <div class="row" style="border: dashed; height: 100%">        

    </div>
    <br />
    <!------------------------------Test 2------------------------------------------------------------------------->
    <div class="row" style="border: dashed">

    </div>
    <br />
    <!------------------------------------Test 3-------------------------------------------------------------------->
    <div class="row" style="border: dashed">

    </div>
</div>

</body>
</html>


<!--Scripts-->
<script>
    //Collapse Script for each accordion widget //
    function collapse() {
        $("#accordion1").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150,

            });
        $("#accordion2").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion3").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion4").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion5").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion6").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion7").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion8").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion9").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion10").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion11").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
        $("#accordion12").accordion(
            {
                active: false,
                collapsible: true,
                animate: 150
            });
    }


    function showHint1()
    {
        document.getElementById("hintText1").innerHTML = "Remember that adding values is the same as in maths equations";
    }
    function showHint2() {
        document.getElementById("hintText2").innerHTML = "Remember that adding values is the same as in maths equations";
    }
    function showHint3() {
        document.getElementById("hintText3").innerHTML = "Remember that adding values is the same as in maths equations";
    }
    function showHint4() {
        document.getElementById("hintText3").innerHTML = "Remember that adding values is the same as in maths equations";
    }
    function showHint5() {
        document.getElementById("hintText3").innerHTML = "Remember that adding values is the same as in maths equations";
    }
    function showHint6() {
        document.getElementById("hintText3").innerHTML = "Remember that adding values is the same as in maths equations";
    }

    collapse();

</script>
