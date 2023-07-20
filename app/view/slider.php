<section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                <?php
                            foreach ($category as $key => $cate) {
                            ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="">
                            <img src="<?php echo BASE_URL?>/public/upload/category/<?php echo $cate['image_category']?>" alt="">
                            <h5>
                                <a href="<?php echo BASE_URL?>/sanpham/danhmuc/<?php echo $cate['id_category']?>"><?php echo $cate['title_category']?></a>
                            </h5>
                        </div>
                    </div>
<?php
                            }
?>
                </div>
            </div>
        </div>
    </section>
