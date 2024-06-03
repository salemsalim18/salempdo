<?php
 
$host = "localhost";
$db   = 'test';
$user = 'root';
$pass = '';
 
$dsn = "mysql:host=$host;dbname=$db;";
 
try
{
     $pdo = new PDO($dsn, $user, $pass);
     echo "Connected to database " . $host;
}
catch (PDOException $e) {
    echo $e;
}
?>