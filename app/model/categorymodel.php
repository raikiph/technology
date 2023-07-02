<?php
class categorymodel extends dmodel{
    public function __construct()
    {
        parent::__construct();
    }
    public function category($category){
        $sql = "SELECT * FROM $category";
        return $this->db->select($sql);
    }
    public function category_home($category){
        $sql = "SELECT * FROM $category";
        return $this->db->select($sql);
    }
    public function categorybyid_home($table, $table_product, $id){
        $sql = "SELECT * FROM $table,$table_product WHERE $table.id_category=$table_product.id_category AND $table_product.id_category='$id'";
        return $this->db->select($sql);
    }
    public function categorybyid($category, $cond){
        $sql = "SELECT * FROM $category WHERE $cond";
        return $this->db->select($sql);
    }
    public function insertcategory($category, $data){
        return $this->db->insert($category, $data);
    }
    public function updatecategory($category, $data, $cond){
        return $this->db->update($category, $data, $cond);
    }
    public function deletecategory($category, $cond){
        return $this->db->delete($category, $cond);
    }
    // danh muc bai viet
    public function insertcategory_post($category, $data){
        return $this->db->insert($category, $data);
    }
    public function post_category($category){
        $sql = "SELECT * FROM $category";
        return $this->db->select($sql);
    }
    public function categorypost_home($category){
        $sql = "SELECT * FROM $category";
        return $this->db->select($sql);
    }
    public function postbyid_home($table_post_text, $table_post, $id){
        $sql = "SELECT * FROM $table_post_text, $table_post WHERE $table_post_text.id_post=$table_post.id_post AND $table_post_text.id_post='$id'";
        return $this->db->select($sql);
    }
    public function deletecategory_post($category, $cond){
        return $this->db->delete($category, $cond);
    }
    public function categorybyid_post($category, $cond){
        $sql = "SELECT * FROM $category WHERE $cond";
        return $this->db->select($sql);
    }
    public function updatecategory_post($category, $data, $cond){
        return $this->db->update($category, $data, $cond);
    }
    // san pham
    public function insertproduct($category, $data){
        return $this->db->insert($category, $data);
    }
    public function product($table_product, $table_category){
        $sql = "SELECT * FROM $table_product, $table_category WHERE $table_product.id_category=$table_category.id_category";
        return $this->db->select($sql);
    }
    public function deleteproduct($category, $cond){
        return $this->db->delete($category, $cond);
    }
    public function productbyid($category, $cond){
        $sql = "SELECT * FROM $category WHERE $cond";
        return $this->db->select($sql);
    }
    public function updateproduct($category, $data, $cond){
        return $this->db->update($category, $data, $cond);
    }
    public function list_product_home($table_product){
        $sql = "SELECT * FROM $table_product";
        return $this->db->select($sql);
    }
    public function list_product_index($table_product){
        $sql = "SELECT * FROM $table_product";
        return $this->db->select($sql);
    }
    public function details_post_home($table_post,$table_post_text, $cond){
        $sql = "SELECT * FROM $table_post, $table_post_text WHERE $cond";
        return $this->db->select($sql);
    }
    public function detail_product_home($table, $table_product, $cond){
        $sql = "SELECT * FROM $table_product,$table WHERE $cond";
        return $this->db->select($sql);
    }
    public function related_product_home($table, $table_product, $cond_related){
        $sql = "SELECT * FROM $table,$table_product WHERE $cond_related";
        return $this->db->select($sql);
    }
    public function related_post_home($table_post, $table_post_text, $cond_related){
        $sql = "SELECT * FROM $table_post,$table_post_text WHERE $cond_related";
        return $this->db->select($sql);
    }
    public function post_index($table_post_text)
    {
        $sql = "SELECT * FROM $table_post_text ORDER BY id_post_text DESC LIMIT 3";
        return $this->db->select($sql);
    }
}
?>