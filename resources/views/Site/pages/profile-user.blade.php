@extends('site.layout')

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
                                            <a class="nav-link profile-tab-control-a" id="hoadon-tab" data-toggle="tab" href="#hoadon" role="tab" aria-controls="hoadon" aria-selected="false">
                                                <i class="fas fa-history"></i>
                                                Lịch sử điều trị
                                            </a>
                                        </li>

                                        <li class="profile-tab-control-li" role="presentation">
                                            <a class="nav-link profile-tab-control-a" id="lieutrinh-tab" data-toggle="tab" href="#lieutrinh" role="tab" aria-controls="lieutrinh" aria-selected="false">
                                                <i class="fas fa-clipboard-list"></i>


                                                Liệu trình điều trị
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
                                                        <form action="" class="mt-4">
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
                                                                <div class="left">  </div>
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
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="donhang" role="tabpanel" aria-labelledby="donhang-tab">
                                        <div class="donmua-tab">
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
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="alldonhang" role="tabpanel" aria-labelledby="alldonhang-tab">
                                                    <div class="box-donhang mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none" data-toggle="modal" data-target="#infonguoinhan-1">
                                                                    <span class="mr-1">Thông tin người nhận</span>
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
                                                                <i class="fas fa-truck-moving text-success"></i>
                                                                <span class="ml-1 text-success">Giao hàng thành công</span>
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

                                                    <div class="box-donhang mt-4">
                                                        <div class="header">
                                                            <div class="item">
                                                                <button type="button" class="button-none" data-toggle="modal" data-target="#infonguoinhan-2">
                                                                    <span class="mr-1">Thông tin người nhận</span>
                                                                    <i class="far fa-question-circle"></i>
                                                                </button>

                                                                <div class="modal fade" id="infonguoinhan-2" tabindex="-1" aria-labelledby="infonguoinhan-2Label" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="infonguoinhan-2Label">Thông tin người nhận</h5>
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
                                                                <span class="ml-1 text-danger">Đã hủy</span>
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
                                                </div>
                                                <div class="tab-pane fade" id="choxacnhan" role="tabpanel" aria-labelledby="choxacnhan-tab">...2</div>
                                                <div class="tab-pane fade" id="cholayhang" role="tabpanel" aria-labelledby="cholayhang-tab">..3.</div>
                                                <div class="tab-pane fade" id="danggiao" role="tabpanel" aria-labelledby="danggiao-tab">...4</div>
                                                <div class="tab-pane fade" id="dagiao" role="tabpanel" aria-labelledby="dagiao-tab">...5</div>
                                                <div class="tab-pane fade" id="dahuy" role="tabpanel" aria-labelledby="dahuy-tab">...6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hoadon" role="tabpanel" aria-labelledby="hoadon-tab">
                                        3
                                    </div>
                                    <div class="tab-pane fade" id="lieutrinh" role="tabpanel" aria-labelledby="lieutrinh-tab">
                                        4
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
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>
@endsection
