<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoJō Test Centre</title>

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
    <!--Personal Icons-->
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/fontawesome.min.css" rel="stylesheet" />
    <link href="assets/css/Site.css" rel="stylesheet" type="text/css" />
    <!--Custom CSS-->
    <link href="assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />

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
<h2 style="text-align:center"><b>Test Set - White</b></h2>
<div class="row" style="height:275px">
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
        <h2 style="text-align:center"><b style="color:orange">HTML</b><img class="topicLogos" alt="HTML Logo"  src="assets/img/HTML5_logo.png"  /><b style="color: blue"> CSS </b><img class="CSS_logo"  alt="CSS Logo" src="assets/img/CSS3_logo.png"  /> <b style="color: orange">Tes</b><b style="color: blue">ts</b></h2>
        <p style="text-align:center"><i>Web Development Mark-up language used to produce web pages for websites. Use HTML to structure and then CSS to style your webpages and stand out from the crowd</i></p>
        <p><a class="btn btn-default" href="htmlTestPage.php" style="color:orange"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
        <div id="pbTest1" style="margin-bottom:1%;">
            Tests Completed: <b><span id="htmlTest-label" style="position:relative;"></span></b>
        </div>
    </div>
    <!-- JavaScript -->
    <div class="col-xs-4" style="border-style:solid; height:100%; border-radius:5%;">
        <span style="cursor: pointer; color: lightgrey" id="favTest2" onclick="testAlert.favTestJS('<b>JavaScript Tests:</b> <br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:goldenrod; text-align:center"><b>JavaScript Tests<img class="topicLogos" alt="JavaScript_Logo"  src="assets/img/js-logo.png" /></b></h2>
        <p style="text-align:center"><i>These tests will go through the basics through to more complicated JavaScript functions with a well-rounded approach against what you have learnt from using this application</i></p>
        <p><a class="btn btn-default" href="jsTestPage.php" style="color:goldenrod"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
        <div id="pbTest4" style="margin-bottom:1%;">
            Tests Completed: <b><span id="jsTest-label" style="position:relative;"></span></b>
        </div>
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
<h2 style="text-align:center"><strong>Test Set - Brown</strong></h2>
<div class="row" style="height:275px">
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
        <h2 style="color:deepskyblue; text-align:center"><b>C++ Tests <img class="topicLogos" alt="C_Plus_Logo"  src="assets/img/Cplusplus_logo.png" /></b></h2>
        <p style="text-align:center"><i>A high-level programming language extension of C that uses the Object-oriented paradigm</i></p>
        <p><a class="btn btn-default" href="cPlusPlusTestPage.php" style="color:deepskyblue"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
        <div id="pbTest3" style="margin-bottom:1%;">
            Tests Completed: <b><span id="cplusTest-label" style="position:relative;"></span></b>
        </div>
    </div>
    <!-- C-Sharp -->
    <div class="col-xs-4" style="border-style: solid; height:100%; border-radius: 5%;">
        <span style="cursor: pointer; color: lightgrey" id="favTest4" onclick="testAlert.favTestSharp('<b>C# Tests:</b> <br> favourite settings have been updated!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:rebeccapurple; text-align:center"><b>C# Tests <img class="topicLogos" alt="C_Sharp_Logo" src="assets/img/Csharp_logo.png" /></b></h2>
        <p style="text-align:center"><i>A general multi-purpose programming language developed using the .NET Framework that uses the Object-oriented paradigm</i></p>
        <p><a class="btn btn-default" href="cSharpTestPage.php" style="color:rebeccapurple"><b>Test me &raquo;</b></a></p>
        <!--Progress Bar-->
        <div id="pbTest2" style="margin-bottom:1%;">
            Tests Completed: <b><span id="csharpTest-label" style="position:relative;"></span></b>
        </div>
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
<h2 style="text-align:center"><strong>Test Set - Black</strong></h2>
<div class="row">
    <div class="col-xs-2"></div>
    <div class="col-xs-8" style="border-style: solid; border-radius: 3%;">
        <h2 style="color:green; text-align:center"><strong>Coming Soon</strong></h2>
        <p id="countDownArea" style="text-align:center; font-size: x-large"></p>
    </div>
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

