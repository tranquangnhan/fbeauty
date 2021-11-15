@extends('site.layout')

@section('title')
    Dịch Vụ
@endsection

@section('main')
<div class="fa-dichvu my-5" style="margin-bottom: 5em !important;">
    <div class="container">
        <div class="w-100 text-center mb-5">
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
                        <div class="d-flex align-items-center text-2 mr-4" style="color: #000000;">Tìm kiếm theo</div>
                        <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn-3 active black-1" id="damat-tab" data-toggle="tab" href="#damat" role="tab" aria-controls="damat" aria-selected="true">Da mặt</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn-3 black-1" id="giammo-tab" data-toggle="tab" href="#giammo" role="tab" aria-controls="giammo" aria-selected="false">Danh mục</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="list-tabs">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="damat" role="tabpanel">
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">


                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            @if ($pathActive == 'dich-vu')
                                            {{ $breadcrumbArray == 'name' }}
                                        @endif

                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="giammo" role="tabpanel">
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">
                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Da Mặt 1
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
                                </div>

                                <div class="dichvu-item w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Da Mặt 1
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
                                </div>

                                <div class="dichvu-item mr-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Da Mặt 2
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
                                </div>

                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Da Mặt 2
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
                                </div>

                                <div class="dichvu-item w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Da Mặt 2
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
                                </div>

                                <div class="dichvu-item mr-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Da Mặt 2
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
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="list-tabs mt-5">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="damat" role="tabpanel" aria-labelledby="damat-tab">
                        <div class="w-100">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="giammo" role="tabpanel" aria-labelledby="giammo-tab">
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">
                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Giam Mo
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

                                </div>

                                <div class="dichvu-item w-100">
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

                                </div>

                                <div class="dichvu-item mr-0 w-100">
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

                                </div>

                                <div class="dichvu-item ml-0 w-100">
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

                                </div>

                                <div class="dichvu-item w-100">
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

                                </div>

                                <div class="dichvu-item mr-0 w-100">
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}




        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="danhmuc-listblog">
                    <div class="head-blog-item blog-title">
                        <div class="w-100 text-left d-flex align-items-center">
                            <div class="title-3 mr-4">
                                Ưa Chuộng Trong Tháng
                            </div>
                            <div class="line-main-color ml-auto" style="width: 55%"></div>
                        </div>
                    </div>

                    <div class="list-dichvu mt-4">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="item-dichvu-2">
                                    <div class="dichvu-header">
                                        <div class="box-danhmuc-small">
                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                            class="img-fluid" alt="">
                                        </div>
                                        <div class="img-dichvu">
                                            <a href="">
                                                <img src="{{ asset('Site/images') }}/blog-2-1024x576.jpg" alt="">
                                            </a>

                                        </div>
                                    </div>

                                    <div class="content mt-5">
                                        <div class="box-gia">
                                            <span class="gia">300,999 đ </span>
                                        </div>
                                        <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                            <a href="">Lăn Kim Công Nghệ Cao</a>
                                        </div>

                                        <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                            Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="item-dichvu-2">
                                    <div class="dichvu-header">
                                        <div class="box-danhmuc-small">
                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                            class="img-fluid" alt="">
                                        </div>
                                        <div class="img-dichvu">
                                            <a href="">
                                                <img src="{{ asset('Site/images') }}/blog-2-1024x576.jpg" alt="">
                                            </a>

                                        </div>
                                    </div>

                                    <div class="content mt-5">
                                        <div class="box-gia">
                                            <span class="giagiam">500,999 đ </span>
                                            <span class="gia left-bar">300,999 đ </span>
                                        </div>
                                        <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                            <a href="">Lăn Kim Công Nghệ Cao</a>
                                        </div>

                                        <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                            Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="item-dichvu-2">
                                    <div class="dichvu-header">
                                        <div class="box-danhmuc-small">
                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                            class="img-fluid" alt="">
                                        </div>
                                        <div class="img-dichvu">
                                            <a href="">
                                                <img src="{{ asset('Site/images') }}/blog-2-1024x576.jpg" alt="">
                                            </a>

                                        </div>
                                    </div>

                                    <div class="content mt-5">
                                        <div class="box-gia">
                                            <span class="giagiam">500,999 đ </span>
                                            <span class="gia left-bar">300,999 đ </span>
                                        </div>
                                        <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                            <a href="">Lăn Kim Công Nghệ Cao</a>
                                        </div>

                                        <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                            Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt.

                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="danhmuc-listblog mt-4">
                    <div class="head-blog-item blog-title">
                        <div class="w-100 text-left d-flex align-items-center">
                            <div class="title-3 mr-4">
                                Đang Giảm Giá
                            </div>
                            <div class="line-main-color ml-auto" style="width: 55%"></div>
                        </div>
                    </div>

                    <div class="list-dichvu mt-4">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="item-dichvu-2">
                                    <div class="dichvu-header">
                                        <div class="box-danhmuc-small">
                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                            class="img-fluid" alt="">
                                        </div>
                                        <div class="img-dichvu">
                                            <a href="">
                                                <img src="{{ asset('Site/images') }}/blog-2-1024x576.jpg" alt="">
                                            </a>

                                        </div>
                                    </div>

                                    <div class="content mt-5">
                                        <div class="box-gia">
                                            <span class="giagiam">500,999 đ </span>
                                            <span class="gia left-bar">300,999 đ </span>
                                        </div>
                                        <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                            <a href="">Lăn Kim Công Nghệ Cao</a>
                                        </div>

                                        <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                            Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="item-dichvu-2">
                                    <div class="dichvu-header">
                                        <div class="box-danhmuc-small">
                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                            class="img-fluid" alt="">
                                        </div>
                                        <div class="img-dichvu">
                                            <a href="">
                                                <img src="{{ asset('Site/images') }}/blog-2-1024x576.jpg" alt="">
                                            </a>

                                        </div>
                                    </div>

                                    <div class="content mt-5">
                                        <div class="box-gia">
                                            <span class="giagiam">500,999 đ </span>
                                            <span class="gia left-bar">300,999 đ </span>
                                        </div>
                                        <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                            <a href="">Lăn Kim Công Nghệ Cao</a>
                                        </div>

                                        <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                            Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="item-dichvu-2">
                                    <div class="dichvu-header">
                                        <div class="box-danhmuc-small">
                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                            class="img-fluid" alt="">
                                        </div>
                                        <div class="img-dichvu">
                                            <a href="">
                                                <img src="{{ asset('Site/images') }}/blog-2-1024x576.jpg" alt="">
                                            </a>

                                        </div>
                                    </div>

                                    <div class="content mt-5">
                                        <div class="box-gia">
                                            <span class="giagiam">500,999 đ </span>
                                            <span class="gia left-bar">300,999 đ </span>
                                        </div>
                                        <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                            <a href="">Lăn Kim Công Nghệ Cao</a>
                                        </div>

                                        <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                            Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt.

                                        </p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3">
                <div class="box-lienhe text-center mt-3">
                    <div class="child-box-tin-2 d-flex align-items-center box-small" style="background: url('{{ asset('Site/images') }}/beauty-spa.jpg');">
                        <div class="content-tin background-white">
                            <div class="box-logo">
                                <a class="" href="#">Logo Fbeauty</a>
                            </div>
                            <p class="text-small-2">Để được trực tiếp giải đáp mọi thắc mắc về dịch vụ mà Agribank cung cấp và được hướng dẫn xử lý</p>
                            <div class="w-100 text-center mt-3">
                                <a href="">
                                    <button class="btn-full">Liên hệ</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-list-cocial">
                    <div class="title-box-2">
                        <span>Mạng xã hội</span>
                    </div>

                    <div class="list-social">
                        <a href="#">
                            <span><i class="fab fa-facebook-f"></i> <span>15000</span></span>
                            <span class="fz-0em9">Like</span>
                        </a>

                        <a href="#">
                            <span><i class="fab fa-twitter"></i> <span>15000</span></span>
                            <span class="fz-0em9">Like</span>
                        </a>

                        <a href="#">
                            <span><i class="fab fa-instagram"></i><span>32k+</span></span>
                            <span class="fz-0em9">Follower</span>
                        </a>

                        <a href="#">
                            <span><i class="fab fa-youtube"></i> <span>15000</span></span>
                            <span class="fz-0em9">Subscribe</span>
                        </a>
                    </div>

                    <div class="datlich mt-4">
                        <div class="child-box-tin-2 d-flex align-items-center box-small mb-1"
                            style="background: url('{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg');">
                            <div class="content-tin background-white">
                                <div class="text-bl-1 limit-text-row-2 mb-2">
                                    <a href="" class="color-white hover-pink">Trải nghiệm cảm giác spa <br> đỉnh cao tại
                                        Fbeauty spa</a>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1 mb-1">
                                        <div class="mr-3">
                                            <a href="" class="box-danhmuc-1 maincolor">Đặt lịch</a>
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

    @include('Site.components.gioithieulieutrinh')

    <div class="container">
        <div class="w-100 text-center mb-4">
            <div class="title-small text-center" style="margin-top: 1em !important;">
                Danh Mục
            </div>
            <div class="text-4">
                Thể Loại Dịch Vụ
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4">
                <div class="danhmuc-2-item">
                    <div class="image">
                        <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-1 px-5">
                        <h5 class="title">
                            Chăm sóc da mặt
                        </h5>
                        <p class="text-2">
                            Chăm sóc da mặt là một trong các gói dịch vụ Spa cơ bản và đông khách nhất hiện nay.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="danhmuc-2-item">
                    <div class="image">
                        <img src="{{ asset('Site/images/icon') }}/acne.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-1 px-5">
                        <h5 class="title">
                            Điều trị mụn, sẹo
                        </h5>
                        <p class="text-2">
                            Điều trị mụn là phương pháp hiệu quả nhất nhằm làm sạch mụn
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="danhmuc-2-item">
                    <div class="image">
                        <img src="{{ asset('Site/images/icon') }}/facial-treatment-black.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-1 px-5">
                        <h5 class="title">
                            Dịch vụ trị nám, tàn nhang
                        </h5>
                        <p class="text-2">
                            Để che mờ những vết nám, tàng nhang trên khuôn mặt
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="danhmuc-2-item">
                    <div class="image">
                        <img src="{{ asset('Site/images/icon') }}/mesotherapy.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-1 px-5">
                        <h5 class="title">
                            Làm trẻ hóa da
                        </h5>
                        <p class="text-2">
                            Hiện nay có rất nhiều công nghệ không xâm lấn giúp làm cho
                            da săn chắc
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="danhmuc-2-item">
                    <div class="image">
                        <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-1 px-5">
                        <h5 class="title">
                            Dịch vụ massage
                        </h5>
                        <p class="text-2">
                            Massage foot và massage body có tác dụng giúp
                            giảm đau, thư giãn
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="danhmuc-2-item">
                    <div class="image">
                        <img src="{{ asset('Site/images/icon') }}/fitness-black.png" class="img-fluid" alt="">
                    </div>
                    <div class="content mt-1 px-5">
                        <h5 class="title">
                            Dịch vụ giảm béo
                        </h5>
                        <p class="text-2">
                            Tăng cân, béo phì là vấn đề mà rất nhiều chị em lo lắng
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

