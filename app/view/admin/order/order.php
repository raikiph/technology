<?php
 if(!empty($_GET['msg'])){
    $msg =  unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        echo '<span style="color:blue; font-weight:bold;text-align=center;">'.$value.'</span>';
    }
 }
?>
<h1 align=center>Liet ke don hang</h1>
<div class="col-md-9">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Code don hang</th>
      <th scope="col">Ngay dat</th>
      <th scope="col">Tinh trang</th>
      <th scope="col">Quan ly</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    foreach ($order as $key => $ord) {
        $i++;
    ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $ord['order_code']; ?></td>
      <td><?php echo $ord['order_date']; ?></td>
      <td><?php if($ord['order_status']==0){echo 'Don hang moi';}else{echo 'Da xu ly';} ?></td>
      <td>
        <a href="<?php echo BASE_URL?>/order/order_detail/<?php echo $ord['order_code']; ?>">Xem don hang</a>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>