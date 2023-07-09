
<h1 align=center>Liet ke don hang chi tiet</h1>
<div class="col-md-9">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ten nguoi dat</th>
      <th scope="col">Email</th>
      <th scope="col">So dien thoai</th>
      <th scope="col">Dia chi</th>
      <th scope="col">Ghi chu</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    $total = 0;
    foreach ($order_info as $key => $ord) {
        // $total += $ord['product_quantity']*$ord['price_product'];
        $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $ord['name']; ?></td>
      <td><?php echo $ord['email']; ?></td>
      <td><?php echo $ord['sodienthoai']; ?></td>
      <td><?php echo $ord['diachi']; ?></td>
      <td><?php echo $ord['noidung']; ?></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ten san pham</th>
      <th scope="col">Hinh anh</th>
      <th scope="col">So luong</th>
      <th scope="col">Don gia</th>
      <th scope="col">Thanh tien</th>
      <!-- <th scope="col">Quan ly</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    $total = 0;
    foreach ($order_detail as $key => $ord) {
        $total += $ord['product_quantity']*$ord['price_product'];
        $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $ord['title_product']; ?></td>
      <td><img src="<?php echo BASE_URL?>/public/upload/product/<?php echo $ord['image_product']; ?>" alt="" width="100" height="100"></td>
      <td><?php echo $ord['product_quantity']; ?></td>
      <td><?php echo number_format( $ord['price_product'],0,',','.' ). 'd'?></td>
      <td><?php echo number_format( $ord['product_quantity']*$ord['price_product'],0,',','.' ). 'd' ?></td>
    </tr>
    <?php
    }
    ?>
    <form method="post" action="<?php echo BASE_URL?>/order/order_confirm/<?php echo $ord['order_code']?>">
        <tr>
            <td>
                <input type="submit" name="update_order" value="Da xu ly" class="btn btn-success">
            </td>
            <td align="right" colspan="6">Tong tien: <?php echo number_format( $total,0,',','.' ). 'd' ?></td>
        </tr>
    </form>
  </tbody>
</table>
</div>