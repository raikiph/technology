<section class="breadcrumb-section set-bg" data-setbg="<?php echo BASE_URL?>/public/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                if(isset($_SESSION['shopping_cart'])){
                    ?>
                <form action="<?php echo BASE_URL?>/giohang/updategiohang" method="post">
                <?php 
                    $total = 0;
                    foreach ($_SESSION['shopping_cart'] as $key => $value) {
                    $subtotal = $value['product_quantity']*$value['product_price']; 
                    $total+=$subtotal;
                        ?>    
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?php echo BASE_URL?>/public/upload/product/<?php echo $value['product_image']?>" width="100" height="100" alt="">
                                        <h5><?php echo $value['product_title']?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo number_format($value['product_price'],0,',','.').'vnd'?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="number" min="1" name="qty[<?php echo $value['product_id']?>]" value="<?php echo $value['product_quantity']?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo number_format($subtotal,0,',','.').'vnd'?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                    <button style="border: none;" type="submit" value="<?php echo $value['product_id']?>" name="delete_cart" class="btn btn-primary">Xoa</button>
                                    <button style="border: none;" type="submit" value="<?php echo $value['product_id']?>" name="update_cart" class="primary-btn cart-btn cart-btn-right">Cap nhat</button>
                                    <!-- <span class="icon_close"></span> -->
                                    </td>
                                </tr>
                               <?php
                               }
                               ?>
                </form>
             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo BASE_URL?>/index" class="btn btn-info">CONTINUE SHOPPING</a>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <!-- <li>Subtotal <span>$454.98</span></li> -->
                            <li>Tong tien thanh toan <span><?php echo number_format($total,0,',','.').'vnd'?></span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>