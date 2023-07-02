<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }

?>
<h3 style="text-align: center;">Them bai viet</h3>
<form action="<?php echo BASE_URL ?>/post/insert_post_text" method="post" enctype="multipart/form-data">
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Ten bai viet</label>
    <input type="text" name="title_post_text" class="form-control">
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Hinh anh</label>
    <input type="file" name="image_post_text" class="form-control">
  </div> 
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Chi tiet bai viet</label>
    <textarea name="content_post_text" id="" style="resize: none;" rows="10" class="form-control"></textarea>
  </div>
  <br>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Danh muc bai viet</label>
   <select name="category_post" id="" class="form-control">
   <?php
   foreach ($category as $key => $cate) {
   ?> 
   <option value="<?php echo $cate['id_post']?>"><?php echo $cate['title_post']?></option>
   <?php
   }
   ?>
   </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary mx-5">Them bai viet</button>
</form>