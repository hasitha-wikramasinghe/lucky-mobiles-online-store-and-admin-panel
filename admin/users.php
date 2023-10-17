<html>
<head>
        <title>Users</title>
        <link rel="stylesheet" type="text/css" href="mainStyle.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
           <div class="logout"><a href="logout.php">LOGOUT</a></div> 
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-1">
           <p><a href="main.php">Back</a></p>
           </div>
           <div class="col-md-10">
           <h3 class="text-center">Users</h3>
           <br>
           <?php 
           $con = new mysqli('localhost','root','','luckymobiles')or die(mysqli_error($con));
           $result = $con->query("SELECT * FROM users")or die($con->error()); ?>
               <div class="justify-content-center">
                   <table class="table">
                      <thead>
                         <tr>
                           <th>User Name</th>
                           <th>Email Address</th>
                           <th>Address</th>
                           <th>Postal Code</th>
                           <th>Telephone</th>
                           <th>Action</th>
                         </tr>
                      </thead>
                      <?php while($row = $result->fetch_array()): ?>
                         <tr>
                            <td><?php echo $row['uName'] ?></td>
                            <td><?php echo $row['eMail'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['postalCode'] ?></td>
                            <td><?php echo $row['telephone'] ?></td>
                            <td>
                              <a href="users.php?delete=<?php echo $row['id']?>" class="btn btn-danger">Remove User</a>
                            </td>
                         </tr>
                      <?php endwhile; ?>
                   </table>
               </div>
           </div>
           <div class="col-md-1"></div>
        </div>
    </div>       
</body>
<?php 
  if(isset($_GET['delete'])){
      $id  = $_GET['delete'];
      $con->query("DELETE FROM users WHERE id=$id");
      ?>
  <script type="text/javascript">
    top.window.location='users.php';
  </script>

 <?php     
  }
?>
</html>