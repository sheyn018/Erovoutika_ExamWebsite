<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tutorials_style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/24d5cf3efd.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>Tutorials</title>
</head>
<body>

<div class="wrapper">
  
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">
      <a href="#" class="brand"><img src="images/Logo3.png"></a>
      </div>
      <ul>
        <li><a href="../index.php">
        <i class="fa-solid fa-house"></i>
          </a></li>
      </ul>
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="course_html.php">
          <span class="icon"><i class="fa-brands fa-html5"></i></span>
          <span class="title">HTML5</span>
          </a></li>
        <li><a href="course_css.php">
          <span class="icon"><i class="fa-brands fa-css3-alt"></i></span>
          <span class="title">CSS3</span>
          </a></li>
        <li><a href="course_javascript.php">
          <span class="icon"><i class="fa-brands fa-square-js"></i></span>
          <span class="title">JAVASCRIPT</span>
          </a></li>
        <li><a href="course_bootstrap.php">
          <span class="icon"><i class="fa-brands fa-bootstrap"></i></span>
          <span class="title">BOOTSRAP5</span>
          </a></li>
        <li><a href="course_php.php">
          <span class="icon"><i class="fa-brands fa-php"></i></span>
          <span class="title">PHP</span>
          </a></li>
    </ul>
  </div>
<script>
    $(".hamburger").click(function(){
   $(".wrapper").toggleClass("collapse");
});
</script>
</body>
</html>