<!-- <a class="button-popup" href=""><img src="assets/imgs/button-popup.png"></a> -->

<div class="hotline-phone-ring-wrap form-ring-wrap button-popup">
    <div class="hotline-phone-ring ">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle click_popup">
            <a href="javascript:void(0)" class="pps-btn-img">
                <img src="assets/imgs/dowload.png" alt="Gọi điện thoại" width="50">
            </a>
        </div>
        <div class="hotline-bar click_popup">
            <a href="javascript:void(0)">
                <span class="text-hotline">TẢI BẢNG GIÁ</span>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlInput = document.getElementById("current-url");
        if (urlInput) {
            urlInput.value = window.location.href;
        }
    });
</script>


<div class="popup-overlay"></div>
<div class="main-popup">
    <div class="row">
        <div class="col-md-7">
            <div class="content">
                <div class="img"><img src="assets/imgs/wweb-lumia-tách.png"></div>
                <ul>
                    <li>Chiết khấu 2% cho khách hàng booking sớm</li>
                    <li>Chiết khấu 1% cho khách hàng mua từ 2 căn trở lên</li>
                    <li>Chiết khấu 8% cho khách hàng thanh toán sớm từng đợt</li>
                    <li>Chiết khấu tới 7% cho khách hàng thanh toán sớm</li>
                </ul>
                <form class="form" id="validateForm" method="post" action="question">
                    @csrf
                    <input required type="text" name="name" placeholder="Họ và tên *">
                    <input required type="text" name="phone" placeholder="Số điện thoại *">
                    <input type="text" name="email" placeholder="Địa chỉ email *">
                    <button type="submit">TẢI XUỐNG</button>
                </form>
            </div>
        </div>
        <div class="col-md-5">
            <div class="img">
                <img src="assets/imgs/Artboard136.png">
            </div>
        </div>
    </div>
    <a href=""><img class="close" src="assets/imgs/close.png"></a>
</div>