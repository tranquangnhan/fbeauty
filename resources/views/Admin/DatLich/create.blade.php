@extends('Admin.LayoutAdmin')
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

                        <button class="btn btn-primary mb-4">Đặt lịch</button>

                        <form data-parsley-validate action="{{route('datlich.store')}}" novalidate method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Khách Hàng</label>
                                        <select class="form-control select2 @error('idkhachhang') border-error @enderror" name="idkhachhang">
                                            <option value="">Chọn</option>
                                            @foreach ($KhachHang as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('idkhachhang'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('iddanhmuc')[0]}}</li></ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nhân Viên</label>
                                        <select class="form-control select2 @error('idnhanvien') border-error @enderror" name="idnhanvien">
                                            <option value="">Chọn</option>
                                            @foreach ($NhanVien as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('idnhanvien'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('iddanhmuc')[0]}}</li></ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Thời gian đặt</label>
                                        <input type="date" class="form-control" name="thoigiandat" id="">
                                        @if ($errors->has('thoigiandat'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('iddanhmuc')[0]}}</li></ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Chọn dich vụ :</label> <br>
                                            @foreach ($DichVu as $item)
                                             <div class="form-check ml-1">
                                                <input type="checkbox" name="iddichvu[]" class="form-check-input" id="exampleCheck1" value={{(int)$item->id}}>
                                                <label class="form-check-label" for="exampleCheck1">{{$item->name}}</label>
                                              </div>
                                            @endforeach
                                            
                                        @if ($errors->has('iddichvu'))
                                            <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{{$errors->get('iddanhmuc')[0]}}</li></ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                          <input type="hidden" name="idcoso" value="1">
                            <div class="form-group text-right mb-0 mt-5">
                                <a href="/quantri/datlich" clas="btn btn-secondary waves-effect waves-light">Huỷ</a>
                                <input type="submit" name="them" class="btn btn-primary waves-effect waves-light ml-2" value="Thêm">
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>

@endsection