jQuery(document).ready(function() {

	jQuery('.carousel').carousel({interval:false});
		
	jQuery('.screenshot').click(function() {
		var screenshotId = jQuery(this).attr('id');
		screenshotId = screenshotId.split('-');
		jQuery('.carousel .item').removeClass('active');
		jQuery('.carousel .item#screenshot-item-'+screenshotId[1]).addClass('active');		
		jQuery('.modal-footer p').removeClass('active');
		jQuery('.modal-footer p#screenshot-description-'+screenshotId[1]).addClass('active');		
	});
	
	jQuery('#ucs_screenshots_carousel').on('slid', function() {
		var attId = jQuery('.modal .carousel .item.active').attr('id');
		attId = attId.split('-');
		jQuery('.modal-footer p').removeClass('active');
		jQuery('.modal-footer p#screenshot-description-'+attId[2]).addClass('active');		
	});	
	
	prettyPrint();

});