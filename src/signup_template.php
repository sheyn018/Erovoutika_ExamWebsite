<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signupstyle.css">
    <title>Erovoutika | Signup</title>
   </head>
<body>
<div class="container">
<img src="images/Logo2light.png" class="logo2" alt="logo">
    <div class="wrapper">
        <div class="title"><span>Signup Form</span></div>
            <form action="signup.php" method="post">
            <div class="input-box">
                <input type="text" name="clUrFirstname" placeholder="Firstname" required>
            </div>
            <div class="input-box">
                <input type="text" name="clUrLastname" placeholder="Lastname" required>
            </div>
            <div class="input-box">
                <input type="text" name="clUrUsername" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" name="clUrPassword"placeholder="Password" required>
            </div>
            <div class="input-box">
                <input type="text" name="clUrcontact_num" placeholder="Contact" required>
            </div>
            <div class="input-box">
                <input type="text" name="clUremail" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="text" name="clUraddress" placeholder="Address" required>
            </div>
            <div class="policy">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" formaction="crud/tbusers_adddefault.php" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="login_template.php">Login now</a></h3>
            </div>
            <center>
            <div class="return-link"><a href="../index.php">Return to Homepage</a></div>
            </center>
            </form>
        </div>
    </div>
</div>
</body>
</html>


<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/signupstyle.css">
    </head>
    <body>
        <form action="signup.php" method="post">
            
            <label for="clUrFirstname">First Name</label>
            <input type="text" name="clUrFirstname" placeholder=" First Name ">

            <label for="clUrLastname">Last Name</label>
            <input type="text" name="clUrLastname" placeholder=" Last Name ">
            
            <br>

            <label for="clUrUsername">Username</label>
            <input type="text" name="clUrUsername" placeholder=" Username ">
            
            <br>

            <label for="clUrPassword">Password</label>
            <input type="password" name="clUrPassword" placeholder=" Password ">
            
            <br>

            <label for="clUrcontact_num">Contact Number</label>
            <input type="text" name="clUrcontact_num" placeholder=" Contact Number ">
            
            <label for="clUremail">Email</label>
            <input type="text" name="clUremail" placeholder=" Email ">
            
            <br>

            <label for="clUraddress">Address</label>
            <input type="text" name="clUraddress" placeholder=" Address ">

            <br>

            <button type="submit" formaction="crud/tbusers_adddefault.php"> Sign Up </button>
            <button type="reset"> Clear </button>

        </form>

        <p>Already have an account?</p>
        <a href="login_template.php">
           
            <button>
                Log-in
            </button>
        </a>


        <a href="../index_template.php">
            <p>Return to Homepage</p>
        </a>
    </body>
</html> -->