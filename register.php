<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login In System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  
 	<div class="input-group">
  	  <label>Email</label>
  	  <input type="text" name="email" value="<?php echo $email; ?>">
 	</div>
  
  <div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="fname" value="<?php echo $fname; ?>">
  </div>
   
  <div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lname" value="<?php echo $lname; ?>">
  </div>
  
  <div class="input-group">
  	  <label>Phone</label>
      <input type="text" name="phone" value="<?php echo $phone; ?>">
 	</div>
  
 	<div class="input-group">
  	  <label>Birthday</label>
      <input type="text" name="birthday" value="<?php echo $birthday; ?>">
 	</div>
  
 	<div class="input-group">
  	  <label>Gender</label>
      <input type="text" name="gender" value="<?php echo $gender; ?>">
  </div>
  
  <div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  </div>
 
  <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  </div>
   
 	<p>
  		Registered Already? <a href="login.php">Sign in</a>
  </p>
  
  
  </form>
</body>
</html>