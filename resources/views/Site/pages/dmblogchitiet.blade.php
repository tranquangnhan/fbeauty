@extends('Site.layout')

@section('title')
    Danh mục bài viết
@endsection

@section('main')
<div class="fa-baiviet mt-5">
    <div class="container">
        {{-- <div class="row">
            <div class="col-xl-3">
                @include('Site.components.danhmuc-baiviet')
            </div>
        </div> --}}

        <div class="all-blog mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        {{-- @foreach ($listdanhmuc as $item)

                        @if (count($item->blogbyid) > 0 ) --}}
                            <div class="danhmuc-listblog">
                                <div class="head-blog-item blog-title">
                                    <div class="w-100 text-left d-flex align-items-center">
                                        <div class="title-3 mr-4">
                                            {{$nameDanhMucbyslug[0]->name}}
                                        </div>
                                        <div class="line-main-color ml-auto" style="width: 70%"></div>
                                    </div>
                                </div>

                            <div class="list-blog-1 mt-4" >
                                @if (count($viewdetail) > 0 )
                                    <div class="row mb-60px" >
                                            @foreach ($viewdetail as $data)
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
                                                                        {{$data->danhmuc}}</a>
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
                                @else
                                <div class="col-12" style="text-align:center!important;">
                                   <p class="text-center" > Danh mục trống </p>
                                </div>
                                @endif
                                </div>
                            </div>
                            <button data-iddm="{{$item->id}}" onclick="anbutton()" type="button" class="xemthemblog btn mb-5 mt-3" id="buttonid" data-take="3" data-skip="6">Xem thêm</button>

                    </div>
                    <div class="col-xl-3">
                        @include('Site.components.danhmucct-baiviet')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <link rel="stylesheet" href="{{ asset('Site/css') }}/baiviet.css">
@endsection