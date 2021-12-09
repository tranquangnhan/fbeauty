var sanphambandau = 9; //Số lượng sản phẩm hiện ban đầu
var soluongshowtiep = 3; //Số lượng sản phẩm hiện khi click phân trang
var ArrayDanhMuc = []; //Chứa số danh mục cần lọc
let Arrayphu = []; // Lưu trữ mã trả về ban đầu
let ArrayFlow = []; // Mảng lưu động thay đổi theo khi lọc
let YeuThichSPS = []; // Chưa id của sản phẩm mà User yêu thích khi login
//lấy tất cả sản phẩm, push data reponseJson vào Arrayphu đồng thời truyền data nhận được mà function BeFore
function SanPham() {
    var bienkhac = '';
    Arrayphu = $.ajax({
        url: document.URL + '/getall',
        type: 'GET',
        async: false,
        dataType: 'json',
        data: {},
        success: function (data) {
            BeFore(data, bienkhac);
        }
    });
}

//lấy sản phẩm yêu thích khi có session("khachHang) và thêm vào mảng YeuThichSPS
function GetYeuThichSP() {
    YeuThichSPS = $.ajax({
        url: domain + '/getyeuthichsps',
        type: 'GET',
        async: false,
        dataType: 'json',
        data: {},
        success: function (datayeuthich) {
            return datayeuthich;
        }

    });
}

//Nơi tiếp nhận Filter Danh mục
function BeFore(data, bienkhac) {
    let mang = data.sanpham;
    var datas = [];
    let bien = '';
    if (Array.isArray(bienkhac) == true && bienkhac != '') {
        var mangdm = new Array();
        var locmang;
        for (let i = 0; i < bienkhac.length; i++) {
            locmang = mang.filter(function (e) {
                return e.iddanhmuc == bienkhac[i] || e.idthuonghieu == bienkhac[i];
            })
            mangdm.push(locmang);
        }
        if (mangdm.length > 1) {
            for (let n = 1; n < mangdm.length; n++) {
                for (let j = 0; j < mangdm[n].length; j++) {
                    mangdm[0] = mangdm[0].concat(mangdm[n][j])
                }
            }
        }

        datas = {
            sanpham: mangdm[0],
        }
        TruyenObject(datas)
        FilterSapXep(ArrayFlow, bien)

    } else {
        ArrayFlow = data;
        FilterSapXep(ArrayFlow, bien)
    }
}

//Nơi thay đổi Array mổi khi có Filter
function TruyenObject(data) {
    delete ArrayFlow.sampham;
    return ArrayFlow = data;
}

//Nhận data từ function BeFore Sắp xếp sản phẩm theo tên or giá
function FilterSapXep(data, bienkhac) {
    let mang = data.sanpham;
    let datas = [];
    let bien = '';
    if (bienkhac == 'AZ') {
        datas = {
            sanpham: mang.sort((a, b) => (a.name > b.name) ? 1 : -1),
        }
        FilterGia(datas, bien)
    } else if (bienkhac == '') {
        datas = {
            sanpham: mang.sort((a, b) => (a.name > b.name) ? 1 : -1),
        }
        FilterGia(datas, bien)
    } else if (bienkhac == 'ZA') {
        datas = {
            sanpham: mang.sort((a, b) => (a.name < b.name) ? 1 : -1),
        }
        FilterGia(datas, bien)
    } else if (bienkhac == 'caothap') {
        datas = {
            sanpham: mang.sort((a, b) => (a.dongia < b.dongia) ? 1 : -1),
        }
        FilterGia(datas, bien)
    } else if (bienkhac == 'thapcao') {
        datas = {
            sanpham: mang.sort((a, b) => (a.dongia > b.dongia) ? 1 : -1),
        }
        FilterGia(datas, bien)
    } else if (bienkhac == '') {
        FilterGia(data, bien)
    }

}

//Nhận data từ function FilterSapXep lọc sản phẩm theo tên or giá
function FilterGia(data, bienkhac) {
    let mang = data.sanpham;
    let datas = [];
    let bien = '';
    if (bienkhac == 'g0' || bienkhac == '') {
        FilterName(data, bien)
    } else if (bienkhac == 'g1') {
        datas = {
            sanpham: mang.filter(function (e) {
                return e.dongia < 500000;
            }),
        }
        FilterName(datas, bien)
    } else if (bienkhac == 'g2') {
        datas = {
            sanpham: mang.filter(function (e) {
                return e.dongia >= 500000 && e.dongia <= 1000000;
            }),
        }
        FilterName(datas, bien)
    } else if (bienkhac == 'g3') {
        datas = {
            sanpham: mang.filter(function (e) {
                return e.dongia >= 1000000 && e.dongia <= 50000000;
            }),
        }
        FilterName(datas, bien)
    } else if (bienkhac == 'g4') {
        datas = {
            sanpham: mang.filter(function (e) {
                return e.dongia >= 5000000;
            }),
        }
        FilterName(datas, bien)
    }
}

