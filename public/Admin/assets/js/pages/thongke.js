const serverNameUrl = $('#server-name').val();
const getDoanhThuByDayUrl = serverNameUrl + 'quantri/getDoanhThuByDay/';
const getDoanhThuHoaDonUrl = serverNameUrl + 'quantri/getDoanhThuHoaDon/';
var arrDoanhThuHoaDon;
function getDoanhThuByDay(e) {
    var day = e.target.value;
    console.log(day);
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

function getDoanhThuHoaDon(type, numData, callback) {
    $.ajax({
        type: "GET",
        url: getDoanhThuHoaDonUrl + type + '/' + numData,
        success: function (respon) {
            if (respon.success == true) {
                console.log(respon);
                callback('bar', respon.arrLabel, respon.arrDoanhThuHoaDon);
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
    getDoanhThuHoaDon(typeTime, numData, loadMainChart);
}

$('.reload-chart').click(function (e) {
    e.preventDefault();
    var typeTime = $('select[id=select-type-time]').val();
    var numData = getNumData(typeTime);
    console.log(typeTime);
    console.log(numData);
    getDoanhThuHoaDon(typeTime, numData, updateMainChart);
});

function updateMainChart(typeChart, arrLabel, arrDoanhThuHoaDon) {
    mainDoanhThu.data.datasets[0].data = arrDoanhThuHoaDon;
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
function loadMainChart (typeChart, labels, arrData) {
    mainDoanhThu = new Chart($('#main-chart-thongke'), {
        type: typeChart,
        data: {
            labels: labels,
            datasets: [{
                label: '# of Votes',
                data: arrData,
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
}

$('#select-type-time').on('change', function (e) {
    // var optionSelected = $("option:selected", this);
    var typeTime = this.value;
    $('.select-time').hide();
    if (typeTime == 'day') {
        $('#select-day').show();
    } else if (typeTime == 'month') {
        $('#select-month').show();
    } else if (typeTime == 'year') {
        $('#select-year').show();
    }
});
