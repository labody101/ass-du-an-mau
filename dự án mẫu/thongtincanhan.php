<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Thông tin tài khoản</title>
</head>
<body>
    <?php
        include 'ketnoi.php';
        $username1=$_COOKIE['name'];
        $sql = "SELECT * FROM user WHERE username = '$username1'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $username=$row['username'];
            $password=$row['pass'];
            $sdt=$row['sdt'];
            $email=$row['email'];
        }
    ?>
        <form action="xuly.php?act=update_user" method="post" style="margin:100px 300px;">
        <h2>Cập nhật thông tin tài khoản</h2>
        <div class="mb-3" id="edit_product1">
            <label for="exampleInputEmail1" class="form-label">ID:</label>
            <input type="number" class="form-control" id="id" name="id" readonly value="<?php echo $id?>">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
        <div class="mb-3" id="edit_product1">
            <label for="exampleInputEmail1" class="form-label">Tên đăng nhập:</label>
            <input type="text" class="form-control" id="username" name="username" readonly value="<?php echo $username;?>">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
        <div class="mb-3" id="edit_product1">
            <label for="exampleInputEmail1" class="form-label">Mật khẩu:</label>
            <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $password; ?>" >
            <div class="err" id="erruser" style="color:red;font-weight: bold">
        </div>
        <?php
        ?>
        <div class="mb-3" id="edit_product1">
            <label for="exampleInputEmail1" class="form-label">Số điện thoại:</label>
            <input type="number" class="form-control" id="sdt" name="sdt" value="<?php echo '0'.$sdt;?>">
            <div class="err" id="erruser" style="color:red;font-weight: bold">
        </div>
        <div class="mb-3" id="edit_product1">
            <label for="exampleInputEmail1" class="form-label">Email: </label>
            <input type="text" value="<?php echo $email; ?>"  name="email" class="form-control" id="email">
            <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
        </div>
        <button type="submit" class="btn btn-primary" name="update_user">Cập nhật thông tin</button>
        <button type="button" class="btn btn-secondary" onclick="back()">Quay lại</button>
        </form>
        <script>
            function back(){
                window.location.href="Index.php";
            }
        </script>
</body>
</html>