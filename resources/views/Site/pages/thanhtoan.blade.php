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

            <div class="giohang-body" id="payproduct">

            </div>

        </div>

        <div class="thanhtoan shadow-1">
            <div class="thongtintongtien mt-2">
                <div class="row flex-row-reverse">
                    <div class="col-4 text-right">
                        <div class="row m-0 justify-content-end">
                            <div class="col-12 p-0">
                                <div class="d-flex w-100 h-100 align-items-center">
                                    <input type="text" class="form-control form-custom ip-gray-1" placeholder="Mã giảm giá" style="box-shadow: none;padding: 1.3em 1.43m;">
                                    <button class="btn-9">Sử dụng</button>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-end mt-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-right" >Tổng tiền hàng <br> <small>(1 sản phẩm)</small></div>
                                    <div class="col-6 text-right"><span id="tongtienhang">0</span><span>đ</span></div>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-end mt-1">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-right">Tổng tiền sau giảm <br> <small>(0%)</small></div>
                                    <div class="col-6 text-right"><span id="">0</span><span>đ</span></div>
                                </div>
                            </div>
                        </div>

                        <hr>


                        <div class="row justify-content-end">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-6 text-right">Tổng thanh toán</div>
                                    <div class="col-6 text-right" ><span id="tongthanhtoan">0</span><span>đ</span></div>
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
        <div class="collapse mb-4" id="collapseExample123">
            <div class="card card-body">
                <div class="form-group">
                    <label for="language">Loại thanh toán </label>
                    <select name="order_type" id="order_type" class="form-control">
                        <option value="billpayment">Thanh toán hóa đơn</option>
                    </select>
                </div>
                {{--                <div class="form-group">--}}
                {{--                    <label for="order_id">Mã hóa đơn</label>--}}
                {{--                    <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>--}}
                {{--                </div>--}}
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input class="form-control" id="amount"
                           name="amount" type="number"/>
                </div>
                <div class="form-group">
                    <label for="order_desc">Nội dung thanh toán</label>
                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                </div>
                <div class="form-group">
                    <label for="bank_code">Ngân hàng</label>
                    <select name="bank_code" id="bank_code" class="form-control">
                        <option value="">Không chọn</option>
                        <option value="NCB"> Ngan hang NCB</option>
                        <option value="AGRIBANK"> Ngan hang Agribank</option>
                        <option value="SCB"> Ngan hang SCB</option>
                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                        <option value="EXIMBANK"> Ngan hang EximBank</option>
                        <option value="MSBANK"> Ngan hang MSBANK</option>
                        <option value="NAMABANK"> Ngan hang NamABank</option>
                        <option value="VNMART"> Vi dien tu VnMart</option>
                        <option value="VIETINBANK">Ngan hang Vietinbank</option>
                        <option value="VIETCOMBANK"> Ngan hang VCB</option>
                        <option value="HDBANK">Ngan hang HDBank</option>
                        <option value="DONGABANK"> Ngan hang Dong A</option>
                        <option value="TPBANK"> Ngân hàng TPBank</option>
                        <option value="OJB"> Ngân hàng OceanBank</option>
                        <option value="BIDV"> Ngân hàng BIDV</option>
                        <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                        <option value="VPBANK"> Ngan hang VPBank</option>
                        <option value="MBBANK"> Ngan hang MBBank</option>
                        <option value="ACB"> Ngan hang ACB</option>
                        <option value="OCB"> Ngan hang OCB</option>
                        <option value="IVB"> Ngan hang IVB</option>
                        <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="language">Ngôn ngữ</label>
                    <select name="language" id="language" class="form-control">
                        <option value="vn">Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
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
            <div class="custom-option active pttt" data-pttt="1" onclick="thanhtoanVNPAY(null)">
                Thanh toán khi nhận hàng
            </div>
            <div class="custom-option pttt" onclick="thanhtoanVNPAY('vnpay')" data-pttt="2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample123" aria-expanded="false" aria-controls="collapseExample123">
                VNPAY
            </div>
        </div>
    </div>
</div>




@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/thanhtoan.js"></script>
    <script>
        function thanhtoanVNPAY(bien) {
            if(bien =='vnpay'){
                $('#collapseExample123').addClass('show');
               var tongthanhtoan= document.getElementById('tongthanhtoan').innerText.split(',').join('');
               $('#amount').val(tongthanhtoan)
            }
            else {
                $('#collapseExample123').removeClass('show');
            }
        }
    </script>
@endsection
