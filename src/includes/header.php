<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>

    <header>
      <a href="" class="brand"><img src="src/images/logo.png"></a>
      <div class="menu">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        <a href="#home">Home</a>
        <a href="#about-section">About</a>
        <a href="#service">Services</a>
        <a href="#porfolio">Porfolio</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>  

          <!-- Home -->
    <section class="section-main" id="home">
        <div class="d-flex justify-content-start bg-light">
			<div class="home1">

                <br><br><br><br>
                <h3 class="info1" style="margin-left: 5px;">One-Stop-Shop Innovative Solutions</h3>
                <br>
                <h4 class="info2" style="margin-left: 5px; line-height: 40px;">We are team of Engineers and IT making <br> Solutions
                    for Robotics, Automation, <br> Electronics and ICT.</h4>
                <br>
                <a><button class="btn btn-outline-primary" id="show-login">Login | Signup</button></a>

                <div class="popup">
                    <div class="close-btn">&times;</div>
                        <div class="form">
                            <h2>Login</h2>
                            <div class="form-element">
                                <label for="email">Username</label>
                                <input type="text" id="email" placeholder="Enter username">
                            </div>
                            <div class="form-element">
                                <label for="password">Password</label>
                                <input type="password" id="password" placeholder="Enter password">
                            </div>
                            <div class="form-element">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me">Remember Me</label>
                            </div>
                            <div class="form-element">
                                <button>Log in</button>
                            </div>
                            <div class="form-element">
                            <a href="#" style="text-align: center;">Dont have account?</a>
                            <div>
                            <button id="show-signup">Sign up</button>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
<!-- 
    <section class="section-two">
        
    </section> -->

    <script>
      //Javascript for Navigation effect on scroll
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle('sticky', window.scrollY > 0);
      });

      //Javascript for responsive navigation sidebar Nav
      var menu = document.querySelector('.menu');
      var menuBtn = document.querySelector('.menu-btn');
      var closeBtn = document.querySelector('.close-btn');

      menuBtn.addEventListener("click", () => {
        menu.classList.add('active');
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove('active');
      });
    </script>

        <!-- Login Modal -->
    <script>
    document.querySelector("#show-login").addEventListener("click", function(){
        document.querySelector(".popup").classList.add("active");
    });
    document.querySelector(".popup .close-btn").addEventListener("click", function(){
        document.querySelector(".popup").classList.remove("active");
    });
    </script>

  </body>
</html>