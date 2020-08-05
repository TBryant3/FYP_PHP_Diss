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
    <style>
        .learnTitles {
            width: 60%;
            display: inline-block;
            padding: 100px 0 0 0;
            margin: 0 0 0 0;
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


<!--Title of web page-->
<h1 style="text-align:center">JavaScript<img class="topicLogos" alt="JavaScript_Logo"  src="assets/img/js-logo.png" /></h1>
<!--Quick description of the topic-->
<h4 class="topicDesc">JavaScript is a Scripting Language that is used alongside web development tools to produce dynamic and responsive webpages</h4>
<h4 class="topicDesc">There are many extensive libraries which can be used in conjuction with core JavaScript to help reduce code lines as well as add in extra features that core JS would take too long to code as well as taking up more memory of the system. </h4>
<h4 class="topicDesc">Finally, JS is a fun language to work with as it is multi-paradigm support and can be tested easily with the use of Mocha and Chia (explained later)</h4>

<!---------------------Section 1--------------------->
<h1 style="text-align: center"><b><u>Learning Modules</u></b></h1>
<!--First Row-->
<div class="row" style="height:300px">
    <!--Part 1 - Introduction to JS-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightgreen">
        <h2 style="text-align: center">Introduction to JavaScript</h2>
        <!--First Accordion Widget-->
        <div id="accordionP1" style="padding-left: 25%">
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
            <h3 class="learnTitles">Summary of JavaScript</h3>
            <p>
                JavaScript is a Scripting Language used for many reasons such as making websites dynamic but can also be integrated with other languages to add more functionality
                <b>///</b> The extension for JavaScript is .js
                <b>///</b> The language is easy to pick up but can be difficult to master
                <b>///</b> Be aware that JavaScript and Java are completely different languages, JS has its code run in browser whilst Java is usualy developeed into an application and then it's code is then executed by this application.
            </p>
        </div>
        <br />
        <div id="progressBarJ1" style="position:relative">
            
            Progress Completed: <strong><span id="pbj-label1" style="position:relative"></span></strong>
        
        </div>
        <button id="t4Btn1" style="margin-bottom:1%">Click me to complete</button>
    </div>

    <!--Part 2 - Explaining Script Tags-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightgoldenrodyellow">
        <h2 style="text-align: center">JavaScript Expanded</h2>
        <div id="accordionP2" style="padding-left: 25%">
            <h3 class="learnTitles">What is JavaScript?</h3>
            <p>
                JavaScript is a scripting language and so you will need to know what exactly a 'Scripting Language' is to fully understand what this entails.
                By 'Scripting Language' what we mean is that the code that is carried out by your IDE is read in a seperate way to your usual HTML or CSS as this code is executed upon certain function calls and can also be set-up to execute at run-time of the application.
            </p>
            <h3 class="learnTitles">How to code in JavaScript</h3>
            <p>
                JavaScript uses SCRIPT tags to help the IDE know where the code language is different and so your programming code can be executed at the right time.
                It is also good to point out that JavaScript SCRIPT tags can be seen in the HEAD section of a HTML page, this is purely for linking any external JS file to your project usually like this:
            </p>
            <h3 class="learnTitles">JavaScript Sources</h3>
            <p>
                JavaScript is a recognised language world-wide and so most developement environments would be compatible with it. There is also 
            </p>
            <h3 class="learnTitles">Example use of Script Tags</h3>
            <p>
                In this example, it is showing you that firstly you need to specify the script tag, then specify where the file is, and then finally, specify what the file type is -> <b>< script src="~/Scripts/javascriptFile.js" type="text/javascript"> < /script ></b>
            </p>
        </div>
        <br />
        <div id="progressBarJ2" style="position:relative">
            
            Progress Completed: <strong><span id="pbj-label2" style="position:relative"></span></strong>
        
        </div>
        <button id="t4Btn2" style="margin-bottom:1%">Click me to complete</button>
    </div>
    <!--Part 3 - JavaScript for people with some JS experience-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightcoral">
        <h2 style="text-align: center">JavaScript for the Pros</h2>
        <div id="accordionP3" style="padding-left: 25%">
            <h3 class="learnTitles">Recap of JavaScript</h3>
            <p>
                If you've got this far then congratulations! You now know more about JavaScript then most! JavaScript can be a pain when it comes to putting the right variable in the right place at the right time but the next tab will be a quick run down as a recap.
            </p>
            <h3 class="learnTitles">Next Level JS</h3>
            <p>
                JavaScript uses functions to carry out its actions. These functions usually take a single argument but can be expanded to hold more if the function is set-up to parse two or more arguements. JS can also be used to parse Integers or Strings depending on what the function's purpose is.
            </p>
            <h3 class="learnTitles">Server-Side JS</h3>
            <p>
                JavaScript uses SCRIPT tags to help the IDE know where the code language is different and so your programming code can be executed at the right time.
                JavaScript code is put inside a Script Tag in HTML at the bottom of the webpage as this is after the webpage itself has loaded and therfore the JS can be executed upon these elements.
                It is also good to point out that JavaScript SCRIPT tags can be seen in the HEAD section of a HTML page, this is purely for linking any external JS file to your project usually like this:
            </p>
            <h3 class="learnTitles">JavaScript Referencing </h3>
            <p>
                In this example, it is showing you that firstly you need to specify the script tag, then specify where the file is, and then finally, specify what the file type is -> <b>< script src="~/Scripts/javascriptFile.js" type="text/javascript"> < /script ></b>
            </p>
        </div>
        <br />
        <div id="progressBarJ3" style="position:relative">
            
            Progress Completed: <strong><span id="pbj-label3" style="position:relative"></span></strong>
        
        </div>
        <button id="t4Btn3" style="margin-bottom:1%">Click me to complete</button>
    </div>
</div>
<!--------------------------------------------------------------More Learning Modules-------------------------------------------------------------->
<div class="row" style="height:300px">
    <!--Part 4 - Introduction to JS variables-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightgreen">
        <h2 style="text-align: center">JavaScript: Variables</h2>
        <div id="accordionP4" style="padding-left: 15%">
            <h3 class="learnTitles">Types of Variables</h3>
            <p>JavaScript is a script-based programming language which was first developed in 1995 by a man called Brendan Eich, who worked for a company called 'Netscape'. The purpose of this was to add interactive and dynamic elements to websites and webpages! Furthermore, it only took him 10 days to develop the scripting language with its initial title being that of LiveScript.</p>
            <h3 class="learnTitles">Strings and Integers</h3>
            <p>Yes there has been many iteration of Javascript and the '.js' extension over time but the core functionality of JavaScript is still used today in web development through the likes of adding features and more options to HTML websites as well as being flexible at intigrating into other language projects.</p>
            <h3 class="learnTitles">JavaScript Arrays</h3>
            <p>
                JavaScript is a Scripting Language used for many reasons such as making websites dynamic but can also be integrated with other languages to add more functionality
                <b>///</b> The extension for JavaScript is .js
                <b>///</b> The language is easy to pick up but can be difficult to master
                <b>///</b> JavaScript and Java are completely dfferent languages, JS has its code run in browser whilst Java is usualy developeed into an application and then it's code is then executed by this application.
            </p>
        </div>
        <br />
        <div id="progressBarJ4" style="position:relative">
            
            Progress Completed: <strong><span id="pbj-label4" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn4" style="margin-bottom:1%">Click me to complete</button>
    </div>

    <!--Part 5 - Explaining core functions and variables-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightgoldenrodyellow">
        <h2 style="text-align: center">JavaScript: Integration</h2>
        <div id="accordionP5" style="padding-left: 15%">
            <h3 class="learnTitles">Why use JS over other languages?</h3>
            <p>
                JavaScript is a scripting language and so you will need to know what exactly a 'Scripting Language' is to fully understand what this entails.
                By 'Scripting Language' what we mean is that the code that is carried out by your IDE is read in a seperate way to your usual HTML or CSS.
            </p>            
            <h3 class="learnTitles">JavaScript Applications</h3>
            <p>JavaScript is a recognised language world-wide and so most developement environments would be compatible with it. There is also.................... </p>
            <h3 class="learnTitles">Example use of Script Tags</h3>
            <p>
                In this example, it is showing you that firstly you need to specify the script tag, then specify where the file is, and then finally, specify what the file type is -> <b>< script src="~/Scripts/javascriptFile.js" type="text/javascript"> < /script ></b>
            </p>
        </div>
        <br />
        <div id="progressBarJ5" style="position:relative">
            
            Progress Completed: <strong><span id="pbj-label5" style="position:relative"></span></strong>
        
        </div>
        <button id="t4Btn5" style="margin-bottom:1%">Click me to complete</button>
    </div>
    <!--Part 6 - Final Learning Module-->
    <div class="col-md-4" style="border:solid; height:100%; background-color:lightcoral">
        <h2 style="text-align: center">JavaScript: Extension Libraries</h2>
        <div id="accordionP6" style="padding-left: 15%">
            <h3 class="learnTitles">Final JS Module</h3>
            <p>
                If you've got this far then congratulations! You now know more about JavaScript then most! JavaScript can be a pain when it comes to putting the right variable in the right place at the right time but the next tab will be a quick run down as a recap.
            </p>            
            <h3 class="learnTitles">Server-Side JS</h3>
            <p>
                JavaScript uses SCRIPT tags to help the IDE know where the code language is different and so your programming code can be executed at the right time.
                JavaScript code is put inside a Script Tag in HTML at the bottom of the webpage as this is after the webpage itself has loaded and therfore the JS can be executed upon these elements.
                It is also good to point out that JavaScript SCRIPT tags can be seen in the HEAD section of a HTML page, this is purely for linking any external JS file to your project usually like this:
            </p>
            <h3 class="learnTitles">JavaScript Referencing </h3>
            <p> In this example, it is showing you that firstly you need to specify the script tag, then specify where the file is, and then finally, specify what the file type is -> <b>< script src="~/Scripts/javascriptFile.js" type="text/javascript"> < /script ></b></p>
        </div>
        <br />
        <div id="progressBarJ6" style="position:relative">
            
            Progress Completed: <strong><span id="pbj-label6" style="position:relative"></span></strong>
        
        </div>
        <button id="t4Btn6" style="margin-bottom:1%">Click me to complete</button>
    </div>
</div>

<br />

<!--@*Section Two - Demos*@-->
<h1 style="text-align: center"><b><u>Demos & Examples</u></b></h1>
<div class="row" style="height:255px; border:dashed">
    <div class="col-md-4" style="border:solid; height:100%">
        <h2>A</h2>
        <p>TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p>
    </div>
    <div class="col-md-4" style="border:solid; height:100%">
        <h2>Find out more about us</h2>
        <p>We at CoJō want to give you the best possible experience and so you'll want to understand what a coding language is! Click here to find out more</p>
    </div>
    <div class="col-md-4" style="border:solid; height:100%">
        <h2>For the Coding Veterans</h2>
        <p>Here are some practice questions and test your knowledge quizzes to see where you're at</p>
    </div>
</div>

</body>
</html>


<script>
    //Function for collapsing the Accordion information //
    function collapse()
    {
        // Set 1 //
        $("#accordionP1").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,

            });
        $("#accordionP2").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150
            });
        $("#accordionP3").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150
            });
        // Set 2 //
        $("#accordionP4").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150
            });
        $("#accordionP5").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150
            });
        $("#accordionP6").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150
            });
    }
    collapse();

    // Progress Bars Scripts //

    $(document).ready(function ($)    
    {
        // 1 //
        // Initialise Button //
        // $('#t4Btn1').button();
        $('#progressBarJ1').progressbar(
            {
                value: 0,
                create: function (e)
                {
                    $('#pbj-label1').text($('#progressBarJ1').progressbar("value"));
                },
                complete: function (e) {
                    $('#t4Btn1').button("disable"),
                        $('#t4Btn1').text("Completed")
                },
                change: function (e)
                {
                    if ($(this).progressbar("value") < 100)
                    {
                        $('#t4Btn1').button("enable")
                    }
                    $('#pbj-label1').text($('#progressBarJ1').progressbar("value"));
                }
            });
            //Button click //
        $('#t4Btn1').click(function (e) {
            $('#progressBarJ1').progressbar({ value: 100 });
        });               
        // 2 // 
        // Initialise Button //
        $('#t4Btn2').button();
        $('#progressBarJ2').progressbar(
            {
                value: 0,
                create: function (e) {
                    $('#pbj-label2').text($('#progressBarJ2').progressbar("value"));
                },
                complete: function (e) {
                    $('#t4Btn2').button("disable"),
                        $('#t4Btn2').text("Completed")
                }, change: function (e) {
                    if ($(this).progressbar("value") < 100) {
                        $('#t4Btn2').button("enable")
                    }
                    $('#pbj-label2').text($('#progressBarJ2').progressbar("value"));
                }
            });
            //Button click //
        $('#t4Btn2').click(function (e) {
            $('#progressBarJ2').progressbar({ value: 100 });
        });

        // 3 //
        // Initialise Button //
        $('#t4Btn3').button();
        $('#progressBarJ3').progressbar(
            {
                value: 0,
                create: function (e) {
                    $('#pbj-label3').text($('#progressBarJ3').progressbar("value"));
                },
                complete: function (e) {
                    $('#t4Btn3').button("disable"),
                        $('#t4Btn3').text("Completed")
                }, change: function (e) {
                    if ($(this).progressbar("value") < 100) {
                        $('#t4Btn3').button("enable")
                    }
                    $('#pbj-label3').text($('#progressBarJ3').progressbar("value"));
                }
            });
            //Button click //
        $('#t4Btn3').click(function (e) {
            $('#progressBarJ3').progressbar({ value: 100 });
        });
                
        // 4 //
        // Initialise Button //
        $('#t4Btn4').button();
        $('#progressBarJ4').progressbar(
            {
                value: 0,
                create: function (e)
                {
                    $('#pbj-label4').text($('#progressBarJ4').progressbar("value"));
                },
                complete: function (e) {
                    $('#t4Btn4').button("disable"),
                        $('#t4Btn4').text("Completed")
                }, change: function (e) {
                    if ($(this).progressbar("value") < 100) {
                        $('#t4Btn4').button("enable")
                    }
                    $('#pbj-label4').text($('#progressBarJ4').progressbar("value"));
                }
            });
            //Button click
        $('#t4Btn4').click(function (e) {
            $('#progressBarJ4').progressbar({ value: 100 });
        });
               
            
        // 5 //
        // Initialise Button //
        $('#t4Btn5').button();
        $('#progressBarJ5').progressbar(
            {
                value: 0,
                create: function (e) {
                    $('#pbj-label5').text($('#progressBarJ5').progressbar("value"));
                },
                complete: function (e) {
                    $('#t4Btn5').button("disable"),
                        $('#t4Btn5').text("Completed")
                }, change: function (e) {
                    if ($(this).progressbar("value") < 100) {
                        $('#t4Btn5').button("enable")
                    }
                    $('#pbj-label5').text($('#progressBarJ5').progressbar("value"));
                }
            });
            //Button click
            $('#t4Btn5').click(function (e) {
                $('#progressBarJ5').progressbar({ value: 100 });
            })
                
            // 6 //  
            // Initialise Button //
        $('#t4Btn6').button();
        $('#progressBarJ6').progressbar(
            {
                value: 0,
                create: function (e) {
                    $('#pbj-label6').text($('#progressBarJ6').progressbar("value"));
                },
                complete: function (e) {
                    $('#t4Btn6').button("disable"),
                        $('#t4Btn6').text("Completed")
                }, change: function (e) {
                    if ($(this).progressbar("value") < 100) {
                        $('#t4Btn6').button("enable")
                    }
                    $('#pbj-label6').text($('#progressBarJ6').progressbar("value"));
                }
            });
            //Button click
            $('#t4Btn6').click(function (e) {
                $('#progressBarJ6').progressbar({ value: 100 });
            })
    });                    
</script>
