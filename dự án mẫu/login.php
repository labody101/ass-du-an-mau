<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Đăng nhập</title>
</head>

<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="display:none" id="show_err">
<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <strong>Cảnh báo!</strong> <span class="err" id="err" style="color:red;font-weight: bold"></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<form style="margin:200px 600px 300px 500px;" name="myForm" action="xuly.php?act=login" method="post" onsubmit="return validateForm()">
    <h1>ĐĂNG NHẬP</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tài khoản</label>
        <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" name="username">
        <div class="err" id="erruser" style="color:red;font-weight: bold"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="Password" name="pass">
        <div class="err" id="errpass" style="color:red;font-weight: bold"></div>
    </div>
    <p> <a href="Quên mật khẩu.php" style="text-decoration: none;">Quên mật khẩu?</a></p>
    <button type="submit" class="btn btn-primary" name="submit">Đăng nhập</button>
    <button type="button" class="btn btn-secondary" onclick="back()" value="OK">Quay Lại</button><br><br>
    <span>Chưa có tài khoản?</span><a href="register.php" style="text-decoration: none;">Đăng kí ngay</a>

</form>
<script>
        function back(){
            location.replace("Khach.php");
        }
        function validateForm() 
        {
            document.getElementById("show_err").style.display = 'block';
        let x = document.forms["myForm"]["username"].value;
        if (x == "" || x.trim() == "") {
            document.getElementById("err").innerHTML = "Tài khoản không được để trống";
            return false;
        }
        let y = document.forms["myForm"]["pass"].value;
        if (y == "" || y.trim() == "") {
            document.getElementById("err").innerHTML = "Mật khẩu không được để trống";
            return false;
        }
        }
    </script>
</body>

</html>