<?php
	session_start();	
	unset($_SESSION['admin']);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SCS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <!--link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'-->

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
  <form method="POST" action="check.php">     
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
        
          <input type="text" class="login__input name" required placeholder="Username" name="username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" required placeholder="Password" name="password"/>
        </div>
       
        <?php
        		/*echo  "<label style='color:white; font-size:15px'>";
        	     	echo $_SESSION['status'];
        		echo "</label>";*/
        ?>
        
        <button type="submit" class="login__submit">Login</button>
      <br>
         </form>
      	<form action="register.php">
        <button type="submit" class="register__submit">Register</button>
     
      </form>
      </div>
    </div>
    <div class="app">
      <div class="app__top">
        <div class="app__menu-btn">
          <span></span>
        </div>
       
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
