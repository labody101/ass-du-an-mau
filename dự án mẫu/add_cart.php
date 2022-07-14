<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm vào giỏ hàng</title>
</head>
<body>
    <?php
    include "ketnoi.php";
            if (isset($_POST['add_cart'])) {
            $product_id=$_POST['item_id'];
            $username=$_COOKIE["name"];
            $sql = "SELECT * FROM cart WHERE product_id='$product_id'&&username='$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            if (mysqli_num_rows($result) > 0) {
                echo '<script language="javascript">alert("Sản phẩm đã tồn tại, vui lòng kiếm tra giỏ hàng!");window.location="sanpham.php?loai_hang=all";</script>';
            }else{
                $sql="INSERT INTO cart (product_id,username) VALUES ('$product_id','$username')";
                $result=mysqli_query($conn,$sql);
                echo '<script language="javascript">alert("Thêm sản phẩm thành công!");window.location="sanpham.php?loai_hang=all";</script>';
            }
            }else {
                echo'Có lỗi xảy ra(add_cart)';
            }
    ?>
</body>
</html>