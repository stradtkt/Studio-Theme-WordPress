jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var scroll              = $(window).scrollTop();  
    var scrollup            = $('.backtotop');
    var menu_toggle         = $('.menu-toggle');
    var dropdown_toggle     = $('button.dropdown-toggle');
    var nav_menu            = $('.main-navigation');
    var featured_slider     = $('.featured-slider');
    var featured_gallery    = $('.gallery-slider');
    var client_slider       = $('.client-slider');

/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/

    menu_toggle.click(function(){
        nav_menu.slideToggle();
        $(this).toggleClass('active');
        $('.menu-overlay').toggleClass('active');
        $('.main-navigation').toggleClass('menu-open');
        $('body').toggleClass('main-navigation-active');
    });

    dropdown_toggle.click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.menu-sticky #masthead').addClass('nav-shrink');
        }
        else {
            $('.menu-sticky #masthead').removeClass('nav-shrink');
        }
    });

/*------------------------------------------------
            Sliders
------------------------------------------------*/

featured_slider.slick();
featured_gallery.slick({
    responsive: [
    {
        breakpoint: 1400,
        settings: {
            slidesToShow: 3,
            centerMode: true
        }
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
            arrows: false,
            centerMode: false
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 2,
            arrows: false,
            centerMode: false
        }
    },
    {
        breakpoint: 567,
            settings: {
            slidesToShow: 1,
            arrows: false,
            centerMode: false
        }
    }
    ]
});
client_slider.slick({
    responsive: [
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2
        }
    },
    {
        breakpoint: 767,
            settings: {
            slidesToShow: 1,
            arrows: false,
            centerMode: false
        }
    }
    ]
});

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});