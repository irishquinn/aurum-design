jQuery(document).ready(function($) {

	// Code to handle Menu / Sub-Menu functionality

	//Handle
	jQuery('body').on('click', '.menu-item-lv0.menu-item-has-children', function(e) {
		console.log('.menu-item-has-children click');

		if (!jQuery(this).hasClass( "menu-item-has-children-active" )) {
		// hide the currently display sub-menu
		jQuery('.menu-item-has-children-active .sub-menu-wrapper').hide();
		jQuery('.menu-item-has-children-active').removeClass('menu-item-has-children-active');

		// add a wrapper around the sub-menu (id it doesnt have one) and show it
		jQuery(this).children(".sub-menu" ).wrap( "<div class='sub-menu-wrapper' style='display:inline;'></div>" );
		jQuery(this).addClass( "menu-item-has-children-active" );
		jQuery(this).children(".sub-menu-wrapper" ).show('slide');
		}

		// prevent the parent menu link from navigating to new page
		e.preventDefault();
	});

	// Allow links on sub-menus
	jQuery('body').delegate('.sub-menu', 'click', function(evt) {
		evt.stopPropagation();
	});

});

