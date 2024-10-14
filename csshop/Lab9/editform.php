<?php include "connect.php" ?>
<?php

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ? ");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="editform-done.php" method="post">
Username : <br><input type="hidden" name="username" value="<?=$row["username"]?>"><br>
รหัสผ่าน : <br><input type="password " name="password" value="<?=$row["password"]?>" ><br>
ชื่อสมาชิก : <br><input type="text" name="name" value="<?=$row["name"]?>"><br>
ที่อยู่ : <br>
<textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
เบอร์โทรศัพท์ : <input type="tel" name="mobile" value="<?=$row["mobile"]?>"><br>
อีเมล : <input type="email" name="email" value="<?=$row["email"]?>"><br><br>
<input type="submit" value="แก้ไข ">
</form>
</body>
</html>