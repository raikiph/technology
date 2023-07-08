<?php
class giohang extends dcontroller{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->giohang();   
    }
    public function giohang(){
        session::init();
        $table = 'category';
        $table_post_text = 'post_text';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['post_index'] = $categorymodel->post_index($table_post_text);

        $this->load->view('header', $data);
        // $this->load->view('slider');
        $this->load->view('cart');
        $this->load->view('footer', $data);
    }
    public function themgiohang(){
        session::init();
        // session::destroy();
        if(isset($_SESSION['shopping_cart'])){
            //san pham trung
            $avaiable = 0;
            foreach ($_SESSION['shopping_cart'] as $key => $value) {
                if($_SESSION['shopping_cart'][$key]['product_id'] == $_POST['product_id']){
                    $avaiable++;
                    $_SESSION['shopping_cart'][$key]['product_quantity'] = $_SESSION['shopping_cart'][$key]['product_quantity'] + $_POST['product_quantity'];
                }
            }
            //san pham khong trung
            if($avaiable == 0){
                $item = array(
                    'product_id' => $_POST['product_id'],
                    'product_title' => $_POST['product_title'],
                    'product_price' => $_POST['product_price'],
                    'product_image' => $_POST['product_image'],
                    'product_quantity' => $_POST['product_quantity']
                );
                $_SESSION['shopping_cart'][] = $item;
            }
        }else{
            $item = array(
                'product_id' => $_POST['product_id'],
                'product_title' => $_POST['product_title'],
                'product_price' => $_POST['product_price'],
                'product_image' => $_POST['product_image'],
                'product_quantity' => $_POST['product_quantity']
            );
            $_SESSION['shopping_cart'][] = $item;
        }
        header("location:".BASE_URL.'/giohang');
    }
    public function updategiohang(){
        session::init();
        if(isset($_POST['delete_cart'])){
            if(isset($_SESSION['shopping_cart'])){
                foreach ($_SESSION['shopping_cart'] as $key => $value) {
                    if($_SESSION['shopping_cart'][$key]['product_id'] == $_POST['delete_cart']){
                        unset($_SESSION['shopping_cart'][$key]);
                    }
                }
                header("location:".BASE_URL.'/giohang');
            }else{
                header("location:".BASE_URL);
            }
        }else{
                foreach ($_POST['qty'] as $key => $qty) {
                    foreach ($_SESSION['shopping_cart'] as $session => $value) {
                        if($value['product_id'] == $key && $qty >= 1){
                            $_SESSION['shopping_cart'][$session]['product_quantity'] = $qty;
                        }elseif($value['product_id'] == $key && $qty <= 0){
                            unset($_SESSION['shopping_cart'][$session]);
                        }
                    }
                }
                header("location:".BASE_URL.'/giohang');
            }
        }
        public function dathang(){
            session::init();
            $table_order = "don_hang"; 
            $table_order_detail = "don_hang_detail"; 
            $ordermodel = $this->load->model('ordermodel');
           
            $name = $_POST['name'];
            $sodienthoai = $_POST['sodienthoai'];
            $noidung = $_POST['noidung'];
            $diachi = $_POST['diachi'];
            $email = $_POST['email'];
           
            date_default_timezone_set('asia/ho_chi_minh');
            $date = date("d/m/Y");
            $hour = date("h:i:sa");
            $order_code = rand(0, 9999);
            $order_date = $date.$hour;
            $data_order = array(
                'order_status' => 0,
                'order_code' => $order_code,
                'order_date' => $date.' '.$hour,
            );
            $result_order = $ordermodel->insert_order($table_order, $data_order);
            if(session::get("shopping_cart") == true){
                foreach (session::get("shopping_cart")as $key => $value) {
                    $data_detail = array(
                        'order_code' => $order_code,
                        'product_id' => $value['product_id'],
                        'product_quantity' => $value['product_quantity'],
                        'name' => $name,
                        'sodienthoai'=> $sodienthoai,
                        'noidung'=>$noidung,
                        'diachi'=>$diachi,
                        'email'=>$email,
                    );
            $result_order_detail = $ordermodel->insert_order_detail($table_order_detail, $data_detail);
                }
                unset($_SESSION['shopping_cart']);
            }
            if($result_order_detail){

                $message['msg'] = "Dat hang thanh cong";
                header('location:'.BASE_URL."/giohang?msg=".urldecode(serialize($message)));
            }
        }
    }
?>