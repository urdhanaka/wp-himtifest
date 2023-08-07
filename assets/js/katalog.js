function scrollFunctionKatalog() {
    var here = document.getElementById('scroll-to-here');
    here.scrollIntoView({behavior: 'smooth'}, true);
}

function filterSemua() {
    document.getElementById('jamu-semua').style.display = "block";
    document.getElementById('jamu-penyembuh').style.display = "none";
    document.getElementById('jamu-tonik').style.display = "none";
    document.getElementById('jamu-kecantikan').style.display = "none";

    document.getElementById('filter-semua').style.backgroundColor = "#366C66";
    document.getElementById('filter-penyembuh').style.backgroundColor = "white";
    document.getElementById('filter-tonik').style.backgroundColor = "white";
    document.getElementById('filter-kecantikan').style.backgroundColor = "white";

    document.getElementById('filter-semua').style.color = "white";
    document.getElementById('filter-penyembuh').style.color = "#366C66";
    document.getElementById('filter-tonik').style.color = "#366C66";
    document.getElementById('filter-kecantikan').style.color = "#366C66";
}

function filterPenyembuh() {
    document.getElementById('jamu-semua').style.display = "none";
    document.getElementById('jamu-penyembuh').style.display = "block";
    document.getElementById('jamu-tonik').style.display = "none";
    document.getElementById('jamu-kecantikan').style.display = "none";

    document.getElementById('filter-semua').style.backgroundColor = "white";
    document.getElementById('filter-penyembuh').style.backgroundColor = "#366C66";
    document.getElementById('filter-tonik').style.backgroundColor = "white";
    document.getElementById('filter-kecantikan').style.backgroundColor = "white";

    document.getElementById('filter-semua').style.color = "#366C66";
    document.getElementById('filter-penyembuh').style.color = "white";
    document.getElementById('filter-tonik').style.color = "#366C66";
    document.getElementById('filter-kecantikan').style.color = "#366C66";
}

function filterTonik() {
    document.getElementById('jamu-semua').style.display = "none";
    document.getElementById('jamu-penyembuh').style.display = "none";
    document.getElementById('jamu-tonik').style.display = "block";
    document.getElementById('jamu-kecantikan').style.display = "none";

    document.getElementById('filter-semua').style.backgroundColor = "white";
    document.getElementById('filter-penyembuh').style.backgroundColor = "white";
    document.getElementById('filter-tonik').style.backgroundColor = "#366C66";
    document.getElementById('filter-kecantikan').style.backgroundColor = "white";

    document.getElementById('filter-semua').style.color = "#366C66";
    document.getElementById('filter-penyembuh').style.color = "#366C66";
    document.getElementById('filter-tonik').style.color = "white";
    document.getElementById('filter-kecantikan').style.color = "#366C66";
}

function filterKecantikan() {
    document.getElementById('jamu-semua').style.display = "none";
    document.getElementById('jamu-penyembuh').style.display = "none";
    document.getElementById('jamu-tonik').style.display = "none";
    document.getElementById('jamu-kecantikan').style.display = "block";

    document.getElementById('filter-semua').style.backgroundColor = "white";
    document.getElementById('filter-penyembuh').style.backgroundColor = "white";
    document.getElementById('filter-tonik').style.backgroundColor = "white";
    document.getElementById('filter-kecantikan').style.backgroundColor = "#366C66";

    document.getElementById('filter-semua').style.color = "#366C66";
    document.getElementById('filter-penyembuh').style.color = "#366C66";
    document.getElementById('filter-tonik').style.color = "#366C66";
    document.getElementById('filter-kecantikan').style.color = "white";
}

function catalogAlert() {
    alert("That's All For The Catalog");
}