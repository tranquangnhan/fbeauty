<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Fbeauty Spa - @yield('title')</title>
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    {{-- Font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    {{-- Custom css --}}
    <link rel="stylesheet" href="{{ asset('Site/css') }}/main.css">

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    {{-- Owl carousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
</head>

<body>
    <header>
        <div class="box-header">
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
                                    <li class="nav-item {{ ($pathActive == 'trang-chu') ? 'active' : '' }}">
                                        <a class="nav-link" href="/trang-chu">Trang Chủ <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="button btn-datlich nav-link" href="javascript:void(0)" data-show="one">Đặt Lịch</a>
                                    </li>
                                    <li class="nav-item {{ ($pathActive == 'san-pham') ? 'active' : '' }}">
                                        <a class="nav-link" href="/san-pham">Sản Phẩm</a>
                                    </li>
                                    <li class="nav-item {{ ($pathActive == 've-chung-toi') ? 'active' : '' }}">
                                        <a class="nav-link" href="#">Về Chúng Tôi</a>
                                    </li>
                                    <li class="nav-item {{ ($pathActive == 'lien-he') ? 'active' : '' }}">
                                        <a class="nav-link" href="#">Liên Hệ</a>
                                    </li>
                                    <li class="nav-item {{ ($pathActive == 'blog') ? 'active' : '' }}">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                </ul>
                                <div class="box-icon">
                                    <div class="icon-item d-inline-block hover-scale-1">
                                        <a href=""><i class="fas fa-search color-black-2"></i></a>
                                    </div>
                                    <div class="icon-item d-inline-block hover-scale-1">
                                        <a href=""><i class="fas fa-user-alt color-black-2"></i></a>
                                    </div>
                                    <div class="icon-item d-inline-block hover-scale-1 position-relative icon-cart">
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
        @yield('main')
    </main>
    @include('Site.footer')
    @include('Site.datlich')

</body>

</html>

{{-- Boostrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
{{-- Sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Owl carousel --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

{{-- Moment JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

{{-- Custom js --}}
<script src="{{ asset('Site/js') }}/bientoancuc.js"></script>
<script src="{{ asset('Site/js') }}/main.js"></script>
<script src="{{ asset('Site/js') }}/datlich.js"></script>

{{-- Sweetalert 2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('javascript')
