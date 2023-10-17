<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleMob.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Contact | Lucky Mobiles</title>
</head>
<body class="contact-body">
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
					<li><a href="">Log In</a></li>
				</ul>
			</div>
		</div>

<!-------------------Contact Form--------------------------------->
<div class="contact-title">
	<h1>Say Hello</h1>
	<h2>We are always ready to help You!</h2>
</div>
<div class="container">
	<div class="row">
    <div class="col-md-6">
    <div class="contact-form">
	<form id="contact-form" method="post">
		<input type="text" name="name" class="form-control" placeholder="Your Name" required>
		<br>
		<input type="email" name="email" class="form-control" placeholder="Your Email" required>
		<br>
		<input type="text" name="message" class="form-control" placeholder="Enter Your Message" row="4" required>
		<br>
		<input type="submit" class="form-control submit" name="submit">
	</form>
	</div>
    </div>
    <div class="col-md-6">
    	<p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.2653059381496!2d80.27061731427581!3d6.737454995129477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3b754cbdd32dd%3A0x2a8fb47474bed59b!2sLucky%20Mobile!5e0!3m2!1sen!2slk!4v1588368169894!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
    </div>
</div>
</div>








<!------------------------Footer------------------------------------->
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
				<p><a href="#">Contact Us</a></p>
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
<?php 
   $con = new mysqli('localhost','root','','luckymobiles')or die(mysqli_error($con));

   if(isset($_POST['submit'])){
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $message = $_POST['message'];

	  $con->query("INSERT INTO inquiries (customerName, customerEmail, customersMsg) VALUES('$name','$email','$message')")or die(mysqli_error($con));
   }
?>
</html>