<?php 

session_start();
if(!isset($_SESSION['adminname'])){
    header('location:userLogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin | Main</title>
	  <!---<link rel="stylesheet" type="text/css" href="adminStyle.css">---->
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
      <div class="logout"><a href="logout.php">LOGOUT</a></div>   
      <h1>Welcome <?php echo $_SESSION['adminname']; ?>!</h1>

<div class="side-menu">
    <ul>
       <li><a href="androidMobiles.php"><i class="fa fa-android"></i>  Android Phones</a></li>
       <li><a href="iphones.php"><i class="fa fa-apple"></i> Apple Iphones</a></li>
       <li><a href="tablets.php"><i class="fa fa-tablet"></i> Tablets</a></li>
       <li><a href="other.php"><i class="fa fa-opera"></i> Other Accessories</a></li>
       <li><a href="newComing.php"><i class="fa fa-handshake-o"></i> New Arrival Products</a></li>
       <li><a href="brands.php"><i class="fa fa-bolt"></i> Brands (To display on side bar)</a></li>
       <li><a href="users.php"><i class="fa fa-user"></i> Users</a></li>
       <li><a href=""><i class="fa fa-first-order"></i> Orders</a></li>
       <li><a href="inq.php"><i class="fa fa-commenting"></i> Inquiries</a></li>
    </ul>
</div>
<div class="slider">
    <div class="slider sli" id="menu">
	   <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
	   	 	<div class="carousel-inner">
         <div class="carousel-item active">
          <img src="image/newS.jpg" class="d-block w-100 sliderImg" >
         </div>
         <div class="carousel-item">
           <img src="image/newS1.jpg" class="d-block w-100 sliderImg" alt="...">
         </div>
         <div class="carousel-item">
          <img src="image/newS2.jpg" class="d-block w-100 sliderImg" alt="...">
         </div>
         <div class="carousel-item">
          <img src="image/newS3.jpg" class="d-block w-100 sliderImg" alt="...">
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
</div>
<div class="admin-info">
   <h4 class="text-center"> <?php echo $_SESSION['adminname']; ?> </h4>
   <div class="img" align="center"><?php echo '<img src="data:image;base64,'.base64_encode($_SESSION['userpic']).'" alt="Image" style="width:65%; height:150px; align:center;"'; ?></div>
   <p align="center"><?php echo $_SESSION['nameI'] ?></p>
   <h7 >Telephone:</h7><p>+94 <?php echo $_SESSION['telephone'] ?></p>
   <h7 >Email:</h7><p ><?php echo $_SESSION['email'] ?></p>
</div> 
     
</body>
</html>