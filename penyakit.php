<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>HEALNESSIA- Kesadaran Akan Kesehatan Masyarakat Indonesia</title>

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
                            <a href="tel:+23-345-67890" >
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
							<form class="form-inline" action="cariPenyakit.php" method="GET">
								<input class="form-control mr-sm-2" name="searching" type="search" placeholder="Cari Penyakit" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
							</form>
						</nav>

			   <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul>
			  	</li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
			</ul>
		  </div>
		</div>
	</nav>
</header>
	

<?php 

$id_informasi = $_POST['penyakit'];

$sql = 'SELECT * from tbl_informasi WHERE id_informasi = "'.$id_informasi.'"';

$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($query);

?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg"><?php echo $row->namaPenyakit;?></h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Department Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="<?php echo $row->pathGambar;?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
 
		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">

					<h3 class="text-md"><?php echo $row->namaPenyakit;?></h3>
					
                    <div class="divider my-4"></div>
                    <?php 
                     $karakter = explode(".", $row->deskPenyakit);
                     $i = 0;
                     $x = count($karakter) - 2;    
                     foreach($karakter as $karakters){
                        if($i == 0){
                            echo '<p class="lead">'.$karakters.'.</p>';
                        } else{
                            if($i > $x){
                                break;
                            } else{
                                echo '<p>'.$karakters.'.</p>';
                            }
                            
                        }
                       
                        $i++;
                     }
                    ?>

					<h3 class="mt-5 mb-4">Cara Pencegahan <?php echo $row->namaPenyakit;?></h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
                  
                  <?php 
                     $karakter = explode(".", $row->deskTreatment);
                     $i = 0;
                     $x = count($karakter) - 2;    
                     foreach($karakter as $karakters){
                        
                        if($i > $x){
                            break;
                        } else{
                            echo'<li><i class="icofont-check mr-2"></i>'.$karakters.'.</li>';
                        }
                        $i++;

                     }
                     
                    ?>

						<!--<li><i class="icofont-check mr-2"></i>Tidak melakukan hubungan seks sebelum menikah.</li>
						<li><i class="icofont-check mr-2"></i>Tidak berganti-ganti pasangan seksual.</li>
						<li><i class="icofont-check mr-2"></i>Menggunakan kondom saat berhubungan seksual.</li>
						<li><i class="icofont-check mr-2"></i>Menghindari penggunaan narkoba, terutama jenis suntik.</li>
						<li><i class="icofont-check mr-2"></i>Mendapatkan informasi yang benar terkait HIV, cara penularan, pencegahan, dan pengobatannya, terutama bagi anak remaja</li>
                    -->
                    </ul>
					<?php if (empty($_SESSION['Role'])) { ?>
					 <a href="login.php" class="read-more">Lakukan Login untuk melakukan Bookmark!<i class="icofont-simple-right ml-2"></i></a>
					 <?php } else {?>
					<form action="bookmark.php" method="POST">
                     <input type="hidden" name="bookmarkInfo" value="<?php echo $row->id_informasi; ?>" />
					 <input type="hidden" name="bookmarkUser" value="<?php echo $_SESSION["idUser"]; ?>" />
                     <button type=submit class="btn btn-light">Bookmark<i class="icofont-simple-right ml-2"></i></button>
                     </form>
					<?php }?>
				</div>
			</div>

			<!-- <div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Monday - Friday</a>
					    <span>9:00 - 17:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Saturday</a>
					    <span>9:00 - 16:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Sunday</a>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3>+23-4565-65768</h3>
					</div>
				</div> -->
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