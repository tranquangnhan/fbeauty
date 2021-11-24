@extends('Admin.LayoutAdmin')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="mt-0 header-title"> Cơ Sở </h4>
                        <p class="text-muted font-14 mb-3">
                        Đây là Cơ Sở.
                        </p>
                        <div>
                             <button class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#myModal">Thêm Cơ Sở</button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                 @endif
                            </div>
                        </div>
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form action="{{route('coso.store')}}"  enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Thêm Cơ Sở</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">Tên Cơ Cở</label><span style="color:red;"> (*)</span>
                                                    <input type="text" name="name" class="form-control @error('name') border-error @enderror name" value="{{old('name')}}"  parsley-trigger="change" required
                                                        placeholder="Tên Cơ Sở" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Địa chỉ cụ thể</label><span style="color:red;"> (*)</span>
                                                    <input type="text" name="diachi" class="form-control @error('diachi') border-error @enderror diachi" value="{{old('diachi')}}"  parsley-trigger="change" required
                                                        placeholder="Địa Chỉ Cụ Thể" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="">  Chọn Tỉnh/Thành Phố</label><span style="color:red;"> (*)</span>
                                                    <div>
                                                        <select class="form-control input-sm m-bot15 choose city" name="city" id="city"  >
                                                            <option value="">-----{{__('Chọn Thành Phố')}}-----</option>
                                                            @foreach($city as $key => $ci)
                                                            <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="">
                                                        <label class="">{{__('Chọn Quận/Huyện')}} <span style="color:red;"> (*)</span></label>
                                                        <div>
                                                            <select  name="province" id="province" class="form-control input-sm m-bot15 choose province"  >
                                                                <option value="">-----{{__('Chọn Quận/Huyện')}}-----</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="">
                                                        <label class="">{{__('Chọn Xã/Phường')}} <span style="color:red;"> (*)</span></label>
                                                        <div>
                                                            <select name="wards" id="wards" class=" form-control input-sm m-bot15 wards" >
                                                                <option value="">-----{{__('Chọn Xã/Phường')}}-----</option>
                                                            </select>
                                                        </div>
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
                                    <tr>
                                        <th width="7%">STT</th>
                                        <th width="10%">Tên Cơ Sở</th>
                                        <th width="18%">Địa Chỉ Cơ Sở</th>
                                        <th width="15%">Tỉnh/Thành phố</th>
                                        <th width="15%">Quận/Huyện</th>
                                        <th width="15%">Xã Phường/thị trấn</th>
                                        <th width="15%">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=0; ?>
                                    @foreach ($data as $row)
                                    <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td class="" >{{$row->name}}</td>
                                            <td class="" >{{$row->diachi}}</td>
                                            <td class="" >{{$row->city->name_city}}</td>
                                            <td class="" >{{$row->province->name_quanhuyen}}</td>
                                            <td class="" >{{$row->wards->name_xaphuong}}</td>

                                            <td class="d-flex">
                                                <a name="" id="" class="btn btn-primary mr-2" href="{{route('coso.edit',$row->id)}}" role="button"><i class="fa fa-edit"></i></a>
                                                <form action="{{route('coso.destroy',$row->id)}}"  method="post">
                                                    @csrf
                                                    {!!method_field('delete')!!}
                                                    <button type="submit" class="btn btn-danger" title="Xóa" ><i class="fa fa-trash"></i></button>
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
