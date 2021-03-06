<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT RUMAH MAKAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Rumah Makan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($datarm as $data) : ?>
      <?php echo form_open_multipart('dashboard/updaterm');?>
        <div class="form-group" hidden>
        <input type="hidden" name="id_rm" class="form-control" value="<?php echo $data->id_rm;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Nama Rumah Makan</label>
        <input type="text" name="nama_rm" class="form-control" value="<?php echo $data->nama_rm;?>" readonly>
        </div>
        <div class="form-group" >
        <label for="">Nama Pemilik</label>
        <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $data->nama_pemilik;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Alamat Rumah Makan</label>
        <input type="text" name="alamat_rm" class="form-control" value="<?php echo $data->alamat_rm;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">No HP</label>
        <input type="text" name="no_hp" class="form-control" value="<?php echo $data->no_hp;?>"readonly>
        </div>
        <div class="form-group">
        <label for="">Foto</label><br>
        <input type="hidden" name="fotolama" class="form-control" value="<?php echo $data->foto_rm;?>"readonly>
        <img src="<?php echo base_url();?>asset/foto/<?php echo $data->foto_rm;?>" width="300px">
        </div>
        <div class="form-group" hidden>
        <label for="">Upload Foto Baru</label>
        <input type="file" name="foto_rm" class="form-control"readonly>  
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $data->username;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $data->password;?>"readonly>
        </div>
        <div class="form-group">
        <label for="">Status</label>
        <select class="form-control form-control" name="status" >
        <option disabled selected hidden><?php echo $data->status;?></option>
          <option>Menunggu</option>
          <option>Diterima</option>
          <option>Ditolak</option>
          <option>Suspend</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <br>
        </form>
	<?php endforeach ;?>
    </section>
</div>