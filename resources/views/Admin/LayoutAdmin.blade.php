<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{url('/')}}">
    <meta charset="utf-8"/>
    <title>Quản trị | FBeauty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('Admin/assets') }}/images/favicon.ico">


    <link href="{{ asset('Admin/assets') }}/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet"/>
    <link href="{{ asset('Admin/assets') }}/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('Admin/assets') }}/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('Admin/assets') }}/libs/select2/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('Admin/assets') }}/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css"
          rel="stylesheet"/>
    <link href="{{ asset('Admin/assets') }}/libs/switchery/switchery.min.css" rel="stylesheet"/>
    <link href="{{ asset('Admin/assets') }}/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="{{ asset('Admin/assets') }}/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="{{ asset('Admin/assets') }}/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
    <link href="{{ asset('Admin/assets') }}/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
   

    <!-- Bootstrap Css -->
    <link href="{{ asset('Admin/assets') }}/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('Admin/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ asset('Admin/assets') }}/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('Admin/assets') }}/css/inputfile.css" id="app-stylesheet" rel="stylesheet" type="text/css"/>

    {{-- code nhúng của Quốc --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    {{-- end code nhúng của Quốc --}}

    {{-- code nhúng của Nhân --}}
    <link href="{{ asset('Admin/assets') }}/css/custom.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
    <link href="{{ asset('Admin/assets') }}/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Admin/assets') }}/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Admin/assets') }}/libs/x-editable/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    {{-- end code nhúng của Nhân --}}
<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="{{ asset('Admin/assets') }}/images/users/{{auth()->user()->avatar}}"
                                     class="img-fluid rounded-circle" alt=""/></div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="{{ asset('Admin/assets') }}/images/users/user-4.jpg"
                                     class="img-fluid rounded-circle" alt=""/></div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                   role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('Admin/assets') }}/images/users/{{auth()->user()->avatar}}" alt="user-image"
                         class="rounded-circle">
                    <span class="pro-user-name ml-1">
                                Nowak <i class="mdi mdi-chevron-down"></i>
                            </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>Tài khoản của bạn</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Cài đặt</span>
                    </a>


                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="{{URL::to("quantri/logout")}}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Đăng xuất</span>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>


        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('Admin/assets') }}/images/logo-dark.png" alt="" height="16">
                        </span>
                <span class="logo-sm">
                            <img src="{{ asset('Admin/assets') }}/images/logo-sm.png" alt="" height="24">
                        </span>
            </a>
            <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('Admin/assets') }}/images/logo-light.png" alt="" height="16">
                        </span>
                <span class="logo-sm">
                            <img src="{{ asset('Admin/assets') }}/images/logo-sm.png" alt="" height="24">
                        </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
            <li>
                <button class="button-menu-mobile disable-btn waves-effect">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <h4 class="page-title-main">Vertical</h4>
            </li>

        </ul>

    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!-- User box -->
            <div class="user-box text-center">
                <img src="{{ asset('Admin/assets') }}/images/users/{{auth()->user()->avatar}}" alt="user-img"
                     title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                <div class="dropdown">
                    <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"
                       aria-expanded="false">Nowak Helme</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user mr-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings mr-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock mr-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out mr-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-muted">
                            <i class="mdi mdi-cog"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="{{URL::to('/quantri/logout')}}">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                <?php  use Illuminate\Support\Facades\Auth; $user = Auth::user();?>
                <!--- Nhân viên -->
                    @if($user->role == 0)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-page-layout-sidebar-left"></i>
                                <span> Ảnh khách hàng </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route("nhanvien.show", auth()->user()->id)}}">Xem ảnh </a></li>
                            </ul>
                        </li>
                        <!--- ADMIN -->
                    @elseif($user->role == 1)
                        <li>
                            <a href="index.html">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Thống kê </span>
                            </a>
                        </li>
                        <!--- Danh mục -->
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-page-layout-sidebar-left"></i>
                                <span> Danh mục </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route("danhmuc.index")}}">Danh sách</a></li>
                            </ul>
                        </li>
                        <!--- Nhân viên -->
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-page-layout-sidebar-left"></i>
                                <span> Nhân viên </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route("nhanvien.index")}}">Danh sách</a></li>
                                <li><a href="{{route("nhanvien.create")}}">Thêm nhân viên</a></li>
                                <li><a href="{{route("nhanvien.show", auth()->user()->id)}}">Ảnh khách hàng</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-texture"></i>
                                <span class="badge badge-warning float-right">7</span>
                                <span> Sản Phẩm </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route("sanpham.create")}}">Thêm Mới</a></li>
                                <li><a href="{{route("sanpham.index")}}">Danh Sách</a></li>
                            </ul>
                        </li>
                    @endif

                    <li class="menu-title">Apps</li>

                    <li>
                        <a href="apps-chat.html">
                            <i class="mdi mdi-forum"></i>
                            <span class="badge badge-purple float-right">New</span>
                            <span> Chat </span>
                        </a>
                    </li>

                    <li>
                        <a href="calendar.html">
                            <i class="mdi mdi-calendar"></i>
                            <span> Calendar </span>
                        </a>
                    </li>

                    <li>
                        <a href="inbox.html">
                            <i class="mdi mdi-email"></i>
                            <span> Mail </span>
                        </a>
                    </li>

                    <li class="menu-title">Components</li>

                    <li>
                        <a href="ui-typography.html">
                            <i class="mdi mdi-format-font"></i>
                            <span> Typography </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-invert-colors"></i>
                            <span> User Interface </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                            <li><a href="ui-material-icons.html">Material Design</a></li>
                            <li><a href="ui-font-awesome-icons.html">Font Awesome 5</a></li>
                            <li><a href="ui-dripicons.html">Dripicons</a></li>
                            <li><a href="ui-feather-icons.html">Feather Icons</a></li>
                            <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-range-slider.html">Range Slider</a></li>
                            <li><a href="ui-components.html">Components</a>
                            <li><a href="ui-sweetalert.html">Sweet Alert</a>
                            <li><a href="ui-treeview.html">Tree view</a>
                            <li><a href="ui-widgets.html">Widgets</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-texture"></i>
                            <span class="badge badge-warning float-right">7</span>
                            <span> Forms </span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="form-elements.html">General Elements</a></li>
                            <li><a href="form-advanced.html">Advanced Form</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-fileupload.html">Form Uploads</a></li>
                            <li><a href="form-quilljs.html">Quilljs Editor</a></li>
                            <li><a href="form-xeditable.html">X-editable</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-view-list"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-chart-donut-variant"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="charts-flot.html">Flot Charts</a></li>
                            <li><a href="charts-morris.html">Morris Charts</a></li>
                            <li><a href="charts-chartist.html">Chartist Charts</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                            <li><a href="charts-other.html">Other Charts</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-file-multiple"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="pages-starter.html">Starter Page</a></li>
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                            <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-layers"></i>
                            <span> Extra Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="extras-projects.html">Projects</a></li>
                            <li><a href="extras-tour.html">Tour</a></li>
                            <li><a href="extras-taskboard.html">Taskboard</a></li>
                            <li><a href="extras-taskdetail.html">Task Detail</a></li>
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-maps.html">Maps</a></li>
                            <li><a href="extras-contact.html">Contact list</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-faq.html">FAQs</a></li>
                            <li><a href="extras-gallery.html">Gallery</a></li>
                            <li><a href="extras-email-templates.html">Email Templates</a></li>
                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                            <li><a href="extras-comingsoon.html">Coming Soon</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="mdi mdi-share-variant"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">Level 1.1</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->


    @yield('content')


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div class="rightbar-title">
        <a href="javascript:void(0);" class="right-bar-toggle float-right">
            <i class="mdi mdi-close"></i>
        </a>
        <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
    </div>
    <div class="slimscroll-menu rightbar-content">

        <div class="p-3">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, layout, etc.
            </div>
            <div class="mb-2">
                <img src="{{ asset('Admin/assets') }}/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked/>
                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('Admin/assets') }}/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                       data-bsStyle="{{ asset('Admin/assets') }}/css/bootstrap-dark.min.css"
                       data-appStyle="{{ asset('Admin/assets') }}/css/app-dark.min.css"/>
                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('Admin/assets') }}/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="custom-control custom-switch mb-3">
                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                       data-appStyle="{{ asset('Admin/assets') }}/css/app-rtl.min.css"/>
                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('Admin/assets') }}/images/layouts/dark-rtl.png" class="img-fluid img-thumbnail"
                     alt="">
            </div>
            <div class="custom-control custom-switch mb-5">
                <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch"
                       data-bsStyle="{{ asset('Admin/assets') }}/css/bootstrap-dark.min.css"
                       data-appStyle="{{ asset('Admin/assets') }}/css/app-dark-rtl.min.css"/>
                <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
            </div>

            <a href="https://1.envato.market/k0YEM" class="btn btn-danger btn-block mt-3" target="_blank"><i
                    class="mdi mdi-download mr-1"></i> Download Now</a>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
    <i class="mdi mdi-cog-outline mdi-spin"></i> &nbsp;Choose Demos
