<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Page</title>

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
    <!--Styling to be moved to CSS file-->
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
<!-- Creates Pop up overlay to prevent background inputs when pop-ups are shown-->
<div id="popImageOverlay"></div>

<!--Introduction information about the Topic-->
<div class="row">
    <h1 style="text-align:center; color: goldenrod;font-family: monospace">
        <u><b> JavaScript</b></u>
        <img class="topicLogos" alt="JavaScript_Logo"  src="assets/img/js-logo.png" />
        <span style="text-align: center; font-size: medium">
            <b style="text-align: center; font-size: x-large"> <i>Founded in 1995 by Brendan Eich</i></b>
        </span>
    </h1>
    <p class="topicDesc" style="font-size: large">
        JavaScript is a Scripting Language that is used alongside web development tools to produce dynamic and responsive webpages
        <br>
        <br>
        There are many extensive libraries which can be used in conjunction with core JavaScript to help reduce code lines as well as add in extra features that core JS would take too long to code as well as taking up more memory of the system.
        <br>
        Finally, JavaScript is a flexible language to work with as it incorporates multi-paradigm support and can be tested fairly easily (code dependent) with the use of the Mocha and Chia testing frameworks.
    </p>
</div>


<!--First Section Teaching Element and Theory-->
<div class="row" style="height:450px">
    <h1 style="text-align: center"><b><u>Theory Modules Part 1</u></b></h1>
    <div class="theoryRow">
        <!--Part 1 - Introduction to JS-->
        <div class="col-xs-4" style="border:solid; background-color:lightgreen">
            <h2 style="text-align: center"><b>Introduction to JavaScript</b></h2>
            <!--First Accordion Widget-->
            <div id="accordionP1" class="accordions">
                <h3 class="learnTitles">History of JavaScript</h3>
                <p>
                    JavaScript was first developed in 1995 by a man called Brendan Eich, who worked for a company called 'Netscape'.
                    The purpose of this was to add interactive and dynamic elements to websites and webpages! Furthermore, it only took him 10 days to develop the scripting language with its initial title being that of LiveScript.
                </p>
                <h3 class="learnTitles">Present Day JavaScript</h3>
                <p>
                    Yes there has been many iteration of Javascript and the '.js' extension over time but the core functionality of JavaScript is still used today in web development through the likes of adding features and more options to HTML websites as well as being flexible at intigrating into other language projects.
                </p>
                <h3 class="learnTitles">The Future of JavaScript</h3>
                <p>
                    JavaScript is currently on update 1.8.5 which doesn't seem that updated but JavaScript is helping developers create applications rapidly and to a very high-level of complexity therfore making JavaScript a programming language that will most likely continue on this path due to how efficent and flexible the language is
                </p>
            </div>
            <br>
            <!--JS Progress Bar 1-->
            <div id="progressBarJ1" style="width: 75%">
                Progress Completed: <strong><span id="pbj-label1" style="position:relative"></span></strong>
            </div>
            <button id="t4Btn1" style="margin-bottom:1%">Click me to complete</button>
            <br>
        </div>
    </div>

    <div class="theoryRow">
        <!--Part 2 - Explaining Script Tags-->
        <div class="col-xs-4" style="border:solid; background-color:lightgoldenrodyellow">
            <h2 style="text-align: center"><b>JavaScript Expanded</b></h2>
            <div id="accordionP2" class="accordions">
                <h3 class="learnTitles">What is JavaScript?</h3>
                <p>
                    JavaScript is a scripting language and so you will need to know what exactly a 'Scripting Language' is to fully understand what this entails.
                    By 'Scripting Language' what we mean is that the code that is carried out by your IDE is read in a separate way to your usual HTML or CSS as this code is executed upon certain function calls and can also be set-up to execute at run-time of the application.
                </p>
                <h3 class="learnTitles">How to code in JavaScript</h3>
                <p>
                    JavaScript uses SCRIPT tags to help the IDE know where the code language is different and so your programming code can be executed at the right time.
                    It is also good to point out that JavaScript SCRIPT tags can be seen in the HEAD section of a HTML page, this is purely for linking any external JS file to your project usually like this:
                </p>
                <h3 class="learnTitles">JavaScript Sources</h3>
                <p>
                    JavaScript is a recognised language world-wide and so most development environments would be compatible with it. There is also
                </p>
            </div>
            <br />
            <!--JS Progress Bar 2-->
            <div id="progressBarJ2" style="position:relative">
                Progress Completed: <b><span id="pbj-label2" style="position:relative"></span></b>
            </div>
            <button id="t4Btn2" style="margin-bottom:1%">Click me to complete</button>
        </div>
    </div>
    <div class="theoryRow">
        <!--Part 3 - JavaScript for people with some JS experience-->
        <div class="col-xs-4" style="border:solid; background-color:lightcoral">
            <h2 style="text-align: center"><b>JavaScript for the Pros</b></h2>
            <div id="accordionP3" class="accordions">
                <h3 class="learnTitles">Recap of JavaScript</h3>
                <p>
                    If you've got this far then congratulations! You now know more about JavaScript then most! JavaScript can be a struggle when it comes to putting the right variable in the right place at the right time but the next tab will be a quick run down as a recap.
                </p>
                <h3 class="learnTitles">Next Level JS</h3>
                <p>
                    JavaScript uses functions to carry out its actions. These functions usually take a single argument but can be expanded to hold more if the function is set-up to parse two or more arguments. JS can also be used to parse Integers or Strings depending on what the function's purpose is.
                </p>
                <h3 class="learnTitles">Server-Side JS</h3>
                <p>
                    JavaScript uses SCRIPT tags to help the IDE know where the code language is different and so your programming code can be executed at the right time.
                    JavaScript code is put inside a Script Tag in HTML at the bottom of the webpage as this is after the webpage itself has loaded and therefore the JS can be executed upon these elements.
                    It is also good to point out that JavaScript SCRIPT tags can be seen in the HEAD section of a HTML page, this is purely for linking any external JS file to your project usually like this:
                </p>
                <h3 class="learnTitles">JavaScript Referencing </h3>
                <p>
                    In this example, it is showing you that firstly you need to specify the script tag, then specify where the file is, and then finally, specify what the file type is.
                </p>
            </div>
            <br>
            <br>
            <!--JS Progress Bar 3-->
            <div id="progressBarJ3" style="position:relative">
                Progress Completed: <strong><span id="pbj-label3" style="position:relative"></span></strong>
            </div>
            <button id="t4Btn3" style="margin-bottom:1%">Click me to complete</button>
        </div>
    </div>
