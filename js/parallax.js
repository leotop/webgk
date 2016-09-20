//!!!!!!!---------------Чтобы анимация была плавной,разница между эффектами должна быть 500 мс----------------!!!!!!!

function animation(rt) {

	if (parseInt($('.stars').queue().length) != 1) {

		$('.stars').queue('fx', []);

		while (parseInt($('.stars').queue().length) > 1) {

			var dist = 1060;
			$('div[class*=stars]').each(function() {

				$(this).animate({//------Большие звезды
					"left" : rt + "=" + dist / 2 + "px"
				}, {
					duration : 800
				}, 'linear');
				dist = dist / 2;
			})

			$('.wave_container').animate({//------Волна
				"left" : rt + "=250px"
			}, {
				duration : 800,
			}, 'linear');

			$('.content_over_wave').animate({//------Волна
				"left" : rt + "=200px"
			}, {
				duration : 800,
			}, 'linear');

		}
		var dist = 1060;
		$('div[class*=stars]').each(function() {
			$(this).animate({//-----Маленькие звезды
				left : rt + "=" + dist / 2 + "px",
			}, {
				duration : 1300,
				queue : false
			}, 'easeOutSine');
			dist = dist / 2;
		});

		$('.wave_container').animate({//------Волна
			"left" : rt + "=250px"
		}, {
			duration : 1300,
			queue : false
		}, 'easeOutSine');

		$('.content_over_wave').animate({//------Волна
			"left" : rt + "=200px"
		}, {
			duration : 1300,
			queue : false
		}, 'easeOutSine');

	}

}

//---------------Функция определения iPhone,iPad,iPod
function fnIsAppleMobile() {
	if (navigator && navigator.userAgent && navigator.userAgent != null) {
		var strUserAgent = navigator.userAgent.toLowerCase();
		var arrMatches = strUserAgent.match(/(iphone|ipod|ipad)/);
		if (arrMatches) {
			return true;
		} else {
			return false;
		}
	}

};

$(window).mousewheel(function(event, delta) {

	$('.left_arrow').fadeOut();
	$('.right_arrow').fadeOut();
	var left_offset = $('.content_over_wave').offset().left;
	if (delta > 0) {//----Скролл вверх
		//
		if (left_offset < 70) {
			animation('+');
		}
	} else {//-------Скролл вниз
		var right_line = parseInt($(window).width()) + 10;
		var mesure = 2050 + parseInt(left_offset)
		if (mesure > right_line) {
			animation('-');
		}
	}

	return false;

});

$(document).ready(function() {

	//-----Смена ориентации с портретной на ландшафтную и обратно

	$(window).on("orientationchange", function(event) {
		//alert(window.orientation);
		//alert(event.orientation);
	});

	//--------------Выставляем изначальное положение слайдов в зависимости от разрешения экрана
	var margin_left = (screen.width - 1500) / 2;
//	$('.wave_container').css('margin-left', margin_left + 'px');

	//-----Анимации при клике на стрелки

	$('.right_arrow').click(function() {
		var left_offset = $('.content_over_wave').offset().left;
		var right_line = parseInt($(window).width()) + 10;
		var mesure = 2050 + parseInt(left_offset);

		if (mesure > right_line) {
			animation('-');
		}
	});
	$('.left_arrow').click(function() {
		var left_offset = $('.content_over_wave').offset().left;
		if (left_offset < 70) {
			animation('+');
		}
	});

	//----------------Обработка свайпов
	var is_m_browser = fnIsAppleMobile();
	var mob_dev = detectmob();
	var orientation;
	if (mob_dev == true || is_m_browser == true) {
		$('.swipe_zone').css('overflow', 'hidden').css('position','relative').css('width','100%');
		$('html').css('overflow', 'visible');
		var window_height = parseInt($(window).height());
		//parseInt(screen.height);
		var window_width = parseInt(screen.width);
		var touch_block_height;

		switch (window.orientation) {
			case 0:
				orientation = 'portrait';
				break;
			case -90:
				orientation = 'landscape';
				break;
			case 90:
				orientation = 'landscape';
				break;
			case 180:
				orientation = 'portrait';
				break;
		}

		if (orientation == 'portrait') {
			touch_block_height = window_height - 50;
			$('.swipe_zone').css('height', touch_block_height + 'px');
			$('.wave_container,.stars,.stars2,.stars3,.content_over_wave').css('height', window_height + 'px');
			$('.wave_container').css('transform', 'scale(1.3)');

		} else if (orientation == 'landscape') {
			touch_block_height = window_height - 50;
			$('.swipe_zone,body,html,.wave_container,.stars,.stars2,.stars3').css('height', touch_block_height + 'px').css('overflow','hidden');
			$('.wave_container').css('transform', 'scale(0.9)');
			$('div[class*="bubble"]').css('transform', 'scale(0.8)');
			$('.bubble_2').css('transform', 'scale(0.7)').css('top', '6%');
			$('.bubble_7').css('transform', 'scale(0.7)').css('top', '20%');
		}

	
		$(".swipe_zone").on("swipeleft", swipeleftHandler);
		$(".swipe_zone").on("swiperight", swiperightHandler);

		function swipeleftHandler(event) {
			animation('-');
		}

		function swiperightHandler(event) {
			animation('+');
		}

	}
})

