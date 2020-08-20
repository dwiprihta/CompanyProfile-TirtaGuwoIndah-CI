<!DOCTYPE html>
<html lang="en">
<head>
    <title>CETAK TIKET</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="<?php echo base_url('assets/css/ticket.css')?>" rel="stylesheet">
</head>
<body>
   <section class="container">
  <div class="row">
  <?php foreach($tikets as $tiket ):?>
        <div class="col-lg-12 mt-4">
          <div class="card mb" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
              <!-- <img src="<?= base_url('assets/img/ticket.jpg');?>" class="card-img mt-3" alt="..."> -->
              </div>
              <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $tiket['id_tiket'];?> </h5>
                <p class="card-text"><?= $tiket['nama'];?> (<?= $tiket['email'];?>)</p>
                <p class="card-text"><?= $tiket['tgl'];?> (<?= $tiket['jam'];?>)</p>
                <p class="card-text"><?= $tiket['jumlah'];?> Tiket  </p>
                <hr>
                   <h5 class="barcode"><?= $tiket['id_tiket'];?> </h5>
              </div>
              </div>
            </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
</section>
</body>
</html>

  <?php foreach($tikets as $tiket):?>
        <?=$tiket['id_tiket'];?>
   <?php endforeach;?>