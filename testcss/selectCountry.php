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
    require("./connect.php");
    $sql = "select * from country,customer where country.CountryCode = customer.CountryCode";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
    <div class="overlay"></div>
    <table>
        <tr>
            <th>รหัสผู้ใช้</th>
            <th>ชื่อและนามสกุล</th>
            <th>วันเกิด</th>
            <th>อีเมล์</th>
            <th>ชื่อประเทศ</th>
            <th>ยอดหนี้</th>
        </tr>
        <?php
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {

        ?>
            <tr>
                <td>
                    <a href="detailCountry.php?CustomerID=<?php echo $result["CustomerID"];?>">
                        <?php echo $result["CustomerID"]; ?>
                    </a>
                </td>
                <td><?php echo $result["Name"]; ?></td>
                <td><?php echo $result["Birthdate"]; ?></td>
                <td><?php echo $result["Email"]; ?></td>
                <td><?php echo $result["CountryName"]; ?></td>
                <td><?php echo $result["OutstandingDebt"]; ?></td>

            </tr>


        <?php
        }
        ?>
    </table>
</body>

</html>