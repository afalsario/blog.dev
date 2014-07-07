// global. currently active menu item 
var current_item = 0;

// few settings
var section_hide_time = 1000;
var section_show_time = 1000;

// jQuery stuff
jQuery(document).ready(function($) {
	console.log('Document Loaded.');
	// Switch section
	$('a', '.mainmenu').click(function() 
	{
		// var test = $(this).hasClass('dpdn');
		// console.log(test);

		if( ! $(this).hasClass('active') && ! $(this).hasClass('dpdn')) {
			current_item = this;
			// close all visible divs with the class of .section
			$('.section:visible').fadeOut( section_hide_time, function() {
				$('a', '.mainmenu').removeClass( 'active' );
				$(current_item).addClass( 'active' );
				var new_section = $( $(current_item).attr('href') );
				new_section.fadeIn( section_show_time );
			} );
		}
		else
		{
			window.location.href = $(this).attr('href');
		}
		return false;
	});
});
