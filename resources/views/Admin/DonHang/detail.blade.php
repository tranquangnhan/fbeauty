
@extends('Admin.layoutadmin')
@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8">
                        <div class="card-box task-detail">
                            <div class="media mb-3">
                                <div class="media-body">
                                    <h4 class="media-heading mt-0">Michael Zenaty</h4>
                                </div>
                            </div>

                            <form data-parsley-validate action="{{url('quantri/donhang/detail/'.$data[0]->id.'/update')}}" id="formadd" novalidate onsubmit="return submitForm()" method="post" enctype="multipart/form-data">
                                @csrf
                                {!! method_field('patch') !!}


                                <div class="row">
                                    <div class="col-lg-12">
                                        @foreach ($data as $item)
                                        <div class=" box-detail" style="width: 95%;">
                                            <div class="input-block">
                                                <div class="row task-dates mb-0 mt-2">
                                                    <div class="form-group col-lg-6">
                                                        <label> Mã Đơn Hàng </label>
                                                        <input type="text" name="donhang" value="{{$item->iddonhang}}" parsley-trigger="change" required
                                                        placeholder="Nhập tên nhà sản xuất" id="ml" class="form-control" id="userName">

                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label> Sản Phẩm </label>
                                                        <input type="text" name="sanpham" value="{{$item->idsanpham}}"  parsley-trigger="change" required
                                                        placeholder="Nhập Số lượt tồn kho" class="form-control" id="userName">
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label >Hình ảnh Sản Phẩm</label>
                                                    <img width="130" height="100" style="object-fit: cover" src="{{ asset('uploads/'.$item->img) }}" alt=""><br><br>
                                                </div>

                                                <div class="row task-dates mb-0 mt-2">
                                                    <div class="form-group col-lg-4">
                                                        <label> Số Lượng </label>
                                                        <input type="number" name="soluong" value="{{$item->soluong}}" parsley-trigger="change" required
                                                        placeholder="Nhập tên nhà sản xuất" id="ml" class="form-control" id="userName">

                                                    </div>

                                                    <div class="form-group col-lg-4">
                                                        <label> Tổng Tiền Đơn Hàng  </label>
                                                        <input type="text" name="dongiatruocgiamgia" value="{{number_format($item->dongiatruocgiamgia)}}"  parsley-trigger="change" required
                                                        placeholder="Nhập Số lượt tồn kho" class="form-control" id="userName">
                                                    </div>

                                                    <div class="form-group col-lg-4">
                                                        <label> Tổng Tiền Đã Giảm </label>
                                                        <input type="text" name="dongiasaugiamgia" value="{{number_format($item->dongiasaugiamgia)}}"  parsley-trigger="change" required
                                                        placeholder="Nhập Số lượt tồn kho" class="form-control" id="userName">
                                                    </div>

                                                </div>


                                                <input type="button" class="remove-field btn btn-danger" value="-">
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

                            <h4 class="header-title mt-0 mb-3">Comments (6)</h4>

                            <div>

                                <div class="media mb-3">
                                    <div class="d-flex mr-3">
                                        <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Mat Helme</h5>
                                        <p class="font-13 text-muted mb-0">
                                            <a href="" class="text-primary">@Michael</a>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin commodo.
                                        </p>
                                        <a href="" class="text-success font-13">Reply</a>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="d-flex mr-3">
                                        <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-2.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        <p class="font-13 text-muted mb-0">
                                            <a href="" class="text-primary">@Michael</a>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque sollicitudin purus odio.
                                        </p>
                                        <a href="" class="text-success font-13">Reply</a>

                                        <div class="media my-2">
                                            <div class="d-flex mr-3">
                                                <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-3.jpg"> </a>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0">Nested media heading</h5>
                                                <p class="font-13 text-muted mb-0">
                                                    <a href="" class="text-primary">@Michael</a>
                                                    Cras sit amet nibh libero, in gravida nulla vel metus scelerisque ante sollicitudin purus odio.
                                                </p>
                                                <a href="" class="text-success font-13">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="d-flex mr-3">
                                        <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Mat Helme</h5>
                                        <p class="font-13 text-muted mb-0">
                                            <a href="" class="text-primary">@Michael</a>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin commodo cras purus.
                                        </p>
                                        <a href="" class="text-success font-13">Reply</a>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="d-flex mr-3">
                                        <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Mat Helme</h5>
                                        <p class="font-13 text-muted mb-0">
                                            <a href="" class="text-primary">@Michael</a>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin commodo cras.
                                        </p>
                                        <a href="" class="text-success font-13">Reply</a>
                                    </div>
                                </div>

                                <div class="media mb-3">
                                    <div class="d-flex mr-3">
                                        <a href="#"> <img class="media-object rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <input type="text" class="form-control input-sm" placeholder="Some text value...">
                                    </div>
                                </div>

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

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
