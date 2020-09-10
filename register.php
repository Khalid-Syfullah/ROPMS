<?php include('server.php') ?>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="subpage">
	<footer id="footer">
		<div class="inner" id="goinfo">
		<h3>Register</h3>
	<form method="post" action="register.php">
	<?php include('errors.php'); ?>
	<div class="field half first">
			<label>Username</label>
			<input name="username" id="name" type="text" placeholder="Username">
			</div>
	  
	  <div class="field half first">
		  <label>Email</label>
		  <input type="text" name="email" placeholder="Email">
	  </div>
	  
	  <div class="field half first">
		  <label>Password</label>
		  <input type="password" name="password_1" placeholder="Password">
	  </div>
	  
	  <div class="field half first">
		  <label>Confirm Password</label>
		  <input type="password" name="password_2" placeholder="Confirm Password">
	  </div>
	  
	  
	  <div class="field half first">
		<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member?
			<ul class="actions">
			<li><a href="login.php">Sign in</a></li>
			<li><a href="start.php">Go Home</a></li>
			</ul>
		</p>
    </form>
	</div>
	</footer>
</body>
</html>