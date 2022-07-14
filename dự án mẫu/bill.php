<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa đơn</title>
</head>
<body>
    <?php
    $product_name = $_POST['product_name'];
    $price=$_COOKIE["price"];
    $quantity=$_POST['quantity'];
    $total=$price*$quantity;
    echo 'Tên sản phẩm: '.$product_name.'<br>';
    echo 'Giá sản phẩm: '.$price.'<br>';
    echo 'Số lượng sản phẩm: '.$quantity.'<br>';
    echo 'Tổng tiền: '.$total.'<br>';
   
    $test=$_POST['test'];
    echo 'test: '.$test.'<br>';
    echo $_COOKIE["test"];
    ?>
</body>
</html>