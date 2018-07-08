<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="../components/contact/css/contact.css">
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
	</div>
</body>
</html>