<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }

?>
<h3 style="text-align: center;">Cap nhat bai viet</h3>
    <?php
    foreach ($postbyid as $key => $pos) {
    ?>
<form action="<?php echo BASE_URL ?>/post/update_post_text/<?php echo $pos['id_post_text'] ?>" method="post" enctype="multipart/form-data">
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Ten bai viet</label>
    <input type="text" value="<?php echo $pos['title_post_text'] ?>" name="title_post_text" class="form-control">
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Hinh anh</label>
    <input type="file" name="image_post_text" class="form-control">
    <p><img src="<?php echo BASE_URL ?>/public/upload/post/<?php echo $pos['image_post_text']; ?>" width="100" height="100" alt=""></p>
  </div> 
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Chi tiet bai viet</label>
    <textarea name="content_post_text" id="" style="resize: none;" rows="10" class="form-control"><?php echo $pos['content_post_text'] ?></textarea>
  </div>
  <br>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Danh muc san pham</label>
   <select name="category_post" id="" class="form-control">
   <?php
   foreach ($category as $key => $cate) {
   ?> 
   <option <?php if($pos['id_post']==$cate['id_post']) {echo 'selected';}?> value="<?php echo $cate['id_post']?>"><?php echo $cate['title_post']?></option>
   <?php
   }
   ?>
   </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary mx-5">Cap nhat bai viet</button>
</form> 
<?php
    }
?>
</div>