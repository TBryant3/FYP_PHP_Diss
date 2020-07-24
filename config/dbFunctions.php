<?php

const DB_SERVER = 'fyphost';
const DB_DATABASE = 'fypdb';
const DB_USER = 'fypdb_<users username>';
const DB_PASSWORD = 'fypdb_<users psw>';


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
        echo'ERROR: Could not connect. ', $err->getMessage();
    }
    return $dbConnection;
}

function getAll($users)
{
    $sql = getConnection()->prepare("SELECT * FROM".$users);
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
