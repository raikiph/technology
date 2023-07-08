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
}

?>