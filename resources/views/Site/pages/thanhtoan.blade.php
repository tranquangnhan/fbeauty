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

        <div class="collapse mb-4" id="collapseExample123">
            <div class="card card-body">
                <h3>THANH TOÁN QUA VNPAY</h3>
                <div class="form-group">
                    <label for="language">Loại thanh toán </label>
                    <select name="order_type" id="order_type" class="form-control">
                        <option value="billpayment" selected>Thanh toán hóa đơn</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input class="form-control" id="amount"
                           name="amount" type="number" disabled/>
                </div>
                <input class="form-control" id="txtexpire"
                       name="txtexpire" type="hidden" value="<?php echo $expire; ?>"/>
                <div class="form-group">
                    <label for="order_desc">Nội dung thanh toán</label>
                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2" placeholder="Noi dung thanh toan"></textarea>
                </div>
                <div class="form-group">
                    <label for="bank_code">Ngân hàng</label>
                    <select name="bank_code" id="bank_code" class="form-control">
{{--                        <option value="">Không chọn</option>--}}
                        <option value="NCB" selected> Ngân hàng NCB</option>
                        <option value="AGRIBANK"> Ngân hàng Agribank</option>
                        <option value="SCB"> Ngân hàng SCB</option>
                        <option value="SACOMBANK">Ngân hàng SacomBank</option>
                        <option value="EXIMBANK"> Ngân hàng EximBank</option>
                        <option value="MSBANK"> Ngân hàng MSBANK</option>
                        <option value="NAMABANK"> Ngân hàng NamABank</option>
                        <option value="VNMART"> Ngân hàng VnMart</option>
                        <option value="VIETINBANK">Ngân hàng Vietinbank</option>
                        <option value="VIETCOMBANK"> Ngân hàng VCB</option>
                        <option value="HDBANK">Ngân hàng</option>
                        <option value="DONGABANK"> Ngân hàng Dong A</option>
                        <option value="TPBANK"> Ngân hàng TPBank</option>
                        <option value="OJB"> Ngân hàng OceanBank</option>
                        <option value="BIDV"> Ngân hàng BIDV</option>
                        <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                        <option value="VPBANK"> Ngân hàng VPBank</option>
                        <option value="MBBANK"> Ngân hàng MBBank</option>
                        <option value="ACB"> Ngân hàng ACB</option>
                        <option value="OCB"> Ngân hàng OCB</option>
                        <option value="IVB"> Ngân hàng IVB</option>
                        <option value="VISA"> Thanh toán qua VISA/MASTER</option>
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

        <div class="thanhtoan shadow-1">
            <div class="thongtintongtien mt-2">
                <div class="row flex-row-reverse">
                    <div class="col-4 text-right">
                        <div class="row m-0 justify-content-end">
                            <div class="col-12 p-0">
                                <div class="d-flex w-100 h-100 align-items-center">
                                    <input type="text" id="magiamgia" class="form-control form-custom ip-gray-1 text-dark" placeholder="Mã giảm giá" style="box-shadow: none;padding: 1.3em 1.43m;">
                                    <input type="hidden" id="idgiam" value="">
                                    <button class="btn-9" onclick="ApplyGiamGia()">Sử dụng</button>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-end mt-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-right" >Tổng tiền hàng </div>
                                    <div class="col-6 text-right"><span id="tongtienhang">0</span><span>đ</span></div>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-end mt-1">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-right">Số tiền giảm <br> <small>(0%)</small></div>
                                    <div class="col-6 text-right"><span id="tongtiensaugiam">0</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-end mt-1">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 text-right">Phí giao hàng </div>
                                    <div class="col-6 text-right"><span id="tienship">30,000</span>đ</div>
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
                            <span>Thanh toán </span>
                        </button>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>
<input type="hidden" id="valgiaohang" value="0">
<div class="modal fade" id="phuongthucgiaohang" tabindex="-1" aria-labelledby="phuongthucgiaohangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-content-custom">
            <div class="custom-option active ptgh active" data-ptgh="1" onclick="phuongthucgiaohang(0)">
                Giao hàng nhanh
            </div>
            <div class="custom-option ptgh" data-ptgh="2">
                Viettel Post
            </div>

            <div class="custom-option ptgh" data-ptgh="3">
                GRAP
            </div>

            <div class="custom-option ptgh" data-ptgh="4">
                Giao hàng tiết kiệm
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="valthanhtoan" value="0">
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
               $('#amount').val(tongthanhtoan);
            }
            else {
                $('#collapseExample123').removeClass('show');
            }
        }

        function ApplyGiamGia() {
            var magiamgia=$("#magiamgia").val();
            var tongthanhtoan= document.getElementById('tongthanhtoan').innerText.split(',').join('');
            if(magiamgia!=""){
                $.ajax({
                    url: domain + '/CheckGiamGia/' + magiamgia +'/tongthangtoan/'+tongthanhtoan,
                    type: 'GET',
                    async: false,
                    dataType: 'json',
                    data: {},
                    success: function (data) {
                        if (data==0){
                            iziToast.warning({
                                title: 'Mã giảm giá không hợp lệ!!!',
                                message: '',
                                position: 'bottomRight',
                                backgroundColor: 'oranged',
                                titleColor: 'black',
                                messageColor: 'black',
                                iconColor: 'black',
                            });
                        }
                        else {
                            //loại 1 là %
                            //loại 2 là tiền
                            iziToast.success({
                                title: 'Áp dụng thành công !!!',
                                message: '',
                                position: 'bottomRight',
                                backgroundColor: 'green',
                                titleColor: 'white',
                                messageColor: 'white',
                                iconColor: 'white',
                            });
                            if (data[0].loai == 1){
                                var tiensaugiam = (Number(tongthanhtoan) - ((Number(tongthanhtoan)*Number(data[0].number))/100));
                                $('#amount').val(tiensaugiam);
                                $('#tongtiensaugiam').html(Number(data[0].number).toLocaleString()+'% <span class="btn btn-dark" onclick="HuyGiamGia()">Hủy</span>');
                                $('#tongthanhtoan').html(tiensaugiam.toLocaleString());
                            }
                            else {
                                var tiensaugiam = Number(tongthanhtoan) - Number(data[0].number)
                                $('#amount').val(tiensaugiam);
                                $('#tongtiensaugiam').html(Number(data[0].number).toLocaleString()+'đ <span class="btn btn-dark" onclick="HuyGiamGia()">Hủy</span>');
                                $('#tongthanhtoan').html(tiensaugiam.toLocaleString());
                            }
                            $("#idgiam").val(data[0].id)
                        }
                    }
                });
            }
        }

        function HuyGiamGia() {
            $('#tongtiensaugiam').html(0);
            $("#idgiam").val("");
            $("#magiamgia").val("");
            showGioHang();
        }
    </script>
@endsection
