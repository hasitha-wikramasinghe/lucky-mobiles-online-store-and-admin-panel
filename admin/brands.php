<!DOCTYPE html>
<html>
<head>
	<title>Brands</title>
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
                  <h3>Add a Brand to a side bar</h3>
                  <form action="" method="POST" enctype="multipart/form-data">
                     <label class="androLabel">Brand Name</label>
                     <input type="text" name="brandname" class="form-control" placeholder="Brand Name" id="mobilename" required="Please Fill Content">
                     <br>
                     <input class="btn-success saveAndroid" type="submit" id="" name="save" value="Save">
                  </form>
               </div>
               <div class="col-md-3"></div>
        </div> 
        <br>      
        <div class="row">   
               <div class="col-md-1"></div>     
               <div class="col-md-10">
                    <?php 
                       $mysqli = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($mysqli));
                       $result = $mysqli->query("SELECT * FROM brands") or die(mysqli_error($mysqli));
                       //pre_r($result);
                       ?>
                           <div class="justify-content-center">
                                <table class="table">
                                       <thead>
                                           <tr>
                                               <th>Brand Name</th>
                                               <th colspan="2">Action</th>
                                           </tr>
                                       </thead>
                                       <?php 
                                         while ($row = $result->fetch_array()):  ?>
                                            <tr>
                                                <td><?php echo $row['brandName'] ?></td>
                                                <td>
                                                   <a href="brands.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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

if(isset($_POST['save'])){
    $brandname = $_POST['brandname'];


    $mysqli->query("INSERT INTO brands(brandName) VALUE('$brandname')") or 
           die($mysqli->error); 
           ?>
<script type="text/javascript">
top.window.location='brands.php';
</script>
           <?php
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM brands WHERE id=$id") or die($mysqli->error());
    ?>
<script type="text/javascript">
top.window.location='brands.php';
</script>
           <?php
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $mysqli->query("SELECT * FROM androidmobile WHERE id=$id") ;
    ?>
<script type="text/javascript">
top.window.location='newcoming.php';
</script>
<?php
}

?>

</html>