<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/homestyle.css">
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
          <img src="src/images/login.png" id="logo2" style="position:absolute";>
                <br><br><br>
                <h4 class="info1" style="margin-left: 730px;">One-Stop-Shop Innovative Solutions</h3>
                <br>
                <h5 class="info2" style="margin-left: 730px; line-height: 40px;">We are team of Engineers and IT making <br> Solutions
                    for Robotics, Automation, <br> Electronics and ICT.</h4>
                    <br><br><br><br>
                    <a href="" id="exam-list" style="--clr:#1e9bff"><span>Exam List</span><i></i></a>

                <a><button class="btn btn-outline-primary" id="show-login">Login | Signup</button></a>&nbsp;&nbsp;&nbsp;
                </div>
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
                            <a href="#"><button id="show-sign">Sign up</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><button class="btn btn-outline-primary" id="show-sign">Signup</button></a> -->

                <div class="popup2">
                    <div class="close-btn2">&times;</div>
                        <div class="form2">
                            <h2>Signup</h2>
                            <div class="form-element2">
                                <label for="email2">Username</label>
                                <input type="text" id="email2" placeholder="Enter username">
                            </div>
                            <div class="form-element2">
                                <label for="password2">Password</label>
                                <input type="password" id="password2" placeholder="Enter password">
                            </div>
                            <div class="form-element2">
                                <label for="password2">Confirm Password</label>
                                <input type="password" id="password2.1" placeholder="Enter password">
                            <div class="form-element">
                            <div>
                              <br>
                              <br>
                            <a href="#"><button id="show-signup">Register</button></a>
                        </div>
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

            <!-- Signup Modal -->
            <script>
    document.querySelector("#show-sign").addEventListener("click", function(){
        document.querySelector(".popup2").classList.add("active");
    });
    document.querySelector(".popup2 .close-btn2").addEventListener("click", function(){
        document.querySelector(".popup2").classList.remove("active");
    });
    </script>
  </body>
</html>