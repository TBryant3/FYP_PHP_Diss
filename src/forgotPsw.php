<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgotten Password</title>

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
        input[type=text], input[type=password]
        {
            width: 100%;
            padding: 1%;
        }
        input[type=text]:focus, input[type=password]:focus
        {
            background-color: #ddd;
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
                    <li class="nav-item">
                        <a class="nav-link" href="Register.php" style="font-size: medium">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<form method="post" id="forgotPSWForm"> <!--action="formSubmit"-->
    <div class="formContainer">
        <h2 style="text-align:center">User Password Recovery</h2>
        <br>
        <h4 style="text-align:center">Here you can reset your password!</h4>
        <h4 style="text-align: center ">You will be sent an email with instructions on what to do</h4>
        <br />
        <div class="row" style="text-align: center">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <i class="fa fa-user"></i>
                <label for="username" style="width:35%">
                    Username:<input type="text" name="username" placeholder="Insert username..." class="form-control" required />
                </label>
            </div>
            <div class="col-xs-4"></div>
        </div>
        <h1 style="text-align: center"><b>OR</b></h1>
        <div class="row" style="text-align: center">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <i class="fa fa-user"></i>
                <label for="email" style="width:35%">
                    Email:<input type="text" name="email" placeholder="E.g: cojoUser@cojo.co.uk..." required />
                </label>
            </div>
            <div class="col-xs-4"></div>
        </div>
        <br />
        <div class="row" style="text-align: center">
            <span><input type="submit" value="Submit"  onclick="alert('Check your emails for password reset code \n [THIS FEATURE IS NOT CURRENTLY WORKING]')" style="border-radius:5%; height:15%; width:20%;"></span>
        </div>
        <div class="col-md-3"></div>
    </div>
</form>

</body>
</html>