
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
                                    <h4 class="media-heading mt-0"> ĐON HÀNG CHI TIẾT </h4>
                                </div>
                            </div>
                           @php
                               if($donHang){
                                    $idDetail = $donHang?:[0]->id;
                               }else{
                                    $idDetail = '';
                               }
                           @endphp



                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class=" box-detail" style="width: 95%;">
                                            <div class="table-responsive">
                                                <div class="media mb-3">
                                                    <div class="media-body">
                                                        <h4 class="media-heading mt-0">Thông Tin Người Đặt</h4>
                                                    </div>
                                                </div>
                                                <table class="table mb-0">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Tên khách hàng</th>
                                                        <th>Số điện thoại</th>
                                                        <th>email</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        @foreach  ($khachHang as $items)


                                                        <td>{{$items->name}}</td>
                                                        <td>{{$items->sdt}}</td>
                                                        <td>{{$items->email}}</td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class=" box-detail" style="width: 95%;">
                                            <div class="table-responsive">
                                                <div class="media mb-3">
                                                    <div class="media-body">
                                                        <h4 class="media-heading mt-0">Thông Tin Vận Chuyển</h4>
                                                    </div>
                                                </div>
                                                <table class="table mb-0">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Tên người nhận</th>
                                                        <th>Địa chỉ </th>
                                                        <th>Số điện thoại</th>
                                                        <th>Hình thức thanh toán</th>
                                                        <th>Ghi chú</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{ $donHang->tennguoinhan }}</td>
                                                        <td>{{ $donHang->diachikhachhang }}</td>
                                                        <td>{{ $donHang->sdtnguoinhan }}</td>
                                                        <td>{{ $donHang->phuongthucthanhtoan }}</td>
                                                        <td>{{ $donHang->ghichucuakhachhang }}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class=" box-detail" style="width: 95%;">
                                            <div class="table-responsive">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h4 class="media-heading mt-0">Chi Tiết Đơn Hàng</h4>
                                                    </div>
                                                </div>

                                                <table class="table mb-0">
                                                    <thead class="thead-light">
                                                    <tr class="text-center" >
                                                        <th width="5%">STT</th>
                                                        <th width="17%">Tên sản phẩm</th>
                                                        <th width="8%">ML</th>
                                                        <th width="14%">Số lượng Kho</th>
                                                        <th width="14%">Số lượng đặt</th>
                                                        <th width="14%">Giá trước giảm</th>
                                                        <th width="14%">Giá sau giảm</th>
                                                        <th width="14%">Tổng tiền</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <form action="{{url('quantri/donhangchitiet/detail/'.$idDetail->id.'/edit')}}" novalidate method="post" enctype="multipart/form-data">
                                                            @csrf
                                                        @foreach ($sanpham as $item)
                                                    <tr class="text-center table-tuong">
                                                        <td>{{ $loop->index + 1 }}</td>

                                                        <td>{{ $item->name }}</td>

                                                        <td>{{$item->ml}}
                                                        </td>

                                                        <td>{{$item->tonkho}}
                                                        </td>

                                                        <td>
                                                            <input type="number" name="soluong[]" value="{{$item->soluong}}" parsley-trigger="change" required
                                                            placeholder="Nhập tên nhà sản xuất" id="ml" class="form-control" id="userName">
                                                            <input type="hidden" name="id[]" value="{{$item->id}}">
                                                        </td>

                                                        <td>{{$item->dongiatruocgiamgia}}
                                                        </td>

                                                        <td>{{$item->dongiasaugiamgia}}
                                                        </td>

                                                        <td>{{ number_format($item->tongtien) }}
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                        <div class=" text-right mb-2">
                                                            <a href="/quantri/donhang" clas="btn btn-secondary waves-effect waves-light">Hủy</a>
                                                            <input type="submit" class="btn btn-primary waves-effect waves-light mr-1 update"  id='add_product'>

                                                        </div>
                                                </form>
                                                    </tbody>
                                                </table>
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
