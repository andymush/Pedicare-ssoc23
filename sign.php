<?php
include("connect.php");
?>
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="sign.css">
    <link rel="shortcut icon" type="image/jpg" href="images/logo.png"/>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="baby.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img src="back.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
      <div class="form-content">
        <!-- lOGIN FORM -->
        <div class="login-form">
          <div class="title">Login</div>
          <form method="POST" action="patient_login.php"  >
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Username" name="username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
          </form>
        </div>
        <!--- REGISTER FORM -->
        <div class="signup-form">
          <div class="title">Signup</div>
            <form action="patient_register.php" method="POST">
                <div class="input-boxes">
                  <div class="input-box">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Enter your name" name="name" required>
                  </div>
                  <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Enter your email" name="email" required>
                  </div>
                  <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Enter your password" name="password" required>
                  </div>
                  <div class="input-box">
                    <i class="fa-solid fa-phone"></i>
                    <input type="text" placeholder="Phone number" name="phone" required>
                  </div>
                  <div class="input-box">
                    <i class="fa-solid fa-baby"></i>
                    <input type="text" placeholder="Infant's name" name="infant_name" required>
                  </div>
                  <div class="input-box">
                    <i class="fa-solid fa-arrow-down-9-1"></i>
                    <input type="text" placeholder="Infants Age e.g 2 months" name="infant_age" required>
                  </div>

                  <div class="button input-box">
                    <input type="submit" name="register" value="Submit">
                  </div>
                  <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>