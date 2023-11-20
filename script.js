
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
  
  function closeModal() {
    modal.style.display = "none";
  }
  
  function prevImage() {
    if (currentImageIndex > 1) {
      currentImageIndex--;
      updateModalImage();
    }
  }
  
  function nextImage() {
    if (currentImageIndex < totalImages) {
      currentImageIndex++;
      updateModalImage();
    }
  }
  
  function updateModalImage() {
    modalImage.src = `./src/${currentImageIndex}.png`;
  }
  modal.addEventListener('click', function(event) {
    if (event.target === modal) {
      closeModal();
    }
  });

  