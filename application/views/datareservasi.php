<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA RESERVASI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Reservasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">

    <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA KONSUMEN</th>
              <th scope="col">NO HP</th>
              <th scope="col">NAMA RUMAH MAKAN</th>
              <th scope="col">MEJA</th>
              <th scope="col">MAKANAN</th>
              <th scope="col">JUMLAH</th>
              <th scope="col">TANGGAL RESERVASI</th>
              <th scope="col">WAKTU</th>
              <th scope="col">STATUS</th>
              <th scope="col">UBAH STATUS</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_reservasi as $datareservasi) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
			      <td><?php echo $datareservasi->nama_konsumen;?></td>
                  <td><?php echo $datareservasi->no_hp;?></td>
                  <td><?php echo $datareservasi->nama_rm;?></td>
                  <td><?php echo $datareservasi->no_meja;?></td>
                  <td><?php echo $datareservasi->nama_menu;?></td>
                  <td><?php echo $datareservasi->jumlah_pemesanan;?></td>
                  <td><?php echo $datareservasi->tanggal_reservasi;?></td>
                  <td><?php echo $datareservasi->waktu_reservasi;?></td>
                  <td><?php echo $datareservasi->status_reservasi;?></td>
                  <td><?php echo anchor('dashboard/editreservasi/'.$datareservasi->id_reservasi,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	
                  </tr>

		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

    </div>
   
</div>


</div>

