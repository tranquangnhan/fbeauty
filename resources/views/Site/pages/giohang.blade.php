@extends('site.layout')

@section('title')
    Sản Phẩm
@endsection

@section('main')
<div class="fa-giohang mt-4 my-5">
    <div class="container">
        <div class="giohang-header shadow-2">
            <div class="row ">
                <div class="col-xl-2 d-flex">
                    <div class="custom-select-all mr-2">
                        <input type="checkbox" class="select-all-product" name="" id="">
                    </div>
                    <div class="header-text text-center w-100">Ảnh</div>
                </div>
                <div class="col-xl-3">
                    <div class="header-text text-left">Tên sản phẩm</div>
                </div>
                <div class="col-xl-3">
                    <div class="header-text">Giá / Tồn kho</div>
                </div>
                <div class="col-xl-2">
                    <div class="header-text">Số lượng</div>
                </div>
                <div class="col-xl-1">
                    <div class="header-text">Tổng tiền</div>
                </div>
                <div class="col-xl-1"></div>
            </div>
        </div>

        <div class="giohang-body ">
            <div class="row shadow-2  align-items-center giohang-item">
                <div class="col-xl-2 d-flex  align-items-center">
                    <div class="custom-select-all mr-2">
                        <input type="checkbox" class="select-all-product" name="" id="">
                    </div>
                    <div class="body-text d-flex">
                        <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-sanpham img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="body-text text-left">Tên sản phẩm</div>
                </div>
                <div class="col-xl-3">
                    <div class="body-text">
                        <div class="box-gia">
                            <span class="giagiam">500,999 đ </span>
                            <span class="gia left-bar">300,999 đ </span>
                            <span class="left-bar dungtich"> 30ml</span>
                        </div>

                        <div class="tonkho mt-2">
                            <span class="tonkho">Tồn kho: </span><span class="tonkho"> 305</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="body-text">
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
                <div class="col-xl-1">
                    <div class="body-text">
                        <span class="tongtien">300,999 đ</span>
                    </div>
                </div>
                <div class="col-xl-1 text-center">Xóa</div>
            </div>

            <div class="row shadow-2  align-items-center giohang-item">
                <div class="col-xl-2 d-flex  align-items-center">
                    <div class="custom-select-all mr-2">
                        <input type="checkbox" class="select-all-product" name="" id="">
                    </div>
                    <div class="body-text d-flex">
                        <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-sanpham img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="body-text text-left">Tên sản phẩm</div>
                </div>
                <div class="col-xl-3">
                    <div class="body-text">
                        <div class="box-gia">
                            <span class="giagiam">500,999 đ </span>
                            <span class="gia left-bar">300,999 đ </span>
                            <span class="left-bar dungtich"> 30ml</span>
                        </div>

                        <div class="tonkho mt-2">
                            <span class="tonkho">Tồn kho: </span><span class="tonkho"> 305</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="body-text">
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
                <div class="col-xl-1">
                    <div class="body-text">
                        <span class="tongtien">300,999 đ</span>
                    </div>
                </div>
                <div class="col-xl-1 text-center">Xóa</div>
            </div>

            <div class="row shadow-2  align-items-center giohang-item">
                <div class="col-xl-2 d-flex  align-items-center">
                    <div class="custom-select-all mr-2">
                        <input type="checkbox" class="select-all-product" name="" id="">
                    </div>
                    <div class="body-text d-flex">
                        <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-sanpham img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="body-text text-left">Tên sản phẩm</div>
                </div>
                <div class="col-xl-3">
                    <div class="body-text">
                        <div class="box-gia">
                            <span class="giagiam">500,999 đ </span>
                            <span class="gia left-bar">300,999 đ </span>
                            <span class="left-bar dungtich"> 30ml</span>
                        </div>

                        <div class="tonkho mt-2">
                            <span class="tonkho">Tồn kho: </span><span class="tonkho"> 305</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="body-text">
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
                <div class="col-xl-1">
                    <div class="body-text">
                        <span class="tongtien">300,999 đ</span>
                    </div>
                </div>
                <div class="col-xl-1 text-center">Xóa</div>
            </div>
        </div>

        <div class="giohang-footer mb-5">
            <div class="d-flex d-flex justify-content-between">
                <a href="">
                    <button class="btn-6 ml-0">
                        Tiếp tục mua hàng
                    </button>
                </a>
                <a href="">
                    <button class="btn-7 ml-0">
                        Xóa tất cả
                    </button>
                </a>

                <a href="">
                    <button class="btn-8">
                        <span>Thanh toán</span>
                    </button>
                </a>

            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>
@endsection
