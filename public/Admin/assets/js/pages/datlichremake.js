$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

$('.check-in').click(function (e) {
    e.preventDefault();
    var idDatLich = $(this).attr('id-dat-lich');
    $(this).parents('.datlich-item').addClass('check-in');
});
