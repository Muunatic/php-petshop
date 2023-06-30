const swiper = new Swiper('.swiper', {
  direction: 'horizontal',
  loop: true,
  mousewheel: false,
  slidesPerView: 1,
  spaceBetween: 30,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  keyboard: {
    enabled: false,
    onlyInViewport: false,
  },

  pagination: {
    el: '.swiper-pagination',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

const swiper1 = new Swiper('.swiper1', {
  direction: 'horizontal',
  loop: true,
  mousewheel: false,
  slidesPerView: 1,
  spaceBetween: 30,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  keyboard: {
    enabled: false,
    onlyInViewport: false,
  },

  pagination: {
    el: '.swiper-pagination1',
  },

  navigation: {
    nextEl: '.swiper-button-next1',
    prevEl: '.swiper-button-prev1',
  },

  scrollbar: {
    el: '.swiper-scrollbar1',
  },
});

let homenavbar = document.getElementById('home');
let homenavbarfixed = document.getElementById('homefixed');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      homenavbarfixed.style.visibility = "hidden";
      homenavbarfixed.style.display = "none";
      return;
    }
    homenavbarfixed.style.visibility = "visible";
    homenavbarfixed.style.display = "block";
  });
});

observer.observe(homenavbar);