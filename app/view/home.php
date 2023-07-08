
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="/technology/public/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="/technology/public/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
   
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
   
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Hot</li>
                        </ul>
                    </div>
                </div>
            </div>
            
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
    </section>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
        <?php foreach ($product as $key => $prod) {
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="">
                        <img src="<?php echo BASE_URL?>/public/upload/product/<?php echo $prod['image_product']?>" alt="">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo BASE_URL?>/sanpham/chitietsanpham/<?php echo $prod['id_product']?>"><?php echo $prod['title_product']?></a></h6>
                            <h5><?php echo number_format($prod['price_product'],0,',','.').'vnd'?></h5>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
                <?php
                foreach ($category as $key => $cate) {
                ?>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*"><?php echo $cate['title_category']?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
                foreach ($product as $key => $pro_cate) {
                    if($cate['id_category']==$pro_cate['id_category']){        
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="">
                        <img src="<?php echo BASE_URL?>/public/upload/product/<?php echo $pro_cate['image_product']?>" alt="">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?php echo BASE_URL?>/sanpham/chitietsanpham/<?php echo $pro_cate['id_product']?>"><?php echo $pro_cate['title_product']?></a></h6>
                            <h5><?php echo number_format($pro_cate['price_product'],0,',','.').'vnd'?></h5>
                        </div>
                    </div>
                </div>
             <?php
                }}
             ?>
            </div>
        </div>
    </section>
                <?php
                }
                ?>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/technology/public/img/banner/iPhone 15 ProMAXUltra.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/technology/public/img/banner/Xiaomi 13.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
   
    <!-- Footer Section End -->

    <!-- Js Plugins -->
