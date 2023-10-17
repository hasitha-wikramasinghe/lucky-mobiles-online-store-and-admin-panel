<?php 
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
    
	<title>Lucky Mobiles</title>
</head>
<body>
		<div class="top-nav-bar">
			<div class="search-box">
				<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
                <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
				<img src="img/logo3.jpg" class="logo" onclick="runhome()">
				<input type="text" name="search" class="form-control">
				<a onclick="searchitem();"><span class="input-group-text"><i class="fa fa-search"></i></span></a>
			</div>
			<div class="menu-bar">
				<ul>
					<li class="cartli"><a href="cart.php"><i class="fa fa-cart-plus"></i>Cart (<span>0</span>)</a></li>
					
					<li><a href="userRegis.php">Sign Up</a></li>
					<li><a href="userLogin.php">Log In</a></li>
				</ul>
			</div>
		</div>
<section class="header">
	<div class="side-menu list-group" id="side-menu">
		  <?php $con = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($con));
		        $result = $con->query("SELECT * FROM brands") or die(mysqli_error($con)); 
		  ?>
		<ul>
			<?php while($row = $result->fetch_array()): 
				$data = $row['id'];
				?>
			     <li><a onClick="selectitem(<?php print $data;?>);" > <?php echo $row['brandName'] ?> </a></li>
			<?php endwhile; ?>
            <!-----<li>Samsung<i class="fa fa-angle-right"></i>
               <ul>
               	<li>Galaxy S series</li>
               	<li>Galaxy Note series</li>
               	<li>Galaxy M series</li>
               	<li>Galaxy J series</li>
               	<li>Galaxy A series</li>
               </ul>
			</li>
			<li>Sony<i class="fa fa-angle-right"></i>
               <ul>
               	<li>Xperia Z series</li>
               	<li>Xperia X series</li>
               	<li>Xperia T series</li>
               	<li>Xperia S series</li>
               </ul> 
			</li>
			<li>Huawei<i class="fa fa-angle-right"></i>
               <ul>
               	<li>P series</li>
               	<li>T series</li>
               	<li>U series</li>
               </ul>
			</li>
			<li>Nokia</li>
			<li>Xiomi</li>
			<li>Vivo</li>
			<li>Tablets<i class="fa fa-angle-right"></i>
               <ul>
               	<li>Ipad</li>
               	<li>Samsung</li>
               	<li>Nokia</li>
               </ul>
			</li>
			<li>Speakers</li>
			<li>Headphones</li>
			<li>Chargers</li>----->
		</ul>
	</div>
	<div class="slider" id="menu">
	   <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
	   	 	<div class="carousel-inner">
         <div class="carousel-item active">
          <img src="img/newS.jpg" class="d-block w-100 sliderImg" >
         </div>
         <div class="carousel-item">
           <img src="img/newS1.jpg" class="d-block w-100 sliderImg" alt="...">
         </div>
         <div class="carousel-item">
          <img src="img/newS2.jpg" class="d-block w-100 sliderImg" alt="...">
         </div>
         <div class="carousel-item">
          <img src="img/newS3.jpg" class="d-block w-100 sliderImg" alt="...">
         </div>
         </div>
            <ol class="carousel-indicators">
                 <li data-target="#slider" data-slide-to="0" class="active"></li>
                 <li data-target="#slider" data-slide-to="1"></li>
                 <li data-target="#slider" data-slide-to="2"></li>
                 <li data-target="#slider" data-slide-to="3"></li>
            </ol> 	
      </div>
	</div>
	<div class="results" style="display:none">
	    <div class="container-fluid">
		   <div class="row" id="proditm">
		   
		   </div>
		</div>
	</div>
