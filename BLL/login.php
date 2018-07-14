<?php
$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "ucs_db"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
$connection = new PDO($dsn, $username, $password, $options);

$sql = "SELECT * 
				FROM users
				";



$statement = $connection->prepare($sql);
$statement->execute();

$result = $statement->fetchAll();
echo $result->id;

?>