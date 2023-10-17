<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location:userLogin.php');
}
?>

<html>
<head>
    <title> Welcome | <?=$_SESSION['username'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!--  jquery script  -->
	<script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styleMob.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
					<li><a href="userRegis.php">Sign Up</a></li>
					<li><a href="userLogin.php">Log In</a></li>
				</ul>
			</div>
		</div>
    <div class="logout"><a href="logout.php">LOGOUT</a></div>
    <h1 class="text-center new-arrivals-head">Welcome <?php echo $_SESSION['username']; ?> </h1> <br>
<div class="container-fluid">
  <div class="row">
     <div class="col-md-1"></div>
	 <div class="col-md-10">
	     <div class="justify-content-center">
		     <table class="table">
			      <thead>
				        <tr>
						    <th>Product Name</th>
							<th>Product Price</th>
							<th>Quantity</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
				  </thead> 
				        <tr>
						    <td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
			 </table>
		 </div>
	 </div>
	 <div class="col-md-1"></div>
  </div>
  <div class="row">
    <div class="col-md-2"></div>
	<div class="col-md-8">
	<?php 
			 $con = new mysqli('localhost','root','','luckymobiles')or die($con->error()); 
			 $useName = $_SESSION['username'];
			 $result = $con->query("SELECT * FROM users WHERE uName='$useName';")or die($con->error()); 
		   ?>
	    <div class="justify-content-center">
		<h5 class="text-center new-arrivals-head">My Profile</h5>
		<?php while($row = $result->fetch_array()):  ?>
		   <table class="table">
			        <tr>
					    <th>User Name</th>
						<td><?php echo $row['uName'] ?></td>
					</tr>
			        <tr>
					    <th>Email Address</th>
						<td><?php echo $row['eMail'] ?></td>
					</tr>
					<tr>
					    <th>Address</th>
						<td><?php echo $row['address'] ?></td>
					</tr>
					<tr>
					    <th>Telephone</th>
						<td>+94 <?php echo $row['telephone'] ?></td>
					</tr>
					<tr>
					    <th>Postal Code</th>
						<td><?php echo $row['postalCode'] ?></td>
					</tr> 
		   </table>
		<?php endwhile; ?>
		</div>
	</div>
	<div class="col-md-2"></div>
  </div>
</div>

<!--------------------------------------Footer-------------------------------->
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