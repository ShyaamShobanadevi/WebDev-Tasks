<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head> 
    <title>User Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>


    <form method="post" action="register.php">
    	<?php include('errors.php'); ?>
    <div class="input-group">
        <label >Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>

    <div class="input-group">
    	<label>Password</label>
    	<input type="password" name="password_1">
    </div>

    <div class="input-group">
    	<label>Confirm Password</label>
    	<input type="password" name="password_2">
    </div>

    <div class="input-group">
    	<button type="submit" name="register" class="btn">
    		Register
    	</button>
    	</div>

    	<p>
    		Already a member?<a href="login.php">SignIn</a>
            See all codes?<a href="seeCodes.php">see</a>
    	</p>


    </form>
</body>
</html>