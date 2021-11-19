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
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Đặt Lịch</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            {{-- <span class="badge badge-success badge-pill float-left mt-3">{{ $phanTramDatLich }}% <i class="mdi mdi-trending-up"></i> </span> --}}
                                            <h2 class="font-weight-normal mb-1"> {{ $soDatLichToday }} <small>Khách</small>  </h2>

                                            <div class="d-flex align-items-center justify-content-center mt-2">
                                                <span class="badge badge-success badge-pill float-left">{{ $phanTramDatLich }}% <i class="mdi mdi-trending-up"></i> </span>
                                                <p class="text-muted mb-0 flex-grow-1">So với hôm qua</p>
                                            </div>
                                        </div>
                                        <div class="progress progress-bar-alt-success progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="{{ $phanTramDatLich }}" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $phanTramDatLich }}%;">
                                                <span class="sr-only">% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Doanh Thu Offline</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <h2 class="font-weight-normal mb-1"> {{ number_format($tongDoanhThuHoaDonToday, 0) }} đ</h2>
                                            <div class="d-flex align-items-center justify-content-center mt-2">
                                                <span class="badge badge-primary badge-pill float-left">{{ $phanTramDoanhThu }}% <i class="mdi mdi-trending-up"></i> </span>
                                                <p class="text-muted mb-0 flex-grow-1">So với hôm qua</p>
                                            </div>
                                        </div>
                                        <div class="progress progress-bar-alt-primary progress-sm">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                    aria-valuenow="{{ $phanTramDoanhThu }}" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $phanTramDoanhThu }}%;">
                                                <span class="sr-only">{{ $phanTramDoanhThu }}% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->


                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Đơn Hàng</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <h2 class="font-weight-normal mb-1"> {{ $numDonHangToday }} <small>Đơn hôm nay</small></h2>
                                            <div class="d-flex align-items-center justify-content-center mt-2">
                                                <span class="badge badge-warning badge-pill float-left">{{ $phanTramNumDonHang }}% <i class="mdi mdi-trending-up"></i> </span>
                                                <p class="text-muted mb-0 flex-grow-1">So với hôm qua</p>
                                            </div>

                                        </div>


                                        <div class="progress progress-bar-alt-warning progress-sm">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="{{ $phanTramNumDonHang }}" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $phanTramNumDonHang }}%;">
                                                <span class="sr-only">{{ $phanTramNumDonHang }}% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Doanh Thu Đơn Hàng</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            {{-- <span class="badge badge-pink badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span> --}}
                                            <h2 title="Cho đơn hoàn thành" class="font-weight-normal mb-1"> {{ number_format($doanhThuDonHangHoanThanhToday, 0) }} đ </h2>
                                            {{-- <p class="text-muted mb-3">Revenue today</p> --}}
                                            <div class="d-flex align-items-center justify-content-center mt-2">
                                                <span class="badge badge-pink badge-pill float-left">{{ $phanTramDoanhThuDonHangHoanThanh }}% <i class="mdi mdi-trending-up"></i> </span>
                                                <p class="text-muted mb-0 flex-grow-1">So với hôm qua</p>
                                            </div>
                                        </div>
                                        <div class="progress progress-bar-alt-pink progress-sm">
                                            <div class="progress-bar bg-pink" role="progressbar"
                                                    aria-valuenow="{{ $phanTramDoanhThuDonHangHoanThanh }}" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: {{ $phanTramDoanhThuDonHangHoanThanh }}%;">
                                                <span class="sr-only">{{ $phanTramDoanhThuDonHangHoanThanh }}% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0">Daily Sales</h4>

                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example" dir="ltr" style="height: 245px;" class="morris-chart"></div>
                                        <ul class="list-inline chart-detail-list mb-0">
                                            <li class="list-inline-item">
                                                <h5 style="color: #ff8acc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mt-0">Statistics</h4>
                                    <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mt-0">Total Revenue</h4>
                                    <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                    </div> <!-- container-fluid -->

                </div>
            </div>
        </div>
    </div>
@endsection
