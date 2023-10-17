<!DOCTYPE html>
<html>
<head>
	<title>Registration Success</title>
    <link rel="stylesheet" type="text/css" href="styleMob.css">
	<link rel="stylesheet" type="text/css" href="userLoginStyle.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="succBody">
	<div class="top-nav-bar">
			<div class="search-box">
				<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
                <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
				<a href="index.php"><img src="img/logo3.jpg" class="logo" style="width: 159px;"></a>
				<input type="text" class="form-control">
				<span class="input-group-text"><i class="fa fa-search"></i></span>
			</div>
			<div class="menu-bar">
				<ul>
					<li><a href=""><i class="fa fa-cart-plus"></i>Cart</a></li>
					<li><a href="">Sign Up</a></li>
					<li><a href="userLogin.php">Log In</a></li>
				</ul>
			</div>
	</div>

      <div class="container">
      	<h1 class="text-center" style="color:blue;">Registration Success!</h1>
      	<img class="imgSucc" src="img/succ.jpg">
      </div>

<p class="userAccessLink">Do You want to log into Your Account? <a href="userLogin.php">Click here</a> </p>




<!-----------------------------------------footer------------------------------->
    <section class="footer">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-3">
				<h1>Developer Details</h1>
				<p ><i class="fa fa-instagram foot-icon"></i>Hasitha Wikramasinghe</p>
				<p><i class="fa fa-facebook foot-icon"></i>Hasitha Wikramasinghe</p>
				<p><i class="fa fa-whatsapp foot-icon"></i>0774249501</p>
			</div>
			<div class="col-md-3">
				<h1>Lucky Mobiles</h1>
				<p><a href="#">About Us</a></p>
				<p><a href="contact.php">Contact Us</a></p>
			</div>
			<div class="col-md-3">
				<h1>Follow Us On</h1>
				<p><i class="fa fa-instagram foot-icon"></i>Instagram</p>
				<p><i class="fa fa-facebook foot-icon"></i>Facebook</p>
				<p><i class="fa fa-whatsapp foot-icon"></i>WhatsApp</p>
			</div>
			<div class="col-md-3">
				<h1>Download App</h1>
				<img src="img/available2.png">
			</div>
		</div>
		<hr>
        <p class="copyright">Made by Hasitha Wikramasinghe<i class="fa fa-copyright foot-icon"></i></p>
	</div>
    </section>  
</body>
</html>