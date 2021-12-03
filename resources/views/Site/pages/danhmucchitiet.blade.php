@extends('Site.layout')

@section('title')
    Danh Mục
@endsection

@section('main')
<div class="fa-dichvu my-5" style="margin-bottom: 5em !important;">
    <div class="container">
        <div class="w-100 text-center mb-5">
            <div class="d-flex align-items-center">
                <div class="head-service-item service-title">
                    <div class="w-100 text-left">
                        <div class="title-small color-black-main">
                            LỰA CHỌN Danh Mục
                        </div>
                        <div class="title-3">
                            Bí Quyết Khỏe Và Đẹp
                        </div>
                    </div>
                </div>
                <div class="head-service-item">`
                    <div class="d-flex">
                        <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link btn-3 active black-1" id="damat-tab" data-toggle="tab" href="#damat" role="tab" aria-controls="damat" aria-selected="true">Danh Mục</a>
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

                            @foreach ($detaildichvu as $dichvuitem)
                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            {{$dichvuitem->name}}
                                        </div>

                                        <div class="text-8 mt-1">
                                            {{number_format($dichvuitem->dongiadv)}} đ
                                        </div>

                                        <div class="img-1 mt-4">
                                            <a href="{{ asset('dich-vu') }}/{{$dichvuitem->slugdv}}">
                                                <img class="" src="{{ asset('uploads/'.$dichvuitem->imgdv) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="text-1 limit-text-row-1 mt-4">
                                            {{$dichvuitem->namedv}}
                                        </div>

                                        <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                            {{$dichvuitem->motangandv}}

                                        </p>
                                    </div>
                                </div>
                            @endforeach


                            </div>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="giammo" role="tabpanel">
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">
                                @foreach ($danhmuc as $danhmucitem)

                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            {{$danhmucitem->name}}
                                        </div>

                                        <div class="img-1 mt-4">
                                            <a href="{{ asset('danh-muc') }}/{{$danhmucitem->slug}}">
                                                <img class="" src="{{ asset('uploads/'.$danhmucitem->img) }}" alt="">
                                            </a>
                                        </div>

                                        <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                            Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                            do eiusmod tempor incididunt.

                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}
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
                Thể Loại Danh Mục
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
                            Chăm sóc da mặt là một trong các gói Danh Mục Spa cơ bản và đông khách nhất hiện nay.
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
                            Danh Mục trị nám, tàn nhang
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
                            Danh Mục massage
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
                            Danh Mục giảm béo
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

