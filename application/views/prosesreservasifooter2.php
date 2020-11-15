  <div class="container">
<?php foreach ($datamenu as $menu) : ?>

        <div class="form-group" hidden>
        <input type="text" name="nama_menu" class="form-control" value="<?php echo $menu->nama_menu;?>" >
        </div>
        <div class="form-group" hidden>
        <label for="">Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $menu->harga;?>">
        </div>
        <div class="form-group">
        <label for="">Jumlah Pesanan</label>
        <input type="number" name="jumlah_pemesanan" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">Tanggal Reservasi</label>
        <input type="date" name="tanggal_reservasi" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">Waktu Reservasi</label>
        <input type="text" name="waktu_reservasi" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">Keterangan Tambahan</label>
        <textarea  name="keterangan_tambahan" class="form-control"></textarea>
        </div>
        <button type="submit" style="width:100%" class="btn btn-primary"><b>Konfirmasi Reservasi<b></button>
  </form>
  <?php endforeach ;?>
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