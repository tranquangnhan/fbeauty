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
                                                Tin Xu Hướng
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
                                                <div class="small-blog-item pt-0">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
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

                                                <div class="small-blog-item">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
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

                                                <div class="small-blog-item">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
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

                                                <div class="small-blog-item">
                                                    <div class="row">
                                                        <div class="col-xl-5">
                                                            <div class="img-1">
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
                                                <div class="small-blog-item pt-0">
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

                                                <div class="small-blog-item">
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

                                                <div class="small-blog-item">
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

                                                <div class="small-blog-item">
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
                <div class="danhmuc">
                    <h4 class="title-3">Danh mục</h4>

                    </div>
                    <div class="list-dm-blog list-danhmuc mt-4">

                        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
                            <a href="#" class="d-flex justify-content-between">
                                <span class="name">Travel</span>
                                <span class="number">02</span>
                            </a>
                        </div>

                        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
                            <a href="#" class="d-flex justify-content-between">
                                <span class="name">Travel</span>
                                <span class="number">02</span>
                            </a>
                        </div>

                        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
                            <a href="#" class="d-flex justify-content-between">
                                <span class="name">Travel</span>
                                <span class="number">12</span>
                            </a>
                        </div>
                        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
                            <a href="#" class="d-flex justify-content-between">
                                <span class="name">Travel</span>
                                <span class="number">02</span>
                            </a>
                        </div>
                        <div class="danhmuc-item" style="background: url('{{ asset('Site/images') }}/xddn35VlCA.jpg')">
                            <a href="#" class="d-flex justify-content-between">
                                <span class="name">Travel</span>
                                <span class="number">12</span>
                            </a>
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
