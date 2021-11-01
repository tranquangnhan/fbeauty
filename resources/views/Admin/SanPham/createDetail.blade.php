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

                        <h4 class="header-title mt-0 mb-4">Nhập chi tiết sản phẩm</h4>

                        <form data-parsley-validate  novalidate method="post" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <ul class="parsley-errors-list filled" id="parsley-id-7" aria-hidden="false"><li class="parsley-required">{!! implode('', $errors->all('<div>:message</div>')) !!}</li></ul>
                            @endif
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="button" id="add-field" class="btn btn-primary" value="+ Thêm Mới">
                                            <div id="some_div" class="box-detail-wrapper"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD



=======
                          
                          
>>>>>>> 40e4e9810106aab5a8e8018ee49ac079ca6af792
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
