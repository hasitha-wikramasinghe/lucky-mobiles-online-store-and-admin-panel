<!DOCTYPE html>
<html>
<head>
	<title>Admin | Login</title>
	<link rel="stylesheet" type="text/css" href="adminStyle.css">

</head>
<body>
      <div id="loginForm">
          <h1>Login</h1>
     	<form action="loginProcess.php" method="POST">
     	<div class="textbox">
     		<i class="fa fa-user" aria-hidden="true"></i>
     		<input type="text" id="username" name="username" placeholder="Username"></input>
     	</div>
     	<div class="textbox">
     		<i class="fa fa-lock" aria-hidden="true"></i>
     		<input type="password" id="password" name="password" placeholder="Password"></input>
     	</div>
     		<input class="btn" type="submit" id="btnLogin" value="Login">
          </form>
     </div>
     <div>
         <p id="regLink">Haven't Register Yet? <a href="register.php" style="color: yellow;">Register Here</a></p>
     </div>
</body>
</html>