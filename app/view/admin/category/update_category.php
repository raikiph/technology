<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }

?>
<h3 style="text-align: center;">Cap nhat danh muc san pham</h3>
<?php
foreach ($categorybyid as $key => $cate) {
?>  
<form action="<?php echo BASE_URL ?>/category/update_category/<?php echo $cate['id_category']?>" method="post">
  <div class="col-md-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">ID DANH MUC</label>
    <input type="text" name="id_category" class="form-control" disabled>
  </div>
  <div class="col-md-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">TEN DANH MUC</label>
    <input type="text" value="<?php echo $cate['title_category']; ?>" name="title_category" class="form-control" >
  </div>
  <br>
  <button type="submit" class="btn btn-primary mx-5">Cap nhat danh muc</button>
</form>
<?php
}
?>