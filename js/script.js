;(function($){
	Drupal.behaviors.mainMenu={
		attach:function(context,settings){
			var menu=$('.nav-bar li.expanded');
			var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
			if (!supportsTouch) {
				menu.mouseover(function(){
					$(this).addClass('over');
				});
				menu.mouseout(function(){
					$(this).removeClass('over');
				});
			} else {
				menu.find('>a').click(function(event){
					$(this.parentNode).addClass('over');
					event.stopPropagation();
					event.preventDefault();
				});
				$('body').click(function(event){
					menu.removeClass('over');
				});
			}
		}
	}
	Drupal.behaviors.swipeSlide={
		attach:function(context,settings) {
			var slide=document.getElementById('front-slider');
			var controller=$('.slide-controller span');
			if (slide) {
				window.mySwipe = new Swipe(slide,{
					  speed: 1500,
					  auto: 8000,
					  continuous: true,
					  disableScroll: false,
					  stopPropagation: false,
					}
				);
				controller.each(function(index){
					$(this).click(function(){
						window.mySwipe.slide(index);
					});
				});
			}
		}
	}
})(jQuery)
