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
    subMenuMobile.classList.remove("children-mobile-visible");
});

servicesMobile.addEventListener('click', function() {
    subMenuMobile.classList.toggle("children-mobile-visible");
});

// ------------------------------------------- funciones de animacion de scroll ------------------------------------------//
let animacion = document.querySelectorAll(".animacion-arriba");

function mostrarScroll() {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < animacion.length; i++) {
        let alturaanimacion = animacion[i].offsetTop;
        if (alturaanimacion - 400 < scrollTop) {
            animacion[i].style.opacity = 1;
            animacion[i].classList.add("mostrar-arriba");
        }
    }
}

let animacionServUp = document.querySelectorAll(".animacion-arriba-servicios");

function mostrarScroll3() {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < animacionServUp.length; i++) {
        let alturaanimacion = animacionServUp[i].offsetTop;
        if (alturaanimacion - 400 < scrollTop) {
            animacionServUp[i].style.opacity = 1;
            animacionServUp[i].classList.add("mostrar-arriba");
        }
    }
}


let animacionAbajo = document.querySelectorAll(".animacion-abajo");

function mostrarScroll1() {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < animacionAbajo.length; i++) {
        let alturaanimacion = animacionAbajo[i].offsetTop;
        if (alturaanimacion - 400 < scrollTop) {
            animacionAbajo[i].style.opacity = 1;
            animacionAbajo[i].classList.add("mostrar-abajo");
        }
    }
}

let animacionServDown = document.querySelectorAll(".animacion-abajo-servicios");

function mostrarScroll4() {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < animacionServDown.length; i++) {
        let alturaanimacion = animacionServDown[i].offsetTop;
        if (alturaanimacion - 400 < scrollTop) {
            animacionServDown[i].style.opacity = 1;
            animacionServDown[i].classList.add("mostrar-abajo");
        }
    }
}

let animacionDerecha = document.querySelectorAll(".animacion-derecha");

function mostrarScroll2() {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < animacionDerecha.length; i++) {
        let alturaanimacion = animacionDerecha[i].offsetTop;
        if (alturaanimacion - 500 < scrollTop) {
            animacionDerecha[i].style.opacity = 1;
            animacionDerecha[i].classList.add("mostrar-derecha");
        }
    }
}

window.addEventListener('scroll', mostrarScroll);
window.addEventListener('scroll', mostrarScroll1);
window.addEventListener('scroll', mostrarScroll2);
window.addEventListener('scroll', mostrarScroll3);
window.addEventListener('scroll', mostrarScroll4);