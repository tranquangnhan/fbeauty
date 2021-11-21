@extends('site.layout')

@section('title')
        {{$viewdetail[0]->name}}
@endsection

@section('main')
    <div class="fa-blogdetail mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="blog-detail">
                        <img src="{{ asset('uploads') }}/{{$viewdetail[0]->img}}" alt="">
                        <div class="blog-content-detail box-shadow-1">
                            <div class="blog-head">
                                <div class="row">
                                    <div
                                        class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                        <div class="mr-3">
                                            <a href="" class="box-danhmuc-1 fz-1em2">
                                                {{$viewdetail[0]->danhmuc}}</a>
                                        </div>
                                        <span class="fz-1em1">{{$viewdetail[0]->created_at}}</span>
                                    </div>
                                </div>
                                <div class="name-blog mt-3">
                                    <h1 class=" font-weight-600">{{$viewdetail[0]->name}}.</h1>
                                </div>

                                <div class="list-reac d-flex">
                                    <div class="reac-item pl-0"><i class="far fa-eye"></i> <span>5k</span></div>
                                    <div class="reac-item"><i class="far fa-heart"></i> <span>5k</span></div>
                                    <div class="reac-item pr-0 border-0"><i class="far fa-comments"></i> <span>5k</span>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-body">
                                <div class="noidungngan">
                                    <div class="border-z border-left-z"></div>
                                    <p class="m-0">{{$viewdetail[0]->motangan}}.</p>
                                    <div class="border-z border-right-z"></div>
                                </div>

                                <div class="noidung">
                                    {{$viewdetail[0]->noidung}}.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xl-3">
                    @include('Site.components.baivietmoi')
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
                    @include('Site.components.danhmuc-baiviet')

                </div>
                <div class="row mt-5">
                    <div class="danhmuc-listblog">
                        <div class="head-blog-item blog-title">
                            <div class="w-100 text-left d-flex align-items-center">
                                <div class="title-3 mr-4">
                                    Bài viết liên quan
                                </div>
                                <div class="line-main-color ml-auto" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="list-blog-1 mt-4">
                            <div class="row mb-30px">
                                @foreach ($viewdetail2 as $data1)
                                @foreach ($data1->viewdt as $data)

                                <div class="col-xl-3">
                                    <div class="tin-item-1 box-tin-hv">
                                        <div class="image-tin-1" style="height: 220px">
                                            <img class="img-fluid" 
                                                src="{{ asset('uploads') }}/{{$data->img}}"
                                                alt="">
                                        </div>
                                        <div class="content-tin-3 background-white">
                                            <div class="row">
                                                <div
                                                    class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1">
                                                            {{$data->danhmuc}}</a>
                                                    </div>
                                                    <span>{{$data->created_at}}</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-1 mb-1 mt-3">
                                                <a href="{{ asset('bai-viet') }}/{{$data->slug}}" class="hover-pink">{{$data->name}}</a>
                                            </div>
                                            <p class="blog-mota mb-0 limit-text-row-3">
                                                {{$data->motangan}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
@endsection
