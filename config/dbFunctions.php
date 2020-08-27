<?php

// Server and db declarations
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'fypdb';

try
{
//Create connection to db
    $connection = new PDO("mysql:host=$server;dbname=$db", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


if (isset($_SESSION["username"]))
{
    $_SESSION["username"] = $user["username"];
}


