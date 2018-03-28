<?php
$connection_info = parse_ini_file(__DIR__."/../config/db.ini", true);
$mysql = $connection_info['mysql'];

try {
    $conn = new PDO("mysql:host=".$mysql['host'].";dbname=".$mysql['dbname'], $mysql['user'], $mysql['password']);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>