<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>APLIKASI RESERVASI RUMAH MAKAN</title>
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
  <body class="bodyhome">

<!-- <div class="jumbotron mb-0" >
</div> -->

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="5000">
    <img src="<?php echo base_url()?>/bg_login.jpg" class="d-cover w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="5000">
    <img src="<?php echo base_url()?>/bg2.jpg" class="d-cover w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="5000">
    <img src="<?php echo base_url()?>/bg3.jpg" class="d-cover w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="position-sticky bg-gradient-light shadow" style="margin-bottom:10px;">.</div>
<h1 class="font-weight-bold text-center">MENU UTAMA</h1>
<div class="container text-light text-center">
  <div class="row" style="margin-bottom:30px;">
  <table  class="table table-borderless" style="margin:auto;   width: 100% !important; ">
<tr>
  <td>
  <a class="btn bg-gradient-warning font-weight-bold" href="<?php echo base_url()?>dashboardandroid/reservasiandroid" role="button" style="width:70%;padding-top:10%;"><i class="fa fa-utensils"></i><p style="font-size:3vw;">RESERVASI <br>RUMAH MAKAN</p></a>
  </td>
  <td>
  <a class="btn bg-gradient-warning font-weight-bold" href="<?php echo base_url()?>dashboardandroid/statusreservasiandroid" role="button" style="width:70%;padding-top:10%;"><i class="fa fa-info-circle"></i><p style="font-size:3vw;">STATUS PEMESANAN</p></a>
  </td>
</tr>
<td>
<a class="btn bg-gradient-warning font-weight-bold" href="<?php echo base_url()?>dashboardandroid/riwayatreservasiandroid" role="button" style="width:70%;padding-top:10%;"><i class="fa fa-history"></i><p style="font-size:3vw;">RIWAYAT RESERVASI</p></a>
  </td>
  <td>
  <a class="btn bg-gradient-warning font-weight-bold" href="#" role="button" style="width:70%;padding-top:10%;"><i class="fa fa-user"></i><p style="font-size:3vw;">TENTANG APLIKASI</p></a>
  </td>
</tr>

<div class="fixed-bottom text-center text-light">
<div class="row">
    <div class="col">
    <a class="btn font-weight-bold text-light" href="<?php echo base_url()?>dashboardandroid/editprofilandroid" role="button" style="line-height:40px;font-size:30px;"><i class="fa fa-user"></i></a>
    </div>
    <div class="col">
    <a class="btn font-weight-bold text-light" href="<?php echo base_url()?>dashboardandroid/keranjang" role="button" style="line-height:40px;font-size:30px;"><i class="fa fa-shopping-cart"></i></a>
    </div>
    <div class="col">
    <a class="btn font-weight-bold text-light" href="<?php echo base_url()?>dashboardandroid/logout" role="button" style="line-height:40px;font-size:30px;"><i class="fa fa-sign-out-alt"></i></a>
    </div>  
  </div>
</div>

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