const changeStatusDatLichUrl =  serverNameUrl + 'quantri/changeStatusDatLich/';
const getDuLieuDatLichChoCalendarUrl =  serverNameUrl + 'quantri/getDuLieuDatLichChoCalendar/';
const changeStatusTimeUrl = serverNameUrl + 'quantri/changeStatusTime/';
const getGioTheoThuUrl = serverNameUrl + 'getDataKhungGio/';
const getDuLieuBoxDatLichUrl = serverNameUrl + 'getDuLieuBoxDatLich/';
const statusLichOpen = 0;
const statusLichClose = 1;
const trangThaiLichSanSang = 0;
const postDatLichUrl = serverNameUrl + 'datLich/';

var todayYMD = moment().format('YYYY-MM-DD');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

var canChangeStatus = true;
$("body").on("click", ".btn-check-in",function (e) {
    e.preventDefault();
    if (canChangeStatus == true) {
        canChangeStatus = false;
        var idDatLich = $(this).attr('id-dat-lich');
        var elementParentDatLich = $(this).parents('.datlich-item');
        var hasCheckIn = elementParentDatLich.hasClass('check-in');
        if (hasCheckIn) {
            var status = 0;
        } else {
            var status = 1;
        }
        checkInDatLich(idDatLich, status, elementParentDatLich);
    }
});

function checkInDatLich(idDatLich, status, elementUpdate) {
    $.ajax({
        async: true,
        type: "GET",
        url: changeStatusDatLichUrl + idDatLich + '/' + status,
        success: function (respon) {
            if (respon.success) {
                if (status == 0) {
                    elementUpdate.find('.icon-status-datlich').removeClass('fa-user-check');
                    elementUpdate.find('.icon-status-datlich').addClass('fa-user-minus');
                    elementUpdate.removeClass('check-in');
                } else {
                    elementUpdate.find('.icon-status-datlich').removeClass('fa-user-minus');
                    elementUpdate.find('.icon-status-datlich').addClass('fa-user-check');
                    elementUpdate.addClass('check-in');
                }
            } else {
                swal.fire({
                    icon: 'error',
                    title: respon.titleMess,
                    text: respon.textMess,
                    confirmButtonText: 'Đóng',
                });
            }

            canChangeStatus = true;
        },
        error: function () {
            swal.fire({
                icon: 'error',
                title: 'Đã xảy ra lỗi',
                text: 'Lỗi khi đổi trạng thái đặt lịch',
                confirmButtonText: 'Thử lại',
            });
			canChangeStatus = true;
        }
    });
}

function getDatLichByDay(e) {
    var day = e.target.value;
    getDuLieuDatLichChoCalendar(day);
}

function getDuLieuDatLichChoCalendar(ngay) {
    $.ajax({
        async: true,
        type: "GET",
        url: getDuLieuDatLichChoCalendarUrl + ngay,
        success: function (respon) {
            if (respon.success) {
				duLieuCalendar = respon.duLieuCalendar;
                reloadDayCalendar(respon.duLieuCalendar);
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
                text: 'Lỗi khi đổi trạng thái đặt lịch',
                confirmButtonText: 'Thử lại',
            });
        }
    });
}

function reloadDayCalendar(data) {
    var html = ``;
    data.forEach(element => {
        html += getHTMLToReloadDayCalendar(element);
    });

    $('.body-day-calendar').children().remove();
    $('.body-day-calendar').append(html);

}

