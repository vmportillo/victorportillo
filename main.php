
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

			<a href="#"><h4>Lets talk!</h4></a>
		</div>
		
		
		
	</div>

</div>

<script>




$(document).ready(function() {

  // Set the duration of the loader to 3 seconds (3000 milliseconds)
	  setTimeout(function() {
	    $('body').fadeIn(7000);

			    $('#loader').fadeOut(1500, function() {
			    $(this).remove();
	    });
	  }, 1500);
  
});

setTimeout(function() {
  var delay = 200; // Delay between each animation in milliseconds
  $('body *').each(function(index) {
    $(this).delay(delay * index).animate({opacity: '1'}, 1300);
  });
}, 1000);


/*
$(document).on('mousemove touchmove', function(event)  {
  var colors = ['#FF5733', '#C70039', '#900C3F', '#581845', '#2E86C1'];
  var randomColor = colors[Math.floor(Math.random() * colors.length)];
  
  $('h5,h6,.right-div h4').css('color', randomColor);
  
  
});
*/

</script>