</div>
<h3><u><i>Overall Progress for Theory Modules Part 1</i></u></h3>
<div id="progressBarJOverallP1" style="position:relative">
    Progress Completed: <strong><span id="pbj-labelOverall1" style="position:relative"></span></strong>
</div>



<!--------------------------------------------------------------More Learning Modules-------------------------------------------------------------->
<div class="row" style="height:450px">
    <h1 style="text-align: center"><b><u>Theory Modules Part 2</u></b></h1>
    <!--Part 4 - Introduction to JS variables-->
    <div class="col-xs-4" style="border:solid; background-color:lightgreen">
        <h2 style="text-align: center"><b>JavaScript: Variables</b></h2>
        <div id="accordionP4" class="accordions">
            <h3 class="learnTitles">Types of Variables</h3>
            <p>JavaScript is a script-based programming language which was first developed in 1995 by a man called Brendan Eich, who worked for a company called 'Netscape'. The purpose of this was to add interactive and dynamic elements to websites and webpages! Furthermore, it only took him 10 days to develop the scripting language with its initial title being that of LiveScript.</p>
            <h3 class="learnTitles">Strings and Integers</h3>
            <p>Yes there has been many iteration of Javascript and the '.js' extension over time but the core functionality of JavaScript is still used today in web development through the likes of adding features and more options to HTML websites as well as being flexible at intigrating into other language projects.</p>
            <h3 class="learnTitles">JavaScript Arrays</h3>
            <p>
                JavaScript is a Scripting Language used for many reasons such as making websites dynamic but can also be integrated with other languages to add more functionality
                <b>///</b> The extension for JavaScript is .js
                <b>///</b> The language is easy to pick up but can be difficult to master
                <b>///</b> JavaScript and Java are completely different languages, JS has its code run in browser whilst Java is usualy developeed into an application and then it's code is then executed by this application.
            </p>
        </div>
        <br />
        <!--JS Progress Bar 2-->
        <div id="progressBarJ4" style="position:relative">
            Progress Completed: <strong><span id="pbj-label4" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn4" style="margin-bottom:1%">Click me to complete</button>
    </div>

    <!--Part 5 - Explaining core functions and variables-->
    <div class="col-xs-4" style="border:solid; background-color:lightgoldenrodyellow">
        <h2 style="text-align: center"><b>JavaScript: Integration</b></h2>
        <div id="accordionP5" class="accordions">
            <h3 class="learnTitles">Why use JS over other languages?</h3>
            <p>
                JavaScript is a scripting language and so you will need to know what exactly a 'Scripting Language' is to fully understand what this entails.
                By 'Scripting Language' what we mean is that the code that is carried out by your IDE is read in a separate way to your usual HTML or CSS.
            </p>            
            <h3 class="learnTitles">JavaScript Applications</h3 class="learnTitles">
            <p>JavaScript is a recognised language world-wide and so most development environments would be compatible with it. There is also.................... </p>
            <h3 class="learnTitles">Example use of Script Tags</h3>
            <p>
                In this example, it is showing you that firstly you need to specify the script tag, then specify where the file is, and then finally, specify what the file type is -> <b>< script src="~/Scripts/javascriptFile.js" type="text/javascript"> < /script ></b>
            </p>
        </div>
        <br />
        <!--JS Progress Bar 5-->
        <div id="progressBarJ5" style="position:relative">
            Progress Completed: <strong><span id="pbj-label5" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn5" style="margin-bottom:1%">Click me to complete</button>
    </div>
    <!--Part 6 - Final Learning Module-->
    <div class="col-xs-4" style="border:solid; background-color:lightcoral">
        <h2 style="text-align: center"><b>JavaScript: Extension Libraries</b></h2>
        <div id="accordionP6" class="accordions">
            <h3 class="learnTitles">Final JS Module</h3>
            <p>
                If you've got this far then congratulations! You now know more about JavaScript then most! JavaScript can be a pain when it comes to putting the right variable in the right place at the right time but the next tab will be a quick run down as a recap.
            </p>            
            <h3 class="learnTitles">Server-Side JS</h3>
            <p>
                JavaScript uses <b>SCRIPT</b> tags to help the IDE know where the code language is different and so your programming code can be executed at the right time.
                JavaScript code is put inside a Script Tag in HTML at the bottom of the webpage as this is after the webpage itself has loaded and therefore the JS can be executed upon these elements.
                It is also good to point out that JavaScript <b>SCRIPT</b> tags can be seen in the HEAD section of a HTML page, this is purely for linking any external JS file to your project usually like this:
            </p>
            <h3 class="learnTitles">JavaScript Referencing </h3>
            <p> In this example, it is showing you that firstly you need to specify the script tag, then specify where the file is, and then finally, specify what the file type is -> <b>< script src="~/Scripts/javascriptFile.js" type="text/javascript"> < /script ></b></p>
        </div>
        <br />
        <!--JS Progress Bar 6-->
        <div id="progressBarJ6" style="position:relative">
            Progress Completed: <strong><span id="pbj-label6" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn6" style="margin-bottom:1%">Click me to complete</button>
    </div>
