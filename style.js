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


function closeFloating() {
  document.getElementById("floating-post").style.display = 'none';
}

function showFloating(element) {
  // event.preventDefault(); // Mencegah tindakan default tautan
  
  var kirimanTitle = element.getAttribute("data-title");
  var kirimanDesc = element.getAttribute("data-desc"); 
  var kirimanContentTitle = document.getElementById("kiriman-content-title"); 
  var kirimanContentDesc = document.getElementById("kiriman-content-desc"); 
  
  // Tampilkan konten kiriman sesuai dengan parameter
  kirimanContentTitle.innerHTML = "<h2>" + kirimanTitle + "</h2>";
  kirimanContentDesc.innerHTML = "<p>" + kirimanDesc + "</p>";

  // Tampilkan elemen floating-post
  var floatingPost = document.getElementById("floating-post");
  floatingPost.style.display = 'block';
}