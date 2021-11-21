@extends('site.layout')

@section('title')
    Trang Chủ
@endsection

@section('main')
<div class="about">
    <div class="box-about position-relative">
        <div class="background-about">
            <div class="box-images-2">
                <div class="box-color-1"></div>
                <div class="img-1">
                    <img class="img-fluid position-relative z-index-1"
                        src="{{ asset('Site/images') }}/about-1.png" alt="">
                </div>
                <div class="img-2">
                    <img class="img-small-2 float-right position-relative z-index-1"
                        src="{{ asset('Site/images') }}/coso4.jpg" alt="">
                </div>
            </div>
            {{-- <div class="big-title about-title-custom title-font">About us</div> --}}
        </div>
        <div class="container">
        <div class="row flex-row-reverse">
                <div class="col-xl-6" style="margin-top: 100px">
                    <div class="about-content">
                        <div class="title-small line-before">
                            VỀ CHÚNG TÔI
                        </div>
                        <div class="w-100">
                            <div class="title-1">
                                Hệ Thống Spa <br> Đẳng Cấp
                            </div>
                            <div class="text-1 mt-4">
                                Với 45 chi nhánh trải dài khắp cả nước, FBeauty Spa tự hào là chuỗi hệ thống thẩm mỹ
                                viện hàng đầu Việt Nam
                            </div>
                            <div class="text-2 mt-1">
                                Mang trong mình niềm tin về sứ mệnh đánh thức vẻ đẹp tiềm ẩn trong mỗi người, Seoul
                                Spa luôn nỗ lực
                                không ngừng để đem đến cho khách hàng những dịch vụ hoàn hảo nhất. Không chỉ nằm ở
                                kết quả mà Seoul
                                Spa còn hướng tới thẩm mỹ khỏe – đẹp – an toàn để mỗi phút giây ngắm mình trong
                                gương là những
                                phút giây tận hưởng hạnh phúc thật sự của mỗi khách hàng.
                            </div>
                        </div>
                        <div class="w-100 text-left mt-3">
                            <a href="">
                                <button class="btn-3 active black-1">Xem chi tiết</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-service">
    <div class="service-intro position-relative">
        <div class="background-service w-100">
            <div class="service-intro-item left"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-6"></div>
                    <div class="col-xl-6 p-4em">
                        <div class="about-content position-relative z-index-1">
                            <div class="title-small line-before">
                                Dich Vụ
                            </div>
                            <div class="w-100">
                                <div class="text-4 w-100">
                                    Xu Hướng Làm Đẹp
                                </div>
                                <div class="list-danhmuc mt-4">
                                    <div class="danhmuc-item">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Chăm sóc da mặt
                                                </div>
                                                <div class="text-2">
                                                    Chăm sóc da mặt là một trong các gói dịch vụ Spa cơ bản và
                                                    đông khách nhất hiện nay.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/acne.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Điều trị mụn, sẹo
                                                </div>
                                                <div class="text-2">
                                                    Điều trị mụn là phương pháp hiệu quả nhất nhằm làm sạch mụn,
                                                    se khít lỗ chân lông và giảm vết sẹo thâm do mụn để lại.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/facial-treatment-black.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Dịch vụ trị nám, tàn nhang
                                                </div>
                                                <div class="text-2">
                                                    Để che mờ những vết nám, tàng nhang trên khuôn mặt, chị em
                                                    sẽ mất khá nhiều thời gian để trang điểm. Việc lạm dụng
                                                    trang điểm cũng gây ảnh hưởng xấu tới sức khỏe của da về
                                                    sau.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/mesotherapy.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Làm trẻ hóa da
                                                </div>
                                                <div class="text-2">
                                                    Hiện nay có rất nhiều công nghệ không xâm lấn giúp làm cho
                                                    da săn chắc, xóa vết nhăn, tạo đường nét trẻ trung cho cơ
                                                    thể.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/hot-stone.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Dịch vụ massage
                                                </div>
                                                <div class="text-2">
                                                    Massage foot và massage body có tác dụng giúp khách hàng
                                                    giảm đau, thư giãn, xua tan mệt mỏi và căng thẳng, tăng
                                                    cường hệ miễn dịch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/fitness-black.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Dịch vụ giảm béo
                                                </div>
                                                <div class="text-2">
                                                    Tăng cân, béo phì là vấn đề mà rất nhiều chị em lo lắng,
                                                    việc chăm lo cho vóc dáng dường như đã trở thành nhu cầu
                                                    thiết yếu của con người
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-100 text-left mt-4">

                                <button data-show="one" class="button btn-full btn-datlich">ĐẶT LỊCH
                                    NGAY</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-service">
        <div class="container position-relative z-index-1 p-0">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="head-service-item service-title">
                        <div class="w-100 text-left">
                            <div class="title-small color-black-main">
                                LỰA CHỌN DỊCH VỤ
                            </div>
                            <div class="title-3">
                                Bí Quyết Khỏe Và Đẹp
                            </div>
                        </div>
                    </div>
                    <div class="head-service-item">
                        <div class="d-flex">
                            <div class="d-flex align-items-center text-2 mr-4" style="color: #000000;">Tìm kiếm
                                theo</div>
                            <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link btn-3 active black-1" id="allservice-tab"
                                        data-toggle="tab" href="#allservice" role="tab"
                                        aria-controls="allservice" aria-selected="true">Da mặt</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link btn-3 black-1" id="nhieuquantam-tab" data-toggle="tab"
                                        href="#nhieuquantam" role="tab" aria-controls="nhieuquantam"
                                        aria-selected="false">Danh mục</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link btn-3 black-1" id="nhieuquantam-tab" href="#">Xem tất cả</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="list-tabs mt-5">
                <div class="tab-content" id="">
                    <div class="tab-pane fade show active" id="allservice" role="tabpanel"
                        aria-labelledby="allservice-tab">
                        <div class="w-100">
                            <div class="box-dichvu">
                                <div class="box-sev">
                                    <div class="dichvu-item">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                Da Mặt
                                            </div>

                                            <div class="text-8 mt-1">
                                                300.000đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('Site/images') }}/image8.png" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                Lăn Kim Công Nghệ Cao
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt.

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">
                                            <button data-show="one" class="button btn-4 btn-datlich">Đặt
                                                lịch</button>

                                        </div>
                                    </div>


                                    <div class="dichvu-item">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                Da Mặt
                                            </div>

                                            <div class="text-8 mt-1">
                                                300.000đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('Site/images') }}/image8.png" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                Lăn Kim Công Nghệ Cao
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt.

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">
                                            <button data-show="one" class="button btn-4 btn-datlich">Đặt
                                                lịch</button>

                                        </div>
                                    </div>


                                    <div class="dichvu-item">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                Da Mặt
                                            </div>

                                            <div class="text-8 mt-1">
                                                300.000đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('Site/images') }}/image8.png" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                Lăn Kim Công Nghệ Cao
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt.

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">

                                            <button data-show="one" class="button btn-4 btn-datlich">Đặt
                                                lịch</button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nhieuquantam" role="tabpanel"
                        aria-labelledby="nhieuquantam-tab">
                        <div class="w-100">
                            <div class="box-dichvu">
                                <div class="box-sev">
                                    <div class="dichvu-item">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                Da Mặt Danh Mục
                                            </div>

                                            <div class="text-8 mt-1">
                                                300.000đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('Site/images') }}/image8.png" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                Lăn Kim Công Nghệ Cao
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt.

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">
                                            <a href="">
                                                <button class="btn-4">Đặt lịch</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="dichvu-item">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                Da Mặt
                                            </div>

                                            <div class="text-8 mt-1">
                                                300.000đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('Site/images') }}/image8.png" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                Lăn Kim Công Nghệ Cao
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt.

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">
                                            <button data-show="one" class="button btn-4 btn-datlich">Đặt
                                                lịch</button>

                                        </div>
                                    </div>

                                    <div class="dichvu-item ">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                Da Mặt
                                            </div>

                                            <div class="text-8 mt-1">
                                                300.000đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('Site/images') }}/image8.png" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                Lăn Kim Công Nghệ Cao
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt.

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">
                                            <button data-show="one" class="button btn-4 btn-datlich">Đặt
                                                lịch</button>

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

