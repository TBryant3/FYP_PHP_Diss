<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Page</title>

    <!--Browser version support-->
    <script src="../assets/js/modernizr-2.8.3.js"></script>
    <!--jQuery Link-->
    <script src="../assets/js/jquery-3.4.1.js"></script>
    <!--jQuery-UI Link-->
    <script src="../assets/js/jquery-ui-1.12.1.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/js/bootstrap.js"></script>
    <!--Personal Icons-->
    <link href="../assets/css/all.min.css" rel="stylesheet" />
    <link href="../assets/css/fontawesome.min.css" rel="stylesheet" />
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
<!-- Creates Pop up overlay to prevent background inputs when pop-ups are shown-->
<div id="popImageOverlay"></div>

<!--Introduction information about the Topic-->
<div class="row">
    <h1 style="text-align:center; color: goldenrod;font-family: monospace">
        <u><b> JavaScript</b></u>
        <img class="topicLogos" alt="JavaScript_Logo"  src="../assets/img/js-logo.png" />
        <br>
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
        Finally, JavaScript is a flexible language to work with as it incorporates multi-paradigm support and can be developmentally tested (code dependent) with the use of the Mocha and Chia testing frameworks.
    </p>
</div>


<!--First Section Teaching Element and Theory-->
<div class="row" style="height:475px">
    <h1 style="text-align: center; color: goldenrod"><b><u>Theory Modules Part 1</u></b></h1>
    <!--Part 1 - Introduction to JS-->
    <div class="col-md-4" style="border:solid; background-color:lightgreen; height:100%">
        <h2 style="text-align: center"><b>Chronology to JavaScript</b></h2>
        <!--First Accordion Widget-->
        <div id="accordionP1" class="accordions">
            <h3 class="learnTitles">History of JavaScript</h3>
            <p>
                JavaScript was first developed in 1995 by a man called Brendan Eich, who worked for a company called 'Netscape'.
                The purpose of this was to add interactive and dynamic elements to websites and webpages! Furthermore, it only took him 10 days to develop the scripting language with its initial title being that of <b>LiveScript</b>.
            </p>
            <h3 class="learnTitles">Present Day JavaScript</h3>
            <p>
                Yes there has been many iteration of Javascript and the '.js' extension over time but the core functionality of JavaScript is still used today in web development through the likes of adding features and more options to HTML websites as well as being flexible at integrating into other language projects.
            </p>
            <h3 class="learnTitles">The Future of JavaScript</h3>
            <p>
                JavaScript is currently on update 1.8.5 which doesn't seem that updated but JavaScript is helping developers create applications rapidly and to a very high-level of complexity therefore making JavaScript a programming language that will most likely continue on this path due to how efficient and flexible the language is and will more then likely achieve 2.0 status in the near future.
            </p>
        </div>
        <br>
        <br>
        <br>
        <!--JS Progress Bar 1-->
        <div id="progressBarJ1" style="width: 100%; background-color: lightgrey">
            Progress Completed: <strong><span id="pbj-label1" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn1" style="margin-bottom:1%">Click me to complete</button>
        <br>
    </div>

    <!--Part 2 - Explaining Script Tags-->
    <div class="col-md-4" style="border:solid; background-color:lightgoldenrodyellow; height:100%">
        <h2 style="text-align: center"><b>Introduction to JavaScript</b></h2>
        <div id="accordionP2" class="accordions">
            <h3 class="learnTitles">What is JavaScript?</h3>
            <p>
                JavaScript is a scripting language and so you will need to know what exactly a '<b>Scripting Language</b>' is to fully understand what this entails.
                By 'Scripting Language' what we mean is that the code that is executed by your IDE, is read in a separate way to your usual HTML or CSS as this code is executed upon certain function calls and can also be set-up to execute at run-time of the application.
            </p>
            <h3 class="learnTitles">How to code in JavaScript</h3>
            <p>
                JavaScript uses SCRIPT tags to help the IDE know where the code language is different and so your programming code can be executed at the right time.
                It is also good to point out that JavaScript SCRIPT tags can be seen in the HEAD section of a HTML page, this is purely for linking any external JS file to your project usually like this:
            </p>
            <h3 class="learnTitles">JavaScript Sources</h3>
            <p>
                JavaScript is a recognised language world-wide and so most development environments would be compatible with it. The JS language is not available for download due to the fact that it is already integrated into most development programs and software's. There are however, multiple extension libraries of JS that can be downloaded and then linked through its physical path url or even connected to your application via a CDN (Content Delivery Network) which means the file(s) are hosted on another device other then your own.
            </p>
        </div>
        <br>
        <br>
        <br>
        <!--JS Progress Bar 2-->
        <div id="progressBarJ2" style="position:relative; background-color: lightgrey">
            Progress Completed: <b><span id="pbj-label2" style="position:relative"></span></b>
        </div>
        <button id="t4Btn2" style="margin-bottom:1%">Click me to complete</button>
    </div>
    <!--Part 3 - JavaScript for people with some JS experience-->
    <div class="col-md-4" style="border:solid; background-color:lightcoral; height:100%">
        <h2 style="text-align: center"><b>JavaScript: Integration</b></h2>
        <div id="accordionP3" class="accordions">
            <h3 class="learnTitles">Use JS over other languages?</h3>
            <p>
                JavaScript is used alongside HTML and CSS to produce responsive and dynamic web content. There are a few alternatives but most of them have been developed using JS as their core concept and so using the original ensures compatibility with most modern browsers. Alternatives such as <b>Dart</b> (Developed by Google) and <b>TypeScript</b> (Developed by Microsoft) were developed to be an enhancement of JavaScript by being either a lighter option over JavaScript or to be used for specific reasons such as unique applications and/or specialist software's.
                <br>
                Ultimately, using JavaScript means to ensure a stable and more commonly supported programming language over one that is more situational and task/operation specific
            </p>
            <h3 class="learnTitles">JavaScript Applications</h3 class="learnTitles">
            <p>
                JavaScript cannot be used to create content on its own, it would still require some form of other platform to output the information it generates such as a database table or HTML document. Other then this, JavaScript can do a lot of operations and can run multiple lines of code without needing to be capped out due to its flexibility and support across different platforms. Furthermore, JavaScript is integrated into most modern software and so to try and NOT use JavaScript would be a difficult task or would mean a longer method would need ot be used to achieve the same goal.
            </p>
            <h3 class="learnTitles">Example use of Script Tags</h3>
            <p>
                In this example, it is showing you that firstly you need to create the script tag, then point to where the file is using its full file path, and then finally, specify what the file type is: <br><b> < script src="~/Scripts/javascriptFile.js" type="text/javascript">< /script> </b>
            </p>
        </div>
        <br>
        <br>
        <!--JS Progress Bar 3-->
        <div id="progressBarJ3" style="position:relative; background-color: lightgrey">
            Progress Completed: <strong><span id="pbj-label3" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn3" style="margin-bottom:1%">Click me to complete</button>
    </div>
