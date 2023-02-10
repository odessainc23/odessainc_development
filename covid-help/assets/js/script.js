$(function () {
	// Window OnScrol Make Header Sticky
	$(window).scroll(function() {
		if ($(window).scrollTop() >= 300) {
			$('.navbar').addClass('sticky-header');
		} else {
			$('.navbar').removeClass('sticky-header');
		}
	});

	$('#nav-icon1').click(function () {
		$('.menuviewwrap').show();
		$(this).toggleClass('open');
		$('.menuviewwrap').css({
			'width': '100%',
			'visibility': 'visible'
		});
		if ($('.menuviewwrap').css('display') == 'block') {
			$('html').toggleClass('sidePanel');
		}
	});

	$(".navbar-toggle").click(function () {
		$(this).toggleClass("active");
		$("html").toggleClass("navfixed");
	});

	$('#clients').owlCarousel({
		loop: true,
		margin: 5,
		nav: false,
		dots: true,
		autoplay: true,
		animateOut: 'fadeOut',
		mouseDrag: false,
		touchDrag: false,
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 1,
			},
			1024: {
				items: 1
			}
		}
	});

	$(window).resize(function () {
		let divpl = $(".memberblock").position();
		var t = ($(".memberwrapperdiv").innerWidth() - $(".memberwrapperdiv").width()) / 2,
			i = $(".memberwrapperdiv").outerWidth() - t * 2,
			n = $(".memberblock.selected .leadershipmembermodal");
		buffer = i <= 768 ? 30 : 150;
		n.length && (n.css("left", -n.closest(".memberblock").offset().left + t + parseInt(divpl.left) + "px"), n.css("width", i - buffer))

	});
	coloumnGridPanel();
	$('.mobile_view_menu ul li a').click(function () {
		$('.mobile_view_menu ul li a').removeClass('active');
		$(this).addClass('active');
		//$(this).removeClass('active');
	})
});

function coloumnGridPanel() {
	$(".memberwrapperdiv .leaderdivwr").on("click", function () {
		let pdivpl = $(this).parent().position();
		let divpl = $(".memberblock").position();
		let getwidth = pdivpl.left - divpl.left;
		var n = $(this).closest(".memberblock"),
			i = n.parent().attr("data-href"),
			r = ($(".memberwrapperdiv").innerWidth() - $(".memberwrapperdiv").width()) / 2,
			u = $(".memberwrapperdiv").outerWidth() - r * 2,
			t, f;
		buffer = u <= 991 ? 30 : 150;
		console.log(u, 'af')
		i ? redirection(i) : (t = n.attr("data-member-id"), t && (n.hasClass("selected") ? ($(".memberwrapperdiv .memberblock").removeClass("selected"), $("#" + t).slideUp()) : ($(".memberwrapperdiv .memberblock").removeClass("selected"), $(".leadershipmembermodal").hide(),
			$("#" + t).css("width", u - buffer),
			$("#" + t).css("left", '-' + getwidth + "px"),
			f = n.offset().top - 60, $("html,body").scrollTop(f), $("#" + t).slideDown(200, function () {
				n.addClass("selected")
			}))))
	});
	$(".leadershipmembermodal .close").click(function () {
		var n = $(this).attr("data-href");
		$(this).closest(".leadershipmembermodal").slideUp();
		$(".memberwrapperdiv .memberblock").removeClass("selected");
		n && (window.location.href = n)
	});
}

function tabBx(id) {
	if ($('#' + id).css('display') == 'block') {
		$('#' + id).show();
	} else {
		$('.mobileviewmenu').hide();
		$('#' + id).show();
	}
}