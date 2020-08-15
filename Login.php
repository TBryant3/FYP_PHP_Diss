<?php
// Initialise session
session_start();

//Is user logged in already or not?! Redirect to account page if so
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: account.php");
    exit;
}

require_once "config/dbfunctions.php";

//Defining & Initialising login variables
$username = $psw = "";
$username_err = $psw_err = "";

//Form submit process
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Check if username is empty & remove white space
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    }
    else
    {
        $username = trim($_POST["username"]);
    }
    // Check if password is empty & remove white space
    if(empty(trim($_POST["psw"])))
    {
        $psw_err = "Please enter your password.";
    }
    else
    {
        $psw = trim($_POST["psw"]);
    }


    // Validate credentials //
    if(empty($username_err) && empty($psw_err))
    {
        // Select statement to/from db
        $sql = "SELECT userID, username, psw FROM users WHERE username = :username";

        if ($stmt = $dbConnection->prepare($sql))
        {
            //Bind variable parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            //Set parameters
            $param_username = trim($_POST["username"]);

            //Execute statement
            if ($stmt->execute())
            {
                if ($stmt->rowCount() == 1)
                {
                    if ($row = $stmt->fetch())
                    {
                        $userID = $row["userID"];
                        $username = $row["username"];
                        $hashed_password = $row["psw"];
                        if (password_verify($psw, $hashed_password))
                        {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["userID"] = $userID;
                            $_SESSION["username"] = $username;

                            //Redirect to account page on success
                            header("location: account.php");
                        }
                        else
                        {
                            $psw_err = "The password you entered was incorrect, please try again!";
                        }
                    }
                }
                else
                {
                    $username_err = "The username entered doesn't match with our system, please try again!";
                }
            }
            else
            {
                echo "Whoops, seems like something went wrong. Please try again!";
            }
            // Close statement
            unset($stmt);
        }
    }
    // Close connection
    unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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

        /*.submit:hover {*/
        /*    background-color: darkgray;*/
        /*}*/
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
                        <a class="nav-link" href="Register.php" style="font-size: medium">Register</a>
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
            <div class="col-xs-5"></div>
            <div class="col-xs-3">
                <div class="row" style="width:100%">
                    <i class="fa fa-user"></i>
                    <label for="username" style="width:25%">Username:</label>
                    <input type="text" name="username" placeholder="Insert username..." class="form-control" required />
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-key"></i>
                    <label for="psw" style="width:24.5%">Password:</label>
                    <input type="password" name="password" placeholder="Insert password..." class="form-control" style="margin: 0" required />
                    <p>Forgotten your password? <a href="forgotPsw.php">Click me to recover</a>!</p>
                </div>
            </div>
                <br />
                <div id="signin-container" style="padding-left:5%">
                    <p><input type="submit" value="Login" class="btn btn-info" style="margin-right: 1%;border-radius:3%; height:5%; width:8%"><b style="font-size:medium"> OR </b> Don't already have an account? <a href="Register.php">Register here</a>!</p>
                </div>
            <div class="col-xs-4"></div>
            </div>
        </div>
</form>


</body>
</html>