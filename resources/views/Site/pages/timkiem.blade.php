@extends('Site.layout')

@section('title')
    Dịch Vụ
@endsection

@section('main')
@php
    use app\Http\Controllers\Controller;
@endphp
<div class="fa-dichvu my-5" style="margin-bottom: 5em !important;">
    <div class="container">
        <div class="w-100 text-center mb-5">
            <div class="d-flex align-items-center">
                <div class="head-service-item service-title">
                    <div class="w-100 text-left">
                        <div class="title-small color-black-main">
                            <form class="form-inline" action="">
                                <div class="form-group">
                                  <input class="form-control" name="key" placeholder="Tìm Kiếm ....">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fas fa-search color-black-2"></i></button>
                            </form>
                        </div>
                        <div class="title-3 mt-3">
                            kết quả cho tìm kiếm : {{request()->key}}
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
             <div class="list-tabs">
                <div class="tab-content" id="myTabContent-1">
                    <div class="tab-pane fade show active" id="tatca" role="tabpanel">

                        <div class="title-small color-black-main text-left">Kết quả tìm kiếm dịch vụ</div>
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">
                                <input type="hidden" id="data" value="{{$dulieu}}">
                           
                                {{-- @foreach ($dichvu as $dichvuitem)
                                    <div class="dichvu-item d-plex w-100">
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
                                        <div class="w-100 text-center mb-4">
                                            <a href="javascript:void(0)">
                                                <button  class="btn-4 btn-modal-main" type-modal="modal-datlich" data-show="one">Đặt lịch</button>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach --}}

                            </div>
                        </div>
                        <hr>

                        <div class="title-small color-black-main text-left">Kết quả tìm kiếm trong sản phẩm</div>
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">

                                {{-- @foreach ($sanPham as $itemsanpham)
                                <?php //$anhsp=json_decode($itemsanpham->img);
                                     ?>
                                    <div class="dichvu-item d-plex w-100">
                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                {{$itemsanpham->name}}
                                            </div>

                                            <div class="text-8 mt-1">
                                                {{Controller::caculateGia($itemsanpham->dongia,$itemsanpham->giamgia)}} đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <a href="{{ asset('san-pham') }}/chi-tiet/{{$itemsanpham->slug}}">
                                                    <img class="" src="{{ asset('/uploads')}}/{{$anhsp[0]}}" alt="">
                                                </a>
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                {{$itemsanpham->name}}
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                {{$itemsanpham->mota}}

                                            </p>
                                        </div>
                                    </div>
                                @endforeach --}}

                            </div>
                        </div>
                        <hr>

                        <div class="title-small color-black-main text-left">Kết quả tìm kiếm trong bài viết</div>
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">

                            {{-- @foreach ($blog as $blogtem)
                                <div class="dichvu-item d-plex w-100">
                                    <div class="content-1">
                                        <div class="text-7 color-main-1">
                                            {{$blogtem->name}}
                                        </div>

                                        <div class="img-1 mt-4">
                                            <a href="{{ asset('bai-viet') }}/{{$blogtem->slug}}">
                                                <img class="" src="{{ asset('uploads/'.$blogtem->img) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="text-1 limit-text-row-1 mt-4">
                                            {{$blogtem->name}}
                                        </div>

                                        <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                            {{$blogtem->motangan}}

                                        </p>
                                    </div>
                                    <div class="mt-3">
                                        <a href="{{ asset('bai-viet') }}/{{$blogtem->slug}}"
                                            class="">
                                            <button class="
                                            btn-line px-0 color-gray-2">
                                            Đọc ngay
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            @endforeach --}}

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