//Nhận data từ function FilterSapXep lọc sản phẩm theo tên
function FilterName(data, bienkhac) {

    let mang = data.sanpham;
    let datas = [];
    let bien = '';
    if (bienkhac != "") {
        datas = {
            sanpham: mang.filter(function (e) {
                return e.tendm.toUpperCase().indexOf(bienkhac.toUpperCase()) > -1 || e.name.toUpperCase().indexOf(bienkhac.toUpperCase()) > -1;
            }),

        }
        ShowSanPham(datas)
    } else {
        ShowSanPham(data)
    }
}

//Nơi tiếp nhận data  từ function FilterName trả về để show sản phẩm
function ShowSanPham(data) {
    var sp = '';
    var dem = 0;
    for (let i = 0; i < data.sanpham.length; i++) {
        dem += 1;
        var thetich;
        if (data.sanpham[i].thetich != null) {
            thetich = data.sanpham[i].thetich;
        } else {
            thetich = 0
        }
        var giasaugiam = '';
        var showgiasaugiam = '';

        var yeuthich = SoSanhYeuThich(data.sanpham[i].id); // gọi hàm so sánh tìm ra sản phẩm Yêu thích của User khi login

        var anhsp = data.sanpham[i].img.split('"').join('').slice(1, -1).split(',');
        var boxgiamgia = '';
        if (data.sanpham[i].giamgia != null) {
            boxgiamgia = '<div class="btn-add-discout btn-sticky hover-scale-1">\n' +
                '<div class="box-cicrle-giamgia p-2 rounded text-white">\n' +
                '<span style="font-size: 10pt;">' + data.sanpham[i].giamgia + '%</span>\n' +
                '</div></div>';
            giasaugiam = (data.sanpham[i].dongia - ((data.sanpham[i].dongia * data.sanpham[i].giamgia) / 100))
            if (giasaugiam < 0) {
                giasaugiam = 0
            }
            showgiasaugiam = '<br><span>Giảm còn: </span><span class="font-weight-bold">' + giasaugiam.toLocaleString().replaceAll(",", ".") + 'đ</span>';
        }
        sp += '<div class="col-xl-4 fa-sanpham-item" id="AnHienSP' + (i + 1) + '">\n' +
            ' <div class="item-sanpham w-100">\n' +
            ' <div class="child-item-sanpham row g-0">\n' +
            ' <div class="btn-add-wishlist btn-sticky hover-scale-1 ' + yeuthich + '" id="tym' + data.sanpham[i].id + '" onclick="AddYeuThich(' + data.sanpham[i].id + ')">\n' +
            '<div class="box-cicrle" id="yt" style="z-index: 9999;">' +
            '<i class="fas fa-heart heart-full"></i><i class="far fa-heart heart-line" ></i>\n' +
            '</div></div>' + boxgiamgia + ' <div class="col-xl-12 fa-image-sanpham ">\n' +
            '<img src="' + document.location.hash + 'uploads/' + anhsp[0] + '" class="img-fluid" alt="...">\n' +
            '</div>\n' +
            '<div class="col-xl-12 fa-content-sanpham pl-0 position-relative"> <div class="card-body pl-0">\n' +
            '<div class="product-info">\n' +
            ' <a href="javascript:;">\n' +
            '<p class="product-catergory font-13 mb-1">' + data.sanpham[i].tendm + '</p>\n' +
            '</a>\n' +
            ' <a href="' + document.URL + '/chi-tiet/' + data.sanpham[i].slug + '">\n' +
            ' <h6 class="product-name mb-3" style="height: 35px;">' + data.sanpham[i].name.substring(0, 35) + '...</h6>\n' +
            '  </a>\n' +
            ' <p class="card-text product-motangan">' + data.sanpham[i].mota + '</p>\n' +
            '<div class="d-flex align-items-center fa-product-price" style="height: 40px;">\n' +
            '<div class="mb-2 product-price">\n' +
            ' <span class="text-decoration-line-through" >' + Number(data.sanpham[i].dongia).toLocaleString().replaceAll(",", ".") + '</span>đ / <span>' + thetich + '</span>ml  \n' +
            '' + showgiasaugiam + '</div>\n' +
            '</div>\n' +
            '<div class="mt-1 product-action">\n' +
            '<div class="d-flex gap-2">\n' +
            ' <button class="w-100 btn-sanpham btn-5 " style="margin-bottom: 5px!important;" onclick="ThemGioHang(' + data.sanpham[i].idspct + ')"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button></br>\n' +
            ' <a href="' + document.URL + '/chi-tiet/' + data.sanpham[i].slug + '"><button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button></a>\n' +
            '</div></div></div></div></div></div></div></div>';
    }
    document.getElementById("showSP").innerHTML = sp;
    ShowPhanTrang(sanphambandau);
}

