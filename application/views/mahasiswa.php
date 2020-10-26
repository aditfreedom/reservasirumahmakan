<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA SISWA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Siswa</button>
<table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA</th>
              <th scope="col">NIM</th>
              <th scope="col">TANGGAL LAHIR</th>
              <th scope="col">JURUSAN</th>
              <th colspan="2" scope="col" >AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($mahasiswa as $mhs) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
			    <td><?php echo $mhs->nama;?></td>
			      <td><?php echo $mhs->nim ;?></td>
            <td><?php echo $mhs->tgl_lahir ;?></td>
            <td><?php echo $mhs->jurusan ;?></td>
            <td onclick="javascript: return confirm('Yakin Ingin Menghapus?')"><?php echo anchor('mahasiswa/hapus/'.$mhs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td><?php echo anchor('mahasiswa/edit/'.$mhs->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'mahasiswa/tambah_data'; ?>">
        <div class="form-group">
        <label for="">Nama Siswa</label>
        <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
        <label for="">NIM</label>
        <input type="text" name="nim" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Jurusan</label>
        <input type="text" name="jurusan" class="form-control">
        </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

