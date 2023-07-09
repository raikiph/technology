<?php
class ordermodel extends dmodel{
    public function __construct()
    {
        parent::__construct();
    }
  public function insert_order($table_order, $data_order){
    return $this->db->insert($table_order, $data_order);
}
public function insert_order_detail($table_order_detail, $data_detail){
      return $this->db->insert($table_order_detail, $data_detail);
  }
  public function list_order($table_order){
    $sql = "SELECT * FROM $table_order";
    return $this->db->select($sql);
  }
  public function list_order_detail($table_product, $table_order_detail, $cond){
    $sql = "SELECT * FROM $table_order_detail, $table_product WHERE $cond";
    return $this->db->select($sql);
  }
  public function list_info($table_order_detail, $cond_info){
    $sql = "SELECT * FROM $table_order_detail WHERE $cond_info";
    return $this->db->select($sql);
  }
  public function order_confirm($table_order, $data, $cond){
    return $this->db->update($table_order, $data, $cond);
}
}

?>