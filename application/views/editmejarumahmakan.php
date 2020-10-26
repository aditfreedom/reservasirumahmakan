<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT MEJA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Status Meja</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($status as $statusmeja) : ?>
		<form method="post" action="<?php echo base_url().'dashboardrumahmakan/updatemejarumahmakan'; ?>">
        <div class="form-group">
        <input type="hidden" name="id_meja" class="form-control" value="<?php echo $statusmeja->id_meja;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="id_rm" class="form-control" value="<?php echo $statusmeja->id_rm;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="nama_rm" class="form-control" value="<?php echo $statusmeja->nama_rm;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">No Meja</label>
        <input type="text" name="no_meja" class="form-control" value="<?php echo $statusmeja->no_meja;?>">
        </div>
        <div class="form-group">
        <label for="">Kapasitas</label>
        <input type="text" name="kapasitas" class="form-control" value="<?php echo $statusmeja->kapasitas;?>">
        </div>
        <div class="form-group">
        <label for="">Status Meja</label>
        <select class="form-control form-control" name="status">
          <option disabled selected hidden ><?php echo $statusmeja->status;?></option>
          <option>Ready</option>
          <option>Penuh</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>