<?php
class load{
    public function __construct()
    {
    }
    public function view($fileName, $data = false){
        if($data == true){
            extract($data);
        }
        include 'app/view/'.$fileName.'.php';
    }
    public function model($fileName){
        include 'app/model/'.$fileName.'.php';
        return new $fileName();
    }
}
?>