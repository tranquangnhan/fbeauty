@extends('Admin.LayoutAdmin')

@section('content')
@php
    use Carbon\Carbon;
@endphp
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title">Liệu Trình</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Liệu Trình</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-8">
                    <div class="card-box task-detail">
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
                        <div class="media mb-3">
                            <img class="d-flex mr-3 rounded-circle avatar-md" alt="64x64" src="{{asset('uploads/'.$KhachHang->img)}}">
                            <div class="media-body">
                                <h4 class="media-heading mt-0">{{$KhachHang->name}}</h4>
                                <span class="">{{$KhachHang->sdt}}</span><br>
                                <span class="">{{$KhachHang->email}}</span>
                            </div>
                        </div>

                        <h4>Ghi chú liệu trình</h4>

                        <p class="text-muted">
                            {{$LieuTrinh->ghichu}}
                        </p>

                      
                        <div class="row task-dates mb-0 mt-2">
                            <div class="col-lg-6">
                                <h5 class="font-600 m-b-5">Ngày bắt đầu</h5>
                                <p> {{Carbon::parse($LieuTrinh->ngaybatdau)->format('Y-m-d')}}</p>
                            </div>

                            <div class="col-lg-6">
                                <h5 class="font-600 m-b-5">Dự kiến hết hạn</h5>
                                <p> {{Carbon::parse($LieuTrinh->dukienketthuc)->format('Y-m-d')}}</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="task-tags mt-2">
                            <h5>Dịch Vụ</h5>
                            <div class="row">
                                @foreach ($LieuTrinhChiTiet as $item)
                                    <div class="col-xl-12 col-md-6">
                                        <div class="card-box widget-user">
                                            <div class="media">
                                                <div class="avatar-lg mr-4">
                                                    <img src="{{asset('uploads/'.$item->imgdichvu)}}" class="rounded-circle avatar-xl imgdichvu" alt="user">
                                                </div>
                                                <div class="media-body overflow-hidden">
                                                    <h5 class="mt-0 mb-1">{{$item->tendv}}</h5>
                                                    <p class="text-muted mb-2 font-13 text-truncate">{{substr($item->motadv,0,200)}}</p>
                                                    <small class="text-warning"><b>{{$item->tennv}}</b></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                @endforeach
                            </div>
                           
                        </div>


                    </div>
                </div><!-- end col -->

                <div class="col-md-4">
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

                        <h4 class="header-title mt-0 mb-3">Nhân Viên</h4>

                        <div>
                            {{-- profile khách hàng --}}
                            <div>
                                <img src="{{asset('uploads/'.$NhanVien->img)}}" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">

                            
                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Tên :</strong> <span class="ml-2">{{$KhachHang->name}}</span></p>

                                    <p class="text-muted font-13"><strong>Số Điện Thoại :</strong><span class="ml-2">{{$KhachHang->sdt}}</span></p>

                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="ml-2">{{$KhachHang->email}}</span></p>

                                </div>

                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Send Message</button>
                            </div>
                            {{--end profile khách hàng --}}

                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->        
            
        </div> <!-- container-fluid -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                   2016 - 2020 &copy; Adminto theme by <a href="">Coderthemes</a> 
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

@endsection
