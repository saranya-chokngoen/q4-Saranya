<?php session_start(); ?>

<html>
<body>
<h1>สวัสดี <?=$_SESSION["fullname"]?></h1>

<h2>รายการสั่งซื้อของคุณ</h2>
<?php
include "connect.php";

$username = $_SESSION["username"];
$orderStmt = $pdo->prepare("SELECT o.ord_id, o.ord_date, o.status, i.pid, i.quantity, p.pname, p.price 
                             FROM orders o 
                             JOIN item i ON o.ord_id = i.ord_id 
                             JOIN product p ON i.pid = p.pid 
                             WHERE o.username = ?");
$orderStmt->bindParam(1, $username);
$orderStmt->execute();
$orders = $orderStmt->fetchAll();

if ($orders) {
    foreach ($orders as $order) {
        echo "Order ID: " . htmlspecialchars($order['ord_id']) . "<br>";
        echo "วันที่สั่งซื้อ: " . htmlspecialchars($order['ord_date']) . "<br>";
        echo "สถานะ: " . htmlspecialchars($order['status']) . "<br>";
        echo "สินค้า: " . htmlspecialchars($order['pname']) . "<br>";
        echo "จำนวน: " . htmlspecialchars($order['quantity']) . "<br>";
        echo "ราคา: " . htmlspecialchars($order['price']) . " บาท<br><br>";
    }
} else {
    echo "ไม่มีรายการสั่งซื้อ<br>";
}
?>


หากต้องการออกจากระบบโปรดคลิก <a href='logout.php'>ออกจากระบบ</a>
</body>
</html>