</div>
<br>

<div style="margin-top: 3%; margin-bottom: 1%">
    <h2><u><i>Overall Progress for Theory Modules Part 1</i></u></h2>
    <div id="progressBarJOverallP1" style="position:relative; background-color: lightgrey">
        Progress Completed: <strong><span id="pbj-labelOverall1" style="position:relative"></span></strong>
    </div>
</div>


<!--------------------------------------------------------------More Learning Modules-------------------------------------------------------------->
<div class="row" style="height:510px">
    <h1 style="text-align: center; color: goldenrod"><b><u>Theory Modules Part 2</u></b></h1>
    <!--Part 4 - Introduction to JS variables-->
    <div class="col-md-4" style="border:solid; background-color:lightgreen; height:100%">
        <h2 style="text-align: center"><b>JavaScript: Variables</b></h2>
        <div id="accordionP4" class="accordions">
            <h3 class="learnTitles">Types of Variables</h3>
            <p>
                Variables are not exclusive to that of JavaScript but they do operate in a way that can be unusual to some other languages. The standard variable is declared as a <b>var</b> which literally means variable and by using a <b>var</b>, the user is able to store many different data values.
                These variables must be named with a unique identifier as to make their values callable to the rest of the application and included functions or procedures.
                <br>
                All identifiers generally begin with a letter and can include an assortment of <b><i>letters, underscores, numbers and the dollar sign</i></b> proceeding this. Variables can begin with a dollar sign or underscore but this is <b>NOT</b> recommended as some coding conventions state that these are used to prefix instance variables.
            </p>

            <h3 class="learnTitles">Data Types: Strings and Integers</h3>
            <p>
                <b>String:</b> These are a data type which allow the user to input text as opposed to numbers but the data type does allow for numbers to be used, just they are not seen as numbers but as their text counterparts. Strings are written by passing the data value in between quote marks.
                <br>
                <b>Integer:</b> These data types are used to hold <b>whole numbers only</b> and can be positive, negative and can hold the value of zero. The most common use for an integer is when using a "for loop" or "while loop" as this defines an action is executed after x amount of time or over x amount of iterations.
            </p>
            <h3 class="learnTitles">Data Types: Float and Boolean</h3>
            <p>
                <b>Float:</b> This data type is similar to integer but allows for decimal values such 5.5 but can be used to hold a whole number, but this is <b>NOT RECOMMENDED</b> as it will use more system memory for that value then needed.
                <br>
                <b>Boolean:</b> This data type is used to return either a value of true or false and so are useful for defining within an IF statement or to check when an element is to be shown or not within a div. Boolean values can also been seen as <b>bool</b> in some programming languages. The boolean operator follow the logic of conditional statements such as <b>AND, OR, NOT, NOR, NAND and XOR</b>.
            </p>
            <h3 class="learnTitles">JavaScript Arrays</h3>
            <p>
                These are the same as typically arrays in other programming languages in the sense that they are a single variable that can then store multiple values such as a list of names.
                <br>
                An example of this would be: <b>var names = ["Bob", "James", "Alice"]</b>
                <br>
                Arrays can be used to loop through its values and pull out the data as required without needing to store them as individual variables <b>BUT</b> it is recommended to only store relevant data therefore storing the data about names and the data about age within the same array wouldn't be wise.
                Arrays <b>ALWAYS</b> begin from index value 0 and not 1 and so when calling the first value in an array, you would want to call it like this <b>var students = name[0];</b> which would output <b>Bob</b> given our example.
            </p>
        </div>
        <br />
        <!--JS Progress Bar 2-->
        <div id="progressBarJ4" style="position:relative; background-color: lightgrey">
            Progress Completed: <strong><span id="pbj-label4" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn4" style="margin-bottom:1%">Click me to complete</button>
    </div>

    <!--Part 5 - Explaining core functions and variables-->
    <div class="col-md-4" style="border:solid; background-color:lightgoldenrodyellow; height:100%">
        <h2 style="text-align: center"><b>JavaScript Recap and Referencing</b></h2>
        <div id="accordionP5" class="accordions">
            <h3 class="learnTitles">Recap of JavaScript</h3>
            <p>
                If you've got this far then congratulations! You now know more about JavaScript then most! JavaScript can be a struggle when it comes to putting the right variable in the right place at the right time but the next tab will be a quick run down as a recap.
                Firstly, JavaScript is used alongside HTML and CSS to create more responsive and dynamic web content, which can be reactive based on the users input or actions.
                Continues on next tab!
            </p>
            <h3 class="learnTitles">Recap continued...</h3>
            <p>
                Secondly, JavaScript is a Scripting language which means that it uses code can be executed multiple times and can be called by multiple operations depending but this is then dependent on how the code is structured!
                <br>
                <b> NOT SIMPLY COPY & PASTE - BE CAREFUL!</b>
                <br>
                Thirdly, JavaScript code is usually application specific and so cannot be used to run code in another program or compiler.
            </p>
            <h3 class="learnTitles">JavaScript Versions</h3>
            <p>
                ECMAScript is the underlying specification standard that JavaScript uses. As of 2012, most modern internet browsers support this standard as to allow for support of other languages using its standards but mainly for that of JavaScript. The first iteration of the standard was published in 1997, with the latest release coming out in 2020 allowing for many more features and changes such as import options as well as new functions to create more efficient code in a timely manner.
            </p>
            <h3 class="learnTitles">JavaScript Referencing </h3>
            <p>
                Referencing JavaScript into your HTML documents allows for many more options to be applied to your webpages and web applications .JavaScript can be referenced into any HTML document very simply by using it's associated script tags within or outside of the HTML document. There is an example on how to do this in our 'Demos and Examples' section below.
            </p>
        </div>
        <br>
        <br>
        <br>
        <!--JS Progress Bar 5-->
        <div id="progressBarJ5" style="position:relative; background-color: lightgrey">
            Progress Completed: <strong><span id="pbj-label5" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn5" style="margin-bottom:1%">Click me to complete</button>
    </div>
    <!--Part 6 - Final Learning Module-->
    <div class="col-md-4" style="border:solid; background-color:lightcoral; height:100%">
        <h2 style="text-align: center"><b>JavaScript: Parameters</b></h2>
        <div id="accordionP6" class="accordions">
            <h3 class="learnTitles">Final JS Module</h3>
            <p>
                If you've got this far then congratulations! You now know more about JavaScript then most! JavaScript can be a pain when it comes to putting the right variable in the right place at the right time and so the next tab explains the way of understanding how parameter parsing works within procedures and functions to make that more understandable.
            </p>
            <h3 class="learnTitles">Parameter Parsing in Functions</h3>
            <p>
                Communication between procedures or functions tends to be associated in two ways, <b>Formal parameters</b> and <b>Actual parameters</b>. <i>Formal</i> parameters are when the variables are declared within the function's parentheses(), <i>Actual</i> parameters are when these variables are specified in the called function as its arguments such as when defining variables within a function and calling another function within this, using the previously defined variables within this function's parentheses.

            </p>
            <h3 class="learnTitles">Parsing Techniques</h3>
            <p>
                Typically there are 4 different types of parameter parsing techniques; <br><b>Parse-by-value </b>, <b>Parse-by-reference</b>, <b>Parse-by-CopyRestore</b> and <b>Pass-by-name</b>.
                <br>
                <b>Parse-by-value:</b> This is when the parameter values are copied into another variable and then this new object is then what is passed. This is beneficial when the variable has a long name or is that of a file path, shortened down to save re-typing the same line multiple times.
                <br>
                <b>Parse-by-reference:</b> Unlike parse-by-value, this technique is used to pass the reference of the argument in the calling function into the formal parameter of the called function. In doing so, the called function is able to use this reference to modify the value of the argument.
            </p>
            <h3 class="learningTitles">Parsing continued...</h3>
            <p>
                <b>Parse-by-Copy-Restore:</b> Similar to pass-by-reference, as the argument address is still passed to the function, this technique has a protocol which requires it to make a copy of the argument before execution. This copy is then what is used within the function body.
                <br>
                <b>Pass-by-name:</b> This technique isn't very common and only a limited amount of languages use it, such as Algol, but ultimately what this parsing technique does is that it replaces the name of the called procedure and uses its body element instead. This textually substitutes the argument expressions so the procedure uses the actual parameters similar to that of the parse-by-reference technique.
            </p>
        </div>
        <br>
        <!--JS Progress Bar 6-->
        <div id="progressBarJ6" style="position:relative; background-color: lightgrey">
            Progress Completed: <strong><span id="pbj-label6" style="position:relative"></span></strong>
        </div>
        <button id="t4Btn6" style="margin-bottom:1%">Click me to complete</button>
    </div>
