<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML/CSS Page</title>

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

<!--Introduction information about the Topic-->
<div class="row">
    <div class="col-xs-6">
        <h1 style="text-align:center; color: orange; font-family: monospace">
            <u><b>Hypertext Markup Language</b></u>
            <img class="topicLogos" alt="HTML_Logo" src="assets/img/HTML5_logo.png" />
            <br>
            <b style="text-align: center; font-size: x-large"><i>Founded in 1993 by Tim Berners-Lee</i></b>
        </h1>
        <br>
        <!--Short description of HTML-->
        <p title="HTML Description" class="topicDesc" style="font-size: large; text-align: center">
            HTML is a computing mark-up language that is used for the development of websites and to display documents within a web browser!
            <br>
            <br>
            The first part of the naming for HTML, Hypertext, refers to the hyperlinks that can be included in the website as to navigate between pages.
            <br>
            The second being that of 'Markup Language' which refers to the layout and how elements are defined within the webpage(s).
        </p>
    </div>
    <div class="col-xs-6">
        <h1 style="text-align:center; color: blue; font-family: monospace">
            <u><b>Cascading Style Sheets</b></u>
            <img class="CSS_logo" alt="CSS_Logo" src="assets/img/CSS3_logo.png" />
            <br>
            <b style="text-align: center; font-size: x-large"><i>
                Developed by Hakon Wium Lie in 1994,
                <br>
                First standard published in 1996 by W3C!</i>
            </b>
        </h1>
        <br>
        <!--Short description of CSS-->
        <p title="CSS Description" class="topicDesc" style="font-size: large; text-align: center">
            CSS is a style defining language for HTML webpages!
            <br>
            The use of style sheets enabled web developers to push the boundaries on how their content was delivered to the user!
            <br>
            CSS allows HTML documents to become more then just data on a webpage, it opens up more to presentation and customisation!
        </p>
    </div>
</div>


<!--First Section Teaching Element and Theory-->
<div class="row" style="height:400px">
    <h1 style="text-align: center"><b><u>Learning Modules</u></b></h1>

    <div class="col-xs-2"></div>
        <!--Part 1 - Introduction to HTML-->
    <div class="col-xs-4" style="border:solid; height:auto; background-color:lightgreen">
        <h2 style="text-align: center"><b>Introduction to HTML</b></h2>
        <p style="text-align:center">
            This module gives you the background behind HTML, <u><b>Why</b></u> it was developed as well as <u><b>How</b></u> HTML has influenced web development over the years!
        </p>
        <div id="accordionH1" class="accordions">
            <h3 class="learnTitles">History of HTML</h3>
            <p> ADD TEXT </p>
            <h3 class="learnTitles">Present Day HTML</h3>
            <p> ADD TEXT </p>
            <h3 class="learnTitles">The Future of HTML</h3>
            <p> ADD TEXT </p>
        </div>
        <br />
        <div>
            <div id="progressBarH1" style="position:relative">
                Progress Completed: <b><span id="pb-label1" style="position:relative"></span></b>
            </div>
            <button id="t1Btn1" type="submit" style="margin-bottom:1%">Click me to complete</button>
        </div>
    </div>
    <!--Part 2 - Explaining Tags-->
    <div class="col-xs-4" style="border:solid; height:auto; background-color:lightgoldenrodyellow">
        <h2 style="text-align: center"><b>Styling with CSS</b></h2>
        <p style="text-align:center">
            In this module you shall be be exploring <u><b>What</b></u> CSS is and <u><b>How</b></u> it is used alongside HTML to make web development more customisable to the developer and user's needs!
        </p>
        <div id="accordionH2" class="accordions">
            <h3 class="learnTitles">What is CSS</h3>
            <p>ADD TEXT</p>
            <h3 class="learnTitles">CSS Uses</h3>
            <p>ADD TEXT</p>
            <h3 class="learnTitles">CSS Integration</h3>
            <p>ADD TEXT</p>
        </div>
        <br>
        <div id="progressBarH2" style="position:relative">
            Progress Completed: <b><span id="pb-label2" style="position:relative"></span></b>
        </div>
        <button id="t1Btn2" type="submit" style="margin-bottom:1%">Click me to complete</button>
    </div>
    <div class="col-xs-2"></div>
