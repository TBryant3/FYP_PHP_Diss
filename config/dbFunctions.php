<?php
// Server and db declarations
const DB_SERVER = 'fyphost';
const DB_DATABASE = 'fypdb';
const DB_USER = 'root';
const DB_PASSWORD = '';


    /* Attempt to connect to MySQL database */
    try
    {
        $dbConnection = new PDO("mysql:'host=".DB_SERVER.";dbname=".DB_DATABASE,DB_USER,DB_PASSWORD);
        // Set the PDO error mode to exception
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";
    } catch(PDOException $err)
    {
        die('ERROR: Could not connect. '. $err->getMessage());
    }
?>


<!--//function getAll($users)-->
<!--//{-->
<!--//    $sql = getConnection()->prepare("SELECT * FROM".$users);-->
<!--//    $sql->execute();-->
<!--//    return $sql->fetchAll(PDO::FETCH_ASSOC);-->
<!--//}-->

