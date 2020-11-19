<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA MEJA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Meja</li>
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
              <th scope="col">NO MEJA</th>
              <th scope="col">KAPASITAS</th>
              <th scope="col">STATUS</th>
              <!-- <th scope="col">UBAH STATUS</th> -->
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($tb_meja as $datameja) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
            <td><?php echo $datameja->nama_rm;?></td>
			      <td><?php echo $datameja->no_meja;?></td>
                  <td><?php echo $datameja->kapasitas;?></td>
                  <td><?php echo $datameja->status;?></td>
                  <!-- <td><?php echo anchor('dashboard/editmeja/'.$datameja->id_meja,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	 -->
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

    </div>
   
</div>

</div>