function getHTMLToReloadDayCalendar(item) {
    var html =
    `
    <div class="d-flex lich-item align-items-center">
        <div class="time-item">
            <span>${item.gio}</span>
            <button class="ml-4 mr-3 btn-custom-success btn-select-lich"><i class="fas fa-check mr-1"></i>SELECT</button>
        </div>

        <div class="list-datlich d-flex">
    `;
            for (let i = 0; i < item.soluongkhach; i++) {
            html += `
                <div class="datlich-item`;
                    if (item.listDatLich[i] != null) {
                        if (item.listDatLich[i].trangthai == 1) {
                            html += ` check-in`;
                        }
                    }
                    html += `">`;
                    if (item.listDatLich != null) {
                        if (item.listDatLich[i] != null) {
                        html += `
                            <div class="header-item d-flex align-items-center">
                                <div class="text-bold mb-0 namekh namekh-${item.listDatLich[i].id}">${item.listDatLich[i].namekh}</div>
                                <button class="btn-none btn-check-in ml-auto" id-dat-lich=${item.listDatLich[i].id}><i class="icon-status-datlich fas `;
                                if (item.listDatLich[i].trangthai == 0) { html += `fa-user-minus`} else { html += `fa-user-check`; } html += `"></i></button>
                            </div>

                            <div class="body-item">
                                <div class="name-nhanvien">${item.listDatLich[i].nameNhanVien}</div>
                                <li class="limit-text-row-1 ">`;

                                    if (item.listDatLich[i].arrayDichVu != null) {
                                        html += `
                                        <a href="" class="cl-black">${item.listDatLich[i].arrayDichVu[0].name}</a> `;
                                        if (item.listDatLich[i].arrayDichVu.length > 1) {
                                            html += `...`;
                                        }
                                    } else {
                                        html += `<a href="" class="cl-black">Khách muốn tư vấn</a>`;
                                    }
                                html += `
                                </li>
                            </div>

                            <div class="footer-item">
                                <div class="cirle-button">
                                    <i class="fas fa-plus-circle"></i>
                                </div>
                            </div>`;
                        }
                    }
                html += `</div>`;
            }
            html += `
        </div>
    </div>
    `;

    return html;
}

$('.pre-day-calendar-datlich').click(function (e) {
    e.preventDefault();
    var num = 1;
    getDataDayCalendarByNum(num);
});

$('.next-day-calendar-datlich').click(function (e) {
    e.preventDefault();
    var num = -1;
    getDataDayCalendarByNum(num);
});

function getDataDayCalendarByNum(num) {
    var elementInputDay = $('.ip-get-datlich');
    var valInput = elementInputDay.val();
    var calDay = moment(valInput).subtract(num, 'days').format("YYYY-MM-DD");
    getDuLieuDatLichChoCalendar(calDay);
    elementInputDay.val(calDay);
}

var arrayDuLieuFound;
$('.search-name-kh').keyup(function (e) {
	arrayDuLieuFound = [];
	var checkAddToArr;
	var keyword = $(this).val();
	if (keyword != '') {
		var arrNameReplace = [];
		keyword = removeAccents(keyword);
		keyword = keyword.toLowerCase();

		duLieuCalendar.forEach(lich => {
			// Lọc những lịch nào có người đặt
			if (lich.listDatLich.length > 0) {
				checkAddToArr = false;
				lich.listDatLich.forEach(datlich => {
					// Bỏ dấu, chuyển qua chữ thường và so sánh với keyword
					var namekh = removeAccents(datlich.namekh);
					namekh = namekh.toLowerCase();

					if (namekh.includes(keyword)) {
						var objRename = getObjNameKHReplace(namekh, keyword, datlich);
						arrNameReplace.push(objRename);
						checkAddToArr = true;
					}
				});
				if (checkAddToArr == true) {
					arrayDuLieuFound.push(lich);
				}
			}
		});

		if (arrayDuLieuFound.length > 0) {
			reloadDayCalendar(arrayDuLieuFound);
			arrNameReplace.forEach(element => {
				$('.namekh-' + element.id).html(element.name);
			});
		} else {
			let title = '<h3 class="text-center">Không tìm thấy khách hàng !<h3>';
			$('.body-day-calendar').html(title);
		}

	} else {
		reloadDayCalendar(duLieuCalendar);
	}

});

function removeAccents(str) {
  var AccentsMap = [
    "aàảãáạăằẳẵắặâầẩẫấậ",
    "AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬ",
    "dđ", "DĐ",
    "eèẻẽéẹêềểễếệ",
    "EÈẺẼÉẸÊỀỂỄẾỆ",
    "iìỉĩíị",
    "IÌỈĨÍỊ",
    "oòỏõóọôồổỗốộơờởỡớợ",
    "OÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢ",
    "uùủũúụưừửữứự",
    "UÙỦŨÚỤƯỪỬỮỨỰ",
    "yỳỷỹýỵ",
    "YỲỶỸÝỴ"
  ];
  for (var i=0; i<AccentsMap.length; i++) {
    var re = new RegExp('[' + AccentsMap[i].substr(1) + ']', 'g');
    var char = AccentsMap[i][0];
    str = str.replace(re, char);
  }
  return str;
}

