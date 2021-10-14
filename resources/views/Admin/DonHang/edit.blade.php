
@extends('Admin.layoutadmin')
@section('content')

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row d-flex justify-content-center">
                    <div class="col-xl-10">
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

                            <h4 class="header-title mt-0 mb-3">Sửa Cơ Sở</h4>

                            <form data-parsley-validate action="{{route('donhang.update',$data->id)}}" id="formadd" novalidate onsubmit="return submitForm()" method="post" enctype="multipart/form-data">
                                @csrf
                                {!! method_field('patch') !!}


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="">Tên Người Đặt</label><span style="color:red;"> (*)</span>

                                            <input type="text" name="namedat" class="form-control @error('name') border-error @enderror name" value="{{$khachHang->name}}"  parsley-trigger="change" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Mã Giảm Giá</label><span style="color:red;"> (*)</span>
                                            <input type="text" name="magiamgia" class="form-control @error('name') border-error @enderror name" value="{{$data->idgiamgia}}"  parsley-trigger="change" required >
                                            <!-- <select class="form-control input-sm m-bot15" name="magiamgia" >
                                                <option value="">{{$data->idgiamgia}}</option>
                                                </select> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tên Người Nhận</label><span style="color:red;"> (*)</span>
                                            <input type="text" name="namenguoinhan" class="form-control @error('name') border-error @enderror name" value="{{$data->tennguoinhan}}"  parsley-trigger="change" required
                                                   placeholder="Tên Người Nhận" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa Chỉ Khách Hàng</label><span style="color:red;"> (*)</span>
                                            <input type="text" name="diachi" class="form-control @error('name') border-error @enderror name" value="{{$data->diachikhachhang}}"  parsley-trigger="change" required
                                                   placeholder="Địa Chỉ Khách Hàng" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">SĐT Người Nhận</label><span style="color:red;"> (*)</span>
                                            <input type="text" name="sodienthoai" class="form-control @error('name') border-error @enderror name" value="{{$data->sdtnguoinhan}}"  parsley-trigger="change" required
                                                   placeholder="SĐT Người Nhận" >
                                        </div><div class="form-group">
                                            <label for="">Tổng Tiền Trước Giảm Giá</label><span style="color:red;"> (*)</span>
                                            <input type="text" name="tongtientruocgiamgia" class="form-control @error('name') border-error @enderror name" value="{{$data->tongtientruocgiamgia}}"  parsley-trigger="change" required
                                                   placeholder="Tổng Tiền Trước Giảm Giá" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tổng Tiền sau Giảm Giá</label><span style="color:red;"> (*)</span>
                                            <input type="text" name="tongtiensaugiamgia" class="form-control @error('name') border-error @enderror name" value="{{$data->tongtiensaugiamgia}}"  parsley-trigger="change" required
                                                   placeholder="Tổng Tiền sau Giảm Giá" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Ghi Chú Khách Hàng</label><span style="color:red;"> (*)</span>
                                            <textarea rows="9" cols="70" type="text" name="ghichukhachhang" class="form-control @error('name') border-error @enderror name"  parsley-trigger="change" required
                                                   placeholder="Ghi Chú Khách Hàng">{{$data->ghichucuakhachhang}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phương Thức Thanh Toán</label><span style="color:red;"> (*)</span>
                                            <input type="text" name="phuongthucthanhtoan" class="form-control @error('name') border-error @enderror name" value="{{$data->phuongthucthanhtoan}}"  parsley-trigger="change" required readonly
                                                   placeholder="Phương Thức Thanh Toán" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phương Thức Giao Hàng</label><span style="color:red;"> (*)</span>
                                            <select name="phuongthucgiaohang"  placeholder="Phương Thức Giao Hàng" class="form-control @error('name') border-error @enderror name" value="{{$data->phuongthucgiaohang}}" parsley-trigger="change">
                                                 <option>{{$data->phuongthucgiaohang}}</option>
                                                 <option>GHTK</option>
                                                 <option>EMS</option>
                                                 <option>Sship</option>
                                            </select>
                                        </div>


                                    </div>

                                </div>

                                <div class="form-group text-right mb-0 mt-5">
                                    <input type="submit" class="btn btn-primary waves-effect waves-light mr-1 update"  id='add_product'>
                                    <a href="/quantri/coso" clas="btn btn-secondary waves-effect waves-light">Hủy</a>
                                </div>

                            </form>
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
