<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FBEAUTY SPA</title>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- Font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('Site/css') }}/main.css">

    {{-- Owl carousel --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
</head>

<body>
    <header>
        <div class="box-header">
            {{-- <div class="background-header">
                <div class="box-images">
                    <div class="img-1">
                        <img class="" src="{{ asset('Site/images') }}/image-header-1.png" alt="">
                        <div class="line-1"></div>
                    </div>
                    <div class="imgs-2">
                        <img class="im-small img-small-1" src="{{ asset('Site/images') }}/image-header-2.png" alt="">
                        <img class="im-small img-small-2" src="{{ asset('Site/images') }}/image-header-3.png" alt="">
                    </div>
                </div>
            </div> --}}
            {{-- <div class="big-title title-font title-header-custom">Beauty</div> --}}
            <div class="box-shadow-2 position-relative z-index-1 nav-fixed">
                <div class="container position-relative z-index-1 py-3">

                    <div class="nav-box">
                        <nav class="navbar navbar-expand-lg navbar-light background-color-none p-0">
                            <div class="box-logo">
                                <a class="navbar-brand text-center logo-custom" href="#">LOGO <br>BEAUTY</a>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Trang Chủ <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="button btn-datlich nav-link" href="javascript:void(0)"
                                            data-show="one">Đặt Lịch</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Sản Phẩm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Về Chúng Tôi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Liên Hệ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                </ul>
                                <div class="box-icon">
                                    <div class="icon-item d-inline-block">
                                        <a href=""><i class="fas fa-search color-black-2"></i></a>
                                    </div>
                                    <div class="icon-item d-inline-block">
                                        <a href=""><i class="fas fa-user-alt color-black-2"></i></a>
                                    </div>
                                    <div class="icon-item d-inline-block position-relative icon-cart">
                                        <div class="number-cart">0</div>
                                        <a href=""><i class="fas fa-shopping-cart color-black-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="owl-carousel owl-theme" id="header-slide">
                <div class="item header-item">
                    <div class="header-img">
                        <img src="{{ asset('Site/images') }}/spa-01.jpg"
                            class="imageHeader imageHeader_0 auto-scale-loop-forever" alt="">
                    </div>

                    <div class="content-1 ">
                        <div class="w-100 text-center title-small-1">
                            SPA & BEAUTY
                        </div>

                        <div class="text-center title-2 box-text-header  mt-2">
                            Nơi Gửi Gắm Niềm Tin Của
                            <br>Phái Đẹp
                        </div>

                        <div class="w-100 text-center mt-4">
                            <button data-show="one" class="button btn-2 btn-datlich">
                                ĐẶT LỊCH
                            </button>
                        </div>
                    </div>

                </div>

                <div class="item header-item">
                    <div class="header-img">
                        <img src="{{ asset('Site/images') }}/spa-02.jpg" class="imageHeader imageHeader_1" alt="">
                    </div>


                    <div class="content-1">
                        <div class="w-100 text-center title-small-1">
                            SPA & BEAUTY
                        </div>

                        <div class="text-center title-2 box-text-header  mt-2">
                            Nơi Gửi Gắm Niềm Tin Của
                            <br>Phái Đẹp
                        </div>

                        <div class="w-100 text-center mt-4">
                            <button data-show="one" class="button btn-2 btn-datlich">
                                ĐẶT LỊCH
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <main class="">
         <div class=" about">
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
                                    <div class="title-3 color-white">
                                        Bí Quyết Khỏe Và Đẹp
                                    </div>
                                </div>
                            </div>
                            <div class="head-service-item">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center text-2 mr-4" style="color: #f2f2f2;">Tìm kiếm
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
                        <div class="tab-content" id="myTabContent-1">
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
                                                        <img class="" src=" {{ asset('Site/images') }}/image8.png" alt="">
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
                                                        <img class="" src=" {{ asset('Site/images') }}/image8.png" alt="">
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
                                                        <img class="" src=" {{ asset('Site/images') }}/image8.png" alt="">
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
                                                        <img class="" src=" {{ asset('Site/images') }}/image
                                                            8.png" alt="">
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
                                                        <img class="" src=" {{ asset('Site/images') }}/image
                                                            8.png" alt="">
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
            <div class="list-logo">
                <div class="container">
                    <div class="owl-carousel owl-theme" id="logo-slide">
                        <div class="item logo-item">
                            <div class="img-1">
                                <img src="{{ asset('Site/images/logo png') }}/Eucerin-logo.png" alt="">
                            </div>
                        </div>
                        <div class="item logo-item">
                            <div class="img-1">
                                <img src="{{ asset('Site/images/logo png') }}/image 92.png" alt="">
                            </div>
                        </div>
                        <div class="item logo-item">
                            <div class="img-1">
                                <img src="{{ asset('Site/images/logo png') }}/image 93.png" alt="">
                            </div>
                        </div>
                        <div class="item logo-item">
                            <div class="img-1">
                                <img src="{{ asset('Site/images/logo png') }}/image 95.png" alt="">
                            </div>
                        </div>
                        <div class="item logo-item">
                            <div class="img-1">
                                <img src="{{ asset('Site/images/logo png') }}/Kiehl's_logo.svg.png" alt="">
                            </div>
                        </div>
                        <div class="item logo-item">
                            <div class="img-1">
                                <img src="{{ asset('Site/images/logo png') }}/murad-ad-co-logo-BCDF9C1EF8-seeklogo.com.png"
                                    alt="">
                            </div>
                        </div>

                        <div class="item logo-item">
                            <div class="img-1">
                                <img src="{{ asset('Site/images/logo png') }}/Rectangle-257.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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

                    <div class="box-pro">
                        <div class="owl-carousel owl-theme" id="product-slide">
                            <div class="pro-fa-item">
                                <div class="pro-item">
                                    <div class="img-1 bg-gray-1">
                                        <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                        <div class="box-icon">
                                            <div class="icon-item d-inline-block">
                                                <a href=""><i class="fas fa-search color-black-1"></i></a>
                                            </div>
                                            <div class="icon-item d-inline-block position-relative icon-cart">
                                                <div class="cal-icon-cart">+</div>
                                                <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1 ">
                                            Rational Household Labor Supply – JSTOR
                                        </div>
                                        <div class="text-2">300.000đ</div>
                                    </div>
                                </div>
                            </div>

                            <div class="pro-fa-item">
                                <div class="pro-item">
                                    <div class="img-1 bg-gray-1">
                                        <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                        <div class="box-icon">
                                            <div class="icon-item d-inline-block">
                                                <a href=""><i class="fas fa-search color-black-1"></i></a>
                                            </div>
                                            <div class="icon-item d-inline-block position-relative icon-cart">
                                                <div class="cal-icon-cart">+</div>
                                                <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1 ">
                                            Rational Household Labor Supply – JSTOR
                                        </div>
                                        <div class="text-2">300.000đ</div>
                                    </div>
                                </div>
                            </div>

                            <div class="pro-fa-item">
                                <div class="pro-item">
                                    <div class="img-1 bg-gray-1">
                                        <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                        <div class="box-icon">
                                            <div class="icon-item d-inline-block">
                                                <a href=""><i class="fas fa-search color-black-1"></i></a>
                                            </div>
                                            <div class="icon-item d-inline-block position-relative icon-cart">
                                                <div class="cal-icon-cart">+</div>
                                                <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1 ">
                                            Rational Household Labor Supply – JSTOR
                                        </div>
                                        <div class="text-2">300.000đ</div>
                                    </div>
                                </div>
                            </div>

                            <div class="pro-fa-item">
                                <div class="pro-item">
                                    <div class="img-1 bg-gray-1">
                                        <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                        <div class="box-icon">
                                            <div class="icon-item d-inline-block">
                                                <a href=""><i class="fas fa-search color-black-1"></i></a>
                                            </div>
                                            <div class="icon-item d-inline-block position-relative icon-cart">
                                                <div class="cal-icon-cart">+</div>
                                                <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1 ">
                                            Rational Household Labor Supply – JSTOR
                                        </div>
                                        <div class="text-2">300.000đ</div>
                                    </div>
                                </div>
                            </div>

                            <div class="pro-fa-item">
                                <div class="pro-item">
                                    <div class="img-1 bg-gray-1">
                                        <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                        <div class="box-icon">
                                            <div class="icon-item d-inline-block">
                                                <a href=""><i class="fas fa-search color-black-1"></i></a>
                                            </div>
                                            <div class="icon-item d-inline-block position-relative icon-cart">
                                                <div class="cal-icon-cart">+</div>
                                                <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1 ">
                                            Rational Household Labor Supply – JSTOR
                                        </div>
                                        <div class="text-2">300.000đ</div>
                                    </div>
                                </div>
                            </div>

                            <div class="pro-fa-item">
                                <div class="pro-item">
                                    <div class="img-1 bg-gray-1">
                                        <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                        <div class="box-icon">
                                            <div class="icon-item d-inline-block">
                                                <a href=""><i class="fas fa-search color-black-1"></i></a>
                                            </div>
                                            <div class="icon-item d-inline-block position-relative icon-cart">
                                                <div class="cal-icon-cart">+</div>
                                                <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1 ">
                                            Rational Household Labor Supply – JSTOR
                                        </div>
                                        <div class="text-2">300.000đ</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="pro-item ml-0">
                            <div class="img-1  bg-gray-1">
                                <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                <div class="box-icon">
                                    <div class="icon-item d-inline-block">
                                        <a href=""><i class="fas fa-search color-black-1"></i></a>
                                    </div>
                                    <div class="icon-item d-inline-block position-relative icon-cart">
                                        <div class="cal-icon-cart">+</div>
                                        <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="content-1">
                                <div class="text-1 limit-text-row-1 ">
                                    Rational Household Labor Supply – JSTOR
                                </div>
                                <div class="text-2">300.000đ</div>
                            </div>
                        </div>


                        <div class="pro-item mr-0">
                            <div class="img-1 bg-gray-1">
                                <img src="{{ asset('Site/images') }}/hyarunic-removebg-preview.png" alt="">
                                <div class="box-icon">
                                    <div class="icon-item d-inline-block">
                                        <a href=""><i class="fas fa-search color-black-1"></i></a>
                                    </div>
                                    <div class="icon-item d-inline-block position-relative icon-cart">
                                        <div class="cal-icon-cart">+</div>
                                        <a href=""><i class="fas fa-shopping-cart color-black-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="content-1">
                                <div class="text-1 limit-text-row-1 ">
                                    Rational Household Labor Supply – JSTOR
                                </div>
                                <div class="text-2">300.000đ</div>
                            </div>
                        </div> --}}


                    </div>
                    <div class="w-100 text-center mt-3">
                        <a href="">
                            <button class="btn-full">Xem tất cả</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-lieutrinh mt-5">
            <div class="bg-lieutrinh">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <div class="box-title-lieutrinh">
                                <div class="title-3">
                                    Điều Trị <br> Theo Liệu Trình
                                </div>

                                <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                    Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt.
                                </p>

                                <div class="w-100 text-left mb-4">
                                    <button data-show="one" class="button btn-5 btn-datlich">Đặt lịch</button>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="cac-buoc-lieutrinh">
                                <div class="lieutrinh-item">
                                    {{-- <div class="number-1">
                                        1
                                    </div> --}}

                                    <div class="title-5">
                                        Kế Hoạch
                                    </div>
                                    <div class="icon-1 mt-4">
                                        <img class="" src=" {{ asset('Site/images/icon') }}/task.png"
                                            alt="">
                                    </div>
                                    <div class="text-2 mt-4 color-white font-weight-300">
                                        Lorem ipsum dolor sit amet, con sectetur adipisicing elit
                                    </div>
                                </div>

                                <div class="lieutrinh-item">
                                    {{-- <div class="number-1">
                                        1
                                    </div> --}}

                                    <div class="title-5">
                                        Theo Dõi
                                    </div>

                                    <div class="icon-1 mt-4">
                                        <img class="" src=" {{ asset('Site/images/icon') }}/doctor.png"
                                            alt="">
                                    </div>

                                    <div class="text-2 mt-4 color-white font-weight-300">
                                        Lorem ipsum dolor sit amet, con sectetur adipisicing elit
                                    </div>
                                </div>

                                <div class="lieutrinh-item">
                                    {{-- <div class="number-1">
                                        1
                                    </div> --}}

                                    <div class="title-5">
                                        Hỗ Trợ
                                    </div>

                                    <div class="icon-1 mt-4">
                                        <img class="" src="
                                            {{ asset('Site/images/icon') }}/customer-service.png" alt="">
                                    </div>

                                    <div class="text-2 mt-4 color-white font-weight-300">
                                        Lorem ipsum dolor sit amet, con sectetur adipisicing elit
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-blog">
            <div class="list-blog">
                <div class="mb-4">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="head-blog-item blog-title">
                                <div class="w-100 text-left">
                                    <div class="title-small">
                                        TIN TỨC & SỰ KIỆN
                                    </div>
                                    <div class="title-3">
                                        Bí Quyết Khỏe Và Đẹp
                                    </div>
                                </div>
                            </div>

                            <div class="head-blog-item">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center text-2 mr-4">Tìm kiếm theo</div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn-3 active" id="new-tab" data-toggle="tab" href="#new"
                                                role="tab" aria-controls="new" aria-selected="true">Mới nhất</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn-3" id="lastweek-tab" data-toggle="tab"
                                                href="#lastweek" role="tab" aria-controls="lastweek"
                                                aria-selected="false">Tuần trước</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="list-tabs">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                <div class="row">
                                    <div class="col-xl-7 pr-0">
                                        <div class="blog-bigsize">
                                            <div class="box-danhmuc">
                                                Sức khỏe
                                            </div>

                                            <div class="img-1 w-100">
                                                <img class="img-fluid"
                                                    src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
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
                                                    <a href=""
                                                        class="">
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
                                        <div class="list-blog-small">
                                            <div class="small-blog-item">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small-blog-item mt-4">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/image 8 (2).png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small-blog-item mt-4">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/nhung-loi-ich-cua-viec-di-spa-ban-nen-biet-va-trai-nghiem-aki1-min-scaled.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small-blog-item mt-4">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/nhung-loi-ich-cua-viec-di-spa-ban-nen-biet-va-trai-nghiem-aki1-min-scaled.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-100 my-4">
                                                <a href="">
                                                    <button class="btn-full">Xem thêm</button>
                                                </a>
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
                                                <img class="img-fluid"
                                                    src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
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
                                                    <a href=""
                                                        class="">
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
                                        <div class="list-blog-small">
                                            <div class="small-blog-item">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small-blog-item mt-4">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/image 8 (2).png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small-blog-item mt-4">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/nhung-loi-ich-cua-viec-di-spa-ban-nen-biet-va-trai-nghiem-aki1-min-scaled.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="small-blog-item mt-4">
                                                <div class="row">
                                                    <div class="col-xl-5">
                                                        <div class="img-1">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Site/images') }}/nhung-loi-ich-cua-viec-di-spa-ban-nen-biet-va-trai-nghiem-aki1-min-scaled.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-7 pl-0 align-self-center">
                                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                                            <a href="" class="hover-pink">Review Noir. Spa, Trải
                                                                Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 color-gray-2 hover-color-black">
                                                                21/9/2021
                                                            </div>
                                                            <div class="col-xl-6 text-right">
                                                                <a href=""
                                                                    class="">
                                                                    <button class="
                                                                    btn-line color-gray-2">
                                                                    Đọc ngay
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w-100 my-4">
                                                <a href="">
                                                    <button class="btn-full">Xem thêm</button>
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

        <div class="box-guimail p-2">
            <div class="w-100 text-center position-relative" style="z-index: 30;margin: 7em 0em;">
                <div class="guimail-content">
                    <div class="container">
                        <div class="w-100 text-center">
                            <div class="title-small text-center">
                                ĐỂ LẠI EMAIL
                            </div>
                        </div>

                        <div class="title-3">
                            Đăng Ký Và Là Người Đầu Tiên Biết Về <br>Các Sản Phẩm Đặc Biệt, Sự Kiện Và Hơn Thế Nữa!
                        </div>
                        <form action="" class="form-subscribe">
                            <div class="bg-white div-subscribe">
                                <input type="text" placeholder="Nhập email của bạn">
                                <button type="submit" class="btn-nor">Gửi email</button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="background-img img-1">
                    <img src="{{ asset('Site/images') }}/Rectangle 184.png" alt="">
                </div> --}}
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-3 pr-5">
                        <div class="w-100 text-left mx-auto">
                            <div class="box-logo">
                                <a class="navbar-brand m-0 text-center logo-custom" style="background: white"
                                    href="#">LOGO <br>BEAUTY</a>
                            </div>

                            <div class="text-6 text-left" style="margin-top: 2em">
                                FBeauty Spa luôn nỗ lực không ngừng để đem đến cho khách hàng những dịch vụ hoàn hảo
                                nhất. Thẩm mỹ khỏe – đẹp – an toàn để mỗi phút giây ngắm mình trong gương là những phút
                                giây tận hưởng hạnh phúc thật sự của mỗi khách hàng.
                            </div>

                            <div class="list-icon d-flex justify-content-left ">
                                <div class="icon-item ml-0">
                                    <a href="" class="link">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>

                                <div class="icon-item">
                                    <a href="" class="link">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>

                                <div class="icon-item">
                                    <a href="" class="link">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>

                                <div class="icon-item">
                                    <a href="" class="link">
                                        <i class="fab fa-tumblr"></i>
                                    </a>
                                </div>

                                <div class="icon-item">
                                    <a href="" class="link">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 pl-5">
                        <div class="row">
                            <div class="col-4">
                                <div class="footer-menu">
                                    <div class="title-4 d-inline-block">
                                        Danh Mục
                                    </div>

                                    <div class="content-1">

                                        <div class="menu-item text-6">
                                            <a href="">Chăm sóc da mặt
                                            </a>
                                        </div>

                                        <div class="menu-item text-6">
                                            <a href="">Điều trị mụn, sẹo
                                            </a>
                                        </div>

                                        <div class="menu-item text-6">
                                            <a href="">Dịch vụ trị nám, tàn nhang
                                            </a>
                                        </div>

                                        <div class="menu-item text-6">
                                            <a href="">Làm trẻ hóa da
                                            </a>
                                        </div>

                                        <div class="menu-item text-6">
                                            <a href="">Dịch vụ massage
                                            </a>
                                        </div>

                                        <div class="menu-item text-6">
                                            <a href="">Dịch vụ giảm béo

                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="footer-menu">
                                    <div class="title-4 d-inline-block">
                                        Cơ Sở
                                    </div>

                                    <div class="content-1">

                                        <div class="menu-item text-6">
                                            <a href="">391A Nam Kỳ Khởi Nghĩa, Phường 14, Quận 3, Thành phố Hồ Chí
                                                Minh</a>
                                        </div>

                                        <div class="menu-item text-6">
                                            <a href="">778/B1 Nguyễn Kiệm, Phường 3, Phú Nhuận, Thành phố Hồ Chí
                                                Minh</a>
                                        </div>

                                        <div class="menu-item text-6">
                                            <a href="">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận
                                                12, Thành phố Hồ Chí Minh</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-100 footer-copyright">
            Copyright ©2021 Beauty & Spa. All Rights Reserved
        </div>
    </footer>

    <div id="modal-container">
        <div class="modal-background">
            <div class="close-modal background-close"></div>
            <div class="modal" style="width: 50%;height: 90%;">
                <div class="noidung-modal h-100 w-100">
                    <div class="row h-100">
                        <div class="col-xl-12 p-0">
                            <div class="box-content-datlich h-100">
                                <div class="modal-content-1 h-100">

                                    <div class="datlich-step h-100 active" data-step="0">
                                        <div class="title-3 color-main">Nhập SĐT & Chọn cơ sở</div>
                                        <div class="text-7">Nếu bạn chưa biết chọn dịch vụ nào hãy chọn ‘’Tôi muốn tư vấn’’ </div>
                                        <div class="list-select position-relative">
                                            <div class="box-spinner">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                  </div>
                                            </div>
                                            <form action="" class="form-phone-number">
                                                <div class="div-phone-number">
                                                    <input type="number" placeholder="Nhập số điện thoại của bạn">
                                                </div>
                                            </form>

                                            <div class="select-custom">
                                                <div class="select-fa">
                                                    <div class="name-select d-flex align-items-center" data-mov="13">
                                                        <div class="tendanhmuc value-coso" data-coso="0">
                                                            Chọn cơ sở
                                                        </div>
                                                        <div class="icon-1">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-option coso-fa" slide-mov="13">
                                                        <div class="option-item coso-fa date-bg">
                                                            <div class="pickcoso position-relative z-index-999" data-option-coso="1">1 391A Nam Kỳ Khởi Nghĩa, Phường 14, Quận 3, Thành phố Hồ Chí Minh</div>
                                                        </div>

                                                        <div class="option-item coso-fa date-bg">
                                                            <div class="pickcoso position-relative z-index-999" data-option-coso="2">2 391A Nam Kỳ Khởi Nghĩa, Phường 14, Quận 3, Thành phố Hồ Chí Minh</div>
                                                        </div>

                                                        <div class="option-item coso-fa date-bg">
                                                            <div class="pickcoso position-relative z-index-999" data-option-coso="2">3 391A Nam Kỳ Khởi Nghĩa, Phường 14, Quận 3, Thành phố Hồ Chí Minh</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="control-slide-datlich d-flex justify-content-end">
                                            <button type="button" class="button-href-basic check-next-step">Xác nhận</button>
                                        </div>
                                    </div>

                                    <div class="datlich-step h-100" data-step="1">
                                        <div class="title-3 color-main">Chọn dịch vụ</div>
                                        <div class="text-7">Nếu bạn chưa biết chọn dịch vụ nào hãy chọn ‘’Tôi muốn tư vấn’’ </div>
                                        <div class="list-select">
                                            <div class="select-custom">
                                                <div class="select-fa">
                                                    <div class="name-select d-flex align-items-center" data-mov="1">
                                                        <div class="tendanhmuc">
                                                            Da mặt
                                                        </div>
                                                        <div class="icon-1">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-option" slide-mov="1">
                                                        <label class="option-item" for="exampleCheck1">
                                                            <div class="row  align-items-center">
                                                                <div class="col-xl-9">
                                                                    <div class="form-check d-flex  align-items-center">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                        <div class="mid-content">
                                                                            <div class="d-flex  align-items-center">
                                                                                {{-- <div class="image-dichvu img-1 d-inline-block">
                                                                                    <img src="{{ asset('Site/images') }}/image8.png" alt="">
                                                                                </div> --}}
                                                                                <div class="ml-2">
                                                                                    <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                                </div>

                                                                            </div>
                                                                                {{-- <div class="mota mb-1">
                                                                                    <p>
                                                                                        Điều này khiến chi nhiều bạn thắc mắc là nên nặn mụn thế nào là hợp lí?
                                                                                        Có nên đi spa nặn mụn để đem lại hiệu quả triệt để. Nặn mụn là hành động không sai khi bạn có mụn,
                                                                                        những phải cần làm đúng theo những cách chuẩn y khoa để không gây ra những hậu quả khác.
                                                                                    </p>
                                                                                </div>

                                                                                <div class="w-100 text-left mt-0">
                                                                                    <a href="">
                                                                                        <button class="button-href-basic">Xem chi tiết</button>
                                                                                    </a>
                                                                                </div> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-3 text-right">
                                                                    <div class="gia-dichvu giagoc d-inline-block">300,000đ</div>
                                                                    <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                                </div>
                                                            </div>
                                                        </label>

                                                        <label class="option-item" for="exampleCheck2">
                                                            <div class="row  align-items-center">
                                                                <div class="col-xl-9">
                                                                    <div class="form-check d-flex  align-items-center">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                        <div class="mid-content">
                                                                            <div class="d-flex  align-items-center">
                                                                                <div class="ml-2">
                                                                                    <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-3 text-right">
                                                                    {{-- <div class="gia-dichvu giagoc d-inline-block">300,000đ</div> --}}
                                                                    <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                                </div>
                                                            </div>
                                                        </label>

                                                        <label class="option-item" for="exampleCheck4">
                                                            <div class="row  align-items-center">
                                                                <div class="col-xl-9">
                                                                    <div class="form-check d-flex  align-items-center">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                                        <div class="mid-content">
                                                                            <div class="d-flex  align-items-center">
                                                                                <div class="ml-2">
                                                                                    <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-3 text-right">
                                                                    {{-- <div class="gia-dichvu giagoc d-inline-block">300,000đ</div> --}}
                                                                    <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                                </div>
                                                            </div>
                                                        </label>

                                                        <label class="option-item" for="exampleCheck3">
                                                            <div class="row  align-items-center">
                                                                <div class="col-xl-9">
                                                                    <div class="form-check d-flex  align-items-center">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                                        <div class="mid-content">
                                                                            <div class="d-flex  align-items-center">
                                                                                <div class="ml-2">
                                                                                    <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-3 text-right">
                                                                    {{-- <div class="gia-dichvu giagoc d-inline-block">300,000đ</div> --}}
                                                                    <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                                </div>
                                                            </div>
                                                        </label>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="select-custom">
                                                <div class="select-fa">
                                                    <div class="name-select d-flex align-items-center" data-mov="2">
                                                        <div class="tendanhmuc">
                                                            Da mặt
                                                        </div>
                                                        <div class="icon-1">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-option" slide-mov="2">
                                                        <label class="option-item" for="exampleCheck5">
                                                            <div class="row  align-items-center">
                                                                <div class="col-xl-9">
                                                                    <div class="form-check d-flex  align-items-center">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                                        <div class="mid-content">
                                                                            <div class="d-flex  align-items-center">
                                                                                {{-- <div class="image-dichvu img-1 d-inline-block">
                                                                                    <img src="{{ asset('Site/images') }}/image8.png" alt="">
                                                                                </div> --}}
                                                                                <div class="ml-2">
                                                                                    <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-3 text-right">
                                                                    <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                                </div>
                                                            </div>
                                                        </label>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="select-custom">
                                                <div class="select-fa">
                                                    <div class="name-select d-flex align-items-center" data-mov="3">
                                                        <div class="tendanhmuc">
                                                            Da mặt
                                                        </div>
                                                        <div class="icon-1">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-option" slide-mov="3">
                                                        <label class="option-item" for="exampleCheck6">
                                                            <div class="row  align-items-center">
                                                                <div class="col-xl-9">
                                                                    <div class="form-check d-flex  align-items-center">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                                                        <div class="mid-content">
                                                                            <div class="d-flex  align-items-center">
                                                                                {{-- <div class="image-dichvu img-1 d-inline-block">
                                                                                    <img src="{{ asset('Site/images') }}/image8.png" alt="">
                                                                                </div> --}}
                                                                                <div class="ml-2">
                                                                                    <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-3 text-right">
                                                                    <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                                </div>
                                                            </div>
                                                        </label>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-xl-6">
                                                <div class="form-group form-check mr-auto mb-0">
                                                    <input type="checkbox" class="form-check-input" id="em">
                                                    <label class="form-check-label button-href-basic" for="em">Tôi muốn tư vấn</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 text-right">
                                                <div class="">
                                                    Tổng : <span class="tongtiendichvu"><b>0</b></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-slide-datlich d-flex align-items-center">
                                            <button type="button" class="button-href-basic prev-step mr-auto">Quay lại</button>
                                            <button type="button" class="button-href-basic next-step">Tiếp theo</button>
                                        </div>
                                    </div>

                                    <div class="datlich-step h-100" data-step="2">
                                        <div class="title-3 color-main">Thời gian bạn đến</div>
                                        <div class="text-7">Để tiết kiệm thời gian cho bạn hãy đặt trước khi đến spa</div>
                                        <div class="list-select position-relative">
                                            <div class="box-spinner">
                                                <div class="spinner-border" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                  </div>
                                            </div>
                                            <div class="select-custom">
                                                <div class="select-fa">
                                                    <div class="name-select d-flex align-items-center" data-mov="9">
                                                        <div class="tendanhmuc value-date">
                                                            Hôm nay, T2 (27/9)
                                                        </div data-date="27/9/2001">
                                                        <div class="icon-1">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-option" slide-mov="9">
                                                        <div class="option-item date-bg">
                                                            <div class="pickdate" data-option-date="27/9/2001">Hôm nay, T2 (27/9)</div>
                                                        </div>

                                                        <div class="option-item date-bg">
                                                            <div class="pickdate" data-option-date="28/9/2001">Ngày mai, T3 (28/9)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="select-custom">
                                                <div class="select-fa">
                                                    <div class="name-select d-flex align-items-center" data-mov="11">
                                                        <div class="tendanhmuc value-nhanvien">
                                                            Spa chọn chuyên viên giúp bạn
                                                        </div data-nhanvien="0">
                                                        <div class="icon-1">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-option" slide-mov="11">
                                                        <div class="option-item option-nhanvien date-bg clicked">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="0">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">Spa chọn chuyên viên giúp bạn</div>
                                                            </div>
                                                        </div>

                                                        <div class="option-item option-nhanvien date-bg">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="2">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">
                                                                    Hằng Nguyễn Thị
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="option-item option-nhanvien date-bg">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="3">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">
                                                                    Hằng Nguyễn Thị
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="option-item option-nhanvien date-bg">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="4">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">
                                                                    Hằng Nguyễn Thị
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="option-item option-nhanvien date-bg">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="5">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">
                                                                    Hằng Nguyễn Thị
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="option-item option-nhanvien date-bg">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="6">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">
                                                                    Hằng Nguyễn Thị
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="option-item option-nhanvien date-bg">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="7">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">
                                                                    Hằng Nguyễn Thị
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="option-item option-nhanvien date-bg">
                                                            <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="8">
                                                                <div class="img-1 border-image">
                                                                    <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                                </div>

                                                                <div class="name-nhanvien">
                                                                    Hằng Nguyễn Thị
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="select-custom">
                                                <div class="select-fa">
                                                    <div class="name-select d-flex align-items-center" data-mov="10">
                                                        <div class="tendanhmuc value-time">
                                                            Chọn thời gian
                                                        </div data-time="0">
                                                        <div class="icon-1">
                                                            <i class="fas fa-caret-down"></i>
                                                        </div>
                                                    </div>

                                                    <div class="list-option mb-3" slide-mov="10">
                                                        <div class="option-item time-bg">
                                                            <div class="picktime" data-option-time="8:00">8h00</div>
                                                        </div>

                                                        <div class="option-item time-bg">
                                                            <div class="picktime" data-option-time="8:30">8h30</div>
                                                        </div>

                                                        <div class="option-item time-bg time-close">
                                                            <div class="picktime" data-option-time="10:00">10h00</div>
                                                        </div>

                                                        <div class="option-item time-bg time-close">
                                                            <div class="picktime" data-option-time="10:30">10h30</div>
                                                        </div>

                                                        <div class="option-item time-bg">
                                                            <div class="picktime" data-option-time="11:00">11h00</div>
                                                        </div>

                                                        <div class="option-item time-bg">
                                                            <div class="picktime" data-option-time="11:30">11h30</div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="control-slide-datlich d-flex">
                                            <button type="button" class="button-href-basic prev-step mr-auto">Quay lại</button>
                                            <button type="button" class="button-href-basic next-step">Tiếp theo</button>
                                        </div>
                                    </div>

                                    <div class="datlich-step h-100" data-step="3">
                                        Long 3

                                        <div class="control-slide-datlich d-flex">
                                            <button type="button" class="prev-step mr-auto">Quay lại</button>
                                            <button type="button" class="next-step">Tiếp theo</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="col-xl-6 pl-0 position-relative z-index-999">
                            <div class="bg-modal-1">

                            </div>
                        </div> --}}
                    </div>

                    <div class="close close-modal button-close-modal">
                        x
                    </div>
                </div>
                {{-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                            <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                        </svg> --}}
            </div>
        </div>
    </div>
</body>

</html>
{{-- Jquery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

{{-- Boostrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
{{-- Sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Owl carousel --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

{{-- Custom js --}}
<script src="{{ asset('Site/js') }}/main.js"></script>