function getObjNameKHReplace(namekh, keyword, datlich) {
	var indexKeyword = namekh.indexOf(keyword);
	var lengthKeyword = keyword.length;
	var arrNameKH = datlich.namekh.split('');
	var lengthKeywordFromIndex = indexKeyword + lengthKeyword;

	var rename = '';
	for (let i = 0; i < arrNameKH.length; i++) {
		if (i >= indexKeyword && i < lengthKeywordFromIndex) {
			rename += '<span>'+arrNameKH[i]+'</span>';
		} else {
			rename += arrNameKH[i];
		}
	}
	var objRename = {
		'name': rename,
		'id': datlich.id
	}

	return objRename;
}

$('.btn-select-lich').click(function (e) {
	e.preventDefault();
    selectTime(this);
});

$('.button-unselect').click(function (e) {
    e.preventDefault();
    var idTime = $(this).attr('id-unselect-time');
    var buttonSelect = $(`[id-time=${idTime}]`);
    var faTime = $(`[fa-id-time=${idTime}]`);
    buttonSelect.removeClass('hide');
    faTime.removeClass('selected');
    $(this).parent().removeClass('show');
    checkLengthTimeSelected();
});

$('.button-block').click(function (e) {
    e.preventDefault();
    var idTime = $(this).attr('id-block-time');
    changeStatusTimeById(idTime, statusLichClose);
});

function blockTime(idTime) {
    var faTime = $(`[fa-id-time=${idTime}]`);
    var buttonSelect = $(`[id-time=${idTime}]`);
    var faChildButton = $(`[fa-child-button=${idTime}]`);
    faChildButton.removeClass('show');
    buttonSelect.removeClass('hide');
    faTime.removeClass('selected');
    faTime.addClass('blocked');
}

$('.btn-unblock-lich').click(function (e) {
    e.preventDefault();
    var idTime = $(this).attr('id-unblock-time');
    changeStatusTimeById(idTime, statusLichOpen);
});

function unblockTime(idTime) {
    var faTime = $(`[fa-id-time=${idTime}]`);
    faTime.removeClass('blocked');
}

$('#check-select-all').change(function () {
    if (this.checked) {
        $('.btn-select-lich').click();
    } else {
        $('.button-unselect').click();
    }
});

var totalTime = $('.btn-select-lich').length;

function selectTime(thise) {
	var idTime = $(thise).attr('id-time');
    var faTime = $(`[fa-id-time=${idTime}]`);
	faTime.addClass('selected');
    $(thise).addClass('hide')
    $(thise).next('.child-button').addClass('show');
    checkLengthTimeSelected();
}

function checkLengthTimeSelected() {
    var lengthTimeSelected = $('.lich-item.selected').length;
    if (lengthTimeSelected == totalTime) {
        $('#check-select-all').prop('checked', true)

    } else {
        $('#check-select-all').prop('checked', false)
    }
}

function getIdSelected() {
    var arrIdTime = [];
    var arrElement = $('.lich-item.selected');
    for (let i = 0; i < arrElement.length; i++) {
        var idTime = $(arrElement[i]).attr('fa-id-time');
        arrIdTime.push(idTime);
    }

    return arrIdTime;
}

$('.lock-lich-multi').click(function (e) {
    e.preventDefault();
    var arrId = getIdSelected();
    for (let i = 0; i < arrId.length; i++) {
        blockTime(arrId[i]);
    }
});

$('.unlock-lich-multi').click(function (e) {
    e.preventDefault();
    var arrId = getIdBlocked();
    for (let i = 0; i < arrId.length; i++) {
        unblockTime(arrId[i]);
    }
});

function getIdBlocked() {
    var arrIdTime = [];
    var arrElement = $('.lich-item.blocked');
    for (let i = 0; i < arrElement.length; i++) {
        var idTime = $(arrElement[i]).attr('fa-id-time');
        arrIdTime.push(idTime);
    }

    return arrIdTime;
}

