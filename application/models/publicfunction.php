<?php

/**
 * @author Wisnu
 * @copyright 2014
 */

class publicFunction extends CI_Model{
    public function old_generate_products($parent=0,$status,$hasil,$column,$cls_css=NULL){
        $where['parent']=$parent;
		$where['status']=$status;
        $where['parent_title']=$column;
		$w = $this->db->get_where("products_cat",$where);
		$w_q = $this->db->get_where("products_cat",$where)->row();
		if(($w->num_rows())>0)
		{
			$hasil .= "<ul id='".$cls_css."'>";
		}
		foreach($w->result() as $h)
		{
			$where_sub['parent']=$h->id;
			$w_sub = $this->db->get_where("products_cat",$where_sub);
			if(($w_sub->num_rows())>0)
			{
				$hasil .= "<li><a href='".base_url()."products/cat/".$h->url_name."/".url_title(strtolower($h->name))."'>".$h->name." &raquo;</a>";
			}
			else
			{
				if($h->parent==0)
				{
					$hasil .= "<li><a href='".base_url()."products/cat/".$h->url_name."/".url_title(strtolower($h->name))."'>".$h->name."</a>";
				}
				else
				{
					$hasil .= "<li><a href='".base_url()."products/cat/".$h->url_name."/".url_title(strtolower($h->name))."'>&raquo; ".$h->name."</a>";
				}
			}
			$hasil = $this->generate_products($h->id,$status,$hasil,$column);
			$hasil .= "</li>";
		}
		if(($w->num_rows)>0)
		{
			$hasil .= "</ul>";
		}
		return $hasil;
	}
    
    public function generate_menu($parent=0,$status,$hasil,$cls_css=NULL){
                $where['child']=$parent;
		$where['status']=$status;
		$w = $this->db->get_where("menu",$where);
		$w_q = $this->db->get_where("menu",$where)->row();
		if(($w->num_rows())>0)
		{
			//$hasil .= "<ul id='".$cls_css."'>";
		}
		foreach($w->result() as $h)
		{
			$where_sub['child']=$h->id;
			$w_sub = $this->db->get_where("menu",$where_sub);
            $adv = "";
            if (empty($h->link)){
                $adv = "page/".$h->link_url;    
            }
            else{
                $adv = "page/detail/".$h->link;
            }
            
			if(($w_sub->num_rows())>0)
			{
				$hasil .= "<li class='menu-normal'><a href='".base_url().$adv."/".url_title(strtolower($h->name))."'>".$h->name."</a>";
			}
			else
			{
				if($h->child==0)
				{
					$hasil .= "<li class='menu-normal'><a href='".base_url().$adv."/".url_title(strtolower($h->name))."'>".$h->name."</a>";
				}
				else
				{
                    $hasil .= "<ul>";
					$hasil .= "<li class='menu-normal'><a href='".base_url().$adv."/".url_title(strtolower($h->name))."'>&raquo; ".$h->name."</a>";
				}
			}
			$hasil = $this->generate_menu($h->id,$status,$hasil);
			$hasil .= "</li>";
		}
		if(($w->num_rows)>0)
		{
			$hasil .= "</ul>";
		}
		return $hasil;
	}
    
    public function generate_products_thumb(){
               
    }
    
    public function generate_faq($exp){
        $where= $exp;
        $faq ="";
        $w = $this->db->query("SELECT * FROM faq_content WHERE status = $where ORDER BY id ASC");
        foreach ($w->result() as $b){
            $faq .= '<div class="accordion" id="accordion"><div class="panel accordion-item"><div class="accordion-heading"><h5 class="accordion-title">';
            $faq .= '<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#col-'.$b->id.'">'.$b->question.'<span class="icon"><i class="fa-icon"></i></span></a></h5> </div>'; 
            $faq .= '<div id="col-'.$b->id.'" class="accordion-collapse collapse"><div class="accordion-body"><p>'.$b->answer.'</p></div> </div>  </div> </div>';
        }
        return $faq;
    }
    
    public function generate_menu_custom($parent=0,$location,$value,$css_id=null,$css_class=null){
        $where['tb_parent_menu'] = $parent;
        $where['tb_location_menu'] = $location;
        $where['tb_status_menu'] = 1;
        $que = $this->db->order_by("tb_position_menu","ASC")->get_where("wq_menu",$where);
        
        if(($que->num_rows())>0){
            if(isset($css_id)){
            $value .= '<ul id="'.$css_id.'" class="'.$css_class.'" >';
            }
            else{
                $value .= '<ul>';
            }
        }
        foreach($que->result() as $a){
            $where_sub['tb_parent_menu'] = $a->tb_id_menu;
            $que_sub = $this->db->get_where("wq_menu",$where_sub);
            if(($que_sub->num_rows())>0){
                $value .= '<li><a href="'.base_url().''.$a->tb_link_menu.'">'.$a->tb_name_menu.'</a>';
                $value .= '<ul class="current">';
            }
            else{
                if($a->tb_parent_menu==0){
                    $value .= '<li><a href="'.base_url().''.$a->tb_link_menu.'">'.$a->tb_name_menu.'</a>';
                }
                else{
                    $value .= '</ul>';
                    $value .= '<li><a href="'.base_url().''.$a->tb_link_menu.'">'.$a->tb_name_menu.'</a>';
                }    
            }
            $value = $this->generate_menu_custom($a->tb_id_menu,$location,$value);
            $value .= '</li>';
        }
        if (($que->num_rows)>0){
           $value .= '</ul>'; 
        }
        return $value;
    }
 
