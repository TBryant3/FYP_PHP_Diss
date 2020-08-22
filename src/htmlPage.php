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
<!--Created overlay to prevent user inputs other then closing the pop-up-->
<div id="popImageOverlay"></div>

<!--Introduction information about the Topic-->
<div class="row">
    <div class="col-md-6">
        <h1 style="text-align:center; color: orange; font-family: monospace">
            <u><b>Hypertext Markup Language</b></u>
            <img class="topicLogos" alt="HTML_Logo" src="../assets/img/HTML5_logo.png" />
            <br>
            <b style="text-align: center; font-size: x-large">
                <i>
                    Founded and proposed in 1993 by Tim Berners-Lee.
                    <br>
                    First W3C Recommendation standard published (HTML 3.0) in 1996/7 becoming a standard for future web software.
                </i>
            </b>
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
    <div class="col-md-6">
        <h1 style="text-align:center; color: blue; font-family: monospace">
            <u><b>Cascading Style Sheets</b></u>
            <img class="CSS_logo" alt="CSS_Logo" src="../assets/img/CSS3_logo.png" />
            <br>
            <b style="text-align: center; font-size: x-large">
                <i>
                    Developed by Håkon Wium Lie in 1994,
                    <br>
                    First standard published in 1996 by the World Wide Web Consortium (also known as W3C)!
                </i>
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


<!--Teaching Element and Theory explaining HTML-->
<div class="row" style="height:600px">
    <h1 style="text-align: center"><b><u>Theory Modules HTML</u></b></h1>
    <div class="col-md-2" style="min-height:550px"></div>
        <!--Part 1 - Introduction to HTML-->
    <div class="col-md-4" style="border:solid; background-color:lightgreen; min-height:550px">
        <h2 style="text-align: center"><b>"What is.." and "How to.."  HTML</b></h2>
        <p style="text-align:center">
            This module gives you the background behind HTML, <u><b>Why</b></u> it was developed as well as
            <u><b>How</b></u> HTML has influenced web development over the years!
        </p>
        <div id="accordionH1" class="accordions">
            <h3 class="learnTitles">Key HTML Aspects</h3>
            <p>
                As HTML is used to format web content, it is good to understand how it does this.
                <br>
                HTML uses its own version of a variable known as a <b>tag</b>. These tags are then used to identify where certain elements are shown or placed within the document.
                All tags are opened and have a corresponding closing tag OR they have a self-closing tag in that they close themselves at the end of their properties are set.

            </p>
            <h3 class="learnTitles">History: HTML 1.0 to HTML 3</h3>
            <p> The first version of HTML was developed in 1993 and by 1999 HTML 4 became the official standard and led HTML to becoming the most widely used mark-up language.
                In the beginning HTML didn't have file upload support and couldn't show any elements other then text and so this was quickly rectified and by 1995/1996, these features were added to HTML's capabilities.
                HTML allows for web developers to use a structured approach to display how web content was viewed and after each version iteration, HTML allowed for more languages, such as JavaScript and PHP, to be compatible and displayed within the documents created.
                <br>
                In 1997, W3C published HTML 3 as a recommendation to be used and become the first iteration to be developed fully by W3C as the original group that Tim Berners-Lee was apart of closed down its HTML Working Group.
            </p>
            <h3 class="learnTitles">Present HTML versions</h3>
            <p>
                By the end of 1997, HTML 4 was released alongside 3 different variates of the mark-up language; <b>Strict:</b> which prevented deprecated elements from being used , <b>Transitional:</b> Which did allow deprecated elements, and <b>Frameset:</b> whereby only elements which were defined within 'frames' could be used.
                <br>
                After the release of HTML 4.01, the W3C HTML Working Group developed XHTML which stands for EXtensible HyperText Markup Language and allowed for more restrictions but with a cleaner interface for web developers.
                October 2014 saw HTML5 published bringing with it a huge amount of improvements on the previous versions and is now the global standard with XHTML falling shortly behind.
            </p>
        </div>
        <br />
        <div>
            <div id="progressBarH1" style="position:relative">
                Progress Completed: <b><span id="pb-label1" style="position:relative"></span></b>
            </div>
            <button id="t1Btn1" type="submit">Click me to complete</button>
        </div>
    </div>

    <!--Teaching Element and Theory explaining CSS -->
    <div class="col-md-4" style="border:solid; background-color:lightgoldenrodyellow; min-height:550px">
        <h2 style="text-align: center"><b>Styling with CSS</b></h2>
        <p style="text-align:center">
            In this module you shall be be exploring <u><b>What</b></u> CSS is and <u><b>How</b></u> it is used alongside HTML to make web development more customisable to the developer and user's needs!
        </p>
        <div id="accordionH2" class="accordions">
            <h3 class="learnTitles">What is CSS</h3>
            <p>
                CSS is used to produce and display web content more effectively by accompanying HTML to style online content providing more specific web designs allowing to provide users with the separation between presentation and content. It uses selectors to identify the HTML elements in which the CSS is to be applied to and from this, a variety of properties can be applied to change nearly all aspects of the HTML element to fit the developers needs.
            </p>
            <h3 class="learnTitles">CSS History</h3>
            <p>
                Proposed in 1994, Håkon Wium Lie was working alongside Tim Berners-Lee, who developed HTML, when he developed CSS. There were already other variants of Stylesheet languages, such as DSSSL and FOSI, that had been in production since the 1980's but due to the fact that both Håkon and Tim worked in the same company(CERN), Håkon proposed his idea for CSS in 1994 to aid and benefit Tim's HTML designs which were already in the making as of 1993.
                <br>
                The main idea behind Håkon's CSS was to provide a way to use stylesheets from different sources which wasn't possible with what was already on the market.
            </p>
            <h3 class="learnTitles">CSS History continued..</h3>
            <p>
                By 1996, multiple talks about new style sheet languages had been carried out with the result being W3C approving of the idea of CSS and a W3C CSS Recommendation was created, formally publishing the first version of CSS, CSS1.
                <br>
                CSS has been updated and changed a few times since then and is now on version 3 allow web developers to  have fully control over elements of HTML derivative which means that more can be done with HTML as well as opening up more opportunities to these developers on what they can provide for their user base.
            </p>
        </div>
        <br>
        <div id="progressBarH2" style="position:relative">
            Progress Completed: <b><span id="pb-label2" style="position:relative"></span></b>
        </div>
        <button id="t1Btn2" type="submit">Click me to complete</button>
    </div>
    <div class="col-md-2"></div>
