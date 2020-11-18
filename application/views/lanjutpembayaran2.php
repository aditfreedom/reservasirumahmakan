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
  </div>
  </div>
   