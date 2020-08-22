<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css');?>">
</head>
<body>
	<div class="container">
		<br>
		<br>
		<div class="row justify-content-md-center">
		    <div class="col-md-4 col-md-offset-4">
				<form action="<?php echo base_url('loginController/auth'); ?>" method="POST">
					<h2>Please sign in</h2>
				  <div class="form-group">
				    <label for="exampleInputUsername">Username</label>
				    <input type="username" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username">
				    </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Sign In</button>  
				</form>
				<button class="btn btn-btn-success"><a href="<?php echo base_url('registerController');?>">Register</a></button>
				</div>
	 	</div>
	</div>
</body>
</html>