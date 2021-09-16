
jQuery(function($) {

//----------------------------------- Document ready -----------------------------------//

       $(document).ready(function() {
			//Scrolling feature

			$('.page-scroll a').on('click', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top-100
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});




			 //------- Window scroll function -------//
			$(window).scroll(function() {


			      // Shrink Navbar on Scroll

				  if ($(document).scrollTop() > 50) {
					$('.navbar').addClass('shrink');
				  } else {
					$('.navbar').removeClass('shrink');
				  }

				}); // end window scroll



            //------- on click function -------//
			$(document).on('click',function(){

				if ($(window).width() < 1200) {
				//close navbar if clicking outside menu
				$('.navbar .collapse').collapse('hide');
				}

			})
			// end on click


		}); // end document ready


	//----------------------------------- Window load function -----------------------------------//

	$(window).load(function() {

			// Page Preloader

			$("#preloader").fadeOut("slow");

			//Effects on scroll

			AOS.init({
				disable: 'mobile',
				duration: 1500,
				once: true
			});

			//initialize skrollr

			skrollr.init({
				forceHeight: false,
				    smoothScrolling: true
			});

			// disable skrollr if using handheld device
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				skrollr.init().destroy();
			}
			if ($(window).width() < 1200) {
			skrollr.init().destroy();
          }

			//Isotope

			var $container = $('#gallery-isotope');
			$container.isotope({
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false,
					layoutMode: 'masonry'
				}


			});
			$(window).smartresize(function() {
				$container.isotope({
					columnWidth: '.col-sm-3'
				});
			});

			//Isotope Nav Filter

			$('.category-isotope a').on('click', function() {
				$('.category-isotope .active').removeClass('active');
				$(this).addClass('active');

				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false
					}
				});
				return false;
			});

		}); // end window load function

}); // end jquery function