</section>
<!------------------------------------Trending------------------------------------------------------------------>
<!-------<br>
<section class="featured-categories">
	<h1 class="fetured-head">Trending In Lucky Mobiles</h1>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="img/tr_11_128.jpg">
				<div class="product-bottom text-center">
					<p>Iphone 11</p>
				</div>
			</div>	
			<div class="col-md-3">
				<img src="img/tr_11promax128.png">
				<div class="product-bottom text-center">
					<p>Iphone 11 Pro Max</p>
				</div>
			</div>	
			<div class="col-md-3">
				<img src="img/tr_asus.jpg">
				<div class="product-bottom text-center">
					<p>Asus Rog 2</p>
				</div>
			</div>	
			<div class="col-md-3">
				<img src="img/tr_galaxyS10_lite.jpg">
				<div class="product-bottom text-center">
					<p>Galaxy S10 Lite</p>
				</div>
			</div>
			<div class="row">
			<div class="col-md-3">
				<img src="img/tr_11pr0512.jpg">
				<div class="product-bottom text-center">
					<p>Iphone 11 Pro</p>
				</div>
			</div>	
			<div class="col-md-3">
				<img src="img/tr_oneplus7T.png">
				<div class="product-bottom text-center">
					<p>OnePlus 7T</p>
				</div>
			</div>	
			<div class="col-md-3">
				<img src="img/tr_redmi8.png">
				<div class="product-bottom text-center">
					<p>Redmi Note 8</p>
				</div>
			</div>	
			<div class="col-md-3">
				<img src="img/tr_xs.jpg">
				<div class="product-bottom text-center">
					<p>Iphone XS</p>
				</div>
			</div>
		</div>
	</div>
	

</section>----------------------->
<!------------------------------------New Arrivals------------------------------------->
<br>
<section class="new-arrivals">
	<div class="container">
		<div class="title-box">
			<h1 class="new-arrivals-head">New Arrivals</h1>
		</div>
		<?php 
		    $con = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($con));
		    $result = $con->query("SELECT * FROM newcoming") or die(mysqli_error($con));
		?>
		<div class="row">
			<?php 
			   while($row = $result->fetch_array()):
			?>
			<div class="col-md-3">
				<div class="product-top">
					<div class="img"><?php echo '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style="width:100%;">'; ?></div>
					<div class="overlay-right">
						<button type="button" name="Add" class="new_arrival btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
						<input type="hidden" name="productId" >
					</div>
				</div>
				<div class="product-bottom text-center">
					<p><?php echo $row['productName']; ?></p>
					<p>Rs. <?= number_format($row['productPrice']) ?></p>
				</div>
			</div>
			   <?php endwhile; ?>
			<!----<div class="col-md-3">
				<div class="product-top">
					<img src="img/newA_nokia_c1.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p>Nokia C1</p>
					<p>Rs.11,000.00</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<img src="img/newA_oneplus_7_pro.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p>OnePlus 7 Pro</p>
					<p>Rs.137,900.00</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<img src="img/newA_oppo_A9_new.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p>Oppo A9 2020</p>
					<p>Rs.48,900.00</p>
				</div>
			</div>
			<div class="row">
			<div class="col-md-3">
				<div class="product-top">
					<img src="img/newA_oppo_reno_10x_zoom.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p>Oppo Erno 10X Zoom</p>
					<p>Rs.139,900.00</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<img src="img/newA_redmi_note_9ProMax_new.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p>Redmi Note 9 Pro Max</p>
					<p>Rs.103,000.00</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<img src="img/newA_vivo_s1_pro_new.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p>Vivo S1 Pro</p>
					<p>Rs.48,990.00</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product-top">
					<img src="img/newA_vivo_y85.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p>Vivo Y85</p>
					<p>Rs.35,490.00</p>
				</div>
			</div>
		</div>
		</div>----->
	</div>
</section>
<!--------------------------------------Product-slider Android mobiles -------------------------------->
<br>
<section class="product-slider"> 
<div class="android-phones">
	<h1 class="new-arrivals-head">Android Mobile Phones</h1>
	<br>
	<?php 
	 	  $mysqli = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($mysqli));
	   $result = $mysqli->query("SELECT * FROM allproducts WHERE catName='Android';") or die(mysqli_error($mysqli));
 	?>
<div class="wrapper">
        <div class="owl-carousel owl-theme">
		<?php 
	    while ($row = $result->fetch_array()):  ?>
            <div class="item">
			     <div class="product-top slider-pro">
					<div class="img"><?php echo '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style="width:100%;">'; ?></div>
					<div class="overlay-right">
					 <button type="button" class="add_Cart btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
							</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p><?php echo $row['productName'] ?></p>
					<p>Rs. <?= number_format($row['productPrice']) ?></p>
				</div>
			 </div>
		<?php endwhile;  ?>

			 </div>
            <!----<div class="item">
			      <div class="product-top slider-pro">
					<img src="img/tr_galaxyS10_lite.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Galaxy S10 Lite</p>
					<p>Rs.114,990.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/newA_oneplus_7_pro.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>OnePlus 7 Pro</p>
					<p>Rs.137,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/mi_note_10.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Xiaomi Mi Note 10 Lite</p>
					<p>Rs.92,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/poco_f2_pro.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Poco F2 Pro 5G</p>
					<p>Rs.125,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/Galaxy-M31.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Galaxy M31</p>
					<p>Rs.54,990.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/huawe_y7.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Huawei Y7p</p>
					<p>Rs.32,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/S20-Ultra-600x600.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Galaxy S20 Ultra</p>
					<p>Rs.239,900.00</p>
				   </div>
			 </div>
             <div class="item">
			     <div class="product-top slider-pro">
					<img src="img/galaxy-a51.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Galaxy A51</p>
					<p>Rs.59,990.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/Mate-30-Pro.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Mate 30 Pro</p>
					<p>Rs.154,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/Realme-X2-Pro-White-600x600.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Realme X2 Pro</p>
					<p>Rs.89,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/a5-2020.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Oppo A5 2020</p>
					<p>Rs.28,500.00</p>
				   </div>
			 </div>--->
    </div>
