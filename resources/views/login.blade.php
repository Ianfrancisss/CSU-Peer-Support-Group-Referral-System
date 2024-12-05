<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <style>@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }
      body{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #d4def8;
      }
      .wrapper{
        position: relative;
        max-width: 430px;
        width: 100%;
        background: #fff;
        padding: 34px;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.2);
      }
      .wrapper h2{
        position: relative;
        font-size: 22px;
        font-weight: 600;
        color: #333;
      }
      .wrapper h2::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 28px;
        border-radius: 12px;
        background: #4070f4;
      }
      .wrapper form{
        margin-top: 30px;
      }
      .wrapper form .input-box{
        height: 52px;
        margin: 18px 0;
      }
      form .input-box input{
        height: 100%;
        width: 100%;
        outline: none;
        padding: 0 15px;
        font-size: 17px;
        font-weight: 400;
        color: #333;
        border: 1.5px solid #C7BEBE;
        border-bottom-width: 2.5px;
        border-radius: 6px;
        transition: all 0.3s ease;
      }
      .input-box input:focus,
      .input-box input:valid{
        border-color: #4070f4;
      }
      form .policy{
        display: flex;
        align-items: center;
      }
      form h3{
        color: #707070;
        font-size: 14px;
        font-weight: 500;
        margin-left: 10px;
      }
      .input-box.button input{
        color: #fff;
        letter-spacing: 1px;
        border: none;
        background: #4070f4;
        cursor: pointer;
      }
      .input-box.button input:hover{
        background: #0e4bf1;
      }
      form .text h3{
       color: #333;
       width: 100%;
       text-align: center;
      }
      form .text h3 a{
        color: #4070f4;
        text-decoration: none;
      }
      form .text h3 a:hover{
        text-decoration: underline;
      }
     /*Sign up modal*/
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
        padding-top: 150px;
      }

      .modal-content {
        background: rgb(240, 237, 220) !important; /* Semi-transparent background */
        margin: 5% auto;
        padding: 20px;
        width: 80%;
        max-width: 430px;
        text-align: center;
        border-radius: 20px;
      }

      .modal-content h2{
        color: rgb(34, 33, 33);
        font-size: 25px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin-bottom: 10px;
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
      
    </style>
   </head>

<body>
  <div class="wrapper">
    <h2>Log In</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Log In ">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="#" class="signup-btn">Sign up now</a></h3>

      </div>
    </form>
  </div>

  <!-- Sign Up Options Modal -->
<div id="signupModal" class="modal">
  <div class="modal-content">
      <span class="close"></span>
      <h2>Sign Up As</h2>
      <button onclick="location.href='{{ route('client-signup') }}'">Client</button>
      <button onclick="location.href='{{ route('counselor-signup') }}'">Counselor</button>
  </div>
</div>
  <script>
    const signupModal = document.getElementById("signupModal");
    const closeModal = document.querySelector(".close");
    const signupBtn = document.querySelector(".signup-btn");

    // Show modal on signup button click
      signupBtn.addEventListener("click", (e) => {
      e.preventDefault(); // Prevent default link behavior
      signupModal.style.display = "block"; // Show the modal
    });

    // Close modal on close button click
      closeModal.addEventListener("click", () => {
      signupModal.style.display = "none";
    });

    // Close modal when clicking outside of it
      window.addEventListener("click", (e) => {
        if (e.target === signupModal) {
          signupModal.style.display = "none";
        }
   });

</script>
</body>
</html>