<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="row flex-xl-nowrap mx-0">
		<?php include_once '../../inc/header/header.php';?>
		<main class="col-12 col-lg-9 col-xl-10 p-0">
			<!-- banner-section -->
			<?php include'../components/banner/banner.php';?>
			<!-- about section -->
			<?php include'../components/about/about.php';?>
			<!-- service section -->
			<?php include'../components/service/service.php';?>
			<!-- Resume section -->
			<?php include'../components/resume/resume.php';?>
			<!-- skill section -->
			<?php include'../components/skill/skill.php';?>
			<!-- Portfolio section -->
			<?php include'../components/portfolio/portfolio.php';?>
			<!-- blog -->
			<?php include'../components/blog/blog.php';?>
			<!-- testimonials -->
			<?php include'../components/testimonials/testimonials.php';?>
			<!-- contact -->
			<?php include'../components/contact/contact.php';?>
		</main>
		<?php include_once '../../inc/footer/footer.php';?>
		<!-- isotop -->
		<script src="//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
		<script>
			// init Isotope
			var iso = new Isotope( '.grid', {
			  itemSelector: '.element-item',
			  layoutMode: 'fitRows'
			});

			// filter functions
			var filterFns = {
			  // show if number is greater than 50
			  numberGreaterThan50: function( itemElem ) {
			    var number = itemElem.querySelector('.number').textContent;
			    return parseInt( number, 10 ) > 50;
			  },
			  // show if name ends with -ium
			  ium: function( itemElem ) {
			    var name = itemElem.querySelector('.name').textContent;
			    return name.match( /ium$/ );
			  }
			};

			// bind filter button click
			var filtersElem = document.querySelector('.filters-button-group');
			filtersElem.addEventListener( 'click', function( event ) {
			  // only work with buttons
			  if ( !matchesSelector( event.target, 'button' ) ) {
			    return;
			  }
			  var filterValue = event.target.getAttribute('data-filter');
			  // use matching filter function
			  filterValue = filterFns[ filterValue ] || filterValue;
			  iso.arrange({ filter: filterValue });
			});

			// change is-checked class on buttons
			var buttonGroups = document.querySelectorAll('.button-group');
			for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
			  var buttonGroup = buttonGroups[i];
			  radioButtonGroup( buttonGroup );
			}

			function radioButtonGroup( buttonGroup ) {
			  buttonGroup.addEventListener( 'click', function( event ) {
			    // only work with buttons
			    if ( !matchesSelector( event.target, 'button' ) ) {
			      return;
			    }
			    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
			    event.target.classList.add('is-checked');
			  });
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
	</div>
</body>
</html>