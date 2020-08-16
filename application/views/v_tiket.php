<!DOCTYPE html>
<html lang="en">

<head>
  
  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/a2.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/img/a2.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/venobox/venobox.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css" rel="stylesheet')?>">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

  <!-- Modernizr JS -->
	<script src="<?php echo base_url().'theme/js/modernizr-2.6.2.min.js'?>"></script>
	<?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>

	</head>
	<body>

  <!-- =======================================================
  * Template Name: Flexor - v2.0.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h5 class="text-light"><a href=""><span><img style="width:40px;" src="<?php echo base_url('assets/img/A2.png')?>" alt="" class="img-fluid mb-3"> 
        <b>Tirta Guwo Indah</b></span></a></h5>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url('home');?>">Beranda</a></li>
          <!-- <li><a data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-warning" href="#" style="color:white;"> Pesan Tiket</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center mb-5">
    <div class="container" data-aos="fade-in">
      <h1>DATA PEMESANAN TIKET</h1>
    <h2>Cari Data tiketmu (dengan mengetik no KTP, email, atau No Telfon)</h2>
     <form class="form-inline" action="<?php echo base_url('tiket/search');?>" target="blank" method="POST"> 
            <div class="form-group">
              <input type="text" style="width:410px" required="" class="form-control" name="tiket" id="inputAddress" placeholder="Ketik keyword"> 
            </div>
            <div class="form-group">
              <button class="btn btn-danger my-2 my-sm-0 ml-2" type="submit" name="cari">Cari</button>
            </div>
      </form>
    </div>
  </section><!-- End Hero -->

 <div class="data-ticket">
  <div class="container mb-5">
   <?=$this->session->flashdata('notif');?>
  </div>
 </div>

 <section class="data-ticket">
  <div class="container mb-5">
    <div class="row">

    <?php foreach($tikets as $tiket ):?>
        <div class="col-lg-6 mt-4">
          <div class="card mb-" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
              <img src="<?= base_url('assets/img/ticket.jpg');?>" class="card-img mt-3" alt="...">
              </div>
              <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $tiket['id_tiket'];?></h5>
                <p class="card-text"><?= $tiket['nama'];?> (<?= $tiket['email'];?>)</p>
                 <p class="card-text"><?= $tiket['tgl'];?> (<?= $tiket['jam'];?>)</p>
               <button type="button" class="btn btn-sm btn-primary">
                Masih berlaku <span class="badge badge-light"><?= $tiket['jumlah'];?> </span>
              </button>
                <hr>
              <a href="#" class="btn btn-sm btn-success">Konfirmasi</a>
              <a href="#" class="btn btn-sm btn-info">Detail</a>
              </div>
              </div>
            </div>
            </div>
        </div>
    <?php endforeach;?>
      </div>
  </div>
</section>


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery-sticky/jquery.sticky.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/venobox/venobox.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>
</html>