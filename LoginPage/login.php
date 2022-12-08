<?php
	define('DirBlock', true);
	include 'logincontroller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../Images/Logo.png"> 
    <title>Sistem Informasi Alumni</title>
	<link rel="stylesheet" href="../LoginPage/style.css">
</head>
<body>

	<nav class="navbar">
	<?php if(isset($_GET['pesan'])) {  ?>
                <label style="position:absolute;color:red;margin-top:60px;margin-left:498px;"><?php echo htmlspecialchars($_GET['pesan']); ?></label>
                <?php } ?>
        <div class="wrappe">
            <div class="logo"><a href=''><img src="../Images/headerr.png" width="350px"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../SignUp/signup.php" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="box">
		<form autocomplete="off" method="POST">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" required="required" name="username">
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forgot Password ?</a>
			</div>
			<input type="submit" name="login">
		</form>
	</div>
</body>

</html>