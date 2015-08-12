jQuery(document).ready(function() {


	//Mobile nav menu toggle
	jQuery("#navToggle").click(function() {
		
		jQuery("#mainNav ul").toggle();
		
	});
	
	/* Clickable Div
	jQuery("#footerDirections").click(function(){
     	window.location = jQuery(this).find("a").attr("href"); 
	 	return false;	
	});*/
	
	
	//Update Hide / Show of Mobile & Desktop Nav
	jQuery(window).resize(function(){	
		if ( jQuery("#logo").css("display") == "block" ){
			jQuery('#mainNav ul').css("display","block");
		}
		
		else if ( jQuery("#logo").css("display") == "none" ){
			jQuery('#mainNav ul').css("display","none");
		}
	});
	
	
	
	
});