let slideIndex = 0;
firstSlider();
secondSlider();

// Next-previous control
function nextSlide(value) {
  slideIndex++;
  //alert(value);
  if(value == 1){
    firstSlider();
    //timer = _timer; // reset timer
  }else if(value == 2){
    secondSlider();
  }
  timer = _timer; // reset timer
 
}

function prevSlide(value) {
  slideIndex--;
  if(value == 1){
    firstSlider();
    //timer = _timer;
  }else if(value == 2){
    secondSlider();
  }
  timer = _timer;
}

// Thumbnail image controlls
function currentSlide(n) {
  slideIndex = n - 1;
  firstSlider();
  secondSlider();
  timer = _timer;
}

function autonextSlide(){
  slideIndex++;
  firstSlider();
  secondSlider();
  timer = _timer;
}

function firstSlider() {
  let slides = document.querySelectorAll(".firstSlider");
  let dots = document.querySelectorAll(".dots");
  
  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  // hide all slides
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  
  // show one slide base on index number
  slides[slideIndex].style.display = "block";
  
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  //dots[slideIndex].classList.add("active");
}

function secondSlider() {
  let slides = document.querySelectorAll(".secondSlider");
  let dots = document.querySelectorAll(".dots");
  
  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  // hide all slides
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  
  // show one slide base on index number
  slides[slideIndex].style.display = "block";
  
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });
}

// autoplay slides --------
let timer = 7; // sec
const _timer = timer;

// this function runs every 1 second
setInterval(() => {
  timer--;

  if (timer < 1) {
    autonextSlide();
    timer = _timer; // reset timer
  }
}, 1000); // 1sec

