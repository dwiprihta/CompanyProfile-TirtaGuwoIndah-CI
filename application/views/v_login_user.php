<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tirta Guwo Indah Login | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo base_url('assets/img/a2.png');?>" rel="icon">
  <link href="<?php echo base_url('assets/img/a2.png');?>" rel="apple-touch-icon">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/font-awesome/css/font-awesome.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assetsadm/plugins/iCheck/square/blue.css'?>">

  
</head>
<body class="bg-login">
<div class="login-box">
  <div>
   <p><?php echo $this->session->flashdata('notif');?></p>
  </div>
  <!-- /.login-logo -->
  <div style="border-radius:20px;" class="login-box-body">
    <p class="login-box-msg"> <img style="width:150px;" src="<?php echo base_url('assets/img/A2.png')?>" alt="" class="img-fluid mb-3"></p><hr/>

    <form action="<?php echo base_url('user/login')?>" method="post" novalidate>
    <?=$this->session->flashdata('notif')?>
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
         <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
      </div>
      <div class="form-group">
        <input type="password" name="pass" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <?php echo form_error('pass','<div class="text-danger">','</div>'); ?>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-lg-12 mb-5">
         <input id="" type="submit" value="Login" class="btn btn-md btn-primary btn-block">
        </div>
        <!-- /.col -->
      </div>
    </form>
   <div id='ResponseInput'></div>
    
    <!-- /.social-auth-links -->
    <hr/>
    <p><center>Belum Punya akun ?<a href="<?=base_url('user/register');?>"> Daftar Sekarang</a>
</center></p>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assetsadm/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assetsadm/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assetsadm/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
