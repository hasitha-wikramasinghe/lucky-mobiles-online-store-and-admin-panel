<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'luckymobiles');

$id = $_POST['id'];

$s = "select productName, productPrice, TO_BASE64(productImg) AS image from allproducts where brandName = '$id' ";

$result = mysqli_query($con, $s);

$raw = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($raw);

?>