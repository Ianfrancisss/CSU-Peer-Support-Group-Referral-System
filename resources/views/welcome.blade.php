<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareConnect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>/*Navbar*/
        /* Google Fonts Link */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        
        nav {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          z-index: 1000; /* Ensure navbar stays on top of other content */
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for better visibility */
          background: #8a00c8 !important;
          height: 90px;
          width: 100%;
        }
        body {
          padding-top: 80px; /* Adjust this value to match the height of the navbar */
        }
        
        section {
          display: none;
        }
        
        .logo{
          width: 70px;
          margin-top: 10px;
          margin-left: 30px;
        }
        
        nav .psg{
          color: white;
          text-decoration: none;
          margin-left: 10px;
          margin-top: 25px;
          font-size: 20px;
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
          background-color: #5f0284; /* Add a background color */
          padding: 5px 10px; /* Control inner spacing */
          border-top-right-radius: 20px;
          border-bottom-right-radius: 20px;
          display: inline-block; /* Ensure width and height apply */
          opacity: 95%;
        }
        
        nav ul {
          float: right;
          margin-right: 20px;
        }
        
        nav ul li {
          display: inline-block;
          line-height: 80px;
          margin: 0 5px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          font-weight: bold;
          opacity: 90%;
        }
        
        nav ul li a {
          color: white;
          font-size: 17px;
          padding: 7px 13px;
          border-radius: 3px;
          text-decoration: none;
        }
        
        .nav-login{
          background-color: #007bffd4;
          color: white;
          border-radius: 5px;
        }
        
        a:hover {
          color: #e8d8eeb1;
          transition: .5s;
        }
        
        .checkbtn {
          font-size: 22px;
          color: white;
          float: right;
          line-height: 80px;
          margin-right: 30px;
          cursor: pointer;
          display: none;
        }
        
        #check {
          display: none;
        }
        
        
        /*Welcome*/
        header {
          background: linear-gradient(to bottom, #8a00c8, #a000c8, #b100cd, #be2ed6, #ca5cdd, #da8ee7, #e8bcf0);
          color: white;
          text-align: center;
          padding: 5rem 0;
        }
        
        header .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 1.5rem;
        }
        
        header h1 {
          font-size: 3.5rem;
          margin-bottom: 1rem;
          padding: 10px;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          font-weight: bold;
        }
        
        header p {
          font-size: 1.1rem;
          margin-bottom: 2rem;
          font-style: italic;
          padding: 20px;
        }
        
        header .btn {
          background-color: #8a00c2; 
          border: #8a00c2;
          border-radius: 40px !important;
          color: #ffffff;
          font-weight: bold !important; 
          padding: 0.75rem 1.5rem;
          font-size: 1.5rem;
          text-decoration: none;
          border-radius: 0.375rem;
          transition: background-color 0.3s ease;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        header .btn:hover {
          background-color: #e2e6ea; 
        }
        
        
        /* Features Section */
        .card-img-top {
          width: 90%; 
          height: 200px; 
          object-fit: cover; 
        }
        
        
        section.py-5 {
          padding: 5rem 0;
          background-color: #e8bcf0; 
        }
        
        section .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 0 1.5rem;
        }
        
        section .row {
          display: flex;
          justify-content: space-between;
          gap: 2rem;
        }
        
        section .col-md-4 {
          flex: 1;
          padding: 1rem;
          background-color: #ffffff;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          border-radius: 8px;
          transition: transform 0.3s ease;
        }
        
        section .col-md-4:hover {
          transform: translateY(-5px); 
        }
        
        section h3 {
          font-size: 1.5rem;
          margin-bottom: 1rem;
        }
        
        section p {
          font-size: 1rem;
          color: rgb(28, 12, 12); 
        }
        
        
        /*About Us*/
        
        #about-us{
          /*background: linear-gradient(to bottom, #e8bcf0, #da8ee7, #ca5cdd, #ca5cdd, #da8ee7, #e8bcf0);*/
          background-color: #e8bcf0 !important;
        }
        
        .aboutus-container {
          max-width: 800px; /* Set maximum width for content container */
          margin: 0 auto; /* Center align content */
        }
        
        .aboutus-container img {
          max-width: 50%;
          height: auto;
          display: block;
          margin: 0 auto;
        
        }
        
        .aboutus-container h2 {
          text-align: center; /* Center align heading */
        }
        
        .aboutus-container p {
          margin-top: 1.5rem; 
          margin-bottom: 1.5rem; 
          border: 1px solid; 
          padding: 1rem; 
          background-color: #a000c816;
          border-radius: 20px;
          font-size: 18px;
        }
        
        .text-center {
          text-align: center;
        }
        
        .text-right {
          text-align: left;
        }
        
        /* Footer*/
        footer {
          color: #6c757d;
          text-align: center;
          padding: 1.5rem 0;
          background-color: #e8bcf0 !important;
        }
        
        #footer{
          background-color: #e8bcf0 !important;
        }
        
        footer p {
          font-size: 1rem;
          margin: 0;
        }
        
        
        
        /* Connect Now/login % signup Modal styles */
        .modal {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0, 0, 0, 0.4);
          padding-top: 60px;
        }
        
        .modal-content {
          background: rgba(106, 12, 130, 0.326) !important; /* Semi-transparent background */
          backdrop-filter: blur(10px) !important; /* Apply blur effect */
          -webkit-backdrop-filter: blur(10px) !important; /* For Safari support */
          margin: 5% auto;
          padding: 20px;
          border-color:rgba(106, 12, 130, 0.326);
          width: 80%;
          max-width: 400px;
          text-align: center;
        }
        
        .modal-content h2{
          color: white;
          font-size: 25px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        .modal-content button {
          margin: 10px;
          padding: 10px 20px;
          font-size: 16px;
          cursor: pointer;
          background-color: rgba(0, 0, 0, 0.39);
          border: none;
          border-radius: 5px;
          color:white;
        }
        
        .modal-content button:hover {
          background-color: #20012f49;
        }
        
        .modal-content .login-btn {
          background-color: #007bff9c;
          color: white;
        }
        
        .modal-content .signup-btn {
          background-color: #28a746eb;
          color: white;
        }
        
        .close {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: black;
          text-decoration: none;
          cursor: pointer;
        }
        
        
        
        
        
        /* Responsive media query code for mobile devices */
        @media(max-width: 584px) {
          .container {
            max-width: 100%;
          }
        
          form .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
          }
        
          form .category {
            width: 100%;
          }
        
          .content form .user-details {
            max-height: 300px;
            overflow-y: scroll;
          }
        
          .user-details::-webkit-scrollbar {
            width: 5px;
          }
        }
        
        /* Responsive media query code for mobile devices */
        @media(max-width: 459px) {
          .container .content .category {
            flex-direction: column;
          }
        }
        
        /**/
        /*Responsiveness of screen ohaha*/
        /* Responsive design adjustments */
        @media (max-width: 500px) {
        
          ul {
            position: fixed;
            width: 33% !important; /* 1/5 of the screen width */
            height: 100vh; /* Full height of the screen */
            top: 90px;
            right: -100%;
            background: rgba(224, 216, 225, 0.456); /* Semi-transparent background */
            backdrop-filter: blur(10px); /* Apply blur effect */
            transition: all 0.3s;
            margin-right: 0 !important;
            padding-left: 10px !important;
          }
          
          nav ul li {
            display: block;
            margin: 50px 0;
            line-height: 0px;
          }
          
          nav ul li a {
            font-size: 13px !important;
            color: rgb(255, 247, 230);
            text-decoration: none;
            text-align: left;
            padding-right: 10px !important;
            padding-left: 0;
          }
          
          nav ul li a:hover {
            color: #e8d8ee;
          }
          
          #check:checked~ul {
            right: 0;
          }
          
          
          nav .psg{
            display: none;
          }
        
          .nav-signup{
            display: none;
          }
          
          .nav-login{
            display: none;
          }
        
        }
        @media (max-width: 767px) {
        
          .nav-login{
            background-color: hide !important;
            color: white;
            border-radius: 5px;
          }
          .logo{
            width: 50px;
            margin-top: 30px;
            margin-left: 30px;
          }
        
          .nav-login{
            background-color: none;
          }
          .checkbtn {
            display: block;
            
          }
        
          ul {
            position: fixed;
            width: 28%; /*the screen width */
            height: 100vh; /* Full height of the screen */
            top: 90px;
            right: -100%;
            background: rgba(100, 0, 123, 0.683); /* Semi-transparent background */
            backdrop-filter: blur(20px); /* Apply blur effect */
            transition: all 0.3s;
            margin-right: 0 !important;
            padding-left: 10px !important;
          }
          
          nav ul li {
            display: block;
            margin: 50px 0;
            line-height: 0px;
          }
          
          nav ul li a {
            font-size: 14px;
            color: rgb(255, 247, 230);
            text-decoration: none;
            padding-right: 10px !important;
            padding-bottom: 2px !important;
            padding-left: 0;
            border: 1px solid rgb(255, 247, 230);
            display: block; /* Ensures the border surrounds the link properly */
            margin: 5px 10px; /* Adds spacing between each link */
            line-height: 1.5; /* Adjusts the line spacing inside the border */
          }
          
          nav ul li a:hover {
            color: #e8d8ee; 
            border-color: #2f103b !important;
            background-color: rgba(255, 247, 230, 0.2);
          
          }
          
          #check:checked~ul {
            right: 0;
          }
          
          
          
          /*Welcome*/
          header h1 {
              font-size: 2.5rem;
          }
        
          header p {
              font-size: 1rem;
          }
        
          header .btn {
              font-size: 0.9rem;
              padding: 0.6rem 1.25rem;
          }
        }
        
        
        @media (max-width: 1000px) {
        
          .nav-login{
            background-color: none !important;
          }
        
          .logo{
            width: 45px;
            margin-top: 10px;
            margin-left: 30px;
          }
        
          nav .psg{
            font-size: 10px;
            margin-top: 25px;
          }
        
          nav ul li a {
            font-size: 14px;
            padding: 6px;
          }
        
          header h1 {
            font-size: 2.5rem;
        }
        
        /*Feature*/
        .card {
          font-size: 10px;
        }
        
        .card img {
          height: 100px;
          object-fit: cover;
        }
        
        }
        </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img class="logo" src="{{ asset('images/psg_logo-removebg-preview.png') }}">
        <a class="psg">Peer Support Group</a>
        <ul>
            <li><a href="#" id="home-link">HOME</a></li>
            <li><a href="#" id="about-link">ABOUT US</a></li>
            <li><a href="#" id="faq-link">FAQ</a></li>
            <li><a class="nav-login" id="nav-login" onclick="location.href='{{ route('login') }}'">LOG IN</a></li>
        </ul>
    </nav>

    <!-- Welcome Section (Home) -->
    <header id="welcome" class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to CareConnect</h1>
            <p>Your digital space for personalized mental health support. Start your journey to well-being<br> today, from the comfort of your home.</p>
            <a id="get-started-btn" class="btn btn-light">CONNECT NOW</a>
        </div>
    </header>

    <!-- Features Section (Home) -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/secure message.png') }}" class="card-img-top" alt="Secure Messaging">
                        <div class="card-body">
                            <h5 class="card-title">Secure Messaging</h5>
                            <p class="card-text">Communicate securely with your counselor using our built-in messaging system.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/schedule.png') }}" class="card-img-top" alt="Appointment Scheduling">
                        <div class="card-body">
                            <h5 class="card-title">Appointment Scheduling</h5>
                            <p class="card-text">Easily schedule and manage your counseling appointments.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/resources.png') }}" class="card-img-top" alt="Mental Health Resources">
                        <div class="card-body">
                            <h5 class="card-title">Mental Health Resources</h5>
                            <p class="card-text">Access articles, videos, and tools to support your well-being.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="py-5 bg-light">
        <div class="aboutus-container">
            <h2 class="text-center">About Us</h2>
            <p class="lead text-center">We are a team dedicated to providing accessible and reliable mental health support. Our platform<br> connects students with counselors, promoting well-being and support within our community.</p>
            <p class="lead text-right">Our mission is to ensure that every individual has the opportunity to receive personalized care, with ease<br> and confidentiality, fostering a supportive environment for mental health awareness.</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5">
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What is CareConnect?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            CareConnect is a digital platform designed to provide students with access to mental health support and resources. It connects clients with counselors to offer personalized guidance and care.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How can I register on CareConnect?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You can register as a client or counselor on CareConnect by clicking on the "Sign Up" button on the homepage and following the registration process.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Main Modal for Login/Signup -->
  <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Choose an Option</h2>
        <button class="login-btn" onclick="location.href='{{ route('login') }}'">Log In</button>
        <button class="signup-btn" onclick="location.href='{{ route('Signup') }}'">Sign Up</button>
    </div>
</div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4" id="footer">
        <p>&copy; 2024 CareConnect. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Get modal elements
const mainModal = document.getElementById("myModal");
const signupModal = document.getElementById("signupModal");
const closeButtons = document.querySelectorAll(".close");
const getStartedBtn = document.getElementById("get-started-btn");
const navLogin = document.getElementById("nav-login");
const navSignup = document.getElementById("nav-signup");

// Show main modal when "Connect Now" is clicked
getStartedBtn.addEventListener("click", () => {
    mainModal.style.display = "block";
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

        // JavaScript to handle the display of sections
        document.getElementById("home-link").addEventListener("click", function() {
            showSection("welcome");
            showSection("features");
        });

        document.getElementById("about-link").addEventListener("click", function() {
            showSection("about-us");
        });

        document.getElementById("faq-link").addEventListener("click", function() {
            showSection("faq");
        });

        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll("section").forEach(function(section) {
                section.style.display = "none";
            });
            // Show the selected section
            document.getElementById(sectionId).style.display = "block";
        }

        // Optionally, show the home section (welcome) and features when the page loads
        showSection("welcome");
        showSection("features");
    </script>
</body>
</html>
