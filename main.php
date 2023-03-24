
<div class="container-fluid text-left align-items-end ">
	
		<div class="row align-items-end bottom flex-container">
			<div class="col-md-8 col-xs-12 left-div">
		<br>
			<h6><b>EDUCATION</b></h6>
			<h4>M.A. Communication<br>
			<small>University of Texas at El Paso</small></h4>
					
			<h4>B.F.A. Graphic Design<br>
			<i>& Print Making Minor </i><br>
			<small>University of Texas at El Paso</small></h4>
			<h4>
			<br>
			<h6><b>AWARDS</b></h6>
			<h4><small>American Advertising Federation<br>
				College Media Association<br>
				Texas Intercollegiate Press Association’s</small></h4>
			</h4>
			<h4>
		</div>
		<div class="col-md-4 col-xs-12 text-left right-div">

			<a href="#"><h4>Contacto</h4></a>
		</div>
		
		
		
	</div>

</div>

<script>

$(window).on('load', function() {
  // Set the duration of the loader to 3 seconds (3000 milliseconds)
  setTimeout(function() {
    $('#loader').fadeOut(4000, function() {
      $(this).remove();
    });
    $('body').fadeIn(7000);
  }, 2000);
});



$(document).ready(function() {
  var delay = 100; //  Delay between each animation in milliseconds
  $('body *').each(function(index) {
//     $(this).delay(delay * index).animate({opacity: '1'}, 1300);
    $(this).delay(delay * index).animate({opacity: '1'}, 100);
  });
});

</script>