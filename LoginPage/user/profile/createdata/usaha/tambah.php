<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Data Usaha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
		<form autocomplete="off" enctype="multipart/form-data" method="POST" action="proses_tambah.php">
				<h2>Tambah Data Usaha Alumni</h2>
						<div class="inputBox">
							<input type="text" required="required" name="nama">
							<span>Nama</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="prodi">
							<span>Prodi</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="jurusan">
							<span>Jurusan</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="tahun_lulus">
							<span>Tahun Lulus</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="nama_usaha">
							<span>Nama Usaha</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="kategori">
							<span>Kategori</span>
							<i></i>
						</div>
						<div class="wrap-input100">
							<h3> Foto Profil</h3>
							<input type="file" name="gambar" accept="image/*" onchange="showLive(this,'preview')" />
							<span class="focus-input100"></span>
						</div>
						<input type="submit" name="submit"></input>
						<a class="login100-form-btn" style="margin-left:5px;" href="../../profile.php">Kembali</a>
						
					</form>
				</div>
</body>
</html>
