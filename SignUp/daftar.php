<?php
// if(!defined('DirRegBlock')){
//     die('Direct Access is not permitted.');
// }

if(isset($_POST['regis']))
{
    $username = mysqli_real_escape_string($connect,$_POST['username']);
    $nama = mysqli_real_escape_string($connect,$_POST['nama']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);
    $password_confirm = mysqli_real_escape_string($connect,$_POST['passwordconfirm']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT * FROM user where username='$username'";
    $querykon = mysqli_num_rows(mysqli_query($connect,$query));
    $query2 = "SELECT * FROM user where nama='$nama'";
    $querykon2 = mysqli_num_rows(mysqli_query($connect,$query2));
    if($querykon > 0){
        echo '<meta http-equiv="refresh" content="1;url=signup.php?pesan=Maaf, Username sudah diambil!"/>';
        die;
    }
    if($querykon2 > 0){
        echo '<meta http-equiv="refresh" content="1;url=signup.php?pesan=Maaf, Nama yang anda ketik sudah diambil!" />';
        die;
    }
    if(empty($username) || empty($nama) || empty($password))
    {
        echo 'Isi dong';
    }if ($password !== $password_confirm) {
        echo '<meta http-equiv="refresh" content="1;url=signup.php?pesan=password dan konfirmasi tidak sama." />';
        die;
    }
        $pass=$hashed_password;
        $sql = "INSERT INTO user (nama,username,password,level) values ('$nama','$username','$pass','newuser')";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            header("location:../LoginPage/login.php");
        } else {
            echo 'data gagal disimpan!';
        }
        die;
}
if(isset($_POST['regisforadmin']))
{
    session_start();
    if(empty($_SESSION['level'])){
        die('Error Occurred.');
    }
    if($_SESSION['level'] != 'admin'){
        die('Error Occurred.');
    }
    $username = mysqli_real_escape_string($connect,$_POST['username']);
    $nama = mysqli_real_escape_string($connect,$_POST['nama']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);
    $password_confirm = mysqli_real_escape_string($connect,$_POST['passwordconfirm']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT * FROM user where username='$username'";
    $querykon = mysqli_num_rows(mysqli_query($connect,$query));
    $query2 = "SELECT * FROM user where nama='$nama'";
    $querykon2 = mysqli_num_rows(mysqli_query($connect,$query2));
    if($querykon > 0){
        echo '<meta http-equiv="refresh" content="1;url=signup.php?pesan=Maaf, Username sudah diambil!" />';
        die;
    }
    if($querykon2 > 0){
        echo '<meta http-equiv="refresh" content="1;url=signup.php?pesan=Maaf, Nama yang anda ketik sudah diambil!" />';
        die;
    }
    if(empty($username) || empty($nama) || empty($password))
    {
        echo 'Isi dong';
    }if ($password !== $password_confirm) {
        echo '<meta http-equiv="refresh" content="1;url=signup.php?pesan=password dan konfirmasi tidak sama." />';
        die;
    }
        $pass=$hashed_password;
        $sql = "INSERT INTO user (nama,username,password,level) values ('$nama','$username','$pass','newuser')";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            header("location:authlevels.php");
        } else {
            echo 'data gagal disimpan!';
        }
        die;
}
?>