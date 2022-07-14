<?php      
        session_start();      
        include('ketnoi.php');
        $act=$_GET['act'];
        switch ($act) {
            case 'signup':
                if (isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    $repass = $_POST['repass'];
                    $level=0;
                    $sql="SELECT * FROM user WHERE username='$username'";
                    $old=mysqli_query($conn,$sql);
                    if (mysqli_num_rows($old)>0) {
                        echo '<script language="javascript">alert("Tài khoản này đã tồn tại,vui lòng đổi tên tài khoản khác!"); window.location="register.php";</script>';
                    }else{
                        $sql="INSERT INTO user (username,pass,level) VALUES('$username','$pass','$level')";
                    }
                    if (mysqli_query($conn, $sql)){
                        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="Index.php";</script>';
                        }
                        else {
                        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
                        }
                }else{
                    header('Location:register.php');
                }
                break;
            case 'login':
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    $sql = "SELECT id,username, pass FROM user WHERE username='$username'";
                    $old=mysqli_query($conn,$sql);
                    $row = mysqli_fetch_array($old);
                    $lv="SELECT level FROM user WHERE username='$username'";
                    $lvold=mysqli_query($conn,$lv);
                    $lvrow = mysqli_fetch_array($lvold);
                    if (mysqli_num_rows($old) == 0) {
                        echo '<script language="javascript">alert("Tên đăng nhập này ko tồn tại, vui lòng nhập lại"); window.location="login.php";</script>';
                    exit;
                    }elseif ($pass != $row['pass']) {
                        echo '<script language="javascript">alert("Mật khẩu không đúng, vui lòng nhập lại"); window.location="login.php";</script>';
                        exit;
                    }elseif($lvrow['level']==1) 
                    {	 
                        echo '<script language="javascript"> window.location="quantri.php";</script>';
                        setcookie("name", "$username", time() + 36000, "/");
                        
                    }else{
                        echo '<script language="javascript">alert("Đăng nhập thành công!");window.location="Index.php";</script>';
                        setcookie("name", "$username", time() + 36000, "/");
                    }
                }else{
                    header('Location:login.php');
                }
                break;
                case 'update_user':
                    if (isset ($_POST['update_user'])) {
                        $id=$_POST['id'];
                        $username = $_POST['username'];
                        $pass = $_POST['pass'];
                        if ($pass==''||trim($pass)=='') {
                            echo '<script language="javascript">alert("Mật khẩu không được để trông"); window.location="thongtincanhan.php";</script>';
                        }
                        $sdt= $_POST['sdt'];
                        $email = $_POST['email'];
                        $sql="UPDATE user SET pass='$pass',sdt='$sdt',email='$email' WHERE id='$id'";
                        if (mysqli_query($conn, $sql)){
                            echo '<script language="javascript">alert("Cập nhật thành công!");window.location="thongtincanhan.php"; </script>';
                        }else{
                            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="thongtincanhan.php";</script>';
                        }
                    }else{
                        header('Location:thongtincanhan.php');
                    }
                case 'comment':
                    if (isset ($_POST['submit_comment'])) {
                        $comment_username=$_COOKIE["name"];
                        $comment_content=$_POST['comment_content'];
                        $sql="INSERT INTO comment (comment_content,comment_username) VALUES('$comment_content','$comment_username')";
                        if (mysqli_query($conn, $sql)){
                            echo '<script language="javascript">alert("Bình luận thành công!");window.location="sanpham.php"; </script>';
                    }else {
                        echo "Có lỗi xảy ra";
                    }
                }
                break;
                case 'submit_form':
                    if (isset ($_POST['submit_form'])) {
                        if (isset($_COOKIE["name"])) {
                            $username=$_COOKIE["name"];
                        }else{
                            $username="";
                        }
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $sdt=$_POST['sdt'];
                        $direction=$_POST['direction'];
                        $title=$_POST['title'];
                        $content=$_POST['content'];
                        echo $content;
                        $sql="INSERT INTO form (name,email,sdt,direction,title,content,username) VALUES('$name','$email','$sdt','$direction','$title','$content','$username')";
                        if (mysqli_query($conn, $sql)){
                            echo '<script language="javascript">alert("Gửi thành công!") </script>';
                        }else{
                            echo '<script language="javascript">alert("Có lỗi xảy ra"); window.location="Liên hệ .php";</script>';
                        }
                    break;
    }}
        
    ?>