</div>
</section>

<!--------------------------------------Product-slider Iphones-------------------------------->
<br>
<section class="product-slider"> 
  <div class="android-phones">
	<h1 class="new-arrivals-head">Apple Iphones</h1>
	<br>
    <div class="wrapper">
	<?php 
	   $con = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($con));
	   $result = $con->query("SELECT * FROM allproducts WHERE catName='Apple';") or die(mysqli_error($con));
	?>
        <div class="owl-carousel owl-theme">
		   <?php while($row = $result->fetch_array()): ?>
            <div class="item">
			     <div class="product-top slider-pro">
					<div class="img"><?php echo '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style="width:100%;">'; ?></div>
					<div class="overlay-right">
						<button type="button" class="add_Cart btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				<div class="product-bottom text-center">
					<p><?php echo $row['productName'] ?></p>
					<p>Rs. <?= number_format($row['productPrice']) ?></p>
				</div>
			 </div>
		   <?php endwhile; ?>
            <!----<div class="item">
			      <div class="product-top slider-pro">
					<img src="img/iphone_7p.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone 7 plus</p>
					<p>Rs.74,990.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/iphone_8-new.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone 8</p>
					<p>Rs.109,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/iphone_8p-new.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone 8 plus</p>
					<p>Rs.119,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/x.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone X</p>
					<p>Rs.168,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/Xr.jpeg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone Xr</p>
					<p>Rs.134,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/Xs.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone Xs</p>
					<p>Rs.134,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/xs_max.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone Xs Max</p>
					<p>Rs.168,900.00</p>
				   </div>
			 </div>
             <div class="item">
			     <div class="product-top slider-pro">
					<img src="img/i11.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone 11</p>
					<p>Rs.184,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/i11Pro.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone 11 pro</p>
					<p>Rs.234,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/i11promax.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Iphone 11 pro max</p>
					<p>Rs.259,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/newA_nokia_c1.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Nokia C1</p>
					<p>Rs.11,000.00</p>
				   </div>
			 </div>----->
        </div>
    </div>
  </div>
</section>

<!--------------------------------------Product-slider Tablets-------------------------------->
<br>
<section class="product-slider"> 
  <div class="android-phones">
	<h1 class="new-arrivals-head">Tablets</h1>
	<br>
    <div class="wrapper">
	<?php 
	   $con = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($con));
	   $result = $con->query("SELECT * FROM allproducts WHERE catName='Tablets';")or die(mysqli_error($con));
	?>
        <div class="owl-carousel owl-theme">
		   <?php while($row = $result->fetch_array()): ?>
            <div class="item">
			     <div class="product-top slider-pro">
					<div class="img"><?php echo '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style="width:100%;">'; ?></div>
					<div class="overlay-right">
						<button type="button" class="add_Cart btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				<div class="product-bottom text-center">
					<p><?php echo $row['productName'] ?></p>
					<p>Rs. <?= number_format($row['productPrice']) ?></p>
				</div>
			 </div>
		   <?php endwhile; ?>
		   
             <!---<div class="item">
			      <div class="product-top slider-pro">
					<img src="img/Samsung_Galaxy_Tab_S2_9.7-Genius-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Galaxy Tab S2</p>
					<p>Rs.54,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/apple-ipad-air-3-10-5-2019-64gb-4g-space-gray-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>iPad Air 3 (2019)</p>
					<p>154,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/ipad-pro-10-5-800x684-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>iPad 7 | 10.2″</p>
					<p>Rs.109,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/Galaxy-Tab-A-8-Genius-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Samsung Galaxy Tab A 8.0 </p>
					<p>Rs.39,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/Samsung-Galaxy-Tab-S6-LTE-SM-T865-128GB-Mountain-Grey-8806090079061-12082019-001-p-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Galaxy Tab S6</p>
					<p>Rs.144,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/m5-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>MediaPad M5 Lite</p>
					<p>Rs.52,500.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/51UNKWP4ZRL._SL1000_-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>MediaPad T3</p>
					<p>Rs.34,900.000</p>
				   </div>
			 </div>
             <div class="item">
			     <div class="product-top slider-pro">
					<img src="img/1552994671_1468022-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>iPad Mini 5 (2019)</p>
					<p>Rs.**,***.**</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/mi-pad-4-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Mi Pad 4</p>
					<p>Rs.39,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/tab-7-300x300.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Samsung Tab A 7.0 T285</p>
					<p>Rs.**,***.**</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/ipad6.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>iPad 6</p>
					<p>Rs.69,900.00</p>
				   </div>
			 </div>----->
		</div>	 
    </div>
