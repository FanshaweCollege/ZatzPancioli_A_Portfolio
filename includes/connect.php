<?php
$servername = "107.180.46.158";
$username = "annapancioli";
$password = "Na090416#";

try {
    $conn = new PDO("mysql:host=$servername;dbname=db_annapancioli_portfolio", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>