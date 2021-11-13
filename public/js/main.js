console.log("hello");

var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]')

if (localStorage.theme == "dark") {
    toggleSwitch.checked = true;
}

function switchTheme(e, element) {

    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        window.localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        window.localStorage.setItem('theme', 'light');
    }
}
toggleSwitch.addEventListener('input', switchTheme, false);