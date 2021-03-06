<?php

require '../config/dbFunctions.php';
session_start();

    if (isset($_SESSION["username"]))
    {
        header("location: account.php");
    }

    if (isset($_POST['btnLogin']))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        //Check if username and password have been input
        if (empty($username))
        {
            $messageErr[] = 'All fields are required';
        }
        else if (empty($password))
        {
            $messageErr[] = 'All fields are required';
        }
        else
        {
            try
            {
                $stmt = $connection->prepare("SELECT * FROM users WHERE username=:uName");
                $stmt->execute(array(':uName' => $username));
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($stmt->rowCount() > 0)
                {
                    if ($username==$user["username"])
                    {
                        if (password_verify($password, $user["psw"]))
                        {
                            $_SESSION["username"] = $user["username"];
                            $messageConfirm = "Login Successful";
                            header("refresh:1; account.php");
                        }
                        else
                        {
                            $messageErr[] = "That is the wrong password for this account";
                        }
                    }
                    else
                    {
                        $messageErr[] = "That is not a username in our database";
                    }
                }
                else
                {
                    $messageErr[] = 'The Username OR Password inserted does not match our database';
                }
            }
            catch(PDOException $err)
            {
                echo $err->getMessage();
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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
        #projectLogo
        {
            width:15%;
            height:15%;
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
                        <a class="nav-link" href="Register.php" style="font-size: medium">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




<?php
if (isset($messageErr))
{
    foreach($messageErr as $error)
    {
        ?>
        <div class="alert alert-danger" style="text-align: center">
            <b>Error: <?php echo $error; ?> </b>
        </div>
        <?php
    }
}
if (isset($messageConfirm))
{
    ?>
    <div class="alert alert-success" style="text-align: center">
        <b><?php echo $messageConfirm; ?> </b>
    </div>
    <?php
}
?>

<form method="post" id="loginForm" action="Login.php">
    <div class="formContainer">
        <h2 style="text-align:center"><b>Login to access your Inner Warrior!</b></h2>
        <br>
        <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <div class="text-center">
                    <img src="../assets/img/CoJo_Logo.png" alt="Cojo Logo" id="projectLogo">
                </div>
            </div>
            <div class="col-xs-4"></div>
        </div>
        <h4 style="text-align:center">Login to unlock all of the features exclusive to your account!</h4>
        <h4 style="text-align: center ">See your total progress within each Topic and be able to track your test scores and progress from your <a href="account.php">Account </a>page!</h4>
        <br>
        <div class="row" style="text-align: center">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <i class="fa fa-user"></i>
                <label for="username" style="width:35%">
                    Username:<input type="text" name="username" placeholder="Insert username..." class="form-control" />
                </label>
            </div>
            <div class="col-xs-4"></div>
        </div>
        <div class="row" style="text-align: center">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <i class="fa fa-key"></i>
                <label for="password" style="width:35%">
                    Password:<input type="password" name="password" placeholder="Insert password..." class="form-control" />
                </label>
                <p>Forgotten your password? <a href="forgotPsw.php"> Click me to recover</a>!</p>
            </div>
            <div class="col-xs-4"></div>
        </div>
        <div class="row" style="text-align: center">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <div id="signin-container" style="text-align: center">
                    <p>
                        <input type="submit" value="Login" class="btn btn-info" name="btnLogin" style="border-radius:3%" >
                        <br>
                        <br>
                        <b style="font-size:large"> OR </b>
                        <br>
                        <br>
                        Don't already have an account?
                        <br>
                        <a href="Register.php" style="font-size:medium" >Register here</a>!
                    </p>
                </div>
            </div>
            <div class="col-xs-4"></div>
        </div>
    </div>
</form>
</body>
</html>