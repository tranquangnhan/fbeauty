@extends('Admin.LayoutAdmin')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="page-title">{{ $namePage }}</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            @foreach ($breadcrumbArray as $breadcrumbItem)
                                                @if ($breadcrumbItem['link'] == '')
                                                    <li class="breadcrumb-item active">{{ $breadcrumbItem['name'] }}</li>
                                                @else
                                                    <li class="breadcrumb-item"><a href="{{ $breadcrumbItem['link'] }}">{{ $breadcrumbItem['name'] }}</a></li>
                                                @endif
                                            @endforeach
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box" style="min-height: 400px">
                                    <div class="card-head">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="datlich-day-tab" data-toggle="tab" href="#datlich-day" role="tab" aria-controls="datlich-day" aria-selected="true">Ngày</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="datlich-day" role="tabpanel" aria-labelledby="datlich-day-tab">
                                            <div class="card-box p-0">
                                                <div class="card-header bg-white">
                                                    <div class="row justify-content-between">
                                                        <div class="form-group d-flex align-items-center bg-primary" style="padding-right: 1em;">
                                                            <input type="text" class="form-control border-none text-white ip-color-placeholder-white" placeholder="Tìm tên khách hàng" style="background: none;">
                                                            <i class="fas fa-search text-white"></i>
                                                        </div>

                                                        <div class="right-box">
                                                            <div class="d-flex">
                                                                <button class="btn btn-primary waves-effect waves-light mr-2">Trước</button>
                                                                <div class="form-group mb-0">
                                                                    <input type="date" class="form-control" placeholder="Today">
                                                                </div>
                                                                <button class="btn btn-primary waves-effect waves-light ml-2">Sau</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="line-box" style="width: 100%;background: #e0e0e0;height: 6px;border-radius: 6px;"></div>
                                                    </div>
                                                </div>

                                                <div class="card-body" style="overflow: auto;max-height: 600px;">
                                                    @foreach ($duLieuCalendar as $item)
                                                        <div class="d-flex lich-item align-items-center">
                                                            <div class="time-item">
                                                                <span>{{ $item->gio }}</span>
                                                                <button class="ml-4 mr-3 btn-custom-success btn-select-lich"><i class="fas fa-check mr-1"></i>SELECT</button>
                                                            </div>

                                                            <div class="list-datlich d-flex">

                                                                @for ($i = 0; $i < $item->soluongkhach; $i++)
                                                                    <div class="datlich-item">
                                                                        @if (isset($item->listDatLich))
                                                                            @if (isset($item->listDatLich[$i]))
                                                                                <div class="header-item d-flex align-items-center">
                                                                                    <b>{{ $item->listDatLich[$i]->name }}</b>
                                                                                    <button class="btn-none check-in ml-auto" id-dat-lich={{ $item->listDatLich[$i]->id }}><i class="fas fa-user-check"></i></button>
                                                                                </div>

                                                                                <div class="body-item">
                                                                                    <div class="name-nhanvien">{{ $item->listDatLich[$i]->nameNhanVien }}</div>
                                                                                    <li class="limit-text-row-1 ">
                                                                                        @isset($item->listDatLich[$i]->arrayDichVu)
                                                                                            <a href="" class="cl-black">{{ $item->listDatLich[$i]->arrayDichVu[0]->name }}</a>
                                                                                            @if (count($item->listDatLich[$i]->arrayDichVu) > 1)
                                                                                                ...
                                                                                            @endif
                                                                                        @else
                                                                                            <a href="" class="cl-black">Khách muốn tư vấn</a>
                                                                                        @endisset

                                                                                    </li>
                                                                                </div>

                                                                                <div class="footer-item">
                                                                                    <div class="cirle-button">
                                                                                        <i class="fas fa-plus-circle"></i>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    </div>

                                                                @endfor
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2</div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3</div>
                                      </div>
                                </div>
                            </div>
                            {{-- <div id="full-calendar-datlich"></div> --}}

                        </div>

                    </div> <!-- container-fluid -->

                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')

@endsection
@section('custom-javascript')
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.9.0/main.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.9.0/main.css">
<script src="{{ asset('Admin/assets') }}/js/pages/datlichremake.js"></script>

@endsection
