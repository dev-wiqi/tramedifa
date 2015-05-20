<div id="heading" class="map-container">
<div id="map-canvas" class="map"></div>
</div> 
<div id="breadcrumb">
<div class="container">
<ul class="bottom-0 list-unstyled clearfix">
    
</ul> 
</div> 
</div> 
<div id="content" class="container bottom-30">
<div class="row">
<div class="col-md-8">
<div id="head" class="bottom-30">
<h3 class="heading-int normal bottom-20">Contact form</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, quis, ducimus voluptate facilis temporibus vitae quidem voluptatum unde quibusdam illo sint praesentium quisquam saepe.</p>
</div>
<form action="" method="post" class="contact form" id="contactform">
<div class="row">
<div class="field col-lg-6 col-md-6">
<label for="name" accesskey="U">Name:</label>
<input class="fullwidth" name="name" type="text" id="name"/>
</div> 
<div class="field col-lg-6 col-md-6">
<label for="email" accesskey="E">Email: <span>*</span></label>
<input class="fullwidth" name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"/>
</div> 
<div class="field col-lg-6 col-md-6">
<label for="url">Site URL</label>
<input class="fullwidth" type="url" name="url" id="url" placeholder="Enter your site">
</div> 
<div class="field col-lg-6 col-md-6">
<label for="subject">Subject</label>
<input class="fullwidth" type="text" name="subject" id="subject" placeholder="Subject">
</div> 
</div> 
<div class="field">
<label for="comments" accesskey="C">Message: <span>*</span></label>
<textarea class="fullwidth" name="comments" cols="40" rows="3" id="comments" spellcheck="true"></textarea>
</div> 
<button class="button color" id="submit">Send Messages</button>
</form> 
</div> 
<div class="col-md-4">
<h3 class="heading-int normal bottom-20">Our Groups</h3>
<div class="accordion" id="accordion">
<div class="panel accordion-item">
<div class="accordion-heading">
<h5 class="accordion-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
SamMarie Tramedifa
<span class="icon"><i class="fa-icon"></i></span>
</a>
</h5> 
</div> 
<div id="collapseOne" class="accordion-collapse collapse in">
<div class="accordion-body">
<ul class="contact list-unstyled">
<li><i class="fa fa-home"></i>102, New York</li>
<li><i class="fa fa-phone"></i>+012 456 7890</li>
<li><i class="fa fa-envelope"></i>contact@everislabs@gmail.com</li>
</ul>
</div> 
</div>  
</div> 
<div class="panel accordion-item">
<div class="accordion-heading">
<h5 class="accordion-title">
<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOnes">
SamMarie Basra
<span class="icon"><i class="fa-icon"></i></span>
</a>
</h5> 
</div> 
<div id="collapseOnes" class="accordion-collapse collapse">
<div class="accordion-body">
<ul class="contact list-unstyled">
<li><i class="fa fa-home"></i>102, New York</li>
<li><i class="fa fa-phone"></i>+012 456 7890</li>
<li><i class="fa fa-envelope"></i>contact@everislabs@gmail.com</li>
</ul>
</div> 
</div>  
</div> 
<div class="panel accordion-item">
<div class="accordion-heading">
<h5 class="accordion-title">
<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOness">
SamMarie Wijaya
<span class="icon"><i class="fa-icon"></i></span>
</a>
</h5> 
</div> 
<div id="collapseOness" class="accordion-collapse collapse">
<div class="accordion-body">
<ul class="contact list-unstyled">
<li><i class="fa fa-home"></i>102, New York</li>
<li><i class="fa fa-phone"></i>+012 456 7890</li>
<li><i class="fa fa-envelope"></i>contact@everislabs@gmail.com</li>
</ul>
</div> 
</div>  
</div> 
</div> 
</div> 
</div> 
</div> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script type="text/javascript">
		var latlng = new google.maps.LatLng(0, 0);
		var myOptions = {
			zoom: 14,
			center: latlng,
			scrollwheel: true,
			scaleControl: false,
			disableDefaultUI: false,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map2 = new google.maps.Map(document.getElementById("map-canvas"),
			myOptions);

		var geocoder_map2 = new google.maps.Geocoder();
		var address = 'Cipinang Muara 1 no.23c';
		geocoder_map2.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				map2.setCenter(results[0].geometry.location);

				var marker = new google.maps.Marker({
					map: map2, 

					position: map2.getCenter()
				});

				var contentString = 'Cipinang Muara I No.23 C<br />Pondok Bambu, Duren Sawit<br />Jakarta Timur 13420';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});

				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(map2,marker);
				});

				infowindow.open(map2,marker);

			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
	</script>