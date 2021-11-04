@extends('site.layout')

@section('title')
    Sản Phẩm
@endsection

@section('main')
<div class="fa-giohang mt-4 my-5">
    <div class="container">
        <div class="thongtinkhachhang shadow-1">
            <div class="title-9 mt-2 mb-2">
                Thông Tin Người Nhận
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label for="">Tên người nhận <span class="color-red">(*)</span></label>
                        <input type="Text" class="form-control form-custom" id="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <label for="">Số điện thoại <span class="color-red">(*)</span></label>
                        <input type="number" class="form-control form-custom" id="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Địa chỉ giao hàng <span class="color-red">(*)</span></label>
                        <input type="Text" class="form-control form-custom" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Lời nhắn: </label>
                        <textarea class="form-control form-custom" cols="10" rows="8" id="" placeholder="Lưu ý cho cửa hàng..."></textarea>
                        <small id="" class="form-text text-muted">.</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="giohang shadow-1 pb-2">
            <div class="giohang-header mb-0">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="header-title">
                            Sản phẩm
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="header-text">Giá sản phẩm</div>
                    </div>
                    <div class="col-xl-1">
                        <div class="header-text">Số lượng</div>
                    </div>
                    <div class="col-xl-2">
                        <div class="header-text text-right">Tổng tiền</div>
                    </div>
                </div>
            </div>

            <div class="giohang-body ">
                <div class="row align-items-center giohang-item">
                    <div class="col-xl-1">
                        <div class="body-text d-flex">
                            <img src="{{ asset('uploads/hyarunic-removebg-preview.png') }}" class="img-sanpham img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="body-text text-left">Tên sản phẩm</div>
                    </div>
                    <div class="col-xl-4">
                        <div class="body-text">
                            <div class="box-gia">
                                <span class="giagiam">500,999 đ </span>
                                <span class="gia left-bar">300,999 đ </span>
                                <span class="left-bar dungtich"> 30ml</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1">
                        <div class="body-text">
                            <span>1</span>
                        </div>
                    </div>
                    <div class="col-xl-2 text-right">
                        <div class="body-text">
                            <span class="tongtien">300,999 đ</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="phuongthuc shadow-1">
            <div class="row">
                <div class="col-xl-6 d-flex  justify-content-between">
                    <label for="" class="title-9">Phương thức giao hàng: </label>
                    <div class="ml-2">
                        <button class="btn-pttt" id-pttt="1" data-toggle="modal" data-target="#phuongthucthanhtoan">
                            Thanh toán khi nhận hàng
                        </button>
                    </div>
                </div>

                <div class="col-xl-6 d-flex  justify-content-between">
                    <label for="" class="title-9">Đơn vị vận chuyển: </label>
                    <div class="ml-2">
                        <button class="btn-ptgh" id-ptgh="1" data-toggle="modal" data-target="#phuongthucgiaohang">
                            Nhanh
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <div class="thanhtoan shadow-1">
            <div class="thongtintongtien mt-2">
                <div class="row flex-row-reverse">
                    <div class="col-4 text-right">
                        <div class="row m-0 justify-content-end">
                            <div class="col-10 p-0">
                                <div class="d-flex w-100 h-100 align-items-center">
                                    <input type="text" class="form-control form-custom ip-gray-1" placeholder="Mã giảm giá" style="box-shadow: none;padding: 1.3em 1.43m;">
                                    <button class="btn-9">Sử dụng</button>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-end mt-3">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-6 text-right">Tổng tiền hàng <br> <small>(1 sản phẩm)</small></div>
                                    <div class="col-6 text-right">300,888 đ</div>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-end mt-1">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-6 text-right">Tổng tiền sau giảm <br> <small>(0%)</small></div>
                                    <div class="col-6 text-right">300,888 đ</div>
                                </div>
                            </div>
                        </div>

                        <hr>


                        <div class="row justify-content-end">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-6 text-right">Tổng thanh toán</div>
                                    <div class="col-6 text-right">300,888 đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="giohang-footer mt-5">
                <div class="d-flex d-flex justify-content-between">
                    <a href="">
                        <button class="btn-6 ml-0">
                            Tiếp tục mua hàng
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
</div>
<div class="modal fade" id="phuongthucgiaohang" tabindex="-1" aria-labelledby="phuongthucgiaohangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-content-custom">
            <div class="custom-option active ptgh active" data-ptgh="1">
                Nhanh
            </div>

            <div class="custom-option ptgh" data-ptgh="2">
                Viettel Post
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="phuongthucthanhtoan" tabindex="-1" aria-labelledby="phuongthucthanhtoanLabel" aria-hidden="true">
    <div class="modal-dialog d-flex align-items-center">
        <div class="modal-content modal-content-custom">
            <div class="custom-option active pttt" data-pttt="1">
                Thanh toán khi nhận hàng
            </div>

            <div class="custom-option pttt" data-pttt="2">
                Thẻ tín dụng
            </div>
        </div>
    </div>
</div>


@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/thanhtoan.js"></script>
@endsection
