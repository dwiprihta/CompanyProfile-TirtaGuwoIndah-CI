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
    <h2>Cari Data tiketmu (dengan mengetik No Tiket, NO KTP, email, atau No Telfon)</h2>
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
                <h5 class="card-title"><?= $tiket['id_tiket'];?> </h5>
                <p class="card-text"><?= $tiket['nama'];?> (<?= $tiket['email'];?>)</p>
                <p class="card-text"><?= $tiket['tgl'];?> (<?= $tiket['jam'];?>)</p>
                <p class="card-text"><?= $tiket['jumlah'];?> Tiket  
                  <?php if($tiket['status']==2):?>
                 <span class="badge badge-danger">Pembayaran Gagal</span>
                  <?php else : ?>
                  <?php endif;?>
                </p>
              
                <hr>
                <?php if($tiket['status']==0 OR $tiket['status']==2):?>
                  <a data-toggle="modal" data-target="#modalpembayaran<?=$tiket['id_tiket'];?>" href="#" class="btn btn-sm btn-primary">Belum dibayar</a>
                <?php elseif($tiket['status']==1):?>
                  <a data-toggle="modal" data-target="#modalkonfirm" class="btn btn-sm btn-warning text-white">Menunggu Konfirmasi</a>
                <?php elseif($tiket['status']==3):?>
                  <a data-toggle="modal" data-target="#modalaktif"  class="btn btn-sm btn-success text-white">Tiket Aktif</a>
                <?php elseif($tiket['status']==4):?>
                  <a data-toggle="modal" data-target="#modaldigunakan" class="btn btn-sm btn-secondary text-white">Sudah digunakan</a>
                <?php else : ?>
                <?php endif;?>
                <a data-toggle="modal" data-target="#modaltambah<?=$tiket['id_tiket'];?>" href="#" class="btn btn-sm btn-info ">Detail</a>
                 <?php if($tiket['status']==3):?>
                 <a href="#" class="btn btn-sm btn-danger ">Cetak Tiket</a>
                 <?php else : ?>
                <?php endif;?>
              </div>
              </div>
            </div>
            </div>
        </div>
    <?php endforeach;?>
      </div>
  </div>
</section>


