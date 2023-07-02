<?php  
    foreach ($details_post as $key => $value) {
        $name_post = $value['title_post_text'];
        $name_category_post = $value['title_post'];
        $id_cate = $value['id_post'];
    }
?>
<?php 
foreach ($details_post as $key => $post) {
  # code...
?>
<section class="blog-details-hero set-bg" data-setbg="<?php echo BASE_URL?>/public/img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2><?php echo $name_category_post?> > <?php echo $name_post?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7 order-md-1 order-1">
            <div class="blog__details__text">
              <img src="<?php echo BASE_URL?>/public/upload/post/<?php echo $post['image_post_text']?>" alt="" />
              <h3>
              <?php echo $post['title_post_text']?>
              </h3>
              <p>
              <?php echo $post['content_post_text']?>
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <?php 
}
    ?>

    <section class="related-blog spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title related-blog-title">
              <h2>Tin tuc lien quan</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ($related as $key => $relate) {
          ?>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div class="blog__item__pic">
                <img src="<?php echo BASE_URL?>/public/upload/post/<?php echo $relate['image_post_text']?>" alt="" />
              </div>
              <div class="blog__item__text">
                <!-- <ul>
                  <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                  <li><i class="fa fa-comment-o"></i> 5</li>
                </ul> -->
                <h5><a href="<?php echo BASE_URL?>/tintuc/chitiettin/<?php echo $relate['id_post_text']?>"><?php echo $relate['title_post_text']?></a></h5>
                <!-- <p>
                  Sed quia non numquam modi tempora indunt ut labore et dolore
                  magnam aliquam quaerat
                </p> -->
              </div>
            </div>
          </div>
          <?php 
          }
          ?>
        </div>
      </div>
    </section>
