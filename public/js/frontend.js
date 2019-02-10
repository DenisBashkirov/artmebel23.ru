var categoriesItems = document.querySelectorAll('.categories-short__item');

for (var i = 0; i < categoriesItems.length; i++)
{
    categoriesItems[i].addEventListener('mouseenter', function () {
        var arrow = this.querySelector('.categories-short__item-arrow');
        arrow.classList.toggle('categories-short__item-arrow_hover');
    })

    categoriesItems[i].addEventListener('mouseleave', function () {
        var arrow = this.querySelector('.categories-short__item-arrow');
        arrow.classList.toggle('categories-short__item-arrow_hover');
    })
}

var items = document.querySelectorAll('.categories__item');

for (var i = 0; i < items.length; i++)
{
    items[i].addEventListener('mouseenter', function () {
        var arrow = this.querySelector('.categories__item-arrow');
        arrow.classList.toggle('categories__item-arrow_hover');
    })

    items[i].addEventListener('mouseleave', function () {
        var arrow = this.querySelector('.categories__item-arrow');
        arrow.classList.toggle('categories__item-arrow_hover');
    })
}
$(document).ready(function(){
    var $slider = $('.feedbacks__slider');

    $slider.slick({
        dots: false,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerPadding: 0,
        arrows: false,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 962,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            },
            {
                breakpoint: 738,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                }
            }
    ]
    });
});
$(document).ready(function () {

    var $hamburgerButton = $('.js-hamburger-btn');
    var $menu = $('.top-menu');
    var $vw = document.body.clientWidth;

    if ($vw < 738)
        $menu.hide();

    $hamburgerButton.on('click', function () {
        $menu.fadeToggle(600);
        $(this).toggleClass('is-active');
    });

});
$(function(){
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 1800, 'easeInOutQuart');
        return false;
    });
});