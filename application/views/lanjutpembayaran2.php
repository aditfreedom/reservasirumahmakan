<?php $i = 1; 
	foreach ($tb_rekening as $datarekening) : ?>

  <h3 class="text-center">PEMBAYARAN DP DAPAT DILAKUKAN DI</h3>
  <h4 class="text-center"><b><?= $datarekening->nama_bank?><b></h4>
  <h4 class="text-center"><b><?= $datarekening->no_rek?><b></h4>
  <h4 class="text-center"><b>a.n <?= $datarekening->atas_nama?><b></h4>
  <br>


  <h3 class="text-center">SILAHKAN UPLOAD FOTO BUKTI TRANSFER</h3>


        <div class="form-group">
        <input type="file" name="foto_struk" class="form-control" required>
        </div>
        <button type="submit" style="width:100%" class="btn btn-primary"><b>Proses Pembayaran<b></button>
        <?php $i++; ?>
	<?php endforeach ;?>

        </form>
<br><br>
<!-- Display the countdown timer in an element -->
<h4 class="text-center font-weight-bold">Kirimkan Sebelum</h4>
<h4 class="text-center" id="demo"></h4>

<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = (countDownDate+3600000) - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + " Jam "
  + minutes + " Menit " + seconds + " Detik ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "WAKTU PEMBAYARAN TELAH HABIS, SILAHKAN ORDER ULANG";
  }
}, 1000);
</script>
  </div>
  </div>
  <div class="fixed-bottom text-center text-light">
<div class="row">
    <div class="col">
    <a class="btn font-weight-bold text-light" href="<?php echo base_url()?>dashboardandroid" role="button" style="line-height:40px;font-size:30px;"><i class="fa fa-home"></i></a>
    </div>
    <div class="col">
    <a class="btn font-weight-bold text-light" href="<?php echo base_url()?>dashboardandroid/logout" role="button" style="line-height:40px;font-size:30px;"><i class="fa fa-sign-out-alt"></i></a>
    </div>  
  </div>
</div>
   