</div>

<div style="margin-top: 5%">
    <h3 style="text-align: center"><u><i>Overall Progress for Theory Modules</i></u></h3>
    <div id="progressBarHTMLOverallP1" style="position:relative; width: 50%; text-align: center; margin-left: 25%; margin-right: 25%; background-color: lightgrey">
        Progress Completed: <b><span id="pbHTML-labelOverall1" style="position:relative"></span></b>
    </div>
</div>



<!--Second Section Demos / Showing theory in a graphical way (This aids imagery / visual learners)-->
<h1 style="text-align: center; padding-top: 5%"><b><u>Demos & Examples</u></b></h1>
<div class="row" style="height:auto">
    <!--Demo One-->
    <div class="col-md-4" style="height:auto">
        <h2 style="text-align: center; color: orange"><b><u>How to use HTML documents</u></b></h2>
            <h3 style="text-align: center"><b><u>HTML Special Tags</u></b></h3>
            <p style="text-align: center; font-size: medium">
            There are special tags that can be used in HTML instead of styling with CSS and these are:
                <br>
                <b><u><i>Quote marks purely to show the tags in HTML! <br> They are NOT part of the tags themselves!</i></u></b>
                <br>
                <br>
                <b>Breakpoints:</b>
                <br>
                They are declared using <b><'br'></b> and are used to add a line from where the break is instigated just like how this line is below the above without reaching its full length. They do not require a closing tag.
                <br>
                <b>Bold:</b>
                <br>
                They are declared using <b><'b'></b> and add the font-weight attribute of bold to anything held between its tags. They are closed using <b><'/b'></b>.
                <br>
                <b><i>Italics:</i></b>
                <br>
                They are declared using <b><'i'></b> and add the font-weight attribute of italics to the contents between its tags. Closed using <b><'/i'></b>
                <br>
                <b><u>Underline:</u></b>
                <br>
                These are declared using <b><'u'></b> and apply, as their name suggests, an underlining to values between its tags. Again, closed using <b><'/u'></b>
                <br>
            </p>
        <div>
            <h2 id="htmlLayoutHeading" title="Click here"><b>HTML Layout</b></h2>
            <div id="htmlLayoutText" style="text-align: center; display: none">
                <p style="font-size: medium">
                    As HTML is a mark-up language, it follows a structure that is written in plain english and can be understood and broken down simply.
                    <br>
                    Click the button below to see and example of this structure!
                    <br>
                    <br>
                    Most Coding IDE's that support HTML tend to have a feature in which they will automatically create a HTML template for you when you select HTML as a file type on creation, but this isn't always the case and so some applications have snippets which allow for HTML templates to be generated.
                    <br>
                    <br>
                    Here are some examples applications that can use these snippets
                    <br>
                    <b>Atom</b> - Run 'apm install html-template-generator' and then press 'CTRL'+'ALT'+'K' together.
                    <br>
                    <b>Sublime Text</b> - Press together 'CTRL' + 'SHIFT' + 'P', type 'Install' and select 'Install Package' then type html and select 'boilerplate'. You now have this snippet and so simply type 'html' and you're good to go.
                    <br>
                    <br>
                <a class="btn btn-info" id="btnShowLayout" onclick="popUpHTML.htmlPopRender(htmlLayout, 'This is how a HTML document is structured')"> Show HTML Layout </a>
            </div>
        </div>
    </div>
    <!--Demo Two-->
    <div class="col-md-4">
        <h2 style="text-align: center; color: saddlebrown"><u><b>What <i style="font-size: xx-large">NOT</i> to do</b></u></h2>
        <h2 style="text-align: center; color: saddlebrown"><u><b><i style="font-size: xx-large">&</i></b></u></h2>
        <h2 style="text-align: center; color: saddlebrown"><u><b>What to Avoid</b></u></h2>
        <br>
        <p style="text-align: center; font-size: large">
            It is NOT possible to place the head tag below the body tag as this will cause an error to be thrown by your browser as it will not be able to identify the contents of your web document.
            <br>
            <br>
            Similarly, it is NOT possible to place either the head or body within one another as the web browser will attempt to obtain the head or body when it is needed and will not be able to find them, throwing an error in the process in the browser console (this is accessible by pressing F12 when within your browser).
            <br>
            <br>
            Another mistake to avoid would be to attempt to place the head or body tags outside of the html tags. This will mean the system will attempt to load the head or body data without the html document being attached leading to an out-of-scope scenario where the head or body element will have no connection to the html document leading to the document not loading as it should.
        </p>
        <div id="popImageBox" style="background-color: saddlebrown;">
            <div>
                <div id="popImageBoxHeader" style="color: saddlebrown;background: grey"></div>
                <div id="popImageBoxBody">
                    <img id="popImg" style="width: 100%"/>
                </div>
                <div id="popImageBoxFooter" style="background: grey">
                </div>
            </div>
        </div>
    </div>
    <!--Demo Three-->
    <div class="col-md-4" style="height:auto">
        <h2 style="text-align: center; color: blue"><b><u>How to use CSS</u></b></h2>
        <h3 style="text-align: center"><u><b>CSS Layout</b></u></h3>
        <div style="text-align: center">
            <p style="font-size: medium">
                CSS pages are added to a HTML document using a specific type of tag known as the 'link' tab.
                <br>
                <br>
                <img src="../assets/img/Screenshots/cssLinkTag.png" style="width: 100%" alt="Tag Showing How to Link CSS"/>
                <br>
                <br>
                The link tab takes attributes to fit to the developers needs such as:
                <br>
                <b>href</b> which is the file path to the .css file,
                <br>
                <b>rel</b> which is the relationship between the CSS and HTML files and this is usually <i>stylesheet</i>
                but can be <i>alternate stylesheet</i> if the style isn't persistent but this option isn't common.
                <br>
                There is also a <b>type</b> attribute which states the format of the file, this is mostly set to <i>text/css</i> and in recent updates, this attribute isn't necessary and is the default if no value for this is specified.
                <br>
                Finally, there can be a <b>title</b> attribute which is used to give a linked resource a name so the user knows where it comes from but if this is assigned then the browser reads it as default which is the root of the HTML and CSS files.
            </p>
            <h2 id="cssLayoutHeading" title="Click here"><u><b>CSS Selectors</b></u></h2>
            <div id="cssLayoutText" style="text-align: center; display: none">
            <p style="font-size: medium">
                CSS can also apply selector styles <b>:after</b> or <b>:before</b> selective actions are taken on specified elements and are defined by the target elements id, proceeded by a colon( : ) with the selector type.
                <br>A few more examples include but are not limited to;
                <br>
                <b>:hover</b> which applies the style when the mouse hovers over the element.
                <br>
                <b>:focus</b> applies a style when the element is in focus such as when the user is inputting into a text box
                <br>
                <b>:required</b> which applies to all input elements that have the 'required' attribute such as important information within forms.
                <br>
                <b>:optional</b>, the opposite of required, and applies to all inputs that DO NOT have the 'required' attribute.
                <br>
            </p>
            <br>
            <a class="btn btn-info" id="btnShowCSS" onclick="popUpHTML.htmlPopRender(cssLayout, 'This is how a CSS document is structured')"> Show CSS Layout </a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!--End of theory -> Go to tests-->
