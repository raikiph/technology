<?php
class loginmodel extends dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function login($table_admin, $username, $password){
        $sql = "SELECT * FROM $table_admin WHERE username=? AND password=?";
        return $this->db->affectedRows($sql, $username, $password);
    }
    public function getlogin($table_admin, $username, $password){
        $sql = "SELECT * FROM $table_admin WHERE username=? AND password=?";
        return $this->db->selectuser($sql, $username, $password);
    }
}
?>