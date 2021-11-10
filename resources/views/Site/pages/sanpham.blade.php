@extends('site.layout')

@section('title')
    Sản Phẩm
@endsection

@section('main')

    <div class="fa-sanpham mt-4">
        <div class="container p-4">
            <div class="row">
                <div class="col-xl-3">
                    <div class="fa-left w-100">
                        <div class="fa-box-search">
                            <form action="">
                                <input type="text" id="seach" value="" class="input-search-2" onkeyup="SearchFilter()" placeholder="Tìm kiếm ..." name="" >
                                <button type="submit" class="button-submit-search-2"><i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <hr>
                        <div class="fa-bo-loc-doc mt-2">
                            <div class="loc-item">
                                <h6 class="title-loc">Danh mục</h6>
                                <ul class="body-loc">
                                    @foreach($danhmuc as $dm)
                                        <?php  $soluong = \Illuminate\Support\Facades\DB::table('sanpham')->where('iddanhmuc', $dm->id)->where('trangthai', 0)->count('iddanhmuc');?>
                                        @if($soluong >=1)
                                            <li>
                                                <a href="javascript:;" class="text-decoration-none hover-pink hov">
                                                    <label for="danhmuc{{$dm->id}}">
                                                        <input type="checkbox" onclick="FilterDanhMuc({{$dm->id}})"
                                                               name="danhmuc" id="danhmuc{{$dm->id}}"> {{$dm->name}}
                                                    </label><span
                                                        class="badge badge-pill badge-primary background-color-main float-right">{{$soluong}}</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <hr>
                            <div class="loc-item">
                                <h6 class="title-loc">Mức giá</h6>
                                <div class="price-range">

                                </div>


                                <div class="range-gia mt-3 text-left">
                                    <p><label for="locgia0" class="hover-pink">
                                            <input type="radio" name="locgia" id="locgia0" onclick="Locgia('g0')"> Không lọc
                                        </label></p>
                                    <p><label for="locgia" class="hover-pink">
                                            <input type="radio" name="locgia" id="locgia" onclick="Locgia('')"> Giá:
                                            <span class="min-price" price-value="100000"> < 500,000 đ</span>
                                        </label></p>
                                    <p><label for="locgia1" class="hover-pink">
                                            <input type="radio" name="locgia" id="locgia1" onclick="Locgia('g2')"> Giá:
                                            <span class="min-price" price-value="100000">500,000 đ</span>
                                            -
                                            <span class="max-price" price-value="10000000">1,000,000 đ</span>
                                        </label>
                                    </p>
                                    <p><label for="locgia2" class="hover-pink">
                                            <input type="radio" name="locgia" id="locgia2" onclick="Locgia('g3')"> Giá:
                                            <span class="min-price" price-value="100000">1,000,000 đ</span>
                                            -
                                            <span class="max-price" price-value="10000000">5,000,000 đ</span>
                                        </label>
                                    </p>
                                    <p><label for="locgia3" class="hover-pink">
                                            <input type="radio" name="locgia" id="locgia3" onclick="Locgia('g4')"> Giá:
                                            <span class="min-price" price-value="100000"> > 5,000,000 đ</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="loc-item">
                                <h6 class="title-loc">Thương hiệu</h6>
                                <ul class="body-loc">
                                    <li>
                                        <a href="">Some by mi
                                            <span
                                                class="badge badge-pill badge-primary background-color-main float-right">102</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">Simple
                                            <span
                                                class="badge badge-pill badge-primary background-color-main float-right">42</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">Body
                                            <span
                                                class="badge badge-pill badge-primary background-color-main float-right">10</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="fa-list-sanpham">
                        <div class="head-list">
                            <div class="row align-items-center">
                                <div class="col-xl-5">
                                    <div class="d-flex">
                                        <div class="text-small d-flex align-items-center">
                                            Sắp xếp theo:
                                        </div>
                                        <div class="select">
                                            <select id="sapxep" onchange="SapXep()" class="custom-select"
                                                    style="border-radius: 0px;margin-left: 6%;">
                                                <option value="AZ" selected>Tên sản phẩm từ A->Z</option>
                                                <option value="ZA">Tên sản phẩm từ Z->A</option>
                                                <option value="thapcao">Giá thấp đến cao</option>
                                                <option value="caothap">Giá cao đến thấp</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-7 align-items-center">
                                    <div class="d-flex justify-content-end">
                                        <div class="text-small d-flex align-items-center">
                                            Tìm kiếm "Sửa rửa mặt" có 25 kết quả
                                        </div>
                                        <ul class="fa-checkbox-loc nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item px-0" role="presentation">
                                                <span
                                                    class="nav-link btn-3 custom-2 bg-gray-1 active change-column-control"
                                                    type-column='single'><i class="fas fa-grip-horizontal"></i></span>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <span class="nav-link btn-3 custom-2 bg-gray-1 change-column-control"
                                                      type-column='multiple'><i class="fas fa-bars"></i></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-sanpham-2">
                            <div class="fa-list-sanpham">
                                <div class="row" id="showSP">


                                </div>
                                <div class="justify-content-center text-center mt-2" id="xemthemsanpham">

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
            let slsp=data.sl;
            let mang=data.sanpham;
            var datas=[];
            let bien='';
            if(Array.isArray(bienkhac)==true && bienkhac!=''){
                var mangdm= new Array();
                var locmang;
                for (let i = 0; i < bienkhac.length; i++) {
                    locmang = mang.filter(function(e) {
                        return  e.iddanhmuc == bienkhac[i];
                    })
                    mangdm.push(locmang);
                }
                if (mangdm.length>1){
                    for (let n=1; n<mangdm.length; n++) {
                        for (let j = 0; j < mangdm[n].length; j++) {
                            mangdm[0] = mangdm[0].concat(mangdm[n][j])
                        }
                    }
                }

                datas={
                    sanpham:mangdm[0],
                    sl: slsp
                }
                FilterGia(datas, bien)
            }
            else {
                ArrayFlow=data;
                FilterGia(ArrayFlow, bien)
            }
        }

        function FilterSapXep(data, bienkhac) {
            let slsp = data.sl;
            let mang = data.sanpham;
            let datas = [];
            let bien='';
            if (bienkhac == 'AZ') {
                datas = {
                    sanpham: mang.sort((a, b) => (a.name > b.name) ? 1 : -1),
                    sl: slsp
                }
                FilterGia(datas, bien)
            }
            else if (bienkhac == '') {
                datas = {
                    sanpham: mang.sort((a, b) => (a.name > b.name) ? 1 : -1),
                    sl: slsp
                }
                FilterGia(datas, bien)
            }
            else if (bienkhac == 'ZA') {
                datas = {
                    sanpham: mang.sort((a, b) => (a.name < b.name) ? 1 : -1),
                    sl: slsp
                }
                FilterGia(datas, bien)
            }
            else if (bienkhac == 'caothap') {
                datas = {
                    sanpham: mang.sort((a, b) => (a.dongia < b.dongia) ? 1 : -1),
                    sl: slsp
                }
                FilterGia(datas, bien)
            }
            else if (bienkhac == 'thapcao') {
                datas = {
                    sanpham: mang.sort((a, b) => (a.dongia > b.dongia) ? 1 : -1),
                    sl: slsp
                }
                FilterGia(datas, bien)
            }
            else if (bienkhac == '') {
                    FilterGia(data, bien)
            }

        }

        function FilterGia(data, bienkhac) {
            let slsp = data.sl;
            let mang = data.sanpham;
            let datas = [];
            let bien='';
            if (bienkhac == 'g0' || bienkhac == '') {
                    FilterName(data, bien)
            } else if (bienkhac == 'g1') {
                datas = {
                    sanpham: mang.filter(function (e) {
                        return e.dongia <= 500000
                    }),
                    sl: slsp
                }
                FilterName(datas, bien)
            } else if (bienkhac == 'g2') {
                datas = {
                    sanpham: mang.filter(function (e) {
                        return e.dongia >= 500000 && e.dongia <= 1000000;
                    }),
                    sl: slsp
                }
                FilterName(datas, bien)
            } else if (bienkhac == 'g3') {
                datas = {
                    sanpham: mang.filter(function (e) {
                        return e.dongia >= 1000000 && e.dongia <= 50000000;
                    }),
                    sl: slsp
                }
                FilterName(datas, bien)
            } else if (bienkhac == 'g4') {
                datas = {
                    sanpham: mang.filter(function (e) {
                        return e.dongia >= 5000000;
                    }),
                    sl: slsp
                }
                FilterName(datas, bien)
            }
        }
        function FilterName(data, bienkhac) {
            let slsp = data.sl;
            let mang = data.sanpham;
            let datas = [];
            let bien='';
            if (bienkhac!=""){
                    datas = {
                        sanpham: mang.filter(function (e) {
                            return e.name.toUpperCase().indexOf(bienkhac.toUpperCase()) > -1 || e.tendm.toUpperCase().indexOf(bienkhac.toUpperCase()) > -1;
                        }),
                        sl: slsp
                    }
                    ShowSanPham(datas)
            }else{
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
                sp += '<div class="col-xl-4 fa-sanpham-item" id="AnHienSP' + (i+1) + '">\n' +
                    '                                    <div class="item-sanpham w-100">\n' +
                    '                                        <div class="child-item-sanpham row g-0">\n' +
                    '                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">\n' +
                    '                                                <div class="box-cicrle" style="z-index: 9999;">\n' +
                    '                                                    <i class="fas fa-heart heart-full"></i>\n' +
                    '                                                    <i class="far fa-heart heart-line"></i>\n' +
                    '                                                </div>\n' +
                    '                                            </div>\n' +
                    '                                            <div class="col-xl-12 fa-image-sanpham ">\n' +
                    '                                                <img src="{{ asset("uploads") }}/' + data.sanpham[i].img + '" class="img-fluid" alt="...">\n' +
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
                BeFore(ArrayFlow, ArrayDanhMuc);
            } else {
                ArrayDanhMuc.push(id);
                BeFore(ArrayFlow, ArrayDanhMuc);
            }
            $("#locgia0").prop( "checked", true );
            $("#sapxep select").val("AZ");
            document.getElementById("seach").value='';
        }

        function SearchFilter() {
            var x = document.getElementById("seach").value;
            if (x!=''){
                if (ArrayFlow.sanpham.length == 0) {
                    ArrayFlow = Arrayphu.responseJSON;
                    FilterName(ArrayFlow, x);
                } else {
                    FilterName(ArrayFlow, x);
                }
            }else {
                FilterName(ArrayFlow, x);
            }
        }

        function ShowPhanTrang(dem) {
            var soSp = document.querySelectorAll(".fa-sanpham-item");
            console.log(dem);
                for (let j=1; j<=dem; j++){
                    if (j<=soSp.length){
                        document.getElementById('AnHienSP'+(j)).style.display = "block";
                    }
                    else {
                        document.getElementById("xemthemsanpham").innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: black; color: #e87c7b;" ><< Hết sản phẩm >></button>'
                    }
                }
                for (let i=dem; i<soSp.length; i++){
                        document.getElementById('AnHienSP'+i).style.display = "none";
                }
                if (dem <=soSp.length) {
                    document.getElementById("xemthemsanpham").innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: #e87c7b; " onclick="ShowPhanTrang(' + (dem + soluongshowtiep) + ')">Xem thêm (' + (soSp.length - dem) + ' sản phẩm )<i class="fa fa-angle-down"></i></button>'
                }else {
                    document.getElementById("xemthemsanpham").innerHTML = '<button class="w-25 border border-dark p-2" style="background-color: black; color: #e87c7b;" ><< Hết sản phẩm >></button>'
                }

        }
        ShowPhanTrang(sanphambandau);

    </script>
@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>

@endsection
