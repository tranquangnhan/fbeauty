@extends('Admin.LayoutAdmin')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <a href="{{route("datlich.create")}}">
                            <p class="mt-0 header-title btn btn-primary">Đặt lịch</p>
                        </a>
                        <div class="container">
                            @if(session('thanhcong'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('thanhcong')}}
                            </div>
                            @endif
                        </div>
                        <div id="basicwizard" class="mt-4">
                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-2">
                                <li class="nav-item">
                                    <a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span class="d-none d-sm-inline">Danh sách</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-face-profile mr-1"></i>
                                        <span class="d-none d-sm-inline">Hôm nay</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#basictab3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                        <span class="d-none d-sm-inline">7 ngày tới</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content border-0 mb-0">
                                <div class="tab-pane" id="basictab1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="showgio">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Stt</th>
                                                            <th scope="col">Dịch vụ</th>
                                                            <th scope="col">Nhân viên</th>
                                                            <th scope="col">Khách hàng</th>
                                                            <th scope="col">Thời gian đặt</th>
                                                        </tr>
                                                    </thead>
                                                    @foreach ($data as $i=> $data1)

                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">{{$i+=1}}</th>
                                                            <td>
                                                                @foreach ($data1->arrNameObject as $item)
                                                                {{$item[0]['name']->name}}
                                                                <br>
                                                                @endforeach
                                                            </td>
                                                            <td>{{$data1->namenv}}</td>
                                                            <td>{{$data1->namekh}}</td>
                                                            <td>{{$data1->thoigiandat}}</td>
                                                        </tr>
                                                    </tbody>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="basictab2">
                                    <div class="row">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Stt</th>
                                                    <th scope="col">Dịch vụ</th>
                                                    <th scope="col">Nhân viên</th>
                                                    <th scope="col">Khách hàng</th>
                                                    <th scope="col">Thời gian đặt</th>
                                                </tr>
                                            </thead>
                                            @foreach ($data2 as $i=> $data1)
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{$i+=1}}</th>
                                                    <td>
                                                        @foreach ($data1->arrNameObject as $item)
                                                        {{$item[0]['name']->name}}
                                                        <br>
                                                        @endforeach
                                                    </td>
                                                    <td>{{$data1->namenv}}</td>
                                                    <td>{{$data1->namekh}}</td>
                                                    <td>{{$data1->thoigiandat}}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="basictab3">
                                    <div class="row">
                                        <div class="col-12">
                                            {{-- <div class="text-center">
                                                <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                <h3 class="mt-0">Thank you !</h3>

                                                <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus.
                                                    Suspendisse convallis dignissim eros at volutpat. In egestas mattis
                                                    dui. Aliquam
                                                    mattis dictum aliquet.</p>

                                                <div class="mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">I agree
                                                            with the Terms and Conditions</label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <ul class="list-inline wizard mb-0">
                                    <li class="previous list-inline-item">
                                        <a href="javascript: void(0);" class="btn btn-secondary">Lùi</a>
                                    </li>
                                    <li class="next list-inline-item float-right">
                                        <a href="javascript: void(0);" class="btn btn-secondary">Tiếp</a>
                                    </li>
                                </ul>

                            </div> <!-- tab-content -->
                        </div> <!-- end #basicwizard-->
                    </div>
                </div>
            </div>

            <!-- end row -->
            <div class="row d-flex justify-content-end">
                <div class="col-lg-5">
                    <nav>
                        <ul class="pagination pagination-split">
                            <?php
                                // echo $Pagination;
                                ?>
                        </ul>
                    </nav>

                </div>
            </div>


        </div> <!-- container-fluid -->

    </div> <!-- content -->


</div>

@endsection