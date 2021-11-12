@extends('site.layout')

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
                                            <div class="d-flex align-items-center text-2 mr-4">Tìm kiếm theo</div>
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
                                                    Sức khỏe
                                                </div>

                                                <div class="img-1 w-100">
                                                    <img class="img-fluid"
                                                        src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                </div>

                                                <div class="blog-content-bigsize">
                                                    <div class="blog-text-1 limit-text-row-2">
                                                        <a href="">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm
                                                            Siêu Độc Ở Sài Gòn</a>
                                                    </div>
                                                    <div class="blog-text-2 mt-2">
                                                        21/9/2021
                                                    </div>
                                                    <div class="blog-text-3 text-2 mt-2 limit-text-row-3">
                                                        Cuối tuần này, hãy lên kế hoạch chiều chuộng bản thân bằng cách tắm
                                                        thảo dược quý của người Dao Đỏ cùng nhiều dịch vụ hót-hòn-họt khác
                                                        tại Noir. Spa, Sài Gòn. Cuối tuần này, hãy lên kế hoạch chiều. Cuối
                                                        tuần này, hãy lên kế hoạch chiều
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

                                        <div class="col-xl-6 pl-0">
                                            <div class="list-blog-small pl-5">
                                                <div class="small-blog-item box-tin-hv pt-0">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1 image-tin-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row">
                                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                                    <div class="mr-3">
                                                                        <a href="" class="box-danhmuc-1">
                                                                        Sức khỏe</a>
                                                                    </div>
                                                                    <span>24 / 1 / 2021</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="small-blog-item box-tin-hv">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1 image-tin-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row">
                                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                                    <div class="mr-3">
                                                                        <a href="" class="box-danhmuc-1">
                                                                        Sức khỏe</a>
                                                                    </div>
                                                                    <span>24 / 1 / 2021</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="small-blog-item box-tin-hv">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1 image-tin-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row">
                                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                                    <div class="mr-3">
                                                                        <a href="" class="box-danhmuc-1">
                                                                        Sức khỏe</a>
                                                                    </div>
                                                                    <span>24 / 1 / 2021</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="small-blog-item box-tin-hv">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1 image-tin-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row">
                                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                                    <div class="mr-3">
                                                                        <a href="" class="box-danhmuc-1">
                                                                        Sức khỏe</a>
                                                                    </div>
                                                                    <span>24 / 1 / 2021</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lastweek" role="tabpanel" aria-labelledby="lastweek-tab">
                                    <div class="row">
                                        <div class="col-xl-7 pr-0">
                                            <div class="blog-bigsize">
                                                <div class="box-danhmuc">
                                                    Sức khỏe
                                                </div>

                                                <div class="img-1 w-100">
                                                    <img class="img-fluid"
                                                        src="{{ asset('Site/images') }}/xddn35VlCA.jpg" alt="">
                                                </div>

                                                <div class="blog-content-bigsize">
                                                    <div class="blog-text-1 limit-text-row-2">
                                                        <a href="">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm
                                                            Siêu Độc Ở Sài Gòn</a>
                                                    </div>
                                                    <div class="blog-text-2 mt-2">
                                                        21/9/2021
                                                    </div>
                                                    <div class="blog-text-3 text-2 mt-2 limit-text-row-3">
                                                        Cuối tuần này, hãy lên kế hoạch chiều chuộng bản thân bằng cách tắm
                                                        thảo dược quý của người Dao Đỏ cùng nhiều dịch vụ hót-hòn-họt khác
                                                        tại Noir. Spa, Sài Gòn. Cuối tuần này, hãy lên kế hoạch chiều. Cuối
                                                        tuần này, hãy lên kế hoạch chiều
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

                                        <div class="col-xl-5 pl-0">
                                            <div class="list-blog-small pl-5">
                                                <div class="small-blog-item box-tin-hv pt-0">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row align-items-center">
                                                                <div class="col-xl-6">
                                                                    <div class="box-danhmuc-1">
                                                                        Sức khỏe
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 color-gray-2 hover-color-black text-small-1">
                                                                    24 / 1 / 2021
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="small-blog-item box-tin-hv">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row align-items-center">
                                                                <div class="col-xl-6">
                                                                    <div class="box-danhmuc-1">
                                                                        Sức khỏe
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 color-gray-2 hover-color-black text-small-1">
                                                                    24 / 1 / 2021
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="small-blog-item box-tin-hv">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row align-items-center">
                                                                <div class="col-xl-6">
                                                                    <div class="box-danhmuc-1">
                                                                        Sức khỏe
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 color-gray-2 hover-color-black text-small-1">
                                                                    24 / 1 / 2021
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="small-blog-item box-tin-hv">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-7 pl-0 align-self-center">
                                                            <div class="row align-items-center">
                                                                <div class="col-xl-6">
                                                                    <div class="box-danhmuc-1">
                                                                        Sức khỏe
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 color-gray-2 hover-color-black text-small-1">
                                                                    24 / 1 / 2021
                                                                </div>
                                                            </div>
                                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                                                <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
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
                                        <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                    </div>
                                    <div class="content-tin background-white">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <div class="mr-3">
                                                    <a href="" class="box-danhmuc-1">
                                                    Sức khỏe</a>
                                                </div>
                                                <span>Thứ ba, 26/10/2021, 21:00 (GMT+7)</span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                            <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="box-tin-2 d-flex flex-column h-100">
                                <div class="child-box-tin-2 d-flex align-items-end" style="background: url('{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg')">
                                    <div class="content-tin background-white">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <div class="mr-3">
                                                    <a href="" class="box-danhmuc-1 maincolor">
                                                    Sức khỏe</a>
                                                </div>
                                                <span class="color-gray-5 fz-1em2">Thứ ba, 26/10/2021, 21:00 (GMT+7)</span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                            <a href="" class="color-white hover-pink fz-1em2 font-weight-600">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="child-box-tin-2 d-flex align-items-end" style="background: url('{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg')">
                                    <div class="content-tin background-white">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <div class="mr-3">
                                                    <a href="" class="box-danhmuc-1 maincolor">
                                                    Sức khỏe</a>
                                                </div>
                                                <span class="color-gray-5 fz-1em2">Thứ ba, 26/10/2021, 21:00 (GMT+7)</span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                            <a href="" class="color-white hover-pink fz-1em2 font-weight-600">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                        </div>
                                    </div>
                                </div>
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
                                            <a href="" class="color-white hover-pink">Trải nghiệm cảm giác spa <br> đỉnh cao tại Fbeauty spa</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
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
        </div>

        <div class="all-blog mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="danhmuc-listblog">
                            <div class="head-blog-item blog-title">
                                <div class="w-100 text-left d-flex align-items-center">
                                    <div class="title-3 mr-4">
                                        Danh Mục
                                    </div>
                                    <div class="line-main-color ml-auto" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="list-blog-1 mt-4">
                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                                <div class="col-xl-3">
                                    <div class="tin-item-1">
                                        <div class="image-tin-1 " style="height: 180px;">
                                            <img class="img-fluid " src="http://127.0.0.1:8000/Site/images/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                        </div>
                                        <div class="content-tin background-none pt-4 p-0">
                                            <div class="row">
                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1 maincolor">
                                                        Sức khỏe</a>
                                                    </div>
                                                    <span class="color-gray-6">Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                                <a href="" class="hover-pink color-white fz-1em font-weight-600">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="tin-item-1">
                                        <div class="image-tin-1 " style="height: 180px;">
                                            <img class="img-fluid " src="http://127.0.0.1:8000/Site/images/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                        </div>
                                        <div class="content-tin background-none pt-4 p-0">
                                            <div class="row">
                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1 maincolor">
                                                        Sức khỏe</a>
                                                    </div>
                                                    <span class="color-gray-6">Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                                <a href="" class="hover-pink color-white fz-1em font-weight-600">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="tin-item-1">
                                        <div class="image-tin-1 " style="height: 180px;">
                                            <img class="img-fluid " src="http://127.0.0.1:8000/Site/images/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                        </div>
                                        <div class="content-tin background-none pt-4 p-0">
                                            <div class="row">
                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1 maincolor">
                                                        Sức khỏe</a>
                                                    </div>
                                                    <span class="color-gray-6">Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                                <a href="" class="hover-pink color-white fz-1em font-weight-600">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3">
                                    <div class="tin-item-1">
                                        <div class="image-tin-1 " style="height: 180px;">
                                            <img class="img-fluid " src="http://127.0.0.1:8000/Site/images/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                        </div>
                                        <div class="content-tin background-none pt-4 p-0">
                                            <div class="row">
                                                <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                    <div class="mr-3">
                                                        <a href="" class="box-danhmuc-1 maincolor">
                                                        Sức khỏe</a>
                                                    </div>
                                                    <span class="color-gray-6">Thứ ba, 26/10/2021, 21:00</span>
                                                </div>
                                            </div>
                                            <div class="text-bl-1 limit-text-row-2 mb-2 mt-3">
                                                <a href="" class="hover-pink color-white fz-1em font-weight-600">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
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
                        <div class="danhmuc-listblog">
                            <div class="head-blog-item blog-title">
                                <div class="w-100 text-left d-flex align-items-center">
                                    <div class="title-3 mr-4">
                                        Danh Mục
                                    </div>
                                    <div class="line-main-color ml-auto" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="list-blog-1 mt-4">
                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="danhmuc-listblog">
                            <div class="head-blog-item blog-title">
                                <div class="w-100 text-left d-flex align-items-center">
                                    <div class="title-3 mr-4">
                                        Danh Mục
                                    </div>
                                    <div class="line-main-color ml-auto" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="list-blog-1 mt-4">
                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="danhmuc-listblog">
                            <div class="head-blog-item blog-title">
                                <div class="w-100 text-left d-flex align-items-center">
                                    <div class="title-3 mr-4">
                                        Danh Mục
                                    </div>
                                    <div class="line-main-color ml-auto" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="list-blog-1 mt-4">
                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="danhmuc-listblog">
                            <div class="head-blog-item blog-title">
                                <div class="w-100 text-left d-flex align-items-center">
                                    <div class="title-3 mr-4">
                                        Danh Mục
                                    </div>
                                    <div class="line-main-color ml-auto" style="width: 75%"></div>
                                </div>
                            </div>

                            <div class="list-blog-1 mt-4">
                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-30px">
                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 ">
                                        <div class="tin-item-1 box-tin-hv">
                                            <div class="image-tin-1" style="height: 220px">
                                                <img class="img-fluid" src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg" alt="">
                                            </div>
                                            <div class="content-tin-3 background-white">
                                                <div class="row">
                                                    <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                        <div class="mr-3">
                                                            <a href="" class="box-danhmuc-1">
                                                            Sức khỏe</a>
                                                        </div>
                                                        <span>Thứ ba, 26/10/2021, 21:00</span>
                                                    </div>
                                                </div>
                                                <div class="text-bl-1 limit-text-row-2 mb-1 mt-3">
                                                    <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                                </div>
                                                <p class="blog-mota mb-0">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor in cididunt ut labore et dolore
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                    <div class="col-xl-3">
                        @include('Site.components.box-lienhe')

                        <div class="list-blog-small p-0">
                            <div class="title-box-1">
                                <span>Top lượt xem</span>
                            </div>

                            <div class="small-blog-item box-tin-hv">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="img-1">
                                            <img class="img-fluid "
                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 pl-0 align-self-center">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <span>Thứ ba, 26/10/2021, 21:00</span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                            <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="small-blog-item box-tin-hv">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="img-1">
                                            <img class="img-fluid "
                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 pl-0 align-self-center">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <span>Thứ ba, 26/10/2021, 21:00</span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                            <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="small-blog-item box-tin-hv">
                                <div class="row">
                                    <div class="col-xl-5">
                                        <div class="img-1">
                                            <img class="img-fluid "
                                                src="{{ asset('Site/images') }}/toa-heftiba-a9pFSC8dTlo-unsplash.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 pl-0 align-self-center">
                                        <div class="row">
                                            <div class="col-xl-12 d-flex align-items-center color-gray-2 hover-color-black text-small-1">
                                                <span>Thứ ba, 26/10/2021, 21:00</span>
                                            </div>
                                        </div>
                                        <div class="text-bl-1 limit-text-row-2 mb-2 mt-1">
                                            <a href="" class="hover-pink">Review Noir. Spa, Trải Nghiệm Thư Giãn Trong Bóng Đêm Siêu Độc Ở</a>
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
@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>
@endsection
