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