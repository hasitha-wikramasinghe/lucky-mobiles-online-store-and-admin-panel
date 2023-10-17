<?php 
  session_start();

  $mysqli = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($mysqli)); 

  $update = false;
  $mobilename = '';
  $mobileprice = '';
  $quantity = '';

error_reporting(0); ini_set('display_errors',0);  

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM allproducts WHERE id=$id")or die($mysqli->error());
  if (count($result)==1){
      $row = $result->fetch_array();
      $mobilename = $row['productName'];
      $mobileprice = $row['productPrice'];
      // $catname = $row['catName'];
      // $brandname = $row['brandName'];
      $quantity = $row['quantity'];
      //$productimage = '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style=" width:100px;" >'; 
  }
}

if(isset($_POST['update'])){
   $id = $_POST['id'];
   $mobilename = $_POST['tabletname'];
   $mobileprice = $_POST['productprice'];
   $quantity = $_POST['quantity'];
 
   $mysqli->query("UPDATE allProducts SET productName='$mobilename', productPrice='$mobileprice', quantity='$quantity' WHERE id=$id")or die(mysqli_error($mysqli));
 
   $_SESSION['message'] = "Record has been Updated!";
   $_SESSION['msg_type'] = "warning";
 }

?>
<html>
<head>
     <title>Tablets</title>
     <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
     <?php if(isset($_SESSION['message'])): ?>
     <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php 
          echo $_SESSION['message'];
          unset($_SESSION['message']);
        ?>
     </div>
     <?php endif ?>
     <div class="logout"><a href="logout.php">LOGOUT</a></div>

<section class="side-bar">
    <div class="container-fluid">
       <div class="row">
         <div class="col-md-3">
           <p><a href="main.php">Back</a></p>
         </div>
         <div class="col-md-6">
         <h3>Add a new Tablet</h3>
          <form action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <?php 
                   $con = new mysqli('localhost','root','','luckymobiles')or die(mysqli_error($con));
                   $result = $con->query("SELECT * FROM brands")or die(mysqli_error($con));
          ?>
            <label class="androLabel">Brand Name</label>
            <select name="brandname" id="brandname" class="form-control" required="fill the content">
              <option value="">Please Selct Brand</option>
              <?php while($row = $result->fetch_array()): ?>
              <option value="<?php echo $row['id'] ?>"><?php echo $row['brandName'] ?></option>
              <?php endwhile; ?>
            </select>
            <!-- <input type="text" name="brandname" class="form-control" placeholder="Brand Name" id="brandname" required="fill the content"> -->
            <label class="androLabel">Tablet Name</label>
            <input type="text" name="tabletname" class="form-control" value="<?php echo $mobilename; ?>" placeholder="Tablet Name" id="tabletname" required="fill the content">
            <label class="androLabel">Product Price</label>
            <input type="text" name="productprice" class="form-control" value="<?php echo $mobileprice; ?>" placeholder="product Price" id="productprice" required="fill the content">
            <label class="androLabel">Category Name</label>
            <select name="catname" id="catname" class="form-control" required="fill the content">
              <option value="">Please Select Category</option>
              <option value="Tablets">Tablets</option>
            </select>
            <!-- <input type="text" name="catname" class="form-control" placeholder="Category Name" id="catname" required="fill the content"> -->
            <label class="qLabel">Quantity</label>
            <input type="text" name="quantity" id="quantity" class="quantity" value="<?php echo $quantity; ?>" placeholder="Quantity" required="Please Fill Content">
            <label class="imageLabel">Add Image</label>
            <input type="file" class="addImage" name="tabpic" id="tabpic" value="upload">
            <br>
            <?php if($update == true): ?>
                      <button class="btn-info saveAndroid" type="submit"  name="update">Update</button>
                     <?php else: ?>
                      <button class="btn-success saveAndroid" type="submit" id="addTablet" name="save" value="Save">Save</button>
                     <?php endif; ?>
           </form>
         </div>
         <div class="col-md-3"></div>
       </div>
       <div class="row">
         <div class="col-md-1"></div> 
         <div class="col-md-10">
            <div class="justify-content-center">
            <?php 
               $con = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($con));
               $result = $con->query("SELECT * FROM allproducts WHERE catName='Tablets';")or die(mysqli_error($con)); 
            ?>
               <table class="table">
                  <thead>
                     <tr>
                        <th>Tablet Name</th>
                        <th>Product Price</th>
                        <th>Stock Available</th>
                        <th>Product Image</th>
                        <th colspan="2"> Action</th>
                     </tr>
                  </thead>
                  <?php while($row = $result->fetch_array()): ?>
                     <tr>
                         <td><?php echo $row['productName'] ?></td>
                         <td>Rs.<?php echo $row['productPrice'] ?></td>
                         <td><?php echo $row['quantity'] ?></td>
                         <td><?php echo '<img src="data:image;base64,'.base64_encode($row['productImg']).'" alt="Image" style="width:100px;"'; ?></td>
                         <td>
                         <a href="tablets.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Update</a>
                         <a href="tablets.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> 
                         </td>
                     </tr>
                  <?php endwhile; ?>
               </table>
            </div>  
         </div>
         <div class="col-md-1"></div>
       </div>
    </div>
</section>     
</body>
<?php 
   $con = new mysqli('localhost','root','','luckymobiles') or die(mysqli_error($con));

   if(isset($_POST['save'])){
      $Brandname = $_POST['brandname'];
      $Catname = $_POST['catname'];
      $TabName = $_POST['tabletname'];
      $ProductPrice = $_POST['productprice'];
      $quantity = $_POST['quantity'];
      $ProductImg = addslashes(file_get_contents($_FILES['tabpic']['tmp_name']));

      $con->query("INSERT INTO allproducts (catName ,brandName, productName, productPrice, quantity, productImg) VALUES ('$Catname','$Brandname','$TabName','$ProductPrice','$quantity','$ProductImg')") or
      die(mysqli_error($con));

      $_SESSION['message'] = "Record has been added!";
      $_SESSION['msg_type'] = "success";

      header('location: tablets.php');
      ?>
      <script type="text/javascript">
       top.window.location= 'tablets.php';
      </script>
      <?php
   }
   if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $con->query("DELETE FROM allproducts where id=$id") or die(mysqli_error($con));

      $_SESSION['message'] = "Record has been deleted!";
      $_SESSION['msg_type'] = "danger";

      header('location: tablets.php');
   ?>
 <script type="text/javascript">
 top.window.location='tablets.php';
 </script>
 <?php
   }
?>
</html>