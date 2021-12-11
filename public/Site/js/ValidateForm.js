//form email footer
$("#formTheoDoi").validate({
    rules: {
        emaillienhe: {required: true, maxlength: 100, minlength: 10, email: true},
    },
    messages: {
        emaillienhe: {
            required: "<span class='badge badge-danger'>Mời bạn nhập email</span>",
            maxlength: "<span class='badge badge-danger'>Email dài quá, phải <100 ký tự </span>",
            minlength: "<span class='badge badge-danger'>Email ngắn quá, phải >10 ký tự </span>"
        }
    }
});

