<?php

$serverName = "localhost";
$dbName = "business";
$userName = "root";
$userPassword = "12345678";

$conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8;",$userName,$userPassword);

?>