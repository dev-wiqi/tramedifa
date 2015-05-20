<div id="heading">
<div class="container">
<h2 class="bottom-0 light colorin">Products One Mad</h2>
</div> 
</div> 
<div id="breadcrumb"> 
</div> 
<div class="bottom-30">
<div class="container">
<div class="row onepixel creative"> 
<!-- START FOREACH -->
<?php
    foreach($products->result() as $c){
        echo '<div class="col-md-3 bottom-onepixel">
<div class="portfolio-item">
<div class="portfolio-mark">
<div class="portfolio-link">
<a class="fir-link image-link" href="'.base_url().'media/products/'.$c->image.'"><i class="fa fa-expand"></i></a>
<a class="sec-link" href="portfolio-detail.html"><i class="fa fa-link"></i></a>
</div> 
<div class="portfolio-mark-content">
<div class="mark-content">
<h4 class="bottom-0 portfolio-title"><a href="'.base_url().'products/detail/'.$c->id.'">'.$c->name.'</a></h4>
<div class="portfolio-categories clearfix">
<span class="category">
<a href="'.base_url().'products/detail/'.$c->id.'">'.$c->brand.'</a>
</span> 
<span class="rating pull-right"><i class="icon-left fa fa-heart-o"></i>16</span>
</div> 
</div> 
</div> 
</div> 
<img class="img-responsive" src="'.base_url().'media/products/'.$c->image.'" alt="">
</div> 
</div>';      
    }
?>
<!-- END FOREACH -->   
</div> 
</div> 
</div>