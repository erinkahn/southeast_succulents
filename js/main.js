/*eslint-env jquery*/
/*eslint-disable no-console*/

$(document).ready(function () {

    $(".mobile-menu-btn").click(function () {
        $('.mobile-nav-list').toggleClass('show');
    });

    $('.slider-container').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        cssEase: 'cubic-bezier(.42,0,.49,1.02)',
        useTransform: true,
        arrows: false
    });

    console.log('foo')

});