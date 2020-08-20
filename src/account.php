<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>

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

    <style>
        p
        {
            text-align: center;
        }
        h2
        {
            margin: 5px;
        }
    </style>

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
                </ul>
            </div>
        </div>
    </div>
</div>




    
<div class="Welcoming">
    <h1 style="text-align:center">Hi - <b><?php echo htmlspecialchars($_SESSION["username"]); ?> </b> - <i class="fas fa-user-ninja fa-2x"></i></h1>
    <h2 style="text-align:center">Welcome to your Account Page!</h2>
</div>
<div class="container">
    <h1 style="text-align:center">Account Break-down</h1>
    <div class="row" id="accBreakdown" style="border:double">
        <div class="col-md-4">
            <h2 style="text-align:center"><strong>Topics</strong></h2>
            <!-----------First Accordion for Topics ----------->
            <div id="topicAccordion">
                <h3>HTML & CSS</h3>
                <!-----------Smaller Accordion within to show sub-sections----------->
                <div id="htmlAcc">
                    <h3>Module 1</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                    <h3>Module 2</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                    <h3>Module 3</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                </div>
                <h3>C#</h3>
                <div id="cSharpAcc">
                    <h3>Module 1</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                    <h3>Module 2</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                    <h3>Module 3</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                </div>
                <h3>C++</h3>
                <div id="cPlusAcc">
                    <h3>Module 1</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                    <h3>Module 2</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                    <h3>Module 3</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                </div>
                <h3>JavaScript</h3>
                <div id="javaScriptAcc">
                    <h3>Module 1</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                    <h3>Module 2</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>>
                    <h3>Module 3</h3>
                    <p> For this Module, you have achieved: <b>#VALUE</b> % </p>
                </div>
            </div>
        </div>
        <!-----------Second Accordion for Tests ----------->
        <div class="col-md-4">
            <h2 style="text-align:center"><strong>Test Yourself</strong></h2>
            <div id="testAccordion">
                <h3>HTML Tests</h3>
                <div id="htmlTestAcc">
                    <h3>Test 1</h3>
                    <p> Test Result</p>
                    <h3>Test 2</h3>
                    <p> Test Result</p>
                    <h3>Test 3</h3>
                    <p>Test Result</p>
                </div>
                <h3>C#</h3>
                <div id="cSharpTestAcc">
                    <h3>Test 1</h3>
                    <p> Test Result</p>
                    <h3>Test 2</h3>
                    <p> Test Result</p>
                    <h3>Test 3</h3>
                    <p>Test Result</p>
                </div>
                <h3>C++</h3>
                <div id="cPlusTestAcc">
                    <h3>Test 1</h3>
                    <p> Test Result</p>
                    <h3>Test 2</h3>
                    <p> Test Result</p>
                    <h3>Test 3</h3>
                    <p>Test Result</p>
                </div>
                <h3>JavaScript</h3>
                <div id="javaScriptTestAcc">
                    <h3>Test 1</h3>
                    <p> Test Result</p>
                    <h3>Test 2</h3>
                    <p> Test Result</p>
                    <h3>Test 3</h3>
                    <p>Test Result</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h2 style="text-align:center"><strong>Favourites</strong></h2>
            <h3 style="text-align:center">Selected Starred Topics which will be shown here</h3>
        </div>
        <br />
    </div>
    <br />
    <!-----------Row 2 - Resume from Last------------>
      
    <div class="row" id="resumeSection" style="border:double">
        <div class="col-md-6" style="border:solid">
            <h1 style="text-align:left"><u>Pick-up where you left off?</u></h1>
            <br />
            <h3 style="text-align:left"><strong>Current Topic:</strong>(#TOPIC#\ |+| /#MODULE#)</h3><!--### Obtain these from saved session log ###-->
            <div>
                <button style="float:left">Let's Go!</button>

            </div>
        </div>        
        <div class="col-md-6" style="border:solid">
            <h1 style="text-align:right"><u>Reflect on your past?</u></h1>
            <br />
            <h3 style="text-align:right"><strong>Last Test Attempted:</strong>(#TOPIC#\ |+| /#MODULE#)</h3><!--### Obtain these from saved session log - Database ###-->
            <div>
                <button style="float:right">Take me there</button>
                
            </div>            
        </div>
        <br />
    </div>
    <br />
    <!-----------Row 3 - Badge Case ----------->
    <h1 style="text-align:center">Badge Case</h1>
    <h3 style="text-align:center">Here you will see all of the badges which you have collected throughout the application and view the ones you're still missing</h3>

    <div class="row" id="badgesRow1" style="border:double">
        <h2 style="text-align:center"><u>Tier 1 Badges</u></h2>
        <div class="col-md-2"></div>

        <div class="col-md-2" style="text-align:center">
            <h4 style="text-align:center">Badge 1</h4>
            <span id="badge1"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>
        <div class="col-md-2" style="text-align:center">
            <h4 style="text-align:center">Badge 2</h4>
            <span id="badge2"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>
        <div class="col-md-2" style="text-align:center">
            <h4 style="text-align:center">Badge 3</h4>
            <span id="badge3"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>
        <div class="col-md-2" style="text-align:center">
            <h4 style="text-align:center">Badge 4</h4>
            <span id="badge4"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>
        <!--style="border:dashed"-->
        <div class="col-md-2"></div>
    </div>
    <div class="row" id="badgesRow2" style="border:double">
        <h2 style="text-align:center">Tier 2 Badges</h2>
        <div class="col-md-2"></div>

        <div class="col-md-2" style="border:dashed; text-align:center">
            <h4 style="text-align:center">Badge 5</h4>
            <span id="badge1"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>
        <div class="col-md-2" style="border:dashed; text-align:center">
            <h4 style="text-align:center">Badge 6</h4>
            <span id="badge2"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>
        <div class="col-md-2" style="border:dashed; text-align:center">
            <h4 style="text-align:center">Badge 7</h4>
            <span id="badge3"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>
        <div class="col-md-2" style="border:dashed;text-align:center">
            <h4 style="text-align:center">Badge 8</h4>
            <span id="badge4"><i class="fab fa-html5 fa-3x"></i></span>
            <h5 class="isObtained" style="text-align:center; font-style:oblique">Not Obtained</h5>
        </div>

        <div class="col-md-2"></div>

    </div>
</div>


</body>
</html>


// JS SCRIPTS //

<script>
    // Function which sets the options for the accordion elements //
    function collapseHeadings()
    {        // Topics main Accordion element
        $("#topicAccordion").accordion(
            {
                active: false, // Is not open on load //
                collapsible: true, // Can be collapsed //
                heightStyle: "content", // Matches height of its contents //
                animate: 150, // Time in milliseconds of how fast the tabs open //
            });
        // 4 Sub-Topics Accordion elements within parent div for grouping //
        $("#htmlAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        $("#cSharpAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        $("#cPlusAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        $("#javaScriptAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        // Test Accordion (P)
        $("#testAccordion").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        $("#htmlTestAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        $("#cSharpTestAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        $("#cPlusTestAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
        $("#javaScriptTestAcc").accordion(
            {
                active: false,
                collapsible: true,
                heightStyle: "content",
                animate: 150,
            });
    }
    collapseHeadings();

</script>