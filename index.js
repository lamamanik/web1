// Burger // **********************************

burger = document.querySelector(".burger");
navbar = document.querySelector(".navbar");
navlist = document.querySelector(".nav-list");
rightnav = document.querySelector(".right-nav");

burger.addEventListener("click", () => {
  rightnav.classList.toggle("v-class-resp");
  navlist.classList.toggle("v-class-resp");
  navbar.classList.toggle("h-nav-resp");
});
function Opensection(sectionname) {
  var i;
  var x = document.getElementsByClassName("section");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  var currentSection = document.getElementById(sectionname);
  currentSection.style.display = "block";
}

// wishlist *******************************
document.getElementById("wishlist-icon").addEventListener("click", () => {
  document.getElementById("wishlist-container").classList.remove("hidden");
});

document.getElementById("wishlist-close-btn").addEventListener("click", () => {
  document.getElementById("wishlist-container").classList.add("hidden");
});
// add to wish list

const wishlistbuttons = document.querySelectorAll(".add-to-wish-btn");
const wishlistcount = document.getElementById("wishlist-count");
let count = 0;
wishlistbuttons.forEach((button) => {
  button.addEventListener("click", () => {
    count++;
    wishlistcount.textContent = count;
  });
});



var productCards = document.querySelectorAll(".product-card");

productCards.forEach(function (productCard) {
  productCard.addEventListener("mouseover", function () {
    this.style.backgroundBlendMode = "lighten";
  });

  productCard.addEventListener("mouseout", function () {
    this.style.backgroundBlendMode = "Darken";
  });
});
