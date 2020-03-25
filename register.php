
<?php include('server.php') ?> 

<!DOCTYPE html>
<html>
<head>
  <title>Role Base User Login System</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body style="background-color:#d1f5d3;">

<div class="container" style="width:500px;">

  	<h2 class="text-center m-2">Register</h2>
	
  <form method="post" action="register.php">

  	<?php include('errors.php'); ?>

  	<div class="form-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
  	</div>
  	<div class="form-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
  	</div>
  	<div class="form-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" class="form-control">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" class="form-control">
  	</div>
      <label>Role</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role"
             value="sys_admin" checked>
        <label>
        system admin
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" 
            value="normal_user">
        <label>
        normal user
        </label>
    </div>

  	<div class="form-group">
  	  <button type="submit" name="reg_user" class="btn btn-primary text-white" >Register</button>
  	</div><br>

  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  </div>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>