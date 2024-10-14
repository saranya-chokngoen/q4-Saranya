<?php
$keyword = $_GET["keyword"];
$conn = mysql_connect("localhost:3306", "Tstd10", "e9BxAVAh");
if ($conn) {
mysql_select_db("sec2_10");
mysql_query("SET NAMES utf8");
} else {
echo mysql_errno();
}
$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$objQuery = mysql_query($sql);
?>
<table border="1">
<?php while($row = mysql_fetch_array($objQuery)): ?>
<tr>
<td><a href="productDetail.php?pid=<?php echo $row["username"]?>"><?php echo
$row["product_name"]?></a></td>
<td><?php echo $row["product_detail"]?></td>
<td><img src="img/<?php echo $row["product_id"] ?>.png" width="100"></td>
<td><?php echo $row["product_price"]?> บาท</td>
<td><a href="cart.php?productId=<?php echo $row["product_id"]?>&action=add">สั่งซื้อ</a>

</tr>
<?php endwhile;?>
</table>