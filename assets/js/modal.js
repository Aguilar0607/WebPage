var modal = document.getElementById("contactModal");
var btn = document.getElementById("contactButton");
var span = document.getElementsByClassName("close")[0];
var backdrop = document.getElementById("backdrop");
var btnMobile = document.getElementById("contactButtonMobile");

function openModal() {
  modal.style.display = "block";
  modal.classList.add("active");
  backdrop.style.display = "block";
  backdrop.classList.add("active");
}

function closeModal() {
  modal.classList.remove("active");
  backdrop.classList.remove("active");
  setTimeout(function() {
    modal.style.display = "none";
    backdrop.style.display = "none";
  }, 300);
}

btnMobile.addEventListener('click', function() {
  openModal();
}, false);

btn.addEventListener('click', function() {
  openModal();
}, false);

span.addEventListener('click', function(event) {
  event.stopPropagation();
  closeModal();
}, false);

window.addEventListener('click', function(event) {
  if (event.target == modal) {
    closeModal();
  }
}, false);
