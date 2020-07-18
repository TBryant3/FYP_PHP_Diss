<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML/CSS Page</title>

    <!--Browser version support-->
    <script src="/scripts/modernizr-2.8.3.js"></script>
    <!--jQuery Link-->
    <script src="/scripts/jquery-3.4.1.js"></script>
    <!--jQuery-UI Link-->
    <script src="/scripts/jquery-ui-1.12.1.js"></script>
    <!-- Bootstrap -->
    <script src="/scripts/bootstrap.js"></script>

    <!-- Stylesheets -->
    <link href="/styles/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/styles/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="/styles/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="/styles/Site.css" rel="stylesheet" type="text/css" />
    <link href="/styles/allTopicStyles.css" rel="stylesheet" type="text/css" />
    <link href="/styles/themes/base/accordion.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--NAV BAR SETTINGS-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="img/CoJo_Logo.png"  title="CoJō Logo" alt="CoJō Home - Click to return to the home page" style="width:7%; float:left" />
            <a class="navbar-brand" href="index.php"> CoJō Home</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="topicsPage.php">Topics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testsPage.php">Tests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">About CoJō</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
            </ul>
            <div class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<h1 style="text-align:center">Hypertext Markup Language<img class="topicLogos" alt="HTML_Logo" src="img/HTML5_logo.png" /></h1>
