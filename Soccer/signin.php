<?php
session_start();
if(isset($_SESSION['username']))
{
  header("location:User.php");
}
else if(isset($_SESSION['password']))
{
  header("location: Kairat_admin.php");
 }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SDU sign up form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/des.css">

  
</head>

<body>
<video poster="background.png" id="bgvid" playsinline autoplay muted loop>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->

  <source src="Orange Metal - HD Video Background Loop.webm" type="video/webm">
  <source src="Orange Metal - HD Video Background Loop.mp4" type="video/mp4">
</video>
  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <a href="index.php"><img class="logo-image" src="../title-image2.png"><span> </span>SDU FOOTBALL LEAGUE</a>

    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Welcome to <br><b>SDU FOOTBALL LEAGUE.</b></br></h1>
      <!-- <h2 class="heading--secondary">Are you ready to join the elite?</h2> -->
    </div>
    <div class="thumbnail__links">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="https://vk.com/sportclub_sdu" target="_blank"><i class="fa fa-vk"></i></a></li>
        <li><a href="https://www.instagram.com/sportclub_sdu/" target="_blank"><fa class="fa fa-instagram"></fa></a></li>
       <!--  <li><a href="https://github.com/alexdevero" target="_blank"><i class="fa fa-github"></i></a></li> -->
        <li><a href="https://twitter.com/sport_club_sdu" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="user_login.php" method="post">

      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username" placeholder="Login" required />
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********" required />
      </div>

      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Sign In" />
          </li>
          <li>
            <a class="signup__link" href="signup.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
  
  
</body>
</html>
