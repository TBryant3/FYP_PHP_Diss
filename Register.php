<?php

require_once "config/dbFunctions.php";

//Initialising variables with blank values
$first_name = $last_name = $username = $email = $password = $confirm_psw = $country = "";
$first_name_err = $last_name_err  = $username_err  = $email_err  = $password_err  = $confirm_psw_err  = $country_err  = "";

// On form submit - Process data
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Username Validation
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter a username";
    }
    else
    {
        $sql = "SELECT userID FROM users WHERE username = :username";

        if ($stmt = $dbConnection->prepare($sql))
        {
            //Bind parameters to prepared statement ($stmt)
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Set username parameter
            $param_username = trim($_POST["username"]);

            //Execute prepared statement
            if ($stmt->execute())
            {
                if ($stmt->rowCount() == 1)
                {
                    $username_err = "This username is already taken!";
                }
                else
                {
                    $username = trim($_POST["username"]);
                }
            }
            else
            {
                echo "Sorry! Something has gone wrong, please try again!";
            }
            //Close statement
            unset($stmt);
        }
    }


    // Validate Password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 5) {
        $password_err = "Password must be at least  5 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate Confirm Password
    if (empty(trim($_POST["confirm_psw"])))
    {
        $confirm_psw_err = "Please confirm your password";
    }
    else {
        $confirm_psw = trim($_POST["confirm_psw"]);
        if (empty($password_err) && ($password != $confirm_psw))
        {
            $confirm_psw_err =  "Passwords do not match!";
        }
    }



    // Check for errors before database insertion
    if (empty($username_err) && empty($first_name_err) && empty($last_name_err) && empty($password_err) && empty($confirm_psw_err) &&empty($email_err) && empty($country_err))
    {
        $sql = "INSERT INTO users (username, first_name, last_name, password, email, country) VALUES (:username,:first_name,:last_name,:password,:email,:country)";

        if ($stmt = $dbConnection->prepare($sql))
        {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            //Set Parameters
            $param_username = $username;
            //Create psw hash
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            //Execute statement
            if ($stmt->execute())
            {
                header("location: Login.php");
            }
            else
            {
                echo "Whoops, seems like something has gone wrong! Please try again.";
            }

            //Close statement
            unset($stmt);
        }
    }
    //Close connection
    unset($dbConnection);
}
?>


<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoJō Register Page</title>

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

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="registerForm">
    <div class="formContainer">
        <h2 style="text-align:center"><strong>Register to join our community of Coding Ninja!</strong></h2>
        <br>
        <h4 style="text-align:center">Here you can register an account with us!</h4>
        <h4 style="text-align: center ">Its quick and easy and comes with a variety of <a id="benefitsLink" href="aboutUs.php">Benefits</a></h4>
        <br />
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5">
                <div class="row" style="width:100%">
                    @*<div class="col-md-4">*@
                        <i class="fa fa-user"></i>
                        <label for="first_name" style="width:25%">First Name:</label>
                        <input type="text" name="first_name" placeholder="E.g: Tyler" required>
                        @*</div>*@
                    <br />
                    @*<div class="col-md-4">*@
                        <i class="fa fa-user"></i>
                        <label for="last_name" style="width:25%">Last Name:</label>
                        <input type="text" name="last_name" placeholder="E.g: Bryant" required>
                        @*</div>*@
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="far fa-id-card"></i>
                    <label for="username" style="width:25%">Username:</label>
                    <input type="text" name="username" placeholder="E.g: cojoUser1..." required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-envelope"></i>
                    <label for="email" style="width:25%">Email:</label>
                    <input type="text" name="email" placeholder="E.g: cojoUser@cojo.co.uk..." required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-key"></i>
                    <label for="password" style="width:25%">Password:</label>
                    <input type="password" name="password" placeholder="Insert password..." required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-key"></i>
                    <label for="confirm_psw" style="width:25%">Confirm Password:</label>
                    <input type="password" name="confirm_psw" placeholder="Re-type password..." required>
                </div>
                <br />
                <div class="row" style="width:100%">
                    <i class="fa fa-globe"></i>
                    <label for="country" style="width:25%">Country:</label>
                    <select id="countryChoice">
                        <option value="UK">United Kingdom</option>
                        <option value="USA">United States of America</option>
                        <option value="CAN">Canada</option>
                        <option value="FRA">France</option>
                        <option value="GER">Germany</option>
                        <option value="SPA">Spain</option>
                    </select>
                </div>
                <br>
                <div class="row" style="width:100%">
                    <p>By creating an account you agree to our <a href="contactUs.php">Terms & Privacy Policy</a>!</p>
                    <div id="signin-container" style="padding-left:5%">
                        <p><input type="submit" value="Register" class="submit" style="margin-right: 1%;border-radius:5%; height:15%; width:20%;"><b style="font-size:medium"> OR </b> Already have an account? <a href="Login.php">Sign In here</a>!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
