@extends('Site.layout')

@section('title')
    Dịch Vụ
@endsection

@section('main')
<div class="fa-dichvu my-5" style="margin-bottom: 5em !important;">
    <div class="container">
        <div class="w-100 text-center mb-5">
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
        </div>
        <div class="w-100 text-center mb-5">
                <div class="head-service-item">`
                    <div class="d-flex">
                        <ul class="nav nav-tabs" id="myTab-1" role="tablist">
                            @foreach ($listDanhMucDichVu1 as $listdanhmuc1)

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link btn-3 @if ($loop->index == 0) active @endif black-1" id="{{$listdanhmuc1->slug}}-tab" data-toggle="tab" href="#{{$listdanhmuc1->slug}}" role="tab" aria-controls="{{$listdanhmuc1->slug}}" aria-selected="true">{{ $listdanhmuc1->name }}</a>
                                </li>

                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <div class="list-tabs">
                <div class="tab-content" id="myTabContent-1">
                    @foreach ($arrDichVu1 as $itemdichvu)
                    <div class="tab-pane @if ($loop->index == 0) show active @endif  fade" id="{{$listDanhMucDichVu1[$loop->index]->slug}}" role="tabpanel" aria-labelledby="{{$listDanhMucDichVu1[$loop->index]->slug}}-tab">
                        <div class="w-100">
                            <div class="fa-list-dichvu mt-1">

                            @foreach ($itemdichvu as $dichvuitem)
                                <div class="dichvu-item d-plex w-100">
                                    <div class="content-1" onclick="window.location='{{ asset('dich-vu') }}/{{$dichvuitem->slug}}';">
                                        <div class="text-7 color-main-1">
                                            {{$dichvuitem->namedm}}
                                        </div>

                                        <div class="text-8 mt-1">
                                            {{number_format($dichvuitem->dongia)}} đ
                                        </div>

                                        <div class="img-1 mt-4">
                                            <a href="{{ asset('dich-vu') }}/{{$dichvuitem->slug}}">
                                                <img class="" src="{{ asset('uploads/'.$dichvuitem->img) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="text-1 limit-text-row-1 mt-4">
                                            {{$dichvuitem->name}}
                                        </div>

                                        <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                            {{$dichvuitem->motangan}}

                                        </p>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

