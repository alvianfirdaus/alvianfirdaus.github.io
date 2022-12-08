<?php
include '../../koneksi.php';

session_start();

if($_SESSION['status']!="sudah_login"){
    header("location:../../login.php");
}elseif($_SESSION['level']!="admin"){
  header("location:../../user/index.php");
}

if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM alumni where id='$id'";
    $result = mysqli_query($connect, $query);
    if(!$result){
        die ("Query Error: ".mysqli_errno($connect).
        " - ".mysqli_error($connect));
   }
   $data = mysqli_fetch_assoc($result);
      if (!count($data)) {
         echo "<script>alert('Data tidak ditemukan pada database');window.location='edit.php';</script>";
      }
 } else {
   echo "<script>alert('Masukkan data id.');window.location='edit.php';</script>";
 }         
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Data Kuliah</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="box">
		<form autocomplete="off" enctype="multipart/form-data" method="POST" action="proses_edit.php">
		<input name="id" value="<?php echo $data['id']; ?>"  hidden />
			<h2>Edit Data Alumni</h2>
						<div class="inputBox">
							<input type="text" required="required" name="nama" value="<?php echo $data['nama'];?>" required>
							<span>Nama</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="prodi" value="<?php echo $data['prodi'];?>" required>
							<span>Prodi</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="jurusan" value="<?php echo $data['jurusan'];?>" required>
							<span>Jurusan</span>
							<i></i>
						</div>
						<div class="inputBox">
							<input type="text" required="required" name="tahun_lulus" value="<?php echo $data['tahun_lulus'];?>" required>
							<span>Tahun Lulus</span>
							<i></i>
						</div>
						<div class="wrap-input100">
							<h3> Foto Profil</h3>
							<input type="file" name="gambar" accept="image/*" onchange="showLive(this,'preview')" />
							<span class="focus-input100"></span>
						</div>
						<input type="submit" name="submit"></input>
						<a class="login100-form-btn" style="margin-left:5px;" href="../alumni.php">Kembali</a>
		</form>
	</div>
</body>
</html>
