@extends('Admin.LayoutAdmin')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title">Task Detail</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Task Detail</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-md-8">
                    <div class="card-box task-detail">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <img class="d-flex mr-3 rounded-circle avatar-md" alt="64x64" src="{{asset('uploads/'.$KhachHang->img)}}">
                            <div class="media-body">
                                <h4 class="media-heading mt-0">{{$KhachHang->name}}</h4>
                                <span class="">{{$KhachHang->sdt}}</span><br>
                                <span class="">{{$KhachHang->email}}</span>
                            </div>
                        </div>

                        <h4>Code HTML email template for welcome email</h4>

                        <p class="text-muted">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint cupiditate non sunt in culpa qui officia deserunt animi est laborum et
                        </p>

                        <p class="text-muted">
                            Consectetur adipisicing elit. Voluptates, illo, iste
                            itaque voluptas corrupti ratione reprehenderit magni similique Tempore quos
                            delectus asperiores libero voluptas quod perferendis erum ipsum dolor sit.
                        </p>

                        <div class="row task-dates mb-0 mt-2">
                            <div class="col-lg-6">
                                <h5 class="font-600 m-b-5">Ngày bắt đầu</h5>
                                <p> 22 March 2016 <small class="text-muted">1:00 PM</small></p>
                            </div>

                            <div class="col-lg-6">
                                <h5 class="font-600 m-b-5">Dự kiến hết hạn</h5>
                                <p> 17 April 2016 <small class="text-muted">12:00 PM</small></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="task-tags mt-2">
                            <h5>Tags</h5>
                            <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"/>
                        </div>

                        <div class="assign-team mt-4">
                            <h5>Assign to</h5>
                            <div>
                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-2.jpg"> </a>
                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-3.jpg"> </a>
                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-5.jpg"> </a>
                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-8.jpg"> </a>
                                <a href="#"><span class="add-new-plus"><i class="mdi mdi-plus"></i> </span></a>
                            </div>
                        </div>

                        <div class="attached-files mt-4">
                            <h5>Attached Files </h5>
                            <ul class="list-inline files-list">
                                <li class="list-inline-item file-box">
                                    <a href=""><img src="assets/images/attached-files/img-1.jpg" class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                    <p class="font-13 mb-1 text-muted"><small>File one</small></p>
                                </li>
                                <li class="list-inline-item file-box">
                                    <a href=""><img src="assets/images/attached-files/img-2.jpg" class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                    <p class="font-13 mb-1 text-muted"><small>Attached-2</small></p>
                                </li>
                                <li class="list-inline-item file-box">
                                    <a href=""><img src="assets/images/attached-files/img-3.jpg" class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                    <p class="font-13 mb-1 text-muted"><small>Dribbble shot</small></p>
                                </li>
                                <li class="list-inline-item file-box ml-2">
                                    <div class="fileupload add-new-plus">
                                        <span><i class="mdi-plus mdi"></i></span>
                                        <input type="file" class="upload">
                                    </div>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                            Save
                                        </button>
                                        <button type="button"
                                                class="btn btn-light waves-effect">Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-3">Nhân Viên</h4>

                        <div>
                            {{-- profile khách hàng --}}
                            <div>
                                <img src="uploads/profile-photo-1634400663.PNG" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">

                                <p class="text-muted font-13 mb-3">
                                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                </p>

                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="ml-2">Johnathan Deo</span></p>

                                    <p class="text-muted font-13"><strong>Mobile :</strong><span class="ml-2">(123) 123 1234</span></p>

                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="ml-2">coderthemes@gmail.com</span></p>

                                    <p class="text-muted font-13"><strong>Location :</strong> <span class="ml-2">USA</span></p>
                                </div>

                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">Send Message</button>
                            </div>
                            {{--end profile khách hàng --}}

                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->        
            
        </div> <!-- container-fluid -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                   2016 - 2020 &copy; Adminto theme by <a href="">Coderthemes</a> 
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

@endsection
