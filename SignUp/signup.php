<?php
	define('DirBlock', true);
    require_once('./koneksi.php');
	include 'daftar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
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

    <nav class="navbar">
    <?php if(isset($_GET['pesan'])) {  ?>
                <label style="position:absolute;color:red;margin-top:60px;margin-left:498px;"><?php echo htmlspecialchars($_GET['pesan']); ?></label>
                <?php } ?>
        <div class="wrappe">
            <div class="logo"><a href=''><img src="../Images/headerr.png" width="350px"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../LoginPage/login.php" class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
        

    </nav>
    
    <div class="box">
        
        <form autocomplete="off" method="POST">
            <h2>Sign Up</h2>
            <div class="inputBox">
                <input type="text" required="required" name="username">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text" required="required" name="nama">
                <span>Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password">
                <span>Password</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="passwordconfirm">
                <span>Confrm Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password ?</a>
            </div>
            <input type="submit" name="regis"></input>
            
        </form>
    </div>

</body>

</html>