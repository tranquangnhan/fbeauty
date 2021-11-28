@extends('Site.layout')

@section('title')
    Thông tin tài khoản
@endsection

@section('main')

<div class="fa-profile-user">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="profile-user box-shadow-1">
                    <div class="row w-100 m-0">
                        <div class="col-xl-2">
                            <div class="list-control">
                                <div class="header">
                                    <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                    <div>
                                        <h5 class="sdt">+84965286066</h5>
                                        <button><i class="far fa-edit"></i> Sửa hồ sơ</button>
                                    </div>
                                </div>
                                <div class="body mt-3">
                                    <ul class="nav nav-tabs profile-tab-control-ul" id="myTab-1" role="tablist">
                                        <li class="profile-tab-control-li mt-0" role="presentation">
                                            <a class="nav-link profile-tab-control-a active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                <i class="far fa-user"></i>
                                                Thông tin của bạn
                                            </a>
                                        </li>
                                        <li class="profile-tab-control-li" role="presentation">
                                            <a class="nav-link profile-tab-control-a" id="donhang-tab" data-toggle="tab" href="#donhang" role="tab" aria-controls="donhang" aria-selected="false">
                                                <i class="far fa-list-alt"></i>
                                                Đơn hàng
                                            </a>
                                        </li>
                                        <li class="profile-tab-control-li" role="presentation">
                                            <a class="nav-link profile-tab-control-a" id="lieutrinh-tab" data-toggle="tab" href="#lieutrinh" role="tab" aria-controls="lieutrinh" aria-selected="false">
                                                <i class="fas fa-clipboard-list"></i>
                                                Liệu trình điều trị
                                            </a>
                                        </li>
                                        <li class="profile-tab-control-li" role="presentation">
                                            <a class="nav-link profile-tab-control-a" id="lichhen-tab" data-toggle="tab" href="#lichhen" role="tab" aria-controls="lichhen" aria-selected="false">
                                                <i class="far fa-calendar-alt"></i>
                                                Lịch hẹn
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10">
                            <div class="list-tabs">
                                <div class="tab-content" id="">
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="profile-user-tab">
                                            <div class="header-tab">
                                                <div class="title-3 color-main uppercase">Hồ Sơ Của Tôi</div>
                                                <div class="text-10">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                                            </div>

                                            <div class="body-tab">
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <form action="" class="mt-4 thongtintaikhoan">
                                                            <div class="form-group form-control-custom">
                                                                <div class="left">Số điện thoại</div>
                                                                <div class="right">
                                                                    <span>+84965286066</span>
                                                                </div>
                                                            </div>

                                                            <div class="form-group form-control-custom mt-0">
                                                                <div class="left">Họ & tên</div>
                                                                <div class="right">
                                                                    <input type="text" class="form-control form-custom" name="" placeholder="Email của bạn" id="" value="Hoàng Thùy Linh">
                                                                </div>
                                                            </div>

                                                            <div class="form-group form-control-custom">
                                                                <div class="left">Email</div>
                                                                <div class="right">
                                                                    <input type="text" class="form-control form-custom" name="" placeholder="Email của bạn" id="">
                                                                </div>
                                                            </div>

                                                            <div class="form-group form-control-custom">
                                                                <div class="left">Mức độ thân thiết</div>
                                                                <div class="right">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-6">
                                                                            <div class="progress" style="height: 7px">
                                                                                <div class="progress-bar progress-level" role="progressbar" price-value="10000" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <span>LV 1</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group form-control-custom">
                                                                <div class="left"></div>
                                                                <div class="right">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="box-mota-level">
                                                                                <div class="d-flex">
                                                                                    <div class="fw-500">Chi tiêu</div>
                                                                                    <div class="box-label-custom ml-auto" data-toggle="modal" data-target="#uudai-khachhang">Xem ưu đãi</div>
                                                                                    <div class="modal fade" id="uudai-khachhang" tabindex="-1" aria-labelledby="uudai-khachhangLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog ">
                                                                                          <div class="modal-content border-radius-3px">
                                                                                            <div class="modal-header">
                                                                                              <h5 class="modal-title" id="uudai-khachhangLabel">Ưu đãi - khách hàng thân thiết</h5>
                                                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                              </button>
                                                                                            </div>
                                                                                            <div class="modal-body noidung-uu-dai">
                                                                                                <nav class="fa-link-tabs">
                                                                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                                                                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Level 1 | 1.000.000 đ</a>
                                                                                                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Level 2 | 5.000.000 đ</a>
                                                                                                        <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Level 3 | 10.000.000 đ</a>
                                                                                                    </div>
                                                                                                  </nav>
                                                                                                <div class="tab-content" id="nav-tabContent">
                                                                                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/massage-1.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Giảm giá dịch vụ</div>
                                                                                                                <div class="text-gray">Giảm 5% tổng hóa đơn khi sử dụng dịch vụ spa</div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/confetti.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Quà tặng sinh nhật</div>
                                                                                                                <div class="text-gray">1 x Vocher mua hàng 100k vào sinh nhật</div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/massage-1.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Giảm giá dịch vụ</div>
                                                                                                                <div class="text-gray">Giảm 8% tổng hóa đơn khi sử dụng dịch vụ spa</div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/confetti.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Quà tặng sinh nhật</div>
                                                                                                                <div class="text-gray">2 x Vocher 500k vào sinh nhật áp dụng cho cả dịch vụ và mỹ phẩm</div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/vip.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Ngày hội thành viên</div>
                                                                                                                <div class="text-gray">15 hàng tháng, vocher hạng 2</div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/massage-1.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Giảm giá dịch vụ</div>
                                                                                                                <div class="text-gray">Giảm 10% tổng hóa đơn khi sử dụng dịch vụ spa</div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/confetti.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Quà tặng sinh nhật</div>
                                                                                                                <div class="text-gray">3 x Vocher 500k vào sinh nhật áp dụng cho cả dịch vụ và mỹ phẩm</div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="uudai-content-item">
                                                                                                            <div class="icon">
                                                                                                                <img src="{{ asset('Site/images/icon') }}/vip.png" alt="">
                                                                                                            </div>
                                                                                                            <div class="text">
                                                                                                                <div class="title">Ngày hội thành viên</div>
                                                                                                                <div class="text-gray">15 hàng tháng, vocher hạng 3</div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                                                            </div>
                                                                                          </div>
                                                                                        </div>
                                                                                      </div>
                                                                                </div>
                                                                                <div class="money-progress"><span class="current-money">1.255.000 đ</span> / 5tr đ</div>
                                                                                <small>Mua thêm <b>3.745.000 đ </b>để đạt LV 2</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group form-control-custom">
                                                                <div class="left"></div>
                                                                <div class="right">
                                                                    <a href="">
                                                                        <button class="btn-6 ml-0">
                                                                            Lưu
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="change-avt-box mt-4">
                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                            <div class="form-group-image">
                                                                <label for="ip-avt" class="form-control form-custom">Chọn ảnh</label>
                                                                <input type="file" name="" id="ip-avt">
                                                            </div>
                                                            <div class="quydinh d-flex flex-column">
                                                                <span class="text-gray">Dụng lượng file tối đa 1 MB</span>
                                                                <span class="text-gray">Định dạng:.JPEG, .PNG </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donhang" role="tabpanel" aria-labelledby="donhang-tab">
                                        <div class="donmua-tab">
                                            <div class="fa-nav">
                                                <ul class="nav nav-tabs" id="" role="tablist">
                                                    <li class="nav-item pl-0" role="presentation">
                                                        <a class="nav-link active" id="alldonhang-tab" data-toggle="tab" href="#alldonhang" role="tab" aria-controls="alldonhang" aria-selected="true">Tất cả</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="choxacnhan-tab" data-toggle="tab" href="#choxacnhan" role="tab" aria-controls="choxacnhan" aria-selected="false">Chờ xác nhận</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="cholayhang-tab" data-toggle="tab" href="#cholayhang" role="tab" aria-controls="cholayhang" aria-selected="false">Chờ lấy hàng</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="danggiao-tab" data-toggle="tab" href="#danggiao" role="tab" aria-controls="danggiao" aria-selected="false">Đang giao</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="dagiao-tab" data-toggle="tab" href="#dagiao" role="tab" aria-controls="dagiao" aria-selected="false">Đã giao</a>
                                                    </li>
                                                    <li class="nav-item pr-0" role="presentation">
                                                        <a class="nav-link" id="dahuy-tab" data-toggle="tab" href="#dahuy" role="tab" aria-controls="dahuy" aria-selected="false">Đã hủy</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="tab-content" id="">
                                                <div class="tab-pane fade show active" id="alldonhang" role="tabpanel" aria-labelledby="alldonhang-tab">
                                                    @if(session()->has('khachHang') && session('khachHang') != '')
                                                        @foreach($inhoadon as $index =>$hoadonF)
                                                    <div class="box-donhang profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none" data-toggle="modal" data-target="#infonguoinhan-1">
                                                                    <span class="mr-1">Thông tin đơn hàng</span>
                                                                    <i class="far fa-question-circle"></i>
                                                                </button>

                                                                <div class="modal fade" id="infonguoinhan-1" tabindex="-1" aria-labelledby="infonguoinhan-1Label" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="infonguoinhan-1Label">Thông tin người nhận</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="" class="">
                                                                                    <div class="form-group form-control-custom mt-0 align-items-start">
                                                                                        <div class="left">Tên người nhận</div>
                                                                                        <div class="right">
                                                                                            <span>Nguyễn Hoàng Long</span>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group form-control-custom align-items-start">
                                                                                        <div class="left">Số điện thoại</div>
                                                                                        <div class="right">
                                                                                            <span>0965286066</span>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group form-control-custom align-items-start">
                                                                                        <div class="left">Địa chỉ giao hàng</div>
                                                                                        <div class="right">
                                                                                            <span>485, Công Hòa, P 15, Q Tân Bình, TP Hồ Chí Minh</span>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group form-control-custom align-items-start">
                                                                                        <div class="left">Ghi chú khách hàng</div>
                                                                                        <div class="right">
                                                                                            <textarea disabled class="form-control form-custom" cols="10" rows="8">
                                                                                                Nếu khách hàng đưa ra yêu cầu đặc biệt cho một đơn hàng cụ thể và bạn
                                                                                                 cũng như nhân viên cửa hàng cần ghi nhớ để thực hiện cho đúng yêu cầu,
                                                                                                  bạn có thể thêm ghi chú cho đơn hàng.
                                                                                            </textarea>
                                                                                        </div>
                                                                                    </div>




                                                                                </form>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                  </div>
                                                            </div>

                                                            <div class="item">
                                                                <i class="fas fa-truck-moving uk-text-success"></i>
                                                                <span class="ml-1 uk-text-success">Giao hàng thành công</span>
                                                            </div>

                                                        </div>
                                                        <div class="giohang-body">
                                                            <div class="row shadow-2 align-items-center giohang-item">
                                                                <div class="col-xl-2 d-flex  align-items-center">
                                                                    <div class="body-text d-flex">
                                                                        <img src="http://127.0.0.1:3300/uploads/hyarunic-removebg-preview.png" class="img-sanpham img-fluid m-0" alt="...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
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
                                                                        <div class="input-group inline-group">
                                                                            <input class="form-control form-custom text-center quantity"     min="1" name="quantity" value="1" disabled type="number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <div class="body-text text-right">
                                                                        <span class="tongtien">300,999 đ</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row shadow-2 align-items-center giohang-item">
                                                                <div class="col-xl-2 d-flex  align-items-center">
                                                                    <div class="body-text d-flex">
                                                                        <img src="http://127.0.0.1:3300/uploads/hyarunic-removebg-preview.png" class="img-sanpham img-fluid m-0" alt="...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
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
                                                                        <div class="input-group inline-group">
                                                                            <input class="form-control form-custom text-center quantity"     min="1" name="quantity" value="1" disabled type="number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <div class="body-text text-right">
                                                                        <span class="tongtien">300,999 đ</span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="foot">
                                                            <div class="row">
                                                                <div class="col-xl-6 d-flex justify-content-between">
                                                                    <label for="" class="text-gray">Phương thức giao hàng: </label>
                                                                    <div class="ml-2">
                                                                        Thanh toán khi nhận hàng
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-6 d-flex justify-content-between">
                                                                    <label for="" class="text-gray">Tổng tiền hàng (2 sản phẩm): </label>
                                                                    <div class="ml-2">
                                                                        300,999đ
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row mt-1">
                                                                <div class="col-xl-6 d-flex justify-content-between">
                                                                    <label for="" class="text-gray">Đơn vị vận chuyển: </label>
                                                                    <div class="ml-2">
                                                                        Nhanh
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 d-flex justify-content-between">
                                                                    <label for="" class="text-gray">Mã giảm giá: </label>
                                                                    <div class="ml-2">
                                                                        WMXAA2021
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-1 justify-content-end">
                                                                <div class="col-xl-6 d-flex justify-content-between">
                                                                    <label for="" class="text-gray">Tổng tiền sau giảm (0%): </label>
                                                                    <div class="ml-2">
                                                                        300,999 đ
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-1 justify-content-end">
                                                                <div class="col-xl-6 tongthanhtoan d-flex justify-content-between">
                                                                    <label for="" class="text-gray">Tổng thanh toán : </label>
                                                                    <div class="ml-2 color-main price-total">
                                                                        300,999 đ
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @endforeach
                                                    @endif

                                                </div>
                                                <div class="tab-pane fade" id="choxacnhan" role="tabpanel" aria-labelledby="choxacnhan-tab">...2</div>
                                                <div class="tab-pane fade" id="cholayhang" role="tabpanel" aria-labelledby="cholayhang-tab">..3.</div>
                                                <div class="tab-pane fade" id="danggiao" role="tabpanel" aria-labelledby="danggiao-tab">...4</div>
                                                <div class="tab-pane fade" id="dagiao" role="tabpanel" aria-labelledby="dagiao-tab">...5</div>
                                                <div class="tab-pane fade" id="dahuy" role="tabpanel" aria-labelledby="dahuy-tab">...6</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="lieutrinh" role="tabpanel" aria-labelledby="lieutrinh-tab">
                                        <div class="donmua-tab">
                                            <div class="fa-nav">
                                                <ul class="nav nav-tabs" id="" role="tablist">
                                                    <li class="nav-item pl-0" role="presentation">
                                                        <a class="nav-link active" id="alllieutrinh-tab" data-toggle="tab" href="#alllieutrinh" role="tab" aria-controls="alllieutrinh" aria-selected="true">Tất cả</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="lieutrinh-hoanthanh-tab" data-toggle="tab" href="#lieutrinh-hoanthanh" role="tab" aria-controls="lieutrinh-hoanthanh" aria-selected="false">Hoàn thành</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="lieutrinh-dangdieutri-tab" data-toggle="tab" href="#lieutrinh-dangdieutri" role="tab" aria-controls="lieutrinh-dangdieutri" aria-selected="false">Đang điều trị</a>
                                                    </li>
                                                    <li class="nav-item pr-0" role="presentation">
                                                        <a class="nav-link" id="lieutrinh-dahuy-tab" data-toggle="tab" href="#lieutrinh-dahuy" role="tab" aria-controls="lieutrinh-dahuy" aria-selected="false">Đã hủy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content" id="">
                                                <div class="tab-pane fade show active" id="alllieutrinh" role="tabpanel" aria-labelledby="alllieutrinh-tab">
                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none show-progress-lieutrinh" data-toggle="modal" data-target="#lieutrinh-id" data-id="lieutrinh-id">
                                                                    <span class="mr-1">Thông tin chi tiết</span>
                                                                    <i class="far fa-question-circle"></i>
                                                                </button>

                                                                <div class="modal fade" id="lieutrinh-id" tabindex="-1" aria-labelledby="lieutrinh-id-Label" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                      <div class="modal-content border-radius-modal">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="lieutrinh-id-Label">BS. Ngọc - Tên liệu trình</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="thongtinlieutrinh">
                                                                                <div class="row align-items-center">
                                                                                    <div class="col-4 date-lieutrinh start">
                                                                                        <label for="">Ngày bắt đầu</label>
                                                                                        <span>15 - 7 - 2021</span>
                                                                                    </div>
                                                                                    <div class="col-4 line-date bg-primary
                                                                                    ">

                                                                                    </div>
                                                                                    <div class="col-4 date-lieutrinh end">
                                                                                        <label for="">Dự kiến kết thúc</label>
                                                                                        <span>15 - 10 - 2021</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="progress-circle" progress-lieutrinh-id="lieutrinh-id">
                                                                                <div class="circular-progress" circular-progress-id="lieutrinh-id">
                                                                                    <div class="value-container value-progress-circle" value-container-id="lieutrinh-id" data-progress="75">0%</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="uk-container" style="padding: 40px 10px;">
                                                                                <div class="uk-timeline">
                                                                                    <div class="uk-timeline-item">
                                                                                        <div class="uk-timeline-icon">
                                                                                            <span class="uk-badge in-propress"><span uk-icon="check" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></span>
                                                                                        </div>
                                                                                        <div class="uk-timeline-content">
                                                                                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                                                                <div class="uk-card-header">
                                                                                                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                                                                                                        <h3 class="uk-card-title uk-first-column"><time datetime="2020-07-08">25 tháng 8</time></h3>
                                                                                                        <span class="uk-label uk-label-secondary uk-margin-auto-left">Chưa đến </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="uk-card-body">
                                                                                                    <div class="list-group">
                                                                                                        <label class="">Dịch vụ sử dụng</label>
                                                                                                        <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                                                        <div class="item">2. Điều trị nám công nghệ PRP 3.0</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Chuyên viên thực hiện</label>
                                                                                                        <div class="item">CV. Võ Hoài Thương</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Ghi chú của tiến độ</label>
                                                                                                        <div class="ghichu"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="uk-timeline-item">
                                                                                        <div class="uk-timeline-icon">
                                                                                            <span class="uk-badge done"><span uk-icon="check" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></span>
                                                                                        </div>
                                                                                        <div class="uk-timeline-content">
                                                                                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                                                                <div class="uk-card-header">
                                                                                                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                                                                                                        <h3 class="uk-card-title uk-first-column"><time datetime="2020-07-08">25 tháng 8 <small>(15h30)</small></time></h3>
                                                                                                        <span class="uk-label uk-label-success uk-margin-auto-left">Hoàn thành</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="uk-card-body">
                                                                                                    <div class="list-image-group">
                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item mr-0">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Dịch vụ sử dụng</label>
                                                                                                        <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                                                        <div class="item">2. Điều trị nám công nghệ PRP 3.0</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Chuyên viên thực hiện</label>
                                                                                                        <div class="item">CV. Võ Hoài Thương</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Ghi chú của tiến độ</label>
                                                                                                        <div class="ghichu">Không sử dụng sản phẩm hương bạc hà</div>
                                                                                                    </div>
                                                                                                    {{-- <p class="uk-text-success">Fully responsive timeline you can add to your UIkit 3 project</p> --}}
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="uk-timeline-item">
                                                                                        <div class="uk-timeline-icon">
                                                                                            <span class="uk-badge done"><span uk-icon="check" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></span>
                                                                                        </div>
                                                                                        <div class="uk-timeline-content">
                                                                                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                                                                <div class="uk-card-header">
                                                                                                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                                                                                                        <h3 class="uk-card-title uk-first-column"><time datetime="2020-07-08">25 tháng 8 <small>(15h30)</small></time></h3>
                                                                                                        <span class="uk-label uk-label-success uk-margin-auto-left">Hoàn thành</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="uk-card-body">
                                                                                                    <div class="list-image-group">
                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item mr-0">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Dịch vụ sử dụng</label>
                                                                                                        <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                                                        <div class="item">2. Điều trị nám công nghệ PRP 3.0</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Chuyên viên thực hiện</label>
                                                                                                        <div class="item">CV. Võ Hoài Thương</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Ghi chú của tiến độ</label>
                                                                                                        <div class="ghichu">Không sử dụng sản phẩm hương bạc hà</div>
                                                                                                    </div>
                                                                                                    {{-- <p class="uk-text-success">Fully responsive timeline you can add to your UIkit 3 project</p> --}}
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="uk-timeline-item">
                                                                                        <div class="uk-timeline-icon">
                                                                                            <span class="uk-badge done"><span uk-icon="check" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></span>
                                                                                        </div>
                                                                                        <div class="uk-timeline-content">
                                                                                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                                                                <div class="uk-card-header">
                                                                                                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                                                                                                        <h3 class="uk-card-title uk-first-column"><time datetime="2020-07-08">25 tháng 8 <small>(15h30)</small></time></h3>
                                                                                                        <span class="uk-label uk-label-success uk-margin-auto-left">Hoàn thành</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="uk-card-body">
                                                                                                    <div class="list-image-group">
                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item mr-0">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Dịch vụ sử dụng</label>
                                                                                                        <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                                                        <div class="item">2. Điều trị nám công nghệ PRP 3.0</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Chuyên viên thực hiện</label>
                                                                                                        <div class="item">CV. Võ Hoài Thương</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Ghi chú của tiến độ</label>
                                                                                                        <div class="ghichu">Không sử dụng sản phẩm hương bạc hà</div>
                                                                                                    </div>
                                                                                                    {{-- <p class="uk-text-success">Fully responsive timeline you can add to your UIkit 3 project</p> --}}
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="uk-timeline-item">
                                                                                        <div class="uk-timeline-icon">
                                                                                            <span class="uk-badge done"><span uk-icon="check" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></span>
                                                                                        </div>
                                                                                        <div class="uk-timeline-content">
                                                                                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                                                                                <div class="uk-card-header">
                                                                                                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                                                                                                        <h3 class="uk-card-title uk-first-column"><time datetime="2020-07-08">25 tháng 8 <small>(15h30)</small></time></h3>
                                                                                                        <span class="uk-label uk-label-success uk-margin-auto-left">Hoàn thành</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="uk-card-body">
                                                                                                    <div class="list-image-group">
                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item mr-0">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Dịch vụ sử dụng</label>
                                                                                                        <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                                                        <div class="item">2. Điều trị nám công nghệ PRP 3.0</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Chuyên viên thực hiện</label>
                                                                                                        <div class="item">CV. Võ Hoài Thương</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Ghi chú của tiến độ</label>
                                                                                                        <div class="ghichu">Không sử dụng sản phẩm hương bạc hà</div>
                                                                                                    </div>
                                                                                                    {{-- <p class="uk-text-success">Fully responsive timeline you can add to your UIkit 3 project</p> --}}
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="uk-timeline-item">
                                                                                        <div class="uk-timeline-icon">
                                                                                            <span class="uk-badge done"><span uk-icon="check" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="check"><polyline fill="none" stroke="#000" stroke-width="1.1" points="4,10 8,15 17,4"></polyline></svg></span></span>
                                                                                        </div>
                                                                                        <div class="uk-timeline-content">
                                                                                            <div class="uk-card uk-card-default uk-overflow-auto">
                                                                                                <div class="uk-card-header">
                                                                                                    <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                                                                                                        <h3 class="uk-card-title uk-first-column"><time datetime="2020-07-08">25 tháng 8 <small>(15h30)</small></time></h3>
                                                                                                        <span class="uk-label uk-label-success uk-margin-auto-left">Hoàn thành</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="uk-card-body">
                                                                                                    <div class="list-image-group">
                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>

                                                                                                        <div class="item mr-0">
                                                                                                            <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Dịch vụ sử dụng</label>
                                                                                                        <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                                                        <div class="item">2. Điều trị nám công nghệ PRP 3.0</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Chuyên viên thực hiện</label>
                                                                                                        <div class="item">CV. Võ Hoài Thương</div>
                                                                                                    </div>

                                                                                                    <div class="list-group mt-4">
                                                                                                        <label class="">Ghi chú của tiến độ</label>
                                                                                                        <div class="ghichu">Không sử dụng sản phẩm hương bạc hà</div>
                                                                                                    </div>
                                                                                                    {{-- <p class="uk-text-success">Fully responsive timeline you can add to your UIkit 3 project</p> --}}
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                            </div>

                                                            <div class="item">
                                                                <i class="fas fa-calendar-week uk-text-primary"></i>
                                                                <span class="ml-1 uk-text-primary">Đang điều trị</span>
                                                            </div>
                                                        </div>
                                                        <div class="body">
                                                            <div class="box-datlich-history mt-0">
                                                                <div class="left">
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="list-group">
                                                                                <label class="">Dịch vụ sử dụng</label>
                                                                                <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                                <div class="item">2. Điều trị nám công nghệ PRP 3.0</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-primary"></i>
                                                                                <span class="ml-1 uk-text-primary">12 ngày tới</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray">
                                                                                <i class="far fa-clipboard"></i>
                                                                            </label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Không dùng sản phẩm có tinh chất bạc hà
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="list-group">
                                                                                <label class="">Dịch vụ sử dụng</label>
                                                                                <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray">
                                                                                <i class="far fa-clipboard"></i>
                                                                            </label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Không dùng sản phẩm có tinh chất bạc hà
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="list-group">
                                                                                <label class="">Dịch vụ sử dụng</label>
                                                                                <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray">
                                                                                <i class="far fa-clipboard"></i>
                                                                            </label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Không dùng sản phẩm có tinh chất bạc hà
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="list-group">
                                                                                <label class="">Dịch vụ sử dụng</label>
                                                                                <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray">
                                                                                <i class="far fa-clipboard"></i>
                                                                            </label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Không dùng sản phẩm có tinh chất bạc hà
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="list-group">
                                                                                <label class="">Dịch vụ sử dụng</label>
                                                                                <div class="item">1. Trị mụn bằng Doctor Laser</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray">
                                                                                <i class="far fa-clipboard"></i>
                                                                            </label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Không dùng sản phẩm có tinh chất bạc hà
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="lieutrinh-hoanthanh" role="tabpanel" aria-labelledby="lieutrinh-hoanthanh-tab">

                                                </div>
                                                <div class="tab-pane fade" id="lieutrinh-dangdieutri" role="tabpanel" aria-labelledby="lieutrinh-dangdieutri-tab">
                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none" data-toggle="modal" data-target="#infonguoinhan-1">
                                                                    <span class="mr-1">Thông tin chi tiết</span>
                                                                    <i class="far fa-question-circle"></i>
                                                                </button>
                                                            </div>

                                                            <div class="item">
                                                                <i class="fas fa-calendar-week uk-text-primary"></i>
                                                                <span class="ml-1 uk-text-primary">Đang điều trị</span>
                                                            </div>
                                                        </div>
                                                        <div class="body">
                                                            <div class="box-datlich-history mt-0">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-primary"></i>
                                                                                <span class="ml-1 uk-text-primary">12 ngày tới</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Dưỡng mụn lần 1
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Dưỡng mụn lần 1
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Dưỡng mụn lần 1
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-start">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                BS. Ngọc
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Dưỡng mụn lần 1
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="lieutrinh-dahuy" role="tabpanel" aria-labelledby="lieutrinh-dahuy-tab">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="lichhen" role="tabpanel" aria-labelledby="lichhen-tab">
                                        <div class="donmua-tab">
                                            <div class="fa-nav">
                                                <ul class="nav nav-tabs" id="" role="tablist">
                                                    <li class="nav-item pl-0" role="presentation">
                                                        <a class="nav-link active" id="alllichdat-tab" data-toggle="tab" href="#alllichdat" role="tab" aria-controls="alllichdat" aria-selected="true">Tất cả</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="lichhoanthanh-tab" data-toggle="tab" href="#lichhoanthanh" role="tab" aria-controls="lichhoanthanh" aria-selected="false">Hoàn thành</a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="lichchuaden-tab" data-toggle="tab" href="#lichchuaden" role="tab" aria-controls="lichchuaden" aria-selected="false">Chưa đến</a>
                                                    </li>
                                                    <li class="nav-item pr-0" role="presentation">
                                                        <a class="nav-link" id="lichdat-dahuy-tab" data-toggle="tab" href="#lichdat-dahuy" role="tab" aria-controls="lichdat-dahuy" aria-selected="false">Đã hủy</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content" id="">
                                                <div class="tab-pane fade show active" id="alllichdat" role="tabpanel" aria-labelledby="alllichdat-tab">
                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    <span class="ml-1">2021 (7)</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="body">
                                                            <div class="box-datlich-history mt-0">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-calendar uk-text-primary"></i>
                                                                                <span class="ml-1 uk-text-primary">7 ngày tới</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Huỷ lịch
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Đặt lại
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="w-100 text-center mt-4 mb-2">
                                                                <a href="" class="text-center">
                                                                    <button class="btn-6 ml-0">
                                                                        Xem thêm
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none" >
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    <span class="ml-1">2020 (7)</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="body">
                                                            <div class="box-datlich-history mt-0">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Huỷ lịch
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Đặt lại
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="w-100 text-center mt-4 mb-2">
                                                                <a href="" class="text-center">
                                                                    <button class="btn-6 ml-0">
                                                                        Xem thêm
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="lichhoanthanh" role="tabpanel" aria-labelledby="lichhoanthanh-tab">
                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none" >
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    <span class="ml-1">2021 (7)</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="body">
                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Đặt lại
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="w-100 text-center mt-4 mb-2">
                                                                <a href="" class="text-center">
                                                                    <button class="btn-6 ml-0">
                                                                        Xem thêm
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    <span class="ml-1">2020 (7)</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="body">
                                                            <div class="box-datlich-history mt-0">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Huỷ lịch
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="box-datlich-history">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-check-circle uk-text-success"></i>
                                                                                <span class="ml-1 uk-text-success">Hoàn thành</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Đặt lại
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="w-100 text-center mt-4 mb-2">
                                                                <a href="" class="text-center">
                                                                    <button class="btn-6 ml-0">
                                                                        Xem thêm
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="lichchuaden" role="tabpanel" aria-labelledby="lichchuaden-tab">
                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    <span class="ml-1">2021 (7)</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="body">
                                                            <div class="box-datlich-history mt-0">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="far fa-calendar uk-text-primary"></i>
                                                                                <span class="ml-1 uk-text-primary">7 ngày tới</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Huỷ lịch
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="lichdat-dahuy" role="tabpanel" aria-labelledby="lichdat-dahuy-tab">
                                                    <div class="profile-minibox mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none">
                                                                    <i class="far fa-calendar-alt"></i>
                                                                    <span class="ml-1">2021 (7)</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="body">
                                                            <div class="box-datlich-history mt-0">
                                                                <div class="left">
                                                                    <div class="time">
                                                                        15h00
                                                                    </div>
                                                                    <div class="date">21 Tháng 12</div>
                                                                </div>

                                                                <div class="right">
                                                                    <div class="row d-flex justify-content-between">
                                                                        <div class="col-8">
                                                                            <div class="diachi">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh</div>
                                                                        </div>

                                                                        <div class="col-4 justify-content-end">
                                                                            <div class="item ml-4 text-right">
                                                                                <i class="fas fa-exclamation-circle text-danger"></i>
                                                                                <span class="ml-1 text-danger">Đã hủy</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3 justify-content-between">
                                                                        <div class="col-xl-4 d-flex">
                                                                            <label for="" class="text-gray"><i class="fas fa-user-shield"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Spa chọn nhân viên giúp bạn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 d-flex text-center">
                                                                            <label for="" class="text-gray"><i class="fas fa-clipboard-check"></i></label>
                                                                            <div class="ml-2 limit-text-row-1">
                                                                                Bạn muốn tư vấn
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-4 text-right">
                                                                            <a href="">
                                                                                <button class="button-href-basic ml-0">
                                                                                    Đặt lại
                                                                                </button>
                                                                            </a>
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
            {{-- <div class="col-xl-3">
                @include('Site.components.box-lienhe')

                @include('Site.components.list-social')
            </div> --}}


        </div>
    </div>
</div>

@endsection

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.9.2/js/uikit.min.js"></script>
    <script src="{{ asset('Site/js') }}/profile-user.js"></script>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.9.2/css/uikit.min.css">
@endsection
