@extends('Admin.LayoutAdmin')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="mt-0 header-title"> Đơn Hàng </h4>
                        <p class="text-muted font-14 mb-3">
                        Đơn Hàng sản phẩm.
                        </p>


                        <table class="table table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-light">
<<<<<<< HEAD
                                    <tr class="text-center">
                                        <th width="10.5%"> Mã đơn hàng </th>
                                        <th width="15.5%"> Khách hàng </th>
                                        <th width="12%">SĐT người nhận</th>
                                        <th width="11%">Tổng Tiền </th>
                                        <th width="11%">Tổng Tiền Giảm</th>
                                        <th width="12%">Trạng Thái</th>
                                        <th width="12%">Hành Động</th>
=======
                                    <tr>
                                        <th width="4%">STT</th>
                                        <th width="10%">Tên Người Nhận</th>
                                        <th width="16%">Địa Chỉ Nhận</th>
                                        <th width="10%">SĐT Người Nhận</th>
                                        <th width="10%">Tổng Tiền Đã Giảm</th>
                                        <th width="12%">Ghi Chú Khách Hàng</th>
                                        <th width="10%">Phương Thức Thanh Toán</th>
                                        <th width="10%">Phương Thức Giao Hàng</th>
                                        <th width="10%">Trạng Thái</th>
                                        <th width="8%">Hành Động</th>
>>>>>>> 40e4e9810106aab5a8e8018ee49ac079ca6af792

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)

                                        <tr class="text-center">
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->tennguoinhan}}</td>
                                            <td>{{$item->sdtnguoinhan}}</td>
<<<<<<< HEAD
                                            <td>{{number_format($item->tongtientruocgiamgia)}}</td>
                                            <td>{{number_format($item->tongtiensaugiamgia)}}</td>
=======
                                            <td>{{number_format($item->tongtiensaugiamgia)}}</td>
                                            <td>{{$item->ghichucuakhachhang}}</td>
                                            <td>{{$item->phuongthucthanhtoan}}</td>
                                            <td>{{$item->phuongthucgiaohang}}</td>
>>>>>>> 40e4e9810106aab5a8e8018ee49ac079ca6af792


                                            <td class="text-white">
                                             <?php
                                            if($item->trangthai==0)
                                            {
                                                ?>
<<<<<<< HEAD
                                               <span class="badge bg-primary">Đang xác nhận</span>
=======
                                                <a href="{{URL::to('quantri/active/'.$item->id)}}"><span>Chờ xác nhận</span></a>
>>>>>>> 40e4e9810106aab5a8e8018ee49ac079ca6af792
                                                <?php
                                            }elseif($item->trangthai==1)
                                            {
                                                ?>
<<<<<<< HEAD
                                               <span class="badge bg-secondary">Đã gửi đi</span>
=======
                                                <a href="{{URL::to('quantri/active-1/'.$item->id)}}"><span>Chờ gói hàng</span></a>
>>>>>>> 40e4e9810106aab5a8e8018ee49ac079ca6af792
                                                <?php
                                            }elseif($item->trangthai==2)
                                            {
                                                ?>
<<<<<<< HEAD
                                                <span class="badge bg-success">Đã nhận</span>
                                                <?php
                                            }elseif($item->trangthai==3)
                                            {
                                                ?>
                                                <span class="badge bg-danger">Đơn hàng lỗi</span>
                                                <?php
                                            }elseif($item->trangthai==4)
                                            {
                                                ?>
                                                <span class="badge bg-dark">Khách trả hàng</span>
                                                <?php
                                            }else{
                                                ?>
                                                <span class="badge bg-warning">Hủy đơn hàng</span>
=======
                                                <a href="{{URL::to('quantri/active-2/'.$item->id)}}"><span>Đang giao</span></a>
                                                <?php
                                            }else{
                                                ?>
                                                <a><span>Đã Giao</span></a>
>>>>>>> 40e4e9810106aab5a8e8018ee49ac079ca6af792
                                                <?php
                                            }
                                            ?>
                                            </td>
                                            <td class="d-flex align-center">
                                                <a name="" id="" class="btn btn-primary mr-2" href="{{route('donhang.edit',$item->id)}}" role="button"><i class="fa fa-edit"></i></a>
                                                <form action="{{route('donhang.destroy',$item->id)}}"  method="post">
                                                    @csrf
                                                    {!!method_field('delete')!!}
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                                <a name="" id="" class="btn btn-primary mx-2" href="{{url('quantri/donhangchitiet/detail/'.$item->id.'/edit')}}" role="button"><i class="fas fa-calendar-week"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach


                                </tbody>
                            </table>
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
