
function togglePasswordVisibility(passwordInputId, showIconId, hideIconId) {
    const loginPasswordInput = document.getElementById(passwordInputId);
    const showPasswordIcon = document.getElementById(showIconId);
    const hidePasswordIcon = document.getElementById(hideIconId);

    const type = loginPasswordInput.type === 'password' ? 'text' : 'password';
    loginPasswordInput.type = type;

    showPasswordIcon.style.display = type === 'password' ? 'block' : 'none';
    hidePasswordIcon.style.display = type === 'password' ? 'none' : 'block';
}

function toggleElementVisibility(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        console.log("clicked")
        element.classList.toggle('hidden');
    } else {
        console.error(`Element with ID '${elementId}' not found.`);
    }
}