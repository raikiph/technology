<?php
class index extends dcontroller{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->homepage();   
    }
    public function homepage(){
        $table = 'category';
        $table_post = 'post';
        $table_product = 'product';
        $table_post_text = 'post_text';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['product'] = $categorymodel->list_product_index($table_product);
        $data['post_index'] = $categorymodel->post_index($table_post_text);

        $this->load->view('header', $data);
        // $this->load->view('slider');
        $this->load->view('home' ,$data);
        $this->load->view('footer', $data);
    }
    public function shop(){
        $table = 'category';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);

        $this->load->view('header', $data);
        // $this->load->view('slider');
        $this->load->view('shop');
        $this->load->view('footer');
    }
    public function notfound(){
        $table = 'category';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $this->load->view('header', $data);
        $this->load->view('404');
        $this->load->view('footer');
    }
    public function lienhe(){
        $table = 'category';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $this->load->view('header', $data);
        // $this->load->view('slider');
        $this->load->view('contact');
        $this->load->view('footer');
    }
}
?>