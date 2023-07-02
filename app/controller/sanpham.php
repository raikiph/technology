<?php
class sanpham extends dcontroller{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->danhmuc();   
    }
    public function danhmuc($id){
    
        // $this->load->view('slider');
        $table = 'category';
        $table_product = 'product';
        $table_post_text = 'post_text';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_by_id'] = $categorymodel->categorybyid_home($table, $table_product, $id);
        $data['post_index'] = $categorymodel->post_index($table_post_text);
        $data['product'] = $categorymodel->list_product_index($table_product);
        $this->load->view('header', $data);
        $this->load->view('categoryproduct', $data);
        $this->load->view('footer', $data);
    }
    public function chitietsanpham($id){
        $table = 'category';
        $table_product = 'product';
        $table_post = 'post';
        $table_post_text = 'post_text';
        $cond = "$table_product.id_category = $table.id_category AND $table_product.id_product='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['post_index'] = $categorymodel->post_index($table_post_text);
        $data['detail_product'] = $categorymodel->detail_product_home($table, $table_product, $cond);
        
        foreach ($data['detail_product'] as $key => $cate) {
            $id_cate = $cate['id_category'];
        }
        $cond_related = "$table_product.id_category = $table.id_category AND $table.id_category = '$id_cate' AND $table_product.id_product NOT IN('$id')";
        $data['related'] = $categorymodel->related_product_home($table, $table_product, $cond_related);
        $this->load->view('header', $data);
        // $this->load->view('slider');
        $this->load->view('detailproduct', $data);
        $this->load->view('footer', $data);
    }
    public function tatca(){
        $table = 'category';
        $table_post = 'post';
        $table_product = 'product';
        $table_post_text = 'post_text';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['list_product'] = $categorymodel->list_product_home($table_product);
        $data['post_index'] = $categorymodel->post_index($table_post_text);

        $this->load->view('header', $data);
        $this->load->view('list_product', $data);
        $this->load->view('footer', $data);
    }
}
?>