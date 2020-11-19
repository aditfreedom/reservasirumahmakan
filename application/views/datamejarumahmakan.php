<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA MEJA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Meja</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Meja</button><br><br>

    <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NO MEJA</th>
              <th scope="col">KAPASITAS</th>
              <th scope="col">STATUS</th>
              <th scope="col" >AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_meja as $datameja) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
			      <td><?php echo $datameja->no_meja;?></td>
                  <td><?php echo $datameja->kapasitas;?></td>
                  <td><?php echo $datameja->status;?></td>
                  <td><?php echo anchor('dashboardrumahmakan/hapusmejarumahmakan/'.$datameja->id_meja,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?> <?php echo anchor('dashboardrumahmakan/editmejarumahmakan/'.$datameja->id_meja,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	

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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Meja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('dashboardrumahmakan/tambahmejarumahmakan');?>
        <div class="form-group" hidden>
        <input type="hidden" name="id_rm"  class="form-control" value="<?php echo $this->session->userdata('id_rm');?>">
        </div>
        <div class="form-group" hidden>
        <input type="hidden" name="nama_rm" class="form-control" value="<?php echo $this->session->userdata('nama_rm');?>">
        </div>
        <div class="form-group">
        <label for="">No Meja</label>
        <input type="text" name="no_meja" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Kapasitas</label>
        <input type="text" name="kapasitas" class="form-control">
        </div> 
        <div class="form-group">
        <label for="">Status Meja</label>
        <select class="form-control form-control" name="status">
          <option>Ready</option>
          <option>Penuh</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

