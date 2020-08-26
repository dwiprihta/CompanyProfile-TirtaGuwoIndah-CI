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
          <li class="active"><a href="#header">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Fasilitas</a></li>
          <li><a href="#values">Blog</a></li>
          <li><a href="#portfolio">Galery</a></li>
          <li><a href="#faq">Faq</a></li>
          <li><a href="#contact"> Contact</a></li>
          <li><a data-toggle="modal" data-target="#modaltambah" class="btn btn-sm btn-warning" href="#" style="color:white;"> Pesan Tiket</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>TIRTA GUWO INDAH !</h1>
      <h2>Swimming Pool, Waterboom, Aerobic Arena</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#about" class="btn-get-started scrollto">Mari Berkenalan</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Kenapa Tirta Guwo Indah ?</h3>
              <p>
                Tirta Guwo Indah merupakan salah satu taman hiburan air terbesar dan terlengkap di Karanganyar, jawa Tengah. Ditunjang dengan fasilitas lengkap dan memadai, menjadikan Tirto guwo indah sebagai tempat rekreasi yang nyaman, asyik dan family friendly !
              </p>
              <div class="text-center">
                <a href="#services" class="more-btn">Fasilitas<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <img style="width:80px;" src="<?php echo base_url('assets/img/A1.png')?>" alt="" class="img-fluid mb-3">
                    <h4>Kolam Renang</h4>
                    <p>Tersedia kolam renang dewasa dan anak yang cukup luas, bersih dan nyaman</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                  <img style="width:80px;" src="<?php echo base_url('assets/img/A4.png')?>" alt="" class="img-fluid mb-3">
                    <h4>Watter Boom</h4>
                    <p>area bermian air yang sangat lengkap dengan berbagai peremainan air yang aman digunakan </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                  <img style="width:80px;" src="<?php echo base_url('assets/img/A3.png')?>" alt="" class="img-fluid mb-3">
                    <h4>Outbond Arena</h4>
                    <p>Outbond arena yang cukup luas dan lengkap dengan berbagai arena permainan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=HSCK5l6VQBo" class="venobox play-btn mb-3" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up">Mari lebih dekat engan kami</h4>
            <h3 data-aos="fade-up">Tentang tirta guwo indah</h3>
            <p data-aos="fade-up">Sejarah taman air tirta guwo indah dibangun pada tahun 2011,
              kolam renang yang awalnya dibangun untuk pribadi, namun banyak masyarakat yang berkunjung, akhirnnya dibuat kolam renang untuk umum, dengan pengembangan fasilitas setiap waktunya.</p>
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-rocket"></i></div>
              <h4 class="title"><a href="">Visi</a></h4>
              <p class="description">Menjadikan tempat wisata taman air yang berkualitas tinggi yang penuh dengan keindahan alam yg asri dan eksotik yg bertujuan untuk menghibur para konsumen yg memiliki hoby berenang.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-star"></i></div>
              <h4 class="title"><a href="">Misi</a></h4>
              <p class="description">Mengantarkan konsumen kepada tigkat kepuasan,  Memberikan pelayanan yang baik, Menjujung tinggi tingkat kebersihan 
                </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-pin"></i></div>
              <h4 class="title"><a href="">Alamat</a></h4>
              <p class="description">Dukuh Guworejo,Desa Kadipeso, Sumberjo, Kecamatan kerjo, Kabupaten Karangayar, Jawa Tengah</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <div class="jumbotron jumbotron-fluid bg-warning">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1 class="text-white"><b>PESAN TIKET SEKARANG</b></h1>
            <p class="lead text-white">Beli tiketmu sekarang, jadilah member dan dapatkan diskon menarik setiap pembelian di kolam renang Tirto Guwo Indah</p>
          </div>
           <div class="col-lg-2" >
           <a data-toggle="modal" data-target="#modaltambah" href="" style="width:100%; margin-top:30px; padding:20px;" class="btn btn-xl btn-danger" href="#contact" style="color:white;"> Pesan Tiket</a>
          </div>
           <div class="col-lg-2" >
           <a href="<?= base_url('tiket');?>" style="width:100%; margin-top:30px; padding:20px;" class="btn btn-xl btn-primary" href="#contact" style="color:white;"> CEK Tiketmu</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Fasilitas</h2>
          <p data-aos="fade-up">Berbagai macam fasilitas yang sangat lengkap di taman air Tirto Guwo Indah yang akan semakin menambah kenyamanan dan kebahagiaan anda dalam menikmati liburan bersama keluarga.</p>
        </div>

        <div class="row">
        <?php
              foreach ($fasilitas->result_array() as $j) :
              $post_id=$j['port_id'];
              $port_judul=$j['port_judul'];
              $port_image=$j['port_image'];
            ?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-5" data-aos="fade-up">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url().'assetsadm/images/'.$port_image;?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?php echo $port_judul;?></h4>
                <!-- <span>Chief Executive Officer</span> -->
              </div>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container">
      <div class="section-title" data-aos="fade-up">
          <h2>Blog & Terbaru </h2>
          <p>Ikuti artikel dan berita terbaru kami untuk mengetahui perkembangan taman air Tirto Guwo Indah.</p>
        </div>

        <div class="row">
            <?php
              foreach ($post->result_array() as $j) :
              $post_id=$j['tulisan_id'];
              $post_judul=$j['tulisan_judul'];
              $post_isi=$j['tulisan_isi'];
              $post_author=$j['tulisan_author'];
              $post_image=$j['tulisan_gambar'];
              $post_tglpost=$j['tanggal'];
              $post_slug=$j['tulisan_slug'];
            ?>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card-body mt-5">
                <figure>
                  <img style="width:100%; border-radius:5px;" src="<?php echo base_url().'assetsadm/images/'.$post_image;?>" alt="" class="img-responsive">
                </figure>
                <h5 class="card-title"><?php echo $post_judul;?></h5>
                <div class="read-more"><a href=""><i class="bx bx-time"></i> <?php echo $post_tglpost.' | <i class="bx bx-user"></i> '.$post_author;?></a></div>
                <p class="card-text"><?php echo limit_words($post_isi,20).'...';?></p><hr>
                <div style="border-radius:30px; background-color:#ff5821; border:0px;" class="btn btn-sm btn-primary with-arrow"  data-toggle="modal" data-target=".bd-example-modal-lg<?=$post_id;?>"><i class="icofont-arrow-right"></i> Read More</div>

            </div>
          </div>
				    <?php endforeach;?>
            <!-- <div class="col-md-12 text-center" data-aos="fade-up">
            <p><a style="border-radius:30px; background-color:#ff5821; border:0px;" href="<?php echo base_url().'artikel'?>" class="btn btn-lg btn-primary with-arrow mt-5">View More <i class="bx bx-chevron-right"></i></a></p>
          </div> -->

      </div>
    </section><!-- End Values Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="portfolio" class="Portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Gallery</h2>
          <p data-aos="fade-up">Foto-foto taman air Tirto Guwo Indah berupa keindahan taman air Tirto Guwo Indah, fasilitas-fasilitas, dan kegiatan-kegiatan yang pernah dilaksanakan di dalam lingkungan taman air Tirto Guwo Indah.</p>
        </div>

        <div class="row portfolio-container mt-5" data-aos="fade-up" data-aos-delay="200">
        <?php
              foreach ($galeri->result_array() as $j) :
              $galeri_image=$j['galeri_gambar'];
              $galeri_judul=$j['galeri_judul'];
            ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img style="border-radius:10px;" src="assetsadm/images/<?= $galeri_image;?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <p><b><?= $galeri_judul;?></b></p>
              <a href="assetsadm/images/<?= $galeri_image;?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
              <?php endforeach ?>
        </div>
      </div>
    </section>
  <!-- End Portfolio Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">F.A.Q</h2>
          <p data-aos="fade-up">Beberapa kumpulan pertanyan yang sering diajukan kepada kami, silahkan disimak untuk mengetahui harga tiket, jam buka, hari beroprasi, dan lain-lain yang berhubungan dengan taman air Tirto Guwo Indah. </p>
        </div>

        <div class="faq-list mt-5">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Pukul Berapa Taman Air Tirto Guwo Indah Buka ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Taman air Tirto Guwo Indah buka setiap hari mulai pukul 09:00 pagi sampai pukul 18:00 sore.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Apakah Tirto Guwo Indah tetap buka saat tanggal merah atau tanggal libur Nasional ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Untuk memenuhi kebutuhan liburanmu taman air Tirto Guwo Indah tetap buka walauoun hari libur nasional (Kecuali lebaran).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Apakah ada batasan umur saat ingin masuk ke taman air Tirto Guwo Indah ?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                 Untuk memaasuki taman air Tirto Guwo Indah memang tida ada batasan usia, tapi untuk menggunakan fasilitas kolam renang dewasa dan hiburan seperti prosotan kami hanya anak berusia minimal 10 tahun yang bisa naik.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Berapakah harga tiket masuk di taman air Tirto Guwo Indah ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                 Harga tiket di taman Air Tirto Guwo Indah sangat terjangkau, yaitu sebesar Rp 10.000 di hari Senin sampai Jumat dan Rp 15.000 di hari Sabtu dan Minggu.
                </p>
              </div>
              </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Kontak</h2>
          <p data-aos="fade-up">Mari lebuh dekat kami, jangan pernah merasa sungkan untuk bertanya, memberi kritik bagi taman air Tirto Guwo Indah kami akan sangat senang jika bisa lebih dekat dngan anda, kirimkan pertanyaan, saran atau kritik anda melalui kontak dibawah ini</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Map Tirto Guwo Indah</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>tirtoguwo@gmail.com<br></p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Telpon</h3>
              <p>+6282-363-806-996<br></p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="<?php echo base_url().'kontak/kirim_pesan'?>" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Nama Anda" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Email Anda" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Kirim Pertanyaan, Kritik / Saran"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
              <div class="text-center"> <button type="submit" name="input" id="btn-add" class="btn btn-warning text-white btn-block"><i class= 'fa fa-ticket'></i> KIRIM PESAN </button> </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tirto Guwo indah</h3>
            <p>
            Dukuh Guworejo,Desa Kadipeso, Sumberjo, Kecamatan kerjo, Kabupaten Karangayar, Jawa Tengah <br><br>
              <strong>Phone:</strong> +6282-363-806-996<br>
              <strong>Email:</strong> tirtoguwo@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#header">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Fasilitas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#values">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Galery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">Faq</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact"> Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Fasilitas</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kolam Renang Dewasa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kolam Renang Anak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Water Boom</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aerobic Arena</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Outbond Arena</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
          <img style="width:300px;" src="<?php echo base_url('assets/img/A2.png')?>" alt="" class="img-fluid mb-3">
          </div>

        </div>
      </div>
    </div>

     <!--MODAL ADD TIKETING-->
        <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><I class="fa fa-user"></i> BELI TIKETMU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
              </div>
              <div class="modal-body p-4">
              <form action="<?= base_url('tiket/add');?>" method ="POST">
                  <div class="form-group">
                    <NO for="no_ktp">NO KTP (Nomor Induk Kependudukan)</label>
                    <input type="text" class="form-control" required="" name="no_ktp" id="no_ktp" placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                  </div>

                  <div class="form-group">
                   <label for="nama">Nama</label>
                    <input type="text" class="form-control"  required="" name="nama" id="nama" placeholder="Nama">  
                  </div>

                  <div class="form-group"  required="">
                    <label>Jenis Kelamin</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jenis_kemain1" name="jk" value="laki-laki" class="custom-control-input">
                    <label class="custom-control-label" for="jenis_kemain1">LAKI-LAKI</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jenis_kemain2" name="jk" value="perempuan" class="custom-control-input">
                    <label class="custom-control-label" for="jenis_kemain2">PEREMPUAN</label>
                  </div> 
                    <small class="form-text text-danger"><?= form_error('jk');?></small>
                  </div> 

                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control"  required="" name="email" id="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control"  required="" name="alamat" id="alamat" placeholder="Alamat">
                  </div>

                  <div class="form-group">
                    <label for="no_telpon">No Telpon</label>
                    <input type="text" class="form-control"  required="" name="no_telpon" id="no_telpon" placeholder="No Telpon">
                  </div>

                  <div class="form-group">
                    <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                    <input type="date" class="form-control"  required="" name="tgl_kunjungan" id="tgl_kunjungan" placeholder="">
                    </div>

                  <div class="form-group">
                    <label for="jam_kunjungan">Jam Kunjungan</label>
                    <input type="time" class="form-control"  required="" name="jam_kunjungan" id="jam_kunjungan" placeholder="">
                  </div>

                   <div class="form-group">
                    <label for="jumlah">Jumlah Tiket</label>
                    <input type="number" min="1" class="form-control"  required="" name="jumlah" id="jumlah" placeholder="" onkeyup="sum();" onchange="sum();">
                  </div>

                  <div class="form-group">
                    <label for="tottal">Total bayar</label>
                    <input readonly="" type="number" min="1" class="form-control"  required="" name="tottal" id="tottal" placeholder="">
                  </div>
                </div>

                  <div class="modal-footer">
                    <button type="submit" name="input" id="btn-add" class="btn btn-warning text-white btn-block"><i class= 'fa fa-ticket'></i> PESAN </button>  
                  </form>
                  </div>
                  </div>
              </div>
          </div>
        </div>
       <!--MODAL ADD TIKETING-->

    <!-- INI MODAL ARTIKERL -->
      <?php
            foreach ($post->result_array() as $j) :
            $post_id=$j['tulisan_id'];
            $post_judul=$j['tulisan_judul'];
            $post_isi=$j['tulisan_isi'];
            $post_author=$j['tulisan_author'];
            $post_image=$j['tulisan_gambar'];
            $post_tglpost=$j['tanggal'];
            $post_slug=$j['tulisan_slug'];
          ?>
      <div class="modal fade bd-example-modal-lg<?=$post_id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b><?= $post_judul;?></b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body p-5">
            <figure>
                  <img style="width:100%; border-radius:5px;" src="<?php echo base_url().'assetsadm/images/'.$post_image;?>" alt="" class="img-responsive">
                </figure><hr>
                <div class="read-more"><a href=""><i class="bx bx-time"></i> <?php echo $post_tglpost.' | <i class="bx bx-user"></i> '.$post_author;?></a></div>
                <p class="mt-4"><?= $post_isi;?></p>
            </div>
            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    <!-- INI MODAL ARTIKERL -->

   

    <div class="container d-lg-flex py-4">
      <div class="mr-lg-auto text-center text-lg-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Rony Setiyanto</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

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

  <!-- PENJUMLAHAN TIKET -->
  <script>
