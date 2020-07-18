<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgotten Password</title>

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

    <style>
        input[type=text]{
            width: 100%;
            padding: 1%;
            display: inline-block;

        }
        input[type=text]:focus
        {
            background-color: #ddd;
        }

        .formContainer
        {
            padding: 1%;
            background-color: white;
        }
        .submit:hover
        {
            background-color: darkgray;
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





<form method="post" id="forgotPSWForm" action="">
    <div class="formContainer">
        <h2 style="text-align:center"><strong>@ViewBag.Message</strong></h2>
        <br>
        <h4 style="text-align:center">Here you can reset your password!</h4>
        <h4 style="text-align: center ">You will be sent an email with instructions on what to do</h4>
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4 style="text-align:center">Either input the Username of your account...</h4>
                <div class="row" style="width:100%; padding-left:10%">
                    <label for="username" style="width:25%; text-align:right">Username:</label>
                    <input type="text" name="username" placeholder="E.g: cojoUser1..." required>
                </div>
                <br />
                <h1 style="text-align:center"><b>OR</b></h1>
                <br />
                <h4 style="text-align:center">Input the email address that is linked to your account</h4>
                <div class="row" style="width:100%; padding-left:10%">
                    <label for="email" style="width:25%; text-align:right; padding-left:5%"><b>Email:</b></label>
                    <input type="text" name="email" placeholder="E.g: cojoUser@cojo.co.uk..." required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <span style="padding-left:38%"><input type="submit" value="Submit" class="submit" style="border-radius:5%; height:15%; width:20%;"></span>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</form>

</body>
</html>