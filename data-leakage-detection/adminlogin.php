<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Leakage Detection</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="stylesheet.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="auth-main">
      <div>
        <h1 class="auth-head">GMA - ADMIN</h1>
        <img src="img/auth.png" alt="gma" />
      </div>
      <div class="auth-form">
        <h1>LOGIN</h1>
        <p>Not an admin? <a href="userlogin.php" style="color:white">Go back</a></p>
        <form name="s" action="check_login.php" method="POST" onsubmit="return valid()" class="l-form">
          <label for="username">Username</label>
		  <input type="text" name="username" id="username">
          <label for="password">Password</label>
		  <input type="password" name="password" id="username">
          <input type="submit" name="s" value="SUBMIT" class="b1 c-btn c-btn-2" >   
		</form>
      </div>
    </div>
  </body>
</html>