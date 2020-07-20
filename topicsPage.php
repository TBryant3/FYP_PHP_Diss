<html>
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
        <!--Personal Icons-->
        <script src="https://kit.fontawesome.com/70ac388725.js" crossorigin="anonymous"></script>

        <!-- Stylesheets -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/Site.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/allTopicStyles.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/base/accordion.css" rel="stylesheet" type="text/css" />

        <style>
            h2
            {
                margin-top: 10px;
            }
        </style>
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
        <br />
        <!--@*First Section - Beginner*@-->
        <h2 style="text-align:center"><strong>Stage 1 - White Belt</strong></h2>
        <!--@* HTML/CSS *@-->
        <div class="row" style="height:265px">
            <div class="col-xs-2"></div>
            <div class="col-xs-4" style="border-style:solid; border-radius:5%; height:100%">
                <i class="far fa-grin-stars fa-2x" id="favouriteTopic1" style="float:left; padding:5px"></i>
                <h2 style="color:orange; text-align:center"><b>HTML & CSS</b><img class="topicLogos" src="assets/img/HTML5_logo.png"  /><img class="topicLogos" src="assets/img/CSS3_logo.png"  /></h2>
                <p style="text-align:center"><i>Web Development Mark-up language used to produce web  pages for websites. Use HTML to structure your webpages and then CSS to style them and stand out from the crowd!</i></p>
                <p><a class="btn btn-default" href="htmlPage.php" style="color:orange">Learn more &raquo;</a><b>*Recommended for beginners</b></p>
                <!--@*Progress Bar*@-->
                <div id="pbTopic1" style="margin-bottom: 1%; ">

                    Topic Completion: <b style="visibility: hidden"><span id="html-label" style="position:relative;"></span>%</b>

                </div>
            </div>
            <!--@* C-Sharp *@-->
            <div class="col-xs-4" style="border-style: solid; border-radius: 5%; height:100%">
                <i class="far fa-grin-stars fa-2x" id="favouriteTopic2" style="float:left; padding:5px"></i>
                <h2 style="color:rebeccapurple; text-align:center"><b>C-Sharp </b><img class="topicLogos" alt="C_Sharp_Logo" src="assets/img/Csharp_logo.png" /></h2>
                <p style="text-align:center"><i>A general multi-purpose programming language developed using the .NET Framework that uses the Object-oriented paradigm. In this topic we will delve into <b>What</b> C# is used for, <b>How</b> it is used and <b>Why</b> the programming language was developed</i></p>
                <p><a class="btn btn-default" href="" style="color:rebeccapurple">Learn more &raquo;</a></p>
                <!--@*Progress Bar*@-->
                <div id="pbTopic2" style="margin-bottom:1%;">
                    Topic Completion: <b style="visibility: hidden"><span id="csharp-label" style="position:relative;"></span>%</b>
                </div>
            </div>
            <div class="col-xs-2"></div>
        </div>
        <br />
    <br />
    <br />
    <!--@* Second Section - Intermediate*@-->
        <h2 style="text-align: center"><b>Stage 2 - Brown Belt</b></h2>
        <!--@* CPlusPlus *@-->
        <div class="row" style="height:25%">
            <div class="col-xs-2"></div>
            <div class="col-xs-4" style="border-style: solid; border-radius: 5%;">
                <i class="far fa-grin-stars fa-2x" id="favouriteTopic3" style="float:left; padding:5px"></i>
                <h2 style="color:deepskyblue; text-align:center"><b> C-Plus-Plus </b><img class="topicLogos" alt="C_Plus_Logo"  src="assets/img/Cplusplus_logo.png" /></h2>
                <p style="text-align:center"><i>A high-level programming language extension of C that uses the Object-oriented paradigm.  We will go through: <b>What</b> C++ is, <b>How</b> it is used, and <b>Why</b> C++ is used over certain other programming languages</i></p>


                <p><a class="btn btn-default" href="" style="color:deepskyblue">Learn more &raquo;</a></p>


                <!--@*Progress Bar*@-->
                <div id="pbTopic3" style="margin-bottom:1%;">

                    Topic Completion: <b style="visibility: hidden"><span id="cplus-label" style="position:relative;"></span>%</b>

                </div>
            </div>
            <!--@* JavaScript *@-->
            <div class="col-xs-4" style="border-style:solid; border-radius:5%;">
                <i class="far fa-grin-stars fa-2x" id="favouriteTopic4" style="float:left; padding:5px"></i>
                <h2 style="color: goldenrod; text-align: center"><b>JavaScript </b><img class="topicLogos" alt="JavaScript_Logo"  src="assets/img/js-logo.png" /></h2>
                <p style="text-align:center"><i>In this topic we shall we exploring the high-level scripting language JavaScript. We will go through: <b>What</b> JavaScript is, <b>How</b> it is used, and <b>Why</b> JavaScript is so important especially in the web development industry</i></p>
                <p><a class="btn btn-default" href="jsPage.php" style="color:goldenrod">Learn more &raquo;</a><b>*Recommended after completing HTML & CSS</b></p>
                <!--@*Progress Bar*@-->
                <div id="pbTopic4" style="margin-bottom:1%;">

                    Topic Completion: <b style="visibility: hidden"><span id="js-label" style="position:relative"></span>%</b>

                </div>
            </div>
            <div class="col-xs-2"></div>
        </div>
        <br />
        <br />
    <br />
    <h2 style="text-align:center"><strong>Stage 3 - Black Belt</strong></h2>
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-8" style="border-style: solid; border-radius: 5%;">
                <h2 style="color:green; text-align:center"><strong>Coming Soon</strong></h2>
                <b><p id="countDownArea" style="text-align:center; font-size: large"></p></b>
            </div>
            <div class="col-xs-2"></div>
        </div>
        <!--@* Support Section *@-->
        <h2 style="text-align:center"><strong>Support</strong></h2>
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-4" style="border-style: solid; border-radius: 5%;">
                <h2 style="color:lightsalmon; text-align:center"><b>FAQ</b></h2>
                <p style="text-align:center"><i>See if anyone else has asked the same as you!</i></p>
                <p><a class="btn btn-default" href="aboutUs.php" style="color:lightsalmon">Learn more &raquo;</a></p>
            </div>
            <div class="col-xs-4" style="        border-style: solid;
                border-radius: 5%;">
                <h2 style="color:lightsalmon; text-align:center"><b>Ask an expert!</b></h2>
                <p style="text-align:center"><i>Still can't find what you're looking for? Ask Us!</i></p>
                <p><a class="btn btn-default" href="contactUs.php" style="color:lightsalmon">Learn more &raquo;</a></p>
            </div>
            <div class="col-xs-2"></div>
        </div>



        <!--Scripts for Progress Bars-->
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
                $("#pbTopic1").progressbar(
                    {
                        value: false,
                        create: function (e) {
                            $("#html-label").text($("#pbTopic1").progressbar("value"));
                        },
                        change: function (e) {
                            $("#html-label").text($("#pbTopic1").progressbar("value"));
                        },
                        complete: function (e) {
                            $("#html-label").append("Completed")
                        }
                    });

                $("#pbTopic2").progressbar(
                    {
                        value: false,
                        create: function (e) {
                            $("#csharp-label").text($("#pbTopic2").progressbar("value"));
                        },
                        change: function (e) {
                            $("#csharp-label").text($("#pbTopic2").progressbar("value"));
                        },
                        complete: function (e) {
                            $("#csharp-label").text("Completed!")
                        }
                    });

                $('#pbTopic3').progressbar(
                    {
                        value: false,
                        create: function (e) {
                            $("#cplus-label").text($("#pbTopic3").progressbar("value"));
                        },
                        change: function (e) {
                            $("#cplus-label").text($("#pbTopic3").progressbar("value"));
                        },
                        complete: function (e) {
                            $("#cplus-label").text("Completed!")
                        }
                    });

                $("#pbTopic4").progressbar(
                    {
                        value: false,
                        create: function (e) {
                            $("#js-label").text($("#pbTopic4").progressbar("value"));
                        },
                        change: function (e) {
                            $("#js-label").text($("#pbTopic4").progressbar("value"));
                        },
                        complete: function (e) {
                            $("#js-label").text("Completed!")
                        }
                    });

                document.getElementById("favouriteTopic1").onclick = function () { favouriteSelected() };

                function favouriteSelected()
                {
                    document.getElementById("favouriteTopic1")
                }
            });
        </script>
    </body>
</html>