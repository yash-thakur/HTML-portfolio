<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
   $(document).ready(function() {
        $(".toggle-btn").on("click", function() {
          $(".site-header").toggleClass("open");
        })

		$(".sub-menu").on("click", function(e) {
		$(this).closest(".sub-menu").toggleClass("open");
		//return false;
		});

		//smooth-scroll
		$(".scroll-down,.page-scroll").on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		     $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 1500, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
	  	});

	});
</script>
<!-- Circular Progress Bar -->
<script>
	var progressValue = document.querySelectorAll('.progress-value');
	var RADIUS = 71;
	var CIRCUMFERENCE = 2 * Math.PI * RADIUS;
	var elements = document.getElementsByClassName('circular-progress-bar');
	for (var i = 0; i < elements.length; i++){
		var value = elements[i].dataset.percent;
        function progress(value) {
		
		var progress = value / 100;
		var dashoffset = CIRCUMFERENCE * (1 - progress);
		
		console.log('progress:', value + '%', '|', 'offset:', dashoffset)
		
		progressValue[i].style.strokeDashoffset = dashoffset;
		
		}
		progressValue[i].style.strokeDasharray = CIRCUMFERENCE;
		progress(value);
	}
</script>

<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhtR7n5LkRkbspO-WBtQue6jSBi26j03k&ver=4.9.4"></script>
<script>
	(function($){
		"use strict";
		function initialize_map(){
		var myLatLng=new google.maps.LatLng(20.599046699073398,72.94154964409734);
		var mapOptions={
		zoom: 15,
		center: myLatLng,
		draggable: true,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		styles: [{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#00aaff"},{"saturation":-100},{"gamma":2.15},{"lightness":1}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":-20}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]
		};
		var mapElement=document.getElementById("map-canvas");
		var map=new google.maps.Map(mapElement, mapOptions);
		var marker=new google.maps.Marker({
		position: new google.maps.LatLng(20.599046699073398,72.94154964409734),
		map: map,
		icon: "http://yashthakur.in/wp-content/uploads/2017/01/blue-marker.png",
		});
		}
		google.maps.event.addDomListener(window, "load", initialize_map);
		})(jQuery)
</script>
