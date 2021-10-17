
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

                            <h4 class="header-title mt-0 mb-3">Sửa Đơn Hàng Chi Tiếts</h4>

                            <form data-parsley-validate action="{{url('quantri/donhang/detail/'.$data[0]->iddonhang.'/edit')}}" id="formadd" novalidate onsubmit="return submitForm()" method="post" enctype="multipart/form-data">
                                @csrf
                                {!! method_field('patch') !!}


                                <div class="row">
                                    <div class="col-lg-12">
                                        @foreach ($data as $item)
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">Tên Người Đặt</label><span style="color:red;"> (*)</span>
                                                    <input type="text" name="name" class="form-control @error('name') border-error @enderror name" value="{{$item->soluong}}"  parsley-trigger="change" required
                                                    placeholder="Tổng Tiền sau Giảm Giá" >
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                                <div class="form-group text-right mb-0 mt-5">
                                            <a href="/quantri/coso" clas="btn btn-secondary waves-effect waves-light">Hủy</a>
                                            <input type="submit" class="btn btn-primary waves-effect waves-light mr-1 update"  id='add_product'>

                                </div>


                            </form>
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
