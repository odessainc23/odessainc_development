let $pgpltTmctabnav = $('.pgplat_tmctabnav');
let $buildTabs = $('.build_tabs');
let $designTabs = $('.designtabs');
//let $newRoomSlider = $('#newroomslider');
//let $annoucementSlider = $('#annoucementslider');


const initializeCarousel = function($element) {
	$element.owlCarousel({
		loop: false,
		margin: 0,
		dots: false,
		autoplay: false,
		navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
		animateOut: 'fadeOut',
		responsive: {
			0: {
				items: 2,
				nav:true,
				mouseDrag: true,
				touchDrag: true,
			},
			768: {
				items: 3,
				nav: true,
				mouseDrag: true,
				touchDrag: false
			},
			992: {
				items: 3,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			},
			1024: {
				items: 4,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			}
		}
	});
};

initializeCarousel($pgpltTmctabnav);
initializeCarousel($buildTabs);
initializeCarousel($designTabs);
//initializeCarousel($newRoomSlider);
//initializeCarousel($annoucementSlider);

(function(){
	//remove no-js class
    /*removeClass(document.getElementsByTagName("html")[0], "no-js"); 

    //Hero Slider - by CodyHouse.co
	function HeroSlider( element ) {
		this.element = element;
		this.navigation = this.element.getElementsByClassName("js-cd-nav")[0];
		this.navigationItems = this.navigation.getElementsByTagName('li');
		this.marker = this.navigation.getElementsByClassName("js-cd-marker")[0];
		this.slides = this.element.getElementsByClassName("js-cd-slide");
		this.slidesNumber = this.slides.length;
		this.newSlideIndex = 0;
		this.oldSlideIndex = 0;
		this.autoplay = hasClass(this.element, "js-cd-autoplay");
		this.autoPlayId;
		this.autoPlayDelay = 9000;
		this.init();
	};

	HeroSlider.prototype.init = function() {
		var self = this;
		//upload video (if not on mobile devices)
		this.uploadVideo();
		//autoplay slider
		this.setAutoplay();
		//listen for the click event on the slider navigation
		this.navigation.addEventListener('click', function(event){
			if( event.target.tagName.toLowerCase() == 'div' )
				return;
			event.preventDefault();
			var selectedSlide = event.target;
			if( hasClass(event.target.parentElement, 'cd-selected') )
				return;
			self.oldSlideIndex = self.newSlideIndex;
			self.newSlideIndex = Array.prototype.indexOf.call(self.navigationItems, event.target.parentElement);
			self.newSlide();
			self.updateNavigationMarker();
			self.updateSliderNavigation();
			self.setAutoplay();
		});

		if(this.autoplay) {
			// on hover - pause autoplay
			// this.element.addEventListener("mouseenter", function(){
			// 	clearInterval(self.autoPlayId);
			// });
			// this.element.addEventListener("mouseleave", function(){
			// 	self.setAutoplay();
			// });
		}
	};

	HeroSlider.prototype.uploadVideo = function() {
		var videoSlides = this.element.getElementsByClassName("js-cd-bg-video");
		for( var i = 0; i < videoSlides.length; i++) {
			if( videoSlides[i].offsetHeight > 0 ) {
				// if visible - we are not on a mobile device 
				var videoUrl = videoSlides[i].getAttribute("data-video");
				videoSlides[i].innerHTML = "<video loop><source src='"+videoUrl+".mp4' type='video/mp4' /><source src='"+videoUrl+".webm' type='video/webm'/></video>";
				// if the visible slide has a video - play it
				if( hasClass(videoSlides[i].parentElement, "cd-hero__slide--selected") ) videoSlides[i].getElementsByTagName("video")[0].play();
			}
		}
	};

	HeroSlider.prototype.setAutoplay = function() {
		var self = this;
		if(this.autoplay) {
			clearInterval(self.autoPlayId);
			self.autoPlayId = window.setInterval(function(){self.autoplaySlider()}, self.autoPlayDelay);
		}
	};

	HeroSlider.prototype.autoplaySlider = function() {
		this.oldSlideIndex = this.newSlideIndex;
		var self = this;
		if( this.newSlideIndex < this.slidesNumber - 1) {
			this.newSlideIndex +=1;
			this.newSlide();
			
		} else {
			this.newSlideIndex = 0;
			this.newSlide();
		}

		this.updateNavigationMarker();
		this.updateSliderNavigation();
	};

	HeroSlider.prototype.newSlide = function(direction) {
		var self = this;
		removeClass(this.slides[this.oldSlideIndex], "cd-hero__slide--selected cd-hero__slide--from-left cd-hero__slide--from-right");
		addClass(this.slides[this.oldSlideIndex], "cd-hero__slide--is-moving");
		setTimeout(function(){removeClass(self.slides[self.oldSlideIndex], "cd-hero__slide--is-moving");}, 900);

		for(var i=0; i < this.slidesNumber; i++) {
			if( i < this.newSlideIndex && this.oldSlideIndex < this.newSlideIndex) {
				addClass(this.slides[i], "cd-hero__slide--move-right");
			} else if( i == this.newSlideIndex && this.oldSlideIndex < this.newSlideIndex) {
				addClass(this.slides[i], "cd-hero__slide--selected cd-hero__slide--from-right");
			} else if(i == this.newSlideIndex && this.oldSlideIndex > this.newSlideIndex) {
				addClass(this.slides[i], "cd-hero__slide--selected cd-hero__slide--from-right");
				removeClass(this.slides[i], "cd-hero__slide--move-right");
			} else if( i > this.newSlideIndex && this.oldSlideIndex > this.newSlideIndex ) {
				removeClass(this.slides[i], "cd-hero__slide--move-right");
			}
		}

		this.checkVideo();

	};

	HeroSlider.prototype.updateNavigationMarker = function() {
		removeClassPrefix(this.marker, 'item');
		addClass(this.marker, "cd-hero__marker--item-"+ (Number(this.newSlideIndex) + 1));
	};

	HeroSlider.prototype.updateSliderNavigation = function() {
		removeClass(this.navigationItems[this.oldSlideIndex], 'cd-selected');
		addClass(this.navigationItems[this.newSlideIndex], 'cd-selected');
	};

	HeroSlider.prototype.checkVideo = function() {
		//check if a video outside the viewport is playing - if yes, pause it
		var hiddenVideo = this.slides[this.oldSlideIndex].getElementsByTagName('video');
		if( hiddenVideo.length ) hiddenVideo[0].pause();

		//check if the select slide contains a video element - if yes, play the video
		var visibleVideo = this.slides[this.newSlideIndex].getElementsByTagName('video');
		if( visibleVideo.length ) visibleVideo[0].play();
	};

	var heroSliders = document.getElementsByClassName("js-cd-hero");
	if( heroSliders.length > 0 ) {
		for( var i = 0; i < heroSliders.length; i++) {
			(function(i){
				new HeroSlider(heroSliders[i])
			})(i);
		}
	}

	//on mobile - open/close primary navigation clicking/tapping the menu icon 
	// document.getElementsByClassName('js-cd-header__nav')[0].addEventListener('click', function(event){
	// 	if(event.target.tagName.toLowerCase() == 'nav') {
	// 		var dropdown = this.getElementsByTagName('ul')[0];
	// 		toggleClass(dropdown, 'cd-is-visible', !hasClass(dropdown, 'cd-is-visible'));
	// 	}
	// });

	function removeClassPrefix(el, prefix) {
		//remove all classes starting with 'prefix'
        var classes = el.className.split(" ").filter(function(c) {
            return c.indexOf(prefix) < 0;
        });
        el.className = classes.join(" ");
	};

	//class manipulations - needed if classList is not supported
	function hasClass(el, className) {
	  	if (el.classList) return el.classList.contains(className);
	  	else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
	}
	function addClass(el, className) {
		var classList = className.split(' ');
	 	if (el.classList) el.classList.add(classList[0]);
	 	else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
	 	if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
	}
	function removeClass(el, className) {
		var classList = className.split(' ');
	  	if (el.classList) el.classList.remove(classList[0]);	
	  	else if(hasClass(el, classList[0])) {
	  		var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
	  		el.className=el.className.replace(reg, ' ');
	  	}
	  	if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
	}
	function toggleClass(el, className, bool) {
		if(bool) addClass(el, className);
		else removeClass(el, className);
	}*/
	$('.legal-ppnav__inner').stickySidebar({
		sidebarTopMargin: 105,
		footerThreshold: 500
	});
	platformCar();
	buildTabsCar();
	designPrinciplesCar();
	newsRoomSlider();
	
topHeader();
	
})();
/*******Design Priciples Carousel code for mobile*******/
function platformCar() {
	/*$('.pgplat_tmctabnav').owlCarousel({
		loop: false,
		margin: 0,
		dots: false,
		autoplay: false,
		navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
		animateOut: 'fadeOut',
		responsive: {
			0: {
				items: 2,
				nav:true,
				mouseDrag: true,
				touchDrag: true,
			},
			768: {
				items: 3,
				nav: true,
				mouseDrag: true,
				touchDrag: false
			},
			992: {
				items: 3,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			},
			1024: {
				items: 4,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			}
		}
	});*/

	$('.pgplat_tmctab-item').on('click',function(){
		$('.pgplat_tmctab-item').removeClass('tabactive');
		$(this).addClass('tabactive');
	});
}
function buildTabsCar() {
	/*$('.build_tabs').owlCarousel({
		loop: false,
		margin: 0,
		dots: false,
		autoplay: false,
		animateOut: 'fadeOut',
		navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
		responsive: {
			0: {
				items: 2,
				nav:true,
				mouseDrag: true,
				touchDrag: true
			},
			768: {
				items: 4,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			},
			1024: {
				items: 4,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			}
		}
	});*/

	$('.build_tabs .items').on('click',function() {
		$('.build_tabs .items').removeClass('build_tabactive');
		$(this).addClass('build_tabactive');
	});
}
function designPrinciplesCar() {
	/*$('.designtabs').owlCarousel({
		loop: false,
		dots: false,
		autoplay: false,
		animateOut: 'fadeOut',
		navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
		responsive: {
			0: {
				items: 2,
				nav:true,
				mouseDrag: true,
				touchDrag: true,
			},
			768: {
				items: 3,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			},
			1024: {
				items: 3,
				nav: false,
				mouseDrag: false,
				touchDrag: false
			}
		}
	});*/

	$('.designtabs .items').on('click',function(){
		$('.designtabs .items').removeClass('design_tabactive');
		$(this).addClass('design_tabactive');
	});
}
function newsRoomSlider() {
	$('#newroomslider').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		center: true,
		dots: true,
		autoplay: false,
		singleItem:true,
		responsive: {
		   0: {
			  items: 1
		   },
		   768: {
			  items: 3
		   },
		   1024: {
			  items: 3
		   }
		}
	});
	$('#annoucementslider').owlCarousel({
		loop: false,
		margin: 0,
		nav: true,
		dots: false,
		touchDrag: false,
		mouseDrag: false,
		singleItem:true,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		autoplay: false,
		responsive: {
		   0: {
			  items: 1
		   },
		   768: {
			  items: 1
		   },
		   1024: {
			  items: 1
		   }
		}
	});
}
function topHeader() {
	var navbarHeight = $('.navbar--js .t-alert-covid').innerHeight();
	//$('#wrapper').css('margin-top', navbarHeight+10);


	$('.covid-alert .close').on("click", function () {
		$('#wrapper').css('margin-top', 0);
		$('.t-alert-covid').hide();
	});
}

