$('.child-item-sanpham').hover(function () {
        $(this).find('.btn-sanpham').css('opacity', 1);
    }, function () {
        $(this).find('.btn-sanpham').css('opacity', 0);
    }
);
