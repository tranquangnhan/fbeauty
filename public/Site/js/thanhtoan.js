$('.pttt').click(function (e) {
    e.preventDefault();
    let idpttt = $(this).attr('data-pttt');
    let text = $(this).html();
    $('.btn-pttt').html(text);
    $('.btn-pttt').attr('id-pttt', idpttt);
    $('.pttt').removeClass('active');
    $(this).addClass('active');
    setTimeout(() => {
        $('#phuongthucthanhtoan').modal('toggle');
    }, 100);

});

$('.ptgh').click(function (e) {
    e.preventDefault();
    let idptgh = $(this).attr('data-ptgh');
    let text = $(this).html();
    $('.btn-ptgh').html(text);
    $('.btn-ptgh').attr('id-ptgh', idptgh);
    $('.ptgh').removeClass('active');
    $(this).addClass('active');
    setTimeout(() => {
        $('#phuongthucgiaohang').modal('toggle');
    }, 100);

});