<div class="row" style="height:255px">
    <div class="col-md-2" style="height:100%"></div>
    <div class="col-md-8" style="text-align: center">
        <h2 style="text-align: center"><b>For the Coding Sensei in-training!</b></h2>
        <h3>Are you ready to Test Your Knowledge on what you have learnt?</h3>
        <h3 style="text-align:center">Let's get started with some tests!</h3>
        <br>
        <a class="btn-link" href="htmlTestPage.php"><b style="font-size: xx-large"><i style="color: orange"><u>HTML Test Page HERE<u></i></b></a>
    </div>
    <div class="col-md-2" style="height:100%"></div>
</div>
<br>
<br>


<!--Row 4 - 1 box Helpful HTML guides / Add-Ons-->
<div class="row" style="text-align: center; height:200px; margin-bottom: 7%">
    <h1 style="text-align: center"><b><u>Useful HTML Frameworks</u></b></h1>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h2 style="color:mediumpurple; text-align:center"><b> Bootstrap </b><a href="https://getbootstrap.com/"><img title="Download Bootstrap here!" alt="Bootstrap4 Logo" src="../assets/img/bootstrap-solid.svg" class="topicLogos"></a></h2>
        <p style="font-size: large">
            The Bootstrap framework allows for better control on HTML elements and comes with its own CSS formats which saves a lot of time instead of manually setting it yourself.
            <br>
            Bootstrap is easily integrated using one link for the CSS linked as just as described in the 'How to CSS' section and then its ready to go!
            <br>
            For a live example, this application uses Bootstrap to aid in element positioning!
        </p>
    </div>
    <div class="col-md-2"></div>
