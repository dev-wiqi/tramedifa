<?php

/**
 * @author wisnu
 * @copyright 2014
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        session_start();
    }
    
    function index(){
        $conf['menu'] = $this->publicfunction->generate_menu_custom('0','up',$h='','navlist','sf-menu clearfix');
        
        
       $this->load->view('new/head',$conf);
       $this->load->view('new/top');
       $this->load->view('new/products');
       $this->load->view('new/footer');
    }
    
    function cat(){
        $conf['menu'] = $this->publicfunction->generate_menu('0','1',$h='');
        $conf['alkes'] = $this->publicfunction->generate_products('0','1',$h='','alkes');
        $conf['obat'] = $this->publicfunction->generate_products('0','1',$h='','obat');
        $conf['it'] = $this->publicfunction->generate_products('0','1',$h='','it');
        $uri = "";
        if ($this->uri->segment(3) === false){
            $uri = "";
        }
        else{
            $uri = $this->uri->segment(3);
        }
        
        $conf['products'] = $this->tram_model->products_by_brand($uri);
        //$conf['sideKategori'] = $this->tram_model->kategori('products');
        
        $this->load->view('home/head',$conf);
        $this->load->view('home/header-2',$conf);
        $this->load->view('content/products',$conf);
        $this->load->view('home/footer',$conf);
    }
    
    function detail(){
        $conf['menu'] = $this->publicfunction->generate_menu('0','1',$h='');
        $conf['alkes'] = $this->publicfunction->generate_products('0','1',$h='','alkes');
        $conf['obat'] = $this->publicfunction->generate_products('0','1',$h='','obat');
        $conf['it'] = $this->publicfunction->generate_products('0','1',$h='','it');
        $uri = "";
        if ($this->uri->segment(3) === FALSE){
            $uri = "";
        }
        else{
            $uri = $this->uri->segment(3);
        }
        
        $detail = $this->tram_model->products_detail($uri);
        foreach ($detail->result_array() as $pd){
            $conf['id'] = $pd['id'];
            $conf['name'] = $pd['name'];
            $conf['date'] = $pd['date'];
            $conf['image'] = $pd['image'];
            $conf['detail'] = $pd['detail'];
            $conf['categorie'] = $pd['kategori'];
        }

        $this->load->view('home/head',$conf);
        $this->load->view('home/header-2',$conf);
        $this->load->view('content/products-detail',$conf);
        $this->load->view('home/footer',$conf);
    }
}


/* End of file products.php */
/* Location: ./application/controllers/products.php */