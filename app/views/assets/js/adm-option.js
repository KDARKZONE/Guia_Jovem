window.addEventListener("DOMContentLoaded", function() {
    var checkbox = document.getElementById("hidden");
    var elemento = document.querySelector(".configuer-option");
  
    checkbox.addEventListener("change", function() {
      if (this.checked) {
        elemento.style.display = "block";
      } else {
        elemento.style.display = "none";
      }
    });
  });