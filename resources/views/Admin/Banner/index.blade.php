@extends('Admin.LayoutAdmin')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h4 class="mt-0 header-title">Quản lý Banner</h4>
                                    <p class="text-muted font-14 mb-3">
                                        Đây danh sách ảnh các banner.
                                    </p>
                                </div>
                            </div>


                            <div>
                                <a href="{{route("banner.create")}}"
                                   class="btn btn-primary waves-effect waves-light mb-3">Thêm Banner
                                </a>
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
                            <table id="key-table" class="table table-striped table-bordered dt-responsive nowrap">
                                <thead class="thead-light">
                                <tr>
                                    <th width="3%">STT</th>
                                    <th width="20%">Tiêu đề</th>
                                    <th width="25%">Nội dung</th>
                                    <th width="45%">Ảnh</th>
                                    <th width="3%">Ẩn Hiện</th>
                                    <th width="3%">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($banner as $index =>$bn)
                                <tr id="bann{{$bn->id}}">
                                    <td>{{$index+=1}}</td>
                                    <td>{{$bn->tieude}}</td>
                                    <td>{{$bn->noidung}}</td>
                                    <td><img src="{{ asset('Site/images') }}/{{$bn->img}}" class="w-100 objectcv" height="250px;" alt=""></td>
                                    <td class="text-center"><?php echo($bn->AnHien==App\Http\Controllers\Controller::BANNER_HIEN)?'<i class="fa fa-check text-success" style="font-size:24px"></i>':'<i class="fa fa-times-circle text-danger" style="font-size:24px"></i>';?></td>
                                    <td class="text-center">
                                        <a href="{{route("banner.edit",$bn->id)}}" class="btn btn-primary text-white" data-bs-toggle="tooltip" data-bs-placement="right" title="Sửa"><i class="fa fa-edit"></i></a>
                                    <br>
                                        <button type="button" onclick="XoaBanner({{$bn->id}})" class="btn btn-primary text-white mt-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Xóa"><i class="fa fa-trash"></i></button>
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

<script>
    function XoaBanner(id) {
        Swal.fire({
            title: 'Bạn muốn xóa banner này chứ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#efa789',
            cancelButtonColor: '#000000',
            confirmButtonText: 'Đồng Ý',
            cancelButtonText:'Hủy'
        }).then((result) => {
            if (result.isConfirmed) {
                swal.fire(
                    {
                        title: 'Xóa thành công',
                        icon: 'success'
                    }
                );
                CallDelete(id)
            }
        });
    }

    function CallDelete(id) {
        $.ajax({
            url: document.URL+"/"+id+"/destroy",
            type: 'GET',
            async: false,
            dataType: 'json',
            data: {id: id},
            success: function (data) {
                if (data==0){
                    $("#bann"+id).css({display: "none"});
                }
                else {
                    swal.fire(
                        {
                            title: 'Xóa thất bại',
                            icon: 'warning'
                        }
                    );
                }
            }
        });
    }
</script>

@endsection