<!--Quick description of the topic-->
<h4 class="topicDesc">HTML is a computing language that is used for the development of websites and webpages.</h4>
<h4 class="topicDesc">The first part of the naming for HTML, Hypertext, refers to the hyperlinks that can be included in the website as to navigate between pages. </h4>
<h4 class="topicDesc">The second being that of 'Markup Language' which refers to the layout and how elements are defined within the webpage(s).</h4>
<h2><b>Learning Modules</b></h2>
<div class="row" style="height:255px; border:dashed">
    <!--Part 1 - Introduction to HTML-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightgreen">
        <h2>Introduction to HTML</h2>
        <div id="accordionH1" style="width:100%">
            <h3 class="learnTitles">History of JavaScript</h3>
            <p>JavaScript was first developed in 1995 by a man called Brendan Eich, who worked for a company called 'Netscape'. The purpose of this was to add interactive and dynamic elements to websites and webpages! Furthermore, it only took him 10 days to develop the scripting language with its initial title being that of LiveScript.</p>
            <h3 class="learnTitles">Present Day JavaScript</h3>
            <p>Yes there has been many iteration of Javascript and the '.js' extension over time but the core functionality of JavaScript is still used today in web development through the likes of adding features and more options to HTML websites as well as being flexible at intigrating into other language projects.</p>
            <h3 class="learnTitles">The Future of JavaScript</h3>
            <p>JavaScript is currently on update 1.8.5 which doesn't seem that updated but JavaScript is helping developers create applications rapidly and to a very high-level of complexity therfore making JavaScript a programming language that will most likely continue on this path due to how efficent and flexible the language is </p>
            <h3 class="learnTitles">Summary of JavaScript</h3>
            <p>
                JavaScript is a Scripting Language used for many reasons such as making websites dynamic but can also be integrated with other languages to add more functionality
                <b>///</b> The extension for JavaScript is .js
                <b>///</b> The language is easy to pick up but can be difficult to master
                <b>///</b> Be aware that JavaScript and Java are completely dfferent languages, JS has its code run in browser whilst Java is usualy developeed into an application and then it's code is then executed by this application.
            </p>
        </div>
        <br />

        <div id="progressBarH1" style="position:relative">
            <script>
                $(document).ready(function ($) {
                    $('#t1Btn1').button();
                    $('#progressBarH1').progressbar(
                        {
                            value: 0,
                            create: function (e) {
                                $('#pb-label1').text($('#progressBarH1').progressbar("value"));
                            },
                            complete: function (e) {
                                $('#t1Btn1').button("disable")
                                $('#t1Btn1').text("Completed")
                            }, change: function (e) {
                                if ($(this).progressbar("value") < 100) {
                                    $('#t1Btn1').button("enable")
                                }
                                $('#pb-label1').text($('#progressBarH1').progressbar("value"));
                            }
                        });
                    //Button click
                    $('#t1Btn1').click(function (e) {
                        $('#progressBarH1').progressbar({ value: 100 });
                    })
                });
            </script>
            Progress Completed: <strong><span id="pb-label1" style="position:absolute; left:37%"></span></strong>
        </div>
        <button id="t1Btn1" style="margin-bottom:1%">Click me to complete</button>
    </div>
    <!--Part 2 - Explaining Tags-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightgoldenrodyellow">
        <h2><b>Part 2</b> - Styling with CSS</h2>
        <p style="text-align:center">
            This part will explain how to make webpages look better using the stylesheet language CSS. This language is used hand-in-hand with HTML to produce high-quality websites and can be done a variety of ways!
        </p>
        <div id="progressBarH2" style="position:relative">
            <script>
                $(document).ready(function ($) {
                    $('#t1Btn2').button();
                    $('#progressBarH2').progressbar(
                        {
                            value: 0,
                            create: function (e) {
                                $('#pb-label2').text($('#progressBarH2').progressbar("value"));
                            },
                            complete: function (e) {
                                $('#t1Btn2').button("disable")
                                $('#t1Btn2').text("Completed")
                            }, change: function (e) {
                                if ($(this).progressbar("value") < 100) {
                                    $('#t1Btn2').button("enable")
                                }
                                $('#pb-label2').text($('#progressBarH2').progressbar("value"));
                            }
                        });
                    //Button click
                    $('#t1Btn2').click(function (e) {
                        $('#progressBarH2').progressbar({ value: 100 });
                    })
                });
            </script>
            Progress Completed: <strong><span id="pb-label2" style="position:absolute; left:37%"></span></strong>
        </div>
        <button id="t1Btn2" type="submit">Click me to complete</button>
    </div>

    <div class="col-md-4" style="border:solid; height:100%; background-color:lightcoral">
        <h2><b>Part 3</b> - Advancing HTML</h2>
        <p style="text-align:center">
            In this section will be be exploring more into what extra features and languages can be utilised alongside HTML
        </p>
        <div id="progressBarH3" style="position:relative">
            <script>
                $(document).ready(function ($) {
                    $('#t1Btn3').button();
                    $('#progressBarH3').progressbar(
                        {
                            value: 0,
                            create: function (e) {
                                $('#pb-label3').text($('#progressBarH3').progressbar("value"));
                            },
                            complete: function (e) {
                                $('#t1Btn3').button("disable")
                                $('#t1Btn3').text("Completed")
                            }, change: function (e) {
                                if ($(this).progressbar("value") < 100) {
                                    $('#t1Btn3').button("enable")
                                }
                                $('#pb-label3').text($('#progressBarH3').progressbar("value"));
                            }
                        });
                    //Button click
                    $('#t1Btn3').click(function (e) {
                        $('#progressBarH3').progressbar({ value: 100 });
                    })
                });
            </script>
            Progress Completed: <strong><span id="pb-label3" style="position:absolute; left:37%"></span></strong>
        </div>
        <button id="t1Btn3" type="submit">Click me to complete</button>
    </div>
</div>

<br />

@*Second Section Demos / Show how its done*@
<h2><b>Examples</b></h2>
<div class="row" style="height:255px; border:dashed">
    <div class="col-md-4" style="border:solid; height:100%">
        <h2>Part 1 - Simple HTML</h2>
        <p>TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p>
        <p><a class="btn btn-default" href="">Got it! &raquo;</a></p>
    </div>

    <div class="col-md-4" style="border:solid; height:100%">
        <h2>Find out more about us</h2>
        <p>We at CoJō want to give you the best possible experience and so you'll want to understand what a coding language is! Click here to find out more</p>
        <p><a class="btn btn-default" href="">Got it! &raquo;</a></p>
    </div>

    <div class="col-md-4" style="border:solid; height:100%">
        <h2>For the Coding Veterans</h2>
        <p>Here are some practice questions and test your knowledge quizzes to see where you're at</p>
        <p><a class="btn btn-default" href="">Got it! &raquo;</a></p>
    </div>
</div>

</body>
</html>