<?php include "connect.php"; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO product (pname, pdetail, price, image) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $_POST["pname"]);
    $stmt->bindParam(2, $_POST["pdetail"]);
    $stmt->bindParam(3, $_POST["price"]);

    $image = $_FILES["image"];
    $targetDir = "product_photo/";
    $targetFile = $targetDir . basename($image["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    if ($image["error"] === UPLOAD_ERR_OK) {
        // ตรวจสอบนามสกุลไฟล์
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedTypes)) {
            echo "ขอโทษ, รองรับเฉพาะ JPG, JPEG, PNG & GIF เท่านั้น.";
        } elseif ($image["size"] > 500000) { // 500KB
            echo "ขอโทษ, ไฟล์ของคุณใหญ่เกินไป.";
        } else {
            if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                $stmt->bindParam(4, $targetFile);
                $stmt->execute();
                $pid = $pdo->lastInsertId();
                echo "เพิ่มสินค้าใหม่สำเร็จ รหัสสินค้าใหม่ คือ " . htmlspecialchars($pid);
            } else {
                echo "ขอโทษ, เกิดข้อผิดพลาดในการอัปโหลดไฟล์.";
            }
        }
    } else {
        echo "ขอโทษ, เกิดข้อผิดพลาดในการอัปโหลดไฟล์: " . $image["error"];
    }
}

?>
