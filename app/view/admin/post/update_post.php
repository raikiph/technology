<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }

?>
<h3 style="text-align: center;">Cap nhat danh muc bai viet</h3>
<?php
foreach ($categorybyid as $key => $cate) {
?>  
<form action="<?php echo BASE_URL ?>/post/update_post/<?php echo $cate['id_post']?>" method="post">
  <div class="col-md-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Ten bai viet</label>
    <input type="text" value="<?php echo $cate['title_post']; ?>" name="title_post" class="form-control" >
  </div>
  <div class="col-md-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Mieu ta bai viet</label>
    <input type="text" value="<?php echo $cate['desc_post']; ?>" name="desc_post" class="form-control" >
  </div>
  <br>
  <button type="submit" class="btn btn-primary mx-5">Cap nhat danh muc</button>
</form>
<?php
}
?>