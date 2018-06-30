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