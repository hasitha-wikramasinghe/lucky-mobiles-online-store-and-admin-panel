<!DOCTYPE html>
<html>
<head>
	<title>Admin | Register</title>
      <link rel="stylesheet" type="text/css" href="adminStyle.css">
</head>
<body>
      <div id="regForm">
      	<form action="regProcess.php" method="POST" enctype="multipart/form-data">
		  <br><br><br><br>
      		<p>
      			<label>User Name</label>
      			<input class="txt" type="text" name="uName" id="uName" placeholder="User Name" required="Fill The Content">
      		</p>
			<p>
      			<label>Name with Initials</label>
      			<input class="txt" type="text" name="ininame" id="ininame" placeholder="Name with Initials" required="Fill The Content">
      		</p>  
      		<p>
      			<label>Password</label>
      			<input class="txt" type="password" name="password" id="password" placeholder="Password" required="Fill The Content">
      		</p>
			<p>
      			<label>Telephone</label>
      			<input class="txt" type="text" name="telephone" id="telephone" placeholder="Telephone" required="Fill The Content">
      		</p>
			<p>
      			<label>Email Address</label>
      			<input class="txt" type="text" name="email" id="email" placeholder="Email Address" required="Fill The Content">
      		</p>
			<p>
			    <label>User Photo</label> <br><br>
				<input type="file" class="addImage" name="userpic" id="userpic" value="upload">
			</p>
      		<p>
      			<input class="btn" type="submit" id="saveRegBtn" value="Save">
      		</p>
      	</form>
      </div>
	
</body>
</html>