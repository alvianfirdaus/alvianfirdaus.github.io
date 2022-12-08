<?php
include '../../koneksi.php';
session_start();
if(!isset($_POST['regis'])){
    echo '<a href="https://instagram.com/al_nv23">Report Here</a><br>';
    die('Go-To Hell Shit. Anyway if you find any other bugs. reports it right away!');
}else {

$id = (int)$_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashed = password_hash($password, PASSWORD_DEFAULT);
$query1 = "SELECT * FROM user where username='$username'";
$querykon = mysqli_num_rows(mysqli_query($connect,$query1));
$query2 = "SELECT * FROM user where nama='$nama'";
$querykon2 = mysqli_num_rows(mysqli_query($connect,$query2));
if($querykon > 0){
    echo '<meta http-equiv="refresh" content="1;url=authlevels.php?pesan=Maaf, Username sudah diambil!" />';
    die;
}
if($querykon2 > 0){
    echo '<meta http-equiv="refresh" content="1;url=authlevels.php?pesan=Maaf, Nama yang anda ketik sudah diambil!" />';
    die;
}
$query = "UPDATE user set nama = '$nama', username = '$username', password = '$hashed'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($connect, $query);
        if(!$result) {
            die ("Query gagal dijalankan: ".mysqli_errno($connect).
                " - ".mysqli_error($connect));
        } else {
            header("location:authlevels.php?pesan=Profil berhasil diperbarui.");
        }
    }
?>
