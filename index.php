<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erovoutika | Examination</title>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="src/css/homestyle.css">

<!-- Banner Div -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
 
 <!-- Partner -->
 <section>
    
 </section>
 <!-- Footer -->
 <script src="https://kit.fontawesome.com/24d5cf3efd.js"></script>

</head>
<body>
    <!-- Nav Bar -->
    <div class="navbar-container">
    <header>
        <a href="#" class="logo"><img src="src/images/logo.png"></a>
        <div class="menuToggle" onclick="toggleMenu()"></div>
        <ul class="navigation">
            <li><a href="#banner">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
            <div class="login">
                <a href="#"><button class="btn btn-outline-primary" id="show-login">Login</button></a>&nbsp;&nbsp;&nbsp;
                <a href="#"><button class="btn btn-outline-primary" id="show-login">Signup</button></a>&nbsp;&nbsp;&nbsp;
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
                            <button>Sign up</button>
                        </div>
                    </div>
                </div>
    </header>
</div>

    <!-- Home -->
    <section class="banner" id="banner">
        <div class="d-flex justify-content-between bg-light">
			<div class="home1">
                <br><br><br><br><br>
                <h3 class="info1" style="margin-left: 100px;">One-Stop-Shop Innovative Solutions</h3>
                <br>
                <h4 class="info2" style="margin-left: 100px; line-height: 40px;">We are team of Engineers and IT making <br> Solutions
                    for Robotics, Automation, <br> Electronics and ICT.</h4>
                <br>

                <a href="login.php" type="button" class="btn btn-outline-primary" id="modal_trigger" style="margin-left: 100px;">Exam List</a></div>
			<div>
                <div class="imgBx" style="margin-right: 100px;">
                    <img src="src/images/image1.png">
                </div>
	  </div>
    </section>

    <!-- About Us -->
   
    <div class="about-section">
        <div class="inner-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2><span>About Us</span></h2>
                        <h4>What is Erovoutika?</h4>
                    </div>
                </div>
            </div>
            <p class="text">
                Erovoutika is a respected and experienced Automation and Robotics Company. Our highly professional team, with in-depth knowledge of each jurisdiction, has been successfully deliver customer needs .</p>
                <li><span>Robotics</span></li>
                <li><span>Automation</span></li>
                <li><span>Electronics</span></li>
                <li><span>Information and Communication Technology</span></li>
                <br>
               <p class="text"> Our aim is to assist our clients in getting their nees and requirement in the quickest possible time frame, in the most professional manner. We pride ourselves on providing the highest qualuity service, at the most reasonable cost.</p>
            </p>
           
        </div>
    </div>
    <!-- Services -->
    <div class="service" id="service">
    <section class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2><span>Services</span></h2>
                        <h4>Good Service is Good Business</h4>
                    </div>
                </div>
            </div>
                <div class="row our-offer-items less-carousel">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fa-solid fa-certificate"></i>
                            <h4>Training and Certifications</h4>
                            <p>
                                Live and Online Robotics and Automation Trainings. COMPTIA and Microsoft Certification Reviews 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fa-solid fa-robot"></i>
                            <h4>Automation Solutions</h4>
                            <p>
                                PLC, HMI, and SCADA Development, System Integration 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fa-light fa-browser"></i>
                            <h4>Web Development</h4>
                            <p>
                                Full-Package Web Development, Design, and SEO Marketing. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-tachometer-alt"></i>
                            <h4>Research and Development</h4>
                            <p>
                                Software and Hardware Design, MATLAB, OpenCV, Python, Arduino, RPI Machine Development
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-recycle"></i>
                            <h4>Software Development</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <i class="fas fa-headset"></i>
                            <h4>24/7 Support</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
        </div>
    </section>
    </div>
    
    <!-- Portfolio -->
    <section class="portfolio"id="portfolio">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading text-center">
                    <h2><span>Portfolio</span></h2>
                    <h4>Work in Progress</h4>
                </div>
            </div>
        </div>
        <ul class="honeycomb" lang="es">
      <li class="honeycomb-cell">
        <img class="honeycomb-cell__image" src="src/images/auto-1.jpg">
        <div class="honeycomb-cell__title">Andon System</div>
      </li>
      <li class="honeycomb-cell">
        <img class="honeycomb-cell__image" src="src/images/auto-2.jpg">
        <div class="honeycomb-cell__title">Network Troubleshooting</div>
      </li>
      <li class="honeycomb-cell">
        <img class="honeycomb-cell__image" src="src/images/auto-3.jpg">
        <div class="honeycomb-cell__title">Panel Inspection</div>
      </li>
      <li class="honeycomb-cell">
        <img class="honeycomb-cell__image" src="src/images/auto-4.jpg">
        <div class="honeycomb-cell__title">PLC Programming</div>
      </li>
      <li class="honeycomb-cell">
        <img class="honeycomb-cell__image" src="src/images/auto-5.jpg">
        <div class="honeycomb-cell__title">PLC Programming</div>
      </li>
      <li class="honeycomb-cell">
        <img class="honeycomb-cell__image" src="src/images/elec-1.jpg">
        <div class="honeycomb-cell__title">PLC Programming</div>
      </li>
      <li class="honeycomb-cell">
        <img class="honeycomb-cell__image" src="src/images/elec-5.jpg">
        <div class="honeycomb-cell__title">PLC Programming</div>
      </li>
      <li class="honeycomb-cell honeycomb__placeholder"></li>
    </ul>
    </section>

    <!-- Partner -->

    <br><br>

    <!-- Contact Us -->
    <section class="contact" id="contact">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading text-center">
                    <h2><span>Contact Us</span></h2>
                    <h4>Need to get in touch with us?</h4>

                    <section class="container mt-5">
                        <!--Contact heading-->
                        <div class="row">
                           <div class="col-sm-12 text-center mb-4">
                          </div>
                           <!--Grid column-->
                           <div class="col-sm-12 mb-4 col-md-5">
                              <!--Form with header-->
                              <div class="card border-primary rounded-0">
                                 <div class="card-header p-0">
                                    <div class="bg-primary text-white text-center py-2">
                                       <h3><i class="fa fa-envelope"></i> Write to us:</h3>
                                       <p class="m-0">We’ll write rarely, but only the best content.</p>
                                    </div>
                                 </div>
                                 <div class="card-body p-3">
                                    
                                       <div class="form-group">
                                       <label> Your name </label>
                                       <div class="input-group">
                                          <input value="" type="text" name="data[name]" class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name">
                                       </div>
                                     </div>
                                       <div class="form-group">
                                          <label>Your email</label>
                                          <div class="input-group mb-2 mb-sm-0">
                                             <input type="email" value="" name="data[email]" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label>Subject</label>
                                          <div class="input-group mb-2 mb-sm-0">
                                             <input type="text" name="data[subject]" class="form-control" id="inlineFormInputGroupUsername" placeholder="Subject">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label>Message</label>
                                          <div class="input-group mb-2 mb-sm-0">
                                             <input type="text" class="form-control" name="mesg">
                                          </div>
                                       </div>
                                       <div class="text-center">
                                          <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block rounded-0 py-2">
                                       </div>
                                  
                                      </div>
                                       
                                 </div>
                              </div>
                           <!--Grid column-->
                           
                           <!--Grid column-->
                           <div class="col-sm-12 col-md-7">
                              <!--Google map-->
                              <div class="mb-4">
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.053115350425!2d121.0089715147584!3d14.538954489841807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c938ad3ac0df%3A0xd0c8c1f6db892fd9!2sErovoutika%20Electronics%20Robotics%20Automation!5e0!3m2!1sen!2sus!4v1663715646489!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                              <!--Buttons-->
                              <div class="row text-center">
                                 <div class="col-md-4">
                                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                                    <p> Your Address ….. </p>
                                 </div>
                                 <div class="col-md-4">
                                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                                    <p>+91- 90000000</p>
                                 </div>
                                 <div class="col-md-4">
                                    <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                                    <p> your@gmail.com</p>
                                 </div>
                              </div>
                           </div>
                           <!--Grid column-->
                             </div>
                     </section>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <center>
    <footer>
        <hr>
