var modal = document.getElementById("contactModal");
var btn = document.getElementById("contactButton");
var span = document.getElementsByClassName("close")[0];
var backdrop = document.getElementById("backdrop");

btn.addEventListener('click', function() {
  modal.style.display = "block";
  backdrop.style.display = "block";
  setTimeout(function() {
    modal.classList.add("show");
  }, 50);
}, false);

span.addEventListener('click', function() {
  modal.classList.remove("show");
  setTimeout(function() {
    modal.style.display = "none";
    backdrop.style.display = "none";
  }, 300);
}, false);

window.addEventListener('click', function(event) {
  if (event.target == modal || event.target == backdrop) {
    modal.classList.remove("show");
    setTimeout(function() {
      modal.style.display = "none";
      backdrop.style.display = "none";
    }, 300);
  }
}, false);
