@extends('layout.index')

@section('title') {{$setting->title ? $setting->title : $setting->name}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}{{ "assets/images/tongquan.jpg" }}@endsection

@section('css')
<link href="assets/css/home.css" rel="stylesheet">
<link href="assets/css/myswiper.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
@endsection

@section('content')
<div class="home">
    

@include('layout.header')

@include('pages.section.slider')


<section class="policy" id="chinh-sach-ban-hang">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="img">
                    <img src="assets/images/chinhsach.jpg">
                </div>
            </div>
            <div class="col-md-7">
                <h2 class=""> CHÍNH THỨC MỞ BÁN <span class="gradient-text"> THE LUMIA ĐÀ NẴNG </span> </h2>
                <h4>Thông tin trực tiếp CHỦ ĐẦU TƯ</h4>
                <div class="content">
                    <ul>
                        <li><img src="assets/images/11.png"> <div>Ngân hàng hỗ trợ lên đến <span>70%</span></div></li>
                        <li><img src="assets/images/49.png"> <div><span>Chiết khấu</span> thanh toán sớm và theo tiến độ</div> </li>
                        <li><img src="assets/images/50.png"> <div>Mua từ <span>2 căn</span> trở lên được ưu đãi nhiều hơn</div> </li>
                        <li><img src="assets/images/52.png"> <div>Dự án được vận hành bởi đơn vị <span>uy tín</span> hàng đầu</div></li>
                        <li><img src="assets/images/51.png"> <div>Tiềm năng tăng giá <span>x2 x3</span> đã hiện hữu</div></li>
                    </ul>
                </div>
                
            </div>
            
        </div>
    </div>
</section>



<section class="overview" id="tong-quan">
    <div class="container">
        <div class="row mb-5">
            <div class="title gradient-text mb-4">
                TỔNG QUAN DỰ ÁN THE LUMIA ĐÀ NẴNG
            </div>
            <div class="col-md-6">
                <div class="content">
                    <table>
                        <tr>
                            <td><span>Tên dự án:</span></td>
                            <td>The Lumia Đà Nẵng</td>
                        </tr>
                        <tr>
                            <td><span>Chủ đầu tư:</span></td>
                            <td>Công ty Cổ phần Đầu tư Sài Gòn – Đà Nẵng</td>
                        </tr>
                        <tr>
                            <td><span>Phát triển dự án:</span></td>
                            <td>Saigontel Land</td>
                        </tr>
                        <tr>
                            <td><span>Vị trí:</span></td>
                            <td>Đường Nguyễn Tất Thành nối dài, Q.Liên Chiểu, TP. Đà Nẵng</td>
                        </tr>
                        <tr>
                            <td><span>Quy mô:</span></td>
                            <td>69.87 hecta</td>
                        </tr>
                        <tr>
                            <td><span>Pháp Lý:</span></td>
                            <td>Đã được cấp Giấy chứng nhận đăng ký đầu tư với tổng mức đầu tư là 655,22 tỷ đồng</td>
                        </tr>
                        <tr>
                            <td><span>Loại hình:</span></td>
                            <td>Biệt thự – Nhà phố – Liền kề – Chung cư</td>
                        </tr>
                        <tr>
                            <td><span>Tiện ích:</span></td>
                            <td>Trường Mẫu giáo – Trường Quốc tếo Trung tâm thương mại – Bệnh viên – CLB Văn hoá – Thể dục thể thao Công viên chủ đề – hồ cảnh quan Sân tập Golf – Pickle Ball – Tenis</td>
                        </tr>
                        <tr>
                            <td><span>Cơ hội đầu tư:</span></td>
                            <td>Mua nhà từ móng đón đầu kỷ nguyên vươn mình của dân tộc – Nhiều chương trình ưu đãi quà tăng và chiết khấu hấp dẫn</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-6">
                <div class="img">
                    <img src="assets/images/tongquan.jpg">   
                </div>
            </div>
            
        </div>
        
    </div>
</section>


