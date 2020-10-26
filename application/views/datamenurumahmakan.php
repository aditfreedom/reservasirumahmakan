<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA MENU</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Menu</button>
    <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA MENU</th>
              <th scope="col">HARGA</th>
              <th scope="col">KETERANGAN MENU</th>
              <th colspan="2" scope="col" >AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_menu as $datamenurumahmakan) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
			      <td><?php echo $datamenurumahmakan->nama_menu;?></td>
                  <td><?php echo $datamenurumahmakan->harga;?></td>
                  <td><?php echo $datamenurumahmakan->ket_menu;?></td>
                  <td onclick="javascript: return confirm('Yakin Ingin Menghapus?')"><?php echo anchor('dashboardrumahmakan/hapusmenurumahmakan/'.$datamenurumahmakan->id_menu,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
                  <td><?php echo anchor('dashboardrumahmakan/editmenurumahmakan/'.$datamenurumahmakan->id_menu,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('dashboardrumahmakan/tambahmenurumahmakan');?>
        <div class="form-group" hidden>
        <input type="hidden" name="id_rm" class="form-control" value="<?php echo $this->session->userdata('id_rm');?>">
        </div>
        <div class="form-group" hidden>
        <input type="hidden" name="nama_rm" class="form-control" value="<?php echo $this->session->userdata('nama_rm');?>">
        </div>
        <div class="form-group">
        <label for="">Nama Paket Menu</label>
        <input type="text" name="nama_menu" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Harga</label>
        <input type="text" name="harga" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Keterangan Menu</label>
        <input type="text" name="ket_menu" class="form-control" rows="3">
        </div>
        <div class="form-group">
        <label for="">Foto</label>
        <input type="file" name="foto" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

