<?php
class login extends dcontroller{
    public function __construct()
    {              
        $message = array();
        $data = array();
        parent::__construct();
    }
    public function index(){
        $this->login();   
    }
    public function login(){
        session::init();
        $table = 'category';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $this->load->view('header', $data);
        if(session::get("login")==true){
            header("location:".BASE_URL."/login/dashboard");
        }
        $this->load->view('admin/login');
        $this->load->view('footer');
    }
    public function dashboard(){
        session::checksession();
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
    public function dangnhap(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $table_admin = 'admin';
        $loginmodel = $this->load->model('loginmodel');
        $count = $loginmodel->login($table_admin, $username, $password);

        if($count == 0){
            $message['msg'] = "user hoac pass sai, xin kiem tra lai";
            header("location:".BASE_URL."/login");
        }else{

            $result = $loginmodel->getlogin($table_admin, $username, $password);
            session::init();
            session::set('login', true);
            session::set('username', $result[0]['username']);
            session::set('userid', $result[0]['admin_id']);
            header("location:".BASE_URL."/login/dashboard");
        }
    }
    public function loginout(){
        session::init();
        session::destroy();
        header("location:".BASE_URL."/login");
    }
}
?>