<section class="location" id="vi-tri">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="img">
                    <img src="assets/images/vitri.jpg">
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="title gradient-text">
                    VỊ TRÍ
                </div>
                <div class="desc mt-4">
                    <p>Dự án The Lumia Đà Nẵng tọa lạc trên trục đường Nguyễn Tất Thành nối dài, thuộc quận Liên Chiểu, TP. Đà Nẵng – một trong những khu vực phát triển năng động và chiến lược của thành phố. Với quy mô lên đến 69,87 hecta, dự án cung cấp đa dạng các loại hình sản phẩm như biệt thự, nhà liền kề, shophouse và căn hộ chung cư, đáp ứng nhu cầu an cư và đầu tư sinh lời lâu dài.</p>
                    <p>Sở hữu vị trí đắc địa cùng hệ thống hạ tầng giao thông đồng bộ, The Lumia Đà Nẵng dễ dàng kết nối với các tuyến đường huyết mạch dẫn đến bệnh viện, trường học, trung tâm thương mại và khu vui chơi giải trí, mang đến cuộc sống tiện nghi và hiện đại cho cư dân.</p>
                    <p>Đặc biệt, quận Liên Chiểu – nơi dự án tọa lạc – được định hướng trở thành khu vực kinh tế mũi nhọn của Đà Nẵng, với lợi thế phát triển đồng thời cả công nghiệp, kinh tế biển & logistics, và du lịch. Điều này tạo ra tiềm năng vượt trội cho The Lumia Đà Nẵng trong việc thu hút đầu tư và gia tăng giá trị bất động sản theo thời gian.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="location" id="vi-tri">
    <div class="container">
        <div class="row">
            
            <div class="col-md-4 ">
                <div class="title gradient-text">
                    KẾT NỐI TIỆN ÍCH SỐNG
                </div>
                <div class="desc mt-4">
                    <p>The Lumia Đà Nẵng sở hữu vị trí chiến lược tại trục đường Nguyễn Tất Thành nối dài, dễ dàng kết nối đến các khu vực trọng điểm trong thành phố. Từ dự án, cư dân chỉ mất vài phút di chuyển để tiếp cận bệnh viện Đa khoa Liên Chiểu, Trường Đại học Bách Khoa, Trường Quốc tế Singapore (SIS), cùng các trung tâm thương mại lớn như Co.opmart, Big C, và các khu vui chơi, giải trí ven biển.</p>
                    <p>Ngoài ra, nhờ kết nối trực tiếp với các tuyến đường huyết mạch như quốc lộ 1A, cao tốc Đà Nẵng – Quảng Ngãi, và tuyến đường sắt quốc gia, The Lumia trở thành cầu nối giao thương giữa nội đô và các tỉnh miền Trung. Gần cảng Liên Chiểu và sân bay quốc tế Đà Nẵng, dự án còn nắm giữ lợi thế lớn về logistics và phát triển kinh tế biển.</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="img">
                    <img src="assets/images/ketnoi.jpg">
                </div>
            </div>
            <div class="col-md-12 lienketvung mt-4">
                <img src="assets/images/lienketvung.jpg">
            </div>
        </div>
    </div>
</section>


<section class="potential" id="tien-ich">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title gradient-text mb-4">
                    THE LUMIA ĐÀ NẴNG <br> <span>KHU ĐÔ THỊ SINH THÁI THÔNG MINH GIỮA LÒNG THÀNH PHỐ BIỂN</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <p>Được định hướng trở thành khu đô thị sinh thái xanh ứng dụng công nghệ 4.0 hiện đại, The Lumia Đà Nẵng mang đến cho cư dân một cuộc sống tiện nghi, đẳng cấp và trọn vẹn giữa không gian sống chan hòa cùng thiên nhiên.</p>
                    <p>Dự án được chủ đầu tư quy hoạch bài bản với chuỗi tiện ích nội khu đỉnh cao như:</p>
                    <ul>
                        <li>Trung tâm thương mại sầm uất: Quy tụ hàng loạt thương hiệu nổi tiếng trong và ngoài nước, nơi cư dân có thể trải nghiệm không gian mua sắm đẳng cấp ngay tại “ngưỡng cửa” nhà mình</li>
                        <li>Chuỗi nhà hàng – khách sạn quốc tế: Thưởng thức tinh hoa ẩm thực từ nhiều quốc gia với thực đơn đa dạng, mang đến trải nghiệm ẩm thực đẳng cấp và phong phú</li>
                        <li>Hệ thống bể bơi đa dạng: Từ bể bơi ngoài trời thư giãn, bể bơi bốn mùa tiện nghi, đến bể bơi vô cực sang trọng, phục vụ nhu cầu thư giãn và rèn luyện sức khỏe của mọi lứa tuổi</li>
                        <li>Khu chăm sóc sức khỏe toàn diện: Gồm phòng gym hiện đại, khu yoga – thiền tĩnh tại, trung tâm spa chăm sóc sắc đẹp và trẻ hóa làn da, hướng đến một phong cách sống lành mạnh và cân bằng</li>
                        <li>Cửa hàng tiện ích – ngân hàng – dịch vụ tài chính: Được bố trí ngay dưới chân các tòa nhà, giúp cư dân dễ dàng tiếp cận mọi nhu cầu thiết yếu hằng ngày chỉ trong vài bước chân</li>
                        <li>Không gian xanh đa tầng: Vườn cây cổ thụ, vườn hoa leo, khu nướng BBQ, đường dạo bộ, đường sỏi massage... tất cả được chăm chút tỉ mỉ nhằm tạo nên một môi trường sống thư thái, gần gũi thiên nhiên – nơi cư dân có thể nghỉ ngơi, kết nối và tận hưởng trọn vẹn cuộc sống</li>
                    </ul>
                    <p>Bên cạnh hệ thống tiện ích nội khu vượt trội, The Lumia Đà Nẵng còn được thừa hưởng tiện ích ngoại khu đa dạng nhờ vị trí trung tâm và hệ thống giao thông hoàn thiện, dễ dàng kết nối đến trường học, bệnh viện, công viên, khu vui chơi giải trí và các tiện ích công cộng khác trong khu vực</p>
                </div>
            </div>
            <div class="col-md-6">
                
                <div class="img">
                    <img src="assets/images/allinone.jpg">
                </div>
            </div>
            <div class="col-md-12">
                <div class="swiper mySwiper1111">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="assets/images/tienich1.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich2.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich3.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich4.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich5.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich6.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich7.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich8.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich9.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich10.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich11.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich12.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich13.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich14.jpg" /></div>
                    <div class="swiper-slide"><img src="assets/images/tienich15.jpg" /></div>
                </div>
                <div class="swiper-pagination"></div>
                </div> 

            </div>
        </div>
    </div>
