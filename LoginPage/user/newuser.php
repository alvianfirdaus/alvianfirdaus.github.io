<?php
session_start();
if($_SESSION['status'] != 'sudah_login'){
    header('location:../login.php');
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../admin/assets/vendors/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        html, body {
            background-size: 100%;
            background-image: url(bg.png);
            height: 100%;
        }
    </style>
<title>No Authorization</title></head>
<body>
    <center>
        <h2 class="text-white">Akun anda sedang diverifikasi oleh admin</h2>
        <h2 class="text-white">Silahkan menunggu dan periksa halaman login setiap saat untuk login</h2>
        <h3 class="text-white">Apabila anda ingin cepat kami verifikasi hubungi no dibawah ini</h3>
        <button class="btn btn-secondary btn-sm" onclick="location.href='../logout.php'">Logout</button>
        <a class="btn btn-dark btn-sm" href="https://api.whatsapp.com/send?phone=6281235026920&text=Hallo%20admin%20saya%20alumni%20Polinema%20ingin%20verifikasi."><i class="fab fa-whatsapp"></i> Contact Admin 1 Alvian</a>
        <a class="btn btn-dark btn-sm" href="https://api.whatsapp.com/send?phone=6282333031090&text=Hallo%20admin%20saya%20alumni%20Polinema%20ingin%20verifikasi."><i class="fab fa-whatsapp"></i> Contact Admin 2 Andika</a>
    </center>
</body>
</html>