</div>
<br>
<div style="margin-top: 3%; margin-bottom: 1%">
    <h2><u><i>Overall Progress for Theory Modules Part 2</i></u></h2>
    <div id="progressBarJOverallP2" style="position:relative; background-color: lightgrey">
        Progress Completed: <strong><span id="pbj-labelOverall2" style="position:relative"></span></strong>
    </div>
</div>
<!-------------------Second Section Demos / Showing theory in a graphical way (This aids imagery / visual learners)------------------------->
<h1 style="text-align: center; color: goldenrod"><b><u>Demos & Examples</u></b></h1>
<div class="row" style="text-align: center; height:50%">
    <div id="popImageBox" style="background-color: goldenrod;">
        <div>
            <div id="popImageBoxHeader" style="color: goldenrod;"></div>
            <div id="popImageBoxBody">
                <img id="popImg" />
            </div>
            <div id="popImageBoxFooter"></div>
        </div>
    </div>
    <!--Demo One-->
    <div class="col-md-4">
        <h2><u>Including JavaScript on a Web App</u></h2>
        <div id="accordionP7" class="accordions">
            <h3 class="learnTitles">Step 1:</h3>
            <p>Ensure that you are developing using an IDE or software that supports JavaScript! The most commonly used platforms would be that of Visual Studio, WebStorm, Atom and Brackets. All of which have free versions that include a variety of tools to give you the capabilities you are looking for! </p>
            <h3 class="learnTitles">Step 2:</h3>
            <p>Load up your IDE and create a new project. Most web development applications are developed within either a HTML or PHP base as these languages allow for JavaScript integration. Once done, create a new file and select the JavaScript option from the provided list, you should now you should have a '.js' file.</p>
            <h3 class="learnTitles">Step 3:</h3>
            <p>Now you can create JavaScript functions, classes and more without getting them mixed up within your main file. Have no fear, you can link this JS file to your main application document by using the following:
                <br>
                <img src="../assets/img/Screenshots/ScriptTags.png" alt="External Script Tag Image">
            </p>
            <h3 class="learnTitles">Step 4:</h3>
            <p>Using these Script Tags, we are able to include external JavaScript files to our documents. Internal JavaScript is included by simply using the Script tags with no parameters and simply writing your JS code in between the opening and closing tags like so:
                <img src="../assets/img/Screenshots/singleScriptTags.png" alt="Internal Script Tag Image">
            </p>
        </div>
        <br>
        <div style="position: relative">
            Be sure you remember to use BOTH opening and closing script tags as this will throw errors within your application if not done so!
        </div>
    </div>



    <!--Demo Two-->
    <div class="col-md-4">
        <h2><u>JavaScript Functions</u></h2>
        <p>JavaScript functions are a block of code designed to be triggered when a specific action is carried out by the user, application, browser or when a certain parameter is met</p>
        <p>Functions can be used to create mathematical equations such as the following button and following function:
            <br>
            <button id="funcBtn">Input two numbers to add them together</button></p>

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
                <a class="btn btn-info" id="btnShowFunc" onclick="popUpImage.imageRender(imageCalc, 'This is how a function works!')"> Show Code </a>
            </div>
        </div>
    </div>
    <!--Demo Three-->
    <div class="col-md-4">
        <h2><u>JavaScript Events</u></h2>
        <p>There are many different events within JavaScript such as mouse clicks and actions that the user can carry out then then trigger such events.</p>
        <p>Here are just a few examples!</p>
        <p><b><u>Event Listeners - Example through button click</u></b></p>
        <button id="btnEvent">Click me!</button>
        <p id="eventText"></p>
        <br>
        <button id="btnEvent2">Move your mouse cursor over this instead!</button>
        <p id="eventText2"></p>
        <a class="btn btn-info" id="btnShowEvent" onclick="popUpImage.imageRender(imageEvent, 'This is how an Event Listener works!')" style="display: none">Show Code</a>

        <img id="eventScreenshot" src="../assets/img/Screenshots/singleScriptTags.png" alt="Event Listener image" style="display: none; width: 100%; height: 100%" />
        <br>
        <p>All events can be customised to adapt to how the user interacts within the HTML DOM or Browser and so changing the options for these with JavaScript can lead to many different possibilities and outcomes within your programming of web applications. </p>
    </div>
