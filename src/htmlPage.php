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
    <div class="col-xs-6">
        <h1 style="text-align:center; color: orange; font-family: monospace">
            <u><b>Hypertext Markup Language</b></u>
            <img class="topicLogos" alt="HTML_Logo" src="../assets/img/HTML5_logo.png" />
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
            <img class="CSS_logo" alt="CSS_Logo" src="../assets/img/CSS3_logo.png" />
            <br>
            <b style="text-align: center; font-size: x-large"><i>
                Developed by Hakon Wium Lie in 1994,
                <br>
                First standard published in 1996 by the World Wide Web Consortium (also known as W3C)!</i>
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
    <div class="col-xs-2"></div>
        <!--Part 1 - Introduction to HTML-->
    <div class="col-xs-4" style="border:solid; background-color:lightgreen">
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
                HTML uses its own version of a variable known as a 'tag'. These tags are then used to identify where certain elements are shown or placed within the document.
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
            <button id="t1Btn1" type="submit" style="margin-bottom:1%">Click me to complete</button>
        </div>
    </div>

    <!--Teaching Element and Theory explaining CSS -->
    <div class="col-xs-4" style="border:solid; background-color:lightgoldenrodyellow">
        <h2 style="text-align: center"><b>Styling with CSS</b></h2>
        <p style="text-align:center">
            In this module you shall be be exploring <u><b>What</b></u> CSS is and <u><b>How</b></u> it is used alongside HTML to make web development more customisable to the developer and user's needs!
        </p>
        <div id="accordionH2" class="accordions">
            <h3 class="learnTitles">What is CSS</h3>
            <p>The layout of CSS can be viewed in the Demos and Examples section but to explain, </p>
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
<br>
<h3 style="text-align: center"><u><i>Overall Progress for Theory Modules</i></u></h3>
<div id="progressBarHTMLOverallP1" style="position:relative; width: 50%; text-align: center; margin-left: 25%; margin-right: 25%; background-color: lightgrey">
    Progress Completed: <b><span id="pbHTML-labelOverall1" style="position:relative"></span></b>
</div>




<!--Second Section Demos / Showing theory in a graphical way (This aids imagery / visual learners)-->
<h1 style="text-align: center"><b><u>Demos & Examples</u></b></h1>
<div class="row" style="height:575px">
    <div id="popImageBox" style="width: 50%; margin-left: 25%;background-color: saddlebrown;">
        <div>
            <div id="popImageBoxHeader" style="color: saddlebrown;background: grey"></div>
            <div id="popImageBoxBody">
                <img id="popImg" />
            </div>
            <div id="popImageBoxFooter" style="background: grey">
            </div>
        </div>
    </div>
    <!--Demo One-->
    <div class="col-xs-4" style="border:solid; height:auto">
        <h2 style="text-align: center; color: orange"><b><u>How to create HTML documents</u></b></h2>
        <h3 style="text-align: center"><b>HTML Layout</b></h3>
        <div style="text-align: center">
            <p style="font-size: medium">
                As HTML is a mark-up language, it follows a structure that is written in plain english and can be understood and broken down simply. Click the button below to see and example of this structure!
                <br>
                <br>
                Coding software that support HTML tend to have a feature in which they will automatically create a HTML template for you when you select HTML as a file type on creation, but this isn't always the case and so some applications have shortcuts which allow for HTML templates to be generated.
                <br>
                <br>
                Here are some examples of this shortcut in different applications:
                <br>
                <b>Atom</b> - Run 'apm install html-template-generator' and then press 'CTRL' + 'ALT' + 'K' together.
                <br>
                <br>
                <b>Visual Studio Code</b> - Press 'CTRL'+'SHIFT'+'P', navigate through the Extensions and search for HTML5 Boilerplate, reload VSCode - Create a new HTML document and then type 'html' within VSCode and then the html5-boilerplate snippet will be auto-completed and shown, select this and then a HTML structure should be generated
            </p>
            <a class="btn btn-info" id="btnShowLayout" onclick="popUpHTML.htmlPopRender(htmlLayout, 'This is how a HTML document is structured')"> Show HTML Layout </a>
        </div>
    </div>
    <!--Demo Two-->
    <div class="col-xs-4" style="border:solid; height:auto">
        <h2 style="text-align: center; color: saddlebrown"><b>What <i style="font-size: xx-large">NOT</i> to do</b></h2>
        <p style="text-align: center; font-size: large">
            It is not possible to place the head tag below the body tag as this will cause an error to be thrown by your browser as it will not be able to identify the contents of your web document.
            <br>
            <br>
            Similarly, it is not possible to place either the head or body within one another as the web browser will attempt to obtain the head or body when it is needed and will not be able to find them, throwing an error in the process in the browser console (this is accessible by pressing F12 when within your browser).
            <br>
            <br>
            Another mistake to avoid would be to attempt to place the head or body tags outside of the html tags. This will mean the system will attempt to load the head or body data without the html document being attached leading to an out-of-scope scenario where the head or body element will have no connection to the html document leading to the document not loading as it should.
        </p>
    </div>
    <!--Demo Three-->
    <div class="col-xs-4" style="border:solid; height:auto">
        <h2 style="text-align: center; color: blue"><b><u>How to use CSS</u></b></h2>
        <h3 style="text-align: center"><b>CSS Layout</b></h3>
        <div style="text-align: center">
            <p style="font-size: medium">

            </p>
            <a class="btn btn-info" id="btnShowCSS" onclick="popUpHTML.htmlPopRender(cssLayout, 'This is how a CSS document is structured')"> Show CSS Layout </a>
        </div>
    </div>
