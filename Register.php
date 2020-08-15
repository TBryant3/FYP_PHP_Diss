<?php

require_once "config/dbFunctions.php";

//Initialising variables with blank values
$firstName = $lastName = $username = $email = $psw = $confirm_psw = $country = "";
$firstName_err = $lastName_err  = $username_err  = $email_err  = $psw_err  = $confirm_psw_err  = $country_err  = "";

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
    //First Name Validation
    if (empty(trim($_POST["firstName"])))
    {
        $firstName_err = "Please enter your First Name";
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $firstName))
    {
        $firstName_err = "Only letters and spaces are allowed";
    }
    else
    {
        $firstName = trim($_POST["firstName"]);
    }

    //Last Name Validation
    if (empty(trim($_POST["lastName"])))
    {
        $lastName_err = "Please enter your Last Name";
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $lastName))
    {
        $lastName_err = "Only letters and spaces are allowed";
    }
    else
    {
        $lastName = trim($_POST["lastName"]);
    }

    // Password Validation
    if(empty(trim($_POST["psw"])))
    {
        $psw_err = "Please enter a password.";
    }
    elseif(strlen(trim($_POST["psw"])) < 5)
    {
        $psw_err = "Password must be at least  5 characters.";
    }
    else
    {
        $psw = trim($_POST["psw"]);
    }

    // Confirm Password Validation
    if (empty(trim($_POST["confirm_psw"])))
    {
        $confirm_psw_err = "Please confirm your password";
    }
    else
    {
        $confirm_psw = trim($_POST["confirm_psw"]);
        if (empty($psw_err) && ($psw != $confirm_psw))
        {
            $confirm_psw_err =  "Passwords do not match!";
        }
    }

    // Email Validation
    if (empty(trim($_POST["email"])))
    {
        $email_err = "Please enter your Email address";
    }
    else
    {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $email_err = "Invalid email format";
        }
    }



    // Check for errors before database insertion
    if (empty($username_err) && empty($firstName_err) && empty($lastName_err) && empty($psw_err) && empty($confirm_psw_err) &&empty($email_err) && empty($country_err))
    {
        $sql = "INSERT INTO users (username, firstName, lastName, psw, email, country) VALUES (:username,:firstName,:lastName,:psw,:email,:country)";

        if ($stmt = $dbConnection->prepare($sql))
        {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":firstName", $param_firstName, PDO::PARAM_STR);
            $stmt->bindParam(":lastName", $param_lastName, PDO::PARAM_STR);
            $stmt->bindParam(":psw", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":country", $param_country, PDO::PARAM_STR);


            //Set Parameters
            $param_username = $username;
            $param_firstName = $firstName;
            $param_lastName = $lastName;
            $param_email = $email;
            $param_country = $country;
            //Create psw hash
            $param_password = password_hash($psw, PASSWORD_DEFAULT);

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <a class="nav-link" href="Login.php" style="font-size: medium">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



    <div class="formContainer">
        <h2 style="text-align:center"><b>Register to join our community of Coding Ninja!</b></h2>
        <br>
        <h4 style="text-align:center">Here you can register an account with us!</h4>
        <h4 style="text-align: center ">Its quick and easy and comes with a variety of <a id="benefitsLink" href="aboutUs.php">Benefits</a></h4>
        <br />
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="registerForm">
            <div class="row">
                <div class="col-xs-5"></div>
                <div class="col-xs-7">
                    <!-- Username field -->
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <i class="far fa-id-card"></i>
                        <label for="username" style="width:25%">Username:</label>
                        <input type="text" name="username" placeholder="E.g: CoJoUser1..." class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?> </span>
                    </div>
                    <!-- First name field -->
                    <div class="form-group <?php echo (!empty($firstName_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-user"></i>
                            <label for="firstName" style="width:25%">First Name:</label>
                        <input type="text" name="firstName" placeholder="E.g: Tyler" class="form-control" value="<?php echo $firstName; ?>">
                            <span class="help-block"><?php echo $firstName_err; ?></span>
                    </div>
                    <!-- Last Name field -->
                    <div class="form-group <?php echo (!empty($lastName_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-user"></i>
                            <label for="lastName" style="width:25%">Last Name:</label>
                        <input type="text" name="lastName" placeholder="E.g: Bryant" class="form-control" value="<?php echo $lastName; ?>">
                            <span class="help-block"><?php echo $lastName_err; ?></span>
                    </div>
                    <!-- Email field -->
                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-envelope"></i>
                            <label for="email" style="width:25%">Email:</label>
                        <input type="text" name="email" placeholder="E.g: cojoUser@cojo.co.uk..." class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err; ?> </span>
                    </div>
                    <!-- Password field -->
                    <div class="form-group <?php echo (!empty($psw_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-key"></i>
                            <label for="psw" style="width:25%">Password:</label>
                        <input type="password" name="psw" placeholder="Insert password..." class="form-control" value="<?php echo $psw; ?>">
                            <span class="help-block"><?php echo $psw_err; ?> </span>
                    </div>
                    <!-- Confirm Password field -->
                    <div class="form-group <?php echo (!empty($confirm_psw_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-key"></i>
                            <label for="confirm_psw" style="width:25%">Confirm Password:</label>
                        <input type="password" name="confirm_psw" placeholder="Re-type password..." class="form-control" value="<?php echo $confirm_psw; ?>">
                            <span class="help-block"><?php echo $confirm_psw_err; ?> </span>
                    </div>
                    <div class="form-group <?php echo (!empty($country_err)) ? 'has-error' : ''; ?>">
                        <i class="fa fa-globe"></i>
                            <label for="countryChoice" style="width:10%">Country:</label>
                        <select id="countryChoice">
                            <option value="UK">United Kingdom</option>
                            <option value="USA">United States of America</option>
                            <option value="CAN">Canada</option>
                            <option value="FRA">France</option>
                            <option value="GER">Germany</option>
                            <option value="SPA">Spain</option>
                        </select>
                        <span class="help-block"><?php echo $country_err; ?> </span>
                    </div>

                        <div class="form-group">
                            <p> By creating an account you agree to our <a href="contactUs.php">Terms & Privacy Policy</a>!</p>
                            <input type="submit" value="Register" class="btn btn-primary" style="margin-right: 1%;border-radius:3%; height:5%; width:10%"><input type="reset" value="Reset" class="btn btn-default" style="margin-right: 1%;border-radius:3%; height:5%; width:10%">
                            <p><b style="font-size:medium"> OR  </b> Already have an account? <a href="Login.php" style="font-size:medium">Sign In here</a>!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
