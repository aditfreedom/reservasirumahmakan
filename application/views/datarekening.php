<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA REKENING </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Rekening</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Rekening</button>
    <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA BANK</th>
              <th scope="col">ATAS NAMA</th>
              <th scope="col">NO REKENING</th>
              <th>AKSI  </th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_rekening as $rekening) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
            <td><?php echo $rekening->nama_bank;?></td>
            <td><?php echo $rekening->atas_nama;?></td>
			      <td><?php echo $rekening->no_rek;?></td>
            <td><?php echo anchor('dashboardrumahmakan/editrekening/'.$rekening->id_rm,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	

		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

    </div>
   
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Rekening</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url()?>dashboardrumahmakan/tambahrekening" method="post">
      <div class="form-group" hidden>
        <input type="text" name="id_rm" class="form-control" value="<?= $id_rm;?>">
        </div>
        <div class="form-group">
        <label for="">Nama Bank</label>
        <input type="text" name="nama_bank" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Atas Nama</label>
        <input type="text" name="atas_nama" class="form-control">
        </div>
        <div class="form-group">
        <label for="">No Rekening</label>
        <input type="text" name="no_rek" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <br>
        </form>
    </div>
  </div>
</div>


</div>

