<?php  
    foreach ($detail_product as $key => $value) {
        $name_product = $value['title_product'];
        $name_category = $value['title_category'];
    }
?>
<?php
 foreach ($detail_product as $key => $detail) {
?>
<form action="<?php echo BASE_URL?>/giohang/themgiohang" method="post">
<input type="hidden" value="<?php echo $detail['id_product']?>" name="product_id">
<input type="hidden" value="<?php echo $detail['title_product']?>" name="product_title">
<input type="hidden" value="<?php echo $detail['image_product']?>" name="product_image">
<input type="hidden" value="<?php echo $detail['price_product']?>" name="product_price">
<input type="hidden" value="1" name="product_quantity">
  <section class="product-details spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="product__details__pic">
            <div class="product__details__pic__item">
              <img class="product__details__pic__item--large"
              src="<?php echo BASE_URL?>/public/upload/product/<?php echo $detail['image_product']?>" alt="">
            </div>
            <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                            src="img/product/details/thumb-4.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <h3>Danh muc: <?php echo $name_category?>><?php echo $name_product?></h3>
                        <div class="product__details__text">
                          <h3><?php echo $name_product?></h3>
                          <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                          </div>
                          <div class="product__details__price"><?php echo number_format($detail['price_product'],0,',','.').'vnd'?></div>
                          <p><?php echo $detail['desc_product']?></p>
                          <div class="product__details__quantity">
                            <div class="quantity">
                              <div class="pro-qty">
                                <input type="text" value="1">
                              </div>
                            </div>
                          </div>
                          <input style="border: none;" type="submit" class="primary-btn" name="addcart" value="ADD TO CART">
                          <!-- <a href="#" class="primary-btn">ADD TO CARD</a> -->
                        </div>
                      </div>
                    </div>
                  </section>
                </form>
    <?php
    }
    ?>
      <section class="related-product">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title related__product__title">
              <h2>Related Product</h2>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
        foreach ($related as $key => $relate) {
                ?>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg=""
              >
              <img src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $relate['image_product']?>" alt="">
                <ul class="product__item__pic__hover">
                  <li>
                    <a href="#"><i class="fa fa-heart"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-retweet"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6><a href="#"><?php echo $relate['title_product']?></a></h6>
                <h5>$30.00</h5>
              </div>
            </div>
          </div>
          <?php
        }
          ?>
        </div>
      </div>
    </section>
 