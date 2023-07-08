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
                    <?php
                        if(!empty($_GET['msg'])){
                            $msg =  unserialize(urldecode($_GET['msg']));
                            foreach ($msg as $key => $value) {
                                echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
                            }
                        }
                        ?>
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
                            <!-- <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form> -->
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
                }else{
                    ?>
                        <div class="col-lg-6">
                            <h5>Gio hang trong</h5>
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo BASE_URL?>/index" class="btn btn-info">CONTINUE SHOPPING</a>    
                    </div>
                </div>
<?php
}
?>

            </div>
            <form method="post" action="<?php echo BASE_URL ?>/giohang/dathang">
  <div class="form-row">
    <div class="col-md-12 mb-12">
      <label for="validationDefault01">Ho va ten</label>
      <input type="text" class="form-control" name="name" id="" placeholder="Ho ten khach hang" >
    </div>
    <div class="col-md-12 mb-12">
      <label for="validationDefault02">So dien thoai</label>
      <input type="number" class="form-control" name="sodienthoai" id="" placeholder="Ho ten khach hang">
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-12">
        <label for="validationDefault03">Dia chi</label>
        <input type="text" class="form-control" id="" name="diachi" placeholder="Dia chi nhan hang" required>
    </div>
    <div class="col-md-12 mb-12">
      <label for="validationDefaultUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="" name="email" placeholder="Username">
      </div>
    </div>
      <div class="form-group col-md-12 mb-12">
    <label for="exampleFormControlTextarea1">Noi dung</label>
    <textarea name="noidung" class="form-control" style="resize: none;" id="exampleFormControlTextarea1" rows="10" cols=""></textarea>
  </div>
    <br>
    <div class="col-md-12 mb-12">
     <input class="btn btn-primary" type="reset">
  <button class="btn btn-primary" type="submit">GUI DON HANG</button>
    </div>
  </div>
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div> -->

</form>
        </div>
    </section>