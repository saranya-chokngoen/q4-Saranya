<html>
<head><meta charset="UTF-8"></head>
<body>

<form action="insert-product.php" method="post" enctype="multipart/form-data">
    ชื่อสินค้า : <input type="text" name="pname" required><br>
    รายละเอียดสินค้า : <br>
    <textarea name="pdetail" rows="3" cols="40" required></textarea><br>
    ราคา: <input type="number" name="price" required><br>
    รูปภาพสินค้า: <input type="file" name="image" accept="image/*" required><br>
    <input type="submit" value="เพิ่มสินค้า">
</form>

</body>
</html>
