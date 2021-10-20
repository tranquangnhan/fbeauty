
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
                    <div class="col-md-12">
                        <div class="card-box task-detail">
                            <div class="media mb-3">
                                <div class="media-body">
                                    <h4 class="media-heading mt-0">Michael Zenaty</h4>
                                </div>
                            </div>
                           @php
                               if($data){
                                    $idDetail = $data[0]->id;
                               }else{
                                    $idDetail = '';
                               }
                           @endphp

                            <form action="{{url('quantri/donhangchitiet/detail/'.$idDetail.'/edit')}}" novalidate method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-12">
                                        @foreach ($data as $item)
                                        <div class=" box-detail" style="width: 95%;">
                                            <div class="input-block">
                                                <div class="row task-dates mb-0 mt-2">
                                                    <div class="form-group col-lg-6">
                                                        <label> Mã Đơn Hàng </label>
                                                        <input type="text" name="donhang[]" value="{{$item->iddonhang}}" parsley-trigger="change" required readonly
                                                        placeholder="Nhập tên nhà sản xuất" id="ml" class="form-control" id="userName">

                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label> Sản Phẩm </label>
                                                        <input type="text" name="sanpham" value="{{$item->idsanpham}}"  parsley-trigger="change" required readonly
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
                                                        <input type="number" name="soluong[]" value="{{$item->soluong}}" parsley-trigger="change" required
                                                        placeholder="Nhập tên nhà sản xuất" id="ml" class="form-control" id="userName">

                                                    </div>

                                                    <div class="form-group col-lg-4">
                                                        <label> Tổng Tiền Đơn Hàng  </label>
                                                        <input type="text" name="truocgiamgia[]" value="{{$item->dongiatruocgiamgia}}"  parsley-trigger="change" required
                                                        placeholder="Nhập Số lượt tồn kho" class="form-control" id="userName">
                                                    </div>

                                                    <div class="form-group col-lg-4">
                                                        <label> Tổng Tiền Đã Giảm </label>
                                                        <input type="text" name="saugiamgia[]" value="{{$item->dongiasaugiamgia}}"  parsley-trigger="change" required
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
