<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Sản phẩm '.$_POST['product_name']?></title>
</head>
<body>
<?php
    session_start();
    include('ketnoi.php');
    $act=$_GET['act'];
    switch($act) {
        case 'details':
        if (isset ($_POST['details'])) {
        $product_id=$_POST['id'];
        $sql="SELECT * FROM produc WHERE id='$product_id'";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row=mysqli_fetch_array($result)) {
                $product_name=$row['product_name'];
                $old_price=$row['old_price'];
                $sale_price=$row['sale_price'];
                $image=$row['image'];
                $description=$row['description'];
                $target_dir = "photo/";
                $target_file = $target_dir . $image;
                echo'
                <div class="sanpham">
                    <div class="anh">
                        <img src="'.$target_file.'" alt=""class="anh"style="width:300px;height:150px;>
                    </div>
                    <div class="chitiet">
                            <p>Tên sản phẩm: '.$product_name.'</p>
                            <p>Giá cũ: <del> '.$old_price.'</del></p>
                            <p>Giá mới: '.$sale_price.'</p>
                            <p>Chi tiết sản phẩm: '.$description.'</p>
                    </div>
                </div>
                ';
            }
        }
    }else {
        echo'Có lỗi xảy ra(details)';
    }
    break;
    case 'add':
    }
?>

 
</body>
</html>