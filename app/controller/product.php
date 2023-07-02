<?php
class product extends dcontroller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->add_product();
    }
    public function add_product(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $table = 'category';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);

        $this->load->view('admin/product/add_product', $data);
        $this->load->view('admin/footer');
    }
    public function insert_product(){
        $title = $_POST['title_product'];
        $price = $_POST['price_product'];
        $hot = $_POST['product_hot'];
        $desc = $_POST['desc_product'];
        $quantity = $_POST['quantity_product'];
        $category = $_POST['category_product'];
        $image = $_FILES['image_product']['name'];
        $tmp_image = $_FILES['image_product']['tmp_name'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].'.'.$file_ext;

        move_uploaded_file($tmp_image,'public/upload/product/'.$image);

        $table = 'product';
        $data = array(
            'title_product' => $title,
            'price_product' => $price,
            'desc_product' => $desc,
            'product_hot' => $hot,
            'image_product' => $unique_image,
            'quantity_product' => $quantity,
            'id_category' => $category
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertproduct($table, $data);
        if($result==1){
            $message['msg'] = "Them san pham thanh cong";
            header('location:'.BASE_URL."/product?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Them san pham that bai";
            header('location:'.BASE_URL."/product?msg=".urldecode(serialize($message)));
        }
    }
    public function list_product(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $table_product = 'product';
        $table_category = 'category';
        $categorymodel = $this->load->model('categorymodel');
        $data['product'] = $categorymodel->product($table_product, $table_category);
        $this->load->view('admin/product/list_product', $data);
        $this->load->view('admin/footer');
    }
    public function delete_product($id){
        $table = 'product';
        $cond = "product.id_product='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deleteproduct($table,$cond); 
        if($result==1){
            $message['msg'] = "Xoa san pham thanh cong";
            header('location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Xoa san pham that bai";
            header('location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($message)));
        }
    }
    public function edit_product($id){
        $table = "product";
        $table_category = 'category';
        $cond = "id_product='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['productbyid'] = $categorymodel->productbyid($table, $cond); 
        $data['category'] = $categorymodel->category($table_category);

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/product/update_product',$data);
        $this->load->view('admin/footer');
    }
    public function update_product($id){
        $table = 'product';
        $cond ="id_product='$id'";
        $categorymodel = $this->load->model('categorymodel');

        $hot = $_POST['product_hot'];
        $title = $_POST['title_product'];
        $price = $_POST['price_product'];
        $desc = $_POST['desc_product'];
        $quantity = $_POST['quantity_product'];
        $category = $_POST['category_product'];
        $image = $_FILES['image_product']['name'];
        $tmp_image = $_FILES['image_product']['tmp_name'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].'.'.$file_ext;
       
        if($image){
        $data['productbyid'] = $categorymodel->productbyid($table, $cond); 
       foreach ($data['productbyid'] as $key => $value) {
            $path_unlink = "public/upload/product/";
            unlink($path_unlink.$value['image_product']);
       }
            $data = array(
                'product_hot' => $hot,
                'title_product' => $title,
                'price_product' => $price,
                'desc_product' => $desc,
                'image_product' => $unique_image,
                'quantity_product' => $quantity,
                'id_category' => $category
            );
            move_uploaded_file($tmp_image,'public/upload/product/'.$image);
        }else{
            $data = array(
                'product_hot' => $hot,
                'title_product' => $title,
                'price_product' => $price,
                'desc_product' => $desc,
                // 'image_product' => $unique_image,
                'quantity_product' => $quantity,
                'id_category' => $category
            );
        }
        $result = $categorymodel->updateproduct($table, $data, $cond);
        if($result==1){
            $message['msg'] = "Cap nhat san pham thanh cong";
            header('location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Cap nhat san pham that bai";
            header('location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($message)));
        }
    }
}
?>