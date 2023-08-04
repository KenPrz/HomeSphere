    // Function to toggle the modal
    function toggleModal() {
        const modal = document.getElementById('registerModal');
        modal.classList.toggle('hidden');
    }
    // Function to close the modal if clicked outside
    function closeModalOutside(event) {
        const modal = document.getElementById('registerModal');
        if (event.target === modal) {
            toggleModal();
        }
    }

    // Event listener to show/hide the modal on button click
    const createAccButton = document.getElementById('createAccButton');
    createAccButton.addEventListener('click', toggleModal);

    // Event listener to show/hide password on button click
    const passwordToggle = document.getElementById('passwordToggle');
    const loginPasswordInput = document.getElementById('loginPasswordInput');
    const showPasswordIcon = document.getElementById('showPasswordIcon');
    const hidePasswordIcon = document.getElementById('hidePasswordIcon');

    passwordToggle.addEventListener('click', () => {
        const type = loginPasswordInput.type === 'password' ? 'text' : 'password';
        loginPasswordInput.type = type;

        if (type === 'password') {
            showPasswordIcon.style.display = 'block';
            hidePasswordIcon.style.display = 'none';
        } else {
            showPasswordIcon.style.display = 'none';
            hidePasswordIcon.style.display = 'block';
        }
    });

    // Event listener to close the modal if clicked outside
    window.addEventListener('click', closeModalOutside);