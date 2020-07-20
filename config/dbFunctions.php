<?php

const DB_SERVER = 'fyphost';
const DB_USER = 'fypdb_<users username>';
const DB_PASSWORD = 'fypdb_<users psw>';
const DB_DATABASE = 'fypdb_<users username>';

function getConnection()
{
    $dataSourceName = 'mysql:dbname='.DB_DATABASE.';host='.DB_SERVER;
    $dbConnection = null;

    /* Attempt to connect to MySQL database */
    try
    {
        $dbConnection = new PDO($dataSourceName, DB_USER, DB_PASSWORD);
        // Set the PDO error mode to exception

    } catch(PDOException $err)
    {
        echo('ERROR: Could not connect. ', $err->getMessage());
    }
    return $dbConnection;
}
