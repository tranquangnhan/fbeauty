function HoaDon() {
    $.ajax({
        url: document.URL + '/getHoaDonChiTiet',
        type: 'GET',
        data: {},
        success: function (response) {
            ShowHoaDon(response)
        }
    });

}

HoaDon();

function ShowHoaDon(res) {
    var sp = '';
    var thanhtien = 0;
    var tamtinh = 0;

    for (let i = 0; i < res.length; i++) {
        var namesp = null;
        var mota = '';

        if (res[i].type == 1) {
            namesp = $.ajax({
                url: document.URL + '/sanphamchitiet/' + res[i].idlienquan,
                type: 'GET',
                async: false,
                dataType: 'json',
                data: {id: res[i].idlienquan},
                success: function (respon) {
                    return respon;
                }
            });
            mota = ' <br>Thể tích: ' + namesp.responseJSON[0].ml + 'ml';
        } else {
            namesp = $.ajax({
                url: document.URL + '/dichvu/' + res[i].idlienquan,
                type: 'GET',
                async: false,
                dataType: 'json',
                data: {id: res[i].idlienquan},
                success: function (response) {
                    return response;
                }
            });
        }
        sp += '<tr class="bg-light pb-5" style=" box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">\n' +
            '<th scope="row">' + namesp.responseJSON[0].name.substring(0, 40) + ' ' + mota + '</th>\n' +
            '<td class="w-15"><input type="number" id="soluong'+res[i].id+'" onkeyup="UPdateSL('+res[i].id+')" min="0" class="w-75" value="' + res[i].soluong + '"></td>\n' +
            '<td>' + res[i].dongiasaugiamgia.toLocaleString() + '</td>\n' +
            '<td>' + (res[i].dongiasaugiamgia * res[i].soluong).toLocaleString() + '</td>\n' +
            '<td><button onclick="XoaHDCT(' + res[i].id + ')" class="bg-primary p-1 border-radius-1" style="border-radius: 5px; outline: none; border: none;" data-toggle="tooltip" data-placement="right" title="Xóa"><i class="fa fa-trash" style="color: #ffffff"></i></button></td>\n' +
            '</tr>';
        thanhtien += (res[i].dongiasaugiamgia * res[i].soluong);
    }
    var tiengiam = 0;
    var tenmagiam = '';
    if (res[0].idgiamgia != null) {
        var giamgia = GetGiamGia(res[0].idgiamgia);
        if (thanhtien >= giamgia.responseJSON["max"]) {
            if (giamgia.responseJSON["loai"] == 1) {
                tiengiam = ((thanhtien * giamgia.responseJSON["number"]) / 100);
            } else {
                tiengiam = giamgia.responseJSON["number"];
            }
            tenmagiam = giamgia.responseJSON["name"];
        } else {
            tiengiam = 0;
            tenmagiam = 'Hóa đơn của bạn không đủ ' + responseJSON["max"].toLocaleString() + 'để áp dụng mã';
        }
    }

    document.getElementById('ShowHoaDon').innerHTML = sp;
    document.getElementById('thanhtien').innerHTML = thanhtien.toLocaleString();
    document.getElementById('magiamgia').innerHTML = tenmagiam;
    document.getElementById('tiengiam').innerHTML = tiengiam.toLocaleString();
    document.getElementById('tongtien').innerHTML = (thanhtien - tiengiam).toLocaleString();
    CapNhatGia();
}


function GetGiamGia(id) {
    var giamgia = $.ajax({
        url: document.URL + '/getgiamgia/' + id,
        type: 'GET',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function (resp) {
            giamgia = resp;
        }
    });
    return giamgia;
}

function DichVu() {
    $.ajax({
        url: document.URL + '/getDichVu',
        type: 'GET',
        data: {},
        success: function (response) {
            ShowDichVu(response)
        }
    });
}

function SanPham() {
    $.ajax({
        url: document.URL + '/getSanPham',
        type: 'GET',
        data: {},
        success: function (response) {
            ShowSanPham(response);
        }
    });
}

DichVu();
SanPham();

function ShowDichVu(res) {
    var span = '<ul class="list-group pl-0" id="myUL1">';
    var a = 0;
    for (let i = 0; i < res.length; i++) {
        span += '<li class="list-group-item row" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">\n' +
            '<span class="float-left col-10 pl-0">' + res[i].name + '' +
            '<p>Giá: <strong>' + (res[i].dongia - ((res[i].dongia * res[i].giamgia)/100)).toLocaleString() + '</strong> VND</p>' +
            '</span>\n' +
            '<span class=" col-2 float-right" onclick="GetDichVu(' + res[i].id + ')"><i class="fa fa-plus circle-icon" data-toggle="tooltip" data-placement="right" title="Thêm"></i></span>\n' +
            '</li>';
    }
    span += '</ul>';
    document.getElementById('home').innerHTML = span;
}

