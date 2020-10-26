<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA KONSUMEN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Konsumen</li>
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
              <th scope="col">ID KONSUMEN</th>
              <th scope="col">NAMA KONSUMEN</th>
              <th scope="col">NO HP</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_konsumen as $datakonsumen) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
          <td><?php echo $datakonsumen->id_konsumen;?></td>
			      <td><?php echo $datakonsumen->nama_konsumen;?></td>
                  <td><?php echo $datakonsumen->no_hp;?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

    </div>
   
</div>

</div>

