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
    <link rel="stylesheet" href="sanpham.css">
    <title>Sản phẩm</title>
</head>
<body>
<body>
    <div class="open-web">
        <div class="intro">
            <div class="logo">
                <a href="#"><img src="ảnh/download.png" alt="logo"></a>
                <p><a href="#"><img src="ảnh/Untitled-2.png" alt="logo"></a></p>
            </div>
            <div id="menu-first">
                <div class="space"></div>
                <li><span class="iconify" id="icon" data-icon="clarity:user-line"
                        style="color: black; font-size: 40px;">
                    </span>
                    
                    <ul class="sub-login">
                        <li style="margin-bottom:15px">
                                <?php
                                if( isset($_COOKIE["name"]))
                                {
                                    echo "Xin chào " . $_COOKIE["name"];
                                }
                                else
                                {
                                    header("Location:login.php");
                                }                     
                                ?>
                                 </li>
                        <li id="hide"><a href=""><span class="iconify" data-icon="fluent:ticket-diagonal-20-regular"
                                    style="color: black; font-size: 20px;"></span>Phiếu giảm giá của tôi</a></li>
                        <li id="hide"><a href=""><span class="iconify" data-icon="fluent:history-24-regular"
                                    style="color: black; font-size: 20px;"></span>Đã xem gần đây</a></li>
                        <li id="hide"><a href="thongtincanhan.php"><span class="iconify" data-icon="fluent:more-circle-20-regular"
                                    style="color: black; font-size: 20px;"></span>Cập nhật thông tin tài khoản</a></li>
                        <li id="hide"><a href="log-out.php"><span class="iconify" data-icon="iconoir:log-out"
                                    style="color: black; font-size: 20px;"></span>Đăng xuất</a></li>
                    </ul>
                <li><span class="iconify" data-icon="bytesize:bag" style="color: black; font-size: 40px;"></span>
                    <ul class="sub-cart">
                        <li><a href="cart.php"><span class="iconify" data-icon="bytesize:bag"
                                    style="color: black; font-size: 20px;"></span>Giỏ hàng</a></li>
                        <li><a href=""><span class="iconify" data-icon="material-symbols:payments-outline-rounded"
                                    style="color: black; font-size: 20px;"></span>Thanh toán</a></li>
                        <li><a href=""><span class="iconify" data-icon="mdi:cash-refund"
                                    style="color: black; font-size: 20px;"></span>Đổi trả</a></li>
                        <li><a href="#phuong-thuc-thanh-toan"><span class="iconify" data-icon="ic:outline-payment"
                                    style="color: black; font-size: 20px;"></span>Phương thức thanh toán</a></li>
                    </ul>
                </li>
                <li><span class="iconify" data-icon="fluent:headphones-28-regular"
                        style="color: black; font-size: 40px;"></span>
                    <ul class="sub-service">
                        <li><span class="iconify" data-icon="fluent:headphones-28-regular"
                                style="color: black; font-size: 20px;"></span> Dịch vụ khách hàng</li>
                        <li><a href="">Chúng tôi có thể làm gì cho bạn?</a></li>
                </li>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="Index.php">Trang chủ</a></li>
                <li><a href="giới-thieu.html">Giới thiệu</a></li>
                <li><a href="sanpham.php?loai_hang=all">Sản phẩm</a></li>
                <li><a href="Liên hệ.html">Liên hệ</a></li>
                <li><a href="xu hướng.html">Xu hướng</a></li>
                <li><a href="Hỏi đáp.html">Hỏi đáp</a></li>
                <li><a href="#"><input type="text" aria-label="Tìm sản phẩm" name="query" value="" autocomplete="on"
                            placeholder="Tìm sản phẩm" class="search"></a>
                    <span id="search-icon" class="iconify" data-icon="carbon:search"
                        style="color: black; font-size: 38px;"></span>
                </li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="ảnh/banner-1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ảnh/banner-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ảnh/banner-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="ảnh/banner-4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <img src="ảnh/chinh-sach.png" alt="" id="chinh-sach">
    <div id="ds-san-pham">
        <div class="sp1">
            <ul>
                <li id="open-menu"><a href="sanpham.php?loai_hang=all">☰ Danh mục sản phẩm</a></li>
                <li><a>Khuyến mãi mùa hè &emsp;&emsp;&emsp; ▸</a>
                    <ul class="sub-menu">
                        <li><a href="#" value="Sale to 50%" method="get" name="loai_hang">Sale to 50%</a></li>%</a></li>
                        <li><a href="#" value="Sell off">Sell off</a></li>
                    </ul>
                </li>
                <?php
                include 'ketnoi.php';
                $sql="SELECT * FROM catergories";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    $loai_hang=$row['loai_hang'];
                    echo'
                    <li><a href="sanpham.php?loai_hang='.$loai_hang.'">'.$loai_hang.'</a>
                    <input type="text" value="'.$loai_hang.'" name="loai_hang" style="display:none">
                    </li>
                    ';
                }
                ?>
                
            </ul>
        </div>
        <div class="sp2">
            <?php
            include 'ketnoi.php';
            ?>
            <h2>Sản phẩm</h2>

            <div class="row">
                    <?php
                    $loai_hang = $_GET['loai_hang'];
                    if ($loai_hang == 'all') {
                        $sql = "SELECT * FROM produc";

                    }else {
                        $sql = "SELECT * FROM produc where loai_hang = '$loai_hang'";
                    }
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            $id = $row['id'];
                            $product_name = $row['product_name'];
                            $old_price = $row['old_price'];
                            $sale_price = $row['sale_price'];
                            $image = $row['image'];
                            $description = $row['description'];
                            $target_dir = "photo/";
                            $target_file = $target_dir . $image;
                            echo'
                            <form action="chitietsanpham.php?act=details" method="post" enctype="multipart/form" class="col-md-4" style="width:300px">';
                            echo'<div class="card">';
                            echo'<img src="'.$target_file.'" style="width:300px;height:450px;">;';
                            echo'<div class="card-body">';
                            echo'<p class="card-title"> Mã sản phẩm:'.$id.' </p>';
                            echo'<input type="number" name="id" value="'.$id.'"style="display:none">';
                            echo'<h5 class="card-text"> <strong>'.$product_name.'</strong> </h5>';
                            echo'<input type="text" name="product_name" value="'.$product_name.'" style="display:none">';
                            echo'<p class="card-text"><del> '.$old_price.' </del>VNĐ</p>';
                            echo'<h5 class="card-text">'.$sale_price.' VNĐ</h5>';  
                            echo'<button class="btn-btn-info" type="submit" name="details">Xem chi tiết</button>' ;
                            echo'</form>';
                            echo'
                            <form action="add_cart.php" method="post" enctype="multipart/form" class="col-md-4" style="width:300px">';
                            echo'<input type="number" name="item_id" value="'.$id.'"style="display:none">';
                            echo" <button id='add_to_cart' class='btn-btn-info' name='add_cart'>Thêm</button>";
                            echo'</form>';  
                            echo'</div>';
                            echo'</div>';
                            
                        }}
                    ?>
                </div>
                </div>
                </div>
        </div>
    </div>
    <div class="comment">
                <div class="col-md-12" style="width:90%;margin:0 auto">
                    <h2>Bình luận</h2>
                    <form action="xuly.php?act=comment" method="post" enctype="multipart/form">
                    <h6><?php echo "Bình luận dưới tên: " . $_COOKIE["name"]; ?></h6>
                    <textarea name="comment_content" id="" cols="600" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary" name="submit_comment">Gửi</button>
                    </form>
                    <?php
                    include 'ketnoi.php';
                    $sql="SELECT * FROM comment";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            $comment_id = $row['comment_id'];
                            $comment_content = $row['comment_content'];
                            $comment_username = $row['comment_username'];
                            echo'
                            <div class="card" >
                            <div class="card-body" style="width:90%;margin:0">
                                <span class="card-title">'.$comment_id.'.</span>
                                <span class="card-title">'.$comment_username.':</span>
                                <h5 class="card-text">'.$comment_content.'</h5>
                            </div>
                            </div>
                            ';
                        }}
                    ?>
                </div>          
    </div>
    <div class="end-web">
        <div class="end-web-1">
            <ul>
                <li>GIỚI THIỆU X-SHOP
                    <hr width="20%" size="5px" align="center" color="red" />
                </li>
                <li>TRỤ SỞ CHÍNH
                    <hr width="20%" size="5px" align="center" color="red" />
                </li>
                <li>CHÍNH SÁCH
                    <hr width="20%" size="5px" align="center" color="red" />
                </li>
                <li>DANH SÁCH ĐỊA CHỈ
                    <hr width="20%" size="5px" align="center" color="red" />
                </li>
                <li>KẾT NỐI
                    <hr width="20%" size="5px" align="center" color="red" />
                </li>
            </ul>

        </div>
        <div class="end-web-2">
            <ul>
                <li>X-shop có trụ sở chính tại KM 13,<br> Quốc lộ 3, Thị trấn Đông Anh, Huyện<br> Đông Anh, TP Hà
                    Nội là
                    siêu
                    thị
                    điện<br> máy đầu tiên lớn nhất có mặt tại <br>Đông Anh, với tổng diện tích hơn 2000m2, mặt tiền
                    rộng
                    30m. Là
                    địa<br>
                    chỉ tin cậy cung cấp các sản phẩm:<br> Điện tử, Điện lạnh, Gia dụng, Mobile, Máy tính.
                    <img src="ảnh/thanh-toan.png" alt=""></li>

                <li>Địa chỉ 1: Km13,Quốc Lộ 3,Thị Trấn <br>Đông Anh, Hà Nội<br>
                    Điện thoại: 02439656356<br>
                    Địa chỉ 2: KĐT Tiến Phong, Đại Thịnh<br>, Mê Linh, Hà Nội<br>
                    Điện thoại: 02439656356<br>
                    Email: <a href="sieuthix-shop@x-shop.com.vn">sieuthix-shop@x-shop<br>.com.vn</a></li>
                <li><a href="#">Chính sách bảo mật<br></a>
                    <a href="#">Chính sách vận chuyển<br></a>
                    <a href="#">Chính sách đổi trả<br></a>
                    <a href="#">Quy định sử dụng<br></a>
                    <a href="#">Phương thức thanh toán<br></a>
                    <a href="#">Liên hệ<br></a>
                    <a href="#">Mua hàng: 0974.17.8586 -<br> 0243.965.6356<br></a>
                    <a href="#">Bảo hành 097.680.2674 -<br> 024.3965.6067<br></a>
                    <a href="#">Quan điểm kinh doanh</a></li>
                <li>
                    <a href="#">X-shop Đông Anh<br></a>
                    <a href="#">X-shop Mê Linh<br></a>
                    <a href="#">X-shop Phúc Yên<br></a>
                    <a href="#">X-shop Cầu Giấy<br></a>
                    <a href="#">X-shop Thanh Xuân<br></a>
                    <a href="#">X-shop Nam Từ Liêm<br></a>
                    <a href="#">X-shop Hà Đông<br></a>
                    <a href="#">X-shop Minh Khai<br></a>
                    <a href="#">X-shop Long Biên<br></a>
                    <a href="#">X-shop Từ Sơn
                </li>
                <li>
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FXSH0P%2F&tabs&width=340&height=70&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="340" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    <img src="ảnh/notification.png" alt="">
                </li>
            </ul>
        </div>
    </div>
    
</body>
                
</body>

</html>