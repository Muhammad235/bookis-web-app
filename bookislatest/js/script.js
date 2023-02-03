//"use strict";

const controls = document.querySelectorAll(".control");
const category = document.querySelectorAll(".category");
const entertainment = document.querySelector("#ent");
const education = document.querySelector("#educ");

controls.forEach((btn) => {
  btn.addEventListener("click", function () {
    document.querySelector(".active-btn").classList.remove("active-btn");
    this.classList.add("active-btn");
    document.querySelector(".active-nav").classList.remove("active-nav");
    document.getElementById(btn.dataset.id).classList.add("active-nav");
  });
});



category.forEach((btn) => {
  btn.addEventListener("click", function () {
    const categories = document.querySelector(".categories");
    categories.querySelector(".active").classList.remove("active");
    this.classList.add("active");
    document
      .querySelectorAll(".interests")
      .forEach((interest) => (interest.style.display = "none"));
    document.getElementById(btn.dataset.id).style.display = "flex";
  });
});
entertainment.querySelectorAll(".interest").forEach((btn) => {
  btn.addEventListener("click", function () {
    entertainment.querySelector(".active").classList.remove("active");
    this.classList.add("active");
  });
});
education.querySelectorAll(".interest").forEach((btn) => {
  btn.addEventListener("click", function () {
    education.querySelector(".active").classList.remove("active");
    this.classList.add("active");
  });
});


