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
                                    <tr>
                                        <th width="10.5%"> Mã đơn hàng </th>
                                        <th width="14%"> Khách hàng </th>
                                        <th width="12%">SĐT người nhận</th>
                                        <th width="11%">Tổng Tiền </th>
                                        <th width="11%">Tổng Tiền Giảm</th>
                                        <th width="13.5%">Trạng Thái</th>
                                        <th width="12%">Hành Động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)

                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->tennguoinhan}}</td>
                                            <td>{{$item->sdtnguoinhan}}</td>
                                            <td>{{number_format($item->tongtientruocgiamgia)}}</td>
                                            <td>{{number_format($item->tongtiensaugiamgia)}}</td>


                                            <td>
                                            <select id="inputState" class="form-control">
                                                        <option> <a href="{{URL::to('/active/'.$item->id)}}"><span>Chờ xác nhận</span></a></option>
                                                        <option><a href="{{URL::to('/active-1/'.$item->id)}}"><span>Chờ gói hàng</span></a></option>
                                                        <option><a href="{{URL::to('/active-2/'.$item->id)}}"><span>Đang giao</span></a></option>
                                                        <option> <a href="{{URL::to('/active-2/'.$item->id)}}"><span>Đã giao</span></a></option>
                                                        <option> <a href="{{URL::to('/active-2/'.$item->id)}}"><span>Hủy</span></a></option>

                                                </select>
                                            <!-- <?php
                                            if($item->trangthai==0)
                                            {
                                                ?>
                                                <a href="{{URL::to('/active/'.$item->id)}}"><span>Chờ xác nhận</span></a>
                                                <?php
                                            }elseif($item->trangthai==1)
                                            {
                                                ?>
                                                <a href="{{URL::to('/active-1/'.$item->id)}}"><span>Chờ gói hàng</span></a>
                                                <?php
                                            }elseif($item->trangthai==2)
                                            {
                                                ?>
                                                <a href="{{URL::to('/active-2/'.$item->id)}}"><span>Đang giao</span></a>
                                                <?php
                                            }else{
                                                ?>
                                                <a><span>Đã Giao</span></a>
                                                <?php
                                            }
                                            ?> -->
                                            </td>
                                            <td class="d-flex">
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
