<?php include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
	<meta name="author" content="themefisher.com">

	<title>HEALNESSIA- Kesadaran Akan Kesehatan Masyarakat Indonesia</title>
	<link rel="icon" href="images/icon.png">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="plugins/icofont/icofont.min.css">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>Support kami: Healnessia@gmail.com</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Jl. Tatapakan 1 Tegal Gundil,Bogor- Indonesia 16121 </li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
							<a href="tel:+23-345-67890">
								<span>HUBUNGI : </span>
								<span class="h4">0851-5736-8550</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/Logo1.png" alt="" class="img-fluid">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
							<a class="nav-link" href="index.php">Beranda</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="about.php">Tentang</a></li>
						<li class="nav-item"><a class="nav-link" href="vaksin.php">Vaksin</a></li>
						<li class="nav-item"><a class="nav-link" href="informasinew.php">Informasi</a></li>

						<?php if (empty($_SESSION['Role'])) { ?>
							<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
						<?php } else { ?>
							<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
							<li class="nav-item"><a class="nav-link" href="profil.php">Profil </a></li>
						<?php } ?>
						<nav class="navbar navbar-light bg-light">
							<form class="form-inline" action="cariVaksin.php" method="GET">
								<input class="form-control mr-sm-2" name="searching" type="search" placeholder="Cari Tempat Vaksin" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
							</form>
						</nav>

						<!-- <li class="nav-item">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi<i class="icofont-thin-down"></i></a>
						<li><a class="dropdown-item" href="department.html">Penyakit</a></li>
			  	</li> -->

						<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
						<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
					</ul>
			  	</li>-->

						<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li>-->
						<!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>-->
					</ul>
				</div>
			</div>
		</nav>
	</header>



	<section class="page-title bg-1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<!--<span class="text-white">Pusat Informasi Penyakit</span>-->
						<h1 class="text-capitalize mb-5 text-lg">VAKSINASI</h1>

						<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
          </ul> -->
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section service-2">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<div class="section-title">
						<h2>TEMPAT VAKSINASI</h2>
						<div class="divider mx-auto my-4"></div>
					</div>
				</div>
			</div>
            <div class="row">
            <?php
                $sql = 'SELECT * FROM tbl_vaksin';

                $query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_object($query)) {

                    echo '
                    <div class="col-lg-4 col-md-6 ">
                    <div class="department-block mb-5">
                    <img src="'.$row->imgVaksin.'" alt="" class="img-fluid w-100">
                    <div class="content">
                    <h4 class="mt-4 mb-2 title-color">'.$row->tempatVaksin.'</h4>
                     <p class="mb-4">'.$row->alamatVaksin.'</p>
                    </div>
                    </div>
                    </div>';
                }
            ?>


            </div>
            
            <!--<div class="row">
				<div class="col-lg-4 col-md-6 ">
					<div class="department-block mb-5">
						<img src="images/service/covid2.jpg" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color">Covid-19</h4>
							<p class="mb-4">Coronavirus atau sering dikenal sebagai Covid-19 merupakan penyakit yang menyebabkan wabah pada awal tahun 2020</p>
							<a href="penyakit.php" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
                </div>
			</div>-->

				<!--<div class="col-lg-4 col-md-6">
					<div class="department-block mb-5">
						<img src="images/service/monkeypox.jpeg" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2  title-color">Cacar Monyet</h4>
							<p class="mb-4">Cacar monyet disebabkan oleh virus monkeypox, yaitu virus yang termasuk dalam kelompok Orthopoxvirus.</p>
							<a href="cacarmonyet.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="department-block mb-5">
						<img src="images/service/hiv.jpg" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color">HIV/AIDS</h4>
							<p class="mb-4">HIV adalah penyakit yang menyerang sistem kekebalan tubuh dan melemahkan imun tubuh terhadap penyakit. Tahap akhir dari infeksi HIV adalah AIDS</p>
							<a href="hiv.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>


				<div class="col-lg-4 col-md-6 ">
					<div class="department-block  mb-5 mb-lg-0">
						<img src="images/service/sifilis.jpeg" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color">Raja Singa/Sifilis</h4>
							<p class="mb-4">Sifilis adalah infeksi bakteri yang biasanya menyebar melalui kontak seksual dan dimulai dengan luka tanpa rasa sakit.</p>
							<a href="sifilis.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="department-block mb-5 mb-lg-0">
						<img src="images/service/dengue.jpg" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color">Demam Berdarah</h4>
							<p class="mb-4">Demam berdarah adalah penyakit virus yang dibawa oleh nyamuk, yang terjadi di daerah tropis dan subtropis.</p>
							<a href="dbd.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="department-block mb-5 mb-lg-0">
						<img src="images/service/keputihan.jpeg" alt="" class="img-fluid w-100">
						<div class="content">
							<h4 class="mt-4 mb-2 title-color">Keputihan</h4>
							<p class="mb-4">Keputihan adalah kondisi ketika lendir kental atau cairan bening keluar dari vagina.</p>
							<a href="keputihan.html" class="read-more">Learn More <i class="icofont-simple-right ml-2"></i></a>
						</div>
				</div>-->
				</div>
			</div>
		</div>
	</section>

	<!-- footer Start -->
	<footer class="footer section gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mr-auto col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<div class="logo mb-4">
							<img src="images/Logo.png" alt="" class="img-fluid">
						</div>
						<p>HEALNESSIA adalah website yang berisi informasi kesehatan dunia, website ini memiliki berbagai penjelasan dan fitur yang mendukung dan mudah dipahami oleh masyarakat.</p>
						<ul class="list-inline footer-socials mt-4">
							<li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100086572140141"><i class="icofont-facebook"></i></a></li>
							<li class="list-inline-item"><a href="https://instagram.com/healnessia?igshid=YmMyMTA2M2Y="><i class="icofont-instagram"></i></a></li>
						</ul>
					</div>
				</div>

				<!--<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Department</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Surgery </a></li>
						<li><a href="#">Wome's Health</a></li>
						<li><a href="#">Radiology</a></li>
						<li><a href="#">Cardioc</a></li>
						<li><a href="#">Medicine</a></li>
					</ul>
				</div>
			</div>-->

				<!--<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQuestions</a></li>
						<li><a href="#">Company Licence</a></li>
					</ul>
				</div>
			</div>-->

				<div class="col-lg-8 col-md-6 col-sm-6">
					<div class="widget widget-contact mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-3">Hubungi Kami</h4>
						<div class="divider mb-4"></div>

						<div class="footer-contact-block mb-4">
							<div class="icon d-flex align-items-center">
								<i class="icofont-email mr-3"></i>
								<span class="h6 mb-0">Tersedia 24 Jam</span>
							</div>
							<h4 class="mt-2"><a href="tel:+23-345-67890">healnessia@gmail.com</a></h4>
						</div>

						<div class="footer-contact-block">
							<div class="icon d-flex align-items-center">
								<i class="icofont-support mr-3"></i>
								<span class="h6 mb-0">Senin ke Jumat : 08:30 - 18:00</span>
							</div>
							<h4 class="mt-2"><a href="tel:+23-345-67890">085157368550</a></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-btm py-4 mt-5">
				<div class="row align-items-center justify-content-between">
					<div class="col-lg-6">
						<div class="copyright">
							&copy; Copyright 2022-2023 PT. Healnesia . All Rights Reserved.</div>
					</div>
					<!--<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
					</div>-->
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
		</div>
	</footer>


	<!-- 
    Essential Scripts
    =====================================-->


	<!-- Main jQuery -->
	<script src="plugins/jquery/jquery.js"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="plugins/bootstrap/js/popper.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/counterup/jquery.easing.js"></script>
	<!-- Slick Slider -->
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<!-- Counterup -->
	<script src="plugins/counterup/jquery.waypoints.min.js"></script>

	<script src="plugins/shuffle/shuffle.min.js"></script>
	<script src="plugins/counterup/jquery.counterup.min.js"></script>
	<!-- Google Map -->
	<script src="plugins/google-map/map.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="js/script.js"></script>
	<script src="js/contact.js"></script>

</body>

</html>