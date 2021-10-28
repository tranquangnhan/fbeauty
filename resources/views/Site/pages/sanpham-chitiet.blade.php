@extends('site.layout')

@section('title')
    Sản Phẩm
@endsection

@section('main')
<div class="fa-sanphamchitiet mt-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="fa-slider-images">
                    <div class="box-giamgia-1">
                        10%
                    </div>
                    <div class="children-slider-images">
                        <div class="owl-carousel owl-theme" id="slide-images-sanpham-2">
                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                        </div>
                        <div class="owl-dots" id="custom-dots-1">

                            <div class="owl-dot dot-custom active">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="owl-dot dot-custom ">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="owl-dot dot-custom ">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="owl-dot dot-custom ">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="owl-dot dot-custom ">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="owl-dot dot-custom ">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>
                            <div class="owl-dot dot-custom ">
                                <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-fluid" alt="...">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="fa-mota mt-5">
                    <div class="title-cs-1">Mô Tả Sản Phẩm</div>
                    <hr>
                    <div class="noidung">

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="fa-info-sanpham">
                    <div class="product-info">
                        <a href="javascript:;">
                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                        </a>
                        <h6 class="product-name mb-2">Tinh chất cấp nước, phục hồi da The Ordinary Hyaluronic Acid 2% + B5</h6>
                        <p class="card-text product-motangan">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex align-items-center">
                            <div class="w-100 mb-1 product-price d-flex">
                                <span class="me-1 text-decoration-line-through giasanpham">300.999 đ </span>
                                <div class="d-flex mt-auto mb-auto">
                                    <div class="list-info-sanpham"><span class="dungtich-ml"> 30ml</span></div>
                                    <div class="list-info-sanpham"><span class="soluotmua">30</span> <small>Đã bán</small></div>
                                    <div class="list-info-sanpham"><span class="tonkho">223</span> <small>Sản phẩm có sẵn</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="dungtich mt-2">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <span class="text-bold">Dung tích </span>
                                </div>

                                <div class="col-10">
                                    <div class="basic-btn-gray btn-dungtich active" data-soluotmua="80" data-ml="30" data-kho="223" data-gia="300999">30ml</div>
                                    <div class="basic-btn-gray btn-dungtich" data-soluotmua="56" data-ml="60" data-kho="36" data-gia="400999">60ml</div>
                                    <div class="basic-btn-gray btn-dungtich" data-soluotmua="129" data-ml="90" data-kho="46" data-gia="500999">70ml</div>
                                </div>

                            </div>
                        </div>

                        <div class="soluong mt-3">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <span class="text-bold">Số lượng </span>
                                </div>
                                <div class="col-10">
                                    <div class="input-group inline-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary btn-minus btn-cal">
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input class="form-control text-center quantity" min="1" name="quantity" value="1" type="number">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-plus btn-cal">
                                            <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-start">
                                <button class="btn-5 ml-0 mr-2"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                <button class="btn-6 ml-0">Mua ngay</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="sanpham-lienquan mt-5">
            <div class="title-cs-1">
                Sản Phẩm Liên Quan
            </div>
            <hr>
            <div class="row">
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

        <div class="sanpham-lienquan my-5">
            <div class="title-cs-1">
                sản phẩm đã xem
            </div>
            <hr>
            <div class="row">
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

@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>
@endsection
