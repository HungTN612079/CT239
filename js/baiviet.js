let slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(n) {
  slides[currentSlide].classList.remove('active');
  slides[n].classList.add('active');
  currentSlide = n;
}

setInterval(() => {
  let nextSlide = (currentSlide + 1) % slides.length;
  showSlide(nextSlide);
}, 5000);