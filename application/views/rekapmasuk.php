<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">REKAP SURAT MASUK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rekap Surat Masuk</li>
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
              <th scope="col">NO SURAT</th>
              <th scope="col">PERIHAL</th>
              <th scope="col">TANGGAL</th>
              <th colspan="3" scope="col" >AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	foreach ($rekapmasuk as $rekap) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
			    <td><?php echo $rekap->nosurat;?></td>
			      <td><?php echo $rekap->perihal ;?></td>
            <td><?php echo $rekap->tanggalsurat ;?></td>
            <td onclick="javascript: return confirm('Yakin Ingin Menghapus?')"><?php echo anchor('dashboard/hapusrekapmasuk/'.$rekap->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            <td><?php echo anchor('dashboard/editrekapmasuk/'.$rekap->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
            <td><?php echo anchor('mahasiswa/edit/'.$rekap->id,'<div class="btn btn-success btn-sm"><i class="fa fa-download"></i></div>')?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

    </div>
    </div>
        <button  type="submit" class="btn btn-primary" value="print">Proses Surat</button>
      </div>
        </form>

</div>

</div>

