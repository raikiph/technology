<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }

?>
<h3 style="text-align: center;">Them danh muc san pham</h3>
<form action="<?php echo BASE_URL ?>/category/insert_category" enctype="multipart/form-data" method="post">
  <div class="col-md-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">ID DANH MUC</label>
    <input type="text" name="id_category" class="form-control" disabled>
  </div>
  <div class="col-md-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">TEN DANH MUC</label>
    <input type="text" name="title_category" class="form-control" >
  </div>
  <div class="col-md-6 mx-5">
    <label for="" class="form-label">Hinh anh</label>
    <input type="file" name="image_category" class="form-control">
  </div> 
  <br>
  <button type="submit" class="btn btn-primary mx-5">Them danh muc</button>
</form>