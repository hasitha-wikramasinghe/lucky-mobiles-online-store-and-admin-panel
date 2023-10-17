<!DOCTYPE html>
<html>
<head>
	<title>User Inquiries</title>
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

<section class="side-bar">
    <div class="container-fluid">
        <div class="row">
               <div class="col-md-3">
               <p><a href="main.php">Back</a></p>
               </div>
               <div class="col-md-6">
                  <h3>User Inquiries</h3>
               </div>
               <div class="col-md-3"></div>
        </div> 
        <br>      
        <div class="row">   
               <div class="col-md-1"></div>     
               <div class="col-md-10">
                    <?php 
                       $mysqli = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($mysqli));
                       $result = $mysqli->query("SELECT * FROM inquiries") or die(mysqli_error($mysqli));
                       //pre_r($result);
                       ?>
                           <div class="justify-content-center">
                                <table class="table">
                                       <thead>
                                           <tr>
                                               <th>Customer Name</th>
                                               <th>Customer Email</th>
                                               <th>Customer Message</th>
                                               <th colspan="2">Action</th>
                                           </tr>
                                       </thead>
                                       <?php 
                                         while ($row = $result->fetch_array()):  ?>
                                            <tr>
                                                <td><?php echo $row['customerName'] ?></td>
                                                <td><?php echo $row['customerEmail'] ?></td>
                                                <td><?php echo $row['customersMsg'] ?></td>
                                                <td>
                                                   <a href="inq.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                         <?php endwhile; ?>
                                </table>
                           </div>
                          <?php
                       //function pre_r( $array ){
                              //echo '<pre>';
                              //print_r($array);
                              //echo '</pre>';
                       //}
                     ?>
               </div>
               <div class="col-md-1"></div>
        </div>
    </div>
</section>      
</body>
<?php

$mysqli = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($mysqli));   



if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM inquiries WHERE id=$id") or die($mysqli->error());
    ?>
    <script type="text/javascript">
    top.window.location='inq.php';
    </script>
    <?php
}
?>

</html>