<header>
    <div class="box-header">
        <div class="box-shadow-2 position-relative z-index-1 nav-fixed">
            <div class="container position-relative z-index-1 py-0">
                @include('Site.components.nav-box')
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

                    <div class="text-center title-2 box-text-header m-auto  mt-3" style="width: 65%;">
                        Nơi Gửi Gắm Niềm Tin Của Phái Đẹp
                    </div>

                    <div class="w-100 text-center mt-4">
                        <button class="button btn-2 btn-datlich btn-modal-main" type-modal="modal-datlich" data-show="one">
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

                    <div class="text-center title-2 box-text-header  mt-3">
                        Nơi Gửi Gắm Niềm Tin Của
                        <br>Phái Đẹp
                    </div>

                    <div class="w-100 text-center mt-4">
                        <button class="button btn-2 btn-datlich btn-modal-main" type-modal="modal-datlich" data-show="one">
                            ĐẶT LỊCH
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
