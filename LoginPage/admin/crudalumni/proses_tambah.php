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

$nama_mahsis = $_POST['nama'];
$prodi = $_POST['prodi'];
$jurusan = $_POST['jurusan'];
$tahun_lulus = $_POST['tahun_lulus'];
$gambar = $_FILES['gambar']['name'];

if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg');
    $x = explode('.',$gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
            $query = "INSERT INTO alumni (nama,prodi,jurusan,tahun_lulus,gambar) values ('$nama_mahsis','$prodi','$jurusan',
            '$tahun_lulus','$nama_gambar_baru')";
            $result = mysqli_query($connect, $query);
            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                    " - ".mysqli_error($koneksi));
            } else {
                header("location:../alumni.php?pesan=Data berhasil ditambah.");
            }
        } else {
            header("location:../alumni.php?pesan=Ekstensi yang diperbolehkan hanya PNG dan JPG");
        }
    } else {
        $query =  "INSERT INTO alumni (nama,prodi,jurusan,tahun_lulus,gambar) values ('$nama_mahsis','$prodi','$jurusan',
        '$tahun_lulus',null)";
        $result = mysqli_query($connect, $query);
        if(!$result) {
            die ("Query gagal dijalankan: ".mysqli_errno($connect).
            " - ".mysqli_error($connect));
        } else {
            header("location:../alumni.php?pesan=Data berhasil ditambah.");
        }
    }