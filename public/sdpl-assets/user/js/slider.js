
const slider_type = document.getElementsByClassName('carousel-container')[0].getAttribute('slider-type');

//const carousel_count = document.querySelectorAll('.carousel-container').length;
// let slideIndex = 0;
// var arr = [];
// for (let index = 0; index < carousel_count; index++) {
//   var slider_name =  arr.push( document.getElementsByClassName('carousel-container')[index].getAttribute('slider-type') );
//   var functionName = slider_name+"(" + slider_name +")";
//   functionName;
  
// }



let slideIndex = 0;
if(slider_type == 1){
  firstSlider();
}else{
  firstSlider();
  secondSlider();
}

// Next-previous control
function nextSlide(value) {
  slideIndex++;
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
  }else if(value == 2){
    secondSlider();
  }
  timer = _timer;
}

// Thumbnail image controlls
function currentSlide(n) {
  slideIndex = n - 1;
  if(value == 1){
    firstSlider();
  }else if(value == 2){
    secondSlider();
  }
  timer = _timer;
}

function autonextSlide(){
  slideIndex++;
  if(slider_type == 1){
    firstSlider();
  }else{
    firstSlider();
    secondSlider();
  }
  timer = _timer;
}

function firstSlider() {
  let slides = document.querySelectorAll(".firstSlider");
  let dots = document.querySelectorAll(".dots");
  
  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  
  slides[slideIndex].style.display = "block";
  
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  //dots[slideIndex].classList.add("active");
}

function secondSlider() {
  console.log('second');
  let slides = document.querySelectorAll(".secondSlider");
  let dots = document.querySelectorAll(".dots");
  
  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  
  slides[slideIndex].style.display = "block";
  
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });
}

let timer = 7; 
const _timer = timer;

setInterval(() => {
  timer--;

  if (timer < 1) {
    autonextSlide();
    timer = _timer; 
  }
}, 1000); 

