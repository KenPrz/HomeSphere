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
function togglePasswordVisibility() {
    var passwordInput = document.getElementById('loginPasswordInput');
    var showPasswordCheckbox = document.getElementById('showPasswordCheckbox');

    if (showPasswordCheckbox.checked) {
        passwordInput.type = "text";
        confirmPasswordInput.type = "text";
    } else {
        passwordInput.type = "password";
        confirmPasswordInput.type = "password";
    }
}


