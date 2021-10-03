@extends('Admin.LayoutAdmin')
@section('content')
<style>
    /* img{
        width: 100px !important;
    } */
</style>
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row d-flex justify-content-center">
                <div class="col-xl-12">
                    <div class="card-box">
                        <h4 class="header-title  mt-0 mb-3 btn btn-primary">SỬA KHÁCH HÀNG</h4>
                        <form action="{{route('khachhang.update',$KhachHang->id)}}"  enctype="multipart/form-data"
                           method="post">
                           @csrf
                           {!! method_field('patch') !!}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Tên khách hàng</label><span style="color:red;"> (*)</span>
                                    <input type="text" name="name" value="{{$KhachHang->name}}"
                                        parsley-trigger="change" placeholder="Tên khách hàng" class="form-control">
                                    @error('name')
                                    <span class="badge badge-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại </label><span style="color:red;"> (*)</span>
                                    <input type="number" name="sdt" value="{{$KhachHang->sdt}}"
                                        parsley-trigger="change" placeholder="Số điện thoại" class="form-control">
                                    @error('sdt')
                                    <span class="badge badge-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Email</label><span style="color:red;"> (*)</span>
                                    <input type="email" name="email" value="{{$KhachHang->email}}"
                                        parsley-trigger="change" id="password" placeholder="Email" class="form-control">
                                    @error('email')
                                    <span class="badge badge-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="">Mật khẩu</label><span style="color:red;"> (*)</span>
                                    <input type="password" name="password" value="{{old('password')}}"
                                        parsley-trigger="change" placeholder="Mật khẩu" class="form-control">
                                    @error('password')
                                    <span class="badge badge-danger">{{$message}}</span>
                                    @enderror
                                    <input type="hidden" name="passcu" value="{{$KhachHang->password}}">

                                </div>

                            </div>
                            <div class="form-group ml-0 mt-2 col-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="w-100" for="files">Tải ảnh khách hàng:<span style="color:red;"> (*)</span>
                                            <div class="wrapper"> <br>
                                                <div class="file-upload mt-1">
                                                    <input type="file" id="files" name="urlHinh"
                                                        value="{{$KhachHang->img}}">
                                                    <i class="fa fa-download " style="font-size:52px;color:blue"></i>
                                                </div>
                                            </div>
                                            @error('img')
                                            <span class="badge badge-danger">{{$message}}</span>
                                            @enderror
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="imageA" class="mt-2">
                                            <img style=" border-radius:10px" class="img-admin"  height="130"
                                                src="{{ asset('uploads/'.$KhachHang->img) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ml-2 mt-3">
                                <label class="w-100" for="active">Trạng thái:<span style="color:red;"> (*)</span>
                                    <select class="form-control mt-2" name="active">
                                        <option
                                        value="1" <?php echo ($KhachHang->active == 1) ? 'selected' : '';?>>
                                        Hoạt động
                                    </option>
                                    <option
                                        value="0" <?php echo ($KhachHang->active == 0) ? 'selected' : '';?>>
                                        Chưa hoạt dộng
                                    </option>
                                    </select>
                                </label>
                            </div>
                            <div class="form-group text-right mb-0 mt-4 col-12">
                                <a href="/quantri/khachhang" clas="btn btn-secondary waves-effect waves-light ">Huỷ</a>
                                <input type="submit" name="them" class="btn btn-primary waves-effect waves-light ml-2" value="Thêm">
                            </div>
                        </div>

                        </form>
                    </div>
                </div><!-- end col -->
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById("files").onchange = function () {

        var ListImages = document.getElementById("files").files;
        if (ListImages.length > 0) {

            var filetoload = ListImages[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                var srcData = e.target.result;
                var newIMG = document.createElement('img');
                newIMG.src = srcData;
                document.getElementById("imageA").innerHTML = newIMG.outerHTML;
            };
            //
            // // read the image file as a data URL.
            reader.readAsDataURL(filetoload);
        }
    };
</script>
@endsection