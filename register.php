<?php

$servername = "sots.brookes.ac.uk";
$database = "18075911";
$username = "18075911";
$password = "ugcsvqcpvaju";
$charset = "utf8mb4";

try {

$dsn = "mysql:host=$servername;dbname=$database;charset=$charset";
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo “Connection Okay”;

return $pdo

}

catch (PDOException $e)

{
echo “Connection failed: ”. $e->getMessage();
}

?>