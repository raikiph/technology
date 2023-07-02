<?php
class post extends dcontroller{
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->add_post();
    }
    public function add_post(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/post/add_post');
        $this->load->view('admin/footer');
    }
    public function insert_post(){
        $title = $_POST['title_post'];
        $desc= $_POST['desc_post'];
        $table = 'post';
        $data = array(
            'title_post' => $title,
            'desc_post' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertcategory_post($table, $data);
        if($result==1){
            $message['msg'] = "Them danh muc bai viet thanh cong";
            header('location:'.BASE_URL."/post/list_post?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Them danh muc bai viet that bai";
            header('location:'.BASE_URL."/post/list_post?msg=".urldecode(serialize($message)));
        }
    }
    public function list_post(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');

        $table = 'post';

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->post_category($table); 

        $this->load->view('admin/post/list_post', $data);
        $this->load->view('admin/footer');
    }
    public function delete_post($id){
        $table = 'post';
        $cond = "post.id_post='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory_post($table,$cond); 
        if($result==1){
            $message['msg'] = "Xoa danh muc bai viet thanh cong";
            header('location:'.BASE_URL."/post/list_post?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Xoa danh muc bai viet that bai";
            header('location:'.BASE_URL."/post/list_post?msg=".urldecode(serialize($message)));
        }
    }
    public function edit_post($id){
        $table = "post";
        $cond = "id_post='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categorybyid_post($table, $cond); 

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/post/update_post',$data);
        $this->load->view('admin/footer');
    }
    public function update_post($id){
        $table = "post";
        $cond = "id_post='$id'";
       
        $title = $_POST['title_post'];
        $desc = $_POST['desc_post'];
        $data = array(
            'title_post' => $title,
            'desc_post' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updatecategory_post($table, $data, $cond);
        if($result==1){
            $message['msg'] = "Cap nhat danh muc bai viet thanh cong";
            header('location:'.BASE_URL."/post/list_post?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Cap nhat danh muc bai viet that bai";
            header('location:'.BASE_URL."/post/list_post?msg=".urldecode(serialize($message)));
        }
    }
    public function add_post_text(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');

        $postmodel = $this->load->model('postmodel');
        $table = 'post';
        $data['category'] = $postmodel->category_post($table);

        $this->load->view('admin/post/add_post_text', $data);
        $this->load->view('admin/footer');
    }
    public function insert_post_text(){
        $title = $_POST['title_post_text'];
        $content = $_POST['content_post_text'];
        $image = $_FILES['image_post_text']['name'];
        $tmp_image = $_FILES['image_post_text']['tmp_name'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].'.'.$file_ext;

        move_uploaded_file($tmp_image,'public/upload/post/'.$image);
        $category = $_POST['category_post'];
        $table = 'post_text';
        $data = array(
            'title_post_text' => $title,
            'content_post_text' => $content,
            'image_post_text' => $unique_image,
            'id_post' => $category
        );
        $postmodel = $this->load->model('postmodel');
        $result = $postmodel->insertpost($table, $data);
        if($result==1){
            $message['msg'] = "Them bai viet thanh cong";
            header('location:'.BASE_URL."/post/add_post_text?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Them bai viet that bai";
            header('location:'.BASE_URL."/post/add_post_text?msg=".urldecode(serialize($message)));
        }
    }
    public function list_post_view(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $table_post_text = 'post_text';
        $table_post = 'post';
        $postmodel = $this->load->model('postmodel');
        $data['post'] = $postmodel->post($table_post_text, $table_post);
        $this->load->view('admin/post/list_post_view', $data);
        $this->load->view('admin/footer');
    }
    public function delete_post_text($id){
        $table_post_text = 'post_text';
        $cond = "id_post_text = '$id'";
        $postmodel = $this->load->model('postmodel');
        $result = $postmodel->deletepost($table_post_text,$cond); 
        if($result==1){
            $message['msg'] = "Xoa bai viet thanh cong";
            header('location:'.BASE_URL."/post/list_post_view?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Xoa bai viet that bai";
            header('location:'.BASE_URL."/post/list_post_view?msg=".urldecode(serialize($message)));
        }
    }
    public function edit_post_text($id){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $cond = "id_post_text = '$id'";
        $postmodel = $this->load->model('postmodel');
        $table = 'post';
        $table_post = 'post_text';
        $data['category'] = $postmodel->category_post($table);
        $data['postbyid'] = $postmodel->postbyid($table_post, $cond);
        $this->load->view('admin/post/update_post_text', $data);
        $this->load->view('admin/footer');
    }
    public function update_post_text($id){
        $table = 'post_text';
        $cond = "id_post_text = '$id'";
        $postmodel = $this->load->model('postmodel');

        $title = $_POST['title_post_text'];
        $content = $_POST['content_post_text'];
        $image = $_FILES['image_post_text']['name'];
        $tmp_image = $_FILES['image_post_text']['tmp_name'];
        $category = $_POST['category_post'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].'.'.$file_ext;
        
        if($image){
            $data['postbyid'] = $postmodel->postbyid($table, $cond); 
            foreach ($data['postbyid'] as $key => $value) {
                 $path_unlink = "public/upload/post/";
                 unlink($path_unlink.$value['image_post_text']);
            }
        $data = array(
            'title_post_text' => $title,
            'content_post_text' => $content,
            'image_post_text' => $unique_image,
            'id_post' => $category
        );
            move_uploaded_file($tmp_image,'public/upload/post/'.$image);
    }else{
        $data = array(
            'title_post_text' => $title,
            'content_post_text' => $content,
            // 'image_post_text' => $unique_image,
            'id_post' => $category
        );
    }
        $result = $postmodel->updatepost($table, $data, $cond);
        if($result==1){
            $message['msg'] = "Cap nhat bai viet thanh cong";
            header('location:'.BASE_URL."/post/list_post_view?msg=".urldecode(serialize($message)));
        }else{
            $message['msg'] = "Cap nhat bai viet that bai";
            header('location:'.BASE_URL."/post/list_post_view?msg=".urldecode(serialize($message)));
        }
    }
}
?>