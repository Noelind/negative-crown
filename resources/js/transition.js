import Swup from 'swup';

// Swup Options
const options = {
    cache: false,
    animationSelector: '[class*="swupsition-"]',
  };

// Instantiate new swup object
const swup = new Swup(
    options
);

// Scroll to top of page when loaded
swup.on('contentReplaced', function () {
    window.scrollTo(0, 0);
});

init();
swup.on('contentReplaced', init);

function init() {
    console.log("eksw");
    if (document.getElementById("menu-checkbox")) {
        document.getElementById("menu-checkbox").checked = false;
    }
}
