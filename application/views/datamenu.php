<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA MENU</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Menu</li>
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
              <th scope="col">NAMA MENU</th>
              <th scope="col">HARGA</th>
              <th scope="col">KETERANGAN MENU</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_menu as $datamenu) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
          <td><?php echo $datamenu->nama_rm;?></td>
			      <td><?php echo $datamenu->nama_menu;?></td>
                  <td><?php echo $datamenu->harga;?></td>
                  <td><?php echo $datamenu->ket_menu;?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

    </div>
   
</div>

</div>

