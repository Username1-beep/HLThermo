// document.addEventListener("DOMContentLoaded", function() {
//     const slider = document.querySelector('.slider');
//     const slides = document.querySelectorAll('.slide');
//     let currentIndex = 0;
  
//     function showSlide(index) {
//       const translateValue = -index * 100 + '%';
//       slider.style.transform = 'translateX(' + translateValue + ')';
//     }
  
//     function nextSlide() {
//       currentIndex = (currentIndex + 1) % slides.length;
//       showSlide(currentIndex);
//     }
  
//     setInterval(nextSlide, 5000);
//   });

document.addEventListener("DOMContentLoaded", function() {
    const sliders = document.querySelectorAll('.slider');
  
    sliders.forEach(function(slider) {
      const slides = slider.querySelectorAll('.slide');
      let currentIndex = 0;
  
      function showSlide(index) {
        const translateValue = -index * 100 + '%';
        slider.style.transform = 'translateX(' + translateValue + ')';
      }
  
      function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
      }
  
      setInterval(nextSlide, 5000);
    });
  });