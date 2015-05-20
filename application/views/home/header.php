<body>
<div id="wrap">
<header id="header">
<div id="topbar">
<div class="container">
<div class="row">
<div id="callus" class="col-md-6 col-sm-6">
<div class="clearfix hidden-xs">
<span><i class="fa fa-phone icon-left"></i>Call us: 08888888</span>
<span class="hidden-sm"><i class="fa fa-envelope icon-left"></i>Email: <a class="__cf_email__">contact@tramedifa.com</a></span>
</div>
</div> 
<div id="social" class="col-md-6 col-sm-6 hidden-xs">
<ul class="social bottom-0 list-unstyled clearfix">
<li class="facebook"><a href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li class="twitter"><a href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li class="googleplus"><a href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
<li class="pinterest"><a href="#" data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
<li class="linkedin"><a href="#" data-placement="bottom" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div> 
</div> 
</div> 
</div> 
<div id="mainheader" class="fixedheader">
<div class="container">
<div class="logo-area">
<h1 class="logo">
<!--
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" width="99" height="42"></a>
-->
PT.SamMarie Tramedifa
</h1>
<span class="descriptions">Site Desc</span>
</div> 
<div class="site-menu right-menu visible-lg visible-md top-5">
<nav>
<ul class="sf-menu bottom-0 list-unstyled clearfix">
<?php
foreach ( $menu->result_array() as $c ){
echo '<li class="menu-normal">';
echo '<a href="'.$this->config->item('base_url').$c['link'].'">'.$c['title'].'</a>';
	if ($c['child'] > 0){
		foreach ( $this->tram_model->sub_menu($c['id']) as $b){
		echo '<ul>';
		echo '<li><a href="'.$this->config->item('base_url').$b['link'].'">'.$b['title'].'</a></li>';
		echo '</ul>';
		echo '</li>';
		}
	}
	else{
	echo '</li>';
	}
}
?>
</ul>
</nav>
</div> 
 
<a href="#mobile-menu" class="reponsive-menu visible-xs button pull-right color"><i class="fa fa-bars"></i></a>
</div> 
</div> 
</header> 
