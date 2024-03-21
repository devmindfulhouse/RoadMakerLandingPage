let toggle = document.querySelector(".navbar--container__burger");
let body = document.querySelector("body");

toggle.addEventListener("click", function () {
  body.classList.toggle("open");
  document.querySelector(".navbar--container__menu").classList.toggle("open");
});