function ShowSanPham(res) {
    var span = '<ul class="list-group pl-0" id="myUL2">';
    var a = 0;
    for (let i = 0; i < res.length; i++) {
        span += '<li class="list-group-item row" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">\n' +
            '    <span class="float-left col-10 pl-0">' + res[i].name.substring(0, 40) + '... X <strong>' + res[i].ml + 'ml </strong>' +
            '<p>Giá: <strong>' + res[i].dongia.toLocaleString() + '</strong> VND</p>' +
            '</span>\n' +
            '    <span class=" col-2 float-right" onclick="GetSanPham(' + res[i].id + ')"><i class="fa fa-plus circle-icon" data-toggle="tooltip" data-placement="right" title="Thêm"></i></span>\n' +
            '  </li>';
    }
    span += '</ul>';
    document.getElementById('profile').innerHTML = span;
}

function Search() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("timkiemfilter");
    filter = input.value.toUpperCase();
    for (let j = 1; j <= 2; j++) {
        ul = document.getElementById("myUL" + j);
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("span")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
}

function GetSanPham(id) {
    $.ajax({
        url: document.URL + '/themsanpham/' + id,
        type: 'GET',
        async: false,
        dataType: 'json',
        data: {id: id},
        success: function (response) {
            iziToast.success({
                title: response.thongbao,
                message: '',
                position: 'bottomRight',
                backgroundColor: 'green',
                titleColor: 'white',
                messageColor: 'white',
                iconColor: 'white',
            });
        }
    });
    HoaDon();
}

function GetDichVu(id) {
    $.ajax({
        url: document.URL + '/themdichvu/' + id,
        type: 'GET',
        async: false,
        dataType: 'json',
        data: {id: id},
        success: function (response) {
            iziToast.success({
                title: response.thongbao,
                message: '',
                position: 'bottomRight',
                backgroundColor: 'green',
                titleColor: 'white',
                messageColor: 'white',
                iconColor: 'white',
            });
        }
    });
    HoaDon();
}

function ApDung() {
    var magiam = document.getElementById('magiam').value;
    var tien = document.getElementById('thanhtien').innerText;
    if (magiam != "") {
        $.ajax({
            url: document.URL + '/discount/' + magiam + '/thanhtien/' + tien.replaceAll(',', ''),
            type: 'GET',
            async: false,
            dataType: 'json',
            data: {
                magiam: magiam,
                thanhtien: tien
            },
            success: function (respon) {
                if (respon == 1) {
                    iziToast.success({
                        title: 'Áp dụng thành công !!!',
                        message: '',
                        position: 'bottomRight',
                        backgroundColor: 'green',
                        titleColor: 'white',
                        messageColor: 'white',
                        iconColor: 'white',
                    });
                    HoaDon();
                } else {
                    iziToast.warning({
                        title: respon.thongbao,
                        message: '',
                        position: 'bottomRight',
                        backgroundColor: 'oranged',
                        titleColor: 'black',
                        messageColor: 'black',
                        iconColor: 'black',
                    });
                }

            }
        });
    }
}

function CapNhatGia() {
    var tien = document.getElementById('thanhtien').innerText.replaceAll(',', '');
    var tongtien = document.getElementById('tongtien').innerText.replaceAll(',', '');
    var con = $.ajax({
        url: document.URL + '/capnhatgia/' + tien + '/tongtien/' + tongtien,
        type: 'GET',
        async: false,
        dataType: 'json',
        data: {
            tien: tien,
            tongtien: tongtien
        },
        success: function (response) {
            return response;
        }
    });

}

function XoaHDCT(id) {
    var x = confirm("Bạn chắn chắn muốn xóa ?");
    if (x) {
        $.ajax({
            url: document.URL + '/xoahoadonchitiet/' + id,
            type: 'GET',
            async: false,
            dataType: 'json',
            data: {id: id},
            success: function (response) {
                iziToast.success({
                    title: response.thongbao,
                    message: '',
                    position: 'bottomRight',
                    backgroundColor: 'green',
                    titleColor: 'white',
                    messageColor: 'white',
                    iconColor: 'white',
                });
            }
        });
        HoaDon();
    } else {
        return false;
    }

}

function UPdateSL(id) {
    var soluong=document.getElementById("soluong"+id).value;
    if (soluong!="" && soluong>0 && soluong<=100){
        $.ajax({
            url: document.URL + '/capnhatsoluong/' + id +'/soluong/'+soluong,
            type: 'GET',
            async: false,
            dataType: 'json',
            data: {soluong: soluong},
            success: function (response) {
            }
        });
        HoaDon();
    }

}
