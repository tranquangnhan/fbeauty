@extends('site.layout')

@section('title')
    Sản Phẩm
@endsection

@section('main')
<div class="fa-sanphamchitiet mt-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="fa-slider-images">
                    @if($sanpham[0]->giamgia!='')
                    <div class="box-giamgia-1 rounded">
                        {{$sanpham[0]->giamgia}}%
                    </div>
                    @endif
                    <div class="children-slider-images">
                        <div class="owl-carousel owl-theme" id="slide-images-sanpham-2">
                            <?php $slide1= json_decode($sanpham[0]->img);?>
                            @foreach($slide1 as $st => $sli )

                            <div class="item img-sanpham-item">
                                <img src="{{ asset('uploads')}}/{{$sli}}" class="img-fluid" alt="...">
                            </div>
                                @endforeach

                        </div>
                        <div class="owl-dots" id="custom-dots-1">
                            <?php $slide2= json_decode($sanpham[0]->img);?>
                                @foreach($slide2 as $st => $sli )
                            <div class="owl-dot dot-custom <?php if ($st == 0){echo 'active';}?>">
                                <img src="{{ asset('uploads')}}/{{$sli}}" class="img-fluid" alt="...">
                            </div>
                                    @endforeach
                        </div>
                    </div>
                </div>
                <div class="fa-mota mt-5">
                    <div class="title-cs-1">Mô Tả Sản Phẩm</div>
                    <hr>
                    <div class="noidung p-3">
                        {{$sanpham[0]->noidung}}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 " >
                <div class="fa-info-sanpham">
                    <div class="product-info p-5 rounded" style="background-color: rgb(255,237,232);">
                        <a href="javascript:;">
                            <p class="product-catergory font-13 mb-1">{{$sanpham[0]->tendm}}</p>
                        </a>
                        <h6 class="product-name mb-2">{{$sanpham[0]->name}}</h6>
                        <p class="card-text product-motangan">{{$sanpham[0]->mota}}</p>
                        <div class="d-flex align-items-center">
                            <div class="w-100 mb-1 product-price d-flex">
                                <span class="me-1 text-decoration-line-through giasanpham">{{number_format($sanphamchitietlimit[0]->dongia), ""}} đ </span>
                                <div class="d-flex mt-auto mb-auto">
                                    <div class="list-info-sanpham"><span class="dungtich-ml"> {{$sanphamchitietlimit[0]->ml}}ml</span></div>
                                    <div class="list-info-sanpham"><span class="soluotmua">{{$sanphamchitietlimit[0]->soluotmua}}</span> <small>Đã bán</small></div>
                                    <div class="list-info-sanpham"><span class="tonkho">{{$sanphamchitietlimit[0]->tonkho}}</span> <small>Sản phẩm có sẵn</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="dungtich mt-2">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <span class="text-bold">Dung tích </span>
                                </div>

                                <div class="col-9">
                                    @foreach($sanphamchitiet as $index =>$spct)

                                    <div class="basic-btn-gray btn-dungtich  <?php echo($index==0)?'active':'';?>" data-soluotmua="{{$spct->soluotmua}}" data-ml="{{$spct->ml}}" data-kho="{{$spct->tonkho}}" data-gia="{{$spct->dongia}}">{{$spct->ml}} ml</div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                        <div class="soluong mt-3">
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <span class="text-bold">Số lượng </span>
                                </div>
                                <div class="col-9">
                                    <div class="input-group inline-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary btn-minus btn-cal">
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input class="form-control text-center quantity" min="1" name="quantity" value="1" type="number" disabled>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-plus btn-cal">
                                            <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-start">
                                <button class="btn-5 ml-0 mr-2  bg-white"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                <button class="btn-6 ml-0">Mua ngay</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="sanpham-lienquan mt-5">
            <div class="title-cs-1 p-2 rounded" style="background-color: pink">
                <span class="btn btn-light text-pink">Sản Phẩm Liên Quan</span>
            </div>
            <hr>
            <div class="row">
                <?php $splienquan=\Illuminate\Support\Facades\DB::table('sanpham')->select('*')->where('iddanhmuc', $sanpham[0]->iddanhmuc)->limit(4)->get();?>
                @foreach($splienquan as $i => $splq)
                    <?php $anh=json_decode($splq->img);
                        $splienquanct=\Illuminate\Support\Facades\DB::table('sanphamchitiet')->select("*")->where('idsanpham', $splq->id)->limit(1)->get();
                    ?>
                    <div class="col-3">
                    <div class="card product-card child-item-sanpham zbar">
                        <div class="card-header bg-transparent border-bottom-0">
                            <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                <div class="box-cicrle">
                                    <i class="fas fa-heart heart-full"></i>
                                    <i class="far fa-heart heart-line"></i>
                                </div>
                            </div>
                            @if($sanpham[0]->giamgia !="")
                            <div class="btn-add-discout btn-sticky hover-scale-1">
                                <div class="box-cicrle-giamgia p-2 rounded text-white">
                                    <span style="font-size: 10pt;">{{$sanpham[0]->giamgia}}%</span>
                                </div>
                            </div>
                                @endif
                        </div>
                        <img src="{{ asset('/uploads')}}/{{$anh[0]}}" class="card-img-top img-sanpham-zbar" alt="...">
                        <div class="card-body text-center">
                            <div class="product-info">
                                <a href="javascript:;">
                                    <p class="product-catergory font-13 mb-1">{{$sanpham[0]->tendm}}</p>
                                </a>
                                <a href="{{URL::to("san-pham/chi-tiet", $splq->id)}}">
                                    <h6 class="product-name mb-2"><?php if (strlen($splq->name)<= 45){echo $splq->name;}else  { echo substr($splq->name, 0, 45).'...';}?></h6>
                                </a>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="mb-1 product-price">
                                        <span class="me-1 text-decoration-line-through">{{number_format($splienquanct[0]->dongia), ""}} đ</span> / <span>{{$splienquanct[0]->ml}} ml</span>
                                    </div>
                                </div>
                                <div class="product-action mt-2">
                                    <div class="d-grid gap-2">
                                        <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
                                        <a href="{{URL::to("san-pham/chi-tiet", $splq->id)}}"> <button class="w-100 btn-sanpham btn-5 mt-2"><i class="fas fa-search"></i> Xem chi tiết</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>

        <div class="sanpham-lienquan my-2">
            <div class="title-cs-1 p-2 rounded" style="background-color: pink">
                <span class="btn btn-light">Sản phẩm khác</span>
            </div>
            <hr>
            <div class="row">
                <?php $spkhac=\Illuminate\Support\Facades\DB::table('sanpham')->select('sanpham.*', 'danhmuc.name AS tendm')
                    ->join("danhmuc", "sanpham.iddanhmuc", "=", "danhmuc.id")
                    ->where('iddanhmuc', '!=',$sanpham[0]->iddanhmuc)->limit(4)->get();?>
                @foreach($spkhac as $i => $spk)
                        <?php $anhk=json_decode($spk->img);
                        $splienquanctkhac=\Illuminate\Support\Facades\DB::table('sanphamchitiet')->select("*")->where('idsanpham', $spk->id)->limit(1)->get();
                        ?>
                    <div class="col-3">
                        <div class="card rounded-0 product-card child-item-sanpham zbar">
                            <div class="card-header bg-transparent border-bottom-0">
                                <div class="btn-add-wishlist btn-sticky hover-scale-1">
                                    <div class="box-cicrle">
                                        <i class="fas fa-heart heart-full"></i>
                                        <i class="far fa-heart heart-line"></i>
                                    </div>
                                </div>
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
                                        <h6 class="product-name mb-2"><?php if (strlen($spk->name)<= 45){echo $spk->name;}else  { echo substr($spk->name, 0, 45).'...';}?></h6>
                                    </a>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="mb-1 product-price">
                                            <span class="me-1 text-decoration-line-through">{{number_format($splienquanctkhac[0]->dongia), ""}} đ</span> / <span>{{$splienquanctkhac[0]->ml}}ml</span>

                                        </div>
                                    </div>
                                    <div class="product-action mt-2">
                                        <div class="d-grid gap-2">
                                            <button class="w-100 btn-sanpham btn-5"><i class="fas fa-cart-plus"></i> Thêm giỏ hàng</button>
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

    </div>
</div>

@endsection

@section('javascript')
    <script src="{{ asset('Site/js') }}/sanpham.js"></script>
@endsection
