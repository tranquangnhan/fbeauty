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

                        <h4 class="header-title mt-0 mb-4">Thêm Sản Phẩm</h4>

                        <form data-parsley-validate action="{{route('sanpham.store')}}" novalidate method="post" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                               <input type="file" name="img" >
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tên Sản Phẩm</label>
                                        <input type="text" name="name"  parsley-trigger="change" required
                                            placeholder="Nhập tên của sản phẩm" class="form-control" id="userName">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Danh Mục</label>
                                        <select class="form-control select2" name="iddanhmuc">
                                            @foreach ($cate as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Mô Tả</label>
                                        <textarea  style="height: 100px;width:100%; border:1px solid #ccc" name="mota" ></textarea>   
                                     </div>
                                </div>
                            </div>
                           
                            <textarea id="summernote"  name="noidung" >
                            </textarea>

                            <div class="row mt-3">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input id="remember-1" type="checkbox" name="trangthai" value="1" data-parsley-multiple="remember-1">
                                            <label for="remember-1">Trạng Thái ? </label>
                                        </div>
                                    </div>            
                                </div>   
                            </div>
                          
                            <div class="form-group text-right mb-0 mt-5">
                                <a href="/quantri/sanpham" clas="btn btn-secondary waves-effect waves-light">Huỷ</a>
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