function changeStatusTimeById(id, status) {
    $.ajax({
        async: true,
        type: "GET",
        url: changeStatusTimeUrl + id + '/' + status,
        success: function (respon) {
            if (respon.success) {
                console.log(respon);
                if (status == statusLichOpen) {
                    unblockTime(id);
                } else {
                    blockTime(id);
                }
            } else {
                swal.fire({
                    icon: 'error',
                    title: respon.titleMess,
                    text: respon.textMess,
                    confirmButtonText: 'Đóng',
                });
            }

            canChangeStatus = true;
        },
        error: function () {
            swal.fire({
                icon: 'error',
                title: 'Đã xảy ra lỗi',
                text: 'Lỗi khi đổi trạng thái lịch',
                confirmButtonText: 'Thử lại',
            });
			canChangeStatus = true;
        }
    });
}

$('.button-search').click(function (e) {
    e.preventDefault();
    var dataShow = $(this).attr('data-select');
    var boxSelect = $(`[box-select="${dataShow}"]`);
    var checkShow = boxSelect.hasClass('show');

    if (checkShow) {
        boxSelect.removeClass('show');
    } else {
        boxSelect.addClass('show');
    }
});

$("body").on("click", ".option-select",function (e) {
    e.preventDefault();
    var type = $(this).attr('type-value');
    var boxSelect = $(`[box-select="${type}"]`);
    var idSelected = $(this).attr('id-option');
    var htmlSelected = $(this).html();
    var boxSelected = $(`[type-selected="${type}"]`);
    boxSelected.attr('id-selected', idSelected);
    boxSelected.html(htmlSelected);
    boxSelect.removeClass('show');

    if (type == 'khach-hang') {
        var name = $(this).attr('data-name');
        var sdt = $(this).attr('data-sdt');
        $('.namekh').val(name);
        $('.sdt').val(sdt);
    }

    if (type == 'dich-vu') {
        var name = $(this).attr('name-dichvu');
        var dongia = $(this).attr('dongia');
        var giamgia = $(this).attr('giamgia');
        boxSelected.attr('name-selected', name);
        boxSelected.attr('dongia', dongia);
        boxSelected.attr('giamgia', giamgia);
    }

    if (type == 'nhan-vien') {
        var idTime = 0;
        if ($(this).hasClass('disabled')) {
            Swal.fire({
                title: 'Chuyên Viên Bận',
                icon: 'warning',
                text: 'Chuyên viên bạn chọn đang bận. Hãy chọn chuyên viên khác bạn nhé !',
                confirmButtonText: 'Xác nhận',
            });
        } else {
            getDayAndNhanVienThenLoadGio(idTime);
        }

    }

});

$('.remove-khachhang-selected').click(function (e) {
    e.preventDefault();
    var boxSelectKhachHang = $(`[type-selected="khach-hang"]`);
    boxSelectKhachHang.attr('id-selected', 0);
    boxSelectKhachHang.html('Tìm kiếm tên hoặc số điện thoại');
});

$('.search-option').keyup(function (e) {
    var type = $(this).attr('data-type-option');
    var keyword = $(this).val();
	keyword = removeAccents(keyword);
	keyword = keyword.toLowerCase();

    if (type == 'khach-hang') {
        xuLiTimKiemKhachHang(keyword, type);
    }

    if (type == 'dich-vu') {
        xuLiTimKiemDichVu(keyword, type);
    }

    if (type == 'nhan-vien') {
        xuLiTimKiemNhanVien(keyword, type);
    }
});

