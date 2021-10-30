@extends('site.layout')

@section('title')
    Dịch Vụ
@endsection

@section('main')
<div class="fa-dichvu my-5">
    <div class="container">
        <div class="w-100 text-center mb-4">
            <div class="title-small text-center" style="margin-top: 5em !important;">
                Danh Mục
            </div>
            <div class="text-4">
                Các Dịch Vụ Hot
            </div>

            <div class="box-danhmuc-dichvu">
                <div class="item active">
                    <div class="item-img">
                        <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                    </div>

                    <h5>Text center</h5>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                    </div>

                    <h5>Text center</h5>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                    </div>

                    <h5>Text center</h5>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                    </div>

                    <h5>Text center</h5>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                    </div>

                    <h5>Text center</h5>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="{{ asset('Site/images/icon') }}/hot-stone.png" class="img-fluid" alt="">
                    </div>

                    <h5>Text center</h5>
                </div>
            </div>

            <div class="box-list-dichvu mt-4">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="item">
                            <div class="box-img">
                                <img class="img-fluid" src="http://127.0.0.1:8000/Site/images/image8.png" alt="">
                            </div>
                            <div class="content p-3">
                                <h4 class="limit-text-row-1">
                                    Lăn Kim Công Nghệ Cao
                                </h4>
                                <p class="text-2 limit-text-row-3 mb-0">
                                    Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt.
                                </p>

                                <button class="btn-full-color mt-2">300,999 đ</button>


                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>


    </div>
</div>
@endsection

