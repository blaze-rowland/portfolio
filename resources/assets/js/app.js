/*
  Author: Blaze Rowland
  Description: App.js (main javascript) for Portfolio
  Date: May 19th, 2018
*/

$(function() {


    window.addEventListener('scroll', function (e) {
        const header = (document.querySelector('#header').offsetHeight) - 100;
        const nav = document.querySelector('.nav');
        const about = document.querySelector('#about');
        
        if (document.documentElement.scrollTop > header || document.body.scrollTop > header) {
            nav.classList.add('fromTop');
            nav.classList.add('fixed--top');
            nav.classList.remove('is-hidden--opac');

            about.classList.add('p-top--md');
            nav.classList.remove('is-hidden');
        } else {
            nav.classList.remove('fromTop');
            nav.classList.remove('fixed--top');
            nav.classList.add('is-hidden--opac');

            about.classList.remove('p-top--md');
            nav.classList.add('is-hidden');
        }
    });



    function togglePortfolioFull () {
        var portfolioFull = document.querySelector('.portfolio__image--full');
        portfolioFull.classList.toggle('portfolio__image--active');
    }
    
    document.querySelector('.portfolio__image--full').addEventListener('click', function() {
        togglePortfolioFull();
    });

});
