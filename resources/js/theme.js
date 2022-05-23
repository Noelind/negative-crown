/*
   Light / Dark Mode
   Switcher logic for changing themes

*/
let toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
let sunIcon = document.getElementById('sun-icon');
let moonIcon = document.getElementById('moon-icon');

if (localStorage.theme == "light") {
    document.documentElement.classList.remove("dark");
    sunIcon.classList.add('hidden');
    moonIcon.classList.remove('hidden');
    console.log("ON LOAD - theme is white");
} else {
    toggleSwitch.checked = true;
    document.documentElement.classList.add("dark");
    moonIcon.classList.add('hidden');
    sunIcon.classList.remove('hidden');
    console.log("ON LOAD - theme is dark");
}

function switchTheme(e, element) {

    if (e.target.checked) {
        window.localStorage.setItem('theme', 'dark');
        document.documentElement.classList.add("dark");
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
        console.log("THEME SWITCH - theme is dark");
    } else {
        document.documentElement.classList.remove("dark");
        window.localStorage.setItem('theme', 'light');
        moonIcon.classList.remove('hidden');
        sunIcon.classList.add('hidden');
        console.log("THEME SWITCH - theme is white");
    }
}
toggleSwitch.addEventListener('input', switchTheme, false);

// if (localStorage.theme) document.documentElement.classList.add(localStorage.theme);
