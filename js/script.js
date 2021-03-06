;(function($){
	$.fn.visible=function(callback,fireOnce) {
		console.log(this);
		return this.each(function(){
		var that=this;
		var inViewport=function (el) {
    		var rect = el.getBoundingClientRect();
    		return (
	        	rect.top >= 0 &&
	        	rect.left >= 0 &&
	        	rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
	        	rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    		);
		}
		var $window=$(window);
		var fire=function(){
			if (inViewport(that)) {
				callback.call(that);
				if (!fireOnce) {
					$window.unbind('scroll',fire);
				}
			}
		}
		if (typeof callback==='function') {
			fire();
			$window.bind('scroll',fire);
		} 
		});
	}
})(jQuery)
;(function($){
	Drupal.behaviors.mainMenu={
		attach:function(context,settings){
			var menu=$('.nav-bar li.expanded');
			var supportsTouch = 'ontouchstart' in window || navigator.msMaxTouchPoints;
			var nav=$('#nav');
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
			$(window).scroll(function(){
				var height=window.screen.availHeight;
				var scroll=document.body.scrollTop;
				if (scroll>100) {
					nav.addClass('fixed');
				} else {
					nav.removeClass('fixed');
				}
			});
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
	Drupal.behaviors.mobileNav={
		attach:function(context,settings) {
			var menu=$('.mobile-main-menu>.menu');
			var btn=$('.mobile-main-menu .navbar-toggle');
			var nav=$('.navbar-header');
			var expand=$('.mobile-main-menu > .menu > .menu li.expanded > a');
			btn.click(function(){
				$(this).toggleClass('collpased');
			});
			nav.click(function(){
				if (btn.hasClass('collpased')) {
					menu.slideDown();
				} else {
					menu.slideUp();
				}
			});
			expand.click(function(event){
				var that=$(this);
				var menu=that.next();
				that.toggleClass('show-menu');
				if (that.hasClass('show-menu')) {
					menu.slideDown();
					event.preventDefault();
				} else {
					menu.slideUp();
					event.preventDefault();
				}
			});
		}
	};
	Drupal.behaviors.tri={
		attach:function(){
			var tri=$('.tri');
			var div=tri.find('>div');
			tri.visible(function(){
				div.each(function(index){
					var that=$(this);
					window.setTimeout(function(){
						div.eq(2-index).addClass('inview');
					},index*500)
				})
			});
		}
	};
})(jQuery)
