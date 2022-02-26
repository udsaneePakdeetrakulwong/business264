<html>
<head>
<title>Show Customer Information 22</title>
</head>
<body>
<?php
    try {
        require "connect.php";

        $sql = "SELECT CustomerID, Birthdate, CountryCode, OutstandingDebt 
                FROM customer";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //แบบที่ 1
        // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //     echo "<br>" . "รหัสลูกค้าของฉันแบบที่ 1 : " . $result["CustomerID"] . 
        //     " วันเกิด : " . $result["Birthdate"] .
        //     " ยอดหนี้ : " . $result["OutstandingDebt"];
        // }

        // //แบบที่ 2
        while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
            echo "<br>" . "ชื่อลูกค้า : " . $result[0] . " Email : "
                . $result[2]      . $result[3]  ;
        }

    } catch (PDOException $e) {

        echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : " . $e->getMessage();
    }
    
    $conn = null;
?>

</body>
</html>
