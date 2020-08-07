<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CoJō Topics</title>

        <!--Browser version support-->
        <script src="assets/js/modernizr-2.8.3.js"></script>
        <!--jQuery Link-->
        <script src="assets/js/jquery-3.4.1.js"></script>
        <!--jQuery-UI Link-->
        <script src="assets/js/jquery-ui-1.12.1.js"></script>
        <!-- Bootstrap -->
        <script src="assets/js/bootstrap.js"></script>

        <!-- Stylesheets -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
        <link href="assets/css/themes/base/jquery-ui.css" rel="stylesheet" />
        <link href="assets/css/Site.css" rel="stylesheet" />
        <!--Personal Icons-->
        <link href="assets/css/all.min.css" rel="stylesheet" />
        <link href="assets/css/fontawesome.min.css" rel="stylesheet" />
        <!--Custom CSS-->
        <link href="assets/css/allTopicStyles.css" rel="stylesheet" />
    </head>
    <body>
    <!--UNIVERSAL NAV BAR-->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="assets/img/CoJo_Logo.png"  title="CoJō Logo" alt="CoJō Home - Click to return to the home page" style="width:7%; float:left" />
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
    <h1 style="text-align:center"><strong>Choose a Language!</strong></h1>
    <h3 style="text-align:center">Here you can choose which language you would like to study! Each topic gets progressively more difficult so don't be afraid to push yourself!</h3>
</div>
<br>
<!--First Section - Beginner-->
<h2 style="text-align:center"><strong>Stage 1 - White Belt</strong></h2>
<div class="row" style="height:35%">
    <div class="col-xs-2">
        <div id="alertBox1" style="margin-left: 15px; margin-top: 40px">
            <div>
                <div id="alertBoxHeader1"><b></b></div>
                <div id="alertBoxBody1"></div>
            </div>
        </div>
    </div>
    <!-- HTML/CSS -->
    <div class="col-xs-4" style="border-style:solid; border-radius:5%; height:100%">
        <span style="cursor: pointer; color: lightgrey" id="favTop1" onclick="Alert.favHTML('HTML/CSS Topic: <br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:orange; text-align:center"><b>HTML & CSS</b><img class="topicLogos" alt="HTML Logo"  src="assets/img/HTML5_logo.png"  /> <img class="CSS_logo"  alt="CSS Logo" src="assets/img/CSS3_logo.png"  /> </h2>
        <p style="text-align:center"><i>Web Development Mark-up language used to produce web  pages for websites. Use HTML to structure your webpages and then CSS to style them and stand out from the crowd! This topic will include <b>What</b>, <b>How</b> and <b>Why</b> this language is used</i></p>
        <br>
        <p><a class="btn btn-default" href="htmlPage.php" style="color:orange"><b>Learn more &raquo;</b></a><b>*Recommended for beginners</b></p>
        <!--Progress Bar-->
        <div id="pbTopic1" style="margin-bottom: 1%; ">
            Topic Completion: <b style="visibility: hidden"><span id="html-label" style="position:relative;"></span>%</b>
        </div>
    </div>
    <!-- JavaScript -->
    <div class="col-xs-4" style="border-style:solid; border-radius:5%;">
        <span style="cursor: pointer; color: lightgrey" id="favTop2" onclick="Alert.favJS('JavaScript Topic: <br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color: goldenrod; text-align: center"><b>JavaScript </b><img class="topicLogos" alt="JavaScript_Logo"  src="assets/img/js-logo.png" /></h2>
        <p style="text-align:center"><i>In this topic we shall we exploring the high-level scripting language JavaScript. We will go through: <b>What</b> JavaScript is, <b>How</b> it is used, and <b>Why</b> JavaScript is so important especially in the web development industry</i></p>
        <br>
        <p><a class="btn btn-default" href="jsPage.php" style="color:goldenrod"><b>Learn more &raquo;</b></a><b>*Recommended after completing HTML & CSS</b></p>
        <!--Progress Bar-->
        <div id="pbTopic2" style="margin-bottom:1%;">
            Topic Completion: <b style="visibility: hidden"><span id="js-label" style="position:relative"></span>%</b>
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
<h2 style="text-align: center"><b>Stage 2 - Brown Belt</b></h2>
<!-- CPlusPlus -->
<div class="row" style="height:35%">
    <div class="col-xs-2">
        <div id="alertBox3" style="margin-left: 15px; margin-top: 40px">
            <div>
                <div id="alertBoxHeader3"><b></b></div>
                <div id="alertBoxBody3"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-4" style="border-style: solid; border-radius: 5%;">
        <span style="cursor: pointer; color: lightgrey" id="favTop3" onclick="Alert.favPlus('C++ Topic: <br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:deepskyblue; text-align:center"><b> C-Plus-Plus </b><img class="topicLogos" alt="C_Plus_Logo"  src="assets/img/Cplusplus_logo.png" /></h2>
        <p style="text-align:center"><i>A high-level programming language extension of C that uses the Object-oriented paradigm.  We will go through: <b>What</b> C++ is, <b>How</b> it is used, and <b>Why</b> C++ is used over certain other programming languages</i></p>
        <br>
        <p><a class="btn btn-default" href="" style="color:deepskyblue"><b>Learn more &raquo;</b></a></p>
        <!--Progress Bar-->
        <div id="pbTopic3" style="margin-bottom:1%;">
            Topic Completion: <b style="visibility: hidden"><span id="cplus-label" style="position:relative;"></span>%</b>
        </div>
    </div>
    <!-- C-Sharp -->
    <div class="col-xs-4" style="border-style: solid; border-radius: 5%; height:100%">
        <span style="cursor: pointer; color: lightgrey" id="favTop4" onclick="Alert.favSharp('C# Topic: <br> Favourite settings have changed!')">
            <i class="far fa-grin-stars fa-3x" style="float:left; padding:5px"></i>
        </span>
        <h2 style="color:rebeccapurple; text-align:center"><b>C-Sharp </b><img class="topicLogos" alt="C_Sharp_Logo" src="assets/img/Csharp_logo.png" /></h2>
        <p style="text-align:center"><i>A general multi-purpose programming language developed using the .NET Framework that uses the Object-oriented paradigm. In this topic we will delve into <b>What</b> C# is used for, <b>How</b> it is used and <b>Why</b> the programming language was developed</i></p>
        <br>
        <p><a class="btn btn-default" href="" style="color:rebeccapurple"><b>Learn more &raquo;</b></a></p>
        <!--Progress Bar-->
        <div id="pbTopic4" style="margin-bottom:1%;">
            Topic Completion: <b style="visibility: hidden"><span id="csharp-label" style="position:relative;"></span>%</b>
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
<br>
    <!-- Coming Soon Section -->
