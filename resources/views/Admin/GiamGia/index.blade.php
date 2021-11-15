@extends('Admin.LayoutAdmin')

@section('content')
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all">
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="mt-0 header-title"> Giảm Giá </h4>
                        <p class="text-muted font-14 mb-3">
                        Đây là Giảm Giá.
                        </p>
                        <div>
                             <button class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#myModal">Thêm Giảm Giá</button>
                        </div>
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
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form action="{{route('giamgia.store')}}"  enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Thêm Giảm Giá</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Tên Giảm Giá</label><span style="color:red;"> (*)</span>
                                                    <input type="text" name="name" class="form-control @error('name') border-error @enderror name" value="{{old('name')}}"  parsley-trigger="change" required
                                                        placeholder="Tên Giảm Giá" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Mã Giảm Giá</label><span style="color:red;"> (*)</span>
                                                    <input type="text" name="ma" class="form-control @error('ma') border-error @enderror ma" value="{{old('ma')}}"  parsley-trigger="change" required
                                                        placeholder="Mã Giảm Giá" >
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="">Loại Giảm Giá </label><span style="color:red;"> (*)</span>
                                                    <select name="loai" id="inputState" onchange="select()" class="form-control"  placeholder="Phương Thức Giao Hàng" class="form-control @error('loai') border-error @enderror loai" value="{{old('loai')}}" parsley-trigger="change">
                                                        <option value="0">Giảm Theo Giá</option>
                                                        <option value="1">Giảm Theo %</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Giảm Tối Đa Theo Giá </label><span style="color:red;"> (*)</span>
                                                    <input type="number" name="number" id="giamgia" value="0" class="form-control @error('number') border-error @enderror name" value="{{old('number')}}"  parsley-trigger="change" required disabled
                                                        placeholder="Khoảng Giá Từ " >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Giảm Tối Đa Theo %</label><span style="color:red;"> (*)</span>
                                                    <input type="number" name="max" id="giamgia1" value="0" class="form-control @error('max') border-error @enderror diachi" value="{{old('max')}}"  parsley-trigger="change" required disabled
                                                        placeholder="Khoảng Giá Tối Đa" >
                                                </div>
                                            </div>
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Ngày Áp Dụng</label><span style="color:red;"> (*)</span>
                                                    <input type="date" name="ngaytao" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label for="">Ngày Hết Hạn</label><span style="color:red;"> (*)</span>
                                                    <input type="date" name="ngayhethan" class="form-control @error('ngayhethan') border-error @enderror ngayhethan" value="{{old('ngayhethan')}}"  parsley-trigger="change" required
                                                        placeholder="Khoảng Giá Tối Đa" >
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Huỷ</button>
                                            <button type="submit" name="them" class="btn btn-primary waves-effect waves-light"  id='add_product'>Thêm</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <table class="table table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th width="5%">STT</th>
                                        <th width="11%">Tên Giảm Giá</th>
                                        <th width="10%">Mã Giảm Giá</th>
                                        <th width="14%">Giảm Tối Đa Theo Giá </th>
                                        <th width="14%">Giảm Tối Đa Theo %</th>
                                        <th width="10%">Loại Giảm Giá</th>
                                        <th width="11%">Ngày Tạo Mã</th>
                                        <th width="11%">Ngày Hết Hạn</th>
                                        <th width="12%">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                    @foreach ($data as $row)
                                    <?php $i++; ?>
                                        <tr class="text-center">
                                            <td>{{$i}}</td>
                                            <td class="" >{{$row->name}}</td>
                                            <td class="" >{{$row->ma}}</td>
                                            <td class="" >{{number_format($row->number)}} VNĐ</td>
                                            <td class="" >{{number_format($row->max)}} %</td>
                                            <td class="" >
                                                <?php
                                                if($row->loai==0)
                                                {
                                                    ?>
                                                   <span> Giảm Theo Giá </span>
                                                    <?php
                                                }else{
                                                ?>
                                                <span> Giảm Theo % </span>
                                                <?php
                                            }
                                            ?>
                                            </td>
                                            <td class="" >{{date('d-m-Y',$row->ngaytao)}}</td>
                                            <td class="" >{{date('d-m-Y',$row->ngayhethan)}}</td>

                                            <td class="d-flex">
                                                <a href="{{route("giamgia.edit",$row->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Sửa" ><i
                                                    class="fa fa-edit"  style="color: white;"></i></a>
                                                <form action="{{route('giamgia.destroy',$row->id)}}"  method="post">
                                                    @csrf
                                                    {!!method_field('delete')!!}
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
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
@section('custom-javascript')
    <script src="{{ asset('Admin/assets') }}/js/pages/giamgia.js"></script>
@endsection
