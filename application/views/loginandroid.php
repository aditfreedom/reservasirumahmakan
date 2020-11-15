<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="<?=base_url()?>/favicon.png" type="image/png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'login.css';?>">
    <script src="https://kit.fontawesome.com/2d7830743a.js" crossorigin="anonymous"></script>

    <title>APLIKASI RESERVASI RUMAH MAKAN</title>
  </head>
  <div class="limiter">
  <body class="primcol"  style="background-image: url(<?php echo base_url('bg_andro.jpg');?>);">
      <div class="head font-weight-bold">
        <br><br>
  </div>
<div class="cont2 shadow p-3 mb-5 bg-white rounded">
        <img class="img mx-auto d-block" src="<?php echo base_url('favicon.png');?>" width="30%"><br>
        <h6 class="text-center font-weight-bold">APLIKASI RESERVASI RUMAH MAKAN<br>SILAHKAN LOGIN</h6>
        <form action="<?php echo base_url('home_android/login_aksi');?>" method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="No HP" name="username" required>
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block font-weight-bold">LOGIN</button>
            <div class="d-flex justify-content-center" style="margin-top:-20px"><strong ><a href="<?php echo base_url('home_android/registrasi_android');?>">REGISTER</a></strong></div>
        </form>
    </div>
    <br><br>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>