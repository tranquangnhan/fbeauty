<div class="modal-container" id="modal-user">
    <div class="modal-background">
        <div class="close-modal background-close" type-modal="modal-user"></div>
        <div class="modal modal-main fa-content-user">
            <div class="noidung-modal">
                <div class="box-spinner">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div class="fa-modal-user">
                    <div class="modal-user-item h-100 active" data-authen="0">
                        <div class="title-3 text-left color-main uppercase">Nhập số điện thoại</div>
                        <div class="text-10 text-left">Đăng nhập hoặc đăng ký bằng số điện thoại của bạn</div>
                        <form action="" class="fa-custom form-phone-number">
                            <div class="div-phone-number">
                                <input type="text" id="phone-number" placeholder="Ví dụ: 0965XXXXXX">
                            </div>
                            <div class="custom-error d-flex align-items-center" icon-error-of="phone">
                                <div class="custom-1">
                                    <div class="box-icon">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="fa-custom-error-text d-flex align-items-center">
                                <div class="custom-error-text phone-error-text" error-of="phone">
                                    Không được bỏ trống
                                </div>
                            </div>

                        </form>
                        <div class="control-slide-datlich d-flex justify-content-end">
                            <button type="button" class="button-href-basic authen-control-next">Tiếp theo <i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>

                    <div class="modal-user-item h-100" data-authen="1">
                        <div class="title-3 text-left color-main uppercase">Nhập mật khẩu</div>
                        <div class="text-10 text-left">Nhập mật khẩu của SĐT 0965.286.066 hoặc chọn <br> "Quên mật khẩu"
                        </div>
                        <div class="fa-list-input-password d-flex w-100 mt-1">
                            <input type="number" class="password password-box ip-number-box w-100 ml-0" maxlength="1" name="password">
                            <input type="number" class="password password-box ip-number-box w-100" maxlength="1" name="password">
                            <input type="number" class="password password-box ip-number-box w-100" maxlength="1" name="password">
                            <input type="number" class="password password-box ip-number-box w-100" maxlength="1" name="password">
                            <input type="number" class="password password-box ip-number-box w-100" maxlength="1" name="password">
                            <input type="number" class="password password-box ip-number-box w-100 mr-0" maxlength="1" name="password">
                        </div>
                        <div class="d-flex py-3">
                            <button type="button" class="button-href-basic prev-authen mr-auto">Quay lại</button>
                            <button type="button" class="button-href-basic">Quên mật khẩu</button>
                        </div>

                        <a href="">
                            <button class="btn-8 for-authen w-100">
                                <span>Thanh toán</span>
                            </button>
                        </a>
                    </div>

                    <div class="modal-user-item h-100" data-authen="2">
                        <div class="title-3 text-left color-main uppercase">Nhập OTP</div>
                        <div class="text-10 text-left">Chúng tôi sẽ gửi cho bạn mã OTP<br> vui lòng kiểm tra tin nhắn
                        </div>
                        <div class="fa-list-input-otp d-flex w-100 mt-1">
                            <input type="number" class="otp otp-box ip-number-box w-100 ml-0" maxlength="1" name="otp">
                            <input type="number" class="otp otp-box ip-number-box w-100" maxlength="1" name="otp">
                            <input type="number" class="otp otp-box ip-number-box w-100" maxlength="1" name="otp">
                            <input type="number" class="otp otp-box ip-number-box w-100" maxlength="1" name="otp">
                            <input type="number" class="otp otp-box ip-number-box w-100" maxlength="1" name="otp">
                            <input type="number" class="otp otp-box ip-number-box w-100 mr-0" maxlength="1" name="otp">
                        </div>
                        <div class="d-flex py-3">
                            <button type="button" class="button-href-basic prev-authen mr-auto">Quay lại</button>
                            <button type="button" class="button-href-basic">Không nhận được mã?</button>
                        </div>

                        <a href="">
                            <button class="btn-8 for-authen w-100">
                                <span>Thanh toán</span>
                            </button>
                        </a>
                    </div>
                </div>


                <div class="close close-modal button-close-modal" type-modal="modal-user">
                    x
                </div>
            </div>
        </div>
    </div>
</div>
