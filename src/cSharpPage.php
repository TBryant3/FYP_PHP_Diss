<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML/CSS Page</title>

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

<!--Introduction information about the Topic-->
<div class="row">
        <h1 style="text-align:center; color: rebeccapurple">
            <u><b>C# (C-Sharp)</b></u>
            <img class="topicLogos" alt="C_Sharp_Logo" src="../assets/img/Csharp_logo.png" />
        </h1>
        <p style="text-align: center; font-size: medium">
            <i>Founded in 2000 by Anders Hejlsberg</i>
        </p>

        <br>
        <!--Short description of HTML-->
        <p class="topicDesc" style="font-size: large">
            ADD INTRO TEXT
        </p>
</div>


<!--First Section Teaching Element and Theory-->
<div class="row" style="height:400px">
    <h1 style="text-align: center"><b><u>Learning Modules</u></b></h1>

    <div class="col-xs-2"></div>
    <!--Part 1 - Introduction to HTML-->
    <div class="col-xs-4" style="border:solid; height:auto; background-color:lightgreen">
        <h2 style="text-align: center"><b>Introduction to C#</b></h2>
        <p style="text-align:center">
            This module gives you the background behind C#, <u><b>Why</b></u> it was developed as well as <u><b>How</b></u> C# has influenced programming development over the years!
        </p>
        <div id="accordionCS1" class="accordions">
            <h3 class="learnTitles">History of C#</h3>
            <p> ADD TEXT </p>
            <h3 class="learnTitles">Present Day C#</h3>
            <p> ADD TEXT </p>
            <h3 class="learnTitles">The Future of C#</h3>
            <p> ADD TEXT </p>
        </div>
        <br />
        <div>
            <div id="progressBarCS1" style="position:relative">
                Progress Completed: <b><span id="pb-label1" style="position:relative"></span></b>
            </div>
            <button id="t4Btn1" type="submit" style="margin-bottom:1%">Click me to complete</button>
        </div>
    </div>
    <!--Part 2 - Explaining Tags-->
    <div class="col-xs-4" style="border:solid; height:auto; background-color:lightgoldenrodyellow">
        <h2 style="text-align: center"><b>Uses of C#</b></h2>
        <div id="accordionCS2" class="accordions">
            <h3 class="learnTitles">What is C#</h3>
            <p>ADD TEXT</p>
            <h3 class="learnTitles">C# Uses</h3>
            <p>ADD TEXT</p>
            <h3 class="learnTitles">C# Integration</h3>
            <p>ADD TEXT</p>
        </div>
        <br>
        <div id="progressBarCS2" style="position:relative">
            Progress Completed: <b><span id="pb-label2" style="position:relative"></span></b>
        </div>
        <button id="t4Btn2" type="submit" style="margin-bottom:1%">Click me to complete</button>
    </div>

    <div class="col-xs-2"></div>
</div>

<!--Second Section Demos / Showing theory in a graphical way (This aids imagery / visual learners)-->
<div class="row" style="height:500px">
    <h1 style="text-align: center"><b><u>Demos & Examples</u></b></h1>
    <!--Demo One-->
    <div class="col-xs-4" style="border:solid; height:auto">
        <h2>Create C# documents</h2>
        <h3>C# Templates</h3>
    </div>
    <!--Demo Two-->
    <div class="col-xs-4" style="border:solid; height:auto">
        <h2>Find out more about us</h2>
        <p>We at CoJō want to give you the best possible experience and so you'll want to understand what a coding language is! Click here to find out more</p>
        <p><a class="btn btn-default" href="">Got it! &raquo;</a></p>
    </div>
    <!--Demo Three-->
    <div class="col-xs-4" style="border:solid; height:auto">
        <h2>For the Coding Veterans</h2>
        <p>Here are some practice questions and test your knowledge quizzes to see where you're at</p>
        <p><a class="btn btn-default" href="">Got it! &raquo;</a></p>
    </div>
</div>

<br>

<!--Row 4 - 1 box Helpful C# guides / Add-Ons-->
<div class="row" style="text-align: center; height:300px">
    <h1 style="text-align: center"><b><u>Useful C# Extras & Frameworks</u></b></h1>
    <div class="col-xs-2">
        <div id="alertBox" style="margin-left: 15px; margin-top: 40px">
            <div>
                <div id="alertBoxHeader"><b></b></div>
                <div id="alertBoxBody"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-2"></div>
</div>



</body>
</html>
<script>
    //Function for collapsing the Accordion information //
    function collapse()
    {
        // Set 1 //
        $("#accordionCS1").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}

            });
        $("#accordionCS2").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
        $("#accordionCS3").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
    }
    collapse();

    $(document).ready(function ($)
    {
        $('#t4Btn1').button();
        $('#progressBarCS1').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pb-label1').text($('#progressBarCS1').progressbar("value") + "%");
                },
                complete: function ()
                {
                    $('#t4Btn1').button("disable")
                        $('#t4Btn1').text("Completed")
                },
                change: function ()
                {
                    if ($(this).progressbar("value") < 100)
                    {
                        $('#t4Btn1').button("enable")
                    }
                    $('#pb-label1').text($('#progressBarCS1').progressbar("value") + "%");
                },
            });
        //Button click
        $('#t4Btn1').click(function ()
        {
            $('#progressBarCS1').progressbar({ value: 100 });
        })

        $(document).ready(function ($) {


            $('#t4Btn2').button();
            $('#progressBarCS2').progressbar(
                {
                    value: 0,
                    create: function () {
                        $('#pb-label2').text($('#progressBarCS2').progressbar("value") + "%");
                    },
                    complete: function () {
                        $('#t4Btn2').button("disable")
                        $('#t4Btn2').text("Completed")
                    }, change: function () {
                        if ($(this).progressbar("value") < 100) {
                            $('#t4Btn2').button("enable")
                        }
                        $('#pb-label2').text($('#progressBarCS2').progressbar("value") + "%");
                    }
                });
            //Button click
            $('#t4Btn2').click(function () {
                $('#progressBarCS2').progressbar({ value: 100 });
            })
        });
    });
</script>