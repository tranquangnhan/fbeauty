const serverNameUrl = $('#server-name').val();
const getDoanhThuByDayUrl = serverNameUrl + 'quantri/getDoanhThuByDay/';
const getDoanhThuHoaDonVaDonHangUrl = serverNameUrl + 'quantri/getDoanhThuHoaDonVaDonHang/';
var arrDoanhThuHoaDon;

function getDoanhThuByDay(e) {
    var day = e.target.value;
    getDoanhThuByDayAjax(day, appendToListHoaDon);
}

function getDoanhThuByDayAjax(day, callback) {
    $.ajax({
        type: "GET",
        url: getDoanhThuByDayUrl + day,
        success: function (respon) {
            if (respon.success == true) {
                callback(respon);
            } else {
                Swal.fire({
                    icon: 'error',
                    confirmButtonText: 'Thử lại',
                });
            }
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Đã xảy ra lỗi',
                text: 'Gửi dữ liệu không thành công',
                confirmButtonText: 'Thử lại',
            });
        }
    });
}

function getDoanhThuHoaDon(type, numData, date, callback) {
    $.ajax({
        type: "GET",
        url: getDoanhThuHoaDonVaDonHangUrl + type + '/' + numData + '/' + date,
        success: function (respon) {
            if (respon.success == true) {
                console.log(respon);
                arrLabel = respon.arrLabel.reverse();
                arrDoanhThuHoaDon = respon.arrDoanhThuHoaDon.reverse();
                arrDoanhThuDonHang = respon.arrDoanhThuDonHang.reverse();
                callback('bar', arrLabel, arrDoanhThuHoaDon, arrDoanhThuDonHang);
            } else {
                Swal.fire({
                    icon: 'error',
                    confirmButtonText: 'Thử lại',
                });
            }
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Đã xảy ra lỗi',
                text: 'Gửi dữ liệu không thành công',
                confirmButtonText: 'Thử lại',
            });
        }
    });
}

function appendToListHoaDon(respon) {
    var arrHoaDon = respon.hoaDon;
    var hoaDon = loopHoaDon(arrHoaDon);
    $('.body-doanhthu-hoadon-ngay').children().remove();
    $('.body-doanhthu-hoadon-ngay').append(hoaDon.html);
    $('.tong-sau-giam').html(hoaDon.tongSauGiam);
    $('.tong-truoc-giam').html(hoaDon.tongTruocGiam);
}

function numberFormat (someNumber) {
    var number = new Intl.NumberFormat('en-US', { style: 'decimal' }).format(someNumber) + ' đ';
    return number;
}

function loopHoaDon(arrHoaDon) {
    let html = ``;
    let tongTruocGiam = 0;
    let tongSauGiam = 0;
    arrHoaDon.forEach((element, index) => {
        tongTruocGiam += element.tongtientruocgiamgia;
        tongSauGiam += element.tongtiensaugiamgia;
        html += rowInBodyDoanhThu(element, index);
    });

    return {
        'html': html,
        'tongTruocGiam': numberFormat(tongTruocGiam),
        'tongSauGiam': numberFormat(tongSauGiam)
    }
}

function rowInBodyDoanhThu(hoaDon, index) {
    let html = `
    <tr>
        <td>${index + 1}</td>
        <td>${hoaDon.nameKhachHang}</td>
        <td>${hoaDon.nameThuNgan }</td>
        <td class="text-right">${numberFormat(hoaDon.tongtientruocgiamgia)} </td>
        <td class="text-right">${numberFormat(hoaDon.tongtiensaugiamgia)}</td>
        <td><span class="badge badge-${hoaDon.classTrangThai}">${hoaDon.nameTrangThai}</span></td>
    </tr>
    `
    return html;
}

var arrLabels = [];
for (let i = 1; i <= 6; i++) {
    const month = moment().subtract(i, 'months').format('MM');
    var thang = 'Tháng ' + month;
    arrLabels.push(thang);
}

