import './bootstrap';
import Splide from '@splidejs/splide';
import 'animate.css';
import AOS from 'aos';

document.addEventListener("DOMContentLoaded", function () {
    AOS.init();

    if (document.getElementById("splide")){
        console.log('splide start');
        new Splide( '#splide',{
            arrows: true,
            // pagination: true,
            perPage: 1,
            perMove: 1,
            type   : 'loop',
            autoplay: true,
            interval: 2000,
        } ).mount();
    }

    let header = document.getElementById('header');
    window.addEventListener('scroll', function() {
        let scrollPosition = window.scrollY || window.pageYOffset;

        if (scrollPosition > 10) {
            return header.classList.add('fixed-navbar');
        }
        header.classList.remove('fixed-navbar');
    });
})

function closeAllTabs(except) {
    const tabs = ['open', 'open2', 'open3'];
    tabs.forEach(tab => {
        if (tab !== except) {
            window.$data[tab] = false;
        }
    });
}

window.toggleTab = function (tab) {
    window.$data[tab] = !window.$data[tab];
    closeAllTabs(tab);
};


document.addEventListener('alpine:init', () => {
    Alpine.directive('scroll', (el, { expression }, { evaluate }) => {
        el.addEventListener('click', () => {
            const targetElement = document.querySelector(expression);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});