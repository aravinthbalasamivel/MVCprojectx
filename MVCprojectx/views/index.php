<!DOCTYPE html>
<html>
<head>
<style>
    marquee {
      font-weight: bold;
      font-size: 34px; 
    }
  </style>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<Marquee>"WELCOME TO "SIFY" Login Page"</Marquee>
     <form action="login.php" method="post">
     	<h2>LOGIN PAGE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>