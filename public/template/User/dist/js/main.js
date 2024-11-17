var loginIcon = document.querySelector('.login a');
var loginMenu = document.getElementById('loginMenu');

// Hiện menu khi click vào biểu tượng
loginIcon.addEventListener('click', function () {
    // Toggle giữa hiển thị và ẩn menu khi click
    if (loginMenu.style.display === 'block') {
        loginMenu.style.display = 'none'; // Ẩn menu nếu đang hiển thị
    } else {
        loginMenu.style.display = 'block'; // Hiện menu nếu đang ẩn
    }
});

// Để ẩn menu khi click ra ngoài (vào vùng không phải menu hoặc biểu tượng)
document.addEventListener('click', function (event) {
    // Kiểm tra nếu click ngoài phần tử login hoặc loginMenu, ẩn menu
    if (!loginIcon.contains(event.target) && !loginMenu.contains(event.target)) {
        loginMenu.style.display = 'none'; // Ẩn menu
    }
});



var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidePerGroup:3,
    loop: true,
    loopFillGroupWithBlank:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets:true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
      0: {
          slidesPerView:1,
      },
      520: {
          slidesPerView:2,
      },
      950: {
          slidesPerView:3,
      }

    },
  





  });


////////////////// blog

let currentSlide = 0;
let autoSlideInterval;
let columns = 3; // Mặc định là 3 cột

function updateColumns() {
  // Cập nhật số lượng cột dựa trên kích thước màn hình
  if (window.innerWidth <= 480) {
    columns = 1;
  } else if (window.innerWidth <= 768) {
    columns = 2;
  } else {
    columns = 3;
  }
}

function showSlide(index) {
  updateColumns(); // Cập nhật số cột mỗi khi hiển thị slide

  const carousel = document.querySelector(".blog-carousel");
  const slides = document.querySelectorAll(".blog-card");
  const totalSlides = slides.length;

  // Thiết lập giới hạn trượt để lặp lại khi đạt đến cuối
  if (index >= totalSlides - columns + 1) {
    setTimeout(() => {
      carousel.style.transition = "none";
      carousel.style.transform = `translateX(0)`;
      currentSlide = 0;
    }, 0); // Thời gian chuyển đổi
  } else {
    currentSlide = index;
  }

  const offset = -currentSlide * (100 / columns);
  carousel.style.transition = "transform 1s ease";
  carousel.style.transform = `translateX(${offset}%)`;
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

function prevSlide() {
  showSlide(currentSlide - 1);
}

function startAutoSlide() {
  autoSlideInterval = setInterval(nextSlide, 5000); // Tự động trượt mỗi 5 giây
}

// Lắng nghe sự kiện thay đổi kích thước màn hình để cập nhật số cột
window.addEventListener("resize", updateColumns);

// Khởi chạy carousel
updateColumns();
startAutoSlide();
showSlide(currentSlide);

//blog
