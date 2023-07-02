<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }

?>
<h3 style="text-align: center;">Cap nhat san pham</h3>
    <?php
    foreach ($productbyid as $key => $pro) {
    ?>
<form action="<?php echo BASE_URL ?>/product/update_product/<?php echo $pro['id_product'] ?>" method="post" enctype="multipart/form-data">
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Ten san pham</label>
    <input type="text" value="<?php echo $pro['title_product'] ?>" name="title_product" class="form-control">
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Hinh anh</label>
    <input type="file" name="image_product" class="form-control">
    <p><img src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $pro['image_product']; ?>" width="100" height="100" alt=""></p>
  </div> 
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Gia san pham</label>
    <input type="text" value="<?php echo $pro['price_product'] ?>" name="price_product" class="form-control" >
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">So luong san pham</label>
    <input type="text" value="<?php echo $pro['quantity_product'] ?>" name="quantity_product" class="form-control" >
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Mieu ta san pham</label>
    <textarea name="desc_product" id="" style="resize: none;" rows="10" class="form-control"><?php echo $pro['desc_product'] ?></textarea>
  </div>
  <br>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Danh muc san pham</label>
   <select name="category_product" id="" class="form-cintrol">
   <?php
   foreach ($category as $key => $cate) {
   ?> 
   <option <?php if($pro['id_category']==$cate['id_category']) {echo 'selected';}?> value="<?php echo $cate['id_category']?>"><?php echo $cate['title_category']?></option>
   <?php
   }
   ?>
   </select>
  </div>
  <br>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">San pham hot</label>
   <select name="product_hot" id="" class="form-control">
  <?php 
  if($pro['product_hot'] == 0){
  ?>
      <option selected value="0">Khong</option>
      <option value="1">Co</option>  
  <?php
  }else{
  ?>
     <option value="0">Khong</option>
    <option selected value="1">Co</option>  
  <?php
  }
  ?>
   </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary mx-5">Cap nhat san pham</button>
</form> 
<?php
    }
?>
</div>