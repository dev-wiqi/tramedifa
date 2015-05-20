<footer id="footer">
<div class="widget-area">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 bottom-sm-30">
<div class="widget">
<img src="<?php echo base_url(); ?>assets/images/logo.png" class="img-responsive" alt="">
<h5 class="top-10 white bottom-10">Sammarie Tramedifa</h5>
<p>PT SamMarie Tramedifa  merupakan perusahaan yang tergabung dalam kelompok usaha <i>SamMarie Healthcare Group</i>. PT SamMarie Tramedifa resmi beroperasi pada tanggal 4 Januari 2007</p>
</div> 
</div> 
<div class="col-md-3 col-sm-6 bottom-sm-30">
<div class="widget widget-posts">
<h5 class="widget-title">
<span>Latest Article</span>
</h5>
<ul class="list-unstyled bottom-0">

<?php
    //foreach($lastnews->result() as $d){
      //  echo '<li class="clearfix">';
        //echo '<div class="post-image">
//<a href="post-detail-1.html"><img src="images/demo/post-1x70x70.jpg" alt=""></a>
//</div>';
  //  echo '<div class="post-content">
//<h5 class="entry-title bottom-0"><a rel="bookmark" href="post-detai-1.html">Morbi in ipsum sit amet pede facilisis laoreet</a></h5>
//<div class="post-info">
//<span><i class="fa fa-clock-o icon-left"></i>7 Feb, 2014</span>
//</div> 
//</div> </li> 
//';   
  //  }
?> 

</ul> 
</div> 
</div> 
<div class="col-md-3 col-sm-6 bottom-sm-30">
<div class="widget widget-twitter">
<h5 class="widget-title">
<span>Twitter</span>
</h5> 
<div id="footer-tweet" class="tweet-feed"></div>
</div>
<script type="text/javascript">
							jQuery(document).ready(function(){
								jQuery("#footer-tweet").tweet({
									modpath:"js/twitter/",
									count:2,
									username:"wsnunewbee",
									loading_text:"loading twitter feed...",
									template:"{text}{time}{join}"
								});
							})
						</script>
</div> 
<div class="col-md-3 col-sm-6">
 
</div> 
</div> 
</div> 
</div> 
<div class="credit">
<div class="container">
<div class="row">
<div class="col-md-6">
<p>Copyright SamMarie Tramedifa</p>
</div> 
<div class="col-md-6 text-right">
<ul class="list-unstyled bottom-0 links">
<li><a href="#">About us</a></li>
<li><a href="#">Terms of use</a></li>
<li><a href="#">Privacy policy</a></li>
</ul>
</div>
</div> 
</div>
</div> 
</footer> 
<div id="mobile-menu">
<span class="menu-content"></span>
</div> 
</div> 


<script src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script src="<?php echo base_url(); ?>assets/js/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>assets/js/superfish.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fitvids.js"></script>
<script src="<?php echo base_url(); ?>assets/js/caroufredsel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/magnificpopup.js"></script>
<script src="<?php echo base_url(); ?>assets/js/isotope.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scrollreveal.js"></script>
<script src="<?php echo base_url(); ?>assets/js/nivosliderpack.js"></script>
<script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
<script src="<?php echo base_url(); ?>assets/js/mmenu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/countto.js"></script>
<script src="<?php echo base_url(); ?>assets/js/twitter/tweet.js"></script>
<script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
 
<script src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
</body>
</html>