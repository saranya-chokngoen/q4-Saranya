<?php include "connect.php"; ?>

<?php
$stmt = $pdo->prepare("UPDATE member SET name=?, password=?, address=?, mobile=?, email=? WHERE username=?");
$stmt->bindParam(1, $_POST["name"]);
$stmt->bindParam(2, $_POST["password"]); 
$stmt->bindParam(3, $_POST["address"]);
$stmt->bindParam(4, $_POST["mobile"]);
$stmt->bindParam(5, $_POST["email"]); 
$stmt->bindParam(6, $_POST["username"]); 

if ($stmt->execute()) {
    echo "แก้ไขชื่อ" . $_POST["name"] . " สำเร็จ";
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <p><?= $message ?></p>
    <a href="lab9w9.php">Back</a>
</body>
</html>