</div>
<h3><u><i>Overall Progress for Theory Modules Part 2</i></u></h3>
<div id="progressBarJOverallP2" style="position:relative">
    Progress Completed: <strong><span id="pbj-labelOverall2" style="position:relative"></span></strong>
</div>










<!-------------------Second Section Demos / Showing theory in a graphical way (This aids imagery / visual learners)------------------------->
<h1 style="text-align: center"><b><u>Demos & Examples</u></b></h1>
<div class="row" style="text-align: center">
    <div id="popImageBox1">
        <div>
            <div id="popImageBoxHeader1"></div>
            <div id="popImageBoxBody1">
                <div id='testImg1'></div>
            </div>
            <div id="popImageBoxFooter1"></div>
        </div>
    </div>
    <!--Demo One-->
    <div class="col-xs-4" style="height:90%">
        <h2><u>Including JavaScript on a Web App</u></h2>
        <div id="accordionP7" class="accordions">
            <h3 class="learnTitles">Step 1:</h3>
            <p>Ensure that you are developing using an IDE or software that supports JavaScript! The most commonly used platforms would be that of Visual Studio, WebStorm, Atom and Brackets. All of which have free versions that include a variety of tools to give you the capabilities you are looking for! </p>
            <h3 class="learnTitles">Step 2:</h3>
            <p>Load up your IDE and create a new project. Most web development applications are developed within either a HTML or PHP base as these languages allow for JavaScript integration. Once done, create a new file and select the JavaScript option from the provided list, you should now you should have a '.js' file.</p>
            <h3 class="learnTitles">Step 3:</h3>
            <p>Now you can create JavaScript functions, classes and more without getting them mixed up within your main file. Have no fear, you can link this JS file to your main application document by using the following:
                <br>
                <img src="assets/img/Screenshots/ScriptTags.png" alt="External Script Tag Image">
            </p>
            <h3 class="learnTitles">Step 4:</h3>
            <p>Using these Script Tags, we are able to include external JavaScript files to our documents. Internal JavaScript is included by simply using the Script tags with no parameters and simply writing your JS code in between the opening and closing tags like so:
                <img src="assets/img/Screenshots/singleScriptTags.png" alt="Internal Script Tag Image">
            </p>
        </div>
        <div style="position: relative">
            Be sure you remember to use BOTH opening and closing script tags as this will throw errors within your application if not done so!
        </div>
    </div>



    <!--Demo Two-->
    <div class="col-xs-4" style="height:100%">
        <h2><u>JavaScript Functions</u></h2>
        <p>JavaScript functions are a block of code designed to be triggered when a specific action is carried out by the user, application, browser or when a certain parameter is met</p>
        <p>Functions can be used to create mathematical equations such as the following button and following function: <button id="funcBtn">Input two numbers to add them together</button></p>

        <div id="funcBox" style="display: none">
            <label for="userInput1">First Value:</label>
            <input type="text" id="userInput1" style="width: 10%"> + <label for="userInput2">Second Value: </label>
            <input type="text" id="userInput2" style="width: 10%"> =
            <b id="funcResult" style="font-size: medium"></b>
                <br>
            <br>

            <button id="btnCalc">Calculate</button> <button id="btnClear">Clear Values</button>
            <br>
            <br>
            <p>A breakdown on how the code</p>
            <div>
                <a class="btn btn-info" onclick="popUpImage.imageRender1()"> Show Code </a>
            </div>
        </div>
    </div>
    <!--Demo Three-->
    <div class="col-xs-4" style="height:100%">
        <h2><u>JavaScript Events</u></h2>
        <p>There are many different events within JavaScript such as mouse clicks and actions that the user can carry out then then trigger such events.</p>
        <p>Here are just a few examples!</p>
        <p><b><u>Event Listeners - Example through button click</u></b></p>
        <button id="btnEvent">Click me!</button>
        <p id="eventText"></p>
        <br>
        <button id="btnEvent2">Move your mouse cursor over this instead!</button>
        <p id="eventText2"></p>
        <a class="btn btn-info" onclick="popUpImage.imageRender2()">Show Code</a>
        <div id="popImageBox2" style="width: 30%">
            <div>
                <div id="popImageBoxHeader2"></div>
                <div id="popImageBoxBody2">
                    <div id="testImg2"></div>
                </div>
                <div id="popImageBoxFooter2"></div>
            </div>
        </div>
        <img id="eventScreenshot" src="assets/img/Screenshots/singleScriptTags.png" alt="Event Listener image" style="display: none; width: 100%; height: 100%" />
        <br>
        <p>All events can be customised to adapt to how the user interacts within the HTML DOM or Browser and so changing the options for these with JavaScript can lead to many different possibilities and outcomes within your programming of web applications. </p>
    </div>
