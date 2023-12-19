// Navigation Part
const menuOpen = document.querySelector(".header__right__hamburger");
const mainMenu = document.querySelector(".header__right__menu");
const menuOverlay = document.querySelector(".menuOverlay");
const menuClose = document.querySelector(".menu__close");

menuOpen.addEventListener("click", () => {
  mainMenu.classList.add("show");
  menuOverlay.classList.add("active");
});

menuClose.addEventListener("click", () => {
  mainMenu.classList.remove("show");
  menuOverlay.classList.remove("active");
});

menuOverlay.addEventListener("click", () => {
  menuOverlay.classList.remove("active");
  mainMenu.classList.remove("show");
});

// Scroll Menu
const header = document.querySelector(".header");

window.addEventListener("scroll", () => {
  this.scrollY > 40
    ? header.classList.add("scrollMenu")
    : header.classList.remove("scrollMenu");
});

// Hero Section Slider

// var swiper = new Swiper(".hero__slide", {
//   autoplay: {
//     delay: 2500,
//     disableOnInteraction: false,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     type: "fraction",
//   },
//
//   navigation: {
//     nextEl: "#swiper-button-next",
//     prevEl: "#swiper-button-prev",
//   },
// });

var swiper = new Swiper(".hero__slide", {
  // Your Swiper configuration options
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: "#swiper-button-next",
    prevEl: "#swiper-button-prev",
  },
  // Execute this function when the slide changes
  on: {
    slideChange: function () {
      // Get the current slide index
      var currentIndex = swiper.activeIndex;
      var totalSlides = swiper.slides.length - 1; // Total number of slides

      // Calculate width percentage based on index
      var widthPercentage = (currentIndex / totalSlides) * 100;

      // Set width of the indicator
      var indicator = document.getElementById("indicator");
      if (currentIndex === totalSlides) {
        indicator.style.width = "100%";
      } else {
        indicator.style.width = widthPercentage + "%";
      }
    },
  },
});

// Serviços Slider

var swiper = new Swiper(".services__wrap__slide", {
  slidesPerView: 3,
  // centeredSlides: true,
  spaceBetween: 70,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: "#swiper-button-next2",
    prevEl: "#swiper-button-prev2",
  },
  // Execute this function when the slide changes
  on: {
    slideChange: function () {
      // Get the current slide index
      var currentIndex = swiper.activeIndex;
      var totalSlides = swiper.slides.length - 1; // Total number of slides

      // Calculate width percentage based on index
      var widthPercentage = (currentIndex / totalSlides) * 100;

      // Set width of the indicator
      var indicator = document.getElementById("indicator");
      if (currentIndex === totalSlides) {
        indicator.style.width = "100%";
      } else {
        indicator.style.width = widthPercentage + "%";
      }
    },
  },
});
