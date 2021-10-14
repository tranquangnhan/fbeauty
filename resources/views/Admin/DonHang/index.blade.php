@extends('Admin.LayoutAdmin')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="mt-0 header-title">Danh Mục</h4>
                        <p class="text-muted font-14 mb-3">
                        Danh mục sản phẩm, dịch vụ, bài viết.
                        </p>


                        <table class="table table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-light">
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

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)

                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->tennguoinhan}}</td>
                                            <td>{{$item->diachikhachhang}}</td>
                                            <td>{{$item->sdtnguoinhan}}</td>
                                            <td>{{number_format($item->tongtiensaugiamgia)}}</td>
                                            <td>{{$item->ghichucuakhachhang}}</td>
                                            <td>{{$item->phuongthucthanhtoan}}</td>
                                            <td>{{$item->phuongthucgiaohang}}</td>

                                            <td>
                                            <?php
                                            if($item->trangthai==0)
                                            {
                                                ?>
                                                <a href="{{URL::to('quantri/active/'.$item->id)}}"><span>Chờ xác nhận</span></a>
                                                <?php
                                            }elseif($item->trangthai==1)
                                            {
                                                ?>
                                                <a href="{{URL::to('quantri/active-1/'.$item->id)}}"><span>Chờ gói hàng</span></a>
                                                <?php
                                            }elseif($item->trangthai==2)
                                            {
                                                ?>
                                                <a href="{{URL::to('quantri/active-2/'.$item->id)}}"><span>Đang giao</span></a>
                                                <?php
                                            }else{
                                                ?>
                                                <a><span>Đã Giao</span></a>
                                                <?php
                                            }
                                            ?>
                                            </td>
                                            <td class="d-flex">
                                                <a name="" id="" class="btn btn-primary mr-2" href="{{route('donhang.edit',$item->id)}}" role="button"><i class="fa fa-edit"></i></a>
                                                <form action="{{route('donhang.destroy',$item->id)}}"  method="post">
                                                    @csrf
                                                    {!!method_field('delete')!!}
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                                <a name="" id="" class="btn btn-primary mx-2" href="{{route('danhmuc.edit',$item->id)}}" role="button"><i class="fas fa-calendar-week"></i></a>
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
