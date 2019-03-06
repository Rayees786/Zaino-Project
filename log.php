<?php include('ser.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
  <link rel="stylesheet" type="text/css" href="font-awesome.css">
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="log.php">
  	<?php include('err.php'); ?>
<label> Your username </label> 
    <input type="text" name="username"  placeholder="your username" ><i class="fa fa-user" aria-hidden="true"></i> <br>
        <label> Your password </label>
      <input type="password" name="password" placeholder="eg: 123sjgsj@" ><i class="fa fa-key" aria-hidden="true"></i><br>
      <div class="group">
      <button class="submit" type="submit" name="login_user"> Log In </button>

    </div>
  <div class="tang group">
    <div>
    <span class="member"> Not a member ? </span>
      <a class="gonsign" href="reg.php"> Join Us </a>
    </div>
  </div>
  </form>

  	<!-- <div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="reg.php">Sign up</a>
  	</p> -->
  
</body>
</html>