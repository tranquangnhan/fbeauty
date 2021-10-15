const getNhanVienByIdCoSoUrl = 'nhanviencuacoso/';
const elementListNhanVien = $('.list-nhanvien');
const rootUrlImage = '/Site/images/';
function getNhanVienByIdCoSo(idCoSo) {
    spinnerTurnOn();
    $.ajax({
        async: true,
        type: "GET",
        url: getNhanVienByIdCoSoUrl + idCoSo,
        success: function (respon) {
            if (respon.success == true) {
                var html = getListHTMLNhanVien(respon.listNhanVien);
                elementListNhanVien.children().remove();
                elementListNhanVien.append(html);
            }
            spinnerTurnOff();
        },
        error: function () {
            alert('Lỗi khi lấy nhân viên bằng id cơ sở');
        }
    });
}

function getListHTMLNhanVien(data) {
    var html = ``;
    data.forEach(nhanVien => {
        html += boxHTMLNhanVien(nhanVien);
    });

    return html;
}

function boxHTMLNhanVien(nhanVien) {
    if (nhanVien.img == '') {
        var imgUrl = 'avatar-default.png';
    } else {
        var imgUrl = nhanVien.img;
    }

    var html = `
    <div class="option-item option-nhanvien date-bg">
        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="8">
            <div class="img-1 border-image">
                <img src="${rootUrlImage}${imgUrl}" class="cycle-img-1" alt="">
            </div>

            <div class="name-nhanvien">
                ${nhanVien.name}
            </div>
        </div>
    </div>
    `;

    return html;
}
