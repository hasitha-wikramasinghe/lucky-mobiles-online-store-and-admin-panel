<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'luckymobiles');

$Uname = $_POST['uname'];
$Pass = $_POST['password'];
$Email = $_POST['email'];
$address = $_POST['address'];
$postalCode = $_POST['postalCode'];
$telephone = $_POST['telephone'];


$s = "select * from users where uName = '$Uname'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Username Already Taken!";
}else{
	$reg = "insert into users (uName, pWord, eMail,address,postalCode,telephone ) values ('$Uname','$Pass','$Email','$address','$postalCode','$telephone')";
	mysqli_query($con, $reg);
	echo "<script>location.href='regSuccess.php'</script>";
}

?>