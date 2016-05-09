jQuery(document).ready(function( $ ) {
	
	$('.menu-item').hover(function() {
		//menu_item_hover
		$(this).addClass('menu_item_hover',1000, "swing");
	}, function() {
		/* Stuff to do when the mouse leaves the element */
		$(this).removeClass('menu_item_hover',1000, "swing");
	});
	
});