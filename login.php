
<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Role Base User Login System</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body style="background-color:#d4f8e8;">

<div class="container" style="width:500px;">

  	<h2 class="text-center m-2">Login</h2>
 	 
  <form method="post" action="login.php">

  	<?php include('errors.php'); ?>

  	<div class="form-group">
  		<label>Username</label>
  		<input type="text" name="username" class="form-control">
  	</div>
  	<div class="form-group">
  		<label>Password</label>
  		<input type="password" name="password" class="form-control">
  	</div>
      

      <input class="form-check-input" type="hidden" name="role">
      

  	<div class="form-group">
  		<button type="submit" class="btn btn-primary text-white" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

  </div>
</body>
</html>