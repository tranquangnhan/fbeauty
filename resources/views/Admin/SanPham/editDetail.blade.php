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

                        <h4 class="header-title mt-0 mb-4">Sửa chi tiết sản phẩm</h4>

                        <form data-parsley-validate action="{{URL::to('quantri/sanpham/detail/'.$data[0]->idsanpham.'/edit')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                               
                                
                                     @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="button" id="add-field" class="btn btn-primary" value="+ Thêm Mới">
                                            <div id="some_div" class="box-detail-wrapper">
                                               

                                                @foreach ($data as $item)
                                                        <div class=" box-detail"  >
                                                            <div class="input-block " >
                                                                <div class="form-group">
                                                                    <label >Số ml</label>
                                                                    <input type="hidden" name="id[]"  value="{{$item->id}}">
                                                                    <input type="number" name="ml[]" value="{{$item->ml}}" parsley-trigger="change" required
                                                                    placeholder="Nhập tên nhà sản xuất" id="ml" class="form-control" id="userName">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label >Số lượt tồn kho</label>
                                                                    <input type="number" name="tonkho[]" value="{{$item->tonkho}}"  parsley-trigger="change" required
                                                                    placeholder="Nhập Số lượt tồn kho" class="form-control" id="userName">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label >Đơn giá sản phẩm</label>
                                                                    <input type="number" name="dongia[]" value="{{$item->dongia}}"  parsley-trigger="change" required
                                                                    placeholder="Đơn giá sản phẩm" class="form-control" id="userName">
                                                                </div>
                                                                <form action="{{URL::to('quantri/sanpham/detail/'.$item->id.'/del')}}" method="post">
                                                                    @csrf
                                                                    {!!method_field('delete')!!}
                                                                    <input type="submit" class="btn btn-danger" value="-">
                                                                </form>
                                                            </div>
                                                        </div>
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-right mb-0 mt-5">
                                <a href="/quantri/sanpham" clas="btn btn-secondary waves-effect waves-light">Huỷ</a>
                                <input type="submit" name="them" class="btn btn-primary waves-effect waves-light ml-2" value="Sửa">
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>


@endsection
