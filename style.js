var toogle = true;
// BURGER NAVBAR
function burgerButton() {
    var x = document.getElementById("burger");
    if (toogle) {
      x.style.display = "none";
      toogle = false;
    } else {
      x.style.display = "block";
      toogle = true;
    }
}