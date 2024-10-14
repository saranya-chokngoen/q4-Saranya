<?php

$pdo = new PDO("mysql:host=localhost:3306;dbname=sec2_10;charset=utf8", "Tstd10", "e9BxAVAh");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$username = htmlspecialchars($_GET["username"]);


$stmt = $pdo->prepare("SELECT COUNT(*) FROM member WHERE username = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$count = $stmt->fetchColumn();

if ($count == 0) {
    echo "okay"; 
} else {
    echo "denied";
}
?>
