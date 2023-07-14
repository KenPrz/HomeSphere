const createAccButton = document.querySelector("#createAcc");
const modalContainer = document.querySelector("#modalContainer");

createAccButton.addEventListener("click", function() {
    modalContainer.style.display = "flex";
});

window.addEventListener("click", function(event) {
    if (event.target === modalContainer) {
        modalContainer.style.display = "none";
    }
});