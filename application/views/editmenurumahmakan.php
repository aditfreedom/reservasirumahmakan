<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT MENU</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Menu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($datamenu as $menu) : ?>
      <?php echo form_open_multipart('dashboardrumahmakan/updatemenurumahmakan');?>
        <div class="form-group" hidden>
        <input type="hidden" name="id_menu" class="form-control" value="<?php echo $menu->id_menu;?>">
        </div>
        <div class="form-group" hidden>
        <input type="hidden" name="id_rm" class="form-control" value="<?php echo $menu->id_rm;?>">
        </div>
        <div class="form-group" hidden>
        <input type="hidden" name="nama_rm" class="form-control" value="<?php echo $menu->nama_rm;?>">
        </div>
        <div class="form-group">
        <label for="">Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control" value="<?php echo $menu->nama_menu;?>" >
        </div>
        <div class="form-group">
        <label for="">Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $menu->harga;?>">
        </div>
        <div class="form-group">
        <label for="">Keterangan Paket Menu</label>
        <input type="text" name="ket_menu" class="form-control" value="<?php echo $menu->ket_menu;?>">
        </div>
        <div class="form-group">
        <label for="">Foto</label><br>
        <input type="hidden" name="fotolama" class="form-control" value="<?php echo $menu->foto;?>">
        <img src="<?php echo base_url();?>asset/fotomenu/<?php echo $menu->foto;?>" width="300px">
        </div>
        <div class="form-group">
        <label for="">Upload Foto Baru</label>
        <input type="file" name="foto" class="form-control">  
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <br>
        </form>
	<?php endforeach ;?>
    </section>
</div>