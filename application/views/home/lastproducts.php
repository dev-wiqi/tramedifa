<div class="section carouselbox" data-margin="0 0 30px">
<div class="container">
<div class="divider">
<span class="icon"><i class="fa fa-file-text"></i></span>
</div> 
<div class="text-center bottom-30">
<h3 class="bottom-0">Products &amp; Updated</h3>
<span>Last Update Products</span>
</div> 
<div class="row">
<ul class="list-unstyled carousel-area">
<?php
	foreach ($productsupdate->result_array() as $pu){
		echo '<li>
		<div class="blog-item smallpost">
		<div class="post-images">
		<div class="blog-media">
		<div class="small-mark"></div>
		<img src="'.$this->config->item('base_url').'media/products/'.$pu['image'].'" class="img-responsive" alt="">
		</div> 
		</div> 
		<div class="blog-content">
		<h4 class="entry-title bottom-0">
		<a href="blog-detail-1.html">'.$pu['name'].'</a>
		</h4>
		<div class="entry-short-info">
		<span><i class="icon-left fa fa-tasks"></i><a href="'.$this->config->item('base_url').'products/detail/'.$pu['id'].'">Detail</a></span>
		<span><i class="icon-left fa fa-clock-o"></i>'.$pu['date'].'</span>
		</div>
		</div> 
		</div> 
		</li>';
		}
?> 
</ul> 
</div> 
<div class="carousel-nav text-center">
<span class="prev"><i class="fa fa-angle-left"></i></span>
<span class="next"><i class="fa fa-angle-right"></i></span>
</div> 
</div> 
</div> 