</div>
</section>

<!--------------------------------------Product-slider others -------------------------------->
<br>
<section class="product-slider"> 
   <div class="android-phones">
	<h1 class="new-arrivals-head">Other Accessories</h1>
	<br>
	<?php 
	  $con = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($con));
	  $result = $con->query("SELECT * FROM allproducts WHERE catName='Other';") or die(mysqli_error($con));
	?>
    <div class="wrapper">
        <div class="owl-carousel owl-theme">
			<?php 
			 while ($row = $result->fetch_array()):
			?>
            <div class="item">
			     <div class="product-top slider-pro">
					<div class="img"> <?php echo '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style="width:100%;">'; ?></div>
					<div class="overlay-right">
						<button type="button" class="add_Cart btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				</div>
				<div class="product-bottom text-center">
					<p><?php echo $row['productName'] ?></p>
					<p>Rs. <?= number_format($row['productPrice']) ?></p>
				</div>
			 </div>
			 <?php endwhile; ?>
            <!--- <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/jbl_ep.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>JBL Tune 500BT</p>
					<p>Rs.10,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/jbl_ep1.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>JBL Endurance RUN</p>
					<p>Rs.8,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/airpod_ep.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Apple AirPods Pro</p>
					<p>Rs.59,900.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/jbl_spe.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>JBL Flip 4</p>
					<p>Rs.16,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/mi_power_bank.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Mi Powerbank 3</p>
					<p>Rs.7,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/smart_watch_new.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Galaxy Active2</p>
					<p>Rs.57,900.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/anker.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Anker PowerDrive+ 2</p>
					<p>Rs.2,750.00</p>
				   </div>
			 </div>
             <div class="item">
			     <div class="product-top slider-pro">
					<img src="img/anker2.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Anker PowerPort 60W</p>
					<p>Rs.5,750.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/apple_power_adapter.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Apple 45W Power Adapter</p>
					<p>Rs.12,500.00</p>
				   </div>
			 </div>
             <div class="item">
			       <div class="product-top slider-pro">
					<img src="img/wireless_mouse.png">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Mi Wireless Mouse</p>
					<p>Rs.3,450.00</p>
				   </div>
			 </div>
             <div class="item">
			      <div class="product-top slider-pro">
					<img src="img/wireless_charging_pad.jpg">
					<div class="overlay-right">
						<button type="button" class="btn btn-info" title="Add To Cart">
							<i class="fa fa-cart-plus"></i>
						</button>
					</div>
				  </div>
				   <div class="product-bottom text-center">
					<p>Mi Wireless Charging Pad</p>
					<p>Rs.6,900.00</p>
				   </div>
		           </div>---->
      </div>
    </div>
  </div>
</section>
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
<?php 
  $con = new mysqli('localhost','root','','luckymobiles')or die($con->error());
 
  if(isset($_POST['addcart'])){
	  $id = $_GET['id'];
	  $result = $con->query("SELECT * FROM allProudcts WHERE id=$id")or die(mysqli_error($con));
	  $row = $result->fetch_array();
	  $proName = $row['productName'];
	  $proPrice = $row['productPrice'];
      $con->query("INSERT INTO cart (productName, productPrice) VALUES ('$proName','$proPrice')")or die(mysqli_error($con));
  } 
