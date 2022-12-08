<?php
include '../koneksi.php';
session_start();
if ($_SESSION['status'] != "sudah_login") {
	header("location:../login.php");
} elseif ($_SESSION['level'] != "admin") {
	header("location:../user/index.php");
}
?>
<!doctype html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard - <?php echo $_SESSION['nama']; ?></title>
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="assets/css/White.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css"> -->
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="assets/vendors/lineawesome/css/line-awesome.min.css">

</head>

<body>

	<!--Topbar -->
	<div class="topbar transition">
		<div class="bars">
			<button type="button" class="btn transition" id="sidebar-toggle">
				<i class="las la-bars"></i>
			</button>
		</div>
		<div class="menu">
			<ul>
				<li>
					<div class="dropdown">
						<div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span><?php echo $_SESSION['nama']; ?></span>
						</div>
						<div class="dropdown-menu" aria-labelledby="dropdownProfile">
							<a class="dropdown-item" href="../logout.php">
								<i class="las la-sign-out-alt mr-2"></i> Sign Out
							</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars">
		<div class="logo">
			<img src="logoadmin.png" width="30%">
		</div>
		<div class="sidebar-items">
			<div class="accordion" id="sidebar-items">
				<ul>
					<p class="menu">Apps</p>

					<li>
						<a href="index.php" class="items">
							<i class="fa fa-tachometer-alt"></i>
							<span>Dashboard</span>
						</a>
					</li>

					<p class="menu">Admin Menu</p>

					<li id="headingTwo">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							<i class="fas la-wrench"></i>
							<span>Abilities</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapseTwo" class="collapse submenu" aria-labelledby="headingTwo" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="profileadjust/authlevels.php">Authorization Levels</a>
							</li>
						</ul>
					</div>

					<p class="menu">Pages</p>

					<li id="headingThree">
						<a href="onclick();" class="submenu-items" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
							<i class="fas la-cog"></i>
							<span>Tables</span>
							<i class="fas la-angle-right"></i>
						</a>
					</li>
					<div id="collapsefour" class="collapse submenu" aria-labelledby="headingThree" data-parent="#sidebar-items">
						<ul>

							<li>
								<a href="alumni.php">Alumni</a>
							</li>
							<li>
								<a href="kerja.php">Kerja</a>
							</li>
							<li>
								<a href="usaha.php">Usaha</a>
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>

	<div class="sidebar-overlay"></div>

	<!--Content Start-->
	<div class="content transition">
		<div class="container-fluid dashboard">
			<h3>Dashboard, <?php echo $_SESSION['nama']; ?></h3>
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Dashboard Admin Sistem Informasi Alumni Polinema</h5>
						<p class="card-text">#Pegawai_Polinema_Kuat #Polinema_Kreatif_Inovatif_Kompetitif</p>
						<img src="home-alumni1.png" width="100%">
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer -->
	<div class="footer transition">
		<hr>
		<p>
		<b>Alvian & Andika </b><a>Copyright &#169; 2022  </a>
		</p>
	</div>

	<!-- Library Javascipt-->
	<script src="assets/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>