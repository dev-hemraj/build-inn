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

var swiper = new Swiper(".hero__slide", {
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
});
