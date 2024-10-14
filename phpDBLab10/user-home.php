<?php session_start(); ?>

<html>
<body>
<h1>สวัสดี <?=$_SESSION["fullname"]?></h1>

<?php
include "connect.php";

if (!isset($_SESSION["username"])) {
    echo "กรุณาล็อกอินก่อน";
    exit();
}

$username = $_SESSION["username"];
if ($username === 'saranya') {
    echo "<h2>จำนวน Order ของผู้ใช้แต่ละคน</h2>";

    $orderCountStmt = $pdo->prepare("SELECT m.username, m.name, COUNT(o.ord_id) AS order_count 
                                      FROM member m 
                                      LEFT JOIN orders o ON m.username = o.username 
                                      GROUP BY m.username");
    $orderCountStmt->execute();
    $orderCounts = $orderCountStmt->fetchAll();

    if ($orderCounts) {
        foreach ($orderCounts as $user) {
            echo "username: " . htmlspecialchars($user['username']) . "<br>";
            echo "ชื่อ: " . htmlspecialchars($user['name']) . " - จำนวน Order: " . htmlspecialchars($user['order_count']) . "<br>";
            echo "<hr>";
        }
    } else {
        echo "ไม่มีข้อมูลผู้ใช้<br>";
    }
} else {
    echo "<h2>รายการสั่งซื้อของคุณ</h2>";

    // ดึงข้อมูลออเดอร์เฉพาะผู้ใช้ที่ไม่ใช่ saranya
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
            echo "ราคา: " . htmlspecialchars($order['price']) . " บาท<br><hr>";
        }
    } else {
        echo "ไม่มีรายการสั่งซื้อ<br>";
    }
}
?>

<br>
หากต้องการออกจากระบบโปรดคลิก <a href='logout.php'>ออกจากระบบ</a>

</body>
</html>
