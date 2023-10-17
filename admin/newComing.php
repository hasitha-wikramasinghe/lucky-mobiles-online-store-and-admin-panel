<?php 
  session_start();

  $mysqli = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($mysqli)); 

  $mobilename = '';
  $mobileprice = '';
 // $quantity = '';

error_reporting(0); ini_set('display_errors',0);  

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $result = $mysqli->query("SELECT * FROM newcoming WHERE id=$id")or die($mysqli->error());
  if (count($result)==1){
      $row = $result->fetch_array();
      $mobilename = $row['productName'];
      $mobileprice = $row['productPrice'];
      // $catname = $row['catName'];
      // $brandname = $row['brandName'];
      //$quantity = $row['quantity'];
      //$productimage = '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style=" width:100px;" >'; 
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>New Arrivals</title>
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
                  <h3>Add a new items in Luckymobiles</h3>
                  <form action="" method="POST" enctype="multipart/form-data">
                     <label class="androLabel">Product Name</label>
                     <input type="text" name="productname" class="form-control" value="<?php echo $mobilename; ?>" placeholder="Product Name" id="mobilename" required="Please Fill Content">
                     <label class="androLabel">Product Price</label>
                     <input type="text" name="productprice" class="form-control" value="<?php echo $mobileprice; ?>" placeholder="product Price" id="productprice" required="Please Fill Content">
                     <label class="androLabel">Add Image</label>
                     <input type="file" class="addImage" name="ProductImg" id="productImg" value="upload">
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
                       $result = $mysqli->query("SELECT * FROM newcoming") or die(mysqli_error($mysqli));
                       //pre_r($result);
                       ?>
                           <div class="justify-content-center">
                                <table class="table">
                                       <thead>
                                           <tr>
                                               <th>Product Name</th>
                                               <th>Product Price</th>
                                               <th>Product Image</th>
                                               <th colspan="2">Action</th>
                                           </tr>
                                       </thead>
                                       <?php 
                                         while ($row = $result->fetch_array()):  ?>
                                            <tr>
                                                <td><?php echo $row['productName'] ?></td>
                                                <td>Rs.<?php echo $row['productPrice'] ?></td>
                                                <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style="width:100px;">'; ?>; </td>
                                                <td>
                                                   <a href="newComing.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a>
                                                   <a href="newComing.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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
    $Productename = $_POST['productname'];
    $Productprice = $_POST['productprice'];
    $Productimg = addslashes(file_get_contents($_FILES['ProductImg']['tmp_name']));


    $mysqli->query("INSERT INTO newcoming (productName, productPrice, productImg) VALUES('$Productename','$Productprice','$Productimg')") or 
           die($mysqli->error); 
           ?>
<script type="text/javascript">
top.window.location='newcoming.php';
</script>
           <?php
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM newcoming WHERE id=$id") or die($mysqli->error());
    ?>
<script type="text/javascript">
top.window.location='newcoming.php';
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