</div>

<!--Second Section Demos / Showing theory in a graphical way (This aids imagery / visual learners)-->
<div class="row" style="height:500px">
    <h1 style="text-align: center"><b><u>Demos & Examples</u></b></h1>
    <!--Demo One-->
    <div class="col-xs-4" style="border:solid; height:auto">
        <h2>Create HTML documents</h2>
        <h3>HTML Templates</h3>
        <p>As HTML is a mark-up language, it follows a very simple structure which in-turn can be expanded upon if the user so needs it!</p>
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

<!--Row 4 - 1 box Helpful HTML guides / Add-Ons-->
<div class="row" style="text-align: center; height:300px">
    <h1 style="text-align: center"><b><u>Useful HTML Extras & Frameworks</u></b></h1>
    <div class="col-xs-2">
        <div id="alertBox" style="margin-left: 15px; margin-top: 40px">
            <div>
                <div id="alertBoxHeader"><b></b></div>
                <div id="alertBoxBody"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-8">
        <h2 style="color:mediumpurple; text-align:center"><b> Bootstrap </b><a href="https://getbootstrap.com/"><img title="Download Bootstrap here!" alt="Bootstrap4 Logo" src="assets/img/bootstrap-solid.svg" class="topicLogos"></a></h2>
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
        $("#accordionH1").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}

            });
        $("#accordionH2").accordion(
            {
                active: false,
                collapsible: true,
                event:"mouseover",
                heightStyle: true,
                animate: 150,
                icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
            });
        // $("#accordionH3").accordion(
        //     {
        //         active: false,
        //         collapsible: true,
        //         heightStyle: true,
        //         animate: 150,
        //         icons:{header: "ui-icon-circle-plus", activeHeader: "ui-icon-circle-minus"}
        //     });
    }
    collapse();


    $(document).ready(function ($)
    {
        const t1Btn1 = $('#t1Btn1');

        t1Btn1.button("enable");
        $('#progressBarH1').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pb-label1').text($('#progressBarH1').progressbar("value") + "%");
                },
                change: function ()
                {
                    if ($(this).progressbar("value") < 100)
                    {
                        t1Btn1.button("enable")
                    }
                    $('#pb-label1').text($('#progressBarH1').progressbar("value") + "%");
                },
                complete: function ()
                {
                    t1Btn1.button("disable").text("Completed");
                    t1Btn1.style.backgroundColor = "slategrey";
                }
            });
        //Button click
        t1Btn1.click(function ()
        {
            $('#progressBarH1').progressbar({ value: 100 });
        })

        $(document).ready(function ($)
        {
            const t1Btn2 = $('#t1Btn2');
            t1Btn2.button("enable");

            $('#progressBarH2').progressbar(
                {
                    value: 0,
                    create: function ()
                    {
                        $('#pb-label2').text($('#progressBarH2').progressbar("value") + "%");
                    },
                    change: function ()
                    {
                        if ($(this).progressbar("value") < 100) {
                            t1Btn2.button("enable")
                        }
                        $('#pb-label2').text($('#progressBarH2').progressbar("value") + "%");
                    },
                    complete: function ()
                    {
                        t1Btn2.button("disable").text("Completed or is it?");
                        t1Btn2.style.opacity ="0.2";
                    },
                });
            //Button click
            t1Btn2.click(function () {
                $('#progressBarH2').progressbar({ value: 100 });
            })
        });

        // $(document).ready(function ($) {
        //
        //
        //     $('#t1Btn3').button();
        //     $('#progressBarH3').progressbar(
        //         {
        //             value: 0,
        //             create: function () {
        //                 $('#pb-label3').text($('#progressBarH3').progressbar("value") + "%");
        //             },
        //             complete: function () {
        //                 $('#t1Btn3').button("disable")
        //                 $('#t1Btn3').text("Completed")
        //             }, change: function () {
        //                 if ($(this).progressbar("value") < 100) {
        //                     $('#t1Btn3').button("enable")
        //                 }
        //                 $('#pb-label3').text($('#progressBarH3').progressbar("value") + "%");
        //             }
        //         });
        //     //Button click
        //     $('#t1Btn3').click(function (e) {
        //         $('#progressBarH3').progressbar({ value: 100 });
        //     })
        // });
    });
</script>