<!--MODAL DETIL TIKETING-->  
<?php foreach ($tikets as $tkt):?>
        <div class="modal fade" id="modaltambah<?=$tkt['id_tiket'];?>" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><I class="fa fa-user"></i> DETAIL TIKETMU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
              </div>
              <div class="modal-body p-4">
              <form action="<?= base_url('tiket/add');?>" method ="POST">
                  <div class="form-group">
                    <NO for="no_ktp">NO KTP (Nomor Induk Kependudukan)</label>
                    <input type="text" class="form-control" required="" name="no_ktp" value="<?=$tkt['id_tiket'];?>" id="no_ktp" placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                  </div>

                  <div class="form-group">
                   <label for="nama">Nama</label>
                    <input type="text" class="form-control" value="<?=$tkt['nama'];?>"  required="" name="nama" id="nama" placeholder="Nama">  
                  </div>

                  <div class="form-group"  required="">
                    <label>Jenis Kelamin</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jenis_kemain1" name="jk" value="laki-laki" <?php if($tkt['jenis_kelamin']=='laki-laki'){ echo 'checked';}?> class="custom-control-input">
                    <label class="custom-control-label" for="jenis_kemain1">LAKI-LAKI</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="jenis_kemain2" name="jk" value="perempuan" <?php if ($tkt['jenis_kelamin']=='perempuan'){ echo 'checked';}?> class="custom-control-input">
                    <label class="custom-control-label" for="jenis_kemain2">PEREMPUAN</label>
                  </div> 
                    <small class="form-text text-danger"><?= form_error('jk');?></small>
                  </div> 

                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" class="form-control" value="<?=$tkt['email'];?>"  required="" name="email" id="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control"  required="" value="<?=$tkt['alamat'];?>" name="alamat" id="alamat" placeholder="Alamat">
                  </div>

                  <div class="form-group">
                    <label for="no_telpon">No Telpon</label>
                    <input type="text" class="form-control"  required="" value="<?=$tkt['no_telpon'];?>" name="no_telpon" id="no_telpon" placeholder="No Telpon">
                  </div>

                  <div class="form-group">
                    <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                    <input type="date" class="form-control" value="<?=$tkt['tgl'];?>" required="" name="tgl_kunjungan" id="tgl_kunjungan" placeholder="">
                    </div>

                  <div class="form-group">
                    <label for="jam_kunjungan">Jam Kunjungan</label>
                    <input type="time" class="form-control" value="<?=$tkt['jam'];?>"  required="" name="jam_kunjungan" id="jam_kunjungan" placeholder="">
                  </div>

                   <div class="form-group">
                    <label for="jumlah">Jumlah Tiket</label>
                    <input type="number" min="1" class="form-control" value="<?=$tkt['jumlah'];?>"  required="" name="jumlah" id="jumlah" placeholder="" onkeyup="sum();" onchange="sum();">
                  </div>

                  <div class="form-group">
                    <label for="tottal">Total bayar</label>
                    <input readonly="" type="number" min="1" value="<?=$tkt['tottal'];?>" class="form-control"  required="" name="tottal" id="tottal" placeholder="">
                  </div>
                </div>
  
                  </form>
                  </div>
              </div>
          </div>
        </div>
        <?php endforeach;?>
       <!--MODAL ADD TIKETING-->

    <!--MODAL DETIL PEMBAYARAN-->  
    <?php foreach ($tikets as $tkt):?>
        <div class="modal fade" id="modalpembayaran<?=$tkt['id_tiket'];?>" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><I class="fa fa-user"></i> KONFIRMASI PEMBAYARAN TIKET</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
              </div>
              <div class="modal-body p-4">
                <div class="alert alert-primary" role="alert">
                      Data konfirmasi tiket tidak bisa diubah, <strong>pastikan anda mengisi data dengan benar!</strong>
                  </div>
              <form action="<?= base_url('tiket/add');?>" method="POST" enctype="multipart/form-data">

                  <input type="hidden" class="form-control" required="" name="id_tiket" value="<?=$tkt['id_tiket'];?>" id="no_ktp" placeholder="">

                  <div class="form-group">
                    <NO for="no_ktp">No Rekening</label>
                    <input type="text" class="form-control" required="" name="no_rek"  id="no_rek" placeholder="No Rekening">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                  </div>

                  <div class="form-group">
                   <label for="nama">Nama Pemilik Rekening</label>
                    <input type="text" class="form-control" required="" name="nama" id="nama" placeholder="Nama">  
                  </div>

                  <div class="form-group">
                    <label for="email">Tanggal Transfer</label>
                    <input type="date" class="form-control" required="" name="tgl_tf"  id="tgl_tf">
                  </div>

                   <div class="form-group">
                    <label for="email">Foto Bukti Transfer</label>
                    <input type="file" class="form-control" required="" name="foto" id="foto" placeholder="Email">
                  </div>
                  
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
          </div>
        </div>
        <?php endforeach;?>
       <!--MODAL ADD TIKETING-->

       <!-- MODAL MENUNGGU KONFIRM -->
       <div class="modal fade" id="modalkonfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Status Konfirmasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="alert alert-primary" role="alert">
                Hi, Data tiket kamu belum mendapat konfirmasi dari admin, mohon bersabar ya :)
              </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL MENUNGGU KONFIRM -->

      <!-- MODAL AKTIF TIKET -->
       <div class="modal fade" id="modalaktif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Status Konfirmasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="alert alert-success" role="alert">
                Hi, Tiket kamu sudaha aktif, silahkan datang ke lokasi sesuai tanggal dan jam pemesanan tiket :)
              </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
     <!-- MODAL AKTIF TIKET -->

           <!-- MODAL AKTIF TIKET -->
       <div class="modal fade" id="modaldigunakan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Status Konfirmasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="alert alert-info" role="alert">
                Hi, Terimakasih sudah berkunjung, kami menunggu kedatanggan anda kembali :)
              </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
     <!-- MODAL AKTIF TIKET -->


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