<?php
class postmodel extends dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function category_post($category){
        $sql = "SELECT * FROM $category";
        return $this->db->select($sql);
    }
    public function postbyid($category, $cond){
        $sql = "SELECT * FROM $category WHERE $cond";
        return $this->db->select($sql);
    }
    public function post($table_post_text, $table_post){
        $sql = "SELECT * FROM $table_post_text, $table_post WHERE $table_post_text.id_post=$table_post.id_post";
        return $this->db->select($sql);
    }
    public function insertpost($category, $data){
        return $this->db->insert($category, $data);
    }
    public function updatepost($category, $data, $cond){
        return $this->db->update($category, $data, $cond);
    }
    public function deletepost($category, $cond){
        return $this->db->delete($category, $cond);
    }
    public function list_post_home($table_post_text){
        $sql = "SELECT * FROM $table_post_text";
        return $this->db->select($sql);
    }
}
?>