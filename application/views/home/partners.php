<div class="container">
<div class="callout bottom-30">
<div class="callout-content clearfix">
<div class="callout-text pull-left">
<h4 class="bottom-0">Pasang Iklan Disini</h4>
<span>Ingin Pasang Iklan Disini</span>
</div> 
<div class="callout-action pull-right">
<a href="#" class="button black">Call Us</a>
</div> 
</div> 
</div>
</div>

<div class="section carouselbox" data-margin="0 0 60px">
<div class="container">
<div class="divider">
<span class="icon"><i class="fa fa-thumbs-up"></i></span>
</div> 
<div class="text-center bottom-30">
<h3 class="bottom-0">Our Brands</h3>
<span></span>
</div> 
<div class="row cilent-list">
<ul class="list-unstyled carousel-area">
<?php
	foreach ($brands->result_array() as $pr){
		echo '<li class="text-center">
			<div class="cilent-item">
			<img class="img-responsive" src="'.$this->config->item('base_url').'media/brands/'.$pr['image'].'" alt="">
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