</div>
<br>
<div class="row" id="shortcuts" style="text-align: center">
    <h1 style="text-align: center; width: 50%; margin-left: 25%; margin-right: 25%"><b><u>Useful keyboard shortcuts! Do you know them all?!</u></b></h1>
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



<!--Custom Accordion Script-->
<script src="../assets/js/CustomScripts/accordionScripts.js"></script>
<script>
// Give images variables to save having to type file path multiple times
let htmlLayout = '../assets/img/Screenshots/htmlLayout.png';
let cssLayout = '../assets/img/Screenshots/cssLayout.png';
function HTMLImagePop()
{
    // Function to be called that will take the two specified parameters
    this.htmlPopRender = function (img, commentString)
    {
        let htmlPopBox = document.getElementById('popImageBox');
        // Get the value of the window to know how much to move the popup box box vertically
        let winH = window.innerHeight;
        let htmlOverlay = document.getElementById('popImageOverlay');
        // Show the overlay div
        htmlOverlay.style.display = "block";
        // Setting overlay height using window value
        htmlOverlay.style.height = winH + "px";
        // Again using window value to then position the popup box itself and then show it
        htmlPopBox.style.top = (winH / 2 )- 555 + "px";
        htmlPopBox.style.display = "block";
        // Assigning the R-value to the function to the header of the popup box
        document.getElementById('popImageBoxHeader').innerHTML = commentString;
        // Assigning the specified image to the body of the popup box (L-Value of function)
        document.getElementById('popImg').src = img;
        // The footer of the popup box has two parts, a pre-defined string as well as the button function
        document.getElementById('popImageBoxFooter').innerHTML = ' HTML -> This is the standard and more recognised format, some aspects can be styled and renamed with unique IDs but mainly this is how the core structure appears within most HTML documents.' + '<br>' + 'CSS -> This is not a complete case for all CSS files and there are more options that can be configured to meet your needs but this is a sample of the more common properties.' + '<br>' + '<button onclick="popUpHTML.ok()">OK</button>';
    }
    // Button to close the popup box and to dismiss the overlay
    this.ok = function()
    {
        document.getElementById('popImageOverlay').style.display = "none";
        document.getElementById('popImageBox').style.display = "none";
    }
}
//Variable to be called to instigate the popup function as a whole
let popUpHTML = new HTMLImagePop();



