$(document).ready(function(){

	function headerLogo () {
		$('.header-logo').delay(4000);
		$('.header-logo').animate( { "opacity" : .5 }, 1000 );
		$('.header-logo').animate( { "opacity" : 1 }, 1000 );
		headerLogo();
	}

	headerLogo();
})