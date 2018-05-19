/*
  Author: Blaze Rowland
  Description: App.js (main javascript) for Portfolio
  Date: May 19th, 2018
*/


//Portfolio-revamp Nav

let header = (document.querySelector('#header').offsetHeight) - 100;
let nav = document.querySelector('.nav');
let about = document.querySelector('#about');


window.addEventListener('scroll', function (e) {
    if (document.documentElement.scrollTop > header || document.body.scrollTop > header) {
        nav.classList.add('fromTop');
        nav.classList.add('fixed--top');
        nav.classList.remove('is-hidden--opac');

        about.classList.add('p-top--big');
    } else {
        nav.classList.remove('fromTop');
        nav.classList.remove('fixed--top');
        nav.classList.add('is-hidden--opac');

        about.classList.remove('p-top--big');
    }
});