const ctx = $('#chart-sau-thang-gan-nhat');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: arrLabels.reverse(),
        datasets: [{
            label: '# of Votes',
            data: arrDataHoaDonSixMonth.reverse(),
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

loadChartMainDoanhThu();
function loadChartMainDoanhThu() {
    var typeTime = $('select[id=select-type-time]').val();
    var numData = getNumData(typeTime);
    var date = 0;
    getDoanhThuHoaDon(typeTime, numData, date, loadMainChart);
}

$('.reload-chart').click(function (e) {
    e.preventDefault();
    var faTypeTime = $('select[id=select-type-fa-time]').val();
    var typeTime = $('select[id=select-type-time]').val();
    if (faTypeTime == 'recent') {
        var numData = getNumData(typeTime) - 1;
        var date = 0;
    } else {
        if (typeTime == 'day') {
            var ipDateRangePicker = $('#ip-specific-day').data('daterangepicker');
            var startDate = ipDateRangePicker.startDate._d;
            var endDate = ipDateRangePicker.endDate._d;
            var numData = getNumberOfDays(startDate, endDate) - 1;
            var date = ipDateRangePicker.endDate.format('YYYY-MM-DD');
        } else if (typeTime == 'month') {
            typeTime = 'day';
            var yearMonth = $('#ip-specific-month').val();
            var yearMonthArr = yearMonth.split("-");
            var numData = daysInMonth(yearMonthArr[1], yearMonthArr[0]) - 1;
            var date = moment(yearMonth).endOf('month').format('YYYY-MM-DD');
            console.log(numData);
        } else if (typeTime == 'year') {
            typeTime = 'month';
            var year = $('#ip-specific-year').val();
            var numData = 11;
            var date = moment(year).endOf('year').format('YYYY-MM-DD');
        }
    }
    getDoanhThuHoaDon(typeTime, numData, date, updateMainChart);
});

function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}

function getNumberOfDays(start, end) {
    var date1 = new Date(start);
    var date2 = new Date(end);

    // One day in milliseconds
    var oneDay = 1000 * 60 * 60 * 24;

    // Calculating the time difference between two dates
    var diffInTime = date2.getTime() - date1.getTime();

    // Calculating the no. of days between two dates
    var diffInDays = Math.round(diffInTime / oneDay);

    return diffInDays;
}

function updateMainChart(typeChart, arrLabel, arrDoanhThuHoaDon, arrDoanhThuDonHang) {
    mainDoanhThu.data.datasets[0].data = arrDoanhThuHoaDon;
    mainDoanhThu.data.datasets[1].data = arrDoanhThuDonHang;
    mainDoanhThu.data.labels = arrLabel;
    mainDoanhThu.update();
}

function getNumData(typeTime) {
    if (typeTime == 'day') {
        var numData = $('select[id=select-day]').val();
    } else if (typeTime == 'month') {
        var numData = $('select[id=select-month]').val();
    } else if (typeTime == 'year') {
        var numData = $('select[id=select-year]').val();
    }

    return numData;
}

var mainDoanhThu;
function loadMainChart (typeChart, labels, arrDataHoaDon, arrDataDonHang) {
    mainDoanhThu = new Chart($('#main-chart-thongke'), {
        type: typeChart,
        data: {
            labels: labels,
            datasets: [{
                label: 'Doanh thu hóa đơn',
                data: arrDataHoaDon,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            },
            {
                label: 'Doanh thu đơn hàng',
                data: arrDataDonHang,
                backgroundColor: [
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

$('#select-type-time').on('change', function (e) {
    // var optionSelected = $("option:selected", this);
    var typeTime = this.value;
    checkAndShowSelectTimeCuaMainChart(typeTime);
});

$('#select-type-fa-time').on('change', function (e) {
    var faTypeTime = this.value;
    $('.fa-select-time').hide();
    $('.fa-select-time').removeClass('show');
    if (faTypeTime == 'specific') {
        $('.specific-time-option').show();
        $('.specific-time-option').addClass('show');
    } else if (faTypeTime == 'recent') {
        $('.recent-times').show();
        $('.recent-times').addClass('show');
    }
    var typeTime = $('#select-type-time').find(":selected").val();
    checkAndShowSelectTimeCuaMainChart(typeTime);
});

function checkAndShowSelectTimeCuaMainChart(typeTime) {
    var checkShowRecentTimes = $('.recent-times').hasClass('show');
    $('.select-time').hide();
    if (checkShowRecentTimes) {
        if (typeTime == 'day') {
            $('#select-day').show();
        } else if (typeTime == 'month') {
            $('#select-month').show();
        } else if (typeTime == 'year') {
            $('#select-year').show();
        }
    } else {
        if (typeTime == 'day') {
            $('#specific-day').show();
        } else if (typeTime == 'month') {
            $('#specific-month').show();
        } else if (typeTime == 'year') {
            $('#specific-year').show();
        }
    }
}

$("#ip-specific-year").datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
});

$('#ip-specific-day').daterangepicker({
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
     }
});
