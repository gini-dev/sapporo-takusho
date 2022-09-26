$(function() {
	$("#panel-btn").click(function() {
		$("#panel").slideToggle(200);
		$("#panel-btn-icon").toggleClass("close");
		$("body,html").toggleClass("o-hidden");
		return false;
	});
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
	$(".interview-link-ul > li").click(function() {
		var adjust = 0;
		var speed = 400;
		var id= $(this).attr("id");
		var target = $('.' + id);
		var position = target.offset().top + adjust;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});
