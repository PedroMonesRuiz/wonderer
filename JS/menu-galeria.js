var menuToggle = document.querySelector(".menu-toggle");
var navbarNav = document.querySelector(".nav-galeria");

menuToggle.addEventListener("click", function() {
  navbarNav.classList.toggle("show");
});

document.querySelectorAll('.arg-toggle').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var provincias = this.parentNode.querySelectorAll('li');
    provincias.forEach(function(provincia) {
      provincia.classList.toggle('show');
    });
  });
});

document.querySelectorAll('.pais-toggle').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var provincias = this.parentNode.querySelectorAll('.provincia');
    provincias.forEach(function(provincia) {
      provincia.classList.toggle('show');
    });
  });
});

document.querySelectorAll('.provincia-toggle').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var provincias = this.parentNode.querySelectorAll('li');
    provincias.forEach(function(provincia) {
      provincia.classList.toggle('show');
    });
  });
});

document.querySelectorAll('.pais-toggle').forEach(function(btn) {
  btn.addEventListener('click', function() {
    this.parentNode.querySelector('.Mundo').classList.toggle('show');
  });
});

