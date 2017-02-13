<h1>this is a test of php index  with mysql !</h1>

 <?php
$servername = "mysql";
$username = "root";
$password = "123";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mysql", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