?>


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

	function selectitem(id){
		$.ajax({
           type: "POST",
           url: "filter.php",
           data: {  
              id:id
           },
           dataType: "json",
           success: function(data){
				$('#menu').css("display",'none');
				$('.results').css("display", '');
				$("#proditm").empty();
				var len = data.length;

				for(var x = 0; x < len; x++){

				var e = "<div class='col-md-3'>"+
				"<div class='product-top'>"+
				"<div class='img'><img src='data:image;base64,"+data[x]['image']+"' alt='' style='width:100%'></div>"+
				"<div class='overlay-right'>"+
				"<button type='button' name='Add' class='btn btn-info' title='Add To Cart'>"+
				"<i class='fa fa-cart-plus'></i>"+
				"</button>"+
				"<input type='hidden' name='productId' >"+
				"</div>"+
				"</div>"+
				"<div class='product-bottom text-center'>"+
				"<p>"+data[x]['productName']+"</p>"+
				"<p>Rs."+data[x]['productPrice']+"</p>"+
				"</div>"+
				"</div>";

				$("#proditm").append(e);

				}

				
		   }   
        });
	}

	function runhome(){
		$('#menu').css("display",'');
		$('.results').css("display", 'none');
	}

</script>
<!-- script for sliders -->
<script type="text/javascript">
	 let carts = document.querySelectorAll('.add_Cart');

	 <?php
	//bind to $name
	$con = new mysqli('localhost','root','','luckymobiles');
    $result = mysqli_query($con,"SELECT productName, productPrice, inCart FROM allProducts");

    //put all of the resulting names into a PHP array
    $result_array = Array();
	while($query2 = mysqli_fetch_array($result)){
		array_push($result_array, $query2,);
	}
    //convert the PHP array into JSON format, so it works with javascript
    $array = json_encode($result_array);
	?>

	let products = <?php echo $array; ?>
 

         for (let i=0; i < carts.length; i++){
          carts[i].addEventListener('click', () => {
		         cartNumbers(products[i]);
		  })
		} 
		   
		 function onLoadCartNumbers(){
			let productNumbers = localStorage.getItem('cartNumbers');
			
			if(productNumbers){
				document.querySelector('.cartli span').textContent = productNumbers;
			}
		 }  

         function cartNumbers(product) {
	 
           let productNumbers = localStorage.getItem('cartNumbers');
                
            productNumbers = parseInt(productNumbers);
			
			if(productNumbers){
				localStorage.setItem('cartNumbers', productNumbers + 1);
				document.querySelector('.cartli span').textContent = productNumbers + 1;
			}else{
				localStorage.setItem('cartNumbers', 1);
				document.querySelector('.cartli span').textContent = 1; 
			}
			setItems(product);
		  }  
		   function setItems(product){
			   console.log("Inside of setItem function");
			   console.log("My produect is", product)
		   }
		  onLoadCartNumbers();	      

</script>
<!-- script for new arrivals -->
<script type="text/javascript">
	 let carts1 = document.querySelectorAll('.new_arrival');

	 <?php
	//bind to $name
	$con = new mysqli('localhost','root','','luckymobiles');
    $result = mysqli_query($con,"SELECT productName, productPrice FROM newcoming");

    //put all of the resulting names into a PHP array
    $result_array = Array();
	while($query2 = mysqli_fetch_array($result)){
		array_push($result_array, $query2,);
	}
    //convert the PHP array into JSON format, so it works with javascript
    $array = json_encode($result_array);
	?>

	let products1 = <?php echo $array; ?>
 

         for (let i=0; i < carts1.length; i++){
          carts1[i].addEventListener('click', () => {
		         cartNumbers(products1[i]);
		  })
		} 
		   
		 function onLoadCartNumbers(){
			let productNumbers = localStorage.getItem('cartNumbers');
			
			if(productNumbers){
				document.querySelector('.cartli span').textContent = productNumbers;
			}
		 }  

         function cartNumbers(product) {
	 
           let productNumbers = localStorage.getItem('cartNumbers');
                
            productNumbers = parseInt(productNumbers);
			
			if(productNumbers){
				localStorage.setItem('cartNumbers', productNumbers + 1);
				document.querySelector('.cartli span').textContent = productNumbers + 1;
			}else{
				localStorage.setItem('cartNumbers', 1);
				document.querySelector('.cartli span').textContent = 1; 
			}
			setItems(product);
		  }  
		   function setItems(product){
			   console.log("Inside of setItem function");
			   console.log("My produect is", product);
		   }
		  onLoadCartNumbers();	      

</script>

	
<script src="js/owl.carousel.min.js"></script>
<script src="js/myjquery.js"></script>
<!-- <script src="js/cart.js"></script> -->
</body>
</html>