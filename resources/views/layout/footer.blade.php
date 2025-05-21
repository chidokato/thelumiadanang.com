<!------------------- FOOTER ------------------->
<footer id="lien-he">
<!-- <div id="particles-js"></div> -->
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <h3 class="">NHẬN TRỌN BỘ THÔNG TIN <span class="gradient-text"> BẢNG GIÁ THE LUMIA ĐÀ NẴNG </span>
        <span class="a234234"></span>
      </h3>
      <div class="form-main">
        <form action="{{ route('register.store') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-md-6 form">
      <input class="form-control" type="text" name="name" placeholder="Họ & Tên">
      <input class="form-control" type="text" name="phone" placeholder="Số điện thoại">
      <input class="form-control" type="text" name="email" placeholder="Email">
    </div>
    <div class="col-md-6 button">
      <button type="submit">ĐĂNG KÝ</button>
    </div>
  </div>
</form>
      </div>
    </div>
    <div class="col-md-5">
      <div class="contact-main">
        <ul>
          <li><img src="assets/images/dvptda.png">Đơn vị Phát triển dự án: Công ty Cổ phần VIETNAM HOMES GROUP</li>
          <li><img src="assets/images/53.png"> Tầng 1, CT4 Vimeco Nguyễn Chánh - Tú Mỡ, Quận Cầu Giấy, Hà Nội</li>
          <li><a href=""><img src="assets/images/54.png"> mktindochine@gmail.com</a></li>
          <li><a href="tel:0865041185"><img src="assets/images/55.png"> 0901 789 182</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-12">
      <hr class="line">
    </div>
    <!-- <div class="col-md-12">
      <div class="s1111">
        <div class="s1112">
          <img src="assets/images/59.png">
          <p>Chủ đầu tư</p>
        </div>
        <div class="s1113">
          <img src="assets/images/logo-IDC.png">
          <p>Đại lý phân phối chiến lược dự án</p>
        </div>
        <div class="s1114">
          <img src="assets/images/55.png">
          <p class="gradient-text">0901.789.182</p>
        </div>
      </div>
    </div> -->
  </div>
</div>
</footer>



<style type="text/css">
#particles-js {position: absolute;width: 100%;height: 100%;top: 0;}
</style>
<script src="assets/js/hieuungsaosao.js?v=30"></script>
