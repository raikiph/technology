<?php
class tintuc extends dcontroller{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->danhmuc();   
    }
    public function tatca(){
        $table = 'category';
        $table_post = 'post';
        $table_post_text = 'post_text';
        $categorymodel = $this->load->model('categorymodel');
        $postmodel = $this->load->model('postmodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['list_post'] = $postmodel->list_post_home($table_post_text);
        $data['post_index'] = $categorymodel->post_index($table_post_text);
        $this->load->view('header', $data);
        // $this->load->view('slider');
        $this->load->view('list_post', $data);
        $this->load->view('footer', $data); 
    }
    public function danhmuc($id){
        $table = 'category';
        $table_post = 'post';
        $table_post_text = 'post_text';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['postbyid'] = $categorymodel->postbyid_home($table_post_text, $table_post, $id);
        $data['post_index'] = $categorymodel->post_index($table_post_text);
        $this->load->view('header', $data);
        // $this->load->view('slider');
        $this->load->view('categorypost', $data);
        $this->load->view('footer', $data);
    }
    public function chitiettin($id){
        $table = 'category';
        $table_post = 'post';
        $table_post_text = 'post_text';
        $categorymodel = $this->load->model('categorymodel');
        $cond = "$table_post.id_post = $table_post_text.id_post AND $table_post_text.id_post_text='$id'";
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['postbyid'] = $categorymodel->postbyid_home($table_post,$table_post_text, $id);
       
        $data['details_post'] = $categorymodel->details_post_home($table_post, $table_post_text, $cond);
        foreach ($data['details_post'] as $key => $cate) {
            $id_cate = $cate['id_post'];
        }
        $cond_related = "$table_post.id_post = $table_post_text.id_post AND $table_post.id_post ='$id_cate' AND $table_post_text.id_post_text NOT IN('$id')";
        $data['related'] = $categorymodel->related_post_home($table_post, $table_post_text, $cond_related);
        $this->load->view('header',$data);
        // $this->load->view('slider');
        $this->load->view('detailpost', $data);
        $this->load->view('footer');
    }
}
?>