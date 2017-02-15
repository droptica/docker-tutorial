<h1>this is a test of php index  with mysql !</h1>

 <?php
$servername = "mysql";
$username = "root";
$password = "123";
$dbname = "db";

try {
    $pdo = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
    $pdo->query("use $dbname");
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
