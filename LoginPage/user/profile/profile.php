<?php
session_start();
include('../../koneksi.php');
define('DirProf', TRUE);

if ($_SESSION['status'] != "sudah_login") {
    header("location:../login.php");
    die;
}
if ($_SESSION['level'] != "user") {
    header("location:../login.php");
    die;
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Profile Settings</title>
        <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
        <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="../index.php" class="nav-link">Back to Home</a>
                </li>
            </ul>
          </nav>
          <div class="card">
          <div class="card-header">
          <?php echo $_SESSION['nama']; ?>
          </div>
              <div class="card-body">
                  <h3 class="card-title">Manage Profile</h3>
                  <div class="containter">
                    <p class="card-text">Silahkan masukkan data anda dengan benar dan pilih kategori alumni yang benar</p>
                    <p class="card-text">Anda diperkenankan menambah data 1 kali saja dan tidak boleh lebih. apabila terdapat esalahan pengnputan slahan hubungi admn untu permintaan edit data</p>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Partisipasi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="createdata/alumni/tambah.php">alumni</a>
                                        <a class="dropdown-item" href="createdata/kerja/tambah.php">Kerja</a>
                                        <a class="dropdown-item" href="createdata/usaha/tambah.php">Usaha</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row row-cols-2">
                        <div class="col">
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   ADMIN
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="https://api.whatsapp.com/send?phone=6281235026920&text=Hallo%20admin%20saya%20alumni%20Polinema%20ingin%20verifikasi.">Admin 1</a>
                                        <a class="dropdown-item" href="">Admin 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          <?php if(isset($_GET['pesan'])) {  ?>
          <div class="container align-items-center">
          <div class="alert alert-primary" role="alert">
            <?php echo htmlspecialchars($_GET['pesan']); ?>
            </div>
        </div>
        <?php } ?>
    <script type="text/javascript" src="../css/js/popper.min.js"></script>
    <script type="text/javascript" src="../css/js/jquery.js"></script>
    <script type="text/javascript" src="../css/js/bootstrap.min.js"></script>
</html>