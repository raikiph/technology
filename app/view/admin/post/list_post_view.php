<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }
?>
<h1 align=center>Liet ke bai viet</h1>
<div class="col-md-9">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ten san pham</th> 
      <th scope="col">Hinh san pham</th> 
      <th scope="col">Danh muc</th> 
      <th scope="col">Chi tiet bai viet</th> 
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($post as $key => $pos) {
        $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $pos['title_post_text']; ?></td>
      <td><img src="<?php echo BASE_URL ?>/public/upload/post/<?php echo $pos['image_post_text']; ?>" width="100" height="100" alt=""> </td> 
      <td><?php echo $pos['title_post']; ?></td>
      <td><?php echo $pos['content_post_text']; ?></td>
      <td>
        <a href="<?php echo BASE_URL?>/post/delete_post_text/<?php echo $pos['id_post_text']; ?>">Xoa</a>||
        <a href="<?php echo BASE_URL?>/post/edit_post_text/<?php echo $pos['id_post_text']; ?>">Cap nhat</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>