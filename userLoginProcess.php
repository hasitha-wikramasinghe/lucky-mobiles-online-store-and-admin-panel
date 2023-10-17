<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'luckymobiles');

$Uname = $_POST['uname'];
$Pass = $_POST['pass'];


$s = "select * from users where uName = '$Uname' && pWord ='$Pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num>0) {
	$se = $con->query("SELECT * from users WHERE uName='$Uname';")or die($con->error());
	$row = $se->fetch_array();
	$_SESSION['username'] = $row['uName'];
	$_SESSION['id'] = $row['id'];
	// $_SESSION['username'] = $Uname;
	header('location:cart.php');
}else{
	header('location:userLogin.php');
}

?>