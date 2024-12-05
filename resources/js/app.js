import './bootstrap';
// Get modal elements
const mainModal = document.getElementById("myModal");
const loginModal = document.getElementById("loginModal");
const signupModal = document.getElementById("signupModal");
const closeButtons = document.querySelectorAll(".close");
const getStartedBtn = document.getElementById("get-started-btn");
const navLogin = document.getElementById("nav-login");
const navSignup = document.getElementById("nav-signup");

// Show main modal when "Connect Now" is clicked
getStartedBtn.addEventListener("click", () => {
    mainModal.style.display = "block";
});

// Show login options
document.querySelector(".login-btn").addEventListener("click", () => {
    mainModal.style.display = "none"; // Hide main modal
    loginModal.style.display = "block"; // Show login modal
});

// Show signup options
document.querySelector(".signup-btn").addEventListener("click", () => {
    mainModal.style.display = "none"; // Hide main modal
    signupModal.style.display = "block"; // Show signup modal
});

// Show login modal from navigation bar
navLogin.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent default link behavior
    loginModal.style.display = "block";
});


// Close modals
closeButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        mainModal.style.display = "none";
        loginModal.style.display = "none";
        signupModal.style.display = "none";
    });
});

// Hide modals when clicking outside them
window.addEventListener("click", (e) => {
    if (e.target.classList.contains("modal")) {
        mainModal.style.display = "none";
        loginModal.style.display = "none";
        signupModal.style.display = "none";
    }
});

/*Sign Up Modal in relation to closing it*/
document.addEventListener('DOMContentLoaded', function() {
    // Get the modal and close button
    var signupModal = document.getElementById("signupModal");
    var closeBtns = signupModal.querySelectorAll(".close"); // Find close buttons within the signup modal

    // Close the signup modal when the close button is clicked
    closeBtns.forEach(function(closeBtn) {
        closeBtn.addEventListener("click", function() {
            signupModal.style.display = "none";
        });
    });

    // Close the signup modal when the user clicks outside the modal content
    window.addEventListener("click", function(event) {
        if (event.target === signupModal) {
            signupModal.style.display = "none";
        }
    });
});