<header>
    <div class="box-header">
        <div class="nav-custom">
            <div class="container">
                <div class="box-shadow-2 position-relative z-index-1">
                    <div class="container position-relative z-index-1 p-0 bg-white">

                        <div class="nav-box">
                            <nav class="navbar navbar-expand-lg navbar-light background-color-none p-0">
                                <div class="box-logo">
                                    <a class="navbar-brand text-center logo-custom color-white" style="padding: .4em 1em;" href="#">Fbeauty</a>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse pr-4" id="navbarSupportedContent" style="flex-grow: 0">
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
            </div>
        </div>

        <div class="owl-carousel owl-theme mt-0" id="header-slide">
            <div class="item header-item">
                <div class="header-img" style="height: 500px">
                    <img src="{{ asset('Site/images') }}/spa-01.jpg"
                        class="imageHeader imageHeader_0 auto-scale-loop-forever" alt="">
                </div>

                <div class="content-1 ">
                    <div class="text-center title-6 box-text-header  mt-3">
                        {{ $namePage }}
                    </div>

                    <div class="w-100 text-center">
                        @include('Site.breadcrumb')
                    </div>

                </div>

            </div>

            <div class="item header-item">
                <div class="header-img" style="height: 500px">
                    <img src="{{ asset('Site/images') }}/spa-02.jpg" class="imageHeader imageHeader_1" alt="">
                </div>


                <div class="content-1">

                    <div class="text-center title-6 box-text-header  mt-3">
                        {{ $namePage }}
                    </div>

                    <div class="w-100 text-center">
                        @include('Site.breadcrumb')
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