function reloadName(type, data) {
    var html = ``;
    if (type == 'khach-hang') {
        data.forEach(element => {
            html += getHTMLOptionKhachHang(element);
        });
    }

    if (type == 'dich-vu') {
        html += `
            <div class="option option-select d-flex" type-value="dich-vu"
                id-option="0"
                name-dichvu="Đến Spa tư vấn"
                dongia="0"
                giamgia="">
                <span class="mr-auto"> Đến Spa tư vấn </span>
            </div>
        `;
        data.forEach(element => {
            html += getHTMLOptionDichVu(element);
        });
    }

    if (type == 'nhan-vien') {
        html += `
            <div class="option option-select" type-value="nhan-vien"
                id-option="0"
                data-name="Spa chọn cho khách hàng"
                data-sdt="">
                Spa chọn cho khách hàng
            </div>
        `;
        data.forEach(element => {
            html += getHTMLOptionNhanVien(element);
        });
    }

    $(`[body-type="${type}"]`).children().remove();
    $(`[body-type="${type}"]`).append(html);
}

function getHTMLOptionNhanVien(nhanVien) {
    var html =
    `
    <div class="option option-select option-chuyen-vien`; if (nhanVien.trangthai != statusNhanVienHoatDong) {
        html += ` disabled`;
    }
    html += `" type-value="nhan-vien"
        id-option="${nhanVien.id}"
        data-name="${nhanVien.name}"
        data-sdt="${nhanVien.sdt}">
        ${nhanVien.name} (${nhanVien.sdt})
    </div>
    `;

    return html;
}


function getHTMLOptionKhachHang(khachHang) {
    var html =
    `
    <div class="option option-select" type-value="khach-hang"
        id-option="${khachHang.id}"
        data-name="${khachHang.name}"
        data-sdt="${khachHang.sdt}">
        ${khachHang.name} (${khachHang.sdt})
    </div>
    `;

    return html;
}

function getHTMLOptionDichVu(dichVu) {
    var html =
    `
    <div class="option option-select d-flex" type-value="dich-vu"
        id-option="${dichVu.id}"
        name-dichvu="${dichVu.name}"
        dongia="${dichVu.dongia}"
        giamgia="${dichVu.giamgia}">
        <span class="mr-auto"> ${ dichVu.name} </span>`;
        if (dichVu.giamgia > 0) {
            var giaSauGiam = dichVu.dongia - (dichVu.dongia * dichVu.giamgia / 100);
            html += `
                <span class="gia-truocgiam mr-1">${numberFormat(dichVu.dongia)}</span>
                <span class="price-dichvu">${numberFormat(giaSauGiam) }</span>
            `;
        } else {
            html+= `
            <span class="price-dichvu"> ${numberFormat(dichVu.dongia)}</span>
            `;
        }
    html += `</div>
    `;

    return html;
}

function xuLiTimKiemKhachHang(keyword, type) {
    if (keyword.length > 0) {
        var ArraySearch = [];

        listKhachHang.forEach(khachHang => {
            var namekh = removeAccents(khachHang.name);
            namekh = namekh.toLowerCase();

            // Kiếm tra tên
            if (namekh.includes(keyword)) {
                ArraySearch.push(khachHang);
            }

            // Kiểm tra số điện thoại
            if (khachHang.sdt.includes(keyword)) {
                ArraySearch.push(khachHang);
            }
        });

        if (ArraySearch.length > 0) {
            reloadName(type, ArraySearch);
        } else {
            var title = '<h5 class="text-center">Không tìm thấy khách hàng !<h5>';
            $(`[body-type="${type}"]`).html(title);
        }
    } else {
        reloadName(type, listKhachHang);
    }
}

function xuLiTimKiemNhanVien(keyword, type) {
    if (keyword.length > 0) {
        var ArraySearch = [];

        listNhanVien.forEach(nhanVien => {
            var nameNhanVien = removeAccents(nhanVien.name);
            nameNhanVien = nameNhanVien.toLowerCase();

            // Kiếm tra tên
            if (nameNhanVien.includes(keyword)) {
                ArraySearch.push(nhanVien);
            }

            // Kiểm tra số điện thoại
            if (nhanVien.sdt.includes(keyword)) {
                ArraySearch.push(nhanVien);
            }
        });

        if (ArraySearch.length > 0) {
            reloadName(type, ArraySearch);
        } else {
            var title = '<h5 class="text-center">Không tìm thấy nhân viên !<h5>';
            $(`[body-type="${type}"]`).html(title);
        }
    } else {
        reloadName(type, listNhanVien);
    }
}

