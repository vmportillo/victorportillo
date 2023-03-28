
<div class="container-fluid text-left align-items-end ">
	
		<div class="row align-items-end bottom flex-container">
			<div class="col-md-8 col-xs-12 left-div">
  <br>
    <h6 id="toggle-awards"><b>EDUCATION</b></h6>
    <div class="education">
  <h4 > M.A. Communication<br>
    <small>University of Texas at El Paso</small>
  </h4>

  <h4>B.F.A. Graphic Design<br>
    <i>& Print Making Minor </i><br>
    <small>University of Texas at El Paso</small>
  </h4>
    </div>


    <h6 id="toggle-awards"><b>AWARDS</b></h6>
    <div  class="awards">
    <h4 ><small>American Advertising Federation<br>
      College Media Association<br>
      Texas Intercollegiate Press Association’s</small></h4>
    </div>
    
  </div>




		<div class="col-md-4 col-xs-12 text-left right-div">

			<a href="#"><h4><b>Lets talk!</b></h4></a>
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



setTimeout(function() {
    $('.awards, .education').addClass('visible');
	
    // Add a class to the awards div to make it visible
    $('.awards, .education').removeClass('visible');
    $('.awards, .education').slideToggle(1300,'swing'); 
 
  }, 10000);
  
  
  $('#toggle-awards').mouseenter(function() {
    // Remove the visible class before toggling the div
    $('.awards, .education').removeClass('visible');
    $('.awards, .education').slideToggle(1300,'swing'); // Set the animation duration to 1000ms (1 second)
  });


/*
$(document).on('mousemove touchmove', function(event)  {
  var colors = ['#FF5733', '#C70039', '#900C3F', '#581845', '#2E86C1'];
  var randomColor = colors[Math.floor(Math.random() * colors.length)];
  
  $('h5,h6,.right-div h4').css('color', randomColor);
  
  
});
*/

</script>