<script>
    // Countdown date
    let countDownDate = new Date("Nov 3, 2021 12:30:10").getTime();
    //Function for counting down
    let countDownFunc = setInterval(function()
    {
        // Setting today's date
        let current = new Date().getTime();
        // Time difference between countdown date and now
        let difference = countDownDate - current;
        //Setting time variables
        let days = Math.floor(difference / (1000 * 60 * 60 * 24));
        let hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((difference % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
        document.getElementById("countDownArea").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (difference < 0) {
            clearInterval(countDownFunc);
            document.getElementById("countDownArea").innerHTML = "EXPIRED";
        }

    }, 1000);

    let favTest1 = document.getElementById("favTest1");
    let favTest2 = document.getElementById("favTest2");
    let favTest3 = document.getElementById("favTest3");
    let favTest4 = document.getElementById("favTest4");

    function favTestAlert()
    {
        // First (HTML/CSS) Tests Alert Settings //
        this.favTestHTML = function(dialog)
        {
            let alertBox1 = document.getElementById('alertBox1');

            if (favTest1.click && favTest1.style.color === 'lightgrey')
            {
                alertBox1.style.display = "block";
                document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody1').innerHTML = dialog;

                favTest1.style.color = 'green';

                $("#alertBox1").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox1").fadeOut(3000);
                    }, 1000);
                });
            }
            else if (favTest1.click && favTest1.style.color === 'green')
            {
                alertBox1.style.display = "block";
                document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody1').innerHTML = dialog;

                favTest1.style.color = 'lightgrey';

                $("#alertBox1").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox1").fadeOut(3000);
                    }, 1000);
                });
            }
        }
        // Second (JS) Alert Settings //
        this.favTestJS = function(dialog2)
        {
            let alertBox2 = document.getElementById('alertBox2');

            if (favTest2.click && favTest2.style.color === 'lightgrey')
            {
                alertBox2.style.display = "block";
                document.getElementById('alertBoxHeader2').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody2').innerHTML = dialog2;

                favTest2.style.color = 'green';

                $("#alertBox2").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox2").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTest2.click && favTest2.style.color === 'green')
            {
                alertBox2.style.display = "block";
                document.getElementById('alertBoxHeader2').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody2').innerHTML = dialog2;

                favTest2.style.color = 'lightgrey';

                $("#alertBox2").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox2").fadeOut(5000);
                    }, 1000);
                });
            }

        }

        // Third (C++) Tests Alert Settings //
        this.favTestPlus = function(dialog3)
        {
            let alertBox3 = document.getElementById('alertBox3');

            if (favTest3.click && favTest3.style.color === 'lightgrey')
            {
                alertBox3.style.display = "block";
                document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody3').innerHTML = dialog3;

                favTest3.style.color = 'green';

                $("#alertBox3").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox3").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTest3.click && favTest3.style.color === 'green')
            {
                alertBox3.style.display = "block";
                document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody3').innerHTML = dialog3;

                favTest3.style.color = 'lightgrey';

                $("#alertBox3").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox3").fadeOut(5000);
                    }, 1000);
                });
            }
        }
        // Fourth (C#) Tests Alert Settings //
        this.favTestSharp = function(dialog4)
        {
            let alertBox4 = document.getElementById('alertBox4');

            if (favTest4.click && favTest4.style.color === 'lightgrey')
            {
                alertBox4.style.display = "block";
                document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody4').innerHTML = dialog4;

                favTest4.style.color = 'green';

                $("#alertBox4").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox4").fadeOut(5000);
                    }, 1000);
                });
            }
            else if (favTest4.click && favTest4.style.color === 'green')
            {
                alertBox4.style.display = "block";
                document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
                document.getElementById('alertBoxBody4').innerHTML = dialog4;

                favTest4.style.color = 'lightgrey';

                $("#alertBox4").fadeIn("slow", function()
                {
                    setTimeout(function()
                    {
                        $("#alertBox4").fadeOut(5000);
                    }, 1000);
                });
            }
        }
    }

    let testAlert = new favTestAlert();


    // Progress Bar Scripts ///
    $(document).ready(function ($)
    {
        $('#pbTest1').progressbar(
        {
            value: 0,
            create: function () {
                $('#htmlTest-label').text($('#pbTest1').progressbar("value") + "%");
            },
            change: function () {
                $('#htmlTest-label').text($('#pbTest1').progressbar("value") + "%");
            },
            complete: function () {
                $('#htmlTest-label').append("Completed")
            }
        });
        $('#pbTest2').progressbar(
        {
            value: 0,
            create: function () {
                $('#csharpTest-label').text($('#pbTest2').progressbar("value") + "%");
            },
            change: function () {
                $('#csharpTest-label').text($('#pbTest2').progressbar("value") + "%");
            },
            complete: function () {
                $('#csharpTest-label').text("Completed!")
            }
        });
        $('#pbTest3').progressbar(
        {
            value: 0,
            create: function () {
                $('#cplusTest-label').text($('#pbTest3').progressbar("value") + "%");
            },
            change: function () {
                $('#cplusTest-label').text($('#pbTest3').progressbar("value") + "%");
            },
            complete: function () {
                $('#cplusTest-label').text("Completed!")
            }
        });
        $('#pbTest4').progressbar(
        {
            value: 0,
            create: function () {
                $('#jsTest-label').text($('#pbTest4').progressbar("value") + "%");
            },
            change: function () {
                $('#jsTest-label').text($('#pbTest4').progressbar("value") + "%");
            },
            complete: function () {
                $('#jsTest-label').text("Completed!")
            }
        });
    });
    </script>
</body>
</html>