<h2 style="text-align:center"><strong>Stage 3 - Black Belt</strong></h2>
<div class="row">
    <div class="col-xs-2"></div>
    <div class="col-xs-8" style="border-style: solid; border-radius: 5%;">
        <h2 style="color:green; text-align:center"><strong>Coming Soon</strong></h2>
        <p id="countDownArea" style="text-align:center; font-size: large"></p>
    </div>
    <div class="col-xs-2"></div>
</div>
<!-- Support Section -->
<h2 style="text-align:center"><strong>Support</strong></h2>
<div class="row">
    <div class="col-xs-2"></div>
    <div class="col-xs-4" style="border-style: solid; border-radius: 5%;">
        <h2 style="color:lightsalmon; text-align:center"><b>FAQ</b></h2>
        <p style="text-align:center"><i>See if anyone else has asked the same as you!</i></p>
        <p><a class="btn btn-default" href="aboutUs.php" style="color:lightsalmon"><b>Learn more &raquo;</b></a></p>
    </div>
    <div class="col-xs-4" style="        border-style: solid;
        border-radius: 5%;">
        <h2 style="color:lightsalmon; text-align:center"><b>Ask an expert!</b></h2>
        <p style="text-align:center"><i>Still can't find what you're looking for? Ask Us!</i></p>
        <p><a class="btn btn-default" href="contactUs.php" style="color:lightsalmon"><b>Learn more &raquo;</b></a></p>
    </div>
    <div class="col-xs-2"></div>
</div>
</body>


<script>
    // Script for 'Coming Soon' dialog //
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

var favTop1 = document.getElementById("favTop1");
var favTop2 = document.getElementById("favTop2");
var favTop3 = document.getElementById("favTop3");
var favTop4 = document.getElementById("favTop4");


