function updateStars(){
    const stars = document.querySelectorAll('.star-rating i');
const ratingValue = document.querySelector('.rating-value');

stars.forEach(star => {
  star.addEventListener('click', () => {
    ratingValue.innerHTML = star.getAttribute('data-value');
    stars.forEach(s => {
      if (s.getAttribute('data-value') <= star.getAttribute('data-value')) {
        s.classList.add('fas');
        s.classList.remove('far');
      } else {
        s.classList.add('far');
        s.classList.remove('fas');
      }
    });
  });
});

}