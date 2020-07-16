<!--Counter Inbox-->
<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
    $query1=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_komentar=$query1->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>M-Techno | Pengguna</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assetsadm/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assetsadm/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pengguna
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Pengguna</a></li>
        <li class="active">Data Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-user-plus"></span> Add Pengguna</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
					<th>Photo</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Password</th>
                    <th>Kontak</th>
                    <th>Level</th>
                    <th style="text-align:center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($data->result_array() as $i) :
                       $pengguna_id=$i['pengguna_id'];
                       $pengguna_nama=$i['pengguna_nama'];
                       $pengguna_jenkel=$i['pengguna_jenkel'];
                       $pengguna_email=$i['pengguna_email'];
                       $pengguna_username=$i['pengguna_username'];
                       $pengguna_password=$i['pengguna_password'];
                       $pengguna_nohp=$i['pengguna_nohp'];
                       $pengguna_level=$i['pengguna_level'];
                       $pengguna_photo=$i['pengguna_photo'];
                    ?>
                <tr>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assetsadm/images/'.$pengguna_photo;?>"></td>
                  <td><?php echo $pengguna_nama;?></td>
                  <td><?php echo $pengguna_email;?></td>
                  <?php if($pengguna_jenkel=='L'):?>
                        <td>Laki-Laki</td>
                  <?php else:?>
                        <td>Perempuan</td>
                  <?php endif;?>
                  <td><?php echo $pengguna_password;?></td>
                  <td><?php echo $pengguna_nohp;?></td>
                  <?php if($pengguna_level=='1'):?>
                        <td>Administrator</td>
                  <?php else:?>
                        <td>Author</td>
                  <?php endif;?>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $pengguna_id;?>"><span class="fa fa-pencil"></span></a>
                        <!-- <a class="btn" href="<?php echo base_url().'admin/pengguna/reset_password/'.$pengguna_id;?>"><span class="fa fa-refresh"></span></a> -->
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $pengguna_id;?>"><span class="fa fa-trash"></span></a>
                  </td>
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

<!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Pengguna</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/simpan_pengguna'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-7">
                                            <input type="email" name="xemail" class="form-control" id="inputEmail3" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xusername" class="form-control" id="inputUserName" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-4 control-label">Ulangi Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkontak" class="form-control" id="inputUserName" placeholder="Kontak Person" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Level</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="xlevel" required>
                                                <option value="1">Administrator</option>
                                                <!-- <option value="2">Author</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto" required/>
                                        </div>
                                    </div>
                               

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
		
		
		<?php foreach ($data->result_array() as $i) :
              $pengguna_id=$i['pengguna_id'];
              $pengguna_nama=$i['pengguna_nama'];
              $pengguna_jenkel=$i['pengguna_jenkel'];
              $pengguna_email=$i['pengguna_email'];
              $pengguna_username=$i['pengguna_username'];
              $pengguna_password=$i['pengguna_password'];
              $pengguna_nohp=$i['pengguna_nohp'];
              $pengguna_level=$i['pengguna_level'];
              $pengguna_photo=$i['pengguna_photo'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $pengguna_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Pengguna</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/update_pengguna'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                        <div class="col-sm-7">
											<input type="hidden" name="kode" value="<?php echo $pengguna_id;?>"/> 
                                            <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $pengguna_nama;?>" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-7">
                                            <input type="email" name="xemail" class="form-control" value="<?php echo $pengguna_email;?>" id="inputEmail3" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-7">
										<?php if($pengguna_jenkel=='L'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
										<?php else:?>
											<div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
										<?php endif;?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xusername" class="form-control" value="<?php echo $pengguna_username;?>" id="inputUserName" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword4" class="col-sm-4 control-label">Ulangi Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkontak" class="form-control" value="<?php echo $pengguna_nohp;?>" id="inputUserName" placeholder="Kontak Person" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Level</label>
                                        <div class="col-sm-7">
                                            <select class="form-control" name="xlevel" required>
											<?php if($pengguna_level=='1'):?>
                                                <option value="1" selected>Administrator</option>
                                                <option value="2">Author</option>
											<?php else:?>
												<option value="1">Administrator</option>
                                                <option value="2" selected>Author</option>
											<?php endif;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                        <div class="col-sm-7">
                                            <input type="file" name="filefoto"/>
                                        </div>
                                    </div>
                               

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
	
	<?php foreach ($data->result_array() as $i) :
              $pengguna_id=$i['pengguna_id'];
              $pengguna_nama=$i['pengguna_nama'];
              $pengguna_jenkel=$i['pengguna_jenkel'];
              $pengguna_email=$i['pengguna_email'];
              $pengguna_username=$i['pengguna_username'];
              $pengguna_password=$i['pengguna_password'];
              $pengguna_nohp=$i['pengguna_nohp'];
              $pengguna_level=$i['pengguna_level'];
              $pengguna_photo=$i['pengguna_photo'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $pengguna_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengguna/hapus_pengguna'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
							<input type="hidden" name="kode" value="<?php echo $pengguna_id;?>"/> 
                            <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $pengguna_nama;?></b> ?</p>
                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
	
	<!--Modal Reset Password-->
        <div class="modal fade" id="ModalResetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
                    </div>
                    
                    <div class="modal-body">
                                
                            <table>
                                <tr>
                                    <th style="width:120px;">Username</th>
                                    <th>:</th>
                                    <th><?php echo $this->session->flashdata('uname');?></th>
                                </tr>
                                <tr>
                                    <th style="width:120px;">Password Baru</th>
                                    <th>:</th>
                                    <th><?php echo $this->session->flashdata('upass');?></th>
                                </tr>
                            </table>                     
                                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>


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
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='warning'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Warning',
                    text: "Gambar yang Anda masukan terlalu besar.",
                    showHideTransition: 'slide',
                    icon: 'warning',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FFC017'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Pengguna Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Pengguna berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Pengguna Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='show-modal'):?>
        <script type="text/javascript">
                $('#ModalResetPassword').modal('show');
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>
