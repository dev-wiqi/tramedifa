<?php

/**
 * @author Wisnu
 * @copyright 2014
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        session_start();
    }
    
    function index(){
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."'>";
    }
    
    function blog(){
        $conf['menu'] = $this->publicfunction->generate_menu('0','1',$h='');
        $conf['alkes'] = $this->publicfunction->generate_products('0','1',$h='','alkes');
        $conf['obat'] = $this->publicfunction->generate_products('0','1',$h='','obat');
        $conf['it'] = $this->publicfunction->generate_products('0','1',$h='','it');
        //$session = isset($_SESSION['data_member']) ?  $_SESSION['data_member'] : '';
        //if($session != ""){
          //  $expld = explode("|",$session);
            //$conf['member_name'] = $expld[1];
        //}
        
        $uri = "";
        if ($this->uri->segment(3) === FALSE){
            $uri = "";
        }
        else{
            $uri = $this->uri->segment(3);
        }
        $detail = $this->tram_model->page_detail($uri);
        foreach ($detail->result() as $pd){
            $conf['title'] = $pd->title;
            $conf['source'] = $pd->source;
            $conf['author'] = $pd->author;
            $conf['date'] = $pd->date;
            $conf['image'] = $pd->image;
        }
        
        $this->load->view('home/head',$conf);
        $this->load->view('home/header-2',$conf);
        $this->load->view('content/content',$conf);
        $this->load->view('home/footer',$conf);
        
    }
    
    function contact(){
        $conf['menu'] = $this->publicfunction->generate_menu('0','1',$h='');
        $conf['alkes'] = $this->publicfunction->generate_products('0','1',$h='','alkes');
        $conf['obat'] = $this->publicfunction->generate_products('0','1',$h='','obat');
        $conf['it'] = $this->publicfunction->generate_products('0','1',$h='','it');
        //$session = isset($_SESSION['data_member']) ?  $_SESSION['data_member'] : '';
        //if($session != ""){
          //  $expld = explode("|",$session);
            //$conf['member_name'] = $expld[1];
        //}
        
        $uri = "";
        if ($this->uri->segment(3) === FALSE){
            $uri = "";
        }
        else{
            $uri = $this->uri->segment(3);
        }
        $detail = $this->tram_model->page_detail($uri);
        foreach ($detail->result() as $pd){
            $conf['title'] = $pd->title;
            $conf['source'] = $pd->source;
            $conf['author'] = $pd->author;
            $conf['date'] = $pd->date;
            $conf['image'] = $pd->image;
        }
        
        $this->load->view('home/head',$conf);
        $this->load->view('home/header-2',$conf);
        $this->load->view('content/contact',$conf);
        $this->load->view('home/footer',$conf);
    }
    
    function detail(){
        $conf['menu'] = $this->publicfunction->generate_menu('0','1',$h='');
        $conf['alkes'] = $this->publicfunction->generate_products('0','1',$h='','alkes');
        $conf['obat'] = $this->publicfunction->generate_products('0','1',$h='','obat');
        $conf['it'] = $this->publicfunction->generate_products('0','1',$h='','it');
        //$session = isset($_SESSION['data_member']) ?  $_SESSION['data_member'] : '';
        //if($session != ""){
          //  $expld = explode("|",$session);
            //$conf['member_name'] = $expld[1];
        //}
        
        $uri = "";
        if ($this->uri->segment(3) === FALSE){
            $uri = "";
        }
        else{
            $uri = $this->uri->segment(3);
        }
        $detail = $this->tram_model->page_detail($uri);
        foreach ($detail->result_array() as $pd){
            $conf['title'] = $pd['title'];
            $conf['source'] = $pd['source'];
            $conf['author'] = $pd['author'];
            $conf['date'] = $pd['date'];
            //$conf['image'] = $pd->image;
        }
        
        $this->load->view('home/head',$conf);
        $this->load->view('home/header-2',$conf);
        $this->load->view('content/page',$conf);
        $this->load->view('home/footer',$conf);
    }
    
    function faq(){
        $conf['menu'] = $this->publicfunction->generate_menu('0','1',$h='');
        $conf['alkes'] = $this->publicfunction->generate_products('0','1',$h='','alkes');
        $conf['obat'] = $this->publicfunction->generate_products('0','1',$h='','obat');
        $conf['it'] = $this->publicfunction->generate_products('0','1',$h='','it');
        
        $conf['faq'] = $this->publicfunction->generate_faq('1');
        
        $this->load->view('home/head',$conf);
        $this->load->view('home/header-2',$conf);
        $this->load->view('content/faq',$conf);
        $this->load->view('home/footer',$conf);
    }

}


/* End of file page.php */
/* Location: ./application/controllers/page.php */