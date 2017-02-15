<h1>this is a test of php index  with mysql !</h1>

 <?php

$servername = "mysql5";
$username = "root";
$password = "123";
$dbname = "db";

try {
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $pdo->query("use $dbname");
    echo "Connected successfully to mysql 5.6";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

<br/>

<?php

$servername = "mysql8";
$username = "root";
$password = "123";
$dbname = "db";

try {
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $pdo->query("use $dbname");
    echo "Connected successfully also to mysql 8";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
