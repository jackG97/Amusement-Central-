<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head>
  <title>Registration Page</title>

  <link rel="stylesheet" type="text/css" href="Project_CSS.css">

</head>
<body>
  
  <div id= "menubar">       
    <ul>
    <li><a href=Information.php>Information</a></li>
    <li><a href=App_Page.php>Find our Hobby</a></li>
    <li><a href=login.php>Login</a></li>
    </ul>
    </div>
    
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
