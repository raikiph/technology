<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }
?>
<h1 align=center>Liet ke danh muc</h1>
<div class="col-md-9">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ten danh muc</th>
      <th scope="col">Quan ly</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($category as $key => $cate) {
        $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $cate['title_category']; ?></td>
      <td>
        <a href="<?php echo BASE_URL?>/category/delete_category/<?php echo $cate['id_category']; ?>">Xoa</a>||
        <a href="<?php echo BASE_URL?>/category/edit_category/<?php echo $cate['id_category']; ?>">Cap nhat</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>