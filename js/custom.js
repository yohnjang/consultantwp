function showMobileMenu() { 

  var mobileMenu = document.getElementById("primaryMenuWrapper");
  var burgerMenuButton = document.getElementById("mobileMenuBurgerButton");
  mobileMenu.classList.toggle("show");
  mobileMenuBurgerButton.classList.toggle("is-active");
  document.body.classList.toggle("unscrollable");

}

window.onload = function() { 
  let currentYear = new Date().getFullYear();
  console.log(currentYear);
  console.log('hello');
  let el = document.querySelector('.year');
  el.innerHTML = currentYear;
}

document.getElementById('copyright_date').innerHTML = (unescape('%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%63%6F%6E%73%75%6C%74%61%6E%74%77%70%2E%63%6F%6D%22%3E%43%6F%6E%73%75%6C%74%61%6E%74%20%57%65%62%73%69%74%65%73%20%62%79%20%43%6F%6E%73%75%6C%74%61%6E%74%57%50%3C%2F%61%3E'));




// Consultant Websites by ConsultantWP 
// (unescape('%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%63%6F%6E%73%75%6C%74%61%6E%74%77%70%2E%63%6F%6D%22%3E%43%6F%6E%73%75%6C%74%61%6E%74%20%57%65%62%73%69%74%65%73%20%62%79%20%43%6F%6E%73%75%6C%74%61%6E%74%57%50%3C%2F%61%3E'))

// Web Design &amp; Development by ConsultantWP
//(unescape('%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%63%6F%6E%73%75%6C%74%61%6E%74%77%70%2E%63%6F%6D%22%3E%57%65%62%20%44%65%73%69%67%6E%20%26%61%6D%70%3B%20%44%65%76%65%6C%6F%70%6D%65%6E%74%20%62%79%20%43%6F%6E%73%75%6C%74%61%6E%74%57%50%3C%2F%61%3E'))


// WordPress Web Design by ConsultantWP
// (unescape('%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%63%6F%6E%73%75%6C%74%61%6E%74%77%70%2E%63%6F%6D%22%3E%57%6F%72%64%50%72%65%73%73%20%57%65%62%20%44%65%73%69%67%6E%20%62%79%20%43%6F%6E%73%75%6C%74%61%6E%74%57%50%3C%2F%61%3E'))