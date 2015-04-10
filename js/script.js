/*
;(function($){
	Drupal.behaviors.controlHeight={
		attach:function(context,settings){
			function setHeight() {
				var elements=$('.full-single-page');
				var height=$(window).height();
				elements.css('height',height);
			}
			setHeight();
			$(window).resize(setHeight);
		}
	}
})(jQuery)
*/
;(function($){
	Drupal.behaviors.mainMenu={
		attach:function(context,settings){
			var menu=$('.nav-bar li.expanded');
			menu.mouseenter(function(){
				$(this).addClass('over');
			});
			menu.mouseleave(function(){
				$(this).removeClass('over');
			});
		}
	}
})(jQuery)
