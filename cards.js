let currentIndex = 0;
const carousel = document.getElementById('carousel');
const totalCards = document.querySelectorAll('.card').length;

function showSlide(index) {
  if (index < 0) {
    currentIndex = totalCards - 1;
  } else if (index >= totalCards) {
    currentIndex = 0;
  } else {
    currentIndex = index;
  }

  const translateValue = -currentIndex * 30 + '%';
  
  carousel.style.transform = 'translateX(' + translateValue + ')';
}

function prevSlide() {
  showSlide(currentIndex - 1);
}

function nextSlide() {
  showSlide(currentIndex + 1);
}