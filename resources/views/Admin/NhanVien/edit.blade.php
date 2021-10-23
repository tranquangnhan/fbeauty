@extends('Admin.LayoutAdmin')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="mt-0 header-title">Sửa nhân viên</h4>

                            <div>
                                <a href="{{route("nhanvien.index")}}"
                                   class="btn btn-primary waves-effect waves-light mb-3">Danh sách nhân viên</a>
                            </div>

                            <form action="{{route('nhanvien.update',$nhanvien->id)}}" id="ktform"
                                  enctype="multipart/form-data"
                                  method="post">
                                @csrf
                                {!! method_field('patch') !!}
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Thêm nhân viên</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="w-100" for="name">Tên nhân viên:(<span
                                                        class="text-danger">*</span>)
                                                    <input type="text" name="username" parsley-trigger="change"
                                                           required
                                                           placeholder="Tên nhân viên" class="form-control"
                                                           value="{{$nhanvien->name}}"
                                                           id="username">
                                                    @error('username')
                                                    <span class="badge badge-danger">{{$message}}</span>
                                                    @enderror
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="w-100" for="email">Email:(<span
                                                        class="text-danger">*</span>)
                                                    <input type="email" name="email"
                                                           parsley-trigger="change" required
                                                           placeholder="Email" class="form-control"
                                                           id="email" value="{{$nhanvien->email}}" disabled>
                                                    @error('email')
                                                    <span class="badge badge-danger">{{$message}}</span>
                                                    @enderror
                                                    <span id="kqcheckemail"></span>
                                                </label>

                                            </div>

                                            <div class="form-group">
                                                <label class="w-100" for="password">Mật khẩu:(<span
                                                        class="text-danger">*</span>)
                                                    <input type="password" name="password"
                                                           parsley-trigger="change"
                                                           placeholder="Mật khẩu" class="form-control"
                                                           id="password" value="{{old('password')}}">
                                                    @error('password')
                                                    <span class="badge badge-danger">{{$message}}</span>
                                                    @enderror
                                                </label>
                                                <input type="hidden" name="oldpassword" value="{{$nhanvien->password}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="w-100" for="sdt">Số điện thoại:(<span
                                                        class="text-danger">*</span>)
                                                    <input type="number" name="sdt"
                                                           parsley-trigger="change" required
                                                           placeholder="Số điện thoại" class="form-control"
                                                           id="sdt" value="{{$nhanvien->sdt}}" disabled>
                                                    @error('sdt')
                                                    <span class="badge badge-danger">{{$message}}</span>
                                                    @enderror
                                                    <span id="kqchecksdt"></span>
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="w-100" for="gioitinh">Giới tính:(<span
                                                        class="text-danger">*</span>)
                                                    <select class="form-control select2" name="gioitinh">
                                                        <option
                                                            value="1" <?php echo ($nhanvien->gioitinh == 1) ? 'selected' : '';?>>
                                                            Nam
                                                        </option>
                                                        <option
                                                            value="0" <?php echo ($nhanvien->gioitinh == 0) ? 'selected' : '';?>>
                                                            Nữ
                                                        </option>
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="w-100" for="files">Avatar nhân
                                                            viên:(<span class="text-danger">*</span>)
                                                            <div class="wrapper">
                                                                <div class="file-upload">
                                                                    <input type="file" id="files"
                                                                           name="urlHinh" value="{{old('urlHinh')}}">
                                                                    <i class="fa fa-arrow-up"></i>
                                                                </div>
                                                            </div>
                                                            @error('urlHinh')
                                                            <span class="badge badge-danger">{{$message}}</span>
                                                            @enderror
                                                        </label>
                                                        <input type="hidden" name="oldImg"
                                                               value="{{$nhanvien->avatar}}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="imageA" class="mt-2">
                                                            <img
                                                                src="{{asset(\App\Http\Controllers\Controller::BASE_URL_UPLOAD_STAFF)}}/{{$nhanvien->avatar}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="w-100" for="coso">Chọn cơ sở:(<span
                                                        class="text-danger">*</span>)
                                                    <select class="form-control select2" name="coso">
                                                        @foreach ($coso as $item)
                                                            <option
                                                                value="{{$item['id']}}" <?php echo ($nhanvien->idcoso == $item['id']) ? 'selected' : '';?>>{{$item['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="w-100" for="dichvu">Chọn dịch vụ:(<span
                                                        class="text-danger">*</span>)
                                                    <select class="form-control select2" name="dichvu">
                                                        @foreach ($dichvu as $item)
                                                            <option
                                                                value="{{$item['id']}}" <?php echo ($nhanvien->iddichvu == $item['id']) ? 'selected' : '';?>>{{$item['name']}}</option>
                                                        @endforeach
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="w-100" for="role">Role:(<span
                                                        class="text-danger">*</span>)
                                                    <select class="form-control select2" name="role">
                                                        <option
                                                            value="1" <?php echo ($nhanvien->role == 1) ? 'selected' : '';?>>
                                                            ADMIN
                                                        </option>
                                                        <option
                                                            value="0" <?php echo ($nhanvien->role == 0) ? 'selected' : '';?>>
                                                            Nhân viên
                                                        </option>
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="w-100" for="active">Active:(<span
                                                        class="text-danger">*</span>)
                                                    <select class="form-control select2" name="active">
                                                        <option
                                                            value="1" <?php echo ($nhanvien->active == 1) ? 'selected' : '';?>>
                                                            Kích hoạt
                                                        </option>
                                                        <option
                                                            value="0" <?php echo ($nhanvien->active == 0) ? 'selected' : '';?>>
                                                            Chưa kích hoạt
                                                        </option>
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="w-100" for="namsinh">Năm sinh :(<span
                                                        class="text-danger">*</span>)
                                                    <select class="form-control select2" name="namsinh">
                                                        <?php
                                                        $year = date('Y') - 16;
                                                        $min = $year - 60;
                                                        $max = $year;
                                                        for ($i = $max; $i >= $min; $i--) {
                                                        ?>
                                                        <option
                                                            value="{{$i}}" <?php echo ($nhanvien->namsinh == $i) ? 'selected' : '';?>>{{$i}}</option>
                                                        ;
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="w-100" for="trangthai">Trạng thái:(<span
                                                        class="text-danger">*</span>)
                                                    <select class="form-control select2" name="trangthai">
                                                        <option
                                                            value="1" <?php echo ($nhanvien->trangthai == 1) ? 'selected' : '';?>>
                                                            Hoạt động
                                                        </option>
                                                        <option
                                                            value="0" <?php echo ($nhanvien->trangthai == 0) ? 'selected' : '';?>>
                                                            Không hoạt động
                                                        </option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{route("nhanvien.index")}}" type="button"
                                       class="btn btn-light waves-effect"
                                    >Huỷ
                                    </a>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light " id="them">
                                        Cập nhật
                                    </button>
                                </div>
                            </form>
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
        $(document).ready(function () {
            $("#email").blur(function () {
                u = $(this).val();
                $("#kqcheckemail").load("{{URL::to("quantri/nhanvien/kiemtraemail")}}/" + u);
            });

            $("#sdt").blur(function () {
                u = $(this).val();
                $("#kqchecksdt").load("{{URL::to("quantri/nhanvien/kiemtrasdt")}}/" + u);
            });
        });

        $("#ktform").validate({
            rules: {
                username: {required: true, maxlength: 25, minlength: 3},
                email: {required: true, maxlength: 25, minlength: 3},
                sdt: {required: true, number: true},
            },
            messages: {
                username: {
                    required: "<span class='badge badge-danger'>Mời bạn nhập email</span>",
                    maxlength: "<span class='badge badge-danger'>Tên dài quá, phải <25 ký tự </span>",
                    minlength: "<span class='badge badge-danger'>Tên ngắn quá, phải >3 ký tự </span>"
                },
                email: {
                    required: "<span class='badge badge-danger'>Mời bạn nhập email </span>",
                    maxlength: "<span class='badge badge-danger'>Email dài quá, phải <30 ký tự </span>",
                    minlength: "<span class='badge badge-danger'>Email ngắn quá, phải >3 ký tự </span>"
                },
                sdt: {
                    required: "<span class='badge badge-danger'>Mời bạn nhập số điện thoại </span>",
                    number: "<span class='badge badge-danger'>Chỉ được nhập số </span>"
                },
            }
        });
    </script>
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
