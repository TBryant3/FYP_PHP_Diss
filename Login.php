<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!--Browser version support-->
    <script src="/scripts/modernizr-2.8.3.js"></script>
    <!--jQuery Link-->
    <script src="/scripts/jquery-3.4.1.js"></script>
    <!--jQuery-UI Link-->
    <script src="/scripts/jquery-ui-1.12.1.js"></script>
    <!-- Bootstrap -->
    <script src="/scripts/bootstrap.js"></script>
    <!--Personal Icons-->
    <script src="https://kit.fontawesome.com/70ac388725.js" crossorigin="anonymous"></script>

    <!-- Stylesheets -->
    <link href="/styles/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/styles/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="/styles/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="/styles/Site.css" rel="stylesheet" type="text/css" />
    <link href="/styles/allTopicStyles.css" rel="stylesheet" type="text/css" />

    <style>
        .formContainer {
            padding: 1%;
            background-color: white;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 1%;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
        }

        #signin-container {
            background-color: white;
            border: none;
        }

        .submit:hover {
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


<form method="post" id="loginForm" runat="server">
    <div class="formContainer">
        <h2 style="text-align:center"><strong>Login to access your Inner Warrior!</strong></h2>
        <br>
        <h4 style="text-align:center">Login to unlock all of the features exclusive to your account!</h4>
        <h4 style="text-align: center ">See your total progress within each Topic and be able to track your test scores and progress from your <a href="account.php">Account </a>page!</h4>
        <br />
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="row" style="width:100%">
                    <i class="fa fa-user"></i>
                    <label for="username" style="width:25%">Username:</label>
                    <input type="text" name="username" placeholder="Insert username..." required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-key"></i>
                    <label for="psw" style="width:24.5%">Password:</label>
                    <input type="password" name="psw" placeholder="Insert password..." required>
                </div>
                    <p style="padding-left:26%">Forgotten your password? <a href="forgotPsw.php">Click me to recover</a>!</p>
                
                <br />
                <div id="signin-container" style="padding-left:5%">
                    <p><input type="submit" value="Login" class="submit" style="margin-right: 1%;border-radius:3%; height:15%; width:15%"><b style="font-size:medium"> OR </b> Don't already have an account? <a href="Register.php">Register here</a>!</p>
                </div>
            </div>            
        </div>
    </div>
</form>


</body>
</html>