function xuLiTimKiemDichVu(keyword, type) {
    if (keyword.length > 0) {
        var ArraySearch = [];

        listDichVu.forEach(dichVu => {
            var nameDichVu = removeAccents(dichVu.name);
            nameDichVu = nameDichVu.toLowerCase();

            // Kiếm tra tên
            if (nameDichVu.includes(keyword)) {
                ArraySearch.push(dichVu);
            }
        });

        if (ArraySearch.length > 0) {
            reloadName(type, ArraySearch);
        } else {
            var title = '<h5 class="text-center">Không tìm thấy dịch vụ !<h5>';
            $(`[body-type="${type}"]`).html(title);
        }
    } else {
        reloadName(type, listDichVu);
    }
}

$('.selected-dichvu').click(function (e) {
    e.preventDefault();
    var boxSelectedDichVu = $(`[type-selected="dich-vu"]`);
    var idDichVuSelected = boxSelectedDichVu.attr('id-selected');

    if (idDichVuSelected != '') {
        var nameSelected = boxSelectedDichVu.attr('name-selected');
        var donGia = boxSelectedDichVu.attr('dongia');
        var giamGia = boxSelectedDichVu.attr('giamgia');
        var html = getHTMLDichVuSelected(idDichVuSelected, nameSelected, donGia, giamGia);
        $('.body-dichvu-selected').append(html);
    }

});

function getHTMLDichVuSelected(id, name, donGia, giamGia) {
    var html =
    `
    <div class="row box-dich-vu-selected" id-dich-vu="${id}">
        <div class="col-4">
            <span>${name}</span>
        </div>`;

        if (giamGia > 0) {
            var giaSauGiam = donGia - (donGia * giamGia / 100);
            html += `
            <div class="col-4">
                <span class="gia-truocgiam mr-1">${ numberFormat(donGia)} đ </span>
                <span class="price-dichvu"> ${ numberFormat(giaSauGiam)} đ</span>
            </div>`;
        } else {
            html += `<div class="col-4">
                        <span>${ numberFormat(donGia) } (đ)</span>
                    </div>
            `;
        }

    html += `
        <div class="col-4 align-items-center text-center">
            <button class="btn-none remove-dichvu-selected" id-remove-dich-vu="${id}"  style="color: #949494;font-size: 1.1em;">
                <i class="fas fa-times"></i>
                <span class=""> Xóa</span>
            </button>
        </div>
    </div>
    `;

    return html;
}

function numberFormat (someNumber) {
    var number = new Intl.NumberFormat('en-US', { style: 'decimal' }).format(someNumber) + ' đ';
    return number;
}


$("body").on('click', ".remove-dichvu-selected", function (e) {
    e.preventDefault();
    var id = $(this).attr('id-remove-dich-vu');
    $(`[id-dich-vu="${id}"]`).remove();
});

function getDayAndNhanVienThenLoadGio(idTime) {
    var ngay = $('.ip-date-datlich').val();
    var idNhanVien = $(`[type-selected="nhan-vien"]`).attr('id-selected');
    if (idNhanVien != '') {
        loadGio(ngay, idNhanVien, idTime);
    }
}


function loadGio(ngay, idNhanVien, idTime) {
    var ngayWasFormat = moment(ngay).format('YYYY-MM-DD');
    if (ngay == null) {
        ngay = moment();
    } else {
        ngay = moment(ngay);
    }
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
            reloadKhungGio(respon.lich, respon.ngay, idTime);
        },
        error: function () {
            alert('Lỗi khi lấy data khung giờ');
        }
    });
}

function reloadKhungGio(data, ngay, idTime) {
    var html = ``;
    console.log(data);
    data.forEach(element => {
        html += getHTMLOptionTime(element, ngay, idTime);
    });


    $(`#select-gio`).children().remove();
    $(`#select-gio`).append(html);

}

