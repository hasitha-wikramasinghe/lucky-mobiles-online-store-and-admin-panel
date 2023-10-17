<!DOCTYPE html>
<html>
<head>
	<title>Registration | Login</title>
	<link rel="stylesheet" type="text/css" href="styleMob.css">
	<link rel="stylesheet" type="text/css" href="userLoginStyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
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
					<li class="cartli"><a href="cart.php"><i class="fa fa-cart-plus"></i>Cart (<span>0</span>)</a></li>
					<li><a href="">Sign Up</a></li>
					<li><a href="userLogin.php">Log In</a></li>
				</ul>
			</div>
		</div>
		<!-------------------------Form User Register----------------------->
		<div class="container-fluid">
        <div class="row">
 	    <div class="col-md-2">
 		
     	</div>
 	    <div class="col-md-8">
        <section class="userReg">
        <div class="regis-box">
 	    <h2 class="text-center" >Register Here!</h2>
     	<form action="userRegProcess.php" method="POST">
 		<div class="textboxR">
 			<label class="labelR">User Name</label>
 			<input type="text" class="txtR" placeholder="Username" name="uname" value="">
 		</div>
 		<div class="textboxR">
 			<label class="labelR">Password</label>
 			<input type="password" class="txtR" placeholder="Password" name="password" value="">
 		</div>
 		<div class="textboxR">
 			<label class="labelR">Email Address</label>
 			<input type="text" class="txtR" placeholder="Email" name="email" value="">
		 </div>
		 
		 <div class="textboxR">
 			<label class="labelR">Address</label>
 			<input type="text" class="txtR" placeholder="Address" name="address" value="">
		 </div>
		 
		 <div class="textboxR">
 			<label class="labelR">Postal Code</label>
 			<input type="text" class="txtR" placeholder="Postal Code" name="postalCode" value="">
		 </div>
		 
		 <div class="textboxR">
 			<label class="labelR">Mobile No</label>
 			<input type="text" class="txtR" placeholder="Mobile No" name="telephone" value="">
 		</div>
 		
 		<input class="btn-successR" type="submit" id="btnLogin" value="Register">
 	    </form>
        </div>
        </section>
        </div>
        <div class="col-md-2">
 		
 	    </div>
        </div>
        </div>

        <div class="userRegLink">
 	   <p>Do You want to Login? <a href="userLogin.php">Login here</a></p>
       </div>

<!----------------------------------Footer---------------------------------->
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
</section>----->

<script>
	function openmenu(){
		document.getElementById("side-menu").style.display="block";
		document.getElementById("menu-btn").style.display="none";
		document.getElementById("close-btn").style.display="block";
	}
	function closemenu(){
		document.getElementById("side-menu").style.display="none";
		document.getElementById("menu-btn").style.display="block";
		document.getElementById("close-btn").style.display="none";
	}
</script>
<script type="text/javascript">
  function cartNumbers() {
           let productNumbers = localStorage.getItem('cartNumbers');
                
            productNumbers = parseInt(productNumbers);
			
			if(productNumbers){
				document.querySelector('.cartli span').textContent = productNumbers + 1;
			}else{
				document.querySelector('.cartli span').textContent = 1; 
			}
		  }  
  function onLoadCartNumbers(){
			let productNumbers = localStorage.getItem('cartNumbers');
			
			if(productNumbers){
				document.querySelector('.cartli span').textContent = productNumbers;
			}
		 }  
		  onLoadCartNumbers();
</script>

</body>
</html>