</div>



<!--End of theory -> Go to tests-->
<div class="row" style="height:255px">
    <div class="col-md-2" style="height:100%"></div>
        <div class="col-md-8" style="text-align: center">
            <h2 style="text-align: center"><b>For the Coding Sensei in-training!</b></h2>
            <h3>Are you ready to Test Your Knowledge on what you have learnt?</h3>
            <h3 style="text-align:center">Let's get started with some tests!</h3>
                <br>
                <a class="btn-link" href="jsTestPage.php"><b style="font-size: xx-large"><i style="color: goldenrod"><u>JavaScript Test Page HERE<u></i></b></a>
        </div>
    <div class="col-md-2" style="height:100%"></div>
</div>
<br>
<br>



<!--Helpful Extras-->
<h1 style="text-align: center"><b><u> Useful external JavaScript libraries</u></b></h1>
<br>
<div class="row" style="text-align: center">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <span style="text-align:center">
            <a href="https://jquery.com/"><img class="topicAddons" alt="jQuery Logo" title="Click Me for jQuery" src="../assets/img/jquery.jpg" style="cursor: pointer; margin-right: 3%"></a>
            <a href="https://jqueryui.com/"><img class="topicAddons" alt="jQuery-ui Logo" title="Click Me for jQuery-UI Logo" src="../assets/img/jqueryui.jpg" style="cursor: pointer"></a>
        </span>
        <h2 style="text-align:center"></h2>
    </div>
    <div class="col-md-2"></div>