<div class="box-product">
    @include('Site.components.slide-logo')
    <div class="list-product">
        <div class="container">
            <div class="w-100 text-center mb-4">
                <div class="title-small text-center" style="margin-top: 5em !important;">
                    MỚI NHẤT
                </div>
                <div class="text-4">
                    Sản Phẩm Thịnh Hành
                </div>
                {{-- <div class="line-2"></div> --}}
            </div>

            <div class="box-product-1">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 m-0">
                    <div class="col pl-0">
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
                                            <button class="w-100 btn-sanpham btn-5" style="opacity: 0;"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                            <button class="w-100 btn-sanpham btn-5 mt-2" style="opacity: 0;"><i class="fas fa-search"></i> Xem chi tiết</button>
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
                                            <button class="w-100 btn-sanpham btn-5" style="opacity: 0;"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                            <button class="w-100 btn-sanpham btn-5 mt-2" style="opacity: 0;"><i class="fas fa-search"></i> Xem chi tiết</button>
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
                                            <button class="w-100 btn-sanpham btn-5" style="opacity: 0;"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                            <button class="w-100 btn-sanpham btn-5 mt-2" style="opacity: 0;"><i class="fas fa-search"></i> Xem chi tiết</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col pr-0">
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
                                            <button class="w-100 btn-sanpham btn-5" style="opacity: 0;"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                            <button class="w-100 btn-sanpham btn-5 mt-2" style="opacity: 0;"><i class="fas fa-search"></i> Xem chi tiết</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="w-100 text-center mt-3">
                <a href="">
                    <button class="btn-full">Xem tất cả</button>
                </a>
            </div> --}}
        </div>
    </div>
