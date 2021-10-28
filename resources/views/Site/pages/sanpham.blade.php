@extends('site.layout')

@section('title')
    Sản Phẩm
@endsection

@section('main')
<div class="fa-sanpham mt-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="fa-left w-100">
                    <div class="fa-box-search">
                        <form action="">
                            <input type="text" class="input-search-2" placeholder="Tìm kiếm ..." name="" id="">
                            <button type="submit" class="button-submit-search-2"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <hr>
                    <div class="fa-bo-loc-doc mt-2">
                        <div class="loc-item">
                            <h6 class="title-loc">Danh mục</h6>
                            <ul class="body-loc">
                                <li>
                                    <a href="">Da mặt
                                        <span class="badge badge-pill badge-primary background-color-main float-right">102</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="">Trị thâm
                                        <span class="badge badge-pill badge-primary background-color-main float-right">13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">Body
                                        <span class="badge badge-pill badge-primary background-color-main float-right">36</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="loc-item">
                            <h6 class="title-loc">Mức giá</h6>
                            <div class="price-range">

                            </div>


                            <div class="range-gia mt-3 text-left">
                                Giá: <span class="min-price" price-value="100000">100,000 đ</span>
                                -
                                <span class="max-price" price-value="10000000">10,000,000 đ</span>
                            </div>
                        </div>
                        <hr>
                        <div class="loc-item">
                            <h6 class="title-loc">Thương hiệu</h6>
                            <ul class="body-loc">
                                <li>
                                    <a href="">Some by mi
                                        <span class="badge badge-pill badge-primary background-color-main float-right">102</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">Simple
                                        <span class="badge badge-pill badge-primary background-color-main float-right">42</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">Body
                                        <span class="badge badge-pill badge-primary background-color-main float-right">10</span>
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
                                        <select class="custom-select" style="border-radius: 0px;margin-left: 6%;">
                                            <option selected>Sản phẩm mới nhất</option>
                                            <option value="1">Sản phẩm bán chạy</option>
                                            <option value="2">Giá thấp đến cao</option>
                                            <option value="2">Giá cao đến thấp</option>

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
                                            <a class="nav-link btn-3 custom-2 bg-gray-1 active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"> <i class="fas fa-bars"></i></a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn-3 custom-2 bg-gray-1" id="navbarsanpham-tab" data-toggle="tab" href="#navbarsanpham" role="tab" aria-controls="navbar" aria-selected="false"><i class="fas fa-grip-horizontal"></i></a>
                                        </li>
                                    </ul>
                                    {{-- <div class=" d-flex">
                                        <div class="checkbox-loc-item active">

                                        </div>

                                        <div class="checkbox-loc-item">

                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-sanpham-2">
                        <div class="list-tabs">
                            <div class="tab-content" id="tabsanpham">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                    <div class="fa-list-sanpham">
                                        <div class="item-sanpham">
                                            <div class="child-item-sanpham row g-0">
                                                <div class="col-xl-3">
                                                    <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-xl-9 pl-0 position-relative">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-body pl-0">
                                                        <div class="product-info">
                                                            <a href="javascript:;">
                                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                            </a>
                                                            <a href="javascript:;">
                                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                                            </a>
                                                            <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="mb-1 product-price">
                                                                    <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-action mt-2">
                                                                <div class="d-flex gap-2">
                                                                    {{-- <button class="btn-3 active btn-light mr-2"><i class="fas fa-heart"></i> Yêu thích</button> --}}
                                                                    <button class="btn-sanpham btn-5 mr-2"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                    <button class="btn-sanpham btn-5 m-0"><i class="fas fa-search"></i> Xem chi tiết</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-sanpham">
                                            <div class="child-item-sanpham row g-0">
                                                <div class="col-xl-3">
                                                    <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-xl-9 pl-0 position-relative">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>

                                                    </div>
                                                    <div class="card-body pl-0">
                                                        <div class="product-info">
                                                            <a href="javascript:;">
                                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                            </a>
                                                            <a href="javascript:;">
                                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                                            </a>
                                                            <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="mb-1 product-price">
                                                                    <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-action mt-2">
                                                                <div class="d-flex gap-2">
                                                                    {{-- <button class="btn-3 active btn-light mr-2"><i class="fas fa-heart"></i> Yêu thích</button> --}}
                                                                    <button class="btn-sanpham btn-5 mr-2"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                    <button class="btn-sanpham btn-5 m-0"><i class="fas fa-search"></i> Xem chi tiết</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-sanpham">
                                            <div class="child-item-sanpham row g-0">
                                                <div class="col-xl-3">
                                                    <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                                </div>
                                                <div class="col-xl-9 pl-0 position-relative">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>

                                                    </div>
                                                    <div class="card-body pl-0">
                                                        <div class="product-info">
                                                            <a href="javascript:;">
                                                                <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                            </a>
                                                            <a href="javascript:;">
                                                                <h6 class="product-name mb-2">Product Short Name</h6>
                                                            </a>
                                                            <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                            <div class="d-flex align-items-center">
                                                                <div class="mb-1 product-price">
                                                                    <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-action mt-2">
                                                                <div class="d-flex gap-2">
                                                                    {{-- <button class="btn-3 active btn-light mr-2"><i class="fas fa-heart"></i> Yêu thích</button> --}}
                                                                    <button class="btn-sanpham btn-5 mr-2"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                    <button class="btn-sanpham btn-5 m-0"><i class="fas fa-search"></i> Xem chi tiết</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="navbarsanpham" role="tabpanel" aria-labelledby="navbarsanpham-tab">
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                        <div class="col">
                                            <div class="card rounded-0 product-card child-item-sanpham zbar">
                                                <div class="card-header bg-transparent border-bottom-0">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="card-img-top img-sanpham-zbar" alt="...">
                                                <div class="card-body text-center">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>

                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-grid gap-2">
                                                                <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card rounded-0 product-card child-item-sanpham zbar">
                                                <div class="card-header bg-transparent border-bottom-0">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="card-img-top img-sanpham-zbar" alt="...">
                                                <div class="card-body text-center">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>

                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-grid gap-2">
                                                                <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card rounded-0 product-card child-item-sanpham zbar">
                                                <div class="card-header bg-transparent border-bottom-0">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="card-img-top img-sanpham-zbar" alt="...">
                                                <div class="card-body text-center">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>

                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-grid gap-2">
                                                                <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card rounded-0 product-card child-item-sanpham zbar">
                                                <div class="card-header bg-transparent border-bottom-0">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="card-img-top img-sanpham-zbar" alt="...">
                                                <div class="card-body text-center">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>

                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-grid gap-2">
                                                                <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card rounded-0 product-card child-item-sanpham zbar">
                                                <div class="card-header bg-transparent border-bottom-0">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="card-img-top img-sanpham-zbar" alt="...">
                                                <div class="card-body text-center">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>

                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-grid gap-2">
                                                                <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card rounded-0 product-card child-item-sanpham zbar">
                                                <div class="card-header bg-transparent border-bottom-0">
                                                    <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                        <div class="box-cicrle">
                                                            <i class="fas fa-heart heart-full"></i>
                                                            <i class="far fa-heart heart-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="card-img-top img-sanpham-zbar" alt="...">
                                                <div class="card-body text-center">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="me-1 text-decoration-line-through">300.999 đ</span> / <span>30ml</span>

                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-grid gap-2">
                                                                <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                                <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>
@endsection
