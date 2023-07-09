<?php
class order extends dcontroller{
    function __construct()
    {
        session::checksession();
        parent::__construct();
    }
    public function index(){
        $this->order();
    }
    public function order(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $ordermodel = $this->load->model('ordermodel');
        $table_order = "don_hang";
        $data['order'] = $ordermodel->list_order($table_order);
        $this->load->view('admin/order/order', $data);
        $this->load->view('admin/footer');
    }
    public function order_detail($order_code){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');

        $ordermodel = $this->load->model('ordermodel');
        $table_order_detail = "don_hang_detail";
        $table_product = "product";
        $cond = "$table_product.id_product=$table_order_detail.product_id AND $table_order_detail.order_code = '$order_code'";
        $cond_info = "$table_order_detail.order_code = '$order_code'";
        $data['order_detail'] = $ordermodel->list_order_detail($table_product,$table_order_detail, $cond);
        $data['order_info'] = $ordermodel->list_info($table_order_detail, $cond_info);
       
        $this->load->view('admin/order/order_detail', $data);
        $this->load->view('admin/footer');
    }
    public function order_confirm($order_code){
        $ordermodel = $this->load->model('ordermodel');
        $table_order = "don_hang";
        $cond = "$table_order.order_code='$order_code'"; 
        $data = array(
            'order_status' => 1
        );
    $result= $ordermodel->order_confirm($table_order, $data, $cond);

    if($result==1){
        $message['msg'] = "Da xu ly don hang thanh cong";
        header('location:'.BASE_URL."/order?msg=".urldecode(serialize($message)));
    }else{
        $message['msg'] = "Da xu ly don hang that bai";
        header('location:'.BASE_URL."/order?msg=".urldecode(serialize($message)));
    }
    }
}
?>