function sum() {
      var jumlah = document.getElementById('jumlah').value;
      var harga= 10000;
      var result = parseInt(jumlah) * parseInt(harga);
      if (!isNaN(result)) {
         document.getElementById('tottal').value = result;
      }
}
</script>

  <!-- AJAX Input -->
  <script>
    $(document).ready(function(){
      
        //SIMPAN BARANG
        $('#btn-add').on('click',function(){
          var no_ktp=$('#no_ktp').val();
          var nama=$('#nama').val();
          var jenis_kelamin1=$('#jenis_kelamin1').val();
          var jenis_kelamin2=$('#jenis_kelamin2').val();
          var email=$('#email').val();
          var no_telpon=$('#no_telpon').val();
          var alamat=$('#alamat').val();
          var tgl_kunjungan=$('tgl_kunjungan').val();
          var jam_kunjungan=$('#jam_kunjungan').val();
          $.ajax({
            type="POST",
            url:"<?= base_url('tiket/add')?>",
            dataType:"JSON",
            data : {no_ktp:no_ktp, nama:nama, jenis_kelamin1:jenis_kelaimin1, 
            jenis_kelamin2:jenis_kelaimin2, email:email, no_telpon:no-telpon,alamat:alamat, tgl_kunjungan:tgl_kunjungan, jam_kunjungan:jam_kunjungan },

            success:function(convert){
            $('[name="no_ktp"]').val("");
            $('[name="nama"]').val("");
            $('[name="jk]').val("");
            $('[name="email"]').val("");
            $('[name="no_telpon"]').val("");
            $('[name="alamat"]').val("");
            $('[name="tgl_kunjjungan"]').val("");
            $('[name="jam_kunjungan"]').val("");
            $('#modaltambah').modal('hide');
            }
          })   
        });
    });
 
  </script>

</body>
</html>