</div>
<br>
<br>
<div class="row" id="shortcuts" style="text-align: center">
    <h1 style="text-align: center"><b><u>Useful keyboard shortcuts! Do you know them all?!</u></b></h1>
    <br>
    <div class="col-md-4">
        <br>
        <br>
        <br>
        <br>
        <h3 style="text-align: center"> The <b>' <i>TAB</i> '</b> key on your keyboard will indent the line of code by 1 unit</h3>
        <h3 style="text-align: center"> Similarly, <b>' <i>SHIFT</i> '</b> and <b>' <i>TAB</i> '</b> together will indent the code line backwards 1 unit</h3>
        <h3 style="text-align: center"> Using <b>' <i>SHIFT</i> '</b> and <b>' <i>END</i> '</b> keys together will highlight the line of code that the cursor is currently on </h3>
    </div>
    <div class="col-md-4">
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>S</i> '</b> will save the active document</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>A</i> '</b> will highlight all code on the active document</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>X</i> '</b> will cut out the selected code</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>C</i> '</b> will copy the selected code</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>V</i> '</b> will paste out code that has been copied or cut</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>Z</i> '</b> will undo your last change to your code - This is similar to the undo button in most word processor based software's </h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>Y</i> '</b> will redo the last change you made to your code if <b>'<i>CTRL</i>'</b> + <b>'<i>Z</i>'</b> have been pressed beforehand</h3>
        <br>
        <br>
        <h2>Most of these keyboard shortcuts are transferable into many different applications as well as general use of your computer! <br><br> Try them out and see what you think!</h2>
    </div>
    <div class="col-md-4">
        <br>
        <br>
        <h3 style="text-align: center"> Pressing <b>' <i>CTRL</i>'</b> key and the <b> ' / ' </b>(<i>Forward Slash</i>) key on your keyboard will comment out the entire line of code</h3>
        <h3 style="text-align: center"> Pressing both the <b>' <i>CTRL</i> '</b> and the <b>' <i>TAB</i> '</b> keys together will allow you to change the active document you are working on to another that is already open. This is useful when quickly switching between multiple files. </h3>
        <h3 style="text-align: center"> Pressing <b>' <i>CTRL</i> '</b> and <b>' <i>ENTER</i> '</b> will create a new line underneath the current one BUT will keep the cursor on the current line rather then drop down to the next line </h3>
    </div>
