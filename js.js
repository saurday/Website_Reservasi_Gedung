const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('.navbar ul');

menuToggle.addEventListener('click',function(){
    nav.classList.toggle('slide');
});

var scrollToTopBtn = document.querySelector(".scroll-to-top");

window.addEventListener("scroll", function() {
  if (window.pageYOffset > 100) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
});

scrollToTopBtn.addEventListener("click", function() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
