// Tab switching between Login and Register
const loginTab = document.getElementById('loginTab');
const registerTab = document.getElementById('registerTab');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const switchToRegister = document.getElementById('switchToRegister');
const switchToLogin = document.getElementById('switchToLogin');

// Switch between Login and Register Tabs
loginTab.onclick = () => {
    loginTab.classList.add('active');
    registerTab.classList.remove('active');
    loginForm.classList.add('active');
    registerForm.classList.remove('active');
};

registerTab.onclick = () => {
    registerTab.classList.add('active');
    loginTab.classList.remove('active');
    registerForm.classList.add('active');
    loginForm.classList.remove('active');
};

// Switch to Register tab from Login page
switchToRegister.onclick = (e) => {
    e.preventDefault();
    registerTab.click();
};



// Registration Form Password Match Check
const registrationForm = document.getElementById('registrationForm');
const regPassword = document.querySelector('[name="reg_password"]');
const regCPassword = document.querySelector('[name="reg_c_password"]');
const snackbar = document.getElementById('snackbar');

// Password mismatch message
const errorMessage = document.getElementById('error-message');

// Form submit event
registrationForm.addEventListener('submit', function (event) {
    // Check if passwords match
    if (regPassword.value !== regCPassword.value) {
        event.preventDefault();  // Prevent form submission
        showSnackbar("Enter Same Password!");  // Show snackbar for password mismatch
        errorMessage.textContent = "Passwords do not match.";  // Display error message below confirm password
    } else {
        // Clear the error message if passwords match
        errorMessage.textContent = "";
        // Let the form submit if passwords match
        showSnackbar("Registration Successful!", "success");  // Show success snackbar
    }
});

// Function to show snackbar
function showSnackbar(message, type = "") {
    snackbar.textContent = message;
    if (type === "success") {
        snackbar.classList.add('success');  // Add 'success' class for green background
    } else {
        snackbar.classList.remove('success');  // Default error background (red)
    }
    snackbar.className = "show";  // Add 'show' class to display the snackbar
    setTimeout(function () {
        snackbar.className = snackbar.className.replace("show", "");  // Hide snackbar after 3 seconds
        snackbar.classList.remove('success');
    }, 3000);  // Snackbar disappears after 3 seconds
}

// Login Form Validation Check
const loginBtn = document.getElementById('loginBtn');
const loginEmail = document.getElementById('loginEmail');
const loginPassword = document.getElementById('loginPassword');

loginBtn.addEventListener('click', function (event) {
    // Simulated user credentials (you can replace this with real validation)
    const validEmail = "user@example.com";
    const validPassword = "password123";

    // Check if email and password are correct
    if (loginEmail.value !== validEmail || loginPassword.value !== validPassword) {
        event.preventDefault();  // Prevent form submission
        showSnackbar("Please enter a valid email or password.");  // Show snackbar for invalid login
    } else {
        showSnackbar("Login Successful!", "success");  // Show success snackbar
    }
});
