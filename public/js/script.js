
const passwordInput = document.getElementById("loginPasswordInput");
    const showPasswordIcon = document.getElementById("showPasswordIcon");
    const hidePasswordIcon = document.getElementById("hidePasswordIcon");

    showPasswordIcon.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent form submission
        passwordInput.type = "text";
        showPasswordIcon.style.display = "none";
        hidePasswordIcon.style.display = "block";
    });

    hidePasswordIcon.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent form submission
        passwordInput.type = "password";
        hidePasswordIcon.style.display = "none";
        showPasswordIcon.style.display = "block";
    });


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

