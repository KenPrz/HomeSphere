
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

