<section class="apartment">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="gradient-text"> CÁC LOẠI HÌNH CĂN HỘ </h2>
                <div class="desc">
                    <p>Linh hoạt lựa chọn với bộ sưu tập căn hộ 1-3PN thiết kế tinh tế, tối ưu diện tích. Dù là kiến tạo không gian sống đẳng cấp hay tìm kiếm cơ hội đầu tư thông thái, hiệu quả, mỗi căn hộ đều là lựa chọn hoàn hảo, đáp ứng trọn vẹn mọi phong cách sống.</p>
                </div>

                <div class="apartment-slider">
                    <div class="position-relative grid-view">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach($canho as $val)
                                <div class="swiper-slide">
                                    <div class="col">
                                        <div class="card card-s card-s4 ">
                                            @foreach($val->Images as $img)
                                            <span>
                                                <a data-fancybox="canho{{$img->id}}" data-thumb="false" href="data/images/{{$img->img}}">
                                                    <img src="data/images/{{$img->img}}" >
                                                </a>
                                            </span>
                                            @endforeach
                                            <div class="card-body">
                                                <div class="card-body-wrap">
                                                    <h5 class="card-title"><span>{{$val->heading}}</span></h5>
                                                    <div class="card-info">
                                                        {!! $val->content !!}
                                                    </div>
                                                </div>
                                                <div class="button">
                                                    <button class="btn-button">{{$val->tab}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next"></div> -->
                        <!-- <div class="swiper-button-prev"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


