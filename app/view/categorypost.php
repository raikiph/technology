<?php
                            $name ='Danh muc chua co tin';
                             foreach ($postbyid as $key => $post_name) {
                                $name = $post_name['title_post'];
                            }
                            ?>
<section class="breadcrumb-section set-bg" data-setbg="/technology/public/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Blog</span>
                          
                            <span><?php echo '-'.$name ?></span>;
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <?php 
                        foreach ($postbyid as $key => $post) {
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo BASE_URL?>/public/upload/post/<?php echo $post['image_post_text']?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="<?php echo BASE_URL?>/tintuc/chitiettin/<?php echo $post['id_post_text']?>"><?php echo $post['title_post_text']?></a></h5>
                                    <p><?php echo substr($post['content_post_text'], 0, 50) ?>...</p>
                                    <a href="<?php echo BASE_URL?>/tintuc/chitiettin/<?php echo $post['id_post_text']?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>