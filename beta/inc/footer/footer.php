<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
        $(".toggle-btn").on("click", function() {
          $(".site-header").toggleClass("open");
        })

		$(".sub-menu").on("click", function() {
		$(this).closest(".sub-menu").toggleClass("open");
		return false;
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
<script type="text/javascript">
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
<!-- isotop -->
<script type="text/javascript" src="//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script type="text/javascript">
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