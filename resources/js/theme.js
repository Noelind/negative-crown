/*
   Light / Dark Mode
   Switcher logic for changing themes

*/

import {swup} from './transition.js'


swup.on('contentReplaced', checkTheme);

let toggleSwitch = document.querySelectorAll('.theme-switch input[type="checkbox"]');
let sunIcon = document.getElementsByClassName('sun-icon');
let moonIcon = document.getElementsByClassName('moon-icon');

function checkTheme(){
    if (localStorage.theme == "light") {
        document.documentElement.classList.remove("dark");
        document.documentElement.classList.add("light");
        sunIcon[0].classList.add('hidden');sunIcon[1].classList.add('hidden');
        moonIcon[0].classList.remove('hidden');moonIcon[1].classList.remove('hidden');
    } else {
        toggleSwitch.checked = true;
        document.documentElement.classList.add("dark");
        document.documentElement.classList.remove("light");
        moonIcon[0].classList.add('hidden');moonIcon[1].classList.add('hidden');
        sunIcon[0].classList.remove('hidden');sunIcon[1].classList.remove('hidden');
    }
}
checkTheme();

function switchTheme(e, element) {

    if (e.target.checked) {
        window.localStorage.setItem('theme', 'dark');
        document.documentElement.classList.add("dark");
        document.documentElement.classList.remove("light");
        sunIcon[0].classList.remove('hidden');sunIcon[1].classList.remove('hidden');
        moonIcon[0].classList.add('hidden');moonIcon[1].classList.add('hidden');
    } else {
        document.documentElement.classList.remove("dark");
        document.documentElement.classList.add("light");
        window.localStorage.setItem('theme', 'light');
        moonIcon[0].classList.remove('hidden');moonIcon[1].classList.remove('hidden');
        sunIcon[0].classList.add('hidden');sunIcon[1].classList.add('hidden');
    }
}
toggleSwitch[0].addEventListener('input', switchTheme, false);
toggleSwitch[1].addEventListener('input', switchTheme, false);
