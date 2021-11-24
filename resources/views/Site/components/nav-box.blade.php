<div class="nav-box container">
    <nav class="navbar container navbar-expand-lg navbar-light background-color-none p-0">
        <div class="pl-0 flex-grow-1">
            <a class=""><img style="width: 20%" src="{{asset('img/logo.svg')}}" alt=""></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="flex-grow: 0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ ($pathActive == 'trang-chu') ? 'active' : '' }}">
                    <a class="nav-link" href="/trang-chu">Trang Chủ <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="btn-modal-main nav-link" type-modal="modal-datlich" href="javascript:void(0)" data-show="one">Đặt Lịch</a>
                </li>
                <li class="nav-item {{ ($pathActive == 'san-pham') ? 'active' : '' }} fa-dropdown-custom-1">
                    <a class="nav-link" href="/san-pham">Sản Phẩm</a>
                </li>
                <li class="nav-item {{ ($pathActive == 'dich-vu') ? 'active' : '' }} fa-dropdown-custom-1">
                    <a class="nav-link" href="/dich-vu">Dịch Vụ</a>
                </li>

                <li class="nav-item {{ ($pathActive == 'gioi-thieu') ? 'active' : '' }}">
                    <a class="nav-link" href="/gioi-thieu">Về Chúng Tôi</a>
                </li>
                <li class="nav-item {{ ($pathActive == 'lien-he') ? 'active' : '' }}">
                    <a class="nav-link" href="/lien-he">Liên Hệ</a>
                </li>
                <li class="nav-item {{ ($pathActive == 'bai-viet') ? 'active' : '' }} fa-dropdown-custom-1">
                    <a class="nav-link" href="/bai-viet">Bài viết</a>
                </li>
            </ul>
            <div class="box-icon">
                <li class="icon-item d-inline-block hover-scale-1">
                    <a href=""><i class="fas fa-search color-black-2"></i></a>
                </li>
                @if (session()->has('khachHang') && session('khachHang') != '')
                <li class="icon-item d-inline-block fa-dropdown-custom-1">
                    <a href="javascript:void(0)"><i class="fas fa-user-alt color-black-2"></i></a>
                    <ul class="dropdown-custom-1" style="right: 0px;">
                        <li class="dropdown-custom-item">
                            <a href="">
                                @if (session('khachHang')->name != '')
                                    {{ session('khachHang')->name }}
                                @else
                                    {{ session('khachHang')->sdt }}
                                @endif
                            </a>
                        </li>
                        <li class="dropdown-custom-item"><a href="/thong-tin-tai-khoan">Thông tin tài khoản</a></li>
                        <li class="dropdown-custom-item"><a href="/site-logout">Đăng xuất</a></li>
                    </ul>
                </li>
                @else
                <li class="icon-item d-inline-block">
                    <a class="btn-modal-main" id="btn-modal-dangnhaps" type-modal="modal-user" href="javascript:void(0)" data-show="one"><i class="fas fa-user-alt color-black-2"></i></a>
                </li>
                @endif
                <li class="icon-item d-inline-block hover-scale-1 position-relative icon-cart show-giohang-fixed" data-toggle="modal" data-target="#giohang-fixed">
                    <span class="badge badge-pill badge-primary number-cart" id="soluonghang1">0</span>
                    <a href="javascript:void(0)"><i class="fas fa-shopping-cart color-black-2"></i></a>
                </li>
            </div>
        </div>
    </nav>
</div>
