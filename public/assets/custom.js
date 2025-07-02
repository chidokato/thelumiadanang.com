

const sectionsWithSlider = [
  document.querySelector('#section5'),
  document.querySelector('#section7')
];

let lastScrollTime = 0;

sectionsWithSlider.forEach(section => {
  section.addEventListener(
    'wheel',
    function(e) {
      e.preventDefault();

      const now = Date.now();
      if (now - lastScrollTime < 700) return;

      if (e.deltaY > 0) {
        fullpage_api.moveSlideRight();
      } else {
        fullpage_api.moveSlideLeft();
      }

      lastScrollTime = now;
    },
    { passive: false }
  );
});

// Lắng nghe click tất cả nút .next-slide
document.querySelectorAll('.next-slide').forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    fullpage_api.moveSlideRight();
  });
});



var swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 3,
    centeredSlides: true, // để active ở giữa
    slideToClickedSlide: true, // click là canh giữa
    watchSlidesProgress: true
});

var swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});


var swiper3 = new Swiper(".mySwipertienich", {
  direction: "vertical",
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  autoplay: {
    delay: 1, // nhỏ hơn 50 để chạy liên tục
    disableOnInteraction: false,
  },
  speed: 3000, // tốc độ chuyển slide
});


var swiper = new Swiper(".Swiper-matbang", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".custom-next-matbang",
  },
});


const button = document.querySelector('.button-popup');
const popup = document.querySelector('.main-popup');
const overlay = document.querySelector('.popup-overlay');
const closeButtons = document.querySelectorAll('.close');

button.addEventListener('click', function(e) {
  e.preventDefault();
  popup.classList.toggle('active');
  overlay.classList.toggle('active');
});

// Bấm overlay để đóng popup
overlay.addEventListener('click', function() {
  popup.classList.remove('active');
  overlay.classList.remove('active');
});

// Bấm nút close để đóng popup
closeButtons.forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault(); // hủy href
    popup.classList.remove('active');
    overlay.classList.remove('active');
  });
});


