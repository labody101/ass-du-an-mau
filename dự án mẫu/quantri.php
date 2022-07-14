<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Trang quản trị website</title>
    <link rel="stylesheet" href="quanli.css">
</head>
<body>
    
    <?php include 'ketnoi.php'; 
    $sql="SELECT level FROM user WHERE username='".$_COOKIE["name"]."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if($row['level'] ==1){
        echo 'Bạn đang quản trị với vai trò:<b>'.$_COOKIE["name"].'</b>';
    }else{
        echo '<script language="javascript">alert("Bạn không phải admin");window.location="Index.php";</script>';
    }    ?>
    <br><br>
        <?php
        include 'ketnoi.php';
        ?>
        <h2>Trang quả trị website</h2>
        <a href="khach.php">Đăng xuất</a>
        <div class="container">
            <input type="button" value="Thêm sản phẩm" id="btn1">
            <input type="button" value="Xóa sản phẩm" id="btn2">
            <input type="button" value="Sửa sản phẩm" id="btn3">
            <input type="button" value="Sửa danh mục" id="btn7">
            <input type="button" value="Xóa comment" id="btn4">
            <input type="button" value="Xóa user" id="btn5">
            <script language="javascript">
 
            document.getElementById("btn1").onclick = function () {
                document.getElementById("delete_product").style.display = 'none';
                document.getElementById("delete_user").style.display = 'none';
                document.getElementById("edit_product").style.display = 'none';
                document.getElementById("add_product").style.display = 'block';
                document.getElementById("edit_product_detail").style.display = 'none';
                document.getElementById("btn6").style.display = 'none';
                document.getElementById("edit_catergories").style.display = 'none';
                document.getElementById("delete_cmt").style.display = 'none';
            };
 
            document.getElementById("btn2").onclick = function () {
                document.getElementById("delete_product").style.display = 'block';
                document.getElementById("edit_product").style.display = 'none';
                document.getElementById("add_product").style.display = 'none';
                document.getElementById("edit_product_detail").style.display = 'none';
                document.getElementById("btn6").style.display = 'none';
                document.getElementById("delete_user").style.display = 'none';
                document.getElementById("edit_catergories").style.display = 'none';
                document.getElementById("delete_cmt").style.display = 'none';
            };
            document.getElementById("btn3").onclick = function () {
                document.getElementById("delete_product").style.display = 'none';
                document.getElementById("edit_product").style.display = 'block';
                document.getElementById("add_product").style.display = 'none';
                document.getElementById("edit_product_detail").style.display = 'none';
                document.getElementById("btn6").style.display = 'block';
                document.getElementById("delete_user").style.display = 'none';
                document.getElementById("edit_catergories").style.display = 'none';
                document.getElementById("delete_cmt").style.display = 'none';
            };
            document.getElementById("btn4").onclick = function () {
                document.getElementById("delete_product").style.display = 'none';
                document.getElementById("edit_product").style.display = 'none';
                document.getElementById("add_product").style.display = 'none';
                document.getElementById("edit_product_detail").style.display = 'none';
                document.getElementById("btn6").style.display = 'none';
                document.getElementById("delete_user").style.display = 'none';
                document.getElementById("edit_catergories").style.display = 'none';
                document.getElementById("delete_cmt").style.display = 'block';
            };
            document.getElementById("btn5").onclick = function () {
                document.getElementById("delete_product").style.display = 'none';
                document.getElementById("edit_product").style.display = 'none';
                document.getElementById("add_product").style.display = 'none';
                document.getElementById("edit_product_detail").style.display = 'none';
                document.getElementById("btn6").style.display = 'none';
                document.getElementById("delete_user").style.display = 'block';
                document.getElementById("edit_catergories").style.display = 'none';
                document.getElementById("delete_cmt").style.display = 'none';
            };
            document.getElementById("btn7").onclick = function () {
                document.getElementById("delete_product").style.display = 'none';
                document.getElementById("edit_product").style.display = 'none';
                document.getElementById("add_product").style.display = 'none';
                document.getElementById("edit_product_detail").style.display = 'none';
                document.getElementById("btn6").style.display = 'none';
                document.getElementById("delete_user").style.display = 'none';
                document.getElementById("edit_catergories").style.display = 'block';
                document.getElementById("delete_cmt").style.display = 'none';
            };
        </script>
    </div>
    <form action="xulyquantri.php?act=add_product" method="post" enctype="multipart/form-data" id="add_product">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="product-name" name="product_name">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
            <div class="mb-3">
            <input type="hidden" name="size" value="1000000" > 
            <input type="file" name="image" style="cursor: pointer;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Giá gốc</label>
            <input type="number" class="form-control" id="old-price" name="old_price">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Giá sale</label>
            <input type="number" class="form-control" id="sale-price"  name="sale_price">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Chi tiết sản phẩm" id="floatingTextarea2" style="height:500px" name="description"></textarea>
            <label for="floatingTextarea">Chi tiết sản phẩm</label>
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>

        <button type="submit" class="btn btn-primary" name="upload">Thêm sản phẩm</button>
    </form>
    <form action="xulyquantri.php?act=delete_user" method="post" id="delete_user" style="display:none">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nhập id người dùng cần xóa:</label>
            <input type="number" class="form-control" id="id" name="id">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
        <button type="submit" class="btn btn-primary" name="delete_user" >Xóa người dùng</button>
    </form>
    <form action="xulyquantri.php?act=delete_product" method="post"  id="delete_product">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nhập id sản phẩm cần xóa:</label>
            <input type="text" class="form-control" id="product-name" name="id">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
        <button type="submit" class="btn btn-primary" name="delete">Xóa sản phẩm</button>
    </form>
    <br>
    <div class="edit_danhmuc" id="edit_catergories" style="display:none;">
        <form action="edit_loaihang.php" method="post"  >
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM catergories ";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $loai_hang=$row['loai_hang'];
                                            echo'
                                            <tbody>
                                                <tr>    
                                                <th scope="row"><input type="text" name="id" value="'.$row['id'].'" style="display:none">'.$row['id'].'</th>
                                                <td ><input type="text" name="loai_hang" value="'.$loai_hang.'"></td>
                                                <td><button type="submit" class="btn btn-success" name="update1">Sửa</button></td>
                                                <td><button type="submit" class="btn btn-danger" name="update2">Xóa</button></td>
                                                </tr>
                                            </tbody>
                                            ';
                                        }
                                    }elseif (mysqli_num_rows($result) == 0) {
                                        echo "Không có dữ liệu";
                                    }else{
                                        echo "Có lỗi xảy ra";
                                    }
                                    ?>
                    <script>
                        function show_add_catergories(){
                        document.getElementById("new_catergories").style.display = 'block';
                        };
                    </script>
                        </table>
        </form>
        <form action="xulyquantri.php?act=edit_catergories" method="post">
            <button type="button" class="btn btn-success" id="btn_add_catergories" onclick="show_add_catergories()" >Chỉnh sửa danh sách danh mục</button><br>
                    <div class="cover" id="new_catergories" style="display:none">
                        <div class="mb-3" >
                            <label for="exampleInputEmail1" class="form-label" style="margin:0">Tên danh mục cần thêm:</label>
                            <input type="text" class="form-control" name="catergories">
                            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
                        </div>
                        <button type="submit" class="btn btn-success" name="add_catergories" style="margin-left:50px">Thêm</button>
                    </div>
        </form>
    </div>
    <form action="xulyquantri.php?act=delete_cmt" method="post" enctype="multipart/form-data" id="delete_cmt" style="display:none">
            <label for="exampleInputEmail1" class="form-label">ID cmt cần xóa: </label>
            <input type="number"  name="delete_cmt_id" class="form-control" id="del_id">
            <button type="submit" class="btn btn-primary" name="delete_cmt">Xóa</button>
    </form>
    <div class="edit_product">
        <form method="GET" id="edit_product">
            <p style="font-weight: bold;">Nhập id sản phẩm muỗn sửa:</p>
            <input type="number" class="form-control" name="id">
            <input type="submit" value="Tìm sản phẩm" class="btn btn-primary" style="margin-top:10px;" >
        </form>
        <input type="button" value="Hiện thông tin cần sửa" class="btn btn-primary" id="btn6" style="display:block">
            <script language="javascript">
                    document.getElementById("btn6").onclick = function () {
                    document.getElementById("delete_product").style.display = 'none';
                    document.getElementById("edit_product_detail").style.display = 'block';
                    document.getElementById("add_product").style.display = 'none';
                };
            </script>
        <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM produc WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id=$row['id'];
                    $product_name=$row['product_name'];
                    $old_price=$row['old_price'];
                    $sale_price=$row['sale_price'];
                    $image=$row['image'];
                    $target_dir = "photo/";
                    $target_file = $target_dir . $image;
                    $description = $row['description'];
            }
            $sql = "SELECT id FROM produc WHERE id='$id'";
            $old=mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($old);
            if(mysqli_num_rows($old) == 0){
                echo '<script language="javascript">alert("Sản phẩm này không tồn tại, vui lòng kiểm tra lại!"); window.location="quantri.php";</script>';
            }
            }
        ?>
        <form action="xulyquantri.php?act=edit_product" method="post" enctype="multipart/form-data" id="edit_product_detail">
            <div class="mb-3" id="edit_product1">
                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="product-name" name="product_name" value="<?php echo $product_name;?>">
                <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
            </div>
            <div class="mb-3" id="edit_product1">
                <label for="exampleInputEmail1" class="form-label">Giá gốc</label>
                <input type="number" class="form-control" id="old-price" name="old_price" value="<?php echo $old_price; ?>" >
                <div class="err" id="erruser" style="color:red;font-weight: bold">
            </div>
            <?php
            echo "<img src='".$target_file."' style='width:100px;height:100px;'>";
            ?>
            <div class="mb-3">
                <input type="hidden" name="size" value="1000000" > 
                <input type="file" name="image" style="cursor: pointer;">
            </div>
            <div class="mb-3" id="edit_product1">
                <label for="exampleInputEmail1" class="form-label">Giá sale</label>
                <input type="number" class="form-control" id="old-price" name="sale_price" value="<?php echo $sale_price;?>">
                <div class="err" id="erruser" style="color:red;font-weight: bold">
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea2" style="height:500px" name="description"><?php echo $description;?></textarea>
                <label for="floatingTextarea">Chi tiết sản phẩm</label>
                <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
            </div>
            <div class="mb-3" id="edit_product1">
                <label for="exampleInputEmail1" class="form-label"> ID sản phẩm cần sửa: </label>
                <input type="number" value="<?php echo $id; ?>" readonly name="id" class="form-control" id="id">
                <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Sửa sản phẩm</button>
        </form>
    </div>

</body>
</html>