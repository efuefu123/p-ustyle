jQuery(function ($) {
	// この中であればWordpressでも「$」が使用可能になる
	/*--------------------------------------------
	// 共通
	--------------------------------------------*/
	// [topへ戻る]ボタン
	var topBtn = $('.js-toTop');
	$(window).on('load', function () {
		topBtn.css('z-index', '100');
	});
	// topBtn.hide();
	topBtn.removeClass('is-active');
	if ($('.p-top-fv').length) {
		var navPos = $('.p-top-fv').offset().top; // グローバルメニューの位置
	} else {
		var navPos = 0;
	}
	//  [topへ戻る]ボタンの表示設定
	$(window).scroll(function () {
		if ($(this).scrollTop() > navPos + 500) {
			topBtn.addClass('is-active');
		} else {
			topBtn.removeClass('is-active');
		}
	});
	//  [topへ戻る]ボタンをクリックしたらスクロールして上に戻る
	topBtn.click(function () {
		$('body,html').animate(
			{
				scrollTop: 0,
			},
			300,
			'swing'
		);
		return false;
	});

	//  固定パーツ非表示設定
	if ($(window).width() < 768) {
		if ($('.c-fixNav').length) {
			var fixNav = $('.c-fixNav');
			$(window).scroll(function () {
				var pageHeight = $(document).innerHeight();
				var winHeiht = $(window).innerHeight();
				var sclTop = $(window).scrollTop();
				var relPos = pageHeight - winHeiht;
				if ($(this).scrollTop() >= relPos - 100) {
					fixNav.fadeOut();
				} else {
					fixNav.fadeIn();
				}
			});
		}
	}
	if ($('.c-fixInfo').length) {
		var fixInfo = $('.c-fixInfo');
		$(window).scroll(function () {
			var pageHeight = $(document).innerHeight();
			var winHeiht = $(window).innerHeight();
			var sclTop = $(window).scrollTop();
			var relPos = pageHeight - winHeiht;
			if ($(this).scrollTop() >= relPos - 100) {
				fixInfo.fadeOut();
			} else {
				fixInfo.fadeIn();
			}
		});
	}

	// [animation]画面内に入って発火
	if ($('.u-anime-fadeup').length) {
		$(window).on('scroll', function () {
			var elem = $('.u-anime-fadeup');
			var isAnimate = 'is-active';
			elem.each(function () {
				var elemOffset = $(this).offset().top;
				var scrollPos = $(window).scrollTop();
				var wh = $(window).height();
				if (scrollPos > elemOffset - wh + wh / 3.3) {
					$(this).addClass(isAnimate);
				}
			});
		});
	}

	//[ドロワーメニュー]
	$('.js-hamburger').click(function () {
		$('.l-drawer-menu').addClass('is-active');
		$('.l-drawer-menu__overlay').addClass('is-active');
		if ($('.l-drawer-menu').hasClass('is-active')) {
			$('body').css('overflow-y', 'hidden');
		} else {
			$('body').css('overflow-y', 'auto');
		}
	});
	// リンクをクリックしたら[ドロワー]が閉じる
	$('.l-drawer-menu__nav-link, .l-drawer-menu__sns-link,.l-drawer-menu__close,.l-drawer-menu__overlay').click(function () {
		$('.l-drawer-menu').removeClass('is-active');
		$('.l-drawer-menu__overlay').removeClass('is-active');
		$('body').css('overflow-y', 'auto');
	});
	// //画面サイズ変更時にモーダルを閉じる
	var timer = '';
	$(window).on('resize', function () {
		if (timer) {
			clearTimeout(timer);
		}
		timer = setTimeout(function () {
			var windowSize = $(window).width();
			if (windowSize < 768) {
				$('.l-drawer-menu').removeClass('is-active');
				$('body').css('overflow-y', 'auto');
			}
		}, 1000);
	});

	// [スムーススクロール] (絶対パスのリンク先が現在のページであった場合でも作動)
	$(document).on('click', 'a[href*="#"]', function () {
		let time = 400;
		let header = $('header').innerHeight();
		let target = $(this.hash);
		if (!target.length) return;
		let targetY = target.offset().top - header;
		$('html,body').animate({ scrollTop: targetY }, time, 'swing');
		return false;
	});

	// [header] 追従
	var nav_pos = $('.l-header').offset().top;
	var nav_height = $('.l-header').outerHeight();
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > nav_pos) {
			$('body').css('padding-top', nav_height);
			$('.l-header').addClass('is-fixed');
		} else {
			$('body').css('padding-top', 0);
			$('.l-header').removeClass('is-fixed');
		}
	});

	/*--------------------------------------------
	// TOPページ
	--------------------------------------------*/
	if ($('.p-top-fv__slider').length) {
		// [TOP_fv]スライダー
		var swiper1 = new Swiper('.p-top-fv__slider', {
			freeMode: true,
			speed: 1000,
			effect: 'fade',
			loop: true,
			loopedSlides: 1,
			disableOnInteraction: false,
			resizeReInit: true,
			autoResize: true,
			autoplay: {
				delay: 3000,
			},
			fadeEffect: {
				crossFade: true,
			},
			// ページネーション
			pagination: {
				el: '.p-top-fv__slider-pagination',
				clickable: true,
			},
		});
	}
	/*--------------------------------------------
	// スタッフ紹介ページ
	--------------------------------------------*/
	if ($('.js-staff-card').length) {
		// モーダル表示
		$('.js-staff-card').click(function () {
			$(this).next('.p-staff-modal').addClass('is-active');
			$('.p-staff__overLay').addClass('is-active');
			$('.c-fixNav').css('display', 'none');
			if ($('.p-staff-modal').hasClass('is-active')) {
				$('body').css('overflow-y', 'hidden');
			} else {
				$('body').css('overflow-y', 'auto');
			}
		});
		// モーダル非表示
		$('.js-staff-overLay, .js-staff-overLay-close').click(function () {
			if ($('.p-staff-modal').hasClass('is-active')) {
				$('.p-staff-modal').removeClass('is-active');
			}
			$('.p-staff__overLay').removeClass('is-active');
			$('.c-fixNav').css('display', 'block');
			if ($('.p-staff-modal').hasClass('is-active')) {
				$('body').css('overflow-y', 'hidden');
			} else {
				$('body').css('overflow-y', 'auto');
			}
		});
	}
	/*--------------------------------------------
	// 施工事例ページ
	--------------------------------------------*/
	if ($('.p-worksDetail-slide__main').length) {
		var windowSizeWork = $(window).width();
		if (windowSizeWork < 768) {
			var spaceBetweenWork = 10;
		} else {
			var spaceBetweenWork = 29;
		}
		var swiperWorksDetailThumbnail1 = new Swiper('.p-worksDetail-slide__thumb', {
			effect: 'slide',
			loop: true,
			freeMode: true,
			loopedSlides: 2,
			slidesPerView: 6.1,
			spaceBetween: spaceBetweenWork,
			navigation: {
				nextEl: '.p-worksDetail-slide__thumb-nextBtn',
				prevEl: '.p-worksDetail-slide__thumb-prevBtn',
			},
		});

		var swiperWorksDetail = new Swiper('.p-worksDetail-slide__main', {
			effect: 'fade',
			freeMode: true,
			slidesPerView: 1,
			loopedSlides: 1,
			fadeEffect: {
				crossFade: true,
			},
			thumbs: {
				swiper: swiperWorksDetailThumbnail1,
			},
		});
	}

	/*--------------------------------------------
	// 住宅性能ページ
	--------------------------------------------*/
	if ($('.p-quality-semiOrder__card').length) {
		// モーダル表示
		$('.p-quality-semiOrder__cardbtn').click(function () {
			$(this).parent().next('.p-quality-modal').addClass('is-active');
			$('.p-quality-semiOrder__overLay').addClass('is-active');
			$('.c-fixNav').css('display', 'none');
			if ($('.p-quality-modal').hasClass('is-active')) {
				$('body').css('overflow-y', 'hidden');
			} else {
				$('body').css('overflow-y', 'auto');
			}
		});
		// モーダル非表示
		$('.js-quality-overLay, .js-quality-overLay-close').click(function () {
			if ($('.p-quality-modal').hasClass('is-active')) {
				$('.p-quality-modal').removeClass('is-active');
			}
			$('.p-quality-semiOrder__overLay').removeClass('is-active');
			$('.c-fixNav').css('display', 'block');
			if ($('.p-quality-semiOrder__overLay').hasClass('is-active')) {
				$('body').css('overflow-y', 'hidden');
			} else {
				$('body').css('overflow-y', 'auto');
			}
		});
	}
	/*--------------------------------------------
	// 予約・お問い合わせページ
	--------------------------------------------*/
	// URLを取得
	// let url = new URL(window.location.href);
	// // URLSearchParamsオブジェクトを取得
	// let params = url.searchParams;
	// var query_serialNumber = params.get('serialNumber');
	// var query_symptomCategory = params.get('symptomCategory');
	// var query_symptomDetail = params.get('symptomDetail');

	// // 格納先取得
	// var output_serialNumber = document.getElementById('output_serialNumber');
	// var output_symptoms = document.getElementById('output_symptoms');

	// 詳細設定

	// 格納
	// if (query_serialNumber !== '') {
	// 	output_serialNumber.innerHTML = query_serialNumber;
	// } else {
	// 	document.getElementById('output_serialNumber').innerHTML = '値がありません';
	// }
	// if (output_symptoms !== '') {
	// 	output_symptoms.innerHTML = query_symptomCategory + ' - ' + query_symptomDetail;
	// } else {
	// 	document.getElementById('output_symptoms').innerHTML = '値がありません';
	// }

	// 確認画面
	if ($('#mw_wp_form_mw-wp-form-169.mw_wp_form_confirm').length) {
		$('.p-contact-contact').css('display', 'none');
	} else if ($('#mw_wp_form_mw-wp-form-170.mw_wp_form_confirm').length) {
		$('.p-contact-reserve').css('display', 'none');
	}
});
