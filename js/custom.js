function showMobileMenu() { 

  var mobileMenu = document.getElementById("primaryMenuWrapper");
  var burgerMenuButton = document.getElementById("mobileMenuBurgerButton");
  mobileMenu.classList.toggle("show");
  mobileMenuBurgerButton.classList.toggle("is-active");
  document.body.classList.toggle("unscrollable");

}

document.onload = function() { let currentYear = new Date().getFullYear();
  let el = document.querySelector(".year");
  el.innerHTML = currentYear;
}

  document.onload = function() {document.getElementById('copyright_date').innerHTML = 'Made with &#9829; by <a href="#">Sparkle Sauce</a>';
}
