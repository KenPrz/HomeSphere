// modal popup form script
const createAccButton = document.querySelector("#createAcc");
const modalContainer = document.querySelector("#modalContainer");

createAccButton.addEventListener("click", function () {
    modalContainer.style.display = "flex";
});

window.addEventListener("click", function (event) {
    if (event.target === modalContainer) {
        modalContainer.style.display = "none";
    }
});
//show password function 
function showPassword() {
    var x = document.getElementById("userInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}