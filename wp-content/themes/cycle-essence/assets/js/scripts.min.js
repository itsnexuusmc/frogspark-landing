(function($, root, undefined) {
	 $(function() {
		function calculateHeroHeight() {
			var windowHeight = $(window).outerHeight();

			var headerHeight = $('.header').outerHeight();

			var actualHeight = windowHeight - headerHeight;

			$('.hero').css('height', actualHeight + 'px');
		}

		calculateHeroHeight();
	})
})(jQuery, this);