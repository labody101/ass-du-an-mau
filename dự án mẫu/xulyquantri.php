<?php
include 'ketnoi.php';
$act=$_GET['act'];
switch ($act) {
    case 'add_product':
        if (isset($_POST['upload'])) {
            $product_name = $_POST['product_name'];
            $old_price = $_POST['old_price'];
            $sale_price = $_POST['sale_price'];
            $image = $_FILES['image']['name'];
            $target_dir = "photo/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $description=$_POST['description'];
            $sql="SELECT * FROM produc WHERE product_name='$product_name'";
            $old=mysqli_query($conn,$sql);
            if (mysqli_num_rows($old)>0) {
                echo '<script language="javascript">alert("Sản phẩm này đã tồn tại,vui lòng sửa sản phẩm!"); window.location="quantri.php";</script>';
            }else{
                $sql="INSERT INTO produc (product_name,image,old_price,sale_price,description) VALUES('$product_name','$image','$old_price','$sale_price','$description')";
            }
            if (mysqli_query($conn, $sql)){
                echo '<script language="javascript">alert("Thêm sản phẩm thành công!");window.location="quantri.php";</script>';
            }else{
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");window.location="quantri.php";</script>';
            }
            echo 'Add Product';
            }else{
                header('Location:quantri.php');
            }
            break;
    case 'delete_product':
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            $sql="DELETE FROM produc WHERE id='$id'";
            $sql = "SELECT id FROM produc WHERE id='$id'";
            $old=mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($old);
            if(mysqli_num_rows($old) == 0){
                echo '<script language="javascript">alert("Sản phẩm này không tồn tại, vui lòng kiểm tra lại!"); window.location="quantri.php";</script>';
            }
            else if (mysqli_query($conn, $sql)){
                echo '<script language="javascript">alert("Xóa sản phẩm thành công!"); window.location="quantri.php";</script>';
            }
            else{
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");window.location="quantri.php";</script>';
            }
        }else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý1")';
        }
        break;
    case 'edit_product':
            if (isset($_POST['edit'])) {
                $id=$_POST['id'];
                $product_name = $_POST['product_name'];
                $old_price = $_POST['old_price'];
                $sale_price = $_POST['sale_price'];
                $image = $_FILES['image']['name'];
                $target_dir = "photo/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                $description = $_POST['description'];
                $sql="UPDATE produc SET product_name='$product_name',image='$image',old_price='$old_price',sale_price='$sale_price',description='$description' WHERE id='$id'";
                if (mysqli_query($conn, $sql)){
                    echo '<script language="javascript">alert("Sửa sản phẩm thành công!");window.location="quantri.php";</script>';
                }else{
                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");window.location="quantri.php";</script>';
                }
            }else {
                echo 'lỗi ko xác định';
            }
            break;
    case 'delete_user':
        if (isset($_POST['delete_user'])) {
            $id=$_POST['id'];
            $sql1="DELETE FROM user WHERE id='$id'";
            $sql = "SELECT id FROM user WHERE id='$id'";
            $old=mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($old);
            $sql2="SELECT level FROM user WHERE id='$id'";
            $old2=mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_array($old2);
            if(mysqli_num_rows($old) == 0){
                echo '<script language="javascript">alert("User này không tồn tại, vui lòng kiểm tra lại!"); window.location="quantri.php";</script>';
            }elseif($row2['level']==1){
                echo '<script language="javascript">alert("User này là admin, không thể xóa!"); window.location="quantri.php";</script>';
            }
            elseif (mysqli_query($conn, $sql1)){
                echo '<script language="javascript">alert("Xóa user thành công!"); window.location="quantri.php";</script>';
            }else {
                echo'<script language="javascript">alert("Có lỗi trong quá trình xử lý");window.location="quantri.php"; </script>';
            }
    }else {
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý")';
    }
    break;
    case 'edit_catergories':
        if (isset($_POST['edit_catergories'])) {
            
        }else if (isset($_POST['add_catergories'])) {
            $catergories = $_POST['catergories'];
            $sql="INSERT INTO catergories (loai_hang) VALUES('$catergories')";
            if (mysqli_query($conn, $sql)){
                echo '<script language="javascript">alert("Thêm danh mục thành công!");window.location="quantri.php";</script>';
            }else{
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");window.location="quantri.php";</script>';
            }
        }else if(isset($_POST['delete_catergories'])){
            $catergories = $_POST['catergories'];['id'];
            $sql="DELETE FROM catergories WHERE catergories='$catergories'";
            echo '<script language="javascript">alert("Xóa thành công!");window.location="quantri.php";</script>';
        }elseif (isset($_POST['add_product_catergories'])) {
            $id = $_POST['add_product_catergories_id'];
            $loai_hang=$_POST['add_product_catergories_loaihang'];
            $sql="UPDATE produc SET loai_hang='$loai_hang' WHERE id='$id'";
            if (mysqli_query($conn, $sql)){
                echo '<script language="javascript">alert("Thêm danh mục thành công!");window.location="quantri.php";</script>';
             }}
        
        else{
            echo "Có lỗi trong quá trình xử lý";
            }
            break;
    case 'delete_cmt':
        if (isset($_POST['delete_cmt'])) {
            $id= $_POST['delete_cmt_id'];
            $sql="DELETE FROM comment WHERE comment_id='$id'";
            if (mysqli_query($conn, $sql)){
                echo '<script language="javascript">alert("Xóa bình luận thành công!");window.location="quantri.php";</script>';
            }else{
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");window.location="quantri.php";</script>';
            }
        }else {
            echo "Có lỗi trong quá trình xử lý";
        }
}
?>