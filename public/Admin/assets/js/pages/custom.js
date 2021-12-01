const pathUploadImg = 'http://127.0.0.1:8000/uploads/khachhang/';
const serverNameUrl = $('#server-name').val();


$(document).on("click", ".remove-field", function () {
    $(this).closest(".box-detail").remove();
});

$(document).ready(function () {
    $('#key-table').DataTable(
        {
            "language": {
                "lengthMenu": "_MENU_",
                "zeroRecords": "Nothing found - sorry",
                "info": "Xem trang _PAGE_ / tổng _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Tìm Kiếm",
                "paginate": {
                    "first": "Trang Đầu",
                    "last": "Trang Cuối",
                    "next": "Trang Sau",
                    "previous": "Trang Trước"
                },
            },
            "order": [[ 1, "desc" ]]
        },

    );
});

function showFullImage(event) {
    const srcImage = event.target.getAttribute("src");
    const idLieuTrinh = $(event.target).prev().val();
    $('#myModal').modal('show')
    changeSrcImg(srcImage);
    $("#idlieutrinhgan").val(idLieuTrinh);

}

function changeSrcImg(srcImage) {
    $("#imgshow").attr("src", srcImage);
}

function changImg() {

    $("#inputfile").change(function (e) {
        e.preventDefault();

        var formData = new FormData();
        const idlieutrinhgan = $("#idlieutrinhgan").val();
        var file = $('#inputfile')[0].files;

        formData.append('idlieutrinhgan', idlieutrinhgan);
        formData.append('file', file[0]);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val(),
            },
        });
        if(file[0] != undefined){

            $.ajax({
                type: "POST",
                url: "quantri/editimglieutrinh",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    changeSrcImg(pathUploadImg + response.imgkhachhang);

                    $.each($(".idlieutrinhchitiet"), function (index, val) {
                        console.log(val.value)
                        if (val.value == response.id) {
                            $(val.nextElementSibling).attr("src", pathUploadImg + response.imgkhachhang);
                        }
                    });

                }
            });

         }

    });
}
changImg()



$(document).ready(function () {
    $.fn.editable.defaults.mode = 'inline';
    $.fn.editable.defaults.ajaxOptions = { type: "PUT" };

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
        },
    });

    $('#ghichu').editable({
        type: 'text',
        pk: 1,
        url: 'quantri/editnamedv',
        title: 'Nhập ghi chu',
        success: function (response) {
            if (response.status == 'error') return response.msg;
        },
        error: function (err) {
            if (err.status === 500) {
                alert('Bạn chưa nhập nội dung!');
            }
        }
    });

    $('.date').editable({
        format: 'yyyy-mm-dd',
        viewformat: 'dd/mm/yyyy',
        url: 'quantri/editnamedv',
        title: 'Enter date',
        success: function (response) {
            if (response.status == 'error') return response.msg;
        },
        error: function (err) {
            if (err.responseText) {
                alert(JSON.parse(err.responseText).errors.value[0])
            }
        }
    });

});




async function checkDelete() {

    return await Swal.fire({
        title: 'Bạn có chắc chắn không?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng Ý',
        cancelButtonText: 'Huỷ'
    }).then((result) => {
        if (result.isConfirmed) {
            return true;
        } else {
            return false;
        }
    })
}

async function iconfirm(e) {
    var r = confirm("Bạn có chắc chắn xoá");
    if (r == true) {

        return true;
    }
    else {
        return false;
    }
}

function alertMessage(type, title, message) {
    Swal.fire(
        title,
        message,
        type
    )
}

async function deleteLieutrinh(id, e) {
    e.preventDefault();
    const check = await checkDelete('Bạn có chắc không');
    if (check) {
        var formData = new FormData();

        formData.append('idchitiet', id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val(),
            },
        });

        if (check) {
            await $.ajax({
                type: "POST",
                url: "quantri/sanpham/detail/" + id + "/del",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.type === 'error') {
                        alertMessage('error', 'Không thể xoá!', response.errorMessage)
                    } else {

                        alertMessage('success', 'Xoá Thành Công!', response.successMessage)
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000)
                    }
                }
            });

        }
    }
}

function checkConfirm(){
    var r = confirm("Xác nhận ? .Hoá đơn đã thanh toán sẽ không thể thay đổi ?");
    if (r == true) {
        return true;
    }
    else {
        return false;
    }
}


