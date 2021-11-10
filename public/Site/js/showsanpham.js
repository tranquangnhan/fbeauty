var sanphambandau = 9;
var soluongshowtiep = 3;
var ArrayDanhMuc = [];
let Arrayphu = [];
let ArrayFlow = [];

function SanPham(soluong) {
    var bienkhac = '';
    Arrayphu = $.ajax({
        url: document.URL + '/soluong/' + soluong,
        type: 'GET',
        async: false,
        dataType: 'json',
        data: {soluong: soluong},
        success: function (data) {
            BeFore(data, bienkhac)
        }
    });
}

function BeFore(data, bienkhac) {
    let mang = data.sanpham;
    var datas = [];
    let bien = '';
    if (Array.isArray(bienkhac) == true && bienkhac != '') {
        var mangdm = new Array();
        var locmang;
        for (let i = 0; i < bienkhac.length; i++) {
            locmang = mang.filter(function (e) {
                return e.iddanhmuc == bienkhac[i];
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
        FilterGia(ArrayFlow, bien)

    } else {
        console.log(bienkhac)
        ArrayFlow = data;
        FilterGia(ArrayFlow, bien)
    }
}

function TruyenObject(data) {
    delete ArrayFlow.sampham;
    return ArrayFlow = data;
}

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

function FilterGia(data, bienkhac) {
    let mang = data.sanpham;
    let datas = [];
    let bien = '';
    if (bienkhac == 'g0' || bienkhac == '') {
        FilterName(data, bien)
    } else if (bienkhac == 'g1') {
        datas = {
            sanpham: mang.filter(function (e) {
                return e.dongia <= 500000
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

function FilterName(data, bienkhac) {

    let mang = data.sanpham;
    let datas = [];
    let bien = '';
    if (bienkhac != "") {
        datas = {
            sanpham: mang.filter(function (e) {
                return e.name.toUpperCase().indexOf(bienkhac.toUpperCase()) > -1 || e.tendm.toUpperCase().indexOf(bienkhac.toUpperCase()) > -1;
            }),

        }
        ShowSanPham(datas)
    } else {
        ShowSanPham(data)
    }
}


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
        sp += '<div class="col-xl-4 fa-sanpham-item" id="AnHienSP' + (i + 1) + '">\n' +
            '                                    <div class="item-sanpham w-100">\n' +
            '                                        <div class="child-item-sanpham row g-0">\n' +
            '                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">\n' +
            '                                                <div class="box-cicrle" style="z-index: 9999;">\n' +
            '                                                    <i class="fas fa-heart heart-full"></i>\n' +
            '                                                    <i class="far fa-heart heart-line"></i>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                            <div class="col-xl-12 fa-image-sanpham ">\n' +
            '                                                <img src="'+document.URL.replace('san-pham', '')+'uploads/' + data.sanpham[i].img + '" class="img-fluid" alt="...">\n' +
            '                                            </div>\n' +
            '                                            <div class="col-xl-12 fa-content-sanpham pl-0 position-relative">\n' +
            '\n' +
            '                                                <div class="card-body pl-0">\n' +
            '                                                    <div class="product-info">\n' +
            '                                                        <a href="javascript:;">\n' +
            '                                                            <p class="product-catergory font-13 mb-1">' + data.sanpham[i].tendm + '</p>\n' +
            '                                                        </a>\n' +
            '                                                        <a href="javascript:;">\n' +
            '                                                            <h6 class="product-name mb-2">' + data.sanpham[i].name.substring(0, 35) + '...</h6>\n' +
            '                                                        </a>\n' +
            '                                                        <p class="card-text product-motangan">' + data.sanpham[i].mota + '</p>\n' +
            '                                                        <div class="d-flex align-items-center fa-product-price">\n' +
            '                                                            <div class="mb-1 product-price">\n' +
            '                                                                <span class="me-1 text-decoration-line-through">' + Number(data.sanpham[i].dongia).toLocaleString() + '</span>đ / <span>' + thetich + '</span>ml  \n' +
            '                                                            </div>\n' +
            '                                                        </div>\n' +
            '                                                        <div class="product-action mt-2">\n' +
            '                                                            <div class="d-flex gap-2">\n' +
            '                                                                <button class="btn-sanpham btn-5 mr-2"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>\n' +
            '                                                                <button class="btn-sanpham btn-5 m-0"><i class="fas fa-search"></i> Xem chi tiết</button>\n' +
            '\n' +
            '                                                            </div>\n' +
            '                                                        </div>\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>';
    }
    document.getElementById("showSP").innerHTML = sp;
    ShowPhanTrang(sanphambandau)
}

SanPham(sanphambandau)

function SapXep() {
    let x = $("#sapxep").val();
    if (ArrayFlow.sanpham.length == 0) {
        ArrayFlow = Arrayphu.responseJSON;
        FilterSapXep(ArrayFlow, x);
    } else {
        FilterSapXep(ArrayFlow, x);
    }

}

function Locgia(id) {
    if (ArrayFlow.sanpham.length == 0) {
        ArrayFlow = Arrayphu.responseJSON;
        FilterGia(ArrayFlow, id);
    } else {
        FilterGia(ArrayFlow, id);
    }
}

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
    $("#locgia0").prop("checked", true);
    $("#sapxep select").val("AZ");
    document.getElementById("seach").value = '';
}

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

function ShowPhanTrang(dem) {
    var soSp = document.querySelectorAll(".fa-sanpham-item");
    var xemsp = document.getElementById("xemthemsanpham");
    for (let j = 1; j <= dem; j++) {
        if (j <= soSp.length) {
            document.getElementById('AnHienSP' + (j)).style.display = "block";
        } else {
            xemsp.innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: black; color: #e87c7b;" ><< Hết sản phẩm >></button>'
        }
    }
    for (let i = dem; i < soSp.length; i++) {
        document.getElementById('AnHienSP' + i).style.display = "none";
    }
    if (dem <= soSp.length) {
        if ((soSp.length - dem) != 0) {
            xemsp.innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: #e87c7b; " onclick="ShowPhanTrang(' + (dem + soluongshowtiep) + ')">Xem thêm (' + (soSp.length - dem) + ' sản phẩm )<i class="fa fa-angle-down"></i></button>'
        } else {
            xemsp.innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: black; color: #e87c7b;" ><< Hết sản phẩm >></button>'
        }
    } else {
        xemsp.innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: black; color: #e87c7b;" ><< Hết sản phẩm >></button>'
    }

}

ShowPhanTrang(sanphambandau);
