<?php
require "connect.php";

// ลองให้โชว์ข้อมูล customer

$sql = "SELECT * FROM customer"; //อ บอกว่าเขียนประโยคหน้าตาเหมือน sql
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
print_r($result);
