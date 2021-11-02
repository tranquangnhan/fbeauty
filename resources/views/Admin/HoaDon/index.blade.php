@extends('Admin.LayoutAdmin')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="mt-0 header-title">Hóa đơn</h4>
                            <p class="mt-0 text-secondary">Cơ sở: <strong>{{$coso->name}}</strong></p>
                            <!-- Example split danger button -->
                            <div class="container">
                                @if(session('thanhcong'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{session('thanhcong')}}
                                    </div>
                                @endif

                                @if(session('thatbai'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('thatbai')}}
                                    </div>
                                @endif
                            </div>
                            <table class="table table-striped table-bordered dt-responsive nowrap">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="" width="5%">STT</th>
                                    <th scope="">Khách hàng</th>
                                    <th scope="">Nhân viên</th>
                                    <th scope="">Tổng tiền</th>
                                    <th scope="">Trạng thái</th>
                                    <th scope="" width="5%">Xem</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hoadon as $index => $hd)
                                    <tr>
                                        <td>{{$index+=1}}</td>
                                        <td><strong>Tên: </strong>{{$hd->tenKh}}
                                            <br>
                                            <strong>SĐT: </strong> {{$hd->sodienthoai}}
                                            <br>
                                            @if(isset($hd->idgiamgia))
                                                <?php $giamgia = \Illuminate\Support\Facades\DB::table('giamgia')->select('*')->where('id', '=', $hd->idgiamgia)->get();?>
                                                <strong>Mã giảm giá: </strong> {{$giamgia[0]->ma}}
                                                <br>
                                                <strong>Mô tả: </strong> {{$giamgia[0]->name}}
                                            @endif
                                        </td>
                                        <td><strong>Tên: </strong>{{$hd->tenNV}}
                                            <br>
                                            <strong>Email: </strong> {{$hd->emailNV}}
                                        </td>
                                        <td><strong>Trước
                                                giảm: </strong> {{number_format($hd->tongtientruocgiamgia), ""}} VND
                                            <br>
                                            <strong>Sau giảm: </strong>{{number_format($hd->tongtiensaugiamgia), ""}}
                                            VND
                                        </td>
                                        <td><?php echo ($hd->trangthai == \App\Http\Controllers\Controller::TRANGTHAITHANHTOAN) ? ' <span class="badge badge-success"><i class="fa fa-check-circle" ></i> Đã thanh toán</span>' : '<span class="badge badge-danger"><i class="fa fa-minus-circle"></i> Chưa thanh toán</span>';?>
                                            <br>
                                            <strong>Ngày: </strong> {{date_format(date_create($hd->created_at), "d-m-Y")}}
                                            <br>
                                            <strong>Giờ: </strong> {{date_format(date_create($hd->created_at), "H:i:s")}}
                                        </td>
                                        <td><a href="{{route("hoadonchitiet.show",$hd->id)}}" class="btn btn-primary mb-2" data-toggle="tooltip" data-placement="right" title="Xem hóa đơn" ><i
                                                    class="fa fa-eye"  style="color: white;"></i></a>
                                            <a href="{{route("hoadon.edit",$hd->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Sửa" ><i
                                                    class="fa fa-edit"  style="color: white;"></i></a>
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
