@extends('layout.index')

@section('title'){{$setting->title ? $setting->title : $setting->name}}@endsection
@section('description') {{$setting->description}} @endsection
@section('robots'){{'index, follow'}}@endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}{{'assets/imgs/avata.jpg'}}@endsection

@section('css')


@endsection

@section('content')

<div id="fullpage">
    <div class="section section0 flex-start" id="section0">
        <div class="img mb-3">
            <img src="assets/imgs/logo.png">
        </div>
        <div class="img">
            <img src="assets/imgs/text.png">
        </div>
    </div>

    <div class="section section1 flex-start" id="section1">
        <div class="img">
            <img src="assets/imgs/text-2.png">
        </div>
    </div>

    <div class="section section2 flex-start" id="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="row-tongquan">
                        <h2>TỔNG QUAN DỰ ÁN</h2>
                        <ul>
                            <li><strong>Chủ đầu tư:</strong> Công ty Cổ phần Đầu tư Sài Gòn – Đà Nẵng</li>
                            <li><strong>Tổng đại lý & Phát triển kinh doanh:</strong> <br> Công ty Cổ phần VietnamHomes Group</li>
                            <li><strong>Vị trí:</strong> Đường Nguyễn Tất Thành nối dài, Q.Liên Chiểu, TP. Đà Nẵng</li>
                            <li><strong>Quy mô:</strong> 69.87 hecta <br>Đã được cấp Giấy chứng nhận đăng ký đầu tư với tổng mức đầu tư là 655,22 tỷ đồng</li>
                            <li><strong>Loại hình:</strong> Biệt thự - Nhà phố - Liền kề - Chung cư</li>
                            <li><strong>Pháp lý:</strong> Sở hữu lâu dài</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="section vitri" id="section3">
        <div class="row-vitri">
            <div class="img"><img src="assets/imgs/vitri-text.png"></div>
            <p>Trái tim của Liên Chiểu - trung tâm phát triển mới của Đà Nẵng, nơi The Lumia Da Nang vươn mình trở thành biểu tượng sống hiện đại, kết nối linh hoạt với cảng biển, sân bay, trung tâm thành phố và khu công nghệ cao như KCN Liên Chiểu và KCN Hoà Khánh mở rộng, hành lang kinh tế liên quốc gia và trung tâm thành phố. Đặc biệt hơn The Lumia Da Nang còn đón đầu quy hoạch của Khu bến Liên Chiểu - Cảng biển chiến lược cho vận tải biển tại khu vực Đông Nam Á.</p>
            <p>Toạ lạc tại tâm điểm phát triển hạ tầng chiến lược, The Lumia Da Nang mở ra cánh cửa giao thương, đầu tư và phát triển đô thị cảng biển sôi động bậc nhất miền Trung. </p>
        </div>
    </div>

    <div class="section lienketvung flex-start" id="section4">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/anh1.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/anh2.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/anh3.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/anh4.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/anh5.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/anh6.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/anh7.png" /></div>
                
            </div>
            <div class="swiper-button-prev custom-prev"></div>
            <div class="swiper-button-next custom-next"></div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/thumb1.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/thumb2.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/thumb3.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/thumb4.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/thumb5.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/thumb6.png" /></div>
                <div class="swiper-slide"><img src="assets/imgs/lienketvung/thumb7.png" /></div>
            </div>
        </div>
    </div>

    <div class="section tienich flex-start" id="section5">
        <div class="slide" id="slide1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="vertical-marquee marquee-up">
                            <div class="marquee-content">
                              <div><img src="assets/imgs/tienich/tienich.png"></div>
                              <div><img src="assets/imgs/tienich/tienich1.png"></div>
                              <div><img src="assets/imgs/tienich/tienich2.png"></div>
                              <div><img src="assets/imgs/tienich/tienich3.png"></div>
                              <div><img src="assets/imgs/tienich/tienich.png"></div>
                              <div><img src="assets/imgs/tienich/tienich1.png"></div>
                              <div><img src="assets/imgs/tienich/tienich2.png"></div>
                              <div><img src="assets/imgs/tienich/tienich3.png"></div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="vertical-marquee marquee-down">
                            <div class="marquee-content">
                              <div><img src="assets/imgs/tienich/tienich4.png"></div>
                              <div><img src="assets/imgs/tienich/tienich5.png"></div>
                              <div><img src="assets/imgs/tienich/tienich6.png"></div>
                              <div><img src="assets/imgs/tienich/tienich7.png"></div>
                              <div><img src="assets/imgs/tienich/tienich4.png"></div>
                              <div><img src="assets/imgs/tienich/tienich5.png"></div>
                              <div><img src="assets/imgs/tienich/tienich6.png"></div>
                              <div><img src="assets/imgs/tienich/tienich7.png"></div>
                            </div>
                          </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row-tienich">
                            <div class="img">
                                <img src="assets/imgs/Artboard-52.png">
                                <div>
                                    <h4>TIỆN ÍCH ĐỘC QUYỀN</h4>
                                    <h5>LIVE – WORK – PLAY</h5>
                                </div>
                            </div>
                            <div class="info">
                                <p>Với khát vọng trở thành một tọa độ sống đáng khao khát và là điểm đến biểu tượng của cả khu vực, The Lumia Da Nang mang đến một hệ sinh thái toàn diện theo mô hình Live - Work - Play, giúp cư dân sống trọn vẹn, làm việc hiệu quả và giải trí đỉnh cao mà không cần phải đi đâu xa.</p>
                                <a class="next-slide mt-4" href="#">
                                    <img src="assets/imgs/button.png" alt="Next">
                                  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="slide2">
            <div class="matbang">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="img"><img src="assets/imgs/matbang.jpg"></div>
                        </div>
                        <div class="col-md-3">
                            <h2 class="title-gradient">TIỆN ÍCH</h2>
                            <div class="desc">
                                <ol>
                                    <li>Sân chơi trẻ em</li>
                                    <li>Khu thể thao outdoor</li>
                                    <li>Công viên</li>
                                    <li>Đường dạo bộ</li>
                                    <li>Hồ cảnh quan trung tâm</li>
                                    <li>Quảng trường mặt trời</li>
                                    <li>Sân tập golf</li>
                                    <li>Bể bơi</li>
                                    <li>Club house</li>
                                    <li>Sale gallery</li>
                                    <li>Cầu đi bộ</li>
                                    <li>Sân Pickle ball</li>
                                    <li>Sân bóng rổ</li>
                                    <li>Quảng trường</li>
                                    <li>Biểu tượng dự án</li>
                                    <li>Cổng chào dự án</li>
                                    <li>Khu Camping</li>
                                    <li>Khu vực chiếu phim ngoài trời</li>
                                    <li>Trường quốc tế</li>
                                    <li>Trung tâm thương mại</li>
                                    <li>Bệnh viện</li>
                                    <li>Cầu đi bộ cảnh quan</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="section" id="section7">
        <div class="slide" id="slide3">
            <div class="container section7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section71">
                            <div class="section711">
                                <div><p>NẰM TRONG MẶT ĐƯỜNG NỘI KHU</p> <p>RỘNG TỚI 10.5M, VỈA HÈ TỚI 5M</p></div>
                                <img src="assets/imgs/Artboard84.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section71">
                            <div class="section711 mb-row-reverse">
                                <img src="assets/imgs/Artboard86.png">
                                <div><p>3 TẦNG KHAI THÁC - TỐI ĐA CÔNG NĂNG</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section71">
                            <div class="section711">
                                <div><p>THIẾT KẾ HIỆN ĐẠI,</p> <p>SANG TRỌNG</p></div>
                                <img src="assets/imgs/Artboard90.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section71">
                            <div class="section711 border-none">
                                <img class="img-100" src="assets/imgs/Artboard83.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section71">
                            <div class="section711">
                                <img src="assets/imgs/Artboard87.png">
                                <div><p>BÀN GIAO FULL NỘI THẤT</p></div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="section71">
                            <div class="section711 mb-row-reverse">
                                <div><p>NẰM TRONG TUYẾN PHỐ</p> <p>THƯƠNG MẠI SẦM UẤT BẬC NHẤT</p></div>
                                <img src="assets/imgs/Artboard90_1.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section71">
                            <div class="section711">
                                <img src="assets/imgs/Artboard89.png">
                                <div><p>CAM KẾT VẬN HÀNH CHO THUÊ</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="slide4">
            <div class="section8" id="section8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <img class="w-100 max-heith-100" src="assets/imgs/CIRCLE.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section matbang" id="section9">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="imgs mb-4 "><img class="w-100" src="assets/imgs/Artboard116.png"></div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="matbang1">
                        <div class="swiper Swiper-matbang">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang1.png" /></div>
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang2.png" /></div>
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang3.png" /></div>
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang4.png" /></div>
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang5.png" /></div>
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang6.png" /></div>
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang7.png" /></div>
                                <div class="swiper-slide"><img src="assets/imgs/matbang/matbang8.png" /></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="custom-next-matbang"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section loithe" id="section10">
        <div class="container">
            <div class="row">
                <div class="col-md-4 loithe1 col-6">
                    <div class="">
                        <div class="img"><img class="width120" src="assets/imgs/Artboard68.png"></div>
                    </div>
                </div>
                <div class="col-md-4 loithe1 col-6">
                    <div class="">
                        <div class="img"><img src="assets/imgs/Artboard71.png"></div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="matbang1">
                        <div class="swiper Swiper-matbang">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h4>1. Vị trí độc tôn – Kết nối toàn diện</h4>
                                    <p>Toạ lạc tại khu vực cảng chiến lược Liên Chiểu – cửa ngõ giao thương quốc tế của miền Trung, dễ dàng kết nối với trung tâm Đà Nẵng, sân bay quốc tế, cảng biển và các trục giao thông trọng điểm.</p>
                                </div>
                                <div class="swiper-slide">
                                    <h4>2. Vị trí độc tôn – Kết nối toàn diện</h4>
                                    <p>Toạ lạc tại khu vực cảng chiến lược Liên Chiểu – cửa ngõ giao thương quốc tế của miền Trung, dễ dàng kết nối với trung tâm Đà Nẵng, sân bay quốc tế, cảng biển và các trục giao thông trọng điểm.</p>
                                </div>
                                <div class="swiper-slide">
                                    <h4>3. Vị trí độc tôn – Kết nối toàn diện</h4>
                                    <p>Toạ lạc tại khu vực cảng chiến lược Liên Chiểu – cửa ngõ giao thương quốc tế của miền Trung, dễ dàng kết nối với trung tâm Đà Nẵng, sân bay quốc tế, cảng biển và các trục giao thông trọng điểm.</p>
                                </div>
                            </div>
                        </div>
                        <div class="custom-next-matbang"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section tintuc" id="section11">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="img"><img class="rotate90" src="assets/imgs/Artboard103.png"></div>
                </div>
                <div class="col-md-4">
                    <div class="img tintuc1">
                        <img class="w-100" src="assets/imgs/khaichuongvpbh.jpg">
                        <h3 class="tintuc11">Những công trình hạ tầng đón đầu quy hoạch Thành Phố Đà Nẵng</h3>
                        <div class="date-text tintuc11">
                            <div class="ngay">27</div>
                            <div class="thang">Tháng 06</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img tintuc1">
                        <img class="w-100" src="assets/imgs/anhleraquan.jpg">
                        <h3 class="tintuc11">Những công trình hạ tầng đón đầu quy hoạch Thành Phố Đà Nẵng</h3>
                        <div class="date-text tintuc11">
                            <div class="ngay">27</div>
                            <div class="thang">Tháng 06</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section lienhe" id="section12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo"><img src="assets/imgs/logo.png"></div>
                    <div class="title-gradient"> THÔNG TIN LIÊN HỆ </div>
                    <h5 class="mt-2">ĐỊA CHỈ</h5>
                    <p>Địa chỉ dự án: Đường số 5, phường Hải Vân, quận Liên Chiểu, TP Đà Nẵng</p>
                    <p>Địa chỉ Nhà mẫu & VPBH dự án: Căn BT B3-06-962, dự án The Lumia Da Nang</p>
                    <h5 class="mt-4">HOTLINE</h5>
                    <h5>{{$setting->hotline}}</h5>
                    <h5 class="mt-4">EMAIL</h5>
                    <p>{{$setting->email}}</p>
                    <div class="title-gradient mt-5"> ĐĂNG KÝ NHẬN TƯ VẤN </div>
                    <hr class="line1">
                    <hr class="line2">
                    <form class="main-form">
                        <div class="form">
                            <input type="" name="" placeholder="Họ & tên *">
                            <input type="" name="" placeholder="Số điện thoại *">
                            <input type="" name="" placeholder="Địa chỉ email *">
                            <button type="submit">ĐĂNG KÝ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('js')

<script>
    if (window.innerWidth > 768) {
        var myFullpage = new fullpage('#fullpage', {
            sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
            anchors: [
                @foreach($menu as $val)
                '{{$val->slug}}',
                @endforeach
            ],
            navigation:true,
            navigationTooltips: [
                @foreach($menu as $val)
                '{{$val->name}}',
                @endforeach
            ],
            showActiveTooltip: true,
            navigationPosition: 'left',
            // menu: '#menu',
            css3:false,
            slidesNavigation: true, // Bật dấu chấm slide
            slidesNavPosition: 'bottom', // Vị trí dấu chấm: bottom hoặc top
            controlArrows: true,
            loopHorizontal: false, 
            scrollHorizontally: true,

            responsiveWidth: 768, // dưới 768px sẽ tự động destroy fullPage.js

        });
    }
</script>

@endsection
