<?php
                            $name ='Danh muc chua san pham';
                             foreach ($category_by_id as $key => $pro) {
                                $name = $pro['title_category'];
                            }
                            ?>
<section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="product__discount">
              <div class="section-title product__discount__title">
                <h2>NEW HOT SHOP</h2>
              </div>

              <div class="row">
                <div class="product__discount__slider owl-carousel">
                <?php 
                foreach ($product as $key => $product_slide) {
            if($product_slide['product_hot']==1){
        ?>
                  <div class="col-lg-4">
                    <div class="product__discount__item">
                      <div
                        class="product__discount__item__pic set-bg"
                        data-setbg="  "
                      >
                      <img src="<?php echo BASE_URL?>/public/upload/product/<?php echo $product_slide['image_product']?>" alt="">
                        <div class="product__discount__percent">HOT</div>
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
                      <div class="product__discount__item__text">
                        <!-- <span>Dried Fruit</span> -->
                        <h5><a href="<?php echo BASE_URL?>/sanpham/chitietsanpham/<?php echo $product_slide['id_product']?>"><?php echo $product_slide['title_product']?></a></h5>
                        <div class="product__item__price">
                        <?php echo number_format($product_slide['price_product'],0,',','.').'vnd'?>
                        </div>
                      </div>
                    </div>
                  </div>
<?php
}
                }
?>
                </div>
              </div>


            </div>

            <h2 style="height: 45px">Danh muc: <?php echo $name ?></h2>
            <div class="row">

  <?php
  foreach ($category_by_id as $key => $product) {
  ?>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg=""
                  >
                  <img src="<?php echo BASE_URL?>/public/upload/product/<?php echo $product['image_product']?>" alt="">
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
                    <h6><a href="<?php echo BASE_URL?>/sanpham/chitietsanpham/<?php echo $product['id_product']?>"><?php echo $product['title_product']?></a></h6>
                    <h5><?php echo number_format($product['price_product'],0,',','.').'vnd'?></h5>
                  </div>
                </div>
              </div>
  <?php
  }
  ?>
            </div>
            <div class="product__pagination">
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#"><i class="fa fa-long-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>