<!DOCTYPE html>
<html lang="en">
<body>
<?php
// Server and db declarations
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'fypdb';

//Create connection to db
//$connection = new mysqli('localhost', 'admin', 'adminpass', 'fypdb');
$connection = new mysqli($server, $username, $password, $db);
// Check connection, error is issue
if ($connection->connect_error)
{
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT userID, firstName, lastName FROM users";
$result= $connection->query($sql);

//If results exist
if ($result->num_rows > 0)
{
    echo "<table><tr><th>UserID</th><th>Name</th></tr>";

    //output
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row["userID"]."</td><td>".$row["firstName"]." ".$row["lastName"]."</td></tr>";
    }
    echo "</table>";
}
else
{
    echo "0 results";
}
$connection->close();

?>


</body>
</html>