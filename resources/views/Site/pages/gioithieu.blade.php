@extends('Site.layout')

@section('title')
    Giới thiệu
@endsection

@section('main')
<div class="fa-lienhe">
    <div class="about">
        <div class="box-about position-relative">
            <div class="background-about">
                <div class="box-images-2">
                    <div class="box-color-1"></div>
                    <div class="img-1">
                        <img class="img-fluid position-relative z-index-1"
                            src="{{ asset('Site/images') }}/about-1.png" alt="">
                    </div>
                    <div class="img-2">
                        <img class="img-small-2 float-right position-relative z-index-1"
                            src="{{ asset('Site/images') }}/coso4.jpg" alt="">
                    </div>
                </div>
                {{-- <div class="big-title about-title-custom title-font">About us</div> --}}
            </div>
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-xl-6" style="margin-top: 100px">
                        <div class="about-content">
                            <div class="title-small line-before">
                                VỀ CHÚNG TÔI
                            </div>
                            <div class="w-100">
                                <div class="title-1">
                                    Hệ Thống Spa <br> Đẳng Cấp
                                </div>
                                <div class="text-1 mt-4">
                                    Với 45 chi nhánh trải dài khắp cả nước, FBeauty tự hào là chuỗi hệ thống thẩm mỹ
                                    viện hàng đầu Việt Nam
                                </div>
                                <div class="text-2 mt-1">
                                    Mang trong mình niềm tin về sứ mệnh đánh thức vẻ đẹp tiềm ẩn trong mỗi người, FBeauty
                                    Spa luôn nỗ lực
                                    không ngừng để đem đến cho khách hàng những dịch vụ hoàn hảo nhất. Không chỉ nằm ở
                                    kết quả mà FBeauty
                                    Spa còn hướng tới thẩm mỹ khỏe – đẹp – an toàn để mỗi phút giây ngắm mình trong
                                    gương là những
                                    phút giây tận hưởng hạnh phúc thật sự của mỗi khách hàng.
                                </div>
                            </div>
                            <div class="w-100 text-left mt-3">
                                <a href="{{URL::to("gioi-thieu")}}">
                                    <button class="btn-3 active black-1">Xem chi tiết</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" mt-5 ">
        <div class="w-100 container text-center">
            <div class="title-small line-before">
                Đội ngũ nhân viên nhiệt tình
            </div>
            <h1 style="font-family: 'Roboto', sans-serif;font-size:50px;color:black;">Chuyên gia và các bác sĩ</h1>
            <p class="mt-4">
                100% các bác sĩ tại FBeauty được đào tạo bài bản từ các trường Đại học danh tiếng trong và ngoài nước.
                 Ngoài kiến thức và kỹ năng trong nghề,

                mỗi Bác  sĩ và Trưởng <br> bộ phận phải trải qua quá trình trị liệu tối thiểu 10,000 ca lâm sàng để có hiểu biết chuyên sâu về làn da cũng như cơ địa người Châu Á.

                Luôn học hỏi, nỗ lực và cập nhật những kiến thức y khoa – xu hướng thẩm mỹ mới nhất để bắt kịp với xu hướng y học hiện đại cam kết mang đến cho khách hàng kết quả thẩm mỹ tốt nhất.
            </p>
        </div>
        <div class="w-100 mt-4 container">
            <img src="{{ asset('uploads') }}/doingubacsi.jpg" alt="Avatar" class=" mb-2" style="width:100%;height:100%;">
        </div>
    </div>
    <div class="box-lieutrinh mt-5">
        <div class="bg-lieutrinh">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="box-title-lieutrinh">
                            <div class="title-3">
                                Điều Trị <br> Theo Liệu Trình
                            </div>

                            <p class="text-2 limit-text-row-3 mt-1 mt-3">
                                Điều trị da theo liệu trình nghĩa là khách hàng sẽ tuân thủ đúng số buổi, thời gian tái khám và điều trị tiếp theo hay kết hợp dùng thuốc đặc trị tại nhà (nếu có) theo đúng như hướng dẫn của bác sĩ.
                            </p>

                            <div class="w-100 text-left mb-4">
                                <button class="button btn-5 btn-datlich btn-modal-main" type-modal="modal-datlich" data-show="one">Đặt lịch</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="cac-buoc-lieutrinh">
                            <div class="lieutrinh-item">
                                {{-- <div class="number-1">
                                    1
                                </div> --}}

                                <div class="title-5">
                                    Kế Hoạch
                                </div>
                                <div class="icon-1 mt-4" style="height:75px;">
                                    <img class=""  src=" {{ asset('Site/images/icon') }}/task.png"
                                        alt="">
                                </div>
                                <div class="text-2 mt-4 color-white font-weight-300">
                                    Lo lắng giữa thị trường “xô bồ” của mỹ phẩm có chứa thành phần hóa học ảnh hưởng xấu đến da thì mỹ phẩm được chiết xuất từ thiên nhiên ra đời giống như cứu cánh cho phái đẹp.
                                </div>
                            </div>

                            <div class="lieutrinh-item">
                                {{-- <div class="number-1">
                                    1
                                </div> --}}

                                <div class="title-5">
                                    Theo Dõi
                                </div>

                                <div class="icon-1 mt-4" style="height:75px;">
                                    <img class="" src=" {{ asset('Site/images/icon') }}/doctor.png"
                                        alt="">
                                </div>

                                <div class="text-2 mt-4 color-white font-weight-300">
                                    Hãy theo dõi chũng tôi để biết được những ưu đãi đặc biệt dành cho khách hàng, chúng tôi cam đoan những dòng mỹ phẩm nổi tiếng và mới nhất sẽ nhanh chóng nằm trong tay của bạn còn chờ gì mà không theo dõi ngay.
                                </div>
                            </div>

                            <div class="lieutrinh-item">
                                {{-- <div class="number-1">
                                    1
                                </div> --}}

                                <div class="title-5">
                                    Hỗ Trợ
                                </div>

                                <div class="icon-1 mt-4" style="height:75px;">
                                    <img class="" src="
                                        {{ asset('Site/images/icon') }}/customer-service.png" alt="">
                                </div>

                                <div class="text-2 mt-4 color-white font-weight-300">
                                    Với đội ngũ nhân viên chuyên nghiệp phục vụ bạn 24/7 chỉ cần nhấc máy và gọi chúng tôi sẽ hỗ trợ cho bạn tận tình và đưa ra giải pháp hợp lý giúp bạn có thân hình toàn diện.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="introduce mb-5 col-11 mt-5 text-center container-fluid">
        <div class="card-body mt-5 nsl">
            <div class="title-small line-before">
                Trải nghiệm nghệ thuật chăm sóc
            </div>
            <h1 style="font-family: 'Roboto', sans-serif;font-size:50px;">Hội đồng sáng lập</h1>
            <p class="card-text">Cùng với hàng ngàn nhân viên chuyên ngành Spa họ đã tạo nên một FBeauty hoàn thiện như hiện nay.</p>
        </div>
        <div class="card-deck mt-4 mb-5">
            <div class="card container text-center border-0">
                <img src="{{ asset('uploads') }}/ceo1.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mrs.Jiyeon</div>
                </div>
               <i><span class="span-lienhe  card-title">Giám đốc điều hành </span></i>
            </div>
            <div class="card container border-0">
                <img src="{{ asset('uploads') }}/ceo4.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mr.Kyungsoo</div>
                </div>
                <i><span class="span-lienhe text-center main-title">Phó giám đốc  </span></i>
            </div>
            <div class="card container border-0">
                <img src="{{ asset('uploads') }}/ceo2.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mrs.Lee Qri</div>
                </div>
                <i><span class="span-lienhe text-center main-title">Quản lý nhân sự </span></i>
            </div>
            <div class="card container border-0">
                <img src="{{ asset('uploads') }}/ceo3.jpg" alt="Avatar" class="image mb-2" style="width:100%">
                <div class="middle">
                    <div class="text ">Mrs.Soyeon</div>
                </div>
                <i><span class="span-lienhe text-center main-title">Tổng giám đốc</span></i>
            </div>
        </div>
    </div>
    <div class="divcoso container mb-5 mt-5 ">
        <div class="">
            <div class="card-body">
                <div class="title-small line-before text-center mt-4">
                    Trải nghiệm cơ sở chất lượng
                </div>
                <div class="text-center">
                    <h5 class="card-title mb-3" style="font-family: 'Roboto', sans-serif;font-size:50px;color:black;">Cơ sở vật chất hàng đầu</h5>
                </div>
                <ul class="mt-4">
                    <li>Lấy cảm hứng từ phong cách hiện đại, tinh tế với thiết kế rộng rãi lên tới 2000m2 nhưng vẫn bật lên sự ấm cúng, thân thiện cùng nội thất hàng đầu, tiện nghi FBeauty  là một trong những Spa có cơ sở vật chất đạt tiêu chuẩn quốc tế.</li>
                    <li>Đồng thời, tất cả các giường thẩm mỹ được thiết kế độc lập, kín đáo mang đến không gian riêng tư, sự thoải mái nhất cho khách hàng khi trải nghiệm các dịch vụ tại FBeauty </li>
                    <li>Máy Móc Trang Thiết Bị </li>
                    <li>Hệ thống công nghệ được trang bị đầy đủ từ cơ bản đến nâng cao. Đồng thời luôn cập nhật và ứng dụng các công nghệ, thiết bị thẩm mỹ được đánh giá tốt nhất, hiện đại hàng đầu thế giới vào các dịch vụ tại Spa. </li>
                    <li>Chuỗi phòng chờ, phòng hậu phẫu rộng rãi, tiện nghi tại FBeauty chắc chắn sẽ làm khách hàng hài lòng.</li>
                </ul>
              <div class="d-flex justify-content-start mt-5">
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/coso1.jpg" alt=""></div>
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/cs2.jpg" alt=""></div>
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/cs3.jpg" alt=""></div>
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/cs4.jpg" alt=""></div>
              </div>
              <div class="d-flex justify-content-start mt-5">
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/cs5.jpg" alt=""></div>
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/cs6.jpg" alt=""></div>
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/cs7.jpg" alt=""></div>
                <div class="col-3"><img height="230px" class=""
                    src="{{ asset('uploads') }}/cs8.jpg" alt=""></div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('Site/css') }}/gioithieu.css">
@endsection

