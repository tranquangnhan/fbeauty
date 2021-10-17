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

    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- Font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('Site/css') }}/main.css">

    {{-- Owl carousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
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
            <div class="box-shadow-2 position-relative z-index-1">
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
                                        <a class="nav-link" href="#">Trang Chủ <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Đặt Lịch</a>
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
                        <img src="{{ asset('Site/images') }}/spa-01.jpg" class="imageHeader imageHeader_0 auto-scale-loop-forever" alt="">
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
                            <a href="" >
                                <button class="btn-2">
                                    ĐẶT LỊCH
                                </button>
                            </a>
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
                            <a href="" >
                                <button class="btn-2">
                                    ĐẶT LỊCH
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <main class="">
         <div class="about">
            <div class="box-about position-relative">
                <div class="background-about">
                    <div class="box-images-2">
                        <div class="box-color-1"></div>
                        <div class="img-1">
                            <img class="img-fluid position-relative z-index-1" src="{{ asset('Site/images') }}/about-1.png" alt="">
                        </div>
                        <div class="img-2">
                            <img class="img-small-2 float-right position-relative z-index-1" src="{{ asset('Site/images') }}/coso6.jpg" alt="">
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
                                        Với 45 chi nhánh trải dài khắp cả nước, FBeauty Spa tự hào là chuỗi hệ thống thẩm mỹ viện hàng đầu Việt Nam
                                    </div>
                                    <div class="text-2 mt-1">
                                        Mang trong mình niềm tin về sứ mệnh đánh thức vẻ đẹp tiềm ẩn trong mỗi người, Seoul Spa luôn nỗ lực
                                        không ngừng để đem đến cho khách hàng những dịch vụ hoàn hảo nhất. Không chỉ nằm ở kết quả mà Seoul
                                        Spa còn hướng tới thẩm mỹ khỏe – đẹp – an toàn để mỗi phút giây ngắm mình trong gương là những
                                        phút giây tận hưởng hạnh phúc thật sự của mỗi khách hàng.
                                    </div>
                                </div>
                                <div class="button-box mt-3">
                                    <div class="button-item d-inline-block">
                                        <a href=""> XEM CHI TIẾT </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-service">
            {{-- <div class="service-intro position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="about-content position-relative z-index-1">
                                <div class="title-small line-before">
                                    Dich Vụ
                                </div>
                                <div class="w-100">
                                    <div class="title-1 w-100">
                                        Chăm Sóc Vẻ Đẹp <br> Của Bạn
                                    </div>
                                    <div class="text-1 mt-4">
                                        Nụ cười hài lòng, sự tin tưởng tuyệt đối của khách hàng là thước đo của sự thành công của chúng tôi
                                    </div>
                                    <div class="text-2 mt-1">
                                        Dịch vụ spa là những gói dịch vụ, liệu trình là spa kinh doanh. Như dịch vụ chăm sóc da, dịch vụ triệt lông, dịch vụ tắm trắng… Tại đây có hầu hết tất cả dịch vụ nổi bật, bạn có thể dễ dàng tìm thấy thứ mình muốn và một điều chúng tôi chắc chắn rằng, chúng tôi luôn luôn cập nhật xu hướng làm đẹp, không ngừng đổi mới để phù hợp với vẻ đẹp mà chị em hằng mong muốn.
                                    </div>
                                </div>
                                <div class="button-box mt-3">
                                    <div class="button-item d-inline-block">
                                        <a href=""> ĐẶT LỊCH NGAY </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="background-service">
                                <div class="box-images-3">
                                    <div class="img-1">
                                        <img class="img-fluid  position-relative" src="{{ asset('Site/images') }}/service-1.png" alt="">
                                    </div>
                                    <div class="img-2">
                                        <img class="im-small img-small-1" src="{{ asset('Site/images') }}/thammyvien.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

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
                                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                        <div class="text-5">
                                                            Chăm sóc da mặt
                                                        </div>
                                                        <div class="text-2">
                                                            Chăm sóc da mặt là một trong các gói dịch vụ Spa cơ bản và đông khách nhất hiện nay.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="danhmuc-item mt-5">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div class="box-icon-1">
                                                            <img src="{{ asset('Site/images/icon') }}/acne.png" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                        <div class="text-5">
                                                            Điều trị mụn, sẹo
                                                        </div>
                                                        <div class="text-2">
                                                            Điều trị mụn là phương pháp hiệu quả nhất nhằm làm sạch mụn, se khít lỗ chân lông và giảm vết sẹo thâm do mụn để lại.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="danhmuc-item mt-5">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div class="box-icon-1">
                                                            <img src="{{ asset('Site/images/icon') }}/facial-treatment-black.png" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                        <div class="text-5">
                                                            Dịch vụ trị nám, tàn nhang
                                                        </div>
                                                        <div class="text-2">
                                                            Để che mờ những vết nám, tàng nhang trên khuôn mặt, chị em sẽ mất khá nhiều thời gian để trang điểm. Việc lạm dụng trang điểm cũng gây ảnh hưởng xấu tới sức khỏe của da về sau.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="danhmuc-item mt-5">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div class="box-icon-1">
                                                            <img src="{{ asset('Site/images/icon') }}/mesotherapy.png" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                        <div class="text-5">
                                                            Làm trẻ hóa da
                                                        </div>
                                                        <div class="text-2">
                                                            Hiện nay có rất nhiều công nghệ không xâm lấn giúp làm cho da săn chắc, xóa vết nhăn, tạo đường nét trẻ trung cho cơ thể.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="danhmuc-item mt-5">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div class="box-icon-1">
                                                            <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                        <div class="text-5">
                                                            Dịch vụ massage
                                                        </div>
                                                        <div class="text-2">
                                                            Massage foot và massage body có tác dụng giúp khách hàng giảm đau, thư giãn, xua tan mệt mỏi và căng thẳng, tăng cường hệ miễn dịch.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="danhmuc-item mt-5">
                                                <div class="row">
                                                    <div class="col-xl-2">
                                                        <div class="box-icon-1">
                                                            <img src="{{ asset('Site/images/icon') }}/fitness-black.png" class="img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                        <div class="text-5">
                                                            Dịch vụ giảm béo
                                                        </div>
                                                        <div class="text-2">
                                                            Tăng cân, béo phì là vấn đề mà rất nhiều chị em lo lắng, việc chăm lo cho vóc dáng dường như đã trở thành nhu cầu thiết yếu của con người
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="button-box mt-3">
                                        <div class="button-item d-inline-block">
                                            <a href=""> ĐẶT LỊCH NGAY </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="list-service">
                <div class="container position-relative z-index-1">
                    <div class="w-100 text-center">
                        <div class="title-small text-center">
                            LỰA CHỌN DỊCH VỤ
                        </div>
                        <div class="text-3">
                            Chúng tôi có thể tư vấn trực tiếp hoặc <br> online nếu bạn mu
                        </div>
                    </div>

                    <div class="w-100">
                        <div class="box-dichvu">
                            <div class="box-sev">
                                <div class="dichvu-item ml-0">
                                    <div class="img-1">
                                        <img class="" src="{{ asset('Site/images') }}/image 8.png" alt="">
                                    </div>
                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1">
                                            Trắng Da Toàn Thân
                                        </div>
                                        <div class="text-2-pink mt-1">
                                            300.000đ
                                        </div>
                                        <div class="text-2 limit-text-row-3 mt-1">
                                            Dịch vụ điều trị mụn tại FBeauty Spa, mụn lưng với các liệu trình đúng chuẩn y khoa, chuyên sâu về da liễu

                                        </div>
                                        {{-- <div class="text-3"></div> --}}
                                    </div>
                                    <div class="w-100 text-center mb-3">
                                        <a href="">
                                            <button class="btn-full">Đặt lịch</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="dichvu-item">
                                    <div class="img-1">
                                        <img class="" src="{{ asset('Site/images') }}/woman-6557552 - Copy.jpg" alt="">
                                    </div>
                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1">
                                            Hồi Phục Tái Tạo Da Mặt
                                        </div>
                                        <div class="text-2-pink mt-1">
                                            300.000đ
                                        </div>
                                        <div class="text-2 limit-text-row-3 mt-1">
                                            Dịch vụ điều trị mụn tại FBeauty Spa, mụn lưng với các liệu trình đúng chuẩn y khoa, chuyên sâu về da liễu
                                        </div>
                                        {{-- <div class="text-3"></div> --}}
                                    </div>
                                    <div class="w-100 text-center mb-3">
                                        <a href="">
                                            <button class="btn-full">Đặt lịch</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="dichvu-item">
                                    <div class="img-1">
                                        <img class="" src="{{ asset('Site/images') }}/woman-6557552 - Copy.jpg" alt="">
                                    </div>
                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1">
                                            Hồi Phục Tái Tạo Da Mặt
                                        </div>
                                        <div class="text-2-pink mt-1">
                                            300.000đ
                                        </div>
                                        <div class="text-2 limit-text-row-3 mt-1">
                                            Dịch vụ điều trị mụn tại FBeauty Spa, mụn lưng với các liệu trình đúng chuẩn y khoa, chuyên sâu về da liễu
                                        </div>
                                        {{-- <div class="text-3"></div> --}}
                                    </div>
                                    <div class="w-100 text-center mb-3">
                                        <a href="">
                                            <button class="btn-full">Đặt lịch</button>
                                        </a>
                                    </div>
                                </div>

                                <div class="dichvu-item mr-0">

                                    <div class="img-1">
                                        <img class="" src="{{ asset('Site/images') }}/young-beautiful-woman-getting-hot-stone-spa-treatment.jpg" alt="">
                                    </div>
                                    <div class="content-1">
                                        <div class="text-1 limit-text-row-1">
                                            Massage Toàn Thân
                                        </div>
                                        <div class="text-2-pink mt-1">
                                            300.000đ
                                        </div>
                                        <div class="text-2 limit-text-row-3 mt-1">
                                            Dịch vụ điều trị mụn tại FBeauty Spa, mụn lưng với các liệu trình đúng chuẩn y khoa, chuyên sâu về da liễu
                                        </div>
                                        {{-- <div class="text-3"></div> --}}
                                    </div>
                                    <div class="w-100 text-center mb-3">
                                        <a href="">
                                            <button class="btn-full">Đặt lịch</button>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="box-product">
            <div class="list-logo mt-5">
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
                                <img src="{{ asset('Site/images/logo png') }}/murad-ad-co-logo-BCDF9C1EF8-seeklogo.com.png" alt="">
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
                        <div class="line-2"></div>
                    </div>

                    <div class="box-pro">
                        @foreach ($data as $item)
                        <div class="pro-item ml-0">
                            <div class="img-1  bg-gray-1">
                                <img style="object-fit:cover; border-radius:10px" class="img-admin" width="120" height="80" src="{{ asset('uploads/'.$item->img) }}">

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
                                    {{$item->name}}
                                </div>
                                <div class="text-2">{{$item->dongia}} vnđ</div>
                            </div>
                        </div>

                        @endforeach
                        {{-- <div class="pro-item">
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

        <div class="box-lieutrinh my-5">
            <div class="container">
                <div class="box-title">
                    <div class="title-small line-before">
                        LIỆU TRÌNH
                    </div>
                    <div class="w-100">
                        <div class="title-1 w-100">
                            Điều Trị Theo <br>
                            Liệu Trình
                        </div>
                        <div class="text-1 mt-4">
                            Liệu trình được bác sỹ thăm khám và đưa ra cụ thể đối với mỗi người
                        </div>
                    </div>
                </div>

                <div class="box-content">

                </div>

                <div class="box-images-steps">
                    <div class="steps-fa">
                        <div class="step-item ml-0">
                            <div class="img-1">
                                <img src="lieutrinh1" alt="">
                            </div>
                        </div>
                        <div class="step-item" style="margin-top: 100px"></div>

                        <div class="step-item"></div>
                        <div class="step-item mr-0" style="margin-top: 100px"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="box-blog">
            <div class="list-blog">
                <div class="blog-title-1 mb-4">
                    <div class="w-100 text-center">
                        <div class="title-small text-center">
                            TIN TỨC & SỰ KIỆN
                        </div>
                        <div class="title-3">
                            BÀI VIẾT MỚI
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 pr-0">
                            @foreach ($Blog as $item)
                            <div class="blog-bigsize">
                                <div class="img-1 w-100">
                                    <img class="img-fluid" src="{{ asset('uploads/'.$item->img) }}" alt="">
                                </div>
                                <div class="blog-content-bigsize">
                                    <div class="blog-text-1 limit-text-row-2">
                                        <a href="">{{$item ->name}}</a>
                                    </div>
                                    <div class="blog-text-2 fz-dot9em">
                                        <?php $newDate = date("d-m-Y", strtotime($item->created_at));
                                        echo $newDate; ?>
                                    </div>
                                    <div class="blog-text-3 limit-text-row-3 fz-dot9em">
                                        {{$item ->noidung}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-xl-6 pl-0 bg-white box-shadow-1">
                            <div class="list-blog-small">
                                @foreach ($Blog2 as $item)
                                    
                                <div class="small-blog-item">
                                    <div class="row mt-2">
                                        <div class="col-xl-5">
                                            <div class="img-1">
                                                <img class="img-fluid" src="{{asset('uploads/'.$item->img)}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-7 pl-0 align-self-center">
                                            <div class="text-bl-1 limit-text-row-2 ">
                                                <a href="" class="hover-pink">{{$item->name}}</a>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 color-gray-2">
                                                    <?php $newDate = date("d-m-Y", strtotime($item->created_at));
                                                    echo $newDate; ?>
                                                </div>
                                                <div class="col-xl-6 text-right">
                                                    <a href="" class="">
                                                        <button class="btn-line color-gray-2">
                                                            Đọc ngay
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

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

        <div class="box-guimail p-2">
            <div class="w-100 text-center position-relative" style="z-index: 30">
                <div class="guimail-content">
                    <div class="logo-z mt-5">
                        <a class="navbar-brand text-center logo-custom" style="background: #FBAAA9" href="#">FPT <br>BEAUTY SPA</a>
                    </div>

                    <p>
                        Để lại email cho FBeauty, bạn sẽ nhận được thông tin <br> khuyến mãi sớm nhất từ chúng tôi
                    </p>
                    <form action="">

                        <input type="text" placeholder="Email của bạn">
                        <button type="submit" class="btn-nor">Gửi</button>
                    </form>
                </div>

                {{-- <div class="background-img img-1">
                    <img src="{{ asset('Site/images') }}/Rectangle 184.png" alt="">
                </div> --}}
            </div>
        </div>


    </main>
    <footer>

    </footer>
</body>

</html>
{{-- Jquery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

{{-- Boostrap --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

{{-- Sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Owl carousel --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

{{-- Custom js --}}
<script src="{{ asset('Site/js') }}/main.js"></script>