</div>



<!--Scripts for the page-->
<!--Custom Accordion Script-->
<script src="../assets/js/CustomScripts/accordionScripts.js"></script>
<!--Custom Pop-up Script-->
<script>
    let imageCalc = '../assets/img/Screenshots/calculationCode_Commented.png';
    let imageEvent = '../assets/img/Screenshots/eventListener_Commented.png';
    function CustomPopImage()
    {
        this.imageRender = function (img, commentString)
        {
            let popImageBox = document.getElementById('popImageBox');

            let winH = window.innerHeight;
            let popImageOverlay = document.getElementById('popImageOverlay');
            popImageOverlay.style.display = "block";
            popImageOverlay.style.height = winH + "px";

            popImageBox.style.top = (winH / 2 )- 555 + "px";
            popImageBox.style.display = "block";
            document.getElementById('popImageBoxHeader').innerHTML = commentString;
            document.getElementById('popImg').src = img;
            document.getElementById('popImageBoxFooter').innerHTML = '<button onclick="popUpImage.ok()">OK</button>';
        }
        this.ok = function()
        {
            document.getElementById('popImageOverlay').style.display = "none";
            document.getElementById('popImageBox').style.display = "none";
        }
    }
    let popUpImage = new CustomPopImage();

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
                    $('#t4Btn1').button("disable")
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
            this.style.background = "lightgrey";

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
                    $('#t4Btn2').button("disable")
                        $('#t4Btn2').text("Completed")
                },
                change: function ()
                {
                    $('#pbj-label2').text($('#progressBarJ2').progressbar("value"));
                }
            });
        //Button click //
        $('#t4Btn2').click(function () {
            this.style.background = "lightgrey";
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
                    $('#t4Btn3').button("disable")
                        $('#t4Btn3').text("Completed")
                },
                change: function ()
                {
                    $('#pbj-label3').text($('#progressBarJ3').progressbar("value"));
                }
            });
        //Button click //
        $('#t4Btn3').click(function () {
            this.style.background = "lightgrey";
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
                    $('#pbj-labelOverall1').text("Introduction 1 Complete!")
                        alert('\n Learning Modules 1 Completed! \n \n Time for Theory Modules 2 for more!')
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
                    $('#t4Btn4').button("disable")
                        $('#t4Btn4').text("Completed")
                }, change: function ()
                {
                    $('#pbj-label4').text($('#progressBarJ4').progressbar("value"));
                }
            });
        //Button click
        $('#t4Btn4').click(function () {
            this.style.background = "lightgrey";
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
                    $('#t4Btn5').button("disable")
                        $('#t4Btn5').text("Completed")
                }, change: function ()
                {
                    $('#pbj-label5').text($('#progressBarJ5').progressbar("value"));
                }
            });
        //Button click
        $('#t4Btn5').click(function () {
            this.style.background = "lightgrey";
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
                    $('#t4Btn6').button("disable")
                        $('#t4Btn6').text("Completed")
                }, change: function ()
                {
                    $('#pbj-label6').text($('#progressBarJ6').progressbar("value"));
                }
            });
        //Button click
        $('#t4Btn6').click(function () {
            this.style.background = "lightgrey";
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
                    $('#pbj-labelOverall2').text("Introduction 2 Complete!")
                        alert('\n Learning Modules 2 Completed! \n \n Have a look through our Demos & Examples section to see how some JavaScript code looks and works')
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

        document.getElementById("btnEvent2").addEventListener("click", displayButton);
        function displayMoreText()
        {
            document.getElementById("eventText2").innerHTML = "<i>You've just activated another event, Click the same button to show an image and see how can create your own Event Listener</i>";
            document.getElementById("btnEvent2").innerHTML = "Now click me again!"
        }






        function displayButton()
        {
            document.getElementById("btnShowEvent").style.display = "block";
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
</script>
</body>
</html>



