<!--@*REMOVE THE 'LEARN MORE' BUTTONS FOR SOMETHING MORE APPEALING*@-->
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoJō Test Centre</title>

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

<div class="Welcoming">
    <h1 style="text-align:center"><strong>CoJō Test Centre</strong></h1>
    <h3 style="text-align:center">This is Test Centre! You can check your progress on different topics and also test yourself on the areas you have learnt about</h3>
</div>
<br />
<!--@*First Section - Beginner*@-->
<h2 style="text-align:center"><strong>Stage 1 - Beginner</strong></h2>
<!--@* HTML/CSS *@-->
<div class="row" style="height:275px">
    <div class="col-xs-2"></div>
    <div class="col-xs-4" style="border-style:solid; height:100%; border-radius:5%; ">
        <h2 style="color:orange; text-align:center"><strong>HTML & CSS Tests <img class="topicLogos" alt="HTML_Logo" src="img/HTML5_logo.png" /></strong></h2>
        <p style="text-align:center"><i>Web Development Mark-up language used to produce web pages for websites. Use HTML to structure and then CSS to style your webpages and stand out from the crowd</i></p>
        <p><a class="btn btn-default" href="htmlTestPage.php" style="background-color:lightcoral">Learn more &raquo;</a></p>
        <!--@*Progress Bar*@-->
        <div id="pbTest1" style="margin-bottom:1%;">

            Tests Completed: <b><span id="htmlTest-label" style="position:relative;"></span></b>

        </div>
    </div>
    <!--@* C-Sharp *@-->
    <div class="col-xs-4" style="border-style: solid; height:100%; border-radius: 5%;">
        <h2 style="color:rebeccapurple; text-align:center"><strong>C# Tests <img class="topicLogos" alt="C_Sharp_Logo" src="img/Csharp_logo.png" /></strong></h2>
        <p style="text-align:center"><i>A general multi-purpose programming language developed using the .NET Framework that uses the Object-oriented paradigm</i></p>
        <p><a class="btn btn-default" href="cSharpTestPage.php" style="background-color:lightcoral">Learn more &raquo;</a></p>
        <!--@*Progress Bar*@-->
        <div id="pbTest2" style="margin-bottom:1%;">

            Tests Completed: <b><span id="csharpTest-label" style="position:relative;"></span></b>

        </div>
    </div>
    <div class="col-xs-2"></div>
        </div>
        <br />
        <!--@* Second Section - Intermediate*@-->
        <h2 style="text-align:center"><strong>Stage 2 - Advanced</strong></h2>
        <div class="row" style="height:275px">
            <div class="col-xs-2"></div>
            <!--@* CPlusPlus *@-->
            <div class="col-xs-4" style="border-style:solid; height:100%; border-radius: 5%;">
                <h2 style="color:lightblue; text-align:center"><strong>C++ Tests <img class="topicLogos" alt="C_Plus_Logo"  src="img/Cplusplus_logo.png" /></strong></h2>
                <p style="text-align:center"><i>A high-level programming language extension of C that uses the Object-oriented paradigm</i></p>
                <p><a class="btn btn-default" href="cPlusPlusTestPage.php" style="background-color:lightcoral">Learn more &raquo;</a></p>
                <!--@*Progress Bar*@-->
                <div id="pbTest3" style="margin-bottom:1%;">

                    Tests Completed: <b><span id="cplusTest-label" style="position:relative;"></span></b>

                </div>
            </div>
            <!--@* JavaScript *@-->
            <div class="col-xs-4" style="border-style:solid; height:100%; border-radius:5%;">
                <h2 style="color:yellow; text-align:center"><strong>JavaScript Tests<img class="topicLogos" alt="JavaScript_Logo"  src="img/js-logo.png" /></strong></h2>
                <p style="text-align:center"><i>JavaScript</i></p>
                <p><a class="btn btn-default" href="jsTestPage.php" style="background-color:lightcoral">Learn more &raquo;</a></p>
                <!--@*Progress Bar*@-->
                <div id="pbTest4" style="margin-bottom:1%;">

                    Tests Completed: <b><span id="jsTest-label" style="position:relative;"></span></b>

                </div>
            </div>
            <div class="col-xs-2"></div>
        </div>
        <br />
        <h2 style="text-align:center"><strong>Stage 3 - Black Belt</strong></h2>
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-8" style="border-style: solid; border-radius: 3%;">
                <h2 style="color:green; text-align:center"><strong>Coming Soon</strong></h2>
                <b><p id="countDownArea" style="text-align:center; font-size: large"></p></b>
            </div>
        </div>

        <!--Support-->
        <br />
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-4" style="border-style: solid; border-radius: 5%;">
                <h2 style="color:green; text-align:center"><strong>FAQ</strong></h2>
                <p style="text-align:center"><i>See if anyone else has asked the same as you!</i></p>
                <p><a class="btn btn-default" href="aboutUs.php">Learn more &raquo;</a></p>
            </div>
            <div class="col-xs-4" style="border-style:solid; border-radius:5%;">
                <h2 style="color:green; text-align:center"><strong>Ask an expert!</strong></h2>
                <p style="text-align:center"><i>Still can't find what you're looking for? Ask Us!</i></p>
                <p><a class="btn btn-default" href="contactUs.php">Learn more &raquo;</a></p>
            </div>
            <div class="col-xs-2"></div>
        </div>

<script>
    // Countdown date
    var countDownDate = new Date("Nov 3, 2021 12:30:10").getTime();
    //Function for counting down
    var countDownFunc = setInterval(function()
    {
        // Setting today's date
        var current = new Date().getTime();
        // Time difference between countdown date and now
        var difference = countDownDate - current;
        //Setting time variables
        var days = Math.floor(difference / (1000 * 60 * 60 * 24));
        var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((difference % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("countDownArea").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (difference < 0) {
            clearInterval(countDownFunc);
            document.getElementById("countDownArea").innerHTML = "EXPIRED";
        }

    }, 1000);

    $(document).ready(function ($)
    {
        $('#pbTest1').progressbar(
            {
                value: false,
                create: function () {
                    $('#htmlTest-label').text($('#pbTest1').progressbar("value"));
                },
                complete: function () {
                    $('#htmlTest-label').append("Completed")
                },
                change: function () {
                    $('#htmlTest-label').text($('#pbTest1').progressbar("value"));
                }
            });
        $('#pbTest2').progressbar(
            {
                value: false,
                create: function () {
                    $('#csharpTest-label').text($('#pbTest2').progressbar("value"));
                },
                complete: function () {
                    $('#csharpTest-label').text("Completed!")
                },
                change: function () {
                    $('#csharpTest-label').text($('#pbTest2').progressbar("value"));
                }
            });
        $('#pbTest3').progressbar(
            {
                value: false,
                create: function () {
                    $('#cplusTest-label').text($('#pbTest3').progressbar("value"));
                },
                complete: function () {
                    $('#cplusTest-label').text("Completed!")
                },
                change: function () {
                    $('#cplusTest-label').text($('#pbTest3').progressbar("value"));
                }
            });

        $('#pbTest4').progressbar(
            {
                value: false,
                create: function () {
                    $('#jsTest-label').text($('#pbTest4').progressbar("value"));
                },
                complete: function () {
                    $('#jsTest-label').text("Completed!")
                },
                change: function () {
                    $('#jsTest-label').text($('#pbTest4').progressbar("value"));
                }
            });
    });
    </script>
    </body>
</html>