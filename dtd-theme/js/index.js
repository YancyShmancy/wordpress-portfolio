$(document).ready(function() {
	TweenMax.staggerTo($('a.project'), 0.25, {
		css: {
			
			'opacity': 1,
			'-webkit-transform': 'scale(1)'
		}
	}, 0.1);
});

(function() {
	
	$(window).on('scroll', function() {
		
		if($(window).scrollTop() > 95) {
			$('.main-navigation').addClass('fixed');
		} else {
			$('.main-navigation').removeClass('fixed');
		}
	})
	
	$('nav a').on('click', function(e) {
		e.preventDefault();
		$('nav a.active').removeClass('active');
		$(this).addClass('active');
		var nextPage = $(this).attr("href");
//		console.log(nextSection);
		var activeSectionID = $('section.active').attr("id");
//		var moveActiveSection = function() {
//			$activeSection = $('section.active');
//			TweenLite.to($activeSection, 0, {
//				css: {
//					'left': '-100%'
//				}
//			});
//			
//			$activeSection.removeClass('active');
//			$(nextSection).addClass('active');
//		}
		
		var redirect = function() {
			
			window.location.replace(nextPage);
		}
		
		
		if (activeSectionID == "portfolio") {
			
			var tl = new TimelineLite();
			
			tl.staggerTo($('a.project'), 0.5, {
				css: {
					'opacity': 0,
					'-webkit-transform': 'scale(0.8)'
				}
			}, 0.1);
			
			tl.add( redirect);
			
		} else if (activeSectionID == "aboutMe") {
			
			redirect();
		} else {
			redirect();
		}
	})
})();