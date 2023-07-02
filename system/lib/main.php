<?php
class Main{
    public $url;
    public $controllername = "index";
    public $methodname = "index";
    public $controllerpath = 'app/controller/';
    public $controller;
    function __construct()
    {       
        $this->geturl();
        $this->loadcontroller();
        $this->callmethod();
    }
    public function geturl(){
        $this->url = isset($_GET['url']) ? $_GET['url'] : NULL ;
        if($this->url!=NULL){
            $this->url = rtrim($this->url, '/'); // cat ky tu cuoi sau dau /
            $this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL)); //cat dau /
        }else{
            unset($this->url);
        }
    }
    public function loadcontroller(){
        if(!isset($this->url[0])){
            include $this->controllerpath.$this->controllername.'.php';
            $this->controller = new $this->controllername();
        }else{
            $this->controllername = $this->url[0];
            $filename = $this->controllerpath.$this->controllername.'.php';
            if(file_exists($filename)){
                include $filename;
                if(class_exists($this->controllername)){
                    $this->controller = new $this->controllername();
                }else{

            }
        }else{

        }
        }
    }
    public function callmethod(){
        if(isset($this->url[2])){
            $this->methodname = $this->url[1];
            if(method_exists($this->controller, $this->methodname)){
                $this->controller->{$this->methodname}($this->url[2]);
            }else{
                header("location:".BASE_URL."/index/notfound");
            }
        }else{
            if(isset($this->url[1])){
                $this->methodname = $this->url[1];                
                if(method_exists($this->controller, $this->methodname)){
                    $this->controller->{$this->methodname}();
                }else{
                    header("location:".BASE_URL."/index/notfound");
                }
            }else{
                if(method_exists($this->controller, $this->methodname)){                  
                    $this->controller->{$this->methodname}();
                }else{
                    header("location:".BASE_URL."/index/notfound");
                }
            }
        }
    }
}
?>