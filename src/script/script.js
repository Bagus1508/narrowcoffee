function toggleNav() {
    let sidebar = document.getElementById("sidebar");
    let currentWidth = sidebar.style.width;

    if (currentWidth === "250px") {
        //Sidebar tertutup
        sidebar.style.width = "0";
    } else {
        //Sidebar Terbuka
        sidebar.style.width = "250px";
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('navbarContainer');

    function handleScroll() {
        if (window.scrollY > 70) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    document.addEventListener('scroll', handleScroll);
})

/* Cart Modal Function */
// Get the modal
var modal = document.getElementById("myModal<?= $row['id'] ?>");

// Get the button that opens the modal
var btn = document.getElementById("myBtn<?= $row['id'] ?>");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
