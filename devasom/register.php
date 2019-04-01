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

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>

  <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
  <form method="POST" action="doregister.php">     
          <input type="text" class="login__input pass" required placeholder="Name" name="name"/>
      
        </div>
             <div class="login__row">
          <input type="email" class="login__input name" required placeholder="Email" name="email"/>
      
        </div>
            <div class="login__row">
          <input type="text" class="login__input name" required placeholder="Mobile" name="mob"/>
      
        </div>
              <div class="login__row">
          <input type="text" class="login__input name" required placeholder="Username" name="username"/>
      
        </div>
        

        <div class="login__row">
      
          <input type="password" class="login__input pass" required placeholder="Password" name="password"/>
        </div>
   
        <?php
        	/*	echo  "<label style='color:white; font-size:15px'>";
        	     	echo $_SESSION['status'];
        		echo "</label>";*/
        ?>
        
     
     <br>
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
