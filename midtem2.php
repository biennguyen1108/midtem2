<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<style>
    body{
        background-color: grey;
      
    }
</style>
<body>
<h2 style="margin-left:500px" >Danh sách sản phẩm</h2>
    <br>
    <div class="add" style="margin-left:500px"><a href="themsanpham.php" ><h1>THÊM SẢN PHẨM</h1></a>
    </div>
<?php
// Read product information from file
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
?>

<!-- Display product cards using Bootstrap -->

<div class="container">

     <h1 style="margin-left:500px">Túi Xách</h1>
     <br>
      <br>
  <div class="row">
    <?php 
    foreach ($products as $product) { ?>
    <?php if($product['name_category'] == "Tuixach"){?>
    <div class="col-sm-3">
      <div class="card">
        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product['name']; ?></h5>
          <p class="card-text"><?php echo $product['code']; ?></p>
          <?php if ($product['oldprice'] !== "") { ?>
          <p class="card-text"><del><?php echo $product['oldprice']; ?></del> <span class="text-danger"><?php echo $product['price']; ?></span></p>
          <?php } else { ?>
          <p class="card-text"><?php echo $product['price']; ?></p>
          <?php } ?>
          <button class="btn btn-primary" onclick="alert('Thank you for your order!')">Đặt mua</button>
        </div>
      </div>
    </div>
    
    <?php } ?>
    <?php }?>
  </div>
</div>
<div class="container">
<br>
      <br>
      <h1 style="margin-left:500px">Giày Dép</h1>
      <br>
      <br>
  <div class="row">
    <?php 
    foreach ($products as $product) { ?>
    <?php if($product['name_category'] == "Giaydep"){?>
    <div class="col-sm-3">
      <div class="card">
        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product['name']; ?></h5>
          <p class="card-text"><?php echo $product['code']; ?></p>
          <?php if ($product['oldprice'] !== "") { ?>
          <p class="card-text"><del><?php echo $product['oldprice']; ?></del> <span class="text-danger"><?php echo $product['price']; ?></span></p>
          <?php } else { ?>
          <p class="card-text"><?php echo $product['price']; ?></p>
          <?php } ?>
          <button class="btn btn-primary" onclick="alert('Thank you for your order!')">Đặt mua</button>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php }?>
  </div>
</div>
<br>
<br>
<br>
</body>
</html>