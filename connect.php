<html>
<head>
   <title>Udsanee - Business</title>
</head>
<body>
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "12345678";
$dbname = "business";

try
{
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname;charset=UTF8",
        $userName, $userPassword);

    if ($conn) {
        echo "You are now connecting to database!!!";
    }
} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}
?>
</body>
</html>