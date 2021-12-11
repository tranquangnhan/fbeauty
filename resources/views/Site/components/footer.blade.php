<div class="box-guimail p-2">
    <div class="w-100 text-center position-relative" style="z-index: 30;margin: 7em 0em;">
        <div class="guimail-content">
            <div class="container">
                <div class="w-100 text-center">
                    <div class="title-small text-center">
                        ĐỂ LẠI EMAIL
                    </div>
                </div>

                <div class="title-3">
                    Đăng Ký Và Là Người Đầu Tiên Biết Về <br>Các Sản Phẩm Đặc Biệt, Sự Kiện Và Hơn Thế Nữa!
                </div>
                <form id="formTheoDoi" action="{{URL::to("/emaillienhe")}}" class="form-subscribe" method="post">
                    @csrf
                    <div class="bg-white div-subscribe">
<<<<<<< HEAD
                        <input type="email" name="email" id="name" placeholder="Nhập email của bạn">
                        <button type="submit" class="btn-nor">Gửi email</button>
                    </div>
                    @error('email')
                    <span class="badge badge-danger">{{$message}}</span>
                    @enderror
=======
                            <input type="email" name="email" class="text-danger" id="emaillienhe" value="@error('email')
                            {{ $message }}
                            @enderror" placeholder="Nhập email của bạn">
                            <button type="submit" class="btn-nor">Gửi email</button>
                    </div>

>>>>>>> 9b64dc75cd6c0846eb966ca03ee500a59d75105f
                </form>
            </div>
        </div>

        {{-- <div class="background-img img-1">
            <img src="{{ asset('Site/images') }}/Rectangle 184.png" alt="">
        </div> --}}
    </div>
</div>
<footer>
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-12">
                    <div class="box-footer box-footer-1 mt-0">
                        <div class="w-100 text-center">
                            <a class="m-auto"><img class="logo-footer" src="{{asset('img/logo.svg')}}" alt=""></a>
                        </div>

                        <div class="text-6" style="margin-top: 2em">
                            FBeauty Spa luôn nỗ lực không ngừng để đem đến cho khách hàng những dịch vụ hoàn hảo
                            nhất. Thẩm mỹ khỏe – đẹp – an toàn để mỗi phút giây ngắm mình trong gương là những phút
                            giây tận hưởng hạnh phúc thật sự của mỗi khách hàng.
                        </div>

                        <div class="list-icon d-flex justify-content-left ">
                            <div class="icon-item ml-0">
                                <a href="" class="link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>

                            <div class="icon-item">
                                <a href="" class="link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>

                            <div class="icon-item">
                                <a href="" class="link">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>

                            <div class="icon-item">
                                <a href="" class="link">
                                    <i class="fab fa-tumblr"></i>
                                </a>
                            </div>

                            <div class="icon-item">
                                <a href="" class="link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-xl-3 col-lg-4 col-12">
                    <div class="box-footer footer-menu">
                        <div class="title-4 d-inline-block">
                            Cơ Sở
                        </div>

                        <div class="content-1">

                            <div class="menu-item text-6">
                                <a href="">391A Nam Kỳ Khởi Nghĩa, Phường 14, Quận 3, Thành phố Hồ Chí
                                    Minh</a>
                            </div>

                            <div class="menu-item text-6">
                                <a href="">778/B1 Nguyễn Kiệm, Phường 3, Phú Nhuận, Thành phố Hồ Chí
                                    Minh</a>
                            </div>

                            <div class="menu-item text-6">
                                <a href="">Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận
                                    12, Thành phố Hồ Chí Minh</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-12">
                    <div class="box-footer footer-menu">
                        <div class="title-4 d-inline-block">
                            Danh Mục
                        </div>

                        <div class="content-1">

                            <div class="menu-item text-6">
                                <a href="">Chăm sóc da mặt
                                </a>
                            </div>

                            <div class="menu-item text-6">
                                <a href="">Điều trị mụn, sẹo
                                </a>
                            </div>

                            <div class="menu-item text-6">
                                <a href="">Dịch vụ trị nám, tàn nhang
                                </a>
                            </div>

                            <div class="menu-item text-6">
                                <a href="">Làm trẻ hóa da
                                </a>
                            </div>

                            <div class="menu-item text-6">
                                <a href="">Dịch vụ massage
                                </a>
                            </div>

                            <div class="menu-item text-6">
                                <a href="">Dịch vụ giảm béo

                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="w-100 footer-copyright">
        ©2021 Bản quyền FBeauty. Đã đăng ký bản quyền
    </div>
</footer>
