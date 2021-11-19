@extends('site.layout')

@section('title')
    Liên hệ
@endsection

@section('main')
<div class="fa-lienhe">
    <div class="mt-4 col-8 container-fluid">
        <div class="row div-lienhe mb-5">
            <div class="col">
                <div class="title text-center mt-5">
                <i><span class="span-lienhe main-title" style="color:black;font-family: 'Roboto', sans-serif;">Liên hệ </span></i> 
                    <h3 class="h3-title mt-0">Nhân viên tư vấn</h3>
                </div>
                <form class="col-11  container-fluid">
                    <div class="form-row">
                    <div class="form-group col-md-6  ">
                        <input type="text" class="form-control pt-4 pb-4" placeholder="Nhập tên của bạn" id="inputEmail4">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" placeholder="Nhập email của bạn" class="form-control pt-4 pb-4" id="inputPassword4">
                    </div>
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control pt-4 pb-4" id="inputAddress" placeholder="Địa chỉ của bạn">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Nội dung" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn text-white button-lienhe mb-5 mt-4 px-5">Liên hệ</button>
                </form>
            </div>
            <div class="col-6 div2">
                <div class="div-img mx-0 position-relative">
                    <img class=""  height="100%"
                    src="{{ asset('Site/images') }}/Park_Ji-Yeon-Tara-p1.jpg"
                    alt="">
                </div>
                <div class="div-img2 position-absolute text-white mx-3">
                    {{-- <h3>Liên hệ nhanh</h3>
                    <p>Nếu bạn có bất kỳ câu hỏi nào, chỉ cần sử dụng các chi tiết liên hệ sau.</p> --}}
                </div>
            </div>
        </div>
        <div class="coso-lh text-center">
            @foreach ($coso as $item)
            <p><b>{{$item->name}}:</b> {{$item->diachi}}</p>
            {{-- <p><b>Cơ sở 2:</b> 398 Nguyễn Văn Nghi, Phường 7, Quận Gò Vấp</p> --}}
            @endforeach
        </div>
    </div>
    <div class="div-map mb-5 mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d62702.15993331947!2d106.62899721916848!3d10.820112183336422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zY8O0bmcgdmnDqm4gcGjhuqduIG3hu4FtIHF1YW5nIHRydW5n!5e0!3m2!1svi!2s!4v1636384106191!5m2!1svi!2s" 
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

@endsection
<link rel="stylesheet" href="{{ asset('Site/css') }}/contact.css">