</div>
<div class="row" style="height:255px">
    <div class="col-xs-2" style="height:100%"></div>
        <div class="col-xs-8" style="text-align: center">
            <h2 style="text-align: center"><b>For the Coding Sensei in-training!</b></h2>
            <h3>Are you ready to Test Your Knowledge on what you have learnt?</h3>
            <h3 style="color: goldenrod; text-align:center">Let's get started with some tests!<a class="btn-link" href="jsTestPage.php"><b><i style="color: lightblue">JavaScript Test Page HERE</i></b></a> </h3>
        </div>
    <div class="col-xs-2" style="height:100%"></div>
</div>
<br>
<br>
<!--Row 4 - 1 box Helpful JavaScript guides / Add-Ons-->
<h1 style="text-align: center"><b><u> Useful JavaScript Extras and Libraries</u></b></h1>
<br>
<div class="row" style="text-align: center">
    <div class="col-xs-2">

    </div>
    <div class="col-xs-8">
        <span style="text-align:center">
            <a href="https://jquery.com/"><img class="topicAddons" alt="jQuery Logo" title="jQuery Logo" src="assets/img/jquery.jpg" style="cursor: pointer"></a>
            <br>
            <br>
            <a href="https://jqueryui.com/"><img class="topicAddons" alt="jQuery-ui Logo" title="jQuery-UI Logo" src="assets/img/jqueryui.jpg" style="cursor: pointer"></a>
        </span>
        <h2 style="text-align:center"></h2>
    </div>
    <div class="col-xs-2"></div>
