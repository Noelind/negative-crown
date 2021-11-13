console.log("hello");

var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]')

if (!(localStorage.theme == "light")) {
    toggleSwitch.checked = true;
}

function switchTheme(e, element) {

    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        window.localStorage.setItem('theme', 'dark');
        toggleText.innerText = "Who turned the lights off?";
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        window.localStorage.setItem('theme', 'light');
        toggleText.innerText = "Turn off those damn lights!";
    }
}
toggleSwitch.addEventListener('input', switchTheme, false);