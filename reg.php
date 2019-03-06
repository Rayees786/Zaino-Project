<?php include('ser.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
 <!--  <link rel="stylesheet" type="text/css" href="sty.css"> -->
  <link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" type="text/css" href="font-awesome.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="reg.php">
  	<?php include('err.php'); ?>
<label> Your username </label> 
    <input type="text" name="username"  placeholder="mysuperusername690" value="<?php echo $username; ?>"><i class="fa fa-user" aria-hidden="true"></i> <br>
    <label> Your email </label>
      <input type="email" name="email" placeholder="mysupermail@mail.com" value="<?php echo $email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i><br>
        <label> Your password </label>
      <input type="password" name="password_1" placeholder="eg: 123sjgsj@" ><i class="fa fa-key" aria-hidden="true"></i><br>
      <label> Please confirm password </label>
      <input type="password" name="password_2" placeholder="eg: 123sjgsj@" ><i class="fa fa-key" aria-hidden="true"></i><br>
      <div class="group">
      <button class="submit" type="submit" name="reg_user"> Sign Up </button>

    </div>
  <div class="tang group">
    <div>
    <span class="member"> Already a member ? </span>
      <a class="gonsign" href="log.php">Go and Log In</a>
    </div>
  </div>
  </form>


  	<!-- <div class="input-group">
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
  		Already a member? <a href="log.php">Sign in</a>
  	</p>
  </form> -->
</body>
</html>