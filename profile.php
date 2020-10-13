<?php
session_start();

if(!isset($_SESSION['username'])){
  echo "You are logged out!";
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <html lang="en">
      
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" href="images/favicon.ico" type="image/ico" />
      <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
      <title>Appointify - An usefull guidance to find doctors</title>
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- JQuery CDN -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/dark.css">
    </head>
<!-- Start Parallax Header -->
<header>
 <!-- Dropdown Structure -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="login.php">Login</a></li>
        <li class="divider"></li>
        <li><a href="reg.php">Join</a></li>
        <li class="divider"></li>
        <li><a href="#!">Contact</a></li>
        <li><a class="dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i> Toggle Dark Mode</a></li>
        <li><a href="logout.php" class="btn waves-effect waves-light blue white-text">Log Out</a></li>
      </ul>
      
      <nav>
        <div class="nav-wrapper container">
          <!-- <a href="index.html" class="brand-logo left"><img class="responsive-img" id="logo" src="images/favicon.ico" /></a> -->
          <a href="index.php" class="brand-logo"><img class="responsive-img" id="logo" src="images/favicon.ico" /></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Doctor</a></li>
            <li><a href="#l">Tell us problems</a></li>
            <li><a href="reg.php">Join</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="#">Contact</a></li>
            <li><a class="dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i> Toggle Dark Mode</a></li>
            <li><a href="logout.php" class="btn waves-effect waves-light blue white-text">Log Out</a></li>
            
          </ul>
        </div>
      </nav>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Home</a></li>
        <li><a href="#">Doctor</a></li>
        <li><a href="#l">Tell us problems</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">More<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
</header>
<!-- End Parallax Header -->

<!-- Start Parallax  -->
  <div class="parallax-container">
    <div class="parallax"><img src="images/online_doc.svg" class="responsive-img" alt="Parallax"></div>
  </div>
  <div class="section">
    <div class="row container">
      <h2 class="header">Hi <?php  echo  $_SESSION['username']; ?></h2>
      <p class="grey-text text-darken-3 lighten-3">Let's report your problem to us without any hesitation, Our doctors are 24x7 available for you.</p>
    </div>
    <div class="row container">
      <h4 class="light">Now Appointment with Doctor is simpler!</h4>
      <p align="justify">
       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
       industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
       scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
       into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
       release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
       software like Aldus PageMaker including versions of Lorem Ipsum.</p>
       <h4 class="light">You can chat with us!</h4>
       <p align="justify">
       "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
       dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
       ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
       fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
       mollit anim id est laborum."</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/hospital.svg" class="responsive-img" alt="Parallax"></div>
  </div>
<!-- End Parallax  -->

<script src="js/dark.js"></script>

<!-- Start Parallax Javascript -->
<script type="text/javascript">
  $(document).ready(function(){
          $('.sidenav').sidenav();
          });
        $.each($('.dropdown-trigger'), function(index, value) {
        $(value).dropdown();
          });

  $(document).ready(function(){
      $('.parallax').parallax();
  });
</script>
<!-- EndParallax Javascript -->
</body>
</html>