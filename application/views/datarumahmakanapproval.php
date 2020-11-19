<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">APPROVAL RUMAH MAKAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Rumah Makan</li>
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
              <th scope="col">NAMA RUMAH MAKAN</th>
              <th scope="col">PEMILIK</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">NO HP</th>
              <th scope="col">STATUS</th>
              <th scope="col" >AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_rm as $datarm) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
			    <td><?php echo $datarm->nama_rm;?></td>
			      <td><?php echo $datarm->nama_pemilik ;?></td>
                  <td><?php echo $datarm->alamat_rm;?></td>
                  <td><?php echo $datarm->no_hp ;?></td>
                  <td><?php echo $datarm->status ;?></td>
                  <td><?php echo anchor('dashboard/hapusrm/'.$datarm->id_rm,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?> <?php echo anchor('dashboard/editrm/'.$datarm->id_rm,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Rumah Makan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('dashboard/tambahrm');?>
        <div class="form-group">
        <label for="">Nama Rumah Makan</label>
        <input type="text" name="nama_rm" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Nama Pemilik RM</label>
        <input type="text" name="nama_pemilik" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Alamat RM</label>
        <input type="text" name="alamat_rm" class="form-control">
        </div>
        <div class="form-group">
        <label for="">No. HP</label>
        <input type="text" name="no_hp" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Foto</label>
        <input type="file" name="foto_rm" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Status</label>
        <select class="form-control form-control" name="status">
          <option>Menunggu</option>
          <option>Diterima</option>
          <option>Ditolak</option>
          <option>Suspend</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

