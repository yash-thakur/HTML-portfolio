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
   });
</script>