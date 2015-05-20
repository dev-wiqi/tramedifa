<section id="slide" class="container bottom-onepixel">
 
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;">
<div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;">
<ul>
<?php 
	foreach ($caurosel->result_array() as $sl){ 
		echo '<li data-transition="random-static" data-slotamount="7" data-masterspeed="300">';
		echo '<img src="'.$this->config->item('base_url').'assets/images/slider/Banner-11.jpg" alt="Banner-11" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">';
		echo '<div class="tp-caption small_lato sft tp-resizeme" data-x="120" data-y="95" data-speed="600" data-start="600" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 2">
		     
		</div>
		<div class="tp-caption small_lato sft tp-resizeme" data-x="400" data-y="190" data-speed="300" data-start="1000" data-easing="Power3.easeInOut" data-endspeed="500" style="z-index: 3">
        <img src="'.$this->config->item('base_url').'media/products/'.$sl['image'].'" alt="">
		</div>
		<div class="tp-caption large_blue randomrotate" data-x="600" data-y="425" data-speed="500" data-start="1500" data-easing="Power3.easeInOut" data-endspeed="300" style="z-index: 4">
		'.$sl['source'].'
		</div>
		</li>';
	}
?>
</ul>
<div class="tp-bannertimer"></div>
</div>
</div>
<script type="text/javascript">

		var tpj=jQuery;				
		tpj.noConflict();				
		var revapi1;

		tpj(document).ready(function() {

			if(tpj('#rev_slider_1_1').revolution == undefined)
				revslider_showDoubleJqueryError('#rev_slider_1_1');
			else
				revapi1 = tpj('#rev_slider_1_1').show().revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:500,
					hideThumbs:200,

					thumbWidth:100,
					thumbHeight:50,
					thumbAmount:3,

					navigationType:"none",
					navigationArrows:"solo",
					navigationStyle:"round",

					touchenabled:"on",
					onHoverStop:"on",

					navigationHAlign:"center",
					navigationVAlign:"bottom",
					navigationHOffset:0,
					navigationVOffset:20,

					soloArrowLeftHalign:"left",
					soloArrowLeftValign:"center",
					soloArrowLeftHOffset:20,
					soloArrowLeftVOffset:0,

					soloArrowRightHalign:"right",
					soloArrowRightValign:"center",
					soloArrowRightHOffset:20,
					soloArrowRightVOffset:0,

					shadow:0,
					fullWidth:"on",
					fullScreen:"off",

					stopLoop:"off",
					stopAfterLoops:-1,
					stopAtSlide:-1,

					shuffle:"off",

					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					videoJsPath:"js/revslider/js/videojs/",
					fullScreenOffsetContainer: "" 
				});

		});	//ready

		</script>
 
</section>