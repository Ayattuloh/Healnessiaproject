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

						<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="department.html">Penyakit</a></li>
						<li><a class="dropdown-item" href="department.html">Perawatan</a></li>
						<li><a class="dropdown-item" href="department.html">Pengobatan</a></li>
					</ul>
			  	</li> -->

						<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
						<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
					</ul>
			  	</li>

			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>-->
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
						<span class="text-white">Tentang Kami</span>
						<h1 class="text-capitalize mb-5 text-lg">Tentang Kami</h1>

						<!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
          </ul> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section about-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h2 class="title-color">Menjadikan Indonesia Lebih Sehat</h2>
				</div>
				<div class="col-lg-8">
					<p>
						Kesehatan merupakan hal terpenting dalam hidup ini, karena percuma memiliki harta yang banyak namun kesehatan kita menurun. Maka dari itu mari kita menjadikan Indonesia menjadi negara sehat dan sadar kesehatan bersama Healnessia.id.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="fetaure-page ">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="images/about/ipb.png" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Universitas</h4>
						<p>Institut Pertanian Bogor (IPB) merupakan sebuah perguruan tinggi negeri yang didirikan tanggal 1 September 1963 di Bogor. berdasarkan keputusan Menteri Perguruan Tinggi dan Ilmu Pengetahuan (PTIP) No. 92/1963 yang kemudian disahkan oleh Presiden RI Pertama melalui Keputusan No. 279/1965.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="images/about/sv.png" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Fakultas</h4>
						<p>Sekolah Vokasi IPB adalah program pendidikan keahlian yang berorientasi pada penerapan ilmu praktik. Berbeda dengan sistem jenjang pendidikan S1, S2, dan S3, Sekolah Vokasi IPB mendidik mahasiswanya agar menjadi lulusan yang berkompeten serta terampil dalam dunia kerja.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="images/about/tekom.jpeg" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Program Studi</h4>
						<p>Teknik Komputer merupakan prodi yang berfokus pada 3 bidang utama yakni Software, Hardware dan Networking .</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item">
						<img src="images/about/logo.jpeg" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Healnessia</h4>
						<p>HEALNESSIA adalah website yang berisi informasi kesehatan dunia, website ini memiliki berbagai penjelasan dan fitur yang mendukung dan mudah dipahami oleh masyarakat.</p>
					</div>
				</div>
			</div>
		</div>
		<!--</section>
<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color">Our Doctors achievements </h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/3.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/4.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/1.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/2.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/5.png" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="images/about/6.png" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>-->

		<section class="section team">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title text-center">
							<h2 class="mb-4">Susunan Kami</h2>
							<div class="divider mx-auto my-4"></div>
							<p>Memang sendiri itu lebih cepat, namun dengan bantuan orang lain sebuah individu akan lebih banyak belajar dan paham hal baru.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team-block mb-5 mb-lg-0">
							<img src="images/team/pakadit.png" alt="" class="img-fluid w-100">

							<div class="content">
								<h4 class="mt-4 mb-0">Bapak Aditya Wicaksono, S.Komp., M.Kom.
								</h4>
								<p>Dosen Pembimbing</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team-block mb-5 mb-lg-0">
							<img src="images/team/daffa.png" alt="" class="img-fluid w-100">

							<div class="content">
								<h4 class="mt-4 mb-0">Daffa Darmawan</h4>
								<p>Programmer</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team-block mb-5 mb-lg-0">
							<img src="images/team/ayat.png" alt="" class="img-fluid w-100">

							<div class="content">
								<h4 class="mt-4 mb-0">Ayattuloh Khomaeni</h4>
								<p>UI/UX Designer</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="team-block">
							<img src="images/team/zaki.png" alt="" class="img-fluid w-100">

							<div class="content">
								<h4 class="mt-4 mb-0">Zaki Naufal Maulana</h4>
								<p>Product Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<h2 class="mb-4">What they say about us</h2>
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<div class="testimonial-block">
					<div class="client-info ">
						<h4>Amazing service!</h4>
						<span>John Partho</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
					
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Expert doctors!</h4>
						<span>Mullar Sarth</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Good Support!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Nice Environment!</h4>
						<span>Partho Sarothi</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info">
						<h4>Modern Service!</h4>
						<span>Kolis Mullar</span>
					</div>
					<p>
						They provide great service facilty consectetur adipisicing elit. Itaque rem, praesentium, iure, ipsum magnam deleniti a vel eos adipisci suscipit fugit placeat. Quibusdam laboriosam eveniet nostrum nemo commodi numquam quod.
					</p>
					<i class="icofont-quote-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>-->
		<!-- footer Start -->
		<footer class="footer section gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 mr-auto col-sm-6">
						<div class="widget mb-5 mb-lg-0">
							<div class="logo mb-7">
								<img src="images/Logo.png" alt="" class="img-fluid">
							</div>
							<p>HEALNESSIA adalah website yang berisi informasi kesehatan dunia, website ini memiliki berbagai penjelasan dan fitur yang mendukung dan mudah dipahami oleh masyarakat.</p>

							<ul class="list-inline footer-socials mt-4">
								<li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100086572140141"><i class="icofont-facebook"></i></a></li>
								<li class="list-inline-item"><a href="https://instagram.com/healnessia?igshid=YmMyMTA2M2Y="><i class="icofont-instagram"></i></a></li>
								<!--<li class="list-inline-item"><a href="mail to:Healnessia@gmail.com"><i class="icofont-email"></i></a></li>-->
							</ul>
						</div>
					</div>

					<!--<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Informasi</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Surgery </a></li>
						<li><a href="#">Wome's Health</a></li>
						<li><a href="#">Radiology</a></li>
						<li><a href="#">Cardioc</a></li>
						<li><a href="#">Medicine</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
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

					<div class="col-lg-8 col-md-9 col-sm-9">
						<div class="widget widget-contact mb-9 mb-lg-4">
							<h4 class="text-capitalize mb-3">Hubungi Kami</h4>
							<div class="divider mb-4"></div>

							<div class="footer-contact-block mb-4">
								<div class="icon d-flex align-items-center">
									<i class="icofont-email mr-3"></i>
									<span class="h6 mb-0">Tersedia 24 Jam</span>
								</div>
								<h4 class="mt-2"><a href="tel:+23-345-67890">Healnessia@gmail.com</a></h4>
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
								&copy; Copyright 2022-2023 PT. Healnesia . All Rights Reserved.</a>
							</div>
						</div>
						<!--<div class="col-lg-6">
					<div class="subscribe-form text-lg-right mt-5 mt-lg-0">
						<form action="#" class="subscribe">
							<input type="text" class="form-control" placeholder="Your Email address">
							<a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
						</form>
					</div>
				</div>-->
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