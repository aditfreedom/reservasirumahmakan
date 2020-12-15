<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>STATUS RESERVASI</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/styleandroid.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>asset/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom:10px;">
  <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
<div class="nav-rm fixed-top text-center font-weight-bold" style="margin-bottom:10px;">RINCIAN RESERVASI</div>


<?php $i = 1;   
  foreach ($tb_reservasi as $datarm) : ?>
  <div class="row">
    <div class="col">
    <a class="btn-rm btn text-dark" href="<?php echo base_url()?>dashboardandroid/ambilreservasi/<?php echo $datarm->id_reservasi;?>" role="button" style="width:100%;height:150px;margin-bottom:10px;text-align: left !important;">
    <table>
    <tr>
    </tr>
    <tr><td valign="top" style="padding-left:5px;">Nama RM : <b><?php echo $datarm->nama_rm;?></b></td></tr> 
    <tr><td valign="top" style="padding-left:5px;">Pesanan : <b><?php echo $datarm->nama_menu;?></b></td></tr> 
    <tr><td valign="top" style="padding-left:5px;">Jumlah Pesanan : <b><?php echo $datarm->jumlah_pemesanan;?> Item</b></td></tr> 
    <tr><td valign="top" style="padding-left:5px;">Total Cost : <b>Rp. <?php echo $datarm->total_harga;?></b></td></tr> 
    <tr><td valign="top" style="padding-left:5px;">No. Meja : <b><?php echo $datarm->no_meja;?></b></td></tr> 
    <tr><td valign="top" style="padding-left:5px; ">Tanggal Reservasi : <b><?php echo $datarm->tanggal_reservasi;?></b></td></tr> 
    <tr><td valign="top" style="padding-left:5px; ">Waktu Reservasi : <b><?php echo $datarm->waktu_reservasi;?></b></td></tr> 

    <?php
    $status_reservasi= $datarm->status_reservasi;
    if ($status_reservasi=="Menunggu") {
      $class="btn-warning";
    }else if($status_reservasi=="Diterima"){
      $class="btn-success";
    }else{
      $class="btn-danger";
    }    
    ?>
    <tr><td valign="top" style="padding-left:5px; ">Status : <a class="btn-rm <?= $class;?>" href="#" role="button" style="width:60px;"><b><?php echo $datarm->status_reservasi?></a></b></td></tr> 

    </table>
    <hr>
    </a>
    </div>
  </div>  
		<?php $i++; ?>
	<?php endforeach ;?>


  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>