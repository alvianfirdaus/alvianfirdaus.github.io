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
if(!isset($_POST['submit'])){
    echo '<a href="https://instagram.com/al_nv23">Report Here</a><br>';
    die('Go-To Hell Shit. Anyway if you find any other bugs. reports it right away!');
}
$id = (int)$_POST['id'];
$nama_kerja = $_POST['nama'];
$prodi = $_POST['prodi'];
$jurusan = $_POST['jurusan'];
$tahun_lulus = $_POST['tahun_lulus'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$gambar = $_FILES['gambar']['name'];

if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        $query1 = "SELECT * FROM kerja where id='$id'";
        $konquery = mysqli_query($connect,$query1);
        $runhapus =  mysqli_fetch_array($konquery);
        unlink("gambar/$runhapus[gambar]");
        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
        $query = "UPDATE kerja SET nama = '$nama_kerja', prodi = '$prodi', jurusan = '$jurusan', tahun_lulus = '$tahun_lulus', nama_perusahaan = '$nama_perusahaan', gambar = '$nama_gambar_baru'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
        if(!$result) {
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                " - ".mysqli_error($koneksi));
        } else {
            header("location:../kerja.php?pesan=Data berhasil diedit.");
        }
    } else {
        header("location:../kerja.php?pesan=Ekstensi yang diperbolehkan hanya PNG dan JPG");
    }
} else {
    $query = "UPDATE kerja SET nama = '$nama_kerja', prodi = '$prodi', jurusan = '$jurusan', tahun_lulus = '$tahun_lulus', nama_perusahaan = '$nama_perusahaan'";
    $query .= "WHERE id ='$id'";
    $result = mysqli_query($connect, $query);
    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($connect).
        " - ".mysqli_error($koneksi));
    } else {
     header("location:../kerja.php?pesan=Data berhasil diedit.");
        }
}
?>