</section>

<section class="premises" id="mat-bang">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title gradient-text mb-4">
                    MẶT BẰNG PHÂN KHU
                </div>
                <div class="desc">
                    <h3>Tinh hoa kiến trúc hiện đại – Không gian sống đẳng cấp, linh hoạt</h3>
                    <p>Mang đậm phong cách kiến trúc hiện đại, các dòng sản phẩm liền kề, shophouse và căn hộ chung cư tại The Lumia Đà Nẵng được thiết kế theo tiêu chuẩn sang trọng và đẳng cấp, nhưng vẫn giữ được nét thanh thoát, tinh tế trong từng đường nét kiến trúc</p>
                    <p>Mỗi không gian đều được tối ưu về công năng sử dụng, bố trí thông minh, phù hợp với nhu cầu sống đa dạng của cư dân hiện đại. Đặc biệt, dòng sản phẩm shophouse và liền kề thương mại mang đến khả năng kết hợp linh hoạt giữa ở và kinh doanh, giúp gia chủ vừa tận hưởng cuộc sống tiện nghi, vừa có cơ hội phát triển hoạt động thương mại ngay tại chính ngôi nhà của mình</p>
                    <p>Sự hòa quyện giữa thẩm mỹ – tiện ích – công năng đã tạo nên một chuẩn mực sống mới cho cư dân thành đạt tại The Lumia Đà Nẵng</p>
                </div>
                <div class="img">
                    <img src="assets/images/matbang.jpg">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

@section('js')
<script>
    var totalSlides = document.querySelectorAll('.swiper-slide').length;
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: totalSlides - 1,
        cardsEffect: {
            perSlideOffset: 9,
            perSlideRotate: 0.1,
        },
        navigation: {
            // nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-next"
        }
    });

    var swiper8 = new Swiper(".hero-slider .swiper", {
        spaceBetween: 0,
        effect: "fade",
        lazy: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".hero-slider .swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".hero-slider .swiper-button-next",
            prevEl: ".hero-slider .swiper-button-prev",
        },
    });

    var swiper7 = new Swiper(".apartment-slider .swiper", {
        slidesPerView: 3,
        loop: false,
        spaceBetween: 30,
        grabCursor: true,
        centeredSlides: true,
        initialSlide: 1, 
        effect: "coverflow",
        coverflowEffect: {
            rotate: 0,
            stretch: 20,
            scale:.8,
            depth: 0,
            modifier: 1.5,
            slideShadows : false,
        },
        pagination: {
            el: ".apartment-slider .swiper-pagination",
            clickable: true,
        },
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.3,
                spaceBetween: 0,
                coverflowEffect: {
                    depth: 2,
                }
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            // when window width is >= 640px
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
                navigation: {
                    nextEl: ".apartment-slider .swiper-button-next",
                    prevEl: ".apartment-slider .swiper-button-prev",
                },
            }
        },  
    });

</script>

<script>
var swiper = new Swiper(".mySwiper1111", {
  slidesPerView: 3,
  grid: {
    rows: 2,
    fill: 'row' // fill theo chiều ngang
  },
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

  </script>


<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function () {
    // Lọc tất cả các ảnh có data-fancybox mà KHÔNG nằm trong swiper-slide-duplicate
    const fancyboxItems = Array.from(document.querySelectorAll('[data-fancybox]')).filter(el => {
        return !el.closest('.swiper-slide-duplicate');
    });

    // Khởi tạo Fancybox
    Fancybox.bind(fancyboxItems, {
        // Các tuỳ chọn nếu cần
    });
});


</script>

@endsection
