<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">PROFIL PENGGUNA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Profil Pengguna</li>
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
              <th scope="col">ID</th>
              <th scope="col">USERNAME</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1;  ?>
		    <tr class="nomor text-center">
            <td><?php echo $id_rm;?></td>
            <td><?php echo $username;?></td>
			      <td><?php echo $password;?></td>
            <td><?php echo anchor('dashboardrumahmakan/editrm2/'.$id_rm,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	
		</tr>
	<?php ?>
          </tbody>
        </table>

    </div>
   
</div>

</div>

