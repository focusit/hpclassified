$(document).ready(function() {
// Drop down menu style
	$('.header-menu ul ul ul').parent("li").addClass("sub");
	$('.header-menu ul ul').parent().hover(function() {
		$(this).children('ul').slideToggle("slow");
		$(this).addClass('activeParent');
	},
	function() {
		$(this).children('ul').fadeOut("fast");
		$(this).removeClass('activeParent');
	});
// Search box
	var sbox = '.header #searchform #s';
	var sform = '.header #searchform';
	$(sbox).focus(function() {
		$(this).animate({width: "130px"}, 1500 );
		$(sform).animate({opacity: "1.0" }, 1500 );
		$(this).addClass("active");
	});
	$(sbox).focusout(function(){
		$(this).animate({width: "70px"}, 500 );
		$(sform).animate({opacity: "0.6" }, 500 );
		$(this).removeClass("active");
	}); 
	
// Slidetoggle
	$(".toggle").hover(function () {
		//$(this).find(".toggle-me").slideToggle('fast');
		$(this).find(".toggle-me").animate({width: 'toggle'});
	  }, function () {
		$(this).find(".toggle-me").slideToggle('fast');
	  }
	);
});
