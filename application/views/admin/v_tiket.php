<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>M-Techno | Inbox</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assetsadm/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/plugins/datepicker/datepicker3.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assetsadm/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<?php 
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }            
    ?>
	


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      <?=$tittle;?>
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Post</a></li>
        <li class="active">Lists</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">

            <div class="data-ticket">
              <div class="container mb-5">
              <?=$this->session->flashdata('notif');?>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                <th>NO</th>
      					<th>Id Tiket</th>
                <th>Nama</th>
                <th>Id Email</th>
      					<th>Tanggal Kunjungan</th>
      					<th>Jam Kunjungan</th>
                <th class="text-center">Status</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=1;
          					foreach ($pesan as $pesans) :?>
                    <tr>
                      <td><?=$no++;?></td>
                      <td> <a href="#" data-toggle="modal" data-target="#modaldetil<?=$pesans['id_tiket'];?>"><?=$pesans['id_tiket'];?></a></td>
                      <td><?=$pesans['nama'];?></td>
                      <td><?=$pesans['email'];?></td>
                      <td><?=$pesans['tgl'];?></td>
                      <td><?=$pesans['jam'];?></td>
                      <td>
                      <?php 
                        $tgl=date('Y-m-d');
                        if($pesans['status']==NULL):?>
                          <a href="#" class="btn btn-sm btn-info">Belum dibayar</a>
                        <?php elseif($pesans['status']==0):?>
                           <a data-toggle="modal" data-target="#modalkonfirm<?=$pesans['id_tiket'];?>" class="btn btn-sm btn-warning text-white">Cek Konfirmasi</a>
                        <?php elseif($pesans['status']==1):?>
                           <a data-toggle="modal" href="#" class="btn btn-sm btn-danger">Ditolak</a>
                        <?php elseif($pesans['status']==2):?>
                          <a data-toggle="modal" data-target="#modalaktif<?=$pesans['id_tiket'];?>"  class="btn btn-sm btn-success text-white">Tiket Aktif</a>
                        <?php elseif($pesans['status']==3):?>
                           <a data-toggle="modal" data-target="#modaldigunakan" class="btn btn-sm btn-info text-white">Sudah digunakan</a>
                        <?php else : ?>
                        <?php endif;?>
                    
                    </tr>
				          <?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
    $this->load->view('admin/v_footer');
  ?>


  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--MODAL DETSIL TIKETING-->  
      <?php foreach ($pesan as $pesans):?>
        <div class="modal fade" id="modaldetil<?=$pesans['id_tiket'];?>" tabindex="-1" role="dialog" aria-labelledby="modalTambah" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><I class="fa fa-user"></i> DETAIL TIKET</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class='fa fa-times-circle'></i></button>
              </div>
              <div class="modal-body p-4">
              <form action="<?= base_url('tiket/add');?>" method ="POST">
               <div class="form-group">
                 <h1><b><center><?=$pesans['id_tiket'];?></center></b></h1><hr>
                    <NO for="no_ktp">ID Tiket</label>
                    <input type="text" readonly="" class="form-control" required="" name="no_ktp" value="<?=$pesans['id_tiket'];?>" id="no_ktp" placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                  </div>

                  <!-- <div class="form-group">
                    <NO for="no_ktp">NO KTP (Nomor Induk Kependudukan)</label>
                    <input type="text" readonly="" class="form-control" required="" name="no_ktp" value="<?=$pesans['no_ktp'];?>" id="no_ktp" placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                  </div> -->

                  <div class="form-group">
                   <label for="nama">Nama</label>
                    <input type="text" readonly="" class="form-control" value="<?=$pesans['nama'];?>"  required="" name="nama" id="nama" placeholder="Nama">  
                  </div>

                  <div class="form-group"  required="">
                    <label>Jenis Kelamin</label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" readonly="" id="jenis_kemain1" name="jk" value="laki-laki" <?php if($pesans['jenis_kelamin']=='laki-laki'){ echo 'checked';}?> class="custom-control-input">
                    <label class="custom-control-label"  for="jenis_kemain1">LAKI-LAKI</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" readonly="" id="jenis_kemain2" name="jk" value="perempuan" <?php if ($pesans['jenis_kelamin']=='perempuan'){ echo 'checked';}?> class="custom-control-input">
                    <label class="custom-control-label" for="jenis_kemain2">PEREMPUAN</label>
                  </div> 
                    <small class="form-text text-danger"><?= form_error('jk');?></small>
                  </div> 

                  <div class="form-group">
                    <label for="email">email</label>
                    <input type="email" readonly="" class="form-control" value="<?=$pesans['email'];?>"  required="" name="email" id="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" readonly="" class="form-control"  required="" value="<?=$pesans['alamat'];?>" name="alamat" id="alamat" placeholder="Alamat">
                  </div>

                  <div class="form-group">
                    <label for="no_telpon">No Telpon</label>
                    <input type="text" readonly="" class="form-control"  required="" value="<?=$pesans['no_telpon'];?>" name="no_telpon" id="no_telpon" placeholder="No Telpon">
                  </div>

                  <div class="form-group">
                    <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                    <input type="date" readonly="" class="form-control" value="<?=$pesans['tgl'];?>" required="" name="tgl_kunjungan" id="tgl_kunjungan" placeholder="">
                    </div>

                  <div class="form-group">
                    <label for="jam_kunjungan">Jam Kunjungan</label>
                    <input type="time" readonly="" class="form-control" value="<?=$pesans['jam'];?>"  required="" name="jam_kunjungan" id="jam_kunjungan" placeholder="">
                  </div>

                   <div class="form-group">
                    <label for="jumlah">Jumlah Tiket</label>
                    <input type="number" readonly="" min="1" class="form-control" value="<?=$pesans['jumlah'];?>"  required="" name="jumlah" id="jumlah" placeholder="" onkeyup="sum();" onchange="sum();">
                  </div>

                  <div class="form-group">
                    <label for="tottal">Total bayar</label>
                    <input readonly="" readonly="" type="number" min="1" value="<?=$pesans['tottal'];?>" class="form-control"  required="" name="tottal" id="tottal" placeholder="">
                  </div>
                </div>
  
                  </form>
                  </div>
              </div>
          </div>
        </div>
        <?php endforeach;?>
       <!--MODAL DETAIL TIKETING-->

       <!-- MODAL KONFIRMASI  -->
       <?php foreach ($pesan as $pesans):?>
        <div class="modal fade" id="modalkonfirm<?=$pesans['id_tiket'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI PEMBAYARAN TIKET</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              

                <div class="row" style="margin-bottom:30px; margin:4px auto;">
                   <!-- FORM SETUJU -->
                    <form action="<?= base_url('admin/tiket/update');?>" method="POST" class="mb-5">
                    <h1><b><center><img width="300px" src="<?= base_url('assets/img/bukti_tf/').$pesans['foto'];?>" alt="foto"/></center></b></h1><hr>

                    <div class="form-group">
                    <NO for="no_ktp">ID Tiket</label>
                    <input type="text" name="id_tiket" id="id_tiket"  value="<?=$pesans['id_tiket'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                    </div>

                    <div class="form-group">
                    <NO for="no_ktp">Nomor Rekening</label>
                    <input type="text" name="no_rek" id="no_rek"  value="<?=$pesans['no_rek'];?>" readonly="" class="form-control" required=""  placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                    </div>

                    <div class="form-group">
                    <NO for="no_ktp">Nama Pemilik Rekening</label>
                    <input type="text" name="nama_rek" id="nama_rek"  value="<?=$pesans['nama_rek'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                    </div>

                    <div class="form-group">
                    <NO for="no_ktp">Tanggal Transfer</label>
                    <input type="text"  name="tgl_tf" id="tgl_tf"  value="<?=$pesans['tgl_tf'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                    </div>

                    <div class="form-group">
                    <input type="hidden" name="foto" id="foto" value="<?=$pesans['foto'];?>" readonly="" class="form-control" required="" >
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                    </div>
                    
                    <div class="form-group">
                    <input type="hidden" name="status" id="status" value="2" readonly="" class="form-control" required="" >
                    <small class="form-text form-danger"><?= form_error('npm');?></small>
                    </div><hr>

                    <button type="submit" name="btn-setuju" id="btn-setuju" class="btn btn-info btn-block mtb-5">Setujui Pembayaran</button> 
                    </form> 
                  </div>
                  <!-- FORM SETUJU -->

                  <!-- FORM TIDAK SETUJU -->
                    <form action="<?= base_url('admin/tiket/update');?>" method="POST" class="mt-5">
                      <input type="hidden" name="id_tiket" id="id_tiket"  value="<?=$pesans['id_tiket'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                      <input type="hidden" name="no_rek" id="no_rek"  value="<?=$pesans['no_rek'];?>" readonly="" class="form-control" required=""  placeholder="NIK">
                      <input type="hidden" name="nama_rek" id="nama_rek"  value="<?=$pesans['nama_rek'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                      <input type="hidden"  name="tgl_tf" id="tgl_tf"  value="<?=$pesans['tgl_tf'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                      <input type="hidden" name="foto" id="foto"  value="<?=$pesans['foto'];?>"readonly="" class="form-control" required="" >
                      <input type="hidden" name="status" id="status"  value="1" readonly="" class="form-control" required="" >  
                    <button type="submit" name="btn-tolak" id="btn-tolak"  class="btn btn-danger btn-block mt-5">Tolak Pembayaran</button> 
                  </form> 
                 <!-- FORM TIDAK SETUJU -->
              </div>
            </div>
          </div>
        </div>
      <?php endforeach;?>
       <!-- MODAL KONFIRMASI  -->

     <!-- MODAL TUKAR TIKET  -->
       <?php foreach ($pesan as $ps):?>
        <div class="modal fade" id="modalaktif<?=$ps['id_tiket'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KONFIRMASI PENGGUNAAN TIKET</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <h3>Data tiket dengan id <b><?=$ps['id_tiket'];?></b> akan digunakan ?</h3>
               <hr> <div class="row" style="margin-bottom:30px; margin:4px auto;">
                    <form action="<?= base_url('admin/tiket/update');?>" method="POST" class="mt-5">
                      <input type="hidden" name="id_tiket" id="id_tiket"  value="<?=$ps['id_tiket'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                      <input type="hidden" name="no_rek" id="no_rek"  value="<?=$ps['no_rek'];?>" readonly="" class="form-control" required=""  placeholder="NIK">
                      <input type="hidden" name="nama_rek" id="nama_rek"  value="<?=$ps['nama_rek'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                      <input type="hidden"  name="tgl_tf" id="tgl_tf"  value="<?=$ps['tgl_tf'];?>" readonly="" class="form-control" required="" placeholder="NIK">
                      <input type="hidden" name="foto" id="foto"  value="<?=$ps['foto'];?>"readonly="" class="form-control" required="" >
                      <input type="hidden" name="status" id="status"  value="3 readonly="" class="form-control" required="" >  
                    <button type="submit" name="btn-tolak" id="btn-tolak"  class="btn btn-primary btn-block mt-5">Simpan</button> 
                  </form> 
                 <!-- FORM TIDAK SETUJU -->
              </div>
            </div>
          </div>
        </div>
        </div>
      <?php endforeach;?>
       <!-- MODAL TUKAR TIKET  -->


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assetsadm/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assetsadm/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assetsadm/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assetsadm/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assetsadm/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assetsadm/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assetsadm/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assetsadm/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assetsadm/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Data Tiket Gagal Diupdate.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    
    <?php elseif($this->session->flashdata('msg')=='success'):?>
      <script type="text/javascript">
              $.toast({
                  heading: 'Success',
                  text: "Data Tiket Berhasil Diupdate",
                  showHideTransition: 'slide',
                  icon: 'success',
                  hideAfter: false,
                  position: 'bottom-right',
                  bgColor: '#7EC857'
              });
      </script>
    <?php else:?>
    <?php endif;?>
</body>
</html>
