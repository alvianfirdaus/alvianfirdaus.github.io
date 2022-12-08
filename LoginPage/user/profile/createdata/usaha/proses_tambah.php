<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "sistem_alumni";

    $connect = mysqli_connect($hostname, $username, $password, $database);
    
?>
<?php
if(isset($_POST['submit'])){
$nama_pengusaha = $_POST['nama'];
$prodi = $_POST['prodi'];
$jurusan = $_POST['jurusan'];
$tahun_lulus = $_POST['tahun_lulus'];
$nama_usaha = $_POST['nama_usaha'];
$kategori = $_POST['kategori'];
$gambar = $_FILES['gambar']['name'];

if ($gambar != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../../../../admin/crudusaha/gambar/' . $nama_gambar_baru);
        $query = "INSERT INTO usaha (nama,prodi,jurusan,tahun_lulus,nama_usaha, kategori, gambar) values ('$nama_pengusaha','$prodi','$jurusan'
            ,'$tahun_lulus','$nama_usaha', '$kategori','$nama_gambar_baru')";
        $result = mysqli_query($connect, $query);
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($connect) .
                " - " . mysqli_error($connect));
        } else {
            header("location:../../profile.php?pesan=Data berhasil ditambah.");
        }
    } else {
        header("location:../../profile.php?pesan=Ekstensi yang diperbolehkan hanya PNG dan JPG");
    }
} else {
    $query =  "INSERT INTO usaha (nama,prodi,jurusan, tahun_lulus,nama_usaha,kategori,gambar) values ('$nama_pengusaha','$prodi','$jurusan'
        ,'$tahun_lulus','$nama_usaha','$kategori',null)";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($connect) .
            " - " . mysqli_error($connect));
    } else {
        header("location:../../profile.php?pesan=Data berhasil ditambah.");
    }
}
}