function getHTMLOptionTime(lich, ngay, idTime) {
    var gioiHanDatLich = moment().add(10, 'minutes').format('HH:mm:ss');
    var quaGio = false;
    if (ngay == todayYMD) {
        if (lich.gio < gioiHanDatLich) {
            quaGio = true;
        }
    }

    if (lich.coNhanVien == 'false' || lich.soKhachDaDat >= lich.soluongkhach || quaGio == true || !lich.trangthai == trangThaiLichSanSang) {
        var html = `
            <option class="option-disabled" disabled="disabled">${lich.gio}</option>
        `;
    } else {
        // Lịch selected
        if (lich.id == idTime) {
            var html = `
                <option value="${lich.gio}" selected>${lich.gio}</option>
            `;
        } else {
            var html = `
                <option value="${lich.gio}">${lich.gio}</option>
            `;
        }

    }

    return html;
}

function luuLich() {
    var idDatLich = 0; // 0 là thêm mới
    var ngay = $('.ip-date-datlich').val();
    var idNhanVien = $(`[type-selected="nhan-vien"]`).attr('id-selected');
    var gio = $('select[id=select-gio] option').filter(':selected').val()
    var nameKhachHang = $(`.ip-namekh-${idDatLich}`).val();
    var sdt = $('.sdt').val();

    // get list dịch vụ
    var arrIdDichVu = [];
    var listDichVu = $(".box-dich-vu-selected");
    listDichVu.each( function(i){
        var idDichVuSelected = listDichVu.eq(i).attr('id-dich-vu');
        arrIdDichVu.push(idDichVuSelected);
    });

    var er = validateDatLich(ngay, gio, idNhanVien, nameKhachHang, sdt, arrIdDichVu, idDatLich);
    if (!er) {
        datLich(ngay, gio, idCoSo, arrIdDichVu, idNhanVien, nameKhachHang, sdt);
    }
}

function validateDatLich(ngay, gio, idNhanVien, nameKhachHang, sdt, arrIdDichVu, idDatLich) {
    var er = false;

    // Bắt lỗi name khách hàng
    var errorNameKH = $(`.error-namekh-${idDatLich}`);
    var inputNameKH = $(`.ip-namekh-${idDatLich}`);
    inputNameKH.removeClass('border-error');
    errorNameKH.hide();
    if (nameKhachHang == '') {
        var errorText = 'Tên không được để trống';
        errorNameKH.html(errorText);
        errorNameKH.show();
        inputNameKH.addClass('border-error');
        er = true;
    } else if (nameKhachHang.length < 2 || nameKhachHang > 25) {
        var errorText = 'Tên chỉ được 2 - 25 ký tự';
        errorNameKH.html(errorText);
        errorNameKH.show();
        inputNameKH.addClass('border-error');
        er = true;
    }

    // bắt lỗi số điện thoại
    var errorSDTKH = $(`.error-sdt-${idDatLich}`);
    var inputSDTKH = $(`.ip-sdt-${idDatLich}`);
    inputSDTKH.removeClass('border-error');
    errorSDTKH.hide();
    var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    if (nameKhachHang.length == 0) {
        var errorText = 'Số điện thoại không được để trống';
        errorSDTKH.html(errorText);
        errorSDTKH.show();
        inputSDTKH.addClass('border-error');
        er = true;
    } else if (vnf_regex.test(sdt) == false) {
        var errorText = 'Số điện thoại không đúng định dạng';
        errorSDTKH.html(errorText);
        errorSDTKH.show();
        inputSDTKH.addClass('border-error');
        er = true;
    }

    // Bắt lỗi chọn nhân viên
    var errorNhanVien = $(`.error-nhan-vien-${idDatLich}`);
    var buttonNhanVien = $(`.button-nhan-vien-${idDatLich}`);
    buttonNhanVien.removeClass('border-error');
    errorNhanVien.hide();
    if (idNhanVien == '') {
        var errorText = 'Vui lòng chọn nhân viên';
        errorNhanVien.html(errorText);
        errorNhanVien.show();
        buttonNhanVien.addClass('border-error');
        er = true;
    }

    // Bắt lỗi dịch vụ
    var errorDichVu = $(`.error-dich-vu-${idDatLich}`);
    var buttonDichVu = $(`.button-dich-vu-${idDatLich}`);
    buttonDichVu.removeClass('border-error');
    errorDichVu.hide();
    if (arrIdDichVu.length == 0) {
        var errorText = 'Vui lòng chọn dịch vụ';
        errorDichVu.html(errorText);
        errorDichVu.show();
        buttonDichVu.addClass('border-error');
        er = true;
    }

    return er;
}

