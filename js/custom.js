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



document.getElementById('copyright_date').innerHTML = (unescape('%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%73%6D%61%6C%6C%62%75%73%69%6E%65%73%73%64%65%73%69%67%6E%65%72%2E%63%6F%6D%2F%22%3E%53%6D%61%6C%6C%20%42%75%73%69%6E%65%73%73%20%57%65%62%73%69%74%65%73%20%62%79%20%53%6D%61%6C%6C%20%42%75%73%69%6E%65%73%73%20%44%65%73%69%67%6E%65%72%3C%2F%61%3E'))


// <a href="https://www.smallbusinessdesigner.com/">Small Business Websites by Small Business Designer</a>
// document.getElementById('copyright_date').innerHTML = (unescape('%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%73%6D%61%6C%6C%62%75%73%69%6E%65%73%73%64%65%73%69%67%6E%65%72%2E%63%6F%6D%2F%22%3E%53%6D%61%6C%6C%20%42%75%73%69%6E%65%73%73%20%57%65%62%73%69%74%65%73%20%62%79%20%53%6D%61%6C%6C%20%42%75%73%69%6E%65%73%73%20%44%65%73%69%67%6E%65%72%3C%2F%61%3E'))

// <a href="https://www.consultancyaccelerator.com/">Consultant Websites by Consultancy Accelerator</a>
//document.getElementById('copyright_date').innerHTML = (unescape('%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%77%77%2E%63%6F%6E%73%75%6C%74%61%6E%63%79%61%63%63%65%6C%65%72%61%74%6F%72%2E%63%6F%6D%2F%22%3E%43%6F%6E%73%75%6C%74%61%6E%74%20%57%65%62%73%69%74%65%73%20%62%79%20%43%6F%6E%73%75%6C%74%61%6E%63%79%20%41%63%63%65%6C%65%72%61%74%6F%72%3C%2F%61%3E'))