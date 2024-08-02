// let profile = document.querySelector('.header .flex .profile-detail');

// document.querySelector('#user-btn').onclick = () =>{
//     profile.classList.toggle('active');
//     searchForm.classList.remove('active');
// }

// const userBtn = document.querySelector('#user-btn');
// userBtn.addEventListener('click' , function(){
//     const userBox = document.querySelector('.profile-detail');
//     userBox.classList.toggle('active');
// })

$(document).ready(function () {
    $(".profile-detail").hide();
    $("#user-btn").click(function () {
      $(".profile-detail").toggle();
    });
  });

  let searchForm = document.querySelector('.header .flex .search-form');
  document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    profile.classList.remove('active');
  }

  let navbar = document.querySelector('.navbar');
  document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
  }

/* .................Home slider............................. */

const imgBox = document.querySelector('.slider-container');
const slides = document.getElementsByClassName('slideBox');

var i = 0;

function nextSlide(){
    slides[i].classList.remove('active');
    i = (i + 1) % slides.length;
    slides[i].classList.add('active');
}

function prevSlide(){
    slides[i].classList.remove('active');
    i = (i - 1 + slides.length) % slides.length;
    slides[i].classList.add('active');
}

/*.................testimonial.....................*/

const btn = document.querySelector('.btn1');
const slide = document.querySelector('#slide');

btn[0].onclick = () =>{
  slide.style.transform = 'translateX(0px)';
  for (let i = 0; i < 4; i++){
    btn[i].classList.remove('active');
  }
  this.classList.add('active');
}

btn[1].onclick = () => {
  slide.style.transform = 'translateX(-800px)';
  for (let i = 0; i < 4; i++){
    btn[i].classList.remove('active');
  }
  this.classList.add('active');
}

btn[2].onclick = () => {
  slide.style.transform = 'translateX(-1600px)';
  for (let i = 0; i < 4; i++){
    btn[i].classList.remove('active');
  }
  this.classList.add('active');
}

btn[3].onclick = () => {
  slide.style.transform = 'translateX(-2400px)';
  for (let i = 0; i < 4; i++){
    btn[i].classList.remove('active');
  }
  this.classList.add('active');
}

// btn[1].onclick = function () {
//   slide.style.transform = 'translateX(-800px)';
//   for (let i = 0; i < 4; i++){
//     btn[i].classList.remove('active');
//   }
//   this.classList.add('active');
// }