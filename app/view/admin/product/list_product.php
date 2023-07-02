<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }
?>
<h1 align=center>Liet ke san pham</h1>
<div class="col-md-9">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ten san pham</th> 
      <th scope="col">Hinh san pham</th> 
      <th scope="col">Danh muc</th> 
      <th scope="col">Gia san pham</th> 
      <th scope="col">So luong san pham</th> 
      <th scope="col">San pham hot</th> 
      <th scope="col">Mo ta</th> 
      <th scope="col">Quan ly</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($product as $key => $pro) {
        $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $pro['title_product']; ?></td>
      <td><img src="<?php echo BASE_URL ?>/public/upload/product/<?php echo $pro['image_product']; ?>" width="100" height="100" alt=""> </td> 
      <td><?php echo $pro['title_category']; ?></td>
      <td><?php echo $pro['price_product']; ?></td>
      <td><?php echo $pro['quantity_product']; ?></td>
      <td><?php if($pro['product_hot'] == 0){
        echo 'San pham thuong';
      } else{
        echo 'San pham hot';
      }
      ?></td>
      <td><?php echo $pro['desc_product']; ?></td>
      <td>
        <a href="<?php echo BASE_URL?>/product/delete_product/<?php echo $pro['id_product']; ?>">Xoa</a>||
        <a href="<?php echo BASE_URL?>/product/edit_product/<?php echo $pro['id_product']; ?>">Cap nhat</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>