const t1Btn1 = $('#t1Btn1');
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
        }
    });
//Button click
t1Btn1.click(function ()
{
    $('#progressBarH1').progressbar({ value: 100 });

    switch($('#progressBarHTMLOverallP1').progressbar("value"))
    {
        case 0:
        {
            $('#progressBarHTMLOverallP1').progressbar({ value: 50 })
            break;
        }
        case 50:
        {
            $('#progressBarHTMLOverallP1').progressbar({ value: 100 })
            break;
        }
    }
});

const t1Btn2 = $('#t1Btn2');
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
            t1Btn2.button("disable").text("Completed");
        },
    });
//Button click
t1Btn2.click(function ()
{
    $('#progressBarH2').progressbar({ value: 100 });
    switch($('#progressBarHTMLOverallP1').progressbar("value"))
    {
        case 0:
        {
            $('#progressBarHTMLOverallP1').progressbar({ value: 50 })
            break;
        }
        case 50:
        {
            $('#progressBarHTMLOverallP1').progressbar({ value: 100 })
            break;
        }
    }
});

    //////////////////////////////////////////////////////////////////////////////
    ///////////////////////////OVERALL PART 1/////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////
    $('#progressBarHTMLOverallP1').progressbar(
        {
            value: 0,
            create: function ()
            {
                $('#pbHTML-labelOverall1').text($('#progressBarHTMLOverallP1').progressbar("value"));
            },
            complete: function ()
            {
                $('#pbHTML-labelOverall1').text("Introduction 1 Complete!")
                alert('\n Learning Modules 1 Completed! \n \n Check the Demos and Examples to help clarify what you have read!')
            },
            change: function ()
            {
                $('#pbHTML-labelOverall1').text($('#progressBarHTMLOverallP1').progressbar("value"));
            }
        });


// Events to show and hide HTML Layout block of text to reduce amount on screen at one time
document.getElementById("htmlLayoutHeading").addEventListener("click", displayHTMLText);
// Gets text block to be manipulated, set it to a variable
let htmlLayoutText = document.getElementById("htmlLayoutText");
// Function to display HTML text
function displayHTMLText()
{
    // Change boolean value of false declared to true, clicking text executes this change
     showHTMLText = !showHTMLText
    // If boolean value is true, show
    if (showHTMLText === true)
    {
        //Set CSS display value to show text
        htmlLayoutText.style.display = "block";
    }
    // If boolean value is false, hide
    else
    {
        //Set CSS display value to hide text
        htmlLayoutText.style.display = "none";
    }
}
// Declaring boolean variable to set the text state as hidden by default
let showHTMLText = false;



// Events to show and hide CSS Selectors block of text to reduce amount on screen at one time
document.getElementById("cssLayoutHeading").addEventListener("click", displayCSSText);
let cssLayoutText = document.getElementById("cssLayoutText");
// Function to display CSS text
function displayCSSText()
{
    showCSSText = !showCSSText
    if (showCSSText === true)
    {
        cssLayoutText.style.display = "block";
    }
    else
    {
        cssLayoutText.style.display = "none";
    }
}
let showCSSText = false;


</script>
</body>
</html>
