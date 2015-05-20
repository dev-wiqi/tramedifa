<div id="heading">
<div class="container">
<h2 class="bottom-0 light colorin">Products Detail</h2>
</div> 
</div> 
<div id="breadcrumb">
<!--
<div class="container">
<ul class="bottom-0 list-unstyled clearfix">
<li><a href="">Home</a></li>
<li><a href="#">Page</a></li>
<li>Portfolio Detail</li>
</ul> 
</div> 
-->
</div> 
<div class="bottom-30">
<div class="container">
<div class="portfo-heading bottom-30">
<div class="row">
<div class="col-md-8 col-lg-8 bottom-sm-30 bottom-xs-30">
<div class="portfolio-slide">
<div class="carousel-areas round">
<div class="carousel media-slider list-unstyled bottom-0 clearfix">
<?php echo '<a href="'.$this->config->item('base_url').'products/detail/'.$id.'"><img src="'.$this->config->item('base_url').'media/products/'.$image.'" alt=""></a>'; ?>
</div> 
</div> 
</div> 
</div> 
<div class="col-md-4 col-lg-4">
<div class="portfolio-content bottom-30">
<div class="portfolio-details">
<h5 class="heading-int"><?php echo $name; ?></h5>
<ul class="list-unstyled bottom-0">
<li class="clearfix">
<span class="name">Name</span>
<span class="desc"><?php echo $name;?></span>
</li>
<li class="clearfix">
<span class="name">Brands</span>
<span class="desc"><?php ?></span>
</li>
<li class="clearfix">
<span class="name">Categories</span>
<span class="desc"><?php echo $categorie; ?></span>
</li>
<li class="clearfix">
<span class="name">Price</span>
<span class="desc"><?php echo "CALL"?></span>
</li>
</ul> 
</div> 
</div> 
<div class="portfolio-action">
<!--
<span class="liked"><i class="icon-left fa fa-heart-o"></i>16</span>
-->
<span class="linked"><a href="#">Buy Product<i class="fa fa-money icon-right"></i></a></span>
</div> 
</div> 
</div> 
</div> 
<div class="portfolio-entry bottom-30">
<h3 class="bottom-10">Description</h3>
<?php echo $detail; ?>
</div> 
<div class="recent-portfolio carouselbox">
<div class="heading-int normal bottom-20 carousel-inc">
<h3 class="bottom-0">Recent Products</h3>
<div class="carousel-nav">
<span class="prev"><i class="fa fa-angle-left"></i></span>
<span class="next"><i class="fa fa-angle-right"></i></span>
</div>
</div> 
<div class="portfolio-slider">
<div class="row">
<ul class="list-unstyled carousel-area">
<?php
    $last = $this->tram_model->products_last();
    foreach($last->result_array() as $lp){
        echo '<li><div class="portfolio-item">
<div class="portfolio-mark">
<div class="portfolio-link">
<a class="fir-link image-link" href="'.$this->config->item('base_url').'media/products/'.$lp['image'].'"><i class="fa fa-expand"></i></a>
<a class="sec-link" href="'.$this->config->item('base_url').'products/detail/'.$lp['id'].'"><i class="fa fa-link"></i></a>
</div> 
<div class="portfolio-mark-content">
<div class="mark-content">
<h4 class="bottom-0 portfolio-title"><a href="'.$this->config->item('base_url').'products/detail/'.$lp['id'].'">Consectetur adipisicing elit.</a></h4>
<div class="portfolio-categories clearfix">
<span class="category">
<a href="'.$this->config->item('base_url').'products/detail/'.$lp['id'].'">Et ultrices</a>
</span>
<span class="rating pull-right"><i class="icon-left fa fa-heart-o"></i>22</span>
</div> 
</div> 
</div> 
</div> 
<img class="img-responsive" src="'.$this->config->item('base_url').'media/products/'.$lp['image'].'" alt="">
</div> </li> ';
    }


?>
</ul> 
</div> 
</div> 
</div> 
</div> 
</div> 