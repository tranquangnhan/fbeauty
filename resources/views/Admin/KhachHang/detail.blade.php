@extends('Admin.LayoutAdmin')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="mt-0 header-title">Thông Tin Khách Hàng</h4>
                        <p class="text-muted font-14 mb-3">
                        Thông tin chi tiết mô tả của khách hàng.
                        </p>
                        <div class="boxinfouser">
                            <div class="left">
                                {{-- <i class="mdi mdi-account-circle"></i> --}}
                                <img class="d-flex mr-3 rounded-circle avatar-md" style="object-fit: cover" alt="64x64" src="{{asset('uploads/'.$KhachHang->img)}}">
                            </div>
                            <div class="right ml-2">
                                <div class="boxnguoidung">
                                    <p>Anh(chị):</p><h4> {{$KhachHang->name}} </h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        Số điện thoại: {{$KhachHang->sdt}}
                                    </div>
                                    <div class="col-lg-9">
                                        Email: {{$KhachHang->email}}
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div id="basicwizard" class="mt-4">

                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-2">
                                <li class="nav-item">
                                    <a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span class="d-none d-sm-inline">Liệu Trình</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-face-profile mr-1"></i>
                                        <span class="d-none d-sm-inline">Dịch Vụ</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#basictab3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                        <span class="d-none d-sm-inline">Finish</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content border-0 mb-0">
                                <div class="tab-pane" id="basictab1">
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-centered mb-0" id="btn-editable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nhân Viên Làm</th>
                                                        <th>Ngày bắt đầu</th>
                                                        <th>Ngày Kết thúc</th>
                                                        <th>Ghi Chú</th>
                                                        <th>Hành Động</th>
                                                    </tr>
                                                </thead>
                                            
                                                <tbody>
                                                    @foreach ($LieuTrinh as $item)
                                                        
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <img  class="img-common"  src="{{ asset($BASE_URL_UPLOAD_STAFF.$item->imgnv) }}"><br>
                                                            </td>
                                                            <td>{{date('d-m-Y',$item->ngaybatdau) }}</td>
                                                            <td> {{date('d-m-Y',$item->dukienketthuc) }}</td>
                                                            <td>{{$item->ghichu}}</td>
                                                            <td class="d-flex justify-content-center">
                                                                <a class="btn btn-primary mr-2 mt-3" href="{{route('lieutrinh.edit',$item->idlieutrinh)}}" role="button"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                  
                                                </tbody>
                                            </table>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="basictab2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="name"> First name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name" name="name" class="form-control" value="Francis">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="surname"> Last name</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="surname" name="surname" class="form-control" value="Brinkman">
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-3">
                                                <label class="col-md-3 col-form-label" for="email">Email</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="email" name="email" class="form-control" value="cory1979@hotmail.com">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div class="tab-pane" id="basictab3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                <h3 class="mt-0">Thank you !</h3>

                                                <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                    mattis dictum aliquet.</p>

                                                <div class="mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                    </div>
                                                </div>
                                            </div>
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