// Hàm nhận id từ fun ShowSanPham để so sánh tiềm ra sản phẩm yêu thích
function SoSanhYeuThich(id) {
    var yeuthichs = '';
    if (YeuThichSPS.responseJSON.length != 0) {
        for (let i = 0; i < YeuThichSPS.responseJSON.length; i++) {
            if (Number(id) == Number(YeuThichSPS.responseJSON[i].idsanphamchitiet)) {
                yeuthichs = 'active';
            }
        }
    } else {
        yeuthichs = '';
    }
    return yeuthichs;
}

//Hàm tiếp nhận onchange từ select Sắp xếp
function SapXep() {
    let x = $("#sapxep").val();
    if (ArrayFlow.sanpham.length == 0) {
        ArrayFlow = Arrayphu.responseJSON;
        FilterSapXep(ArrayFlow, x);
    } else {
        FilterSapXep(ArrayFlow, x);
    }

}

//Hàm tiếp nhận onkeyup lọc sản phẩm theo giá
function Locgia(id) {
    if (ArrayFlow.sanpham.length == 0) {
        ArrayFlow = Arrayphu.responseJSON;
        FilterGia(ArrayFlow, id);
    } else {
        FilterGia(ArrayFlow, id);
    }
}

//Hàm tiếp nhận onkeyup lọc sản phẩm theo danh mục
function FilterDanhMuc(id) {
    if (ArrayDanhMuc.length > 0) {
        if (ArrayDanhMuc.includes(id) == false) {
            ArrayDanhMuc.push(id);
        } else {
            ArrayDanhMuc.splice(ArrayDanhMuc.indexOf(id), 1);
        }
        BeFore(Arrayphu.responseJSON, ArrayDanhMuc);
    } else {
        ArrayDanhMuc.push(id);
        BeFore(ArrayFlow, ArrayDanhMuc);
    }
    UnCheck();
}

//Hàm tiếp nhận onkeyup lọc sản phẩm theo tên
function SearchFilter() {
    var x = document.getElementById("seach").value;
    if (x != '') {
        if (ArrayFlow.sanpham.length == 0) {
            ArrayFlow = Arrayphu.responseJSON;
            FilterName(ArrayFlow, x);
        } else {
            FilterName(ArrayFlow, x);
        }
    } else {
        FilterName(ArrayFlow, x);
    }
}

//SelectAll id và tiến hành phân trang theo số lượng sản phẩm đã định nghĩa
function ShowPhanTrang(dem) {
    var soSp = document.querySelectorAll(".fa-sanpham-item");
    var xemsp = document.getElementById("xemthemsanpham");
    for (let i = dem; i <= soSp.length; i++) {
        document.getElementById('AnHienSP' + i).style.display = "none";
    }

    for (let j = 1; j <= dem; j++) {
        if (j <= soSp.length) {
            document.getElementById('AnHienSP' + j).style.display = "block";
        } else {
            xemsp.innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: black; color: #e87c7b;" ><< Không có sản phẩm nào >></button>'
        }
    }

    if (dem <= soSp.length) {
        if ((soSp.length - dem) != 0) {
            xemsp.innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: #e87c7b; " onclick="ShowPhanTrang(' + (dem + soluongshowtiep) + ')">Xem thêm (' + (soSp.length - dem) + ' sản phẩm )<i class="fa fa-angle-down"></i></button>'
        } else {
            xemsp.innerHTML = '<button class="border border-dark p-2" style="width: 30%;background-color: black; color: #e87c7b;" ><< Không có sản phẩm nào >></button>'
        }
    } else {
        xemsp.innerHTML = '<button class="border border-dark p-2" style="width: 30%;background-color: black; color: #e87c7b;" ><< Không có sản phẩm nào >></button>'
    }

}

function UnCheck() {
    $("#locgia0").prop("checked", true);
    $("#sapxep select").val("AZ");
    document.getElementById("seach").value = '';
}

GetYeuThichSP();
SanPham();
