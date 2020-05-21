// Change color of header elements depending on the data attr for each section
document.addEventListener("scroll", function () {
  const scrollDistance = window.pageYOffset
  const sections = document.querySelectorAll("section");
  const logoTag = document.querySelector("svg.logo");
  var linkTag = document.querySelectorAll("ul#primary-menu a");
  var hamburger = document.querySelector("#menu-icon");
  var i;
  for (i = 0; i < linkTag.length; i++)

  sections.forEach(section => {
    if (section.offsetTop - 50 <= scrollDistance) {
      
      if (section.hasAttribute("data-is-dark")) {
        linkTag[i].classList.add("dark")
        logoTag.classList.add("dark")
        hamburger.classList.add("dark")
      } else {
        linkTag[i].classList.remove("dark")
        logoTag.classList.remove("dark")
        hamburger.classList.remove("dark")
      }
    }
  })
  
});


// Mobile Menu
// Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon
function mobileMenu() {
  var header = document.getElementById("header-nav");
  var body = document.querySelector("body");

  if (header.className === "site-header visible" | header.className === "site-header") {
    header.classList.add("responsive")
    header.classList.add("visible")
    body.classList.add('no-scroll')
  } else {
    header.classList.remove("responsive")
    body.classList.remove('no-scroll')
  }
}
