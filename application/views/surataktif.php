<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">SURAT AKTIF SISWA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Surat Aktif Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <form method="post" action="<?php echo base_url().'dashboard/laporan'; ?>">
        <div class="form-group">
        <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nomor Surat</label>
        <input type="text" name="nosurat" class="form-control" placeholder="No Surat">
        </div>
        <div class="form-group">
        <label for="">Nama Siswa</label>
        <input type="text" name="namasiswa" class="form-control" placeholder="Nama Siswa">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>
        <div class="form-group">
        <label for="">Kelas</label>
        <select class="form-control" id="exampleFormControlSelect3" name="kelas">
        <option>I</option>
        <option>II</option>
        <option>III</option>
        <option>IV</option>
        <option>V</option>
        <option>VI</option>
        <option>VII</option>
        <option>VIII</option>
        <option>IX</option>
        <option>X</option>
        <option>XI</option>
        <option>XII</option>
        </select>
        </div>
        <div class="form-group">
        <label for="">Tanggal Surat</label>
        <input type="text" name="tgl_surat" class="form-control" placeholder="Contoh 12 Januari 2020">
        </div>
        <div class="form-group">
        <label for="">Nama Penandatangan</label>
        <input type="text" name="namattd" class="form-control" placeholder="Nama Penandatangan">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
        <label for="">Instansi</label>
        <select class="form-control" id="exampleFormControlSelect2" name="instansi">
        <option>SD</option>
        <option>SMP</option>
        <option>SMA</option>
        </select>
        </div>
        <div class="form-group">
        <label for="">NIS</label>
        <input type="text" name="nis" class="form-control" placeholder="NIS Siswa">
        </div>
        <div class="form-group">
        <label for="">Tempat/Tanggal Lahir</label>
        <input type="text" name="ttl" class="form-control" placeholder="Contoh Bireuen/12 Januari 2020">
        </div>
        <div class="form-group">
        <label for="">Tahun Ajaran</label>
        <select class="form-control" id="exampleFormControlSelect4" name="tahunajaran">
        <option>2020/2021</option>
        <option>2021/2022</option>
        <option>2022/2023</option>
        <option>2023/2024</option>
        <option>2024/2025</option>
        </select>
        </div>
        <div class="form-group">
        <label for="">Yang Menandatangani</label>
        <select class="form-control" id="exampleFormControlSelect1" name="ttd">
        <option>Kepala SD</option>
        <option>Kepala SMP</option>
        <option>Kepala SMA</option>
        </select>
        </div>
        <div class="form-group">
        <label for="">NIP</label>
        <input type="text" name="nip" class="form-control">
        </div>
    </div>
    </div>
        <button  type="submit" class="btn btn-primary" value="print">Proses Surat</button>
      </div>
        </form>

</div>
<!-- Button trigger modal -->



</div>

