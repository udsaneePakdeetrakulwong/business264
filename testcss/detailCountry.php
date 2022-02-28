<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
   
</head>

<body>
    <?php
    if (isset($_GET["CustomerID"])) {
        $strCid = $_GET["CustomerID"];
    }
    require("./connect.php");
    $sql = "select * from customer where CustomerID = ?";
    $params = array($strCid);
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="overlay"></div>
    <table>
        <tr>
            <th>รหัสผู้ใช้</th>
            <th><?php echo $result["CustomerID"]; ?></th>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><?php echo $result["Name"]; ?></td>
        </tr>
    </table>
</body>

</html>