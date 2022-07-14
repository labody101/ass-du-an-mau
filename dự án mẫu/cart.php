<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <div class="container">
        <h1>Giỏ Hàng</h1>
            <div id="myModal" class="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                    </div>
                    <div class="modal-body">
                    <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                       
                        
                            <?php
                            include ('ketnoi.php');
                            if (isset($_COOKIE["name"])) {
                            }else {
                                header('Location:khach.php');
                            }
                            $username=$_COOKIE["name"];
                            $sql="SELECT * FROM cart WHERE username='$username'";
                            $result=mysqli_query($conn,$sql);
                            while ($row=mysqli_fetch_array($result)) {
                                $id=$row['product_id'];
                                $sql1="SELECT * FROM produc WHERE id='$id'";
                                $result1=mysqli_query($conn,$sql1);
                                while ($row1=mysqli_fetch_array($result1)) {
                                        $id1=$row1['id'];
                                        $product_name=$row1['product_name'];
                                        $price=$row1['sale_price'];
                                        $image=$row1['image'];
                                        $target_dir = "photo/";
                                        $target_file = $target_dir . $image;
                                        echo'
                                        
                                            <div class="cart-items">
                                            <form action="bill.php" method="post" enctype="multipart/form">
                                                <div class="cart-row">
                                                    <div class="cart-item cart-column">
                                                        <img class="cart-item-image" src="'.$target_file.'" width="100" height="100">
                                                        <span class="cart-item-title" >'.$product_name.'</span>
                                                        <input type="text" name="product_name" value="'.$product_name.'">
                                                    </div>
                                                    <span class="cart-price">'.$price.'</span>
                                                    <div class="cart-quantity cart-column">
                                                        <input class="cart-quantity-input" type="number" value="1" name="quantity">
                                                        <button class="btn btn-danger" type="button">Xóa</button>
                                                </div>
                                                </form>
                                            </div>
                                            <hr size="5px" color="green">
                                       
                                        ';
                            }
                        }
                        
                            ?>
                            
                            <div class="cart-total">
                                <strong class="cart-total-title">Tổng Cộng:</strong>
                                <span class="cart-total-price" ></span>
                            </div>
                        
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                                <button type="submit" class="btn btn-primary order">Thanh Toán</button>
                            </div>
                            
                            
                </div>
            </div>
        </div>
            <script>
            // Modal
                var modal = document.getElementById("myModal");
                var btn = document.getElementById("cart");
                var close = document.getElementsByClassName("close")[0];
                // tại sao lại có [0] như  thế này bởi vì mỗi close là một html colection nên khi mình muốn lấy giá trị html thì phải thêm [0]. 
                //Nếu mình có 2 cái component cùng class thì khi [0] nó sẽ hiển thị component 1 còn [1] thì nó sẽ hiển thị component 2.
                var close_footer = document.getElementsByClassName("close-footer")[0];
                var order = document.getElementsByClassName("order")[0];
                order.onclick = function () {
                alert("Cảm ơn bạn đã thanh toán đơn hàng")
                }
                close_footer.onclick = function () {
                    window.location.href = "index.php";
                }
                window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                }
                // xóa cart
                var remove_cart = document.getElementsByClassName("btn-danger");
                for (var i = 0; i < remove_cart.length; i++) {
                var button = remove_cart[i]
                button.addEventListener("click", function () {
                    var button_remove = event.target
                    button_remove.parentElement.parentElement.remove()
                    <?php
                     $sql1="DELETE FROM cart WHERE id='$id'";
                     $result=mysqli_query($conn,$sql);
                    ?>
                })
                }
                // update cart 
                function updatecart() {
                var cart_item = document.getElementsByClassName("cart-items")[0];
                var cart_rows = cart_item.getElementsByClassName("cart-row");
                var total = 0;
                for (var i = 0; i < cart_rows.length; i++) {
                    var cart_row = cart_rows[i]
                    var price_item = cart_row.getElementsByClassName("cart-price ")[0]
                    var quantity_item = cart_row.getElementsByClassName("cart-quantity-input")[0]
                    var price = parseFloat(price_item.innerText)// chuyển một chuổi string sang number để tính tổng tiền.
                    var quantity = quantity_item.value // lấy giá trị trong thẻ input
                    total = total + (price * quantity)
                }
                document.getElementsByClassName("cart-total-price")[0].innerText = total + 'VNĐ'
                // Thay đổi text = total trong .cart-total-price. Chỉ có một .cart-total-price nên mình sử dụng [0].
                }
                // thay đổi số lượng sản phẩm
                var quantity_input = document.getElementsByClassName("cart-quantity-input");
                for (var i = 0; i < quantity_input.length; i++) {
                var input = quantity_input[i];
                input.addEventListener("change", function (event) {
                    var input = event.target
                    if (isNaN(input.value) || input.value <= 0) {
                    input.value = 1;
                    }
                    updatecart()
                })
                }
            </script>
            <?php
                                    
            ?>
</body>
</html>