// Favourite Topic notification alerts
function favTopicAlert()
{
    // First (HTML/CSS) Alert Settings //
    this.favHTML = function(dialog)
    {
        var alertBox1 = document.getElementById('alertBox1');

        if (favTop1.click && favTop1.style.color === 'lightgrey')
        {
            alertBox1.style.display = "block";
            document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody1').innerHTML = dialog;

            favTop1.style.color = 'green';

            $("#alertBox1").fadeIn("slow", function()
            {
                setTimeout(function()
                {
                    $("#alertBox1").fadeOut(3000);
                }, 1000);
            });
        }
        else if (favTop1.click && favTop1.style.color === 'green')
        {
            alertBox1.style.display = "block";
            document.getElementById('alertBoxHeader1').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody1').innerHTML = dialog;

            favTop1.style.color = 'lightgrey';

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
    this.favJS = function(dialog2)
    {
        var alertBox2 = document.getElementById('alertBox2');

        if (favTop2.click && favTop2.style.color === 'lightgrey')
        {
            alertBox2.style.display = "block";
            document.getElementById('alertBoxHeader2').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody2').innerHTML = dialog2;

            favTop2.style.color = 'green';

            $("#alertBox2").fadeIn("slow", function()
            {
                setTimeout(function()
                {
                    $("#alertBox2").fadeOut(5000);
                }, 1000);
            });
        }
        else if (favTop2.click && favTop2.style.color === 'green')
        {
            alertBox2.style.display = "block";
            document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody4').innerHTML = dialog2;

            favTop2.style.color = 'lightgrey';

            $("#alertBox2").fadeIn("slow", function()
            {
                setTimeout(function()
                {
                    $("#alertBox2").fadeOut(5000);
                }, 1000);
            });
        }

    }
    // Third (C++) Alert Settings //
    this.favPlus = function(dialog3)
    {
        var alertBox3 = document.getElementById('alertBox3');

        if (favTop3.click && favTop3.style.color === 'lightgrey')
        {
            alertBox3.style.display = "block";
            document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody3').innerHTML = dialog3;

            favTop3.style.color = 'green';

            $("#alertBox3").fadeIn("slow", function()
            {
                setTimeout(function()
                {
                    $("#alertBox3").fadeOut(5000);
                }, 1000);
            });
        }
        else if (favTop3.click && favTop3.style.color === 'green')
        {
            alertBox3.style.display = "block";
            document.getElementById('alertBoxHeader3').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody3').innerHTML = dialog3;

            favTop3.style.color = 'lightgrey';

            $("#alertBox3").fadeIn("slow", function()
            {
                setTimeout(function()
                {
                    $("#alertBox3").fadeOut(5000);
                }, 1000);
            });
        }
    }
    // Fourth (C#) Alert Settings //
    this.favSharp = function(dialog4)
    {
        var alertBox4 = document.getElementById('alertBox4');

        if (favTop4.click && favTop4.style.color === 'lightgrey')
        {
            alertBox4.style.display = "block";
            document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody4').innerHTML = dialog4;

            favTop4.style.color = 'green';

            $("#alertBox4").fadeIn("slow", function()
            {
                setTimeout(function()
                {
                    $("#alertBox4").fadeOut(5000);
                }, 1000);
            });
        }
        else if (favTop4.click && favTop4.style.color === 'green')
        {
            alertBox4.style.display = "block";
            document.getElementById('alertBoxHeader4').innerHTML = "Favourites Updated";
            document.getElementById('alertBoxBody4').innerHTML = dialog4;

            favTop4.style.color = 'lightgrey';

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
var Alert = new favTopicAlert();


/// Scripts for Progress Bars ///
$(document).ready(function ($)
{
$("#pbTopic1").progressbar(
    {
        value: false,
        create: function () {
            $("#html-label").text($("#pbTopic1").progressbar("value"));
        },
        change: function () {
            $("#html-label").text($("#pbTopic1").progressbar("value"));
        },
        complete: function () {
            $("#html-label").append("Completed")
        }
    });

$("#pbTopic2").progressbar(
    {
        value: false,
        create: function () {
            $("#csharp-label").text($("#pbTopic2").progressbar("value"));
        },
        change: function () {
            $("#csharp-label").text($("#pbTopic2").progressbar("value"));
        },
        complete: function () {
            $("#csharp-label").text("Completed!")
        }
    });

$('#pbTopic3').progressbar(
    {
        value: false,
        create: function () {
            $("#cplus-label").text($("#pbTopic3").progressbar("value"));
        },
        change: function () {
            $("#cplus-label").text($("#pbTopic3").progressbar("value"));
        },
        complete: function () {
            $("#cplus-label").text("Completed!")
        }
    });

$("#pbTopic4").progressbar(
    {
        value: false,
        create: function () {
            $("#js-label").text($("#pbTopic4").progressbar("value"));
        },
        change: function () {
            $("#js-label").text($("#pbTopic4").progressbar("value"));
        },
        complete: function () {
            $("#js-label").text("Completed!")
        }
    });
});
    </script>
</html>