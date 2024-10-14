<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=sec2_10;charset=utf8", "Tstd10", "e9BxAVAh");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';


$sql = "SELECT * FROM member WHERE name LIKE :keyword";
$stmt = $pdo->prepare($sql);
$searchKeyword = "%$keyword%";
$stmt->bindParam(':keyword', $searchKeyword, PDO::PARAM_STR);
$stmt->execute();


if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <div>
            <strong>ชื่อสมาชิก:</strong> <?= htmlspecialchars($row["name"]); ?><br>
            <strong>ที่อยู่:</strong> <?= htmlspecialchars($row["address"]); ?><br>
            <strong>อีเมล:</strong> <?= htmlspecialchars($row["email"]); ?><br>
            <img src='member_photo/<?= htmlspecialchars($row["username"]); ?>.jpg' width='100' alt='<?= htmlspecialchars($row["name"]); ?>'><br>
            <hr>
        </div>
    <?php endwhile;
} else {
    echo "ไม่พบข้อมูลสมาชิก";
}


$pdo = null;
?>
