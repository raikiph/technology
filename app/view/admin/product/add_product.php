<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }

?>
<h3 style="text-align: center;">Them san pham</h3>
<form action="<?php echo BASE_URL ?>/product/insert_product" method="post" enctype="multipart/form-data">
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Ten san pham</label>
    <input type="text" name="title_product" class="form-control">
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Hinh anh</label>
    <input type="file" name="image_product" class="form-control">
  </div> 
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Gia san pham</label>
    <input type="text" name="price_product" class="form-control" >
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">So luong san pham</label>
    <input type="text" name="quantity_product" class="form-control" >
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Mieu ta san pham</label>
    <textarea name="desc_product" id="" style="resize: none;" rows="10" class="form-control"></textarea>
    <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
  </div>
  <br>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Danh muc san pham</label>
   <select name="category_product" id="" class="form-control">
   <?php
   foreach ($category as $key => $cate) {
   ?> 
   <option value="<?php echo $cate['id_category']?>"><?php echo $cate['title_category']?></option>
   <?php
   }
   ?>
   </select>
  </div>
  <br>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">San pham hot</label>
   <select name="product_hot" id="" class="form-control">
  
   <option value="0">Khong</option>
   <option value="1">Co</option>
  
   </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary mx-5">Them san pham</button>
</form>