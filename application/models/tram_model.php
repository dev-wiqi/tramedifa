<?php
Class tram_model extends CI_Model
{    
    function __construct(){
        parent::__construct();
        CI_loader::database();
    }
    
    function menu_utama($child){
        $query = $this->db->query("SELECT * FROM menu WHERE child = $child AND status = 'Y'");
        return $query;
    }
    
    function sub_menu($parent){
        $query = $this->db->query("SELECT * from menu WHERE child=".$parent."");
        return $query;
    }
    
    function slide($limit){
        $query = $this->db->query("SELECT * FROM imageslide ORDER BY RAND() LIMIT $limit");
        return $query;
    }
    
    function service_box(){
        $query = $this->db->query("SELECT * FROM info WHERE location = 'servicebox'");
        return $query;
    }
    
    function news_uptodate($limit){
        $query = $this->db->query("SELECT * FROM content WHERE location = 'news' ORDER BY id DESC LIMIT $limit");
        return $query;
    }
    
    function partners($limit){
        $query = $this->db->query("SELECT * FROM partners WHERE status = 'Y' ORDER BY RAND() LIMIT $limit");
        return $query;
    }
    
    function brands($limit){
        $query = $this->db->query("SELECT * FROM brands WHERE status = 'Y' ORDER BY RAND() DESC LIMIT $limit");
        return $query;
    }
    
    function products_uptodate($limit){
        $query = $this->db->query("SELECT * FROM products WHERE status = 'Y' ORDER BY id DESC LIMIT $limit");
        return $query;
    }
    
    function info($exp){
        $query = $this->db->query("SELECT * FROM infoboard WHERE title = '$exp'");
        return $query;
    }
    
    function news_all($limit,$offset){
        $query = $this->db->query("SELECT * FROM content WHERE status = 1 ORDER BY no DESC LIMIT $offset,$limit");
        return $query;
    }
    
    function products_by_categories(){
        $query = $this->db->query("SELECT * FROM products LEFT JOIN kategori ON ");
        return $query;
    }
    
    function products_all($exp){
        $query = $this->db->query("SELECT * FROM products WHERE kategori = '$cat' ORDER BY id DESC");
        return $query;    
    }
    
    function products_by_brand($uri){
        $query = $this->db->query("SELECT * FROM products WHERE brand = '$uri'");
        return $query;
    }
    
    function products_detail($exp){
        $query = $this->db->query("SELECT * FROM products WHERE id = $exp");
        return $query;
    }
    
    function products_menu($cat){
        $query = $this->db->query("SELECT * FROM products WHERE kategori = '$cat' ORDER BY id DESC LIMIT 4");
        return $query;    
    }
    
    function products_last(){
        $query = $this->db->query("SELECT * FROM products ORDER BY id DESC LIMIT 6");
        return $query;
    }
    
    function page_detail($page){
        $query = $this->db->query("SELECT * FROM content WHERE id = '$page'");
        return $query;
    }
    
    function kategori($location){
        $query = $this->db->query("SELECT * kategori WHERE location = '$location'");
        return $query;    
    }
    
}

/* End of file tram_model.php */
/* Location: ./application/model/tram_model.php */