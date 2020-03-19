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