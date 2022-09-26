$(function() {
	$("#panel-btn").click(function() {
		$("#panel").slideToggle(200);
		$("#panel-btn-icon").toggleClass("close");
		$("body,html").toggleClass("o-hidden");
		return false;
	});
});

$(document).click(function(event) {
	if ($('#panel').is(':visible')) {
		if(!$(event.target).closest('.header-menu').length) {
			$("#panel").slideToggle(200);
			$("#panel-btn-icon").toggleClass("close");
			$("body,html").toggleClass("o-hidden");
		}
	}
});

$(function() {
	$(".open-history").click(function() {
		$(this).next('ul').slideToggle(200);
		$(this).toggleClass("close");
		return false;
	});
});

$(function() {
	$(".tab-blo > div").click(function() {
		$(".active").removeClass("active");
		$(this).addClass("active");
		const index = $(".tab-blo > div").index(this);
		$(".tab-main-blo > div").hide().eq(index).fadeIn();
		return false;
	});
});

$(function() {
	$(".interview-link-ul li").click(function() {
		$(".active").removeClass("active");

		if (window.matchMedia( "(max-width: 768px)" ).matches) {
			var index = $(this).attr("data-slick-index");

			$(".interview-link-1 .tab-links-li[data-slick-index="+index+"]").addClass("active");
			$(".interview-link-2 .tab-links-li[data-slick-index="+index+"]").addClass("active");
		}else{
			var index = $(this).parent(".interview-link-ul").find("li").index(this);

			$(".interview-link-1 li").eq(index).addClass("active");
			$(".interview-link-2 li").eq(index).addClass("active");
		}

		$(".interview-out > section").hide().eq(index).fadeIn();

		var speed = 400;
		var target = $('.interview-out');
		var position = target.offset().top;
		$('body,html').animate({scrollTop:position}, speed, 'swing');

		return false;
	});
});

$(function() {
	if (window.matchMedia( "(max-width: 768px)" ).matches) {
		$("#department-select").change(function(){
			var index = $('#department-select').val();
			$(".requirements-tab-main > div").hide().eq(index).fadeIn();
			return false;
		});
	}else{
		$(".requirements-tab > div").click(function() {
			$(".active").removeClass("active");
			$(this).addClass("active");
			const index = $(".requirements-tab > div").index(this);
			$(".requirements-tab-main > div").hide().eq(index).fadeIn();
			return false;
		});
	}
});

$(window).bind("load", function(){
	if(document.URL.match("#pagescroll")) {
		var parm = location.search.substr(1);
		var s = parm.split("=");
		var id = s[1];
		var speed = 10;
		var target = $(".welfare-area");
		var position = target.offset().top;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	}
});

$(function () {
    $('#zip1').jpostal({
        click : '#btn',
        postcode : [
            '#zip1',
            '#zip2'
        ],
        address : {
            '#address1' : '%3',
            '#address2' : '%4%5'
        }
    });
});

$(function() {
	$('.top-mv-slider').slick({
		autoplay: true,
		dots: true,
		arrows: false,
		draggable: false,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		autoplaySpeed: 5000,
		speed: 1000,
		asNavFor: '.top-txt-slider',
	});
	$('.top-txt-slider').slick({
		arrows: false,
		fade: true,
		asNavFor: '.top-mv-slider'
	});
});

$(function(){
	$('.top .staff-archive-list').slick({
		autoplay: true,
		autoplaySpeed: 0,
		speed: 5000,
		cssEase: "linear",
		centerMode: true,
		centerPadding: '20%',
		variableWidth: true,
		slidesToShow: 3,
		swipe: false,
		arrows: false,
		pauseOnFocus: false,
		pauseOnHover: false,
		responsive: [
			{
				breakpoint: 750,
				settings: {
					slidesToShow: 1,
					centerMode: false,
					centerPadding: '0',
					variableWidth: false,
				}
			}
		]
	});
});

$(function() {
	$('.staff-slider').slick({
		autoplay: false,
		dots: true,
		arrows: true,
		draggable: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false
	});
});


$(function() {
	if (window.matchMedia( "(max-width: 768px)" ).matches) {
		$('.interview-link-ul').slick({
			autoplay: false,
			dots: false,
			arrows: true,
			slidesToShow: 2,
			draggable: false,
			pauseOnFocus: false,
			pauseOnHover: false,
			pauseOnDotsHover: false
		});
	}
});
