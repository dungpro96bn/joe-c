jQuery(function ($) {

    //Heading animation homepage
    $(document).ready(function () {
        gsap.to(".char", {
            opacity: 1,
            filter: "blur(0px)",
            duration: .7,
            ease: "power2.inOut",
            stagger: {
                each: 0.1,
                from: "random",
            }
        });
    });


    //Slider homepage
    $('.media-list').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow:"<button type='button' class='slick-next pull-right'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30.281\" height=\"57.733\" viewBox=\"0 0 30.281 57.733\">\n" +
            "  <g id=\"Component_30_1\" data-name=\"Component 30 – 1\" transform=\"translate(0.707 0.707)\">\n" +
            "    <path id=\"Path_63963\" data-name=\"Path 63963\" d=\"M1241.366,4277.84l28.16,28.16-28.16,28.16\" transform=\"translate(-1241.366 -4277.84)\" fill=\"none\" stroke=\"#fff\" stroke-miterlimit=\"10\" stroke-width=\"2\"/>\n" +
            "  </g>\n" +
            "</svg></button>",
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: false
                }
            }
        ]
    });


    //border animation
    $(document).ready(function () {
        $(window).scroll(function () {
            $('.border-animation').each(function () {
                var ptop = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height() - 150;
                if (scroll > ptop - windowHeight) {
                    $(this).addClass('active');
                }
            });
        });
        $('.border-animation').each(function () {
            var ptop = $(this).offset().top;
            var firstView = $(window).scrollTop();
            var windowHeight = $(window).height() - 150;
            if (firstView > ptop - windowHeight) {
                $(this).addClass('active');
            }
        });

        $(window).scroll(function () {
            $('.u-inview').each(function () {
                var ptop = $(this).offset().top;
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height() - 200;
                if (scroll > ptop - windowHeight) {
                    $(this).addClass('is-inview');
                }
            });
        });
        $('.u-inview').each(function () {
            var ptop = $(this).offset().top;
            var firstView = $(window).scrollTop();
            var windowHeight = $(window).height() - 200;
            if (firstView > ptop - windowHeight) {
                $(this).addClass('is-inview');
            }
        });
    });


    //scroll
    $(function () {
        $('.scroll').click(function (event) {
            event.preventDefault();
            var url = $(this).attr('href');
            var dest = url.split('#');
            var target = dest[1];
            var target_offset = $('#' + target).offset();
            var target_top = target_offset.top;
            $('html, body').animate({scrollTop: target_top}, 500, 'swing');
            return false;
        });
    });


    // page-top
    $(window).scroll( function(){
        if( $(this).scrollTop() > 200 ){
            $('#back-top').addClass('active');
        } else {
            $('#back-top').removeClass('active');
        }
    });

    if( $(this).scrollTop() > 200 ){
        $('#back-top').addClass('active');
    } else {
        $('#back-top').removeClass('active');
    }

    $('#back-top a').click(function(event){
        event.preventDefault();
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
    });

    //Open Menu
    $("#header-menu .btn-openMenu").click(function () {
        $("#header-menu .main-menu").toggleClass("is-open");
        $(this).toggleClass("is-open");
        $("body").toggleClass("is-active");
    });


});