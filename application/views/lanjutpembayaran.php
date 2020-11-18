<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PILIH MENU RUMAH MAKAN</title>
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
<div class="nav-rm fixed-top text-center font-weight-bold" style="margin-bottom:10px;">PROSES PEMBAYARAN</div>

  <div class="container">
    
  <?php echo form_open_multipart('dashboardandroid/lanjutreservasi');?>
  <div class="form-group" hidden>
        <input type="text" name="id_konsumen" class="form-control" value="<?php echo $id_konsumen;?>">
        </div>
      <div class="form-group"hidden>
        <input type="text" name="nama_konsumen" class="form-control" value="<?php echo $nama_konsumen;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="no_hp" class="form-control" value="<?php echo $no_hp;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="nama_rm" class="form-control" value="<?php echo $nama_rm;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="id_rm" class="form-control" value="<?php echo $id_rm;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="no_meja" class="form-control" value="<?php echo $no_meja;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="nama_menu" class="form-control" value="<?php echo $nama_menu;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="jumlah_pemesanan" class="form-control" value="<?php echo $jumlah_pemesanan;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="harga" class="form-control" value="<?php echo $harga;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="total_harga" class="form-control" value="<?php echo $total_harga;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="tanggal_reservasi" class="form-control" value="<?php echo $tanggal_reservasi;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="waktu_reservasi" class="form-control" value="<?php echo $waktu_reservasi;?>">
        </div>
        <div class="form-group"hidden>
        <input type="text" name="keterangan_tambahan" class="form-control" value="<?php echo $keterangan_tambahan;?>">
        </div>

        <div class="form-group"hidden>
        <input type="text" name="status_reservasi" class="form-control" value="<?php echo $status_reservasi;?>">
        </div>
   