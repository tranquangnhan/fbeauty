<div id="modal-container">
    <div class="modal-background">
        <div class="close-modal background-close"></div>
        <div class="modal" style="width: 50%;height: 90%;">
            <div class="noidung-modal h-100 w-100">
                <div class="row h-100">
                    <div class="col-xl-12 p-0">
                        <div class="box-content-datlich h-100">
                            <div class="modal-content-1 h-100">

                                <div class="datlich-step h-100 active" data-step="0">
                                    <div class="title-3 color-main">Nhập SĐT & Chọn cơ sở</div>
                                    <div class="text-7">Nếu bạn chưa biết chọn dịch vụ nào hãy chọn ‘’Tôi muốn tư vấn’’ </div>
                                    <div class="list-select position-relative">
                                        <div class="box-spinner">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                              </div>
                                        </div>
                                        <form action="" class="fa-custom form-phone-number">
                                            <div class="div-phone-number">
                                                <input type="number" id="phoneNumber" placeholder="Nhập số điện thoại của bạn">
                                            </div>
                                        </form>

                                        <div class="select-custom fa-custom select-coso">
                                            <div class="select-fa">
                                                <div class="name-select d-flex align-items-center" data-mov="13">
                                                    <div class="tendanhmuc value-coso" data-coso="0">
                                                        Chọn cơ sở
                                                    </div>
                                                    <div class="icon-1">
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                </div>

                                                <div class="list-option coso-fa" slide-mov="13">
                                                    @foreach ($listCoSo as $coSo)
                                                        <div class="option-item coso-fa date-bg">
                                                            <div class="pickcoso position-relative z-index-999" data-option-coso="{{ $coSo->id }}">{{ $coSo->name }}</div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="control-slide-datlich d-flex justify-content-end">
                                        <button type="button" class="button-href-basic check-next-step">Xác nhận</button>
                                    </div>
                                </div>

                                <div class="datlich-step h-100" data-step="1">
                                    <div class="title-3 color-main">Chọn dịch vụ</div>
                                    <div class="text-7">Nếu bạn chưa biết chọn dịch vụ nào hãy chọn ‘’Tôi muốn tư vấn’’ </div>
                                    <div class="list-select">
                                        <div class="select-custom">
                                            <div class="select-fa">
                                                <div class="name-select d-flex align-items-center" data-mov="1">
                                                    <div class="tendanhmuc">
                                                        Da mặt
                                                    </div>
                                                    <div class="icon-1">
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                </div>

                                                <div class="list-option dichvu-checkbox" slide-mov="1">
                                                    <label class="option-item" for="exampleCheck1" onclick="calTotal()">
                                                        <div class="row  align-items-center">
                                                            <div class="col-xl-9">
                                                                <div class="form-check d-flex  align-items-center">
                                                                    <input type="checkbox" class="form-check-input checkbox-dichvu" name="dichvu" value="400000" id="exampleCheck1">
                                                                    <div class="mid-content">
                                                                        <div class="d-flex  align-items-center">
                                                                            {{-- <div class="image-dichvu img-1 d-inline-block">
                                                                                <img src="{{ asset('Site/images') }}/image8.png" alt="">
                                                                            </div> --}}
                                                                            <div class="ml-2">
                                                                                <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                            </div>

                                                                        </div>
                                                                            {{-- <div class="mota mb-1">
                                                                                <p>
                                                                                    Điều này khiến chi nhiều bạn thắc mắc là nên nặn mụn thế nào là hợp lí?
                                                                                    Có nên đi spa nặn mụn để đem lại hiệu quả triệt để. Nặn mụn là hành động không sai khi bạn có mụn,
                                                                                    những phải cần làm đúng theo những cách chuẩn y khoa để không gây ra những hậu quả khác.
                                                                                </p>
                                                                            </div>

                                                                            <div class="w-100 text-left mt-0">
                                                                                <a href="">
                                                                                    <button class="button-href-basic">Xem chi tiết</button>
                                                                                </a>
                                                                            </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 text-right">
                                                                <div class="gia-dichvu giagoc d-inline-block">300,000đ</div>
                                                                <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                            </div>
                                                        </div>
                                                    </label>

                                                    <label class="option-item" for="exampleCheck2" onclick="calTotal()">
                                                        <div class="row  align-items-center">
                                                            <div class="col-xl-9">
                                                                <div class="form-check d-flex  align-items-center">
                                                                    <input type="checkbox" class="form-check-input checkbox-dichvu" name="dichvu" value="500000" id="exampleCheck2">
                                                                    <div class="mid-content">
                                                                        <div class="d-flex  align-items-center">
                                                                            <div class="ml-2">
                                                                                <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 text-right">
                                                                {{-- <div class="gia-dichvu giagoc d-inline-block">300,000đ</div> --}}
                                                                <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                            </div>
                                                        </div>
                                                    </label>

                                                    <label class="option-item" for="exampleCheck4" onclick="calTotal()">
                                                        <div class="row  align-items-center">
                                                            <div class="col-xl-9">
                                                                <div class="form-check d-flex  align-items-center">
                                                                    <input type="checkbox" class="form-check-input checkbox-dichvu" name="dichvu" value="300000" id="exampleCheck4">
                                                                    <div class="mid-content">
                                                                        <div class="d-flex  align-items-center">
                                                                            <div class="ml-2">
                                                                                <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 text-right">
                                                                {{-- <div class="gia-dichvu giagoc d-inline-block">300,000đ</div> --}}
                                                                <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                            </div>
                                                        </div>
                                                    </label>

                                                    <label class="option-item" for="exampleCheck3" onclick="calTotal()">
                                                        <div class="row  align-items-center">
                                                            <div class="col-xl-9">
                                                                <div class="form-check d-flex  align-items-center">
                                                                    <input type="checkbox" class="form-check-input checkbox-dichvu" name="dichvu" value="300000" id="exampleCheck3">
                                                                    <div class="mid-content">
                                                                        <div class="d-flex  align-items-center">
                                                                            <div class="ml-2">
                                                                                <a class="name-dichvu" href="">Dưỡng trắng da công nghệ plus unltra</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3 text-right">
                                                                {{-- <div class="gia-dichvu giagoc d-inline-block">300,000đ</div> --}}
                                                                <div class="gia-dichvu d-inline-block">300,000đ</div>
                                                            </div>
                                                        </div>
                                                    </label>


                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-xl-6">
                                            <div class="form-group form-check mr-auto mb-0">
                                                <input type="checkbox" class="form-check-input" id="em">
                                                <label class="form-check-label button-href-basic" for="em">Tôi muốn tư vấn</label>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 text-right">
                                            <div class="">
                                                Tổng : <span class="tongtiendichvu"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-slide-datlich d-flex align-items-center">
                                        <button type="button" class="button-href-basic prev-step mr-auto">Quay lại</button>
                                        <button type="button" class="button-href-basic next-step">Tiếp theo</button>
                                    </div>
                                </div>

                                <div class="datlich-step h-100" data-step="2">
                                    <div class="title-3 color-main">Thời gian bạn đến</div>
                                    <div class="text-7">Để tiết kiệm thời gian cho bạn hãy đặt trước khi đến spa</div>
                                    <div class="list-select position-relative">
                                        <div class="box-spinner">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only">Loading...</span>
                                              </div>
                                        </div>
                                        <div class="select-custom">
                                            <div class="select-fa">
                                                <div class="name-select d-flex align-items-center" data-mov="9">
                                                    <div class="tendanhmuc value-date">
                                                        Hôm nay, T2 (27/9)
                                                    </div data-date="27/9/2001">
                                                    <div class="icon-1">
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                </div>

                                                <div class="list-option" slide-mov="9">
                                                    <div class="option-item date-bg">
                                                        <div class="pickdate" data-option-date="27/9/2001">Hôm nay, T2 (27/9)</div>
                                                    </div>

                                                    <div class="option-item date-bg">
                                                        <div class="pickdate" data-option-date="28/9/2001">Ngày mai, T3 (28/9)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="select-custom">
                                            <div class="select-fa">
                                                <div class="name-select d-flex align-items-center" data-mov="11">
                                                    <div class="tendanhmuc value-nhanvien">
                                                        Spa chọn chuyên viên giúp bạn
                                                    </div data-nhanvien="0">
                                                    <div class="icon-1">
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                </div>

                                                <div class="list-option list-nhanvien" slide-mov="11">
                                                    <div class="option-item option-nhanvien date-bg clicked">
                                                        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="0">
                                                            <div class="img-1 border-image">
                                                                <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                            </div>

                                                            <div class="name-nhanvien">Spa chọn chuyên viên giúp bạn</div>
                                                        </div>
                                                    </div>

                                                    <div class="option-item option-nhanvien date-bg">
                                                        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="2">
                                                            <div class="img-1 border-image">
                                                                <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                            </div>

                                                            <div class="name-nhanvien">
                                                                Hằng Nguyễn Thị
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="option-item option-nhanvien date-bg">
                                                        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="3">
                                                            <div class="img-1 border-image">
                                                                <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                            </div>

                                                            <div class="name-nhanvien">
                                                                Hằng Nguyễn Thị
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="option-item option-nhanvien date-bg">
                                                        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="4">
                                                            <div class="img-1 border-image">
                                                                <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                            </div>

                                                            <div class="name-nhanvien">
                                                                Hằng Nguyễn Thị
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="option-item option-nhanvien date-bg">
                                                        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="5">
                                                            <div class="img-1 border-image">
                                                                <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                            </div>

                                                            <div class="name-nhanvien">
                                                                Hằng Nguyễn Thị
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="option-item option-nhanvien date-bg">
                                                        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="6">
                                                            <div class="img-1 border-image">
                                                                <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                            </div>

                                                            <div class="name-nhanvien">
                                                                Hằng Nguyễn Thị
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="option-item option-nhanvien date-bg">
                                                        <div class="picknhanvien position-relative z-index-999" data-option-nhanvien="7">
                                                            <div class="img-1 border-image">
                                                                <img src="{{ asset('Site/images') }}/image8.png" class="cycle-img-1" alt="">
                                                            </div>

                                                            <div class="name-nhanvien">
                                                                Hằng Nguyễn Thị
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                        </div>

                                        <div class="select-custom">
                                            <div class="select-fa">
                                                <div class="name-select d-flex align-items-center" data-mov="10">
                                                    <div class="tendanhmuc value-time">
                                                        Chọn thời gian
                                                    </div data-time="0">
                                                    <div class="icon-1">
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                </div>

                                                <div class="list-option mb-3" slide-mov="10">
                                                    <div class="option-item time-bg">
                                                        <div class="picktime" data-option-time="8:00">8h00</div>
                                                    </div>

                                                    <div class="option-item time-bg">
                                                        <div class="picktime" data-option-time="8:30">8h30</div>
                                                    </div>

                                                    <div class="option-item time-bg time-close">
                                                        <div class="picktime" data-option-time="10:00">10h00</div>
                                                    </div>

                                                    <div class="option-item time-bg time-close">
                                                        <div class="picktime" data-option-time="10:30">10h30</div>
                                                    </div>

                                                    <div class="option-item time-bg">
                                                        <div class="picktime" data-option-time="11:00">11h00</div>
                                                    </div>

                                                    <div class="option-item time-bg">
                                                        <div class="picktime" data-option-time="11:30">11h30</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="control-slide-datlich d-flex">
                                        <button type="button" class="button-href-basic prev-step mr-auto">Quay lại</button>
                                        <button type="button" class="button-href-basic next-step">Tiếp theo</button>
                                    </div>
                                </div>

                                <div class="datlich-step h-100" data-step="3">
                                    Long 3

                                    <div class="control-slide-datlich d-flex">
                                        <button type="button" class="prev-step mr-auto">Quay lại</button>
                                        <button type="button" class="next-step">Tiếp theo</button>
                                    </div>
                                </div>


                            </div>

                            <div class="control-short">
                                <div class="control-item active" data-step="0">
                                    <i class="fas fa-check icon-check"></i>
                                </div>
                                <div class="control-item" data-step="1">
                                    <i class="fas fa-check icon-check"></i>
                                </div>
                                <div class="control-item" data-step="2">
                                    <i class="fas fa-check icon-check"></i>
                                </div>
                                <div class="control-item final" data-step="3">
                                    <i class="fas fa-check icon-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-6 pl-0 position-relative z-index-999">
                        <div class="bg-modal-1">

                        </div>
                    </div> --}}
                </div>

                <div class="close close-modal button-close-modal">
                    x
                </div>
            </div>
            {{-- <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                        <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
                    </svg> --}}
        </div>
    </div>
</div>
