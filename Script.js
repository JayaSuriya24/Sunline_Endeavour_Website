// script code for toggle menu
var navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}
function hideMenu() {
    navLinks.style.right = "-200px";
}

// script code for toggle text
const parentContainer = document.querySelector('.about-us');

parentContainer.addEventListener('click', event => {
    const current = event.target;
    const isReadMoreBtn = current.className.includes('red-btn');
    if (!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.read-more-text');

    currentText.classList.toggle('read-more-text--show');

    current.textContent = current.textContent.includes('Read More') ?
        "Read Less" : "Read More";
})

// Script code for drop down content
var box = document.querySelectorAll(".box");
for (i = 0; i < box.length; i++) {
    box[i].addEventListener("click", function () {
        this.classList.toggle("active");
    })
}