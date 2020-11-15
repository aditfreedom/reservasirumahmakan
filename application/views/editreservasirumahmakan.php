<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">UBAH STATUS RESERVASI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Status Reservasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($status_reservasi as $status) : ?>
		<form method="post" action="<?php echo base_url().'dashboardrumahmakan/updatereservasirumahmakan'; ?>">
        <div class="form-group">
        <input type="hidden" name="id_reservasi" class="form-control" value="<?php echo $status->id_reservasi;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="id_konsumen" class="form-control" value="<?php echo $status->id_konsumen;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Nama Konsumen</label>
        <input type="text" name="nama_konsumen" class="form-control" value="<?php echo $status->nama_konsumen;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">No HP</label>
        <input type="text" name="no_hp" class="form-control" value="<?php echo $status->no_hp;?>" readonly>
        </div>
        <div class="form-group" hidden>
        <input type="hidden" name="nama_rm" class="form-control" value="<?php echo $status->nama_rm;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">No. Meja</label>
        <input type="text" name="no_meja" class="form-control" value="<?php echo $status->no_meja;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Paket Menu</label>
        <input type="text" name="nama_menu" class="form-control" value="<?php echo $status->nama_menu;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Jumlah Pesanan</label>
        <input type="text" name="jumlah_pemesanan" class="form-control" value="<?php echo $status->jumlah_pemesanan;?>"readonly>
        </div>
        <div class="form-group">
        <label for="">Total Harga</label>
        <input type="text" name="total_harga" class="form-control" value="<?php echo $status->total_harga;?>"readonly>
        </div>
        <div class="form-group">
        <label for="">Tanggal Reservasi</label>
        <input type="text" name="tanggal_reservasi" class="form-control" value="<?php echo $status->tanggal_reservasi;?>"readonly>
        </div>
        <div class="form-group">
        <label for="">Waktu Reservasi</label>
        <input type="text" name="waktu_reservasi" class="form-control" value="<?php echo $status->waktu_reservasi;?>"readonly>
        </div>
        <div class="form-group">
        <label for="">Keterangan Tambahan</label>
        <textarea  name="keterangan_tambahan" class="form-control"><?php echo $status->keterangan_tambahan;?></textarea>
        </div>
        <div class="form-group">
        <label for="">Status Reservasi</label>
        <select class="form-control form-control" name="status_reservasi">
          <option disabled selected hidden><?php echo $status->status_reservasi;?></option>
          <option>Menunggu</option>
          <option>Diterima</option>
          <option>Ditolak</option>
        </select>
        </div>
        



        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>