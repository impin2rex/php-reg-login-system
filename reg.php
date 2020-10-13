<?php

ini_set('sendmail_path', '/usr/sbin/sendmail');
ini_set('smtp_server', 'smtp.gmail.com');
ini_set('smtp_port', '587');
ini_set('sendmail_from', 'your@gmail.com');
ini_set('mail.add_x_header', 'off');
ini_set('smtp_ssl', 'auto');
ini_set('auth_username', 'your@gmail.com');
ini_set('auth_password', 'your_password');
ini_set('force_sender', 'your@gmail.com');   //For Gmail SMTP

session_start();

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
      <style>
        body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      }
      main {
      flex: 1 0 auto;
      }
      .input-field input[type=date]:focus + label,
      .input-field input[type=text]:focus + label,
      .input-field input[type=email]:focus + label,
      .input-field input[type=password]:focus + label {
      color: #e91e63;
      }
      .input-field input[type=date]:focus,
      .input-field input[type=text]:focus,
      .input-field input[type=email]:focus,
      .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
      }
      </style>
    </head>
    <body>
      <?php

      include 'dbcon.php';

      if(isset($_POST['submit'])){
      $name = mysqli_real_escape_string($con, $_POST['name']) ;
      $email = mysqli_real_escape_string($con, $_POST['email']) ;
      $mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
      $pass = mysqli_real_escape_string($con, $_POST['pass']) ;
      $cpass = mysqli_real_escape_string($con, $_POST['cpass']) ;
      $password = password_hash($pass, PASSWORD_BCRYPT);
      $cpassword = password_hash($cpass, PASSWORD_BCRYPT);

      $token = bin2hex(random_bytes(15));

      $emailquery = " SELECT * FROM signup WHERE email='$email' ";
      $query = mysqli_query($con, $emailquery);
      $emailcount = mysqli_num_rows($query);
      if($emailcount>0){
        ?>
        <script>
        alert ("Email already exists!");
        </script>
        <?php
      }else{
      if($pass === $cpass){
      $insertquery = " INSERT INTO signup( name, email, mobile, pass, cpass, token, status) VALUES('$name','$email','$mobile','$password','$cpassword','$token','inactive')";
      $iquery = mysqli_query($con, $insertquery);
      if($iquery){
        
        $subject = "Email Activation";
        $body = "Hi, $name. Click here too activate your account http://localhost/activate.php?token=$token";
        $sender_email = "From: your@gmail.com";

        if(mail($email, $subject, $body, $sender_email)){
          $_SESSION['msg'] = "Check your mail to activate your account $email";
          header('location:login.php');
        }else{
          ?>
        <script>
        alert ("Email Sending Failed...");
        </script>
        <?php
        }

      }else{
      
        ?>
        <!-- <script>
            alert("Password Not Matching!");
        </script> -->
      <?php
      }
      }
      else{
        ?>
        <script>
        alert ("Password Not Matching!");
        </script>
        <?php
      }
      }
    }
      ?>
      <div class="section"></div>
      <main>
        <center>
        <a href="index.php"><img class="responsive-img" style="width: 70px; height: 70px;" src="images/appointify.svg"/></a>
        <div class="section"></div>
        <h5 class="card-panel teal lighten-2">Welcome to Appointify</h5>
        
        <div class="container" id="login-box">
          <div class="z-depth-1 grey lighten-4 row" id ="darklog" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
            <form class="col s12" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="login-form" method="POST">
              <div class='row'>
                <div class='col s12'>
                </div>
              </div>
              <div class='row'>
                <div class='input-field col s12'>
                  <input class='validate' type='text' name='name' id='name' required/>
                  <label for='name'>Enter your Name</label>
                </div>
              </div>
              <div class='row'>
                <div class='input-field col s12'>
                  <input class='validate' type='email' name='email' id='email' required/>
                  <label for='email'>Enter your email</label>
                </div>
              </div>
              <div class='row'>
                <div class='input-field col s12'>
                  <input class='validate' type='text' name='mobile' id='mobile' required/>
                  <label for='mobile'>Enter your Phone No.</label>
                </div>
              </div>
              
              <div class='row'>
                <div class='input-field col s12'>
                  <input class='validate' type='password' name='pass' id='pass' />
                  <label for='password'>Enter your password</label>
                </div>
              </div>
              <div class='row'>
                <div class='input-field col s12'>
                  <input class='validate' type='password' name='cpass' id='cpass' />
                  <label for='password'>Repeat your password</label>
                </div>
                <label style='float: right;'>
                  <a class='pink-text' href='login.php'><b>Already a member!</b></a>
                </label>
              </div>
              <br />
              <center>
              <div class='row'>
                <button type='submit' name='submit' class='col s12 btn btn-large waves-effect indigo'>Regester Here</button>
              </div>
              </center>
              <div class="container">
                <div class="row">
                  <div class="col m8 offset-m2 s12">
                    
                    <a class="btn dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i>Toggle</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        </center>
        <div class="section"></div>
        <div class="section"></div>
      </main>
      <script src="js/dark.js"></script>  //Dark mode script
    </body>
  </html>