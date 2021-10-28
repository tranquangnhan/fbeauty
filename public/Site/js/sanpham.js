$('.child-item-sanpham').hover(function () {
        $(this).find('.btn-sanpham').css('opacity', 1);
    }, function () {
        $(this).find('.btn-sanpham').css('opacity', 0);
    }
);

$('.btn-add-wishlist').click(function (e) {
    e.preventDefault();
    let hasActive = $(this).hasClass('active');
    if (hasActive) {
        $(this).removeClass('active');
    } else {
        $(this).addClass('active');
    }
});

const imageSanPhamSlider = $('#slide-images-sanpham-2');
imageSanPhamSlider.owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout: 2000,
    autoplayHoverPause:true,
    navText: ['<div class="custom-nav-owl" aria-label="Previous"><i class="fas fa-angle-left"></i></div>','<div class="custom-nav-owl" aria-label="Next"><i class="fas fa-angle-right"></i>     </div>'],
    dotsContainer: '#custom-dots-1',
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

$('.custom-nav-owl').parent().parent().addClass('fa-custom-nav-owl');



$('.owl-dot').click(function () {
    imageSanPhamSlider.trigger('to.owl.carousel', [$(this).index(), 300]);
});

$('.btn-dungtich').click(function (e) {
    e.preventDefault();
    let dangActive = $(this).hasClass('active');
    if (!dangActive) {
        xuLiReplaceDataSanPham($(this));
    }
});

function xuLiReplaceDataSanPham(thisz) {
    let ml = thisz.attr('data-ml');
    let kho = thisz.attr('data-kho');
    let gia = thisz.attr('data-gia');
    let soluotmua = thisz.attr('data-soluotmua');
    let formatGia = new Intl.NumberFormat('en-US', { style: 'decimal' }).format(gia) + ' đ';
    $('.giasanpham').html(formatGia);
    $('.tonkho').html(kho);
    $('.soluotmua').html(soluotmua);
    $('.dungtich-ml').html(ml + 'ml');
    $('.btn-dungtich').removeClass('active');
    thisz.addClass('active');
}

$('.btn-plus, .btn-minus').on('click', function(e) {
    const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
    const input = $(e.target).closest('.input-group').find('input');
    if (input.is('input')) {
      input[0][isNegative ? 'stepDown' : 'stepUp']()
    }
  })
