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
<div class="nav-rm fixed-top text-center font-weight-bold" style="margin-bottom:10px;">DETAIL RESERVASI</div>

<?php $i = 1;   
  foreach ($datamenu as $datarm) : ?>
  <div class="row">
    <div class="col">
    <a class="btn-rm btn text-dark" href="#" role="button" style="width:100%;height:120px;margin-bottom:10px;text-align: left !important;">
    <table>
    <tr>
    <td valign="top" rowspan="4"><img width="100px" height="100px" src="<?php echo base_url();?>asset/fotomenu/<?php echo $datarm->foto;?>"></td>
    </tr>
    <tr><td valign="top" style="text-transform:uppercase;padding-left:5px; font-weight:bold;font-size:20px;"> <?php echo $datarm->nama_menu;?></td></tr> 
    <tr><td valign="top" style="padding-left:5px; "><a class="btn-rm btn-danger text-light  " href="#" role="button" style="width:60px;">Rp. <?php echo $datarm->harga?></a></td></tr> 
    <tr><td valign="top" style="padding-left:5px; "> <?php echo $datarm->ket_menu;?></td></tr> 
    </table>
    <hr>
    </a>
    </div>
  </div>  
		<?php $i++; ?>
	<?php endforeach ;?>





  <div class="container">
    <div class="text-center"><h1><b>DETIL RESERVASI<b></h1></div>
   