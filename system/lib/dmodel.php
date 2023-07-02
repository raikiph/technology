<?php
class dmodel{
    // protected chi ke thua moi goi duoc
    // public goi cho tat ca
    protected $db = array();
    public function __construct()
    {
        $connect = 'mysql:dbname=technologystore; host=localhost; charset=utf8';
        $user='root';
        $pass='';
        $this->db = new database($connect, $user, $pass);
    }
}
?>