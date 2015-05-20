<?php

/**
 * @author wisnu
 * @copyright 2014
 */
 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class manage extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('tram_admin_model');
        session_start();
    }    
    
    function index(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Dashboard";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/dashboard',$conf);
                $this->load->view('manage/footer',$conf);
            }
       }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
            } 
    }
    
    function loginaccess(){
        $username = mysql_escape_string($this->input->post('username'));
        $password = mysql_escape_string($this->input->post('password'));
        $begin = $this->tram_admin_model->login_admin($username,$password);
        
        if (count($begin->result_array()) > 0){
            $sessionID = session_id();
            foreach($begin->result() as $sess){
                $session_group = $sess->username."|".$sess->role."|".$sessionID;    
            }
            $_SESSION['root_manage'] = $session_group;
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage'>";
        }
        else{
            $conf['login_error'] = "Username Atau Password Yang Anda Masukan Salah";
            $this->load->view('manage/login',$conf);
        }
    }
    
    function login(){
        $session=isset($_SESSION['root_manage']) ? $_SESSION['root_manage']:'';
        $sessionID = session_id();
        
		if($session!=""){
			echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage'>";
		}
        
        else{
            $conf["login_error"] = "";
            $this->load->view('manage/login');
        }
    }
    
    function logout(){
        session_destroy();
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."'>";
    }
    
    function member(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $conf["username"] = $expld[0];
            $conf["role"] = $expld[1];
        }
            if ($conf["role"] = "administrator"){
                $conf["title"] = "Member Register";
                $conf["member"] = $this->tram_admin_model->user_member();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/member',$conf);
                $this->load->view('manage/footer',$conf);
            }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }
    }
    
    function slide(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Slide";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }   
                $conf['slide'] = $this->tram_admin_model->slide();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/slide',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }          
    }
    
    function content_page(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Content";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                $conf['contentAll'] = $this->tram_admin_model->contentall();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/content',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."managet/login'>";
        }     
    }
    
     
    function contentAdd(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Add New Content";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                
                $conf['kategori'] = $this->tram_admin_model->kategoriall();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/addcontent',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function contentEdit(){
        $uri = '';
        if ($this->uri->segment(3) === FALSE){
            $uri = '';
        }
        else {
            $uri = $this->uri->segment(3);
        }
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Edit Content";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                $content = $this->tram_admin_model->content($uri);
                foreach($content->result() as $c){
                    $conf['titlecon'] = $c->title;
                    $conf['content'] = $c->source;
                    $conf['date'] = $c->date;
                    $conf['imagecon'] = $c->image;
                    $conf['author'] = $c->author; 
                }
                
                $conf['kategori'] = $this->tram_admin_model->kategoriall();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/editcontent',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function contentInsert(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $title = $this->input->post('title');
                $kategori = $this->input->post('kategori');
                $author = $this->input->post('author');
                $date = $this->input->post('date');
                $source = $this->input->post('content');
                $image = $_FILES['img']['name'];
                
                if ($_FILES['img']['type'] == "image/jpeg"){
                    $src = "media/content/".strtolower(str_replace(' ','_',$_FILES['img']['name']) );
                    if (move_uploaded_file($_FILES['img']['tmp_name'],$src)){
                        chmod("$src",0777);
                    }else{
                        echo "Gagal Melakukan Upload File";
                        exit;
                    }
                    
                    $thumb_src = "media/content/thumbnail/".strtolower(str_replace(' ','_',$_FILES['img']['name']) );
                    
                    $new_width = 150;
                    $new_height = 150;
                    
                    if(($_FILES['img']['type'] == "image/jpeg") || ($_FILES['img']['type']=="image/png") ||($_FILES['img']['type']=="image/gif")){
                        $thumb = @imagecreatefromjpeg($src) or
                        $thumb = @imagecreatefromgif($src) or
                        $thumb = @imagecreatefrompng($src) or
                        $thumb = false;
                        
                        $width = imagesx($thumb);
                        $height = imagesy($thumb);
                        
                        if (($height == 0) && ($width==0)){
                            $new_height = $height;
                            $new_width = $width;
                        }
                        
                        if (!$thumb){
                            echo '<p>Gagal Membuat Thumbnail</p>';
                            exit;
                        }
                        else{
                            $thumbnail = @imagecreatetruecolor($new_width,$new_height);
                            @imagecopyresized($thumbnail,$thumb,0,0,0,0,$new_width,$new_height,$width,$height);
                            @imagejpeg($thumbnail,$thumb_src);
                            chmod("$thumb_src",0777);
                        }
                        $this->tram_admin_model->custom_query("INSERT INTO content (title,source,author,date,image,kategori) VALUES ('$title','$source','$author','$date','$image','$kategori')");
                        echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/content_page'>";
                    }
                }
                    else{
                        echo "Mohon Periksa Kembali Jenis File Gambar Yang Anda Upload";
                    }
                }   
             }
                else{
                    echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
                }
        }
        
    function menu_content(){
            $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Menu";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                $conf['menuAll'] = $this->tram_admin_model->menuall();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/menu',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."managet/login'>";
        }     
    }
    function menuAdd(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Add New Menu";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                
                $conf['parent'] = $this->tram_admin_model->parentmenu();
                $conf['content'] = $this->tram_admin_model->contentall();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/addmenu',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function menuEdit(){
        $uri = '';
        if ($this->uri->segment(3) === FALSE){
            $uri = '';
        }
        else {
            $uri = $this->uri->segment(3);
        }
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Edit Menu Content";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                $content = $this->tram_admin_model->menucontent($uri);
                foreach($content->result() as $c){
                    $conf['id'] = $c->id;
                    $conf['name'] = $c->name;
                    $conf['parent'] = $c->child;
                    $conf['link'] = $c->link;
                    $conf['url'] = $c->link_url;
                    $conf['type'] = $c->type;
                    $conf['status'] = $c->status; 
                }
                
                $conf['parent'] = $this->tram_admin_model->parentmenu();
                $conf['content'] = $this->tram_admin_model->contentacc('1');
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/editmenu',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function menuInsert(){
         $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $name = $this->input->post('name');
                $parent = $this->input->post('parent');
                $link = $this->input->post('link');
                $url = $thi->input->post('url');
                $type = $this->input->post('type');
                
                $this->tram_admin_model->custom_query("INSERT INTO menu (name,link,link_url,child,type,status) VALUES ('$name','$link','$url','$parent','$type','1')");
                echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/menu_content'>";
            }
        }
    }
    
    function menuUpdate(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $name = $this->input->post('name');
                $parent = $this->input->post('parent');
                $link = $this->input->post('link');
                $url = $this->input->post('url');
                $type = $this->input->post('type');
                $status = $this->input->post('status');
                $id = $this->input->post('id');
                
                $this->tram_admin_model->custom_query("UPDATE menu SET name = '$name',child = '$parent',link = '$link',type = '$type',link_url = '$url', status = '$status' WHERE id = '$id'");
                echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/menu_content'>";
            }
        }
    }
    
    function menuRemove(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $uri = '';
                if ($this->uri->segment(3) === FALSE){
                $uri = '';
                }
                else {
                $uri = $this->uri->segment(3);
                }
                
                $this->tram_admin_model->delete('menu','id',$uri);
                echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/menu_content'>";
            }
        }
    }
    
    function products_page(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Products Page";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                
                $conf['productsall'] = $this->tram_admin_model->productsall();
                $conf['productscat'] = $this->tram_admin_model->products_cat();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/product',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function productsAdd(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Products Page";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                
                $conf['brand'] = $this->tram_admin_model->products_cat();
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/addproduct',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."managet/login'>";
        }     
    }
    
    function productsInsert(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
              
                $config['upload_path'] = './media/products/';
                $config['allowed_types']= 'gif|jpg|png|jpeg';
                $config['encrypt_name']	= TRUE;
                $config['remove_spaces']	= TRUE;	
                $config['max_size']     = '3000';
		$config['max_width']  	= '3000';
		$config['max_height']  	= '3000';
			 
		$this->load->library('upload', $config);
	 
		if ($this->upload->do_upload("img")) {
                    $data	 	= $this->upload->data();
			 
                    /* PATH */
                    $source             = "./media/products/".$data['file_name'] ;
                    $destination_thumb	= "./media/products/thumbnail/" ;			 
                    // Permission Configuration
                    chmod($source, 0777) ;
			 
                    /* Resizing Processing */
                    // Configuration Of Image Manipulation :: Static
                    $this->load->library('image_lib') ;
                    $img['image_library'] = 'GD2';
                    $img['create_thumb']  = TRUE;
                    $img['maintain_ratio']= TRUE;
			 
                    /// Limit Width Resize
                    $limit_thumb    = 640 ;
			 
                    // Size Image Limit was using (LIMIT TOP)
                    $limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
			 
                    // Percentase Resize
                    if ($limit_use > $limit_thumb) {
                        $percent_thumb  = $limit_thumb/$limit_use ;
			}
			 
                    //// Making THUMBNAIL ///////
                    $img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
                    $img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
			 
                    // Configuration Of Image Manipulation :: Dynamic
                    $img['thumb_marker'] = '';
                    $img['quality']      = '100%' ;
                    $img['source_image'] = $source ;
                    $img['new_image']    = $destination_thumb ;
			 
                    // Do Resizing
                    $this->image_lib->initialize($img);
                    $this->image_lib->resize();
                    $this->image_lib->clear() ;
                
                $ins['name'] = $this->input->post('title');
                $ins['date'] = $this->input->post('date');
                $ins['image'] = $data['file_name'];
                $ins['detail'] = $this->input->post('content');
                $ins['brand'] = $this->input->post('brand');
                $ins['kategori'] = $this->input->post('kategori');
                $ins['status'] = "Y";
                
                $this->db->insert("products",$ins);
                
                redirect("manage/products_page");
              }  
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    function productsRemove(){
        $uri = '';
        if ($this->uri->segment(3) === FALSE){
            $uri = '';
        }
        else {
            $uri = $this->uri->segment(3);
        }
        
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $this->tram_admin_model->custom_query("DELETE FROM products WHERE id = '$uri'");
                redirect(manage/products_page);
            }
        }
    }
    
    function faq_content(){
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Faq Page";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                    $conf['contentAll'] = $this->tram_admin_model->faqall();
                    
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/faq',$conf);
                $this->load->view('manage/footer',$conf);   
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function faqAdd(){
         $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Add New Faq";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/addfaq',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function faqEdit(){
        $uri = '';
        if ($this->uri->segment(3) === FALSE){
            $uri = '';
        }
        else {
            $uri = $this->uri->segment(3);
        }
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $conf['title'] = "Edit FAQ";
                $conf['menu'] = $this->tram_admin_model->menu($sess['role']);
                $det = $this->tram_admin_model->count_table('username','user','WHERE status = 1');
				foreach($det->result() as $a)
				{
				    $conf['count_user'] = $a->jml;
				}
                $user_det = $this->tram_admin_model->user_info($sess['username']);
                foreach($user_det->result() as $b){
                    $conf['usr'] = $b->username;
                    $conf['image'] = $b->avatar;    
                }
                $c = $this->tram_admin_model->faqedit($uri);
                foreach($c->result() as $b){
                    $conf['id'] = $b->id;
                    $conf['question'] = $b->question;
                    $conf['answer'] = $b->answer;
                }
                
                $this->load->view('manage/header',$conf);
                $this->load->view('manage/menu',$conf);
                $this->load->view('manage/system/editfaq',$conf);
                $this->load->view('manage/footer',$conf);
            }
        }
        else {
            echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/login'>";
        }     
    }
    
    function faqUpdate(){
         $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $question = $this->input->post('question');
                $answer = $this->input->post('answer');
                $type = $this->input->post('type');
                $id = $this->input->post('id');
                
                $this->tram_admin_model->custom_query("UPDATE faq_content SET question = '$question', answer = '$answer', status = '$type' WHERE id = '$id'");
                echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/faq_content'>";
            }
        }
    }
    
    function faqInsert(){
         $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $question = $this->input->post('question');
                $answer = $this->input->post('answer');
                
                $this->tram_admin_model->custom_query("INSERT INTO faq_content (question,answer) VALUES ('$question','$answer')");
                echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/faq_content'>";
            }
        }
    }
    
    function faqRemove(){
        $uri = '';
        if ($this->uri->segment(3) === FALSE){
            $uri = '';
        }
        else {
            $uri = $this->uri->segment(3);
        }
        
        $session = isset($_SESSION['root_manage']) ? $_SESSION['root_manage']: '';
        if($session != ""){
            $expld = explode("|",$session);
            $sess["username"] = $expld[0];
            $sess["role"] = $expld[1];
            if ($sess['role'] == "administrator"){
                $this->tram_admin_model->custom_query("DELETE FROM faq_content WHERE id = '$uri'");
                echo "<meta http-equiv='refresh' content='0; url=".base_url()."manage/faq_content'>";
            }
        }
    }
    
    function download_page(){
        
    }
    
    function downloadAdd(){
        
    }
    
    function downloadEdit(){
        
    }
    
    function downloadInsert(){
        
    }
    
    function user_page(){
        
    }
    
    function userAdd(){
        
    }
    
    function userEdit(){
        
    }
    
    function userInsert(){
        
    }
    
    
}

/* End of file manage.php */
/* Location: ./application/controllers/manage.php */