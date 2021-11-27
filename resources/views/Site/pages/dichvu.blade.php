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
                        <div class="d-flex align-items-center text-2 mr-4" style="color: #000000;">
                            <form class="form-inline" action="">
                                <div class="form-group">
                                  <input class="form-control" name="key" placeholder="Tìm Kiếm Dịch Vụ ....">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fas fa-search color-black-2"></i></button>
                            </form>
                        </div>
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

                            @foreach ($dichvu as $dichvuitem)
                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            {{$dichvuitem->namedm}}
                                        </div>

                                        <div class="text-8 mt-1">
                                            {{number_format($dichvuitem->dongia)}} đ
                                        </div>

                                        <div class="img-1 mt-4">
                                            <a href="{{ asset('dich-vu') }}/{{$dichvuitem->slug}}">
                                                <img class="" src="{{ asset('uploads/'.$dichvuitem->img) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="text-1 limit-text-row-1 mt-4">
                                            {{$dichvuitem->name}}
                                        </div>

                                        <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                            {{$dichvuitem->motangan}}

                                        </p>
                                    </div>
                                </div>
                            @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="giammo" role="tabpanel">
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">
                                @foreach ($danhmuc as $danhmucitem)

                                <div class="dichvu-item ml-0 w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            Da Mặt 1
                                        </div>

                                        <div class="text-8 mt-1">
                                            300.000đ
                                        </div>

                                        <div class="img-1 mt-4">
                                            <a href="{{ asset('dich-vu') }}/{{$danhmucitem->slug}}">
                                                <img class="" src="{{ asset('uploads/'.$danhmucitem->img) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="text-1 limit-text-row-1 mt-4">
                                            {{$danhmucitem->name}}
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
                    </div>
                </div>
            </div>
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
                            @foreach ($dichvu1 as $dichvu1item)

                            <div class="col-xl-4">
                                <div class="item-dichvu-2">
                                    <div class="dichvu-header">
                                        <div class="box-danhmuc-small">
                                            <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                            class="img-fluid" alt="">
                                        </div>
                                        <div class="img-dichvu">
                                            <a href="{{ asset('dich-vu') }}/{{$dichvu1item->slug}}">
                                                <img src="{{ asset('uploads/'.$dichvu1item->img) }}" alt="">
                                            </a>

                                        </div>
                                    </div>

                                    <div class="content mt-5">
                                        <div class="box-gia">
                                            <span class="gia">{{number_format($dichvu1item->dongia)}} đ </span>
                                        </div>
                                        <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                            <a href="{{ asset('dich-vu') }}/{{$dichvu1item->slug}}"> {{$dichvu1item->name}}</a>
                                        </div>

                                        <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                            {{$dichvu1item->motangan}}

                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

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
                            @foreach ($dichvu2 as $dichvu2item)

                                <div class="col-xl-4">
                                    <div class="item-dichvu-2">
                                        <div class="dichvu-header">
                                            <div class="box-danhmuc-small">
                                                <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                                class="img-fluid" alt="">
                                            </div>
                                            <div class="img-dichvu">
                                                <a href="{{ asset('dich-vu') }}/{{$dichvu2item->slug}}">
                                                    <img src="{{ asset('uploads/'.$dichvu2item->img) }}" alt="">
                                                </a>

                                            </div>
                                        </div>

                                        <div class="content mt-5">
                                            <div class="box-gia">
                                                <span class="giagiam">{{number_format($dichvu2item->dongia)}} đ </span>
                                                <span class="gia left-bar">{{number_format($dichvu2item->dongia)}} đ </span>
                                            </div>
                                            <div class="name text-1 limit-text-row-1 px-5 mt-2">
                                                <a href="{{ asset('dich-vu') }}/{{$dichvu2item->slug}}">{{$dichvu2item->name}}</a>
                                            </div>

                                            <p class="mota text-2 limit-text-row-3 mt-1 mt-2">
                                                {{$dichvu2item->motangan}}

                                            </p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3">
                @include('Site.components.box-lienhe')


                @include('Site.components.list-social')
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

