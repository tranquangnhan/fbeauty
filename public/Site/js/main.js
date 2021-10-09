const timeMoving = 100;
const lengthSlideBooking = $('.datlich-step').length;
const tranlatexRange = 100 / parseInt(lengthSlideBooking);
const maxStep = lengthSlideBooking - 1; // bắt đầu từ 0 => - 1

const elementDatePick = $('.pickdate');
const attrOptionDate = 'data-option-date';
const attrValueDate = 'data-date';

const elementNhanVienPick = $('.picknhanvien');
const attrOptionNhanVien = 'data-option-nhanvien';
const attrValueNhanVien = 'data-nhanvien';
const classGetTextNhanVien = 'name-nhanvien';
const classClickedNhanVien = 'option-nhanvien';
const elementValueNhanVien = $('.value-nhanvien');

const attrOptionTime = 'data-option-time';
const attrValueTime = 'data-time';

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

var productSlide = $('#product-slide');
$(productSlide).owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    pagination: false,
    dots: false,
    autoplay:true,
    autoplayTimeout: 10000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

var headerSlide = $('#header-slide');

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
headerSlide.on('changed.owl.carousel', function(event) {
    setTimeout(() => {
        $('.imageHeader').removeClass('auto-scale-loop-forever');
        var page = event.page.index;
        var elementImg = $('.imageHeader_' + page);
        $(elementImg).addClass('auto-scale-loop-forever');

    }, 800);

    headerSlide.trigger('stop.owl.autoplay');
    headerSlide.trigger('play.owl.autoplay');
});


// modal
$('.button').click(function(){
    var buttonId = $(this).attr('data-show');
    $('#modal-container').removeAttr('class').addClass(buttonId);
    $('body').addClass('modal-active');
  })

  $('.close-modal').click(function(){
    $('#modal-container').addClass('out');
    $('body').removeClass('modal-active');
  });


var modalDatLichSlide = $('#modal-datlich-slide');
$(modalDatLichSlide).owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    pagination: false,
    dots: false,
    autoplay: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});


// slide dat lich
$('.next-step').click(function (e) {
    e.preventDefault();
    nextStep();
});

$('.prev-step').click(function (e) {
    e.preventDefault();
    var activeStep = getActiveStep();
    var nextStep = parseInt(activeStep) - 1;

    checkStepAndCallAction(activeStep, nextStep);
});

function nextStep() {
    var activeStep = getActiveStep();
    var nextStep = parseInt(activeStep) + 1;
    console.log(nextStep);
    checkStepAndCallAction(activeStep, nextStep);
}

function getActiveStep() {
    var stepActive = $('.datlich-step.active');
    var step = $(stepActive).attr('data-step');
    return step;
}

function actionMoveSlide(activeStep, nextStep, tranlateRange) {
    var movingBox = $('.modal-content-1');
    $(movingBox).css('transform', 'translateX(-'+tranlateRange+'%)');


    var activeElement = $("[data-step='"+ activeStep +"']");
    var nextElement = $("[data-step='"+ nextStep +"']");
    activeElement.removeClass('active');
    nextElement.addClass('active');
}

function checkStepAndCallAction(activeStep, nextStep) {
    if (nextStep < maxStep + 1 && nextStep > - 1) {
        var tranlatexRangeZ = nextStep * tranlatexRange;
        actionMoveSlide(activeStep, nextStep, tranlatexRangeZ);
    }
}




$('.name-select').click(function (e) {
    e.preventDefault();

    var dataMove = $(this).attr('data-mov');
    var elementMove = $("[slide-mov='" + dataMove + "']");
    var checkShow = $(this).hasClass('show');
    if (checkShow) {
        elementMove.slideUp(timeMoving);
        $(this).removeClass('show');
    } else {
        elementMove.slideDown(timeMoving);
        $(this).addClass('show');
    }
});

elementDatePick.click(function (e) {
    e.preventDefault();
    var text = $(this).text();
    var valDate = $(this).attr(attrOptionDate);
    var elementValueDate = $('.value-date');
    elementValueDate.html(text);
    elementValueDate.attr(attrValueDate, valDate);

    $('.date-bg').removeClass('clicked');
    $(this).parent().addClass('clicked');

    $('.box-spinner').fadeIn(timeMoving, function() {
        setTimeout(() => {
            $('.box-spinner').fadeOut(timeMoving);
        }, 500);
    });
});

elementNhanVienPick.click(function (e) {
    e.preventDefault();
    var text = $(this).children('.' + classGetTextNhanVien).text();
    var valDate = $(this).attr(attrOptionNhanVien);

    elementValueNhanVien.html(text);
    elementValueNhanVien.attr(attrValueNhanVien, valDate);

    $('.' + classClickedNhanVien).removeClass('clicked');
    $(this).parent().addClass('clicked');

    $('.box-spinner').fadeIn(timeMoving, function() {
        setTimeout(() => {
            $('.box-spinner').fadeOut(timeMoving);
        }, 500);
    });
});

$('.picktime').click(function (e) {
    e.preventDefault();
    var checkClose = $(this).parent().hasClass('time-close');

    if (checkClose == false) {
        var text = $(this).text();
        var valDate = $(this).attr(attrOptionTime);
        var elementValueDate = $('.value-time');
        elementValueDate.html(text);
        elementValueDate.attr(attrValueTime, valDate);

        $('.time-bg').removeClass('clicked');
        $(this).parent().addClass('clicked');
    }
});


const elementPickCoSo = $('.pickcoso');
const attrOptionCoSo = 'data-option-coso';
const elementValueCoSo = $('.value-coso');
const attrValueCoSo = 'data-coso';


elementPickCoSo.click(function (e) {
    e.preventDefault();
    var text = $(this).text();
    var idCoSo = $(this).attr(attrOptionCoSo);
    elementValueCoSo.html(text);
    elementValueCoSo.attr(attrValueCoSo, idCoSo);

    $('.coso-fa').removeClass('clicked');
    $(this).parent().addClass('clicked');


});

$('.check-next-step').click(function (e) {
    e.preventDefault();
    $('.box-spinner').fadeIn(timeMoving, function() {
        setTimeout(() => {
            $('.box-spinner').fadeOut(timeMoving);
        }, 500);
    });
    var demoS = (timeMoving * 2) + 550;
    setTimeout(() => {
        nextStep();
    }, demoS);

});
