<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8">
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
?>
<?php
while ($row = $stmt->fetch()) {
    ?>
    <div>
        Username: <?=($row["username"]) ?><br>
        ชื่อสมาชิก: <?=($row["name"]) ?><br>
        ที่อยู่: <?=($row["address"]) ?><br>
        อีเมล: <?=($row["email"]) ?><br>
        <a href="editform.php?username=<?= urlencode($row["username"]) ?>">แก้ไข</a>
        <hr>
    </div>
    <?php
}
?>

</body>
</html>