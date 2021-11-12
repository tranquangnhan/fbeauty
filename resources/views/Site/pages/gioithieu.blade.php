@extends('site.layout')

@section('title')
    Giới thiệu
@endsection

@section('main')
<div class="fa-lienhe">
    <div class="about">
        <div class="box-about position-relative">
            <div class="background-about">
                <div class="box-images-2">
                    <div class="box-color-1"></div>
                    <div class="img-1">
                        <img class="img-fluid position-relative z-index-1"
                            src="{{ asset('Site/images') }}/about-1.png" alt="">
                    </div>
                    <div class="img-2">
                        <img class="img-small-2 float-right position-relative z-index-1"
                            src="{{ asset('Site/images') }}/coso4.jpg" alt="">
                    </div>
                </div>
                {{-- <div class="big-title about-title-custom title-font">About us</div> --}}
            </div>
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-xl-6" style="margin-top: 100px">
                        <div class="about-content">
                            <div class="title-small line-before">
                                VỀ CHÚNG TÔI
                            </div>
                            <div class="w-100">
                                <div class="title-1">
                                    Hệ Thống Spa <br> Đẳng Cấp
                                </div>
                                <div class="text-1 mt-4">
                                    Với 45 chi nhánh trải dài khắp cả nước, FBeauty Spa tự hào là chuỗi hệ thống thẩm mỹ
                                    viện hàng đầu Việt Nam
                                </div>
                                <div class="text-2 mt-1">
                                    Mang trong mình niềm tin về sứ mệnh đánh thức vẻ đẹp tiềm ẩn trong mỗi người, Seoul
                                    Spa luôn nỗ lực
                                    không ngừng để đem đến cho khách hàng những dịch vụ hoàn hảo nhất. Không chỉ nằm ở
                                    kết quả mà Seoul
                                    Spa còn hướng tới thẩm mỹ khỏe – đẹp – an toàn để mỗi phút giây ngắm mình trong
                                    gương là những
                                    phút giây tận hưởng hạnh phúc thật sự của mỗi khách hàng.
                                </div>
                            </div>
                            <div class="w-100 text-left mt-3">
                                <a href="">
                                    <button class="btn-3 active black-1">Xem chi tiết</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video">
        <iframe width="100%" height="550" src="https://www.youtube.com/embed/5RFqEdSy9nQ"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="introduce mb-5 col-11 mt-5 text-center container-fluid">
        <div class="card-body mt-5 nsl">
            <i class="mb-3"><span>Trải nghiệm nghệ thuật chăm sóc</span></i>
            <h1 class="">Hội đồng sáng lập</h1>
            <p class="card-text">Cùng với hàng ngàn nhân viên chuyên ngành Spa họ đã tạo nên một FBeauty hoàn thiện như hiện nay.</p>
        </div>
        <div class="card-deck mt-3">
            <div class="card container text-center border-none">
                <img src="{{ asset('Site/images') }}/huyen.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mrs.Thu Huyền</div>
                </div>
               <i><span class="span-lienhe  card-title">Giám đốc điều hành </span></i> 
            </div>
            <div class="card container">
                <img src="{{ asset('Site/images') }}/huyen.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mrs.Thu Huyền</div>
                </div>
                <i><span class="span-lienhe text-center main-title">Giám đốc điều hành </span></i> 
            </div>
            <div class="card container">
                <img src="{{ asset('Site/images') }}/huyen.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mrs.Thu Huyền</div>
                </div>
                <i><span class="span-lienhe text-center main-title">Giám đốc điều hành </span></i> 
            </div>
            <div class="card container">
                <img src="{{ asset('Site/images') }}/huyen.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mrs.Thu Huyền</div>
                </div>
                <i><span class="span-lienhe text-center main-title">Giám đốc điều hành </span></i> 
            </div>
        </div>
    </div>
</div>

@endsection
<link rel="stylesheet" href="{{ asset('Site/css') }}/gioithieu.css">
