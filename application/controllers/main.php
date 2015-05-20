<?php

/**
 * @author Wisnu
 * @copyright 2014
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        session_start();
    }
    
    function index()
    {
        $conf['menu'] = $this->publicfunction->generate_menu_custom('0','up',$h='','navlist','sf-menu clearfix');
        $conf['slider'] = $this->publicfunction->generate_slider();
        $conf['blog'] = $this->publicfunction->generate_blog();
        $conf['brands'] = $this->publicfunction->generate_brands();
        $conf['social'] = $this->publicfunction->generate_social();
        $conf['telp'] = $this->publicfunction->generate_info("info_telp");
        
        //$session = isset($_SESSION['data_member']) ?  $_SESSION['data_member'] : '';
        //if($session != ""){
          //  $expld = explode("|",$session);
            //$conf['member_name'] = $expld[1];
        //}
        
        $this->load->view('new/head',$conf);
        $this->load->view('new/top');
        $this->load->view('new/slider');
        $this->load->view('new/content');
        $this->load->view('new/footer');
    }

 function blog(){
	if ($this->uri->segment(3)==FALSE){
            $conf['menu'] = $this->publicfunction->generate_menu_custom('0','up',$h='','navlist','sf-menu clearfix');
            $conf['titlename'] = "Blog";
            $conf['telp'] = $this->publicfunction->generate_info("info_telp");
            
            $this->load->view('new/head',$conf);
            $this->load->view('new/top-2');
            $this->load->view('new/blog');
            $this->load->view('new/footer');
        }
        else{
            $uri = $this->uri->segment(3);
            $conf['menu'] = $this->publicfunction->generate_menu_custom('0','up',$h='','navlist','sf-menu clearfix');   
            $conf['det'] = "blog";
            $conf['telp'] = $this->publicfunction->generate_info("info_telp");
            
            $where['tb_id_blog'] = $uri;
            $content = $this->db->get_where("wq_blog",$where);
            foreach ($content->result() as $a){
                $conf['titlename'] = "Blog - ".$a->tb_name_blog;
                $conf['titlecontent'] = $a->tb_name_blog;
                $conf['date'] = $a->tb_date_blog;
                $conf['author'] = $a->tb_author_blog;
                $conf['source'] = $a->tb_source_blog;
                $conf['image'] = $a->tb_image_blog;
            }
            
            $this->load->view('new/head',$conf);
            $this->load->view('new/top-2');
            $this->load->view('new/singleblog');
            $this->load->view('new/footer');
        }
        
 }
 
 function page(){
        if ($this->uri->segment(3)==FALSE){
            show_404();
        }
        else{
            $uri = $this->uri->segment(3);
            $conf['menu'] = $this->publicfunction->generate_menu_custom('0','up',$h='','navlist','sf-menu clearfix');
            $conf['det'] = "content";
            $conf['telp'] = $this->publicfunction->generate_info("info_telp");
            
            $where['tb_id_content'] = $uri;
            $content = $this->db->get_where("wq_content",$where);
            foreach ($content->result() as $a){
                $conf['titlename'] = "Page - ".$a->tb_name_content;
                $conf['titlecontent'] = $a->tb_name_content;
                $conf['date'] = $a->tb_date_content;
                $conf['author'] = $a->tb_author_content;
                $conf['source'] = $a->tb_source_content;
                $conf['image'] = $a->tb_image_content;
            }
            
            $this->load->view('new/head',$conf);
            $this->load->view('new/top-2');
            $this->load->view('new/singleblog');
            $this->load->view('new/footer');
        }    
 }
 
 function products(){
     if ($this->uri->segment(3)==FALSE){
            $conf['menu'] = $this->publicfunction->generate_menu_custom('0','up',$h='','navlist','sf-menu clearfix');
            $conf['titlename'] = "Products";
            $conf['categories'] = $this->publicfunction->generate_products_categories();
            $conf['products']  = $this->publicfunction->generate_products();
            $conf['telp'] = $this->publicfunction->generate_info("info_telp");
            
            $this->load->view('new/head',$conf);
            $this->load->view('new/top-2');
            $this->load->view('new/products');
            $this->load->view('new/footer');
        }
        else{
            $uri = $this->uri->segment(3);
            $conf['menu'] = $this->publicfunction->generate_menu_custom('0','up',$h='','navlist','sf-menu clearfix');   
            $conf['det'] = "blog";
            $conf['telp'] = $this->publicfunction->generate_info("info_telp");
            
            $where['tb_id_blog'] = $uri;
            $content = $this->db->get_where("wq_blog",$where);
            foreach ($content->result() as $a){
                $conf['titlename'] = "Blog - ".$a->tb_name_blog;
                $conf['titlecontent'] = $a->tb_name_blog;
                $conf['date'] = $a->tb_date_blog;
                $conf['author'] = $a->tb_author_blog;
                $conf['source'] = $a->tb_source_blog;
                $conf['image'] = $a->tb_image_blog;
            }
            
            $this->load->view('new/head',$conf);
            $this->load->view('new/top-2');
            $this->load->view('new/singleblog');
            $this->load->view('new/footer');
        }
 }

}

/*@tramedifa twitter*/
/* End of file main.php */
/* Location: ./application/controllers/main.php */