<?php

Class tram_admin_model extends CI_Model 
{
    function __construct(){
        parent::__construct();
        CI_loader::database();
    }    		
    
    function menu($level){
        $query = $this->db->query("SELECT * FROM adminmenu WHERE role = '$level'");
        return $query;
    }
    
    //function submenu($level,$child){
        //$query = $this->db->query("SELECT * FROM adminmenu WHERE level = '$level' AND child = '$child'");
        //return $query;
    //}
    
    function slide(){
        $query = $this->db->query("SELECT * FROM imageslide ORDER BY id DESC");
        return $query;
    }
    
    function service_box(){
        $query = $this->db->query("SELECT * FROM info WHERE location='servicebox'");
        return $query;
    }
    
    function newsall(){
        $query = $this->db->query("SELECT * FROM content WHERE location = 'news' ORDER BY id DESC");
        return $query;
    }
    
    function contentall(){
        $query = $this->db->query("SELECT * FROM content ORDER BY id DESC ");
        return $query;
    }
    
    function contentacc($exp){
        $query = $this->db->query("SELECT * FROM content WHERE status = $exp");
        return $query;
    }
    
    function menuall(){
        $query = $this->db->query("SELECT * FROM menu");
        return $query;
    }
    
    function parentmenu(){
        $query = $this->db->query("SELECT name,id FROM menu WHERE child = 0");
        return $query;
    }
    
    function menucontent($uri){
        $query = $this->db->query("SELECT * FROM menu WHERE id = $uri");
        return $query;
    }
    
    function delete($table,$where,$uri){
        $query = $this->db->query("DELETE FROM $table WHERE $where = $uri");
        return $query;
    }
    
    function partners(){
        $query = $this->db->query("SELECT * FROM partners ORDER BY id DESC");
        return $query;
    }
    
    function info($title){
        $query = $this->db->query("SELECT * FROM infoboard WHERE title = '$title'");
        return $query;
    }
    
    function content($idcontent){
        $query = $this->db->query("SELECT * FROM content WHERE id = $idcontent");
        return $query;
    }
    
    function productsall(){
        $query = $this->db->query("SELECT * FROM products ORDER BY id DESC");
        return $query;
    }
    
    function products_cat(){
        $query = $this->db->query("SELECT * FROM products_cat ORDER BY id DESC");
        return $query;
    }
    
    function kategoriall(){
        $query = $this->db->query("SELECT * FROM kategori WHERE status = 1 ORDER BY id DESC");
        return $query;
    }
    
    function faqall(){
        $query = $this->db->query("SELECT * FROM faq_content ORDER BY id ASC");
        return $query;
    }
    
    function faqedit($exp){
        $query = $this->db->query("SELECT * FROM faq_content WHERE id = $exp");
        return $query;
    }
    
    function user_member(){
        $query = $this->db->query("SELECT * FROM member ORDER BY id DESC");
        return $query;
    }
    
    function user_admin(){
        $query = $this->db->query("SELECT * FROM useradmin ORDER BY id DESC");
        return $query;
    }
    
    function user_info($data){
        $query = $this->db->query("SELECT * FROM useradmin WHERE username = '$data'");
        return $query;
    }
    
    function custom_query($data){
        $query = $this->db->query($data);
        return $query;
    }
    
    function delete_query($id,$exp,$table){
        $this->db->where($exp,$id);
        $this->db->delete($table);
    }
    
    function count_table($field,$table,$exp){
        $query = $this->db->query("SELECT count($field) as jml FROM $table $exp");
        return $query;
    }
    
    function update_visit($data,$user){
        $query = $this->db->query("UPDATE useradmin SET last_visit = '$data' WHERE username = '$user'");
        return $query;
    }
    
    function update_sessionid($date,$user){
        $query = $this->db->query("UPDATE useradmin SET sid = '$data' WHERE username = '$user'");
        return $query;
    }
    
    function session_check($user){
        $query = $this->db->query("SELECT sid FROM useradmin WHERE username = '$user'");
        return $query;    
    }
    
    function login_admin($user,$pass){
        $user_clean = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($user,ENT_QUOTES))));
        $pass_clean = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($pass,ENT_QUOTES))));
        $query = $this->db->query("SELECT * FROM useradmin WHERE username = '$user_clean' AND password = md5('$pass_clean')");
        return $query;
    }
}
?>