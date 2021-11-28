@extends('site.layout')

@section('title')
    Trang Chủ
@endsection

@section('main')
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

<div class="box-service">
    <div class="service-intro position-relative">
        <div class="background-service w-100">
            <div class="service-intro-item left"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-6"></div>
                    <div class="col-xl-6 p-4em">
                        <div class="about-content position-relative z-index-1">
                            <div class="title-small line-before">
                                Dich Vụ
                            </div>
                            <div class="w-100">
                                <div class="text-4 w-100">
                                    Xu Hướng Làm Đẹp
                                </div>
                                <div class="list-danhmuc mt-4">
                                    <div class="danhmuc-item">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/beauty-treatment.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Chăm sóc da mặt
                                                </div>
                                                <div class="text-2">
                                                    Chăm sóc da mặt là một trong các gói dịch vụ Spa cơ bản và
                                                    đông khách nhất hiện nay.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/acne.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Điều trị mụn, sẹo
                                                </div>
                                                <div class="text-2">
                                                    Điều trị mụn là phương pháp hiệu quả nhất nhằm làm sạch mụn,
                                                    se khít lỗ chân lông và giảm vết sẹo thâm do mụn để lại.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/facial-treatment-black.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Dịch vụ trị nám, tàn nhang
                                                </div>
                                                <div class="text-2">
                                                    Để che mờ những vết nám, tàng nhang trên khuôn mặt, chị em
                                                    sẽ mất khá nhiều thời gian để trang điểm. Việc lạm dụng
                                                    trang điểm cũng gây ảnh hưởng xấu tới sức khỏe của da về
                                                    sau.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/mesotherapy.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Làm trẻ hóa da
                                                </div>
                                                <div class="text-2">
                                                    Hiện nay có rất nhiều công nghệ không xâm lấn giúp làm cho
                                                    da săn chắc, xóa vết nhăn, tạo đường nét trẻ trung cho cơ
                                                    thể.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/hot-stone.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Dịch vụ massage
                                                </div>
                                                <div class="text-2">
                                                    Massage foot và massage body có tác dụng giúp khách hàng
                                                    giảm đau, thư giãn, xua tan mệt mỏi và căng thẳng, tăng
                                                    cường hệ miễn dịch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="danhmuc-item mt-5">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <div class="box-icon-1">
                                                    <img src="{{ asset('Site/images/icon') }}/fitness-black.png"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 pl-4 d-flex align-content-stretch flex-wrap">
                                                <div class="text-5">
                                                    Dịch vụ giảm béo
                                                </div>
                                                <div class="text-2">
                                                    Tăng cân, béo phì là vấn đề mà rất nhiều chị em lo lắng,
                                                    việc chăm lo cho vóc dáng dường như đã trở thành nhu cầu
                                                    thiết yếu của con người
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-100 text-left mt-4">

                                <button data-show="one" class="button btn-full btn-datlich">ĐẶT LỊCH
                                    NGAY</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="list-service">
        <div class="container position-relative z-index-1 p-0">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="head-service-item service-title">
                        <div class="w-100 text-left">
                            <div class="title-small color-black-main">
                                LỰA CHỌN DỊCH VỤ
                            </div>
                            <div class="title-3">
                                Bí Quyết Khỏe Và Đẹp
                            </div>
                        </div>
                    </div>
                    <div class="head-service-item">
                        <div class="d-flex">
                            <div class="d-flex align-items-center text-2 mr-4" style="color: #000000;">Tìm kiếm
                                theo</div>
                            <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link btn-3 active black-1" id="allservice-tab"
                                        data-toggle="tab" href="#allservice" role="tab"
                                        aria-controls="allservice" aria-selected="true">Da mặt</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link btn-3 black-1" id="nhieuquantam-tab" data-toggle="tab"
                                        href="#nhieuquantam" role="tab" aria-controls="nhieuquantam"
                                        aria-selected="false">Danh mục</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link btn-3 black-1" id="xemtatca-tab" data-toggle="tab"
                                    href="#xemtatca" role="tab" aria-controls="xemtatca"
                                    aria-selected="false">Xem tất cả</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="list-tabs mt-5">
                <div class="tab-content" id="">
                    <div class="tab-pane fade show active" id="allservice" role="tabpanel"
                        aria-labelledby="allservice-tab">
                        <div class="w-100">
                            <div class="box-dichvu">
                                <div class="box-sev">
                                    @foreach ($dichvu as $itemdichvu)
                                        <div class="dichvu-item">

                                            <div class="content-1">
                                                <div class="text-7 color-main-1">
                                                    {{$itemdichvu->namedm}}
                                                </div>

                                                <div class="text-8 mt-1">
                                                    {{number_format($itemdichvu->dongia)}}đ
                                                </div>

                                                <div class="img-1 mt-4">
                                                    <img class="" src="{{ asset('uploads/'.$itemdichvu->img) }}" alt="">
                                                </div>

                                                <div class="text-1 limit-text-row-1 mt-4">
                                                    {{$itemdichvu->name}}
                                                </div>

                                                <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                    {{$itemdichvu->motangan}}

                                                </p>
                                            </div>
                                            <div class="w-100 text-center mb-4">
                                                <button data-show="one" class="button btn-4 btn-datlich">Đặt
                                                    lịch</button>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nhieuquantam" role="tabpanel"
                        aria-labelledby="nhieuquantam-tab">
                        <div class="w-100">
                            <div class="box-dichvu">
                                <div class="box-sev">
                                    @foreach ($danhmuc as $temdanhmuc)

                                    <div class="dichvu-item">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                {{$temdanhmuc->name}}
                                            </div>

                                            <div class="text-8 mt-1">
                                                {{number_format($temdanhmuc->dongiadm)}}đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('uploads/'.$temdanhmuc->img) }}" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                {{$temdanhmuc->namedm}}
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed
                                                do eiusmod tempor incididunt.

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">
                                            <a href="">
                                                <button class="btn-4">Đặt lịch</button>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="xemtatca" role="tabpanel"
                    aria-labelledby="xemtatca-tab">
                        <div class="w-100">
                            <div class="box-dichvu">
                                <div class="box-sev">

                                    @foreach ($alldichvu as $itemalldv)
                                    <div class="dichvu-item">

                                        <div class="content-1">
                                            <div class="text-7 color-main-1">
                                                {{$itemalldv->namedm}}
                                            </div>

                                            <div class="text-8 mt-1">
                                                {{number_format($itemalldv->dongia)}}đ
                                            </div>

                                            <div class="img-1 mt-4">
                                                <img class="" src="{{ asset('uploads/'.$itemalldv->img) }}" alt="">
                                            </div>

                                            <div class="text-1 limit-text-row-1 mt-4">
                                                {{$itemalldv->name}}
                                            </div>

                                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                                {{$itemalldv->motangan}}

                                            </p>
                                        </div>
                                        <div class="w-100 text-center mb-4">
                                            <a href="">
                                                <button class="btn-4">Đặt lịch</button>
                                            </a>
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

