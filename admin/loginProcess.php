<?php 
     session_start();
     
     $con = mysqli_connect('localhost','root','');

     mysqli_select_db($con,'luckymobiles');

     $Uname = $_POST['username'];
     $Pass = $_POST['password'];

     $s = "select * from admin where userName = '$Uname' && password = '$Pass'";
     
     $result = mysqli_query($con,$s);

     $num = mysqli_num_rows($result);


     if($num>0){
         $se = $con->query("SELECT * FROM admin WHERE userName='$Uname';")or die(mysqli_error($con));
         $raw = $se->fetch_array();
         $_SESSION['adminname'] = $raw['userName'];
         $_SESSION['userpic'] = $raw['userPic'];
         $_SESSION['nameI'] = $raw['nameIni'];
         $_SESSION['telephone'] = $raw['telephone'];
         $_SESSION['email'] = $raw['email'];
        //  $_SESSION['username'] = $Uname;
         header('location:main.php');
     }else{
         header('location:index.php');
     }        

?>