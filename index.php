  <?php
session_start();
include ("koneksi.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login" rel="page-scroll">Login</a></li> 
           
              
							</li>
              <li class="nav-item"><a class="nav-link" href="#kontak" rel="page-scroll">Kontak</a></li>
            </ul>

            
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/logokaryawan.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Tentang Website Ini</h1>
              <p>Website ini berfungsi sebagai absensi karyawan dan sebagai sistem informasi karyawan.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    <!--================ Feature section start =================-->      
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center" id="kontak">
          <h2 class="section-intro__title">Kontak</h2>
          <p class="section-intro__subtitle"></p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                 
                </span>
                <h3 class="card-feature__title">Facebook</h3>
                <p class="card-feature__subtitle">Muhammad Zibran Fitadiyatama  </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  
                </span>
                <h3 class="card-feature__title">Whatsapp</h3>
                <p class="card-feature__subtitle">0895-6357-29348</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                
                </span>
                <h3 class="card-feature__title">LinkedIn</h3>
                <p class="card-feature__subtitle">Muhammad Zibran Fitadiyatama</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Feature section end =================-->      

    <!-- Login Feature Section Start -->

    <section class="section-margin">
      
        <div class="row content" id="login">
      <div class="col-lg-12 danger text-center zero-panel">
        <div class="col-lg-12 zero-panel-content">
          <h1> LOGIN SEBAGAI .... </h1>
        
        </div>
        <br>
        <ul class="list-inline" id="chart-skill">
          <li><a href="login.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Login Admin</button></a>
          </li><br>
          <li><a href="karyawan/login_karyawan.php" target="_blank"><button class="btn btn-primary" style="size: 50px;">Login Karyawan</button></a>
          </li>
          
        </ul>
      </div>
    </div>
    </section>


    <!-- Login Feature Section End -->
    

    <!--================ about section start =================-->      
   


  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					
				</div>
				<div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
				
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Muhamad Zibran Fitadiyatama All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="https://www.facebook.com/zibran.vitadiyatama.7/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					<a href="https://github.com/ZibranovSky" target="_blank"><i class="fab fa-github"></i></a>
					<a href="https://www.linkedin.com/in/muhammad-zibran-fitadiyatama-6550801a9/" target="_blank" ><i class="fab fa-linkedin" target="_blank"></i></a>
					
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>