    public function generate_blog(){
        $value = '';
        $where['tb_status_blog'] = 1;
        $que = $this->db->limit('2')->get_where("wq_blog",$where);
        foreach($que->result() as $a){
            $value .= '<li class="column5">'
                    . '<img src="http://img.tramedifa.com/blog/'.$a->tb_image_blog.'">'
                    . '<h4>'.$a->tb_name_blog.'</h4>'
                    . '<p>'.$a->tb_source_blog.'</p>'
                    . '<a href="'.base_url().'main/blog/'.$a->tb_id_blog.'/'.url_title($a->tb_name_blog).'.aspx" class="details">Read More</a>'
                    . '</li>';
        }
        return $value;
    }
    
    public function generate_brands(){
        $value = '';
        $where['tb_location_config'] = "brands";
        $where['tb_status_config'] = 1;
        $que = $this->db->get_where("wq_config",$where);
        foreach($que->result() as $a){
            $value .= '<li><a><img src="http://img.tramedifa.com/brands/'.$a->tb_image_config.'" alt="brands" width="50px" height="120px"></a></li>';
        }
        return $value;
    }
    
    public function generate_info($info){
        $value = '';
        $where['tb_location_config'] = $info;
        $where['tb_status_config'] = 1;
        $que = $this->db->get_where("wq_config",$where);
        foreach ($que->result() as $a){
            $value .= $a->tb_set_config;
        }
        return $value;
    }
    
    public function generate_social(){
        $value = '';
        $where['tb_location_config'] = "social";
        $where['tb_status_config'] = 1;
        $que = $this->db->get_where("wq_config",$where);
        foreach($que->result()as $a){
            $value .= '<a href="'.$a->tb_set_config.'"><img src="http://img.tramedifa.com/social/'.$a->tb_image_config.'" alt="'.$a->tb_name_config.'"></a>';
        }
        return $value;
    }
    
    public function generate_slider(){
        $value = '';
        $where['tb_status_slider'] = 1;
        $que = $this->db->get_where("wq_slider",$where);
        foreach ($que->result() as $a){
            $value .= '<li><img src="http://img.tramedifa.com/slider/'.$a->tb_image_slider.'" /></li>';
        }
        return $value;
    }
    
    public function generate_products(){
        $value = '';
        $this->db->select('*');
        $this->db->from('wq_products');
        $this->db->join('wq_image','wq_products.tb_id_products = wq_image.tb_link_image');
        $this->db->join('wq_categories','wq_products.tb_categories_products = wq_categories.tb_id_categories');
        $where['tb_status_products'] = 1;
        $this->db->where($where);
        $que = $this->db->get();
        foreach($que->result() as $a){
            $value .= '<div class="item '.$a->tb_name_categories.'"><div class="view view-two"><img src="http://img.tramedifa.com/media/products/thumb/'.$a->tb_name_image.'" alt="" /><div class="mask"><a class="btn-icon" href="#"></a><a class="btn-icon2" href="#"></a></div></div> <div class="port-span"><h3>'.$a->tb_name_products.'</h3><span>'.$a->tb_name_products.'</span></div></div>';
        }
        return $value;
    }
    
    public function generate_products_categories(){
        $value = '';
        $where['tb_location_categories'] = "products";
        $where['tb_status_categories'] = 1;
        $que = $this->db->get_where("wq_categories",$where);
        foreach($que->result() as $a){
            $value .='<li><a href="#" class="'.$a->tb_name_categories.'">'.$a->tb_name_categories.'</a></li>';
        }
        return $value;
    }
    
    public function generate_categories($location){
        $value = '';
        $where['tb_location_categories'] = $location;
        $que = $this->db->get_where("wq_categories",$where);
        foreach($que->result() as $a){
            $value .= '';
        }
    }
    
    public function sidebars($argv){
        $value = '';
        if($argv == "widget-services"){
            $value .= '<div class="widget-services">
                        <h3>Services</h3>
                        <div class="accordion">
					<div id="accordion-container"> 
					     <h2 class="accordion-header">Teeth Whitening</h2> 
					     <div class="accordion-content"> 
					          <p>Tartar: A common term for dental calculus, a hard deposit that adheres to teeth</p> 
					     </div> 
					     <h2 class="accordion-header">Crowns Dental Bridges</h2> 
					     <div class="accordion-content"> 
					          <p>Tartar: A common term for dental calculus, a hard deposit that adheres to teeth</p> 
					     </div>  
					     <h2 class="accordion-header">Gastroscopit Services</h2> 
					     <div class="accordion-content"> 
					          <p>Tartar: A common term for dental calculus, a hard deposit that adheres to teeth</p> 
					     </div> 
					</div>
				</div>
			</div>';
        }
        elseif($argv == "widget-text"){
            $value .='<div class="widget-text">
				<h3>text</h3>
				<p>This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet </p>
			</div>';
        }
        else{
            show_error("NOT FOUND ARGUMENT");
        }
    }

 }
 