<div class="footer-row">
    <div class="footer-col">
        <h5 style="color:#2600ff;">Erovoutika Robotics & Automation Solutions</h5>
        <!-- <img src="images/logo.png" alt="" class="footer-logo"> -->
        <p class="company">Our company is envisioned to empower and strengthen the technical skills of industry practitioners, engineers, teachers, and students. Erovoutika is a pundit in the field of electronics, robotics, automation, PLC, Internet-of-Things, Image Processing, and IT including software development, web development, network architecture, cybersecurity, and the like. It is a supplier and distributor of electronics products such as sensors, motors, modules, robots, and other training kits. </p>
        <br><br>
    </div>
    <div class="col">
        <h3 class="details1">Office <div class="underline"><span></span></div></h3>
        <p>PARC HOUSE II, Unit 703, Epifanio de los</p>
        <p>Santos Ave</p>
        <p>Makati, 1212 Metro Manila</p>
        <p class="email-id">sales@erovoutika.ph</p>

    </div>
    <div class="col">
        <h3>Links <div class="underline"><span></span></div></h3>
        <ul>
            <li><a href="#banner">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#contact">Contacts</a></li>
        </ul>
    </div>
    <div class="col">
        <h3>Newsletter <div class="underline"><span></span></div></h3>
        <form action="" class="form">
        <i class="fa-regular fa-envelope"></i>
            <input type="email" placeholder="  Enter your email" required>
            <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </form>
        <div class="social-icons">
            <a href="https://www.facebook.com/erovoutika/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/erovoutika?lang=en"><i class="fa-brands fa-twitter"></i>
            <a href="https://www.youtube.com/c/EROVOUTIKARoboticsandAutomationSolutions?app=desktop"><i class="fa-brands fa-youtube"></i>
            <a href="https://www.linkedin.com/company/erovoutika/?originalSubdomain=ph"><i class="fa-brands fa-linkedin"></i>
        </div>
    </div>
</div>
<hr>
<p class="copyright">&copy; Erovoutika - All Rights Reserved</p>
</footer>
</center>

<!-- Header -->
<script type="text/javascript">
    window.addEventListener('scroll', function(){
        const header = document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);
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