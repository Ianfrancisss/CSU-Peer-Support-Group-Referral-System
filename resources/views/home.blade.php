<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareConnect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img class="logo" src="public/images/psg_logo-removebg-preview.png">
        <a class="psg">Peer Support Group</a>
        <ul>
            <li><a href="#" id="home-link">HOME</a></li>
            <li><a href="#" id="about-link">ABOUT US</a></li>
            <li><a href="#" id="faq-link">FAQ</a></li>
            <li><a class="nav-login" id="nav-login" href="#">LOG IN</a></li>
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
                        <img src="public/images/secure message.png" class="card-img-top" alt="Secure Messaging">
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
                        <img src="public/images/schedule.png" class="card-img-top" alt="Appointment Scheduling">
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
                        <img src="public/images/resources.png" class="card-img-top" alt="Mental Health Resources">
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
        <button class="login-btn">Log In</button>
        <button class="signup-btn">Sign Up</button>
    </div>
</div>

<!-- Login Options Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Log In As</h2>
        <button onclick="location.href='client_login.html'">Client</button>
        <button onclick="location.href='counselor_login.html'">Counselor</button>
    </div>
</div>

<!-- Sign Up Options Modal -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Sign Up As</h2>
        <button onclick="location.href='client_signup.html'">Client</button>
        <button onclick="location.href='counselor_signup.html'">Counselor</button>
    </div>
</div>

    <!-- Footer -->
    <footer class="bg-light text-center py-4" id="footer">
        <p>&copy; 2024 CareConnect. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
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
