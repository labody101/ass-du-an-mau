<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sửa loại hàng</title>
</head>
<body>
    <?php include 'ketnoi.php'; ?>
    <form action="xulyquantri.php?act=edit_catergories" method="post" id="edit_catergories">
    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Ảnh</th>
                            </tr>
                        </thead>
                        <?php
                        if (isset($_POST['update1'])) {
                            $loai_hang = $_POST['loai_hang'];
                            $id = $_POST['id'];
                            $sql="UPDATE catergories SET loai_hang='$loai_hang' WHERE id=$id";
                            $result = mysqli_query($conn, $sql);
                            echo 'Bạn đang sửa danh mục:' .$loai_hang.'<br>'.'<br>';
                            $sql="Select id,product_name,image from produc where loai_hang='$loai_hang'";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo'
                                    <tbody>
                                        <tr>
                                        <th scope="row">'.$row['id'].'</th>
                                        <td>'.$row['product_name'].'</td>
                                        <td><img src="'.$row['image'].'" alt=""></td>
                                        <td><button type="submit" class="btn btn-success">Xóa</button></td>
                                        </tr>
                                    </tbody>
                                    ';
                            }}}elseif (isset($_POST['update2'])) {       
                                $loai_hang = $_POST['loai_hang'];
                                $id = $_POST['id'];
                                $sql="DELETE FROM catergories WHERE id=$id";
                                $result = mysqli_query($conn, $sql);
                                echo '<script language="javascript">alert("Bạn xóa danh mục '.$loai_hang.' thành công!");window.location="quantri.php";</script>';
                            }else {
                                echo "Có lỗi xảy ra";
                            }
                        ?>
                     </table>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID sản phẩm muốn thêm:</label>
                        <input type="text" class="form-control" id="add_product_catergories_id" name="add_product_catergories_loaihang" value="<?php echo $loai_hang;?>" style="display:none">
                        <input type="number" class="form-control" id="add_product_catergories_id" name="add_product_catergories_id">
                        <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add_product_catergories" style="margin-left=50px">Thêm</button>

               
    </form>
</body>
</html>