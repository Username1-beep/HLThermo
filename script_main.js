function openModal(imageSrc) {
    document.getElementById("modal").style.display = "block";
    document.getElementById("modal-image").src = imageSrc;
  }
  
  function closeModal() {
    document.getElementById("modal").style.display = "none";
  }
  modal.addEventListener('click', function(event) {
    if (event.target === modal) {
      closeModal();
    }
  });