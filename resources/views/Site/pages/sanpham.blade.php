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
                                            <span class="nav-link btn-3 custom-2 bg-gray-1 active change-column-control" type-column='single'><i class="fas fa-bars"></i></span>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <span class="nav-link btn-3 custom-2 bg-gray-1 change-column-control" type-column='multiple'><i class="fas fa-grip-horizontal"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-sanpham-2">
                        <div class="fa-list-sanpham">
                            <div class="row">
                                <div class="col-xl-12 fa-sanpham-item">
                                    <div class="item-sanpham w-100">
                                        <div class="child-item-sanpham row g-0">
                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                <div class="box-cicrle">
                                                    <i class="fas fa-heart heart-full"></i>
                                                    <i class="far fa-heart heart-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 fa-image-sanpham">
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-xl-9 fa-content-sanpham pl-0 position-relative">

                                                <div class="card-body pl-0">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center fa-product-price">
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

                                <div class="col-xl-12 fa-sanpham-item">
                                    <div class="item-sanpham w-100">
                                        <div class="child-item-sanpham row g-0">
                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                <div class="box-cicrle">
                                                    <i class="fas fa-heart heart-full"></i>
                                                    <i class="far fa-heart heart-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 fa-image-sanpham">
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-xl-9 fa-content-sanpham pl-0 position-relative">

                                                <div class="card-body pl-0">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center fa-product-price">
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

                                <div class="col-xl-12 fa-sanpham-item">
                                    <div class="item-sanpham w-100">
                                        <div class="child-item-sanpham row g-0">
                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                <div class="box-cicrle">
                                                    <i class="fas fa-heart heart-full"></i>
                                                    <i class="far fa-heart heart-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 fa-image-sanpham">
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-xl-9 fa-content-sanpham pl-0 position-relative">

                                                <div class="card-body pl-0">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center fa-product-price">
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

                                <div class="col-xl-12 fa-sanpham-item">
                                    <div class="item-sanpham w-100">
                                        <div class="child-item-sanpham row g-0">
                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                <div class="box-cicrle">
                                                    <i class="fas fa-heart heart-full"></i>
                                                    <i class="far fa-heart heart-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 fa-image-sanpham">
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-xl-9 fa-content-sanpham pl-0 position-relative">

                                                <div class="card-body pl-0">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center fa-product-price">
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

                                <div class="col-xl-12 fa-sanpham-item">
                                    <div class="item-sanpham w-100">
                                        <div class="child-item-sanpham row g-0">
                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                <div class="box-cicrle">
                                                    <i class="fas fa-heart heart-full"></i>
                                                    <i class="far fa-heart heart-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 fa-image-sanpham">
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-xl-9 fa-content-sanpham pl-0 position-relative">

                                                <div class="card-body pl-0">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center fa-product-price">
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

                                <div class="col-xl-12 fa-sanpham-item">
                                    <div class="item-sanpham w-100">
                                        <div class="child-item-sanpham row g-0">
                                            <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                                <div class="box-cicrle">
                                                    <i class="fas fa-heart heart-full"></i>
                                                    <i class="far fa-heart heart-line"></i>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 fa-image-sanpham">
                                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-xl-9 fa-content-sanpham pl-0 position-relative">

                                                <div class="card-body pl-0">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                                        </a>
                                                        <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <div class="d-flex align-items-center fa-product-price">
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
