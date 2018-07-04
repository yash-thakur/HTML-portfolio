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
