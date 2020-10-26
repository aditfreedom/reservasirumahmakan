<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT USER</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($userrumahmakan as $user) : ?>
		<form method="post" action="<?php echo base_url().'dashboardrumahmakan/updateuserrumahmakan'; ?>">
        <div class="form-group">
        <input type="hidden" name="id_rm" class="form-control" value="<?php echo $user->id_rm;?>">
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $user->username;?>" readonly>
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $user->password;?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>