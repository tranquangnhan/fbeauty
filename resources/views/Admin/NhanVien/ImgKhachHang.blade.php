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
                                Đây là danh mục.
                            </p>
                            <div>
                                <button class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#myModal">Thêm Danh Mục</button>
                            </div>
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{route('danhmuc.store')}}"  enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Thêm Danh Mục</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="text" name="name"  parsley-trigger="change" required
                                                           placeholder="Nhập tên nhà sản xuất" class="form-control" id="userName">
                                                </div>

                                                <div class="form-group">
                                                    @php
                                                        $array = [
                                                            ['id'=>1,'name'=>"Sản Phẩm"],
                                                            ['id'=>2,'name'=>"Dịch Vụ"],
                                                            ['id'=>3,'name'=>"Bài Viết"]
                                                        ];
                                                    @endphp
                                                    <select class="form-control select2" name="loai">
                                                        @foreach ($array as $item)
                                                            <option value="{{$item['id']}}">{{$item['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Huỷ</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                            </div>
                                        </form>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>



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
