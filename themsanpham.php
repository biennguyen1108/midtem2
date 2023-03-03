
<!DOCTYPE html>
<html>
<head>
	<title>Thêm sản phẩm</title>
</head>
<style>
	
</style>
<body>
	<h1  style="margin-left:500px">Thêm sản phẩm mới</h1>
	<form method="post" action="ghisanphamvaofile.php" style="margin-left:500px">
		<label for="name">Tên sản phẩm:</label>
		<input type="text" name="name" id="name"><br>

		<label for="id">Mã sản phẩm:</label>
		<input type="text" name="id" id="id"><br>

		<label for="code">Mã code:</label>
		<input type="text" name="code" id="code"><br>

		<label for="image">URL hình ảnh:</label>
		<input type="text" name="image" id="image"><br>

		<label for="price">Giá:</label>
		<input type="text" name="price" id="price"><br>
        <label for="price">Giá cũ:</label>
        
		<input type="text" name="priceold" id="priceold"><br>
		<input type="submit" value="Thêm sản phẩm">
	</form>
</body>
</html>
