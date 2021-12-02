var changeStatusDatLichUrl =  serverNameUrl + 'quantri/changeStatusDatLich/';
var getDuLieuDatLichChoCalendarUrl =  serverNameUrl + 'quantri/getDuLieuDatLichChoCalendar/';

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    }
});

var canChangeStatus = true;
$('.check-in').click(function (e) {
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
                    confirmButtonText: 'Thử lại',
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
                                <b>${item.listDatLich[i].namekh}</b>
                                <button class="btn-none check-in ml-auto" id-dat-lich=${item.listDatLich[i].id}><i class="fas `;
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

