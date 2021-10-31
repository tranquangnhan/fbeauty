@extends('site.layout')

@section('title')
    Dịch Vụ - Tên Dịch Vụ
@endsection

@section('main')
<div class="fa-dichvu my-5" style="margin-bottom: 5em !important;">
    <div class="container">
        <div class="fa-dichvuchitiet">
            <div class="image w-100">
                <img src="{{ asset('Site/images') }}/young-beautiful-woman-getting-hot-stone-spa-treatment.jpg" class="img-fluid" alt="">
            </div>

            <div class="dichvu-content box-shadow-1 blog-body">
                <h1 class=" font-weight-600">Lăn Kim Công Nghệ Cao</h1>
                <div class="box-gia">
                    <span class="giagiam">500,999 đ </span>
                    <span class="gia left-bar">300,999 đ </span>
                    <span class="name-danhmuc hover-pink left-bar">Da mặt</span>
                </div>
                <div class="noidungngan mt-4">
                    <div class="border-z border-left-z"></div>
                    <p class="m-0">On your list of places where people might access your web app,
                        Teams is probably number “not-on-the-list”.
                        But it turns out that making your app accessible where your users are already
                        working has some profound
                        for benefits. In this article, we’ll look athow Teams makes web apps for every
                        company</p>
                    <div class="border-z border-right-z"></div>
                </div>

                <div class="mota mt-4">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.
                    </p>
                </div>

                <div class="d-flex justify-content-end">
                    <div data-show="one" class="button btn-8 btn-datlich">
                        ĐẶT LỊCH NGAY
                    </div>
                </div>

            </div>

        </div>
    </div>
    @include('Site.components.gioithieulieutrinh')
</div>
@endsection

