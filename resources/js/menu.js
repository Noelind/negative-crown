let menuState = document.getElementById("menu-checkbox");
menuState.checked = 0; // Close menu on reload
menuState.addEventListener('change', function() {
    if(this.checked) {
        document.body.style.overflow = "hidden";
        document.getElementById("swup").style.pointerEvents = "none"; // Can't click behind menu
    } else {
        document.body.style.overflow = "initial";
        document.getElementById("swup").style.pointerEvents = "auto"; // Reset clickability
    }
});