</div>


<!--Scripts for the page-->
<!--Custom Accordion Script-->
<script src="assets/js/CustomScripts/accordionScripts.js"></script>
<!--Custom Pop-up Script-->
<script>
    let image1 = 'assets/img/Screenshots/calculationCode_Commented.png';
    let image2 = 'assets/img/Screenshots/eventListener_Commented.png';
    function customPopImage()
    {
        this.imageRender1 = function ()
        {
            let popImageBox1 = document.getElementById('popImageBox1');

            let winH = window.innerHeight;
            let popImageOverlay = document.getElementById('popImageOverlay');
            popImageOverlay.style.display = "block";
            popImageOverlay.style.height = winH + "px";

            popImageBox1.style.top = (winH / 2 )- 555 + "px";
            popImageBox1.style.display = "block";
            document.getElementById('popImageBoxHeader1').innerHTML = "How the function works!";
            document.getElementById('testImg1').src = image1;
            document.getElementById('popImageBoxFooter1').innerHTML = '<button onclick="popUpImage.ok()">OK</button>';
        }
        this.imageRender2 = function ()
        {
            let popImageBox2 = document.getElementById('popImageBox2');

            let winH = window.innerHeight;
            let popImageOverlay = document.getElementById('popImageOverlay');
            popImageOverlay.style.display = "block";
            popImageOverlay.style.height = winH + "px";

            popImageBox2.style.top = (winH / 2 ) + "px";
            popImageBox2.style.display = "block";
            document.getElementById('popImageBoxHeader2').innerHTML = "How the code works!";
            document.getElementById('testImg2').src = image2;
            document.getElementById('popImageBoxFooter2').innerHTML = '<button onclick="popUpImage.ok()">OK</button>';
        }
        this.ok = function()
        {
            document.getElementById('popImageOverlay').style.display = "none";
            document.getElementById('popImageBox1').style.display = "none";
            document.getElementById('popImageBox2').style.display = "none";
        }
    }
    let popUpImage = new customPopImage();

    $(document).ready(function ()
    {
        ////////////////////// Theory Modules Part 1 ////////////////////
        // 1 //
        // Initialise Button //
        $('#progressBarJ1').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-label1').text($('#progressBarJ1').progressbar("value"));
                },
                complete: function () {
                    $('#t4Btn1').button("disable"),
                        $('#t4Btn1').text("Completed")
                },
                change: function ()
                {
                    $('#pbj-label1').text($('#progressBarJ1').progressbar("value"));
                }
            });
        //Button click //
        $('#t4Btn1').click(function ()
        {
            this.style.background = "lightgreen";

            $('#progressBarJ1').progressbar({ value: 100 });


            switch($('#progressBarJOverallP1').progressbar("value"))
            {
                case 0:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 33 })
                    break;
                }
                case 33:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 66 })
                    break;
                }
                case 66:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 100 })
                    break;
                }
            }

        });
        // 2 //
        // Initialise Button //
        $('#progressBarJ2').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-label2').text($('#progressBarJ2').progressbar("value"));
                },
                complete: function ()
                {
                    $('#t4Btn2').button("disable"),
                        $('#t4Btn2').text("Completed")
                },
                change: function ()
                {
                    $('#pbj-label2').text($('#progressBarJ2').progressbar("value"));
                }
            });
        //Button click //
        $('#t4Btn2').click(function () {
            $('#progressBarJ2').progressbar({ value: 100 });

            switch($('#progressBarJOverallP1').progressbar("value"))
            {
                case 0:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 33 })
                    break;
                }
                case 33:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 66 })
                    break;
                }
                case 66:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 100 })
                    break;
                }
            }
        });

        // 3 //
        // Initialise Button //
        $('#progressBarJ3').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-label3').text($('#progressBarJ3').progressbar("value"));
                },
                complete: function ()
                {
                    $('#t4Btn3').button("disable"),
                        $('#t4Btn3').text("Completed")
                },
                change: function ()
                {
                    $('#pbj-label3').text($('#progressBarJ3').progressbar("value"));
                }
            });
        //Button click //
        $('#t4Btn3').click(function () {
            $('#progressBarJ3').progressbar({ value: 100 });

            switch($('#progressBarJOverallP1').progressbar("value"))
            {
                case 0:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 33 })
                    break;
                }
                case 33:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 66 })
                    break;
                }
                case 66:
                {
                    $('#progressBarJOverallP1').progressbar({ value: 100 })
                    break;
                }
            }
        });



        //////////////////////////////////////////////////////////////////////////////
        ///////////////////////////OVERALL PART 1/////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
        $('#progressBarJOverallP1').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-labelOverall1').text($('#progressBarJOverallP1').progressbar("value"));
                },
                complete: function ()
                {
                    $('#pbj-labelOverall1').text("Introduction 1 Complete!"),
                        alert('Learning Modules 1 Completed')
                },
                change: function ()
                {
                    $('#pbj-labelOverall1').text($('#progressBarJOverallP1').progressbar("value"));
                }
            });




        ///////////////////// Theory Modules Part 2 ////////////////////
        // 4 //
        // Initialise Button //

        $('#progressBarJ4').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-label4').text($('#progressBarJ4').progressbar("value"));
                },
                complete: function ()
                {
                    $('#t4Btn4').button("disable"),
                        $('#t4Btn4').text("Completed")
                }, change: function ()
                {
                    $('#pbj-label4').text($('#progressBarJ4').progressbar("value"));
                }
            });
        //Button click
        $('#t4Btn4').click(function () {
            $('#progressBarJ4').progressbar({ value: 100 });

            switch($('#progressBarJOverallP2').progressbar("value"))
            {
                case 0:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 33 })
                    break;
                }
                case 33:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 66 })
                    break;
                }
                case 66:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 100 })
                    break;
                }
            }
        });


        // 5 //
        // Initialise Button //
        $('#progressBarJ5').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-label5').text($('#progressBarJ5').progressbar("value"));
                },
                complete: function ()
                {
                    $('#t4Btn5').button("disable"),
                        $('#t4Btn5').text("Completed")
                }, change: function ()
                {
                    $('#pbj-label5').text($('#progressBarJ5').progressbar("value"));
                }
            });
        //Button click
        $('#t4Btn5').click(function () {
            $('#progressBarJ5').progressbar({ value: 100 });


            switch($('#progressBarJOverallP2').progressbar("value"))
            {
                case 0:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 33 })
                    break;
                }
                case 33:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 66 })
                    break;
                }
                case 66:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 100 })
                    break;
                }
            }
        })

        // 6 //
        // Initialise Button //
        $('#progressBarJ6').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-label6').text($('#progressBarJ6').progressbar("value"));
                },
                complete: function ()
                {
                    $('#t4Btn6').button("disable"),
                        $('#t4Btn6').text("Completed")
                }, change: function ()
                {
                    $('#pbj-label6').text($('#progressBarJ6').progressbar("value"));
                }
            });
        //Button click
        $('#t4Btn6').click(function () {
            $('#progressBarJ6').progressbar({ value: 100 });

            switch($('#progressBarJOverallP2').progressbar("value"))
            {
                case 0:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 33 })
                    break;
                }
                case 33:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 66 })
                    break;
                }
                case 66:
                {
                    $('#progressBarJOverallP2').progressbar({ value: 100 })
                    break;
                }
            }
        })

        //////////////////////////////////////////////////////////////////////////////
        ///////////////////////////OVERALL PART 2/////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
        $('#progressBarJOverallP2').progressbar(
            {
                value: 0,
                create: function ()
                {
                    $('#pbj-labelOverall2').text($('#progressBarJOverallP2').progressbar("value"));
                },
                complete: function ()
                {
                    $('#pbj-labelOverall2').text("Introduction 2 Complete!"),
                        alert('Learning Modules 2 Completed')
                },
                change: function ()
                {
                    $('#pbj-labelOverall2').text($('#progressBarJOverallP2').progressbar("value"));
                }
            });





        // Code for Theory explanation //
        //This line of code obtains a button named 'btnEvent' with which we've attached
        // an EventListener allowing for multiple types of interaction by the user.
        // In this example we are using the parameters of a mouse 'click' to run the function 'displayText().
        document.getElementById("btnEvent").addEventListener("click", displayText);
        //This is the function which showed you the text after the 'click' event!
        function displayText() {
            //This obtains the element which holds said text, the '.innerHTML' suffix
            // points the JS function towards the string within the HTML DOM.
            document.getElementById("eventText").innerHTML =
                //Plain text can be indicated using double or single quote marks
                "You just activated an event!! By clicking that button, you have " +
                'triggered some JavaScript code to run and display this message to you!';
        }
        // In this example we are activating the event through a 'mouseover' action which
        // means the event triggers when the cursor is placed over the element rather then clicking it.
        document.getElementById("btnEvent2").addEventListener("mouseover", displayMoreText);

        // document.getElementById("btnEvent2").addEventListener("click", displayImage);
        function displayMoreText()
        {
            document.getElementById("eventText2").innerHTML = "<i>You've just activated another event, Click the same button to show an image and see how can create your own Event Listener</i>";
            document.getElementById("btnEvent2").innerHTML = "Now click me again!"
        }

        function displayImage()
        {
            let img = document.getElementById("eventScreenshot");
            img.style.display = "block";
        }

        document.getElementById("btnClear").addEventListener("click", clearCalc);
        function clearCalc()
        {
            document.getElementById("userInput1").value = null;
            document.getElementById("userInput2").value = null;
            document.getElementById("funcResult").innerHTML = "";
        }

        document.getElementById("funcBtn").addEventListener("click", openCalc);
        function openCalc()
        {
            document.getElementById("funcBox").style.display = "block";
        }

        //This line gets the button we are using to calculate the maths and adds an EventListener which takes
        // the parameters of (Interaction on the button , Function in response to this action)
        document.getElementById("btnCalc").addEventListener("click", funcCalc);
        //Creating the function to be activated by the button
        function funcCalc(){
            //Declaring JS variables which are linked to their HTML counterparts
            //These are then extended to obtain the value within these variables via the '.value' suffix.
            let input1 = document.getElementById("userInput1").value;
            let input2 = document.getElementById("userInput2").value;
            // The 'result' variable takes the two statements above and uses the 'parseFloat()' function
            // to then convert them into a floating point number (2 decimal places - 64 bits for each)
            let result = parseFloat(input1) + parseFloat(input2);
            // These IF statements are to check if the 'result' is NotANumber(NaN)
            // If the 'result' is a number then the first IF statement is executed
            if(!isNaN(result)) {
                //Get the element that matches the Id specified, access it's contents via '.innerHTML'
                //Output 'result' and some text indicated by the quote marks
                document.getElementById("funcResult").innerHTML = result + " is the answer";
            }
            // If the 'result' is NotANumber then the second IF statement is executed
            if(isNaN(result)) {
                //Output 'result' is not shown here as the 'result' was NaN
                //The <i> </i> tags output the text in italics
                document.getElementById("funcResult").innerHTML = "<i>Please enter only numbers to test this function</i>";
            }
        }
    });
</script>


</body>
</html>



