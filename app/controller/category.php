<?php
class category extends dcontroller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->add_category();
    }
    public function add_category(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/category/add_category');
        $this->load->view('admin/footer');
    }
    public function insert_category(){
        $title = $_POST['title_category'];
        $table = 'category';
        $data = array(
            'title_category' => $title
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertcategory($table, $data);
        if($result==1){
            $message['msg'] = "Them danh muc san pham thanh cong";
            header('location:'.BASE_URL."/category?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Them danh muc san pham that bai";
            header('location:'.BASE_URL."/category?msg=".urldecode(serialize($message)));
        }
    }
    public function list_category(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');

        $table = 'category';

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table); 

        $this->load->view('admin/category/list_category', $data);
        $this->load->view('admin/footer');
    }
    public function delete_category($id){
        $table = 'category';
        $cond = "category.id_category='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory($table,$cond); 
        if($result==1){
            $message['msg'] = "Xoa danh muc san pham thanh cong";
            header('location:'.BASE_URL."/category/list_category?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Xoa danh muc san pham that bai";
            header('location:'.BASE_URL."/category/list_category?msg=".urldecode(serialize($message)));
        }
    }
    public function edit_category($id){
        $table = "category";
        $cond = "id_category='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categorybyid($table, $cond); 

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/category/update_category',$data);
        $this->load->view('admin/footer');
    }
    public function update_category($id){
        $table = "category";
        $cond = "id_category='$id'";
       
        $title = $_POST['title_category'];
        $data = array(
            'title_category' => $title
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updatecategory($table, $data, $cond);
        if($result==1){
            $message['msg'] = "Cap nhat danh muc san pham thanh cong";
            header('location:'.BASE_URL."/category/list_category?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Cap nhat danh muc san pham that bai";
            header('location:'.BASE_URL."/category/list_category?msg=".urldecode(serialize($message)));
        }
    }
}
?>