@extends('Admin.LayoutAdmin')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="mt-0 header-title">Ảnh khách hàng</h4>
                            <form action="{{URL::to('nhanvien/uploadKH',$nhanvien->id)}}" id="ktform"
                                  enctype="multipart/form-data"
                                  method="post">
                            @csrf
                            {!! method_field('patch') !!}

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="formFile" class="form-label">Tải ảnh nhân viên</label>
                                            <br>
                                            <div class="wrapper">
                                                <div class="file-upload">
                                                    <input type="file" id="files" name="urlAnh[]" multiple>
                                                    <i class="fa fa-arrow-up"></i>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <input type="hidden" name="img" value="{{$data[0]['img']}}">--}}
                                        <div class="col-md-12">

{{--                                            <?php--}}
{{--                                            $img= explode(",", $data[0]['img']);--}}
{{--                                            ?>--}}

{{--                                            @foreach($img as $idAnh => $Anh)--}}
{{--                                                <img class="imageS1"--}}
{{--                                                     src="{{asset('admin/images/users')}}{{'/'.$Anh}}"--}}
{{--                                                     width="45%"/>--}}
{{--                                            @endforeach--}}
                                            <div id="imageA"></div>
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
        document.getElementById("files").onchange = function () {
            var ListImages =document.getElementById("files").files;
            if (ListImages.length>0){
                for (let i=0; i< ListImages.length ; i++ ){
                    var filetoload = ListImages[i];
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var srcData= e.target.result;
                        var newIMG=document.createElement('img');
                        newIMG.src=srcData;
                        document.getElementById("imageA").innerHTML += newIMG.outerHTML;
                    };
                    //
                    // // read the image file as a data URL.
                    reader.readAsDataURL(filetoload);
                }
            }
        };
    </script>


@endsection
