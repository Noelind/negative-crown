import Swup from 'swup';
import SwupFormsPlugin from '@swup/forms-plugin';

// Swup Options
const options = {
    cache: false,
    animationSelector: '[class*="swupsition-"]',
    containers:["#swup-main"]
    // plugins: [new SwupFormsPlugin({formSelector: 'form[data-swup-form]'})]
  };

// Instantiate new swup object
const swup = new Swup(
    options
);

// Scroll to top of page when loaded
swup.on('contentReplaced', function () {
    window.scrollTo(0, 0);
});

// onLoad();
// swup.on('contentReplaced', onLoad);

// function onLoad() {
//     // On page load reset the mobile menu checkbox to close the menu.
//     if (document.getElementById("menu-checkbox")) {
//         document.getElementById("menu-checkbox").checked = false;
//         document.body.style.overflow = "initial";
//     }
// }