</div>

<br>

<!--Row 4 - 1 box Helpful HTML guides / Add-Ons-->
<div class="row" style="text-align: center; height:300px">
    <h1 style="text-align: center"><b><u>Useful HTML Frameworks</u></b></h1>
    <div class="col-xs-2">
        <div id="alertBox" style="margin-left: 15px; margin-top: 40px">
            <div>
                <div id="alertBoxHeader"><b></b></div>
                <div id="alertBoxBody"></div>
            </div>
        </div>
    </div>
    <div class="col-xs-8">
        <h2 style="color:mediumpurple; text-align:center"><b> Bootstrap </b><a href="https://getbootstrap.com/"><img title="Download Bootstrap here!" alt="Bootstrap4 Logo" src="../assets/img/bootstrap-solid.svg" class="topicLogos"></a></h2>
        <p></p>
    </div>
    <div class="col-xs-2"></div>
</div>
<br>
<div class="row" id="shortcuts" style="text-align: center">
    <h1 style="text-align: center"><b><u>Useful keyboard shortcuts! Do you know them all?!</u></b></h1>
    <br>
    <div class="col-xs-4">
        <br>
        <br>
        <br>
        <br>
        <h3 style="text-align: center"> The <b>' <i>TAB</i> '</b> key on your keyboard will indent the line of code by 1 unit</h3>
        <h3 style="text-align: center"> Similarly, <b>' <i>SHIFT</i> '</b> and <b>' <i>TAB</i> '</b> together will indent the code line backwards 1 unit</h3>
        <h3 style="text-align: center"> Using <b>' <i>SHIFT</i> '</b> and <b>' <i>END</i> '</b> keys together will highlight the line of code that the cursor is currently on </h3>
    </div>
    <div class="col-xs-4">
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>S</i> '</b> will save the active document</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>A</i> '</b> will highlight all code on the active document</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>X</i> '</b> will cut out the selected code</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>C</i> '</b> will copy the selected code</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>V</i> '</b> will paste out code that has been copied or cut</h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>Z</i> '</b> will undo your last change to your code - This is similar to the undo button in most word processor based software's </h3>
        <h3 style="text-align: center"> <b>' <i>CTRL</i> '</b> + <b>' <i>Y</i> '</b> will redo the last change you made to your code if <b>'<i>CTRL</i>'</b> + <b>'<i>Z</i>'</b> have been pressed beforehand</h3>
    </div>
    <div class="col-xs-4">
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
    let htmlLayout = '../assets/img/Screenshots/htmlLayout.png';
    let cssLayout = '../assets/img/Screenshots/cssLayout.png';
    function HTMLImagePop()
    {
        this.htmlPopRender = function (img, commentString)
        {
            let htmlPopBox = document.getElementById('popImageBox');

            let winH = window.innerHeight;
            let htmlOverlay = document.getElementById('popImageOverlay');
            htmlOverlay.style.display = "block";
            htmlOverlay.style.height = winH + "px";

            htmlPopBox.style.top = (winH / 2 )- 555 + "px";
            htmlPopBox.style.display = "block";
            document.getElementById('popImageBoxHeader').innerHTML = commentString;
            document.getElementById('popImg').src = img;
            document.getElementById('popImageBoxFooter').innerHTML = ' HTML -> This is the standard and more recognised format, some aspects can be styled and renamed with unique IDs but mainly this is how the core structure appears within most HTML documents.' + '<br>' + 'CSS -> This is not a complete case for all CSS files and there are more options that can be configured to meet your needs but this is a sample of the more common properties.' + '<br>' + '<button onclick="popUpHTML.ok()">OK</button>';
        }
        this.ok = function()
        {
            document.getElementById('popImageOverlay').style.display = "none";
            document.getElementById('popImageBox').style.display = "none";
        }
    }
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

</script>
</body>
</html>
