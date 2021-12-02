@extends('Site.layout')

@section('title')
    Bài viết
@endsection

@section('main')
<div class="fa-baiviet mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="box-blog">
                    <div class="list-blog p-0">
                        <div class="mb-4">
                            <div class="d-flex align-items-center">
                                    <div class="head-blog-item blog-title">
                                        <div class="w-100 text-left d-flex align-items-center">
                                            <div class="title-3 mr-4">
                                                Tin tức mới
                                            </div>
                                            <div class="line-main-color"></div>
                                        </div>
                                    </div>

                                    <div class="head-blog-item">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center text-2 mr-4" style="color: #000000;">Tìm kiếm theo </div>
                                            <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link btn-3 active" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="true">Mới nhất</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link btn-3" id="lastweek-tab" data-toggle="tab" href="#lastweek" role="tab" aria-controls="lastweek" aria-selected="false">Tuần trước</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                            </div>
                        </div>
                        <div class="list-tabs">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                                    <div class="row">
                                        <div class="col-xl-6 pr-0">
                                            <div class="blog-bigsize">
                                                <div class="box-danhmuc">
                                                    {{$blog[0]->danhmuc}}
                                                </div>
                                                <a href="{{ asset('bai-viet') }}/{{$blog[0]->slug}}">
                                                    <div class="img-1 w-100">
                                                            <img class="img-fluid"
                                                                src="{{ asset('uploads') }}/{{$blog[0]->img}}" alt="">
                                                    </div>
                                                </a>

                                                <div class="blog-content-bigsize">
                                                    <div class="blog-text-1 limit-text-row-2">
                                                        <a href="{{ asset('bai-viet') }}/{{$blog[0]->slug}}">{{$blog[0]->name}}</a>
                                                    </div>
                                                    <div class="blog-text-2 mt-2">
                                                        <?php
                                                            $timestamp = strtotime($blog[0]->created_at);
                                                            print date('d-m-y', $timestamp );
                                                            ?></span>
                                                    </div>
                                                    <div class="blog-text-3 text-2 mt-2 limit-text-row-3">
                                                        {{$blog[0]->motangan}}
                                                    </div>

                                                    <div class="mt-3">
                                                        <a href="{{ asset('bai-viet') }}/{{$blog[0]->slug}}"
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

                                        <div class="col-xl-6 pl-0">
                                            <div class="list-blog-small pl-5">
                                                @foreach ($getBlog2 as $item)
                                                    <div class="small-blog-item box-tin-hv pt-0">
                                                        <div class="row">
                                                            <div class="col-xl-5">
                                                                <div class="img-1 image-tin-1">
                                                                    <a href="{{ asset('bai-viet') }}/{{$item->slug}}">
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('uploads') }}/{{$item->img}}"
                                                                        alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-7 pl-0 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                                        <div class="mr-3">
                                                                            <a href="" class="box-danhmuc-1">
                                                                               {{$item->danhmuc}} </a>
                                                                        </div>
                                                                        <span><?php
                                                                            $timestamp = strtotime($item->created_at);
                                                                            print date('d-m-y', $timestamp );
                                                                            ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                    <a href="{{ asset('bai-viet') }}/{{$item->slug}}" class="hover-pink">{{$item->name}}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lastweek" role="tabpanel" aria-labelledby="lastweek-tab">
                                    <div class="row">
                                        @foreach ($blog3 as $item1)
                                        <div class="col-xl-7 pr-0">
                                            <div class="blog-bigsize">
                                                <div class="box-danhmuc">
                                                    {{$item1->danhmuc}}"
                                                </div>

                                                <div class="img-1 w-100">
                                                    <a href="{{ asset('bai-viet') }}/{{$item1->slug}}">
                                                        <img class="img-fluid"
                                                        src="{{ asset('uploads') }}/{{$item1->img}}" alt=""></a>
                                                </div>

                                                <div class="blog-content-bigsize">
                                                    <div class="blog-text-1 limit-text-row-2">
                                                        <a href="{{ asset('bai-viet') }}/{{$item1->slug}}">{{$item1->name}}</a>
                                                    </div>
                                                    <div class="blog-text-2 mt-2">
                                                        <?php
                                                            $timestamp = strtotime($item1->created_at);
                                                            print date('d-m-y', $timestamp );
                                                            ?>
                                                    </div>
                                                    <div class="blog-text-3 text-2 mt-2 limit-text-row-3">
                                                        {{$item1->motangan}}
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
                                        @endforeach
                                        <div class="col-xl-5 pl-0">
                                            <div class="list-blog-small pl-5">
                                                @foreach ($blog4 as $item)
                                                    <div class="small-blog-item box-tin-hv pt-0">
                                                        <div class="row">
                                                            <div class="col-xl-5">
                                                                <div class="img-1 image-tin-1">
                                                                    <a href="{{ asset('bai-viet') }}/{{$item->slug}}">
                                                                    <img class="img-fluid"
                                                                        src="{{ asset('uploads') }}/{{$item->img}}"
                                                                        alt=""></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-7 pl-0 align-self-center">
                                                                <div class="row">
                                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                                        <div class="mr-3">
                                                                            <a href="" class="box-danhmuc-1">
                                                                            {{$item->danhmuc}} </a>
                                                                        </div>
                                                                        <span><?php
                                                                            $timestamp = strtotime($item->created_at);
                                                                            print date('d-m-y', $timestamp );
                                                                            ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                    <a href="{{ asset('bai-viet') }}/{{$item->slug}}" class="hover-pink">{{$item->name}}</a>
                                                                </div>
                                                            </div>
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
                </div>
            </div>
            <div class="col-xl-3">
                @include('Site.components.danhmuc-baiviet')
            </div>
        </div>

        <div class="">
            <div class="box-tin-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="d-flex align-items-center mb-4">
                                <div class="head-blog-item blog-title">
                                    <div class="w-100 text-left d-flex align-items-center">
                                        <div class="title-3 mr-4">
                                            Tin tức mới
                                        </div>
                                        <div class="line-main-color"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-tin-1">
                                <div class="tin-item-1">
                                    <div class="image-tin-1">
                                        <a href="{{ asset('bai-viet') }}/{{$blog[0]->slug}}">
                                        <img class="img-fluid" src="{{ asset('uploads') }}/{{$blog[0]->img}}" alt=""></a>
                                    </div>
                                    <div class="content-tin background-white">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <div class="mr-3">
                                                    <a  class="box-danhmuc-1">
                                                        {{$blog[0]->danhmuc}}</a>
                                                </div>
                                                <span>@if ($blog[0]->created_at != null)
                                                   <?php
                                                    $timestamp = strtotime($blog[0]->created_at);
                                                    print date('d-m-y', $timestamp );
                                                    ?> 
                                                @endif </span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                            <a href="{{ asset('bai-viet') }}/{{$item->slug}}" class="hover-pink">
                                                {{$blog[0]->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="box-tin-2 d-flex flex-column h-100">
                                @foreach ($blognew as $item)
                                <a href="{{ asset('bai-viet') }}/{{$item->slug}}">
                                    <div class="child-box-tin-2 d-flex align-items-end" style="background: url('{{ asset('uploads') }}/{{$item->img}}')">
                                        <div class="content-tin background-white">
                                            <div class="row">
                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a  class="box-danhmuc-1 maincolor">
                                                        {{$item->danhmuc}}</a>
                                                    </div>
                                                    <span class="color-gray-5 fz-1em2">
                                                        @if ($item->created_at != null)
                                                            <?php
                                                                $timestamp = strtotime($item->created_at);
                                                                print date('d-m-y', $timestamp );
                                                            ?> 
                                                        @endif </span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                                <a href="{{ asset('bai-viet') }}/{{$item->slug}}"  class="color-white hover-pink fz-1em2 font-weight-600">
                                                    {{$item->name}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="title-box-2">
                                <span>Mạng xã hội</span>
                            </div>

                            <div class="list-social">
                                <a href="#">
                                    <span><i class="fab fa-facebook-f"></i> <span>15000</span> <small class="fz-0em9"> Like</small></span>
                                    <span class="fz-0em9">Like</span>
                                </a>

                                <a href="#">
                                    <span><i class="fab fa-twitter"></i> <span>15000</span> <small class="fz-0em9"> Tweet</small></span>
                                    <span class="fz-0em9">Like</span>
                                </a>

                                <a href="#">
                                    <span><i class="fab fa-instagram"></i><span>32k+</span> <small class="fz-0em9"> Follower</small></span>
                                    <span class="fz-0em9">Follower</span>
                                </a>

                                <a href="#">
                                    <span><i class="fab fa-youtube"></i> <span>15000</span> <small class="fz-0em9"> Subscriber</small></span>
                                    <span class="fz-0em9">Subscribe</span>
                                </a>
                            </div>

                            <div class="datlich mt-4">
                                <div class="child-box-tin-2 d-flex align-items-center box-small" style="background: url('{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg');">
                                    <div class="content-tin background-white">
                                        <div class="text-bl-1 limit-text-row-2 mb-2">
                                            <a class="color-white hover-pink">Trải nghiệm cảm giác spa <br> đỉnh cao tại Fbeauty spa</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <div class="mr-3">
                                                    <a type-modal="modal-datlich" href="javascript:void(0)" data-show="one" class="box-danhmuc-1 maincolor btn-modal-main ">Đặt lịch</a>
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

        <div class="all-blog mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        @foreach ($listdanhmuc2 as $item)

                        <div class="danhmuc-listblog">
                            <div class="head-blog-item blog-title">
                                <div class="w-100 text-left d-flex align-items-center">
                                    <div class="title-3 mr-4">
                                        {{$item->name}}
                                    </div>
                                    <div class="line-main-color ml-auto" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="list-blog-1 mt-4">
                                <div class="row mb-30px " data-danhmuc="{{$item->id}}">
                                    @foreach ($item->blogbyid2 as $data)
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <a href="{{ asset('bai-viet') }}/{{$data->slug}}">
                                                <img class="img-fluid" src="{{ asset('uploads') }}/{{$data->img}}" alt=""></a>
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            {{$item->name}}</a>
                                                        </div>
                                                        <span>  
                                                            @if ($data->created_at != null)
                                                                <?php
                                                                    $timestamp = strtotime($data->created_at);
                                                                    print date('d-m-y', $timestamp );
                                                                ?> 
                                                            @endif</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-1 mb-1 mt-3">
                                                    <a href="{{ asset('bai-viet') }}/{{$data->slug}}" class="hover-pink">{{$data->name}}</a>
                                                </div>
                                                <p class="blog-mota limit-text-row-3 mb-0">
                                                    {{$data->motangan}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                                {{-- <button data-iddm="{{$item->id}}" type="button" class="xemthemblog btn mb-5 mt-3" data-take="0" data-skip="3">Xem thêm</button> --}}

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-xl-3">
                        @include('Site.components.baivietmoi')
                    </div>
                </div>
            </div>
        </div>

        <div class="list-blog-quantam">
            <div class="background-overlay">
                <div class="container">
                    <div class="blog-quantam">
                        <div class="head-blog-item blog-title">
                            <div class="w-100 text-left d-flex align-items-center">
                                <div class="title-3 mr-4 color-white">
                                    Xu hướng tìm kiếm
                                </div>
                                <div class="line-main-color ml-auto" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="body mt-4">
                            <div class="row">
                                @foreach ($xuhuong as $item)

                                <div class="col-xl-3">
                                    <div class="tin-item-1">
                                        <div class="image-tin-1 " style="height: 180px;">
                                            <a href="{{ asset('bai-viet') }}/{{$item->slug}}">
                                            <img class="img-fluid " src="{{ asset('uploads') }}/{{$item->img}}" alt=""></a>
                                        </div>
                                        <div class="content-tin background-none pt-4 p-0">
                                            <div class="row">
                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1 maincolor">
                                                        {{$item->danhmuc}}</a>
                                                    </div>
                                                    <span class="color-gray-6">@if ($item->created_at != null)
                                                        {{$item->created_at->format('d-m-y')}}@endif</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-1 mb-2 mt-3">
                                                <a href="{{ asset('bai-viet') }}/{{$item->slug}}" class="hover-pink color-white fz-1em font-weight-600">{{$item->name}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="all-blog mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        @foreach ($listdanhmuc as $item)

                        @if (count($item->blogbyid) > 0 )
                            <div class="danhmuc-listblog">
                                <div class="head-blog-item blog-title">
                                    <div class="w-100 text-left d-flex align-items-center">
                                        <div class="title-3 mr-4">
                                            {{$item->name}}
                                        </div>
                                        <div class="line-main-color ml-auto" style="width: 75%"></div>
                                    </div>
                                </div>

                                <div class="list-blog-1 mt-4" >
                                    <div class="row mb-60px"  data-danhmuc="{{$item->id}}">
                                            @foreach ($item->blogbyid as $data)
                                            <div class="col-xl-4 content1 mt-3">
                                                <div class="tin-item-1 box-tin-hv">
                                                    <div class="image-tin-1 mt-3" style="height: 220px">
                                                        <a href="{{ asset('bai-viet') }}/{{$data->slug}}">
                                                        <img class="img-fluid" src="{{ asset('uploads') }}/{{$data->img}}" alt=""></a>
                                                    </div>
                                                    <div class="content-tin-3 background-white">
                                                        <div class="row">
                                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                                <div class="mr-3">
                                                                    <a href="" class="box-danhmuc-1">
                                                                        {{$item->name}}</a>
                                                                </div>
                                                                <span> @if ($data->created_at != null)
                                                                    <?php
                                                                        $timestamp = strtotime($data->created_at);
                                                                        print date('d-m-y', $timestamp );
                                                                    ?>                                                          
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="text-bl-1 limit-text-row-1 mb-1 mt-3">
                                                            <a href="{{ asset('bai-viet') }}/{{$data->slug}}" class="hover-pink">{{$data->name}}</a>
                                                        </div>
                                                        <p class="blog-mota limit-text-row-3 mb-0">
                                                            {{$data->motangan}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <button data-iddm="{{$item->id}}" type="button" class="xemthemblog btn mb-5 mt-3" data-take="3" data-skip="6">Xem thêm</button>
                    @endif
                        @endforeach
                    </div>
                    <div class="col-xl-3">
                        @include('Site.components.box-lienhe')

                        <div class="list-blog-small p-0">
                            <div class="title-box-1">
                                <span>Top lượt xem</span>
                            </div>
                            @foreach ($luotxem as $item)
                            <div class="small-blog-item box-tin-hv">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="img-1">
                                            <a href="{{ asset('bai-viet') }}/{{$item->slug}}">
                                            <img class="img-fluid "
                                                src="{{ asset('uploads/') }}/{{$item->img}}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 pl-0 align-self-center">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <span>
                                                    @if ($data->created_at != null)
                                                        <?php
                                                            $timestamp = strtotime($data->created_at);
                                                            print date('d-m-y', $timestamp );
                                                        ?>                                                         
                                                    @endif</span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                            <a href="{{ asset('bai-viet') }}/{{$item->slug}}" class="hover-pink">{{$item->name}}</a>
                                        </div>
                                    </div>
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
@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/blog.js"></script>
    <link rel="stylesheet" href="{{ asset('Site/css') }}/baiviet.css">
@endsection