function datLich(ngaySelected, timeSelected, idCoSo, arrIdDichVu, nhanVienSelected, nameKhachHang, phoneNumber) {
    let _token   = $('meta[name="csrf-token"]').attr('content');
    let ngayGioSelected = ngaySelected + ' ' + timeSelected;
    let thoiGianDat = moment(ngayGioSelected, 'YYYY-MM-DD HH:mm:ss', true).unix();

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
    console.log(data);
    Swal.fire({
        title: 'Kiểm tra thông tin?',
        icon: 'info',
        text: 'Xác nhận đặt lịch',
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
                    if (respon.success == true) {
                        swal.fire({
                            icon: 'success',
                            title: 'Đặt lịch thành công !',
                            confirmButtonText: 'Ok',
                        }).then((resul) => {
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

$('.luu-lich-hen').click(function (e) {
    e.preventDefault();
    luuLich();
});

function resetModal() {
    location.reload();
}

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

$('.button-add').click(function (e) {
    e.preventDefault();
    var idTime = $(this).attr('id-add-time');
    getDayAndNhanVienThenLoadGio(idTime);
});

function checkKhungGio(objectDatLich) {
    var ngaySelected = $('.ip-get-datlich').val();

    if (idCoSo == objectDatLich.idcoso) {
        var ngayDatYMD = moment.unix(objectDatLich.thoiGianDat).format("YYYY-MM-DD");
        if (ngayDatYMD == ngaySelected) {
            var thoiGianDatHMS = moment.unix(objectDatLich.thoiGianDat).format("HH:mm:ss");
            console.log(thoiGianDatHMS);
            duLieuCalendar.forEach(element => {
                if (element.gio == thoiGianDatHMS) {
                    getDuLieuBoxDatLichByIdDatLich(element.id);
                    // $(`[fa-id-time="${element.id}"]`);
                }
            });
        }
    }
}
console.log(duLieuCalendar);

function getDuLieuBoxDatLichByIdDatLich(id) {
    $.ajax({
        type: "GET",
        url: getDuLieuBoxDatLichUrl + id,
        success: function (respon) {
            console.log(respon);
            if (respon.success == true) {

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
                text: 'Gửi dữ liệu box đặt lịch không thành công',
                confirmButtonText: 'Thử lại',
            });
        }
});

}

function getHTMLBoxDatLich() {
    var html = `
    <div class="datlich-item  @if (isset($item->listDatLich[$i])) @if ($item->listDatLich[$i]->trangthai == 1) check-in @endif @endif">
        @if (isset($item->listDatLich))
            @if (isset($item->listDatLich[$i]))
                <div class="header-item d-flex align-items-center">
                    <div class="text-bold limit-text-row-1 mb-0 namekh namekh-{{ $item->listDatLich[$i]->id }}">{{ $item->listDatLich[$i]->namekh }}</div>
                    <button class="btn-none btn-check-in ml-auto" id-dat-lich={{ $item->listDatLich[$i]->id }}><i class="icon-status-datlich fas @if ($item->listDatLich[$i]->trangthai == 0) fa-user-minus @else fa-user-check @endif"></i></button>
                </div>

                <div class="body-item">
                    <div class="name-nhanvien">{{ $item->listDatLich[$i]->nameNhanVien }}</div>
                    <li class="limit-text-row-1 ">
                        @if($item->listDatLich[$i]->arrayDichVu[0] != null)
                            <a href="" class="cl-black">{{ $item->listDatLich[$i]->arrayDichVu[0]->name }}</a>
                            @if (count($item->listDatLich[$i]->arrayDichVu) > 1)
                                ...
                            @endif
                        @else
                            <a href="" class="cl-black">Khách muốn tư vấn</a>
                        @endif

                    </li>
                </div>

                <div class="footer-item">
                    <button class="btn-none">
                        <i class="fas fa-pencil-alt"></i>
                    </button>

                    <button class="btn-none">
                        <i class="fas fa-trash-alt"></i>
                    </button>

                </div>
            @endif
        @endif
    </div>
    `;
}
