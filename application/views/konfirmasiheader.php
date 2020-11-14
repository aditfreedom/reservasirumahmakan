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
<div class="nav-rm fixed-top text-center font-weight-bold" style="margin-bottom:10px;">KONFIRMASI RESERVASI</div>

  <div class="container">
    
  <form action="<?php echo base_url()?>dashboardandroid/lanjutreservasi" method="post">
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

        <table class="table table-responsive" style="margin:auto;   width: 50% !important; ">
        <tr>
        <td>
        <div class="form-group">
        <label for="">Nama Rumah Makan :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for=""><?php echo $nama_rm;?></label>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-group">
        <label for="">Menu Pemesanan :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for=""><?php echo $nama_menu;?></label>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-group">
        <label for="">No Meja Pemesanan :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for="">Meja<?php echo $no_meja;?></label>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-group">
        <label for="">Harga Item Pemesanan :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for="">Rp. <?php echo $harga;?></label>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-group">
        <label for="">Jumlah Pemesanan :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for=""><?php echo $jumlah_pemesanan;?></label>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-group">
        <label for="">Total Harga :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for="">Rp. <?php echo $total_harga;?></label>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-group">
        <label for="">Tanggal Reservasi :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for=""><?php echo $tanggal_reservasi;?></label>
        </div>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-group">
        <label for="">Waktu Reservasi :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for=""><?php echo $waktu_reservasi;?></label>
        </div>
        </td>
        </tr>

        <tr>
        <td>
        <div class="form-group">
        <label for="">Keterangan Tambahan :</label>
        </div>
        </td>
        <td>
        <div class="form-group">
        <label for=""><?php echo $keterangan_tambahan;?></label>
        </div>
        </td>
        </tr>
        </table>
        <button type="submit" style="width:100%" class="btn btn-primary"><b>Konfirmasi<b></button>


        </form>
  </div>
  </div>
   