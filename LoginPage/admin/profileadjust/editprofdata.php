<?php
include '../../koneksi.php';
session_start();
if($_SESSION['status']!="sudah_login"){
	header("location:../../login.php");
	die;
}elseif($_SESSION['level']!="admin"){
  header("location:../../user/index.php");
  die;
}
    $id = $_GET["id"];
	$query = "SELECT * FROM user where id='$id'";
	$result = mysqli_query($connect, $query);
	$data = mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ubah Data Profil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="../Images/Logo.png">
    <title>Sistem Informasi Alumni</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
				<div class="box">
					<form autocomplete="off" method="POST" action="update.php">
						<input name="id" value="<?php echo $data['id'];?>" hidden/>
						<h2>ubah data profile</h2>
						<?php if(isset($_GET['pesan'])){?>
						<p><?php echo $pesan; ?></p>
						<?php } ?>
						<div class="inputBox">
							<input type="text" required="required" name="username" value="<?php echo $data['username'];?>">
							<span>Username</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="nama" value="<?php echo $data['nama']; ?>">
							<span>Name</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="password" required="required" name="password">
							<span>Password</span>
							<i></i>
						</div>
						<input type="submit" name="regis"></input>
						<a class="login100-form-btn" style="margin-left:5px;" href="authlevels.php">Kembali</a>
						
					</form>
				</div>
</body>
</html>