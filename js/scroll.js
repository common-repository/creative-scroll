jQuery(document).ready(function(){
	jQuery(window).scroll(function(){
		
			if(jQuery(window).scrollTop() > 120){
			jQuery('a.creative-scroll').fadeIn();
		}
		else if(jQuery(window).scrollTop() <= 120){
			jQuery('a.creatvie-scroll').fadeOut();
		}
	});

	jQuery('.creative-scroll').click(function(){
		jQuery('html, body').animate({scrollTop:0},1000, "swing");
		
		return false;
	});
});