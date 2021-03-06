import '../scss/home.scss';
import 'swiper/dist/css/swiper.css';
import Swiper from 'swiper';
import {TweenMax, CSSPlugin, EasePack, TimelineMax, gsap} from 'gsap';
import ScrollMagic from 'scrollmagic';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';

$('.services .box-flex .box-flex__item').on('click',function(){
	let $this = $(this);
	let item = $this.index();
	$('.services .box-flex .box-flex__item').removeClass('active');
	$this.addClass('active');

	$('.inside-valid-flex').removeClass('active');
	$('.inside-valid-flex').find('.back').hide();
	$('.inside-valid-flex').find('.back').eq(item).show();
	setTimeout(function(){
		$('.inside-valid-flex').addClass('active');
	},500);
});
$('.button .btn').on('click',function(){
	let $this = $(this);
	$this.closest('.self_form__init').find('.self_form__init__back').addClass('active');
});
$('.self_form__init .form__close').on('click',function(){
	let $this = $(this);
	$this.closest('.self_form__init').find('.self_form__init__back').removeClass('active');
});
$('.services .box-flex .box-flex__item').eq(1).trigger('click');
var mySwiperInit = new Swiper('.clientes__slider .swiper-container', {
    speed: 400,
    pagination: {
        el: '.clientes__slider .swiper-pagination',
        clickable: true
    },
    loop: true,
    autoplay: 2500,
    slidesPerView: 'auto'
});

var mySwiperInit = new Swiper('.init .swiper-container', {
    speed: 400,
    pagination: {
        el: '.init .swiper-pagination',
        clickable: true
    },
    slidesPerView: 1,
    effect: 'fade',
    fade: { crossFade: true },
    autoplay: {
    	delay: 7500
    }
});

var min = $(window).width();
if (min < 700) {
    $('.box-flex').scrollLeft('210');
}