<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Lấy thông tin về sản phẩm từ form
$name = $_POST['name'];
$id = $_POST['id'];
$code = $_POST['code'];
$image = $_POST['image'];
$price = $_POST['price'];
$priceold = $_POST['priceold'];

// Mở file để ghi dữ liệu
$file = fopen('products.txt', 'a');

// Ghi thông tin về sản phẩm vào file
$data = $name . '|' . $id . '|' . $code . '|' . $image . '|' . $price . '|'.$priceold."\n";
fwrite($file, $data);


$products = array();
$file = fopen("products.txt", "r");
while (($line = fgets($file)) !== false) {
  $data = explode("|", trim($line));
  $product = array(
    "name_category" => $data[0],
    "id" => $data[1],
    "code" => $data[2],
    "name" => $data[3],
    "image" => $data[4],
    "price" => $data[5],
    "oldprice" => isset($data[6]) ? $data[6] : ""
  );
  array_push($products, $product);
}
fclose($file);
// Chuyển hướng về trang chủ
header('Location: midtem2.php');
exit;
?>
</body>
</html>
