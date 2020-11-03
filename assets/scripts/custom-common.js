$(document).ready(function() {

/*
** Script for side nav closing/opening
*/

  	$('header .hamburger-menu').click(function(){
		$('.side-nav').toggleClass('squeezed');
		$('.te-container').toggleClass('stretched');
	});


/*
**  Script for access permission switch
*/
	$('.sub-permission').parent().addClass('has-submenu');

	$('.access-permission .perm-label').click(function(){
		$(this).parent().parent().find('.sub-permission').slideToggle();
		$(this).find('i').toggleClass('chev-rotate');
	});

    $('.switch input').click(function () {
        $(this).toggleClass('ver-changed');
        $('main').toggleClass('ver-lite');
        $('main').toggleClass('ver-adv');
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
        if( $(this).val() == null || $(this).val() == "" ) {
            $(this).removeClass('shifted');
        } else
            $(this).addClass('shifted');
    });

	$("select").change(function(){
		$(this).parent().find('label').css({"color":"#244895","font-weight":"bold"});
	});
	$("input").change(function(){
  		var inpValue = $(this).val();
	  	$(this).addClass('shifted');

	  	if(inpValue == null || inpValue == '' || inpValue == ' ' || inpValue == '  ' ) {
  			$(this).val(null);
	  		$(this).removeClass('shifted');
	  	}	
	});
	
	$('.fa-eye').on('click', function(){
		$(this).next('input').toggleClass('pass-active');
		if( $('input').hasClass('pass-active') ) {
			$(this).next('input').attr('type','text');
		} else
		$(this).next('input').attr('type','password');
	});

/*
** Script for Access Control forms 
*/

	$('.user').click(function(){
		$('.user').removeClass('active');
		$(this).addClass('active');
		$('.user-details').slideUp();
		$(this).find('.user-details').slideDown();
	});

	$('tr').click(function(){
		console.log($(this).parent().parent());
		$(this).next('.user-details').slideToggle();
	});


	$('.expand-access').click(function(){
		$('.sub-access').slideDown();
	});
	$('.collapse-access').click(function(){
		$('.sub-access').slideUp();
	});

	$('.sub-access').prev('tr').addClass('has-submenu');
	$('.sub-access').prev('tr').click(function(){
		$(this).toggleClass('clicked');
		$(this).next('.sub-access').slideToggle('normal');
	});

/*
** End For Document Ready 
*/

});	