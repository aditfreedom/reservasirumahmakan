<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT SISWA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($mahasiswa as $mhs) : ?>
		<form method="post" action="<?php echo base_url().'mahasiswa/update'; ?>">
        <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id;?>">
        </div>
        <div class="form-group">
        <label for="">Nama Siswa</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama;?>">
        </div>
        <div class="form-group">
        <label for="">NIM</label>
        <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim;?>">
        </div>
        <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir;?>">
        </div>
        <div class="form-group">
        <label for="">Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="<?php echo $mhs->jurusan;?>">
        </div>
        <button type="reset" class="btn btn-danger" value="reset">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>