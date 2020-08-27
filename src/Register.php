<?php

require '../config/dbFunctions.php';
session_start();

if (isset($_POST['btnRegister']))
{
    $username = trim($_POST["username"]);
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $psw = trim($_POST["psw"]);
    $confirm_psw = trim($_POST["confirm_psw"]);
    $country = $_POST["country"];

    ////////////////////////////////////////////////
    // Check if username details have been input  //
    // and if the username exists or not          //
    ////////////////////////////////////////////////
    if(empty(trim($_POST["username"])))
    {
        $messageErr[] = 'Please insert a username for yourself';
    }

    ///////////////////////////
    ///First name Validation///
    ///////////////////////////
    else if(empty(trim($_POST["firstName"])))
    {
        $messageErr[] = 'Please insert your first name';
    }
    else if(!preg_match("/^[a-zA-Z ]*$/", $firstName))
    {
        $messageErr[] = "Only letters are allowed in your first name";
    }

    ////////////////////////
    //Last name Validation//
    ////////////////////////
    else if(empty(trim($_POST["lastName"])))
    {
        $messageErr[] = "Please enter your last Name";
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $lastName))
    {
        $messageErr[] = "Only letters are allowed in your last name";
    }

    ////////////////////////
    // Email empty or not///
    ////////////////////////
    else if(empty(trim($_POST["email"])))
    {
        $messageErr[] = 'Please insert your email address';
    }
    // Email validation //
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $messageErr[] = "Invalid email format";
    }

    ////////////////////////
    // Password validation//
    ////////////////////////
    else if(empty(trim($_POST["psw"]))|| empty(trim($_POST["confirm_psw"])))
    {
        $messageErr[] = 'Please a password has been input and confirmed correctly';
    }
    else if($psw != $confirm_psw)
    {
        $messageErr[] =  "Passwords do not match!";
    }
    else if(strlen(trim($_POST["psw"])) < 5)
    {
        $messageErr[] = "Password must be at least  5 characters";
    }
    else
    {
        try
        {
            //SQL statement to get username and email
            $stmt = $connection->prepare("SELECT username, email FROM users WHERE  username=:username OR email=:email");
            $stmt->execute(array(':username'=>$username, ':email'=>$email));
            //Checking the db
            $count = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($count["username"]==$username)
            {
                $messageErr[] = "The Username inserted already exists in our database";
            }
            else if ($count["email"]==$email)
            {
                $messageErr[] = "This email address already exists in our database";
            }
            else if (!isset($messageErr))
            {
                $hashedPsw = password_hash($psw, PASSWORD_DEFAULT);

                $stmt = $connection->prepare("INSERT INTO users (username, firstName, lastName, psw, email, country) VALUES (:username, :firstName, :lastName,:psw, :email, :country)");

                if ($stmt->execute(array( ':username'=> $username, ':firstName'=>$firstName, ':lastName'=>$lastName,':psw'=>$hashedPsw, ':email'=>$email, ':country'=>$country)))
                {
                    $messageConfirm = "<h1>Registration has been completed!</h1>";
                    header("refresh:1; Login.php");
                }
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>

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




<div>
    <h2 style="text-align:center"><b>Register to join our community of Coding Ninja!</b></h2>
    <br>
    <h4 style="text-align:center">Here you can register an account with us!</h4>
    <h4 style="text-align: center ">Its quick and easy and comes with a variety of <a id="benefitsLink" href="aboutUs.php">Benefits</a></h4>
    <br />
    <?php
    if(isset($messageErr))
    {
       foreach($messageErr as $error)
        {
        ?>
            <div class="alert alert-danger" style="text-align: center; width:50%; margin-left: 25%; margin-right:25%">
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

    <form method="post" action="Register.php" id="registerForm">
    <div class="row">

        <div class="col-xs-5"></div>
        <div class="col-xs-7">
            <!-- Username field -->
        <div class="form-group">
            <i class="far fa-id-card"></i>
            <label for="username" style="width:25%">Username:
            <input type="text" name="username" placeholder="E.g: CoJoUser1..." class="form-control">
            </label>
        </div>
        <!-- First name field -->
        <div class="form-group">
            <i class="fa fa-user"></i>
                <label for="firstName" style="width:25%">First Name:
            <input type="text" name="firstName" placeholder="E.g: Tyler" class="form-control">
                </label>
        </div>
        <!-- Last Name field -->
        <div class="form-group">
            <i class="fa fa-user"></i>
                <label for="lastName" style="width:25%">Last Name:
            <input type="text" name="lastName" placeholder="E.g: Bryant" class="form-control">
                </label>
        </div>
        <!-- Email field -->
        <div class="form-group">
            <i class="fa fa-envelope"></i>
                <label for="email" style="width:25%">Email:
            <input type="text" name="email" placeholder="E.g: cojoUser@cojo.co.uk..." class="form-control">
                </label>
        </div>
        <!-- Password field -->
        <div class="form-group">
            <i class="fa fa-key"></i>
                <label for="psw" style="width:25%">Password:
            <input type="password" name="psw" placeholder="Insert password..." class="form-control">
                </label>
        </div>
        <!-- Confirm Password field -->
        <div class="form-group">
            <i class="fa fa-key"></i>
                <label for="confirm_psw" style="width:25%">Confirm Password:
            <input type="password" name="confirm_psw" placeholder="Re-type password..." class="form-control">
                </label>
        </div>
        <div class="form-group">
            <i class="fa fa-globe"></i>
                <label for="country" style="width:10%">Country:</label>
            <select name="country">
                <option value="UK">United Kingdom</option>
                <option value="USA">United States of America</option>
                <option value="CAN">Canada</option>
                <option value="FRA">France</option>
                <option value="GER">Germany</option>
                <option value="SPA">Spain</option>
            </select>
        </div>
            <div class="form-group">
                <p> By creating an account you agree to our <a href="Terms_Conditions.php">Terms & Privacy Policy</a>!</p>
                <input type="submit" value="Register"  name="btnRegister"  class="btn btn-primary" style="margin-right: 1%;border-radius:3%; height:5%; width:10%"><input type="reset" value="Reset" class="btn btn-default" style="margin-right: 1%;border-radius:3%; height:5%; width:10%">
                <p><b style="font-size:medium"> OR  </b> Already have an account? <a href="Login.php" style="font-size:medium">Sign In here</a>!</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