</a>

<!-- Vendor js -->
<script src="{{ asset('Admin/assets') }}/js/vendor.min.js"></script>

<!-- knob plugin -->
<script src="{{ asset('Admin/assets') }}/libs/jquery-knob/jquery.knob.min.js"></script>

<!--Morris Chart-->
{{-- <script src="{{ asset('Admin/assets') }}/libs/morris-js/morris.min.js"></script>
<script src="{{ asset('Admin/assets') }}/libs/raphael/raphael.min.js"></script> --}}

<!-- Dashboard init js-->
<script src="{{ asset('Admin/assets') }}/js/pages/dashboard.init.js"></script>

<script src="{{ asset('Admin/assets') }}/libs/custombox/custombox.min.js"></script>


<script src="{{ asset('Admin/assets') }}/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="{{ asset('Admin/assets') }}/libs/multiselect/jquery.multi-select.js"></script>

<script src="{{ asset('Admin/assets') }}/libs/select2/select2.min.js"></script>


<script src="{{ asset('Admin/assets') }}/js/pages/form-advanced.init.js"></script>
<!-- App js -->
<script src="{{ asset('Admin/assets') }}/js/app.min.js"></script>

{{-- code nhúng bởi Nhân --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="{{ asset('Admin/assets') }}/js/pages/texteditor.js"></script>
<script src="{{ asset('Admin/assets') }}/js/pages/custom.js"></script>

<script src="{{ asset('Admin/assets') }}/libs/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('Admin/assets') }}/libs/datatables/dataTables.bootstrap4.js"></script>

<script src="{{ asset('Admin/assets') }}/js/pages/form-xeditable.init.js"></script>
<script src="{{ asset('Admin/assets') }}/libs/x-editable/bootstrap-editable.min.js"></script>
{{-- end code nhúng bởi Nhân --}}
</body>

</html>
