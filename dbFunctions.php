<?php
const DB_SERVER = 'fyphost';
const DB_USERNAME = 'fypdb_<users_root';
const DB_PASSWORD = 'Admin123';
const DB_NAME = 'fypdb';


/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>