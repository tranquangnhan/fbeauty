function getNhanVienByIdCoSo(idCoSo) {
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
    <div class="option-item option-nhanvien date-bg option-dong">
        <div class="picknhanvien position-relative z-index-999" data-imgurl="${imgUrl}" data-name-nhanvien="${nhanVien.name}" data-option-nhanvien="${nhanVien.id}">
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

loadNgayDatLich();
function loadNgayDatLich() {
    var htmlDate = ``;
    for (let i = 0; i < 7; i++) {
        var someDay  = moment().add(i, 'days');
        var numberThu = someDay.day();
        var textThuTrongTuan = getThuVietHoa(numberThu);
        var dateWasFormat = moment(someDay).format('DD/MM/YYYY');
        var ngayThang =  moment(someDay).format('DD/MM');
        var textOnBrowser = getTextDateOnBrowser(i, ngayThang, textThuTrongTuan);
        htmlDate += rowHTMLDate(dateWasFormat, textOnBrowser, numberThu);
        if (i == 0) {
            $('.value-date').html(textOnBrowser);
            $('.value-date').attr('data-date', dateWasFormat);
        }
    }
    $('.list-option-lich').append(htmlDate);
}

function rowHTMLDate(dateWasFormat, textOnBrowser, numberThu) {
    let html =
    `
    <div class="option-item date-bg date-click ${todayDMY==dateWasFormat ? 'clicked' : ''}">
        <div class="pickdate" data-option-date="${dateWasFormat}">${textOnBrowser}</div> `;
            if (numberThu > 0 && numberThu < 6) {
                html += `<div class="card-custom-small normal">Ngày thường</div>`;
            } else {
                html += `<div class="card-custom-small special">Cuối tuần</div>`;
            }

            html += ` </div>`;

    return html;
}

function getTextDateOnBrowser(index, ngayThang, thuTrongTuan) {
    var text = '';
    if (index == 0) {
        text = `Hôm nay, ${thuTrongTuan} (${ngayThang})`;
    }
    else if (index == 1) {
        text = `Ngày mai, ${thuTrongTuan} (${ngayThang})`;

    }
    else if (index == 2) {
        text = `Hôm mốt, ${thuTrongTuan} (${ngayThang})`;
    }
    else {
        text = `${thuTrongTuan} (${ngayThang})`;
    }

    return text;
}

function getThuVietHoa(numberThu) {
    var text = '';

    if (numberThu == 0) {
        text = 'CN';
    } else if (numberThu == 1) {
        text = 'T2';
    } else if (numberThu == 2) {
        text = 'T3';
    } else if (numberThu == 3) {
        text = 'T4';
    } else if (numberThu == 4) {
        text = 'T5';
    } else if (numberThu == 5) {
        text = 'T6';
    } else if (numberThu == 6) {
        text = 'T7';
    }

    return text;
}



function loadGio(ngay, idNhanVien) {
    if (ngay == null) {
        ngay = moment();
    } else {
        ngay = moment(ngay, 'DD/MM/YYYY', true);
    }
    var ngayWasFormat = moment(ngay).format('YYYY-MM-DD');
    var numberThu = ngay.day();

    $.ajax({
        async: true,
        type: "GET",
        url: getGioTheoThuUrl,
        data: {
            'ngay': ngayWasFormat,
            'thu': numberThu,
            'idCoSo': parseInt(idCoSo),
            'idNhanVien': idNhanVien
        },
        success: function (respon) {
            khungGio = respon;
            if (respon.success == true) {
                var html = loopGetHTMLKhungGio(respon.lich, respon.ngay);
                $('.list-option-khunggio .option-item').remove();
                $('.list-option-khunggio').append(html);
                elementValueTime.html('Chọn giờ đến');
                elementValueTime.attr(attrValueTime, '');
            } else {
                alert('Error!</br> ' + respon.textMess);
            }

            soXuLiBatDongBo--;
            spinnerBatDongBo();
        },
        error: function () {
            alert('Lỗi khi lấy data khung giờ');
        }
    });
}

function rowHTMLGio(rowLich, ngay) {
    var quaGio = false;
    if (ngay == todayYMD) {
        if (rowLich.gio < gioiHanDatLich) {
            quaGio = true;
        }
    }

    var html = ``;
    if (rowLich.coNhanVien == 'false' || rowLich.soKhachDaDat >= rowLich.soluongkhach || quaGio == true || !rowLich.trangthai == trangThaiLichSanSang) {
        html += `
            <div class="option-item time-bg time-close" fa-data-id-lich="${rowLich.id}">
                <div class="picktime" data-option-time="${rowLich.gio}">${rowLich.gio}</div>
            </div>
        `
    } else {
        html += `
            <div class="option-item option-time time-bg" fa-data-id-lich="${rowLich.id}">
                <div class="picktime" data-option-time="${rowLich.gio}">${rowLich.gio}</div>
            </div>
        `
    }

    return html;
}

function loopGetHTMLKhungGio(dataLich, ngay) {
    var html = ``;
    dataLich.forEach(rowLich => {
        html += rowHTMLGio(rowLich, ngay);
    });
    return html;
}

// thiếu phần load nhân viên
$('.date-click').click(function (e) {
    e.preventDefault();
    var text = $(this).children('div.pickdate').text();
    var valDate = $(this).children('div.pickdate').attr(attrOptionDate);

    var elementValueDate = $('.value-date');
    elementValueDate.html(text);
    elementValueDate.attr(attrValueDate, valDate);

    $('.date-click').removeClass('clicked');
    $(this).addClass('clicked');

    timeSelected = '';
    soXuLiBatDongBo = 1;
    spinnerBatDongBo();
    ngaySelected = valDate;
    loadGio(ngaySelected, nhanVienSelected);
});

$(document).on('click', ".option-nhanvien", function() {
    var thisChild = $(this).children();
    var text = thisChild.children('.' + classGetTextNhanVien).text();
    nhanVienSelected = thisChild.attr(attrOptionNhanVien);
    nameNhanVien = thisChild.attr('data-name-nhanvien');
    imgUrlNhanVien = thisChild.attr('data-imgurl');
    objectNhanVienSelected = {
        'id': nhanVienSelected,
        'ten': nameNhanVien,
        'imgUrl': imgUrlNhanVien
    };
    elementValueNhanVien.html(text);
    elementValueNhanVien.attr(attrValueNhanVien, nhanVienSelected);
    $('.option-nhanvien').removeClass('clicked');
    timeSelected = '';
    $(this).addClass('clicked');
    soXuLiBatDongBo = 1;
    spinnerBatDongBo();
    loadGio(ngaySelected, nhanVienSelected);
});

$(document).on('click', ".option-time", function() {
    var checkClose = $(this).hasClass('time-close');

    if (checkClose == false) {
        var text = $(this).children().text();
        timeSelected = $(this).children().attr(attrOptionTime);
        elementValueTime.html(text);
        elementValueTime.attr(attrValueTime, timeSelected);

        $('.time-bg').removeClass('clicked');
        $(this).addClass('clicked');
    }
});

function showDuLieuDatLich() {
    $('.check-phone').html(phoneNumber);
    $('.check-ngay').html(ngaySelected);
    $('.check-gio').html(timeSelected);

    $('.check-coso').html($('.value-coso').html());
    var listDichVuHTML = loopDichVuSelected();
    var listDichVuElement = $('.list-dichvu-selected');
    listDichVuElement.children().remove();
    listDichVuElement.append(listDichVuHTML);

    var nhanVienHTML = rowNhanVienPage4();
    var nhanVienElement = $('.check-nhanvien');
    nhanVienElement.children().remove();
    nhanVienElement.append(nhanVienHTML);
}

function loopDichVuSelected() {
    var html = ``;
    dichVuChecked.forEach(element => {
        html += rowDichVuSelected(element);
    });
    return html
}

function rowDichVuSelected(dichVu) {
    var giaFormat = new Intl.NumberFormat('en-US', { style: 'decimal' }).format(dichVu.gia) + 'đ';
    var html =
    `
    <div class="row align-items-center">
        <div class="col-xl-9 body-table-item">
            <div class="name-dichvu">
                ${dichVu.ten}
            </div>
        </div>
        <div class="col-xl-3 body-table-item">
            <div class="gia-dichvu">
                ${giaFormat}
            </div>
        </div>
    </div>
    `;

    return html;
}

function rowNhanVienPage4() {
    var html =
    `
        <div class="img-1" style="width: 19%;">
            <img src="${rootUrlImage}${objectNhanVienSelected.imgUrl}" alt="">
        </div>
        <div class="">
            ${objectNhanVienSelected.ten}
        </div>
    `;

    return html;
}


function datLich() {
    let _token   = $('meta[name="csrf-token"]').attr('content');
    let ngayGioSelected = ngaySelected + ' ' + timeSelected;
    let thoiGianDat = moment(ngayGioSelected, 'DD/MM/YYYY HH:mm:ss', true).unix();
    ngaySelected = moment(ngaySelected, 'DD/MM/YYYY', true).format('YYYY-MM-DD');

    let data = {
        idCoSo: idCoSo,
        listDichVu: JSON.stringify(arrIdDichVu),
        idNhanVien: nhanVienSelected,
        nameKhachHang: nameKhachHang,
        ngay: ngaySelected,
        gio: timeSelected,
        soDienThoai: phoneNumber,
        thoiGianDat: thoiGianDat,
        _token: _token,
    }

    Swal.fire({
        title: 'Kiểm tra thông tin?',
        icon: 'info',
        text: 'Bạn hãy kiểm tra đúng thông tin trước khi đặt nhé :)',
        showDenyButton: false,
        showCancelButton: true,
        cancelButtonText: 'Xem lại',
        confirmButtonText: 'Xác nhận',
      }).then((result) => {
        if (result.isConfirmed) {
            showLoading();
            $.ajax({
                type: "POST",
                url: postDatLichUrl,
                data: data,
                success: function (respon) {
                    console.log(respon);
                    if (respon.success == true) {
                        swal.fire({
                            icon: 'success',
                            title: 'Đặt lịch thành công !',
                            text: 'FBeauty spa xin cảm ơn bạn',
                            showDenyButton: true,
                            denyButtonText: 'Hủy lịch',
                            confirmButtonText: 'Ok',
                        }).then((resul) => {
                            if (resul.isDenied) {
                                window.location.href = 'http://www.google.com';
                            }

                            if (result.isConfirmed) {
                                resetModal();
                            }
                        });
                    } else {
                        swal.fire({
                            icon: 'error',
                            title: respon.titleMess,
                            text: respon.textMess,
                            confirmButtonText: 'Thử lại',
                        });
                    }
                },
                error: function () {
                    swal.fire({
                        icon: 'error',
                        title: 'Đã xảy ra lỗi',
                        text: 'Gửi dữ liệu không thành công',
                        confirmButtonText: 'Thử lại',
                    });
                }
            });
        }
    });



}

$('.dat-lich').click(function (e) {
    e.preventDefault();
    datLich();
});

var sweet_loader = `<div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>`;

var showLoading = function () {
    Swal.fire({
        title: 'Tiến hành đặt lịch !',
        html: '<div>Vui lòng chờ trong giây lát </div>',
        willOpen: () => {
            Swal.showLoading()
        },
        showConfirmButton: false,
    });
}

function resetModal() {
    location.reload();
}

function checkKhungGio(objectDatLich) {
    if (khungGio != null && idCoSo == objectDatLich.idcoso) {
        let ngayDatYMD = moment.unix(objectDatLich.thoiGianDat).format("YYYY-MM-DD");
        if (ngayDatYMD == khungGio.ngay) {
            timViTriVaClose(khungGio, objectDatLich);
        }

    }
}

function timViTriVaClose(khungGio, objectDatLich) {
    let thoiGianDatHMS = moment.unix(objectDatLich.thoiGianDat).format("HH:mm:ss");
    let arrLich = khungGio.lich;

    arrLich.forEach(lichItem => {
        if (thoiGianDatHMS == lichItem.gio) {
            lichItem.soKhachDaDat++;
            if (lichItem.soKhachDaDat >= lichItem.soluongkhach) {
                checkVaCloseLich(lichItem.id);
            }

            if (nhanVienSelected == objectDatLich.idnhanvien) {
                checkVaCloseLich(lichItem.id);
            }
        }
    });
}

function checkVaCloseLich(idLich) {
    let elementLich = $("[fa-data-id-lich='"+idLich+"']");
    let hasClose = elementLich.hasClass('time-close');
    if (hasClose == false) {
        elementLich.addClass('time-close');
        elementLich.removeClass('option-time');
    }
}