</div>

@include('Site.components.gioithieulieutrinh')

<div class="box-blog">
    <div class="container">
        <div class="list-blog p-0">
            <div class="mb-4">
                <div class="d-flex align-items-center">
                        <div class="head-blog-item blog-title">
                            <div class="w-100 text-left d-flex align-items-center">
                                <div class="title-3 mr-4">
                                    Tin tức mới
                                </div>
                                <div class="line-main-color"></div>
                            </div>
                        </div>

                        <div class="head-blog-item">
                            <div class="d-flex">
                                <div class="d-flex align-items-center text-2 mr-4">Tìm kiếm theo</div>
                                <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link btn-3 active" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">Mới nhất</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link btn-3" id="lastweek-tab" data-toggle="tab" href="#lastweek" role="tab" aria-controls="lastweek" aria-selected="false">Tuần trước</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                </div>
            </div>
            <div class="list-tabs">
                <div class="tab-content" id="">
                    <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <div class="row">
                            <div class="col-xl-7 pr-0">
                                <div class="blog-bigsize">
                                    <div class="box-danhmuc">
                                        Sức khỏe
                                    </div>

                                    <div class="img-1 w-100">
                                        <img class="img-fluid" src="{{ asset('uploads/beauty-spa.jpg') }}" alt="">
                                    </div>

                                    <div class="blog-content-bigsize">
                                        <div class="blog-text-1 limit-text-row-2">
                                            <a href="">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm
                                                Siêu Độc Ở Sài Gòn</a>
                                        </div>
                                        <div class="blog-text-2 mt-2">
                                            21/9/2021
                                        </div>
                                        <div class="blog-text-3 text-2 mt-2 limit-text-row-3">
                                            Cuối tuần này, hãy lên kế hoạch chiều chuộng bản thân bằng cách tắm
                                            thảo dược quý của người Dao Đỏ cùng nhiều dịch vụ hót-hòn-họt khác
                                            tại Noir. Spa, Sài Gòn. Cuối tuần này, hãy lên kế hoạch chiều. Cuối
                                            tuần này, hãy lên kế hoạch chiều
                                        </div>

                                        <div class="mt-3">
                                            <a href="" class="">
                                                <button class="
                                                btn-line px-0 color-gray-2">
                                                Đọc ngay
                                                </button>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-xl-5 pl-0">
                                <div class="list-blog-small pl-5">
                                    <div class="small-blog-item box-tin-hv pt-0">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="small-blog-item box-tin-hv">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="small-blog-item box-tin-hv">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="small-blog-item box-tin-hv">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lastweek" role="tabpanel" aria-labelledby="lastweek-tab">
                        <div class="row">
                            <div class="col-xl-7 pr-0">
                                <div class="blog-bigsize">
                                    <div class="box-danhmuc">
                                        Sức khỏe
                                    </div>

                                    <div class="img-1 w-100">
                                        <img class="img-fluid" src="{{ asset('uploads/beauty-spa.jpg') }}" alt="">
                                    </div>

                                    <div class="blog-content-bigsize">
                                        <div class="blog-text-1 limit-text-row-2">
                                            <a href="">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm
                                                Siêu Độc Ở Sài Gòn</a>
                                        </div>
                                        <div class="blog-text-2 mt-2">
                                            21/9/2021
                                        </div>
                                        <div class="blog-text-3 text-2 mt-2 limit-text-row-3">
                                            Cuối tuần này, hãy lên kế hoạch chiều chuộng bản thân bằng cách tắm
                                            thảo dược quý của người Dao Đỏ cùng nhiều dịch vụ hót-hòn-họt khác
                                            tại Noir. Spa, Sài Gòn. Cuối tuần này, hãy lên kế hoạch chiều. Cuối
                                            tuần này, hãy lên kế hoạch chiều
                                        </div>

                                        <div class="mt-3">
                                            <a href="" class="">
                                                <button class="
                                                btn-line px-0 color-gray-2">
                                                Đọc ngay
                                                </button>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-xl-5 pl-0">
                                <div class="list-blog-small pl-5">
                                    <div class="small-blog-item box-tin-hv pt-0">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="small-blog-item box-tin-hv">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="small-blog-item box-tin-hv">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="small-blog-item box-tin-hv">
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-7 pl-0 align-self-center">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>24 / 1 / 2021</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
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
