<section class="sec-hero">
    <div class="hero-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach($slider as $val)
                <div class="swiper-slide">
                    <div class="dark-overlay"></div> <!-- Thêm lớp phủ màu tối -->
                    <span style='background-image: url("data/images/{{$val->img}}")' class="w-100 thumb"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="slider-content">
                                    <!-- {!! $val->content !!} -->
                                    <!-- <button class="btn-button">Khám phá</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- <div class="swiper-navigator">
                <div class="swiper-pagination"></div>
                <div class="swiper-navigator-btn">
                    <div class="swiper-button-prev"><i class="icon-prev-thin"></i></div>
                    <div class="swiper-button-next"><i class="icon-next-thin"></i></div>
                </div>
            </div> -->
        </div>
    </div>
</section>