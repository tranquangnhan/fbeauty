$(".password").keyup(function () {
    if (this.value.length == this.maxLength) {
        var $next = $(this).next('.password-box');
        if ($next.length)
            $(this).next('.password-box').focus();
        else
            $(this).blur();
    }
});


$(".otp-box").keyup(function () {
    if (this.value.length == this.maxLength) {
        var $next = $(this).next('.otp-box');
        if ($next.length)
            $(this).next('.otp-box').focus();
        else
            $(this).blur();
    }
});

$('.authen-control-next').click(function (e) {
    e.preventDefault();
    let phoneNumber = $('#phone-number').val();
    let tranlateRange = '33.3333';
    $('.fa-modal-user').css('transform', 'translateX(-'+tranlateRange+'%)');
});

function checkIssetUser(phoneNumber) {
    $.ajax({
        async: true,
        type: "GET",
        url: getNhanVienByIdCoSoUrl + idCoSo,
        success: function (respon) {
            if (respon.success == true) {
                var html = getListHTMLNhanVien(respon.listNhanVien);
                $('.option-dong').remove();
                elementListNhanVien.append(html);
                soXuLiBatDongBo--;
                spinnerBatDongBo();
            }
        },
        error: function () {
            alert('Lỗi khi lấy nhân viên bằng id cơ sở');
        }
    });
}
