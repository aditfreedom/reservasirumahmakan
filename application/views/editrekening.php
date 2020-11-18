<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT REKENING</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Rekening</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($tb_rekening as $rekening) : ?>
    <form action="<?= base_url()?>dashboardrumahmakan/editrekening" method="post">

        <div class="form-group">
        <label for="">Nama Bank</label>
        <input type="text" name="nama_bank" class="form-control" value="<?php echo $rekening->nama_bank;?>">
        </div>
        <label for="">Atas Nama</label>
        <input type="text" name="atas_nama" class="form-control" value="<?php echo $rekening->atas_nama;?>">
        </div>
        <div class="form-group">
        <label for="">No Rekening</label>
        <input type="text" name="nama_rm" class="form-control" value="<?php echo $rekening->no_rek;?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <br>
        </form>

	<?php endforeach ;?>
    </section>
</div>