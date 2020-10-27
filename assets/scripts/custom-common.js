$(document).ready(function() {

/*
** Script for side nav closing/opening
*/

  	$('header .hamburger-menu').click(function(){
		$('.side-nav').toggleClass('squeezed');
		$('.te-container').toggleClass('stretched');
	});


/*
** Script for sub menu
*/

	$('.side-nav li .submenu').parent().addClass('has-submenu');

	$('.side-nav li').click(function(){
		$('.side-nav li').removeClass('active');
		$(this).addClass('active');
		$('.submenu').slideUp();
		$(this).find('.submenu').slideDown();
	});

/*
** Script for floating labels in forms 
*/
	$("form input[type=text]").each(function() {
		if ($("form input").val() != null || $("input").val() != ''){
			$(this).addClass('shifted');
		}
	});

	$("input").change(function(){
  		var inpValue = $(this).val();
	  	$(this).addClass('shifted');
	  	if(inpValue == null || inpValue == '' || inpValue == ' ' || inpValue == '  ' ) {
  			$(this).val(null);
	  		$(this).removeClass('shifted');
	  	}	
	});
});	