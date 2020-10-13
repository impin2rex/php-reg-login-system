<?php
session_start();
ob_start();
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
          $email = $_POST['email'];
          $pass = $_POST['pass'];

          $email_search= " SELECT * FROM signup WHERE email='$email' AND status='active' ";
          $query = mysqli_query($con, $email_search);

          $email_count = mysqli_num_rows($query);

          if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['pass'];

            $_SESSION['username'] = $email_pass['name'];

            $pass_decode = password_verify($pass, $db_pass);

            if($pass_decode){

              if(isset($_POST['rememberme'])){

                setcookie('emailcookie',$email,time()+86400);
                setcookie('passwordcookie',$pass,time()+86400);

                header('location:profile.php');
              }else{
                header('location:profile.php');
              }

             
            }else{
              ?>
              <script>
                alert("Password is incorrect");
              </script>
              <?php
            }
          }else{
            ?>
              <script>
                alert("Invalid Email!");
              </script>
              <?php
          }
        }

      ?>

			<div class="section"></div>
  <main>
    <center>
      <a href="index.php"><img class="responsive-img" style="width: 70px; height: 70px;" src="images/appointify.svg"/></a>
      <div class="section"></div>

      <h5 class="card-panel teal lighten-2"> <?php

        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
        }else{
          echo $_SESSION['msg'] = "You are logged out, Please login again.";
        }

      ?> </h5>
      

      <div class="container" id="login-box">
        <div class="z-depth-1 grey lighten-4 row" id ="darklog" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="login-form" method="POST">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie']; }?>" />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='pass' id='pass' value="<?php if(isset($_COOKIE['passwordcookie'])){echo $_COOKIE['passwordcookie'];}?>"/>
                <label for='pass'>Enter your password</label>
              </div>
    <div class="switch col s6">
    <label style='float: left;'>
    	<a class='green-text' href='#!'><b>Remember Me</b></a>
      <input type="checkbox" name="rememberme">
      <span class="lever"></span>
    </label>
</div>
				<div class="switch col s6">
              <label style='float: right;'>
								<a class='pink-text' href='recover_email.php'><b>Forgot Password?</b></a>
							</label>
						</div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='submit' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
            <div class="container">
    <div class="row">
      <div class="col m6 offset-m3 s12">
        
        <a class="btn dark-toggle" href="#" onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')" title="Dark/light"><i class="material-icons left">brightness_4</i>Toggle</a>
      </div>
    </div>
  </div>
          </form>
        </div>
      </div>
      <a href="reg.php">Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
  <script src="js/dark.js"></script>

		</body>
	</html>