  let currentImageIndex = 1;
  const totalImages = 9;
  
  const modal = document.getElementById("modal");
  const modalImage = document.getElementById("modal-image");
  
  const modalTriggers = document.querySelectorAll(".modal-trigger");
  modalTriggers.forEach(trigger => {
    trigger.addEventListener("click", () => {
      currentImageIndex = parseInt(trigger.getAttribute("data-index"));
      updateModalImage();
      modal.style.display = "block";
    });
  });


  const caruselTriggers = document.querySelectorAll(".carousel-item");
  caruselTriggers.forEach(trigger => {
    trigger.addEventListener("click", () => {
      if (trigger.className === 'carousel-item active'){
        const currentImage = trigger.children[0];
        currentImageIndex = parseInt(currentImage.getAttribute("data-index"));
        updateModalImage();
        modal.style.display = "block";
      }
    });
  });
  
  function closeModal() {
    modal.style.display = "none";
  }
  
  function prevImage() {
      if (currentImageIndex === 1){
        currentImageIndex = 5
      } else if (currentImageIndex === 6){
        currentImageIndex = 9
      } else {
        currentImageIndex--;
      }
      updateModalImage();
  }
  
  function nextImage() {
      if (currentImageIndex === 5){
        currentImageIndex = 1
      } else if (currentImageIndex === 9){
        currentImageIndex = 6
      } else {
        currentImageIndex++;
      }
      updateModalImage();
  }
  
  function updateModalImage() {
    modalImage.src = `./src/${currentImageIndex}.png`;
  }
  modal.addEventListener('click', function(event) {
    if (event.target === modal) {
      closeModal();
    }
  });

  
  
  
  




