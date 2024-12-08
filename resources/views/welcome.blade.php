<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareConnect</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    <!-- Navbar -->
    <nav>
        <!-- Checkbox for toggling menu -->
        <input type="checkbox" id="check">
    
        <!-- Menu icon -->
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
    
        <!-- Site logo -->
        
        <img class="logo" src="resources/images/psg_logo-removebg-preview.png">
        <a class="psg">Peer Support Group</a>

    
        <!-- Navigation links -->
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">FAQ</a></li>
           
            <li><a class="nav-login" id="nav-login" href="#">LOG IN</a></li>
          </ul>
          
      </nav>
    
    
    
    
    <!-- Welcome -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to CareConnect</h1>
            <p>Your digital space for personalized mental health support. Start your journey to well-<br>being  today, from the comfort of your home.</p>
            <a id="get-started-btn" class="btn btn-light">CONNECT NOW</a>
        </div>
    </header>
    
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
        <button onclick="location.href='admin_login.html'">Admin</button>
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

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3>Secure Messaging</h3>
                    <p>Communicate securely with your counselor using our built-in messaging system.</p>
                </div>
                <div class="col-md-4">
                    <h3>Appointment Scheduling</h3>
                    <p>Easily schedule and manage your counseling appointments.</p>
                </div>
                <div class="col-md-4">
                    <h3>Mental Health Resources</h3>
                    <p>Access articles, videos, and tools to support your well-being.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-4" id="footer">
        <p>&copy; 2024 CareConnect. All rights reserved.</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="resources/js/script.js"></script>
</body>
</html> 