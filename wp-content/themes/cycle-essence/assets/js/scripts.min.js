(function($, root, undefined) {
	 $(function() {
	 	// Add a loader to the page
	 	function pageTransition() {
			$(document).ready(function() {
		        setTimeout(function(){ 
		            $('body').removeClass('do-page-transition');
		        }, 150);
		    });
		}

		pageTransition();

		function calculateHeroHeight() {
			var windowHeight = $(window).outerHeight();

			var headerHeight = $('.header').outerHeight();

			var actualHeight = windowHeight - headerHeight;

			$('.hero').css('height', actualHeight + 'px');
		}

		calculateHeroHeight();

		$(window).resize(function() {
			calculateHeroHeight();
		});

		$('.mobile-toggle').on('click', function() {
			$(this).toggleClass('is-active');
			$('.header__end-content').toggleClass('is-active');
		});
	})
})(jQuery, this);