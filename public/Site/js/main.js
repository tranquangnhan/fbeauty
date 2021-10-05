$('#logo-slide').owlCarousel({
    loop: true,
    margin: 80,
    nav: false,
    pagination: false,
    dots: false,
    autoplay:true,
    autoplayTimeout: 2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});


var header_slide = $('#header-slide');

$('#header-slide').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'flipInX',
    loop: true,
    items:1,
    smartSpeed: 450,
    dots: true,

    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause:false,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
});

// Listen to owl events: auto-scale-loop-forever
header_slide.on('changed.owl.carousel', function(event) {


    setTimeout(() => {
        $('.imageHeader').removeClass('auto-scale-loop-forever');
        var page = event.page.index;
        var elementImg = $('.imageHeader_' + page);
        $(elementImg).addClass('auto-scale-loop-forever');

    }, 800);

    header_slide.trigger('stop.owl.autoplay');
    header_slide.trigger('play.owl.autoplay');


});