<div class="box-product">
    @include('Site.components.slide-logo')
    <div class="list-product">
        <div class="container">
            <div class="w-100 text-center mb-4">
                <div class="title-small text-center" style="margin-top: 5em !important;">
                    MỚI NHẤT
                </div>
                <div class="text-4">
                    Sản Phẩm Mới Nhất
                </div>
                {{-- <div class="line-2"></div> --}}
            </div>

            <div class="box-product-1">
                <div class="row">
                    <?php $spkhac=\Illuminate\Support\Facades\DB::table('sanpham')->select('sanpham.*', 'danhmuc.name AS tendm')
                        ->orderBy("sanpham.id","DESC")
                        ->join("danhmuc", "sanpham.iddanhmuc", "=", "danhmuc.id")->where('sanpham.trangthai', "=", 1)->limit(4)->get();?>
                    @foreach($spkhac as $i => $spk)
                        <?php $anhk=json_decode($spk->img);
                        $splienquanctkhac=\Illuminate\Support\Facades\DB::table('sanphamchitiet')->select("*")->where('idsanpham', $spk->id)->limit(1)->get();
                            error_reporting(0);
                        ?>
                        <div class="col-3">
                            <div class="card rounded-0 product-card child-item-sanpham zbar">
                                <div class="card-header bg-transparent border-bottom-0">
                                    @if(session()->has('khachHang') && session('khachHang') != '')
                                        <?php $checkyeuthich1= \Illuminate\Support\Facades\DB::table('yeuthich')->where('idkhachhang', session('khachHang')->id)->where('idsanphamchitiet', $spk->id)->doesntExist()?>
                                        <?php if ($checkyeuthich1 == false) {?>
                                        <div class="btn-add-wishlist btn-sticky hover-scale-1 active" id="tym{{$spk->id}}" onclick="AddYeuThich({{$spk->id}})">
                                            <div class="box-cicrle">
                                                <i class="fas fa-heart heart-full"></i>
                                                <i class="far fa-heart heart-line"></i>
                                            </div>
                                        </div>
                                        <?php } else{?>
                                        <div class="btn-add-wishlist btn-sticky hover-scale-1" id="tym{{$spk->id}}" onclick="AddYeuThich({{$spk->id}})">
                                            <div class="box-cicrle">
                                                <i class="fas fa-heart heart-full"></i>
                                                <i class="far fa-heart heart-line"></i>
                                            </div>
                                        </div>
                                        <?php }?>
                                    @else
                                        <div class="btn-add-wishlist btn-sticky hover-scale-1" id="tym{{$spk->id}}" onclick="AddYeuThich({{$spk->id}})">
                                            <div class="box-cicrle">
                                                <i class="fas fa-heart heart-full"></i>
                                                <i class="far fa-heart heart-line"></i>
                                            </div>
                                        </div>
                                    @endif
                                    @if($spk->giamgia !="")
                                        <div class="btn-add-discout btn-sticky hover-scale-1">
                                            <div class="box-cicrle-giamgia p-2 rounded text-white">
                                                <span style="font-size: 10pt;">{{$spk->giamgia}}%</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <img src="{{ asset('/uploads')}}/{{$anhk[0]}}" class="card-img-top img-sanpham-zbar" alt="...">
                                <div class="card-body text-center">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">{{$spk->tendm}}</p>
                                        </a>
                                        <a href="{{URL::to("san-pham/chi-tiet", $spk->id)}}">
                                            <h6 class="product-name mb-2" style="height: 40px;"><?php if (strlen($spk->name)<= 45){echo $spk->name;}else  { echo substr($spk->name, 0, 45).'...';}?></h6>
                                        </a>
                                        <div class="d-flex align-items-center justify-content-center" style="height: 50px;">
                                            <div class="mb-1 product-price">
                                                <span class="me-1 text-decoration-line-through">{{number_format($splienquanctkhac[0]->dongia), ""}} đ</span> / <span>{{$splienquanctkhac[0]->ml}}ml</span>
                                                @if($spk->giamgia !="")
                                                    <br><span style="font-size: 13pt;">Giảm còn: </span><span class="me-1 text-decoration-line-through font-weight-bold">{{number_format($splienquanctkhac[0]->dongia-(($splienquanctkhac[0]->dongia * $spk->giamgia)/100)), ""}}đ</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <button class="w-100 btn-sanpham btn-5" onclick="ThemGioHang({{$splienquanctkhac[0]->id}})"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                                <a href="{{URL::to("san-pham/chi-tiet", $spk->id)}}"> <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="w-100 text-center mt-3">
                <a href="">
                    <button class="btn-full">Xem tất cả</button>
                </a>
            </div> --}}
        </div>
    </div>
</div>

@include('Site.components.gioithieulieutrinh')

<div class="box-blog">
    <div class="container">
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
                <div class="tab-content" id="">
                    <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                        <div class="row">
                            <div class="col-xl-7 pr-0">
                                <div class="blog-bigsize">
                                    <div class="box-danhmuc">
                                        Sức khỏe
                                    </div>

                                    <div class="img-1 w-100">
                                        <img class="img-fluid" src="{{ asset('uploads/beauty-spa.jpg') }}" alt="">
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
                                            <a href="" class="">
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
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                                        <img class="img-fluid" src="{{ asset('uploads/beauty-spa.jpg') }}" alt="">
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
                                            <a href="" class="">
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
                                                <div class="img-1 image-tin-1">
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                                                    <img class="img-fluid" src="{{ asset('uploads/photo-1635609047.jpg') }}" alt="">
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('javascript')
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>
@endsection
