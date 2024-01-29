let img_slider = document.getElementsByClassName("img__slider");

let step = 0;
let nbr_img = img_slider.length;

let prev = document.querySelector(".slider--container__prev");
let next = document.querySelector(".slider--container__next");

let dots = document.getElementsByClassName("slider_dot");
console.log(dots);

function removeActiveImages() {
  for (let i = 0; i < nbr_img; i++) {
    img_slider[i].classList.remove("active");
    dots[i].classList.remove("active");
  }
}

function updateActiveDot() {
  for (let i = 0; i < nbr_img; i++) {
    if (i === step) {
      dots[i].classList.add("active");
    } else {
      dots[i].classList.remove("active");
    }
  }
}

nextSlide = function () {
  step++;
  if (step >= nbr_img) {
    step = 0;
  }
  removeActiveImages();
  img_slider[step].classList.add("active");
  updateActiveDot();
};

next.addEventListener("click", function () {
  nextSlide();
});

prev.addEventListener("click", function () {
  step--;
  if (step < 0) {
    step = nbr_img - 1;
  }
  removeActiveImages();
  img_slider[step].classList.add("active");
  updateActiveDot();
});

setInterval(function () {
  nextSlide();
}, 5000);

// Add scroll event listener to the window
window.addEventListener("scroll", function () {
  var button = document.getElementById("back-to-top");
  if (button) {
    // Check if the element exists
    if (
      window.pageYOffset > 400 &&
      window.pageYOffset + window.innerHeight <
        document.documentElement.scrollHeight
    ) {
      button.style.display = "block";
    } else {
      button.style.display = "none";
    }
  }
});

// Add click event listener to the back-to-top button
var button = document.getElementById("back-to-top");
if (button) {
  // Check if the element exists
  button.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

let toggle = document.querySelector(".navbar--container__burger");
let body = document.querySelector("body");

toggle.addEventListener("click", function () {
  body.classList.toggle("open");
  document.querySelector(".navbar--container__menu").classList.toggle("open");
});
