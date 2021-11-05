@extends('site.layout')

@section('title')
    Tên Bài viết
@endsection

@section('main')
    <div class="fa-blogdetail mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="blog-detail">
                        <img src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                        <div class="blog-content-detail box-shadow-1">
                            <div class="blog-head">
                                <div class="row">
                                    <div
                                        class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                        <div class="mr-3">
                                            <a href="" class="box-danhmuc-1 fz-1em2">
                                                Sức khỏe</a>
                                        </div>
                                        <span class="fz-1em1">Thứ ba, 26/10/2021, 21:00 (GMT+7)</span>
                                    </div>
                                </div>
                                <div class="name-blog mt-3">
                                    <h1 class=" font-weight-600">How To Pot You Web App To Microsoft Clone Teams Is Really
                                        Ready For Take Fight.</h1>
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
                                    <p class="m-0">On your list of places where people might access your web app,
                                        Teams is probably number “not-on-the-list”.
                                        But it turns out that making your app accessible where your users are already
                                        working has some profound
                                        for benefits. In this article, we’ll look athow Teams makes web apps for every
                                        company</p>
                                    <div class="border-z border-right-z"></div>
                                </div>

                                <div class="noidung">

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
                <div class="row">
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
                                <div class="col-xl-3">
                                    <div class="tin-item-1 box-tin-hv">
                                        <div class="image-tin-1" style="height: 220px">
                                            <img class="img-fluid"
                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                alt="">
                                        </div>
                                        <div class="content-tin-3 background-white">
                                            <div class="row">
                                                <div
                                                    class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                    </div>
                                                    <span>Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn
                                                    Trong
                                                    Bóng Đêm Siêu Độc Ở</a>
                                            </div>
                                            <p class="blog-mota mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor
                                                in cididunt ut labore et dolore
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="tin-item-1 box-tin-hv">
                                        <div class="image-tin-1" style="height: 220px">
                                            <img class="img-fluid"
                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                alt="">
                                        </div>
                                        <div class="content-tin-3 background-white">
                                            <div class="row">
                                                <div
                                                    class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                    </div>
                                                    <span>Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn
                                                    Trong
                                                    Bóng Đêm Siêu Độc Ở</a>
                                            </div>
                                            <p class="blog-mota mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor
                                                in cididunt ut labore et dolore
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 ">
                                    <div class="tin-item-1 box-tin-hv">
                                        <div class="image-tin-1" style="height: 220px">
                                            <img class="img-fluid"
                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                alt="">
                                        </div>
                                        <div class="content-tin-3 background-white">
                                            <div class="row">
                                                <div
                                                    class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                    </div>
                                                    <span>Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn
                                                    Trong
                                                    Bóng Đêm Siêu Độc Ở</a>
                                            </div>
                                            <p class="blog-mota mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor
                                                in cididunt ut labore et dolore
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 ">
                                    <div class="tin-item-1 box-tin-hv">
                                        <div class="image-tin-1" style="height: 220px">
                                            <img class="img-fluid"
                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                alt="">
                                        </div>
                                        <div class="content-tin-3 background-white">
                                            <div class="row">
                                                <div
                                                    class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                    </div>
                                                    <span>Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn
                                                    Trong
                                                    Bóng Đêm Siêu Độc Ở</a>
                                            </div>
                                            <p class="blog-mota mb-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor
                                                in cididunt ut labore et dolore
                                            </p>
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
@endsection

@section('javascript')
@endsection
