<header>
    <div class="box-header">
        <div class="box-shadow-2 position-relative z-index-1 nav-fixed">
            <div class="container position-relative z-index-1 py-3">
                @include('Site.components.nav-box')
            </div>
        </div>

        <div class="owl-carousel owl-theme" id="header-slide">
            <div class="item header-item">
                <div class="header-img" style="height: 500px">
                    <img src="{{ asset('Site/images') }}/spa-01.jpg"
                        class="imageHeader imageHeader_0 auto-scale-loop-forever" alt="">
                </div>

                <div class="content-1 ">
                    <div class="w-100 text-center">
                        @include('Site.components.breadcrumb')
                    </div>
                    <div class="text-center title-6 box-text-header  mt-0">
                        {{ $namePage }}
                    </div>



                </div>

            </div>

            <div class="item header-item">
                <div class="header-img" style="height: 500px">
                    <img src="{{ asset('Site/images') }}/spa-02.jpg" class="imageHeader imageHeader_1" alt="">
                </div>


                <div class="content-1">
                    <div class="w-100 text-center">
                        @include('Site.components.breadcrumb')
                    </div>
                    <div class="text-center title-6 box-text-header  mt-0">
                        {{ $namePage }}
                    </div>


                </div>

            </div>
        </div>
    </div>
</header>
