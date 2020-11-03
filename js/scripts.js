const services = document.querySelector("#services"),
    subMenu = document.querySelector(".children");

services.addEventListener('click', function() {
    subMenu.classList.toggle("visible");
});

/*  ----- menu mobile ----- */
let titleContainer = document.querySelectorAll('.title-container');
let menuBurger = document.querySelector('#menu-burger');
let line1 = document.querySelector('#line-1');
let line2 = document.querySelector('#line-2');
let line3 = document.querySelector('#line-3');
let hidde = document.querySelector('#hidden');
let navMobile = document.querySelector('#nav-mobile');
let servicesMobile = document.querySelector('#services-mobile');
let subMenuMobile = document.querySelector('.children-mobile');

menuBurger.addEventListener('click', () => {
    line1.classList.toggle('changeline-1');
    line2.classList.toggle('changeline-2');
    line3.classList.toggle('changeline-3');
    navMobile.classList.toggle('active');
});

servicesMobile.addEventListener('click', function() {
    subMenuMobile.classList.toggle("children-mobile-visible");
});