<?php

      $user = $_POST['uName'];
      $password	= $_POST['password'];
      $nameini = $_POST['ininame'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
      $userpic = addslashes(file_get_contents($_FILES['userpic']['tmp_name']));
     

      $connection = mysqli_connect("localhost","root","","luckymobiles");

      $query = mysqli_query($connection,"INSERT INTO admin (userName, password, userPic, nameIni, telephone, email) VALUES('$user','$password','$userpic','$nameini','$telephone','$email')")
                    or die("Failed to connect database!".mysql_error());

?>
<!DOCTYPE html>
<html>
<head>
	<title> Success Registration</title>
</head>
<body style="background: url(image/mob3.jpg) no-repeat; background-size: cover;">
           <h1 style="text-align: center; color: blue;">Thank You For Registering!!!</h1>

<h2 style="text-align: center; color: blue; margin-top: 50px;">Now You Can Access Our Website!</h2>

<p style="margin-top: 30%; margin-left: 74%;">Do you want to login to our system? <a href="index.php" style="color: blue;">Login Here</a></p>
</body>
</html>
