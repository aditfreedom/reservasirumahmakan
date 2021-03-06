<?php

class Dashboardandroid extends CI_Controller{
    function __construct(){
        parent::__construct();
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('home_android'));
		}
        
    }

    public function index(){
            $sess_data = $this->session->userdata();
            // $this->load->view('template/sidebar', $sess_data);
            $this->load->view('homeandroid',$sess_data);
     }

     public function datarumahmakan(){
        $data['tb_rm'] = $this->M_reservasirumahmakan->tampil_data_datarumahmakan()->result();
        $sess_data = $this->session->userdata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $sess_data);
        $this->load->view('datarumahmakan',$data);
        $this->load->view('template/footer');

 }

 public function reservasiandroid(){
    $data['tb_rm'] = $this->M_reservasirumahmakan->tampil_data_datarumahmakan()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('reservasiandroid',$data,$sess_data);
}

 public function datarumahmakanapproval(){
    $data['tb_rm'] = $this->M_reservasirumahmakan->tampil_data_datarumahmakanapproval()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $sess_data);
    $this->load->view('datarumahmakanapproval',$data);
    $this->load->view('template/footer');

}

 public function datamenu(){
    $data['tb_menu'] = $this->M_reservasirumahmakan->tampil_data_datamenu()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $sess_data);
    $this->load->view('datamenu',$data);
    $this->load->view('template/footer');
}

public function ambilmenurm($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_rm' => $id);
    $data['tb_menu'] = $this->M_reservasirumahmakan->ambil_data_datamenurumahmakan($id,'tb_menu')->result();
    $this->load->view('ambil_menu',$data,$sess_data);


}



public function statusreservasiandroid(){
    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_konsumen');
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datareservasirumahmakanandroid($where)->result();
    $this->load->view('statusreservasiandroid',$data);
}

public function ambilreservasi($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_reservasi' => $id);
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->ambilreservasi($id,'tb_menu')->result();
    $this->load->view('detilreservasi',$data,$sess_data);


}

public function riwayatreservasiandroid(){
    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_konsumen');
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datariwayatreservasirumahmakanandroid($where)->result();
    $this->load->view('riwayatreservasiandroid',$data);
}

public function tentang(){
    $this->load->view('tentang');
}


public function editprofilandroid(){
    $sess_data = $this->session->userdata();
    $this->load->view('editprofilandroid',$sess_data);
}


public function editrm($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_rm' => $id);
    $data['datarm'] = $this->M_reservasirumahmakan->editrm($id,'tb_rm')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebar',$sess_data);
  $this->load->view('editrm',$data);
  $this->load->view('template/footer');
}

public function editreservasi($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_reservasi' => $id);
    $data['status_reservasi'] = $this->M_reservasirumahmakan->editreservasi($id,'tb_reservasi')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebar',$sess_data);
  $this->load->view('editreservasi',$data);
  $this->load->view('template/footer');
}

public function editriwayatreservasi($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_reservasi' => $id);
    $data['status_reservasi'] = $this->M_reservasirumahmakan->editreservasi($id,'tb_reservasi')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebar',$sess_data);
  $this->load->view('editreservasi',$data);
  $this->load->view('template/footer');
}

public function prosesreservasi(){
    $sess_data = $this->session->userdata();
    $id =  $this->input->get('mn');
    $idrm = $this->input->get('rm');
    $where1 = ['id_menu'=>$id];
    $where2 = ['id_rm'=>$idrm];
    $data['datamenu'] = $this->M_reservasirumahmakan->editmenurumahmakan($where1,'tb_menu')->result();
    $data2['tb_rm'] = $this->M_reservasirumahmakan->editrm($where2,'tb_rm')->result();
    $this->load->view('prosesreservasiheader',$data);
    $this->load->view('prosesreservasiheader1',$sess_data);
    $this->load->view('prosesreservasifooter',$data2);
    $this->load->view('prosesreservasifooter1',$data);
    $data1['datamenu'] = $this->M_reservasirumahmakan->ambilmejaready($idrm,'tb_meja')->result();
    $this->load->view('prosesreservasifootermeja',$data1);
    $this->load->view('prosesreservasifooter2',$data);
}

public function konfirmasireservasi(){
    $sess_data = $this->session->userdata();
    $id_konsumen       = $this->input->post('id_konsumen');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp               = $this->input->post('no_hp');
    $nama_rm             = $this->input->post('nama_rm');
    $id_rm               = $this->input->post('id_rm');
    $no_meja             = $this->input->post('no_meja');
    $nama_menu           = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $harga               = $this->input->post('harga');
    $total_harga         =  (int)$jumlah_pemesanan*(int)$harga;
    $tanggal_reservasi   = $this->input->post('tanggal_reservasi');
    $waktu_reservasi     = $this->input->post('waktu_reservasi');
    $keterangan_tambahan = $this->input->post('keterangan_tambahan');
    $status_reservasi    = "Menunggu";


    $data = array(
        'id_konsumen' => $id_konsumen,
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'id_rm' => $id_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'harga' => $harga,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'keterangan_tambahan' => $keterangan_tambahan,
        'status_reservasi' => $status_reservasi

    );

    $this->load->view('konfirmasiheader',$data);
}

public function lanjutpembayaran(){
    $sess_data          = $this->session->userdata();
    $id_konsumen        = $this->input->post('id_konsumen');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp               = $this->input->post('no_hp');
    $nama_rm             = $this->input->post('nama_rm');
    $id_rm               = $this->input->post('id_rm');
    $no_meja             = $this->input->post('no_meja');
    $nama_menu           = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $harga               = $this->input->post('harga');
    $total_harga         =  (int)$jumlah_pemesanan*(int)$harga;
    $tanggal_reservasi   = $this->input->post('tanggal_reservasi');
    $waktu_reservasi     = $this->input->post('waktu_reservasi');
    $keterangan_tambahan = $this->input->post('keterangan_tambahan');
    $status_reservasi    = "Menunggu";
    $status_bayar        = "Belum Bayar";



    $data = array(
        'id_konsumen' => $id_konsumen,
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'id_rm' => $id_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'keterangan_tambahan' => $keterangan_tambahan,
        'status_reservasi' => $status_reservasi,
        'status_bayar' => $status_bayar
    );

    $data3 = array(
        'id_konsumen' => $id_konsumen,
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'id_rm' => $id_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'harga' => $harga,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'keterangan_tambahan' => $keterangan_tambahan,
        'status_reservasi' => $status_reservasi,
        'status_bayar' => $status_bayar
    );

    $this->M_reservasirumahmakan->tambahreservasi($data,'tb_reservasi');
    $this->load->view('keranjang');
    

    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_konsumen');
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->ambil_data_keranjang($where)->result();
    $this->load->view('keranjang2',$data);

    // $this->load->view('lanjutpembayaran',$data3);
    // $data2['tb_rekening'] = $this->M_reservasirumahmakan->tampil_data_datarekening($id_rm,'tb_rekening')->result();
    // $this->load->view('lanjutpembayaran2',$data2);

}

public function keranjang(){
    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_konsumen');
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->ambil_data_keranjang($where)->result();
    $this->load->view('keranjang2',$data);
}

public function bayarkeranjang($id){
    $sess_data          = $this->session->userdata();
    $id =    array ('id_reservasi' => $id);
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->editkeranjang($id,'tb_reservasi')->result();
   
    $this->load->view('bayarkeranjang',$data);


    // $data3['tb_rekening'] = $this->M_reservasirumahmakan->tampil_data_datarekening($id_rm,'tb_rekening')->result();
    // $this->load->view('bayarkeranjang2',$data3);

}

public function bayarkeranjangnext(){
    $sess_data      = $this->session->userdata();
    $id_reservasi         = $this->input->post('id_reservasi');
    $id_konsumen         = $this->input->post('id_konsumen');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp               = $this->input->post('no_hp');
    $nama_rm             = $this->input->post('nama_rm');
    $id_rm               = $this->input->post('id_rm');
    $no_meja             = $this->input->post('no_meja');
    $nama_menu           = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $total_harga         = $this->input->post('total_harga');
    $tanggal_reservasi   = $this->input->post('tanggal_reservasi'); //y-m-d
    $waktu_reservasi     = $this->input->post('waktu_reservasi'); // H:i:s
    $keterangan_tambahan = $this->input->post('keterangan_tambahan');
    $status_reservasi    = $this->input->post('status_reservasi');


    $data3 = array(
        'id_reservasi' => $id_reservasi,
        'id_konsumen' => $id_konsumen,
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'id_rm' => $id_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'keterangan_tambahan' => $keterangan_tambahan,
        'status_reservasi' => $status_reservasi
    );

    $data3['tb_rekening'] = $this->M_reservasirumahmakan->tampil_data_datarekening($id_rm,'tb_rekening')->result();
    $this->load->view('bayarkeranjang2',$data3);

}

public function gantireservasi(){
    $id_reservasi         = $this->input->post('id_reservasi');
    $id_konsumen         = $this->input->post('id_konsumen');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp               = $this->input->post('no_hp');
    $nama_rm             = $this->input->post('nama_rm');
    $id_rm               = $this->input->post('id_rm');
    $no_meja             = $this->input->post('no_meja');
    $nama_menu           = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $total_harga         = $this->input->post('total_harga');
    $tanggal_reservasi   = $this->input->post('tanggal_reservasi'); // Y-m-d
    $waktu_reservasi     = $this->input->post('waktu_reservasi');
    $keterangan_tambahan = $this->input->post('keterangan_tambahan');
    $status_reservasi    = $this->input->post('status_reservasi');
    $status_bayar         = $this->input->post('status_bayar');
    date_default_timezone_set("Asia/Jakarta");
    $tanggalwkt           = date('Y-m-d H:i:s');


    $config['upload_path']          = 'asset/fotostruk/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (! $this->upload->do_upload('foto_struk')) {
        $this->load->view('errorupload');
    }else{
        $foto_struk=$this->upload->data('file_name');
    }


    $data = array(
        'id_konsumen' => $id_konsumen,
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'id_rm' => $id_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'keterangan_tambahan' => $keterangan_tambahan,
        'foto_struk' => $foto_struk,
        'status_reservasi' => $status_reservasi,
        'tanggalwkt' => $tanggalwkt,
        'status_bayar' => $status_bayar
    );

    $where = array(
        'id_reservasi' => $id_reservasi
    );
    $this->M_reservasirumahmakan->updatekeranjang($where,$data,'tb_rm');
    $this->load->view('reservasisukses');
    $this->load->view('homeandroid');
}


public function lanjutreservasi(){
    $sess_data = $this->session->userdata();
    $id_konsumen       = $this->input->post('id_konsumen');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp               = $this->input->post('no_hp');
    $nama_rm             = $this->input->post('nama_rm');
    $id_rm               = $this->input->post('id_rm');
    $no_meja             = $this->input->post('no_meja');
    $nama_menu           = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $harga               = $this->input->post('harga');
    $total_harga         =  (int)$jumlah_pemesanan*(int)$harga;
    $tanggal_reservasi   = $this->input->post('tanggal_reservasi');
    $waktu_reservasi     = $this->input->post('waktu_reservasi');
    $foto_struk           = $_FILES['foto_struk'];
    $keterangan_tambahan = $this->input->post('keterangan_tambahan');
    $status_reservasi    = "Menunggu";

    $config['upload_path']          = 'asset/fotostruk/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
     
    if (! $this->upload->do_upload('foto_struk')) {
        $this->load->view('errorupload');
    }else{
        $foto_struk=$this->upload->data('file_name');
    }


    $data = array(
        'id_konsumen' => $id_konsumen,
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'id_rm' => $id_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'keterangan_tambahan' => $keterangan_tambahan,
        'foto_struk' => $foto_struk,
        'status_reservasi' => $status_reservasi
    );

    $this->M_reservasirumahmakan->tambahreservasi($data,'tb_reservasi');
    $this->load->view('reservasisukses');
    $this->load->view('homeandroid');
}





public function editmenu($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_menu' => $id);
    $data['datamenu'] = $this->M_reservasirumahmakan->editmenurumahmakan($id,'tb_menu')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('editmenurumahmakan',$data);
  $this->load->view('template/footer');
}

public function editmeja($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_meja' => $id);
    $data['status'] = $this->M_reservasirumahmakan->editmeja($id,'tb_meja')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebar',$sess_data);
  $this->load->view('editmeja',$data);
  $this->load->view('template/footer');
}



public function edituser($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_rm' => $id);
    $data['status_reservasi'] = $this->M_reservasirumahmakan->edituser($id,'tb_rm')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebar',$sess_data);
  $this->load->view('edituser',$data);
  $this->load->view('template/footer');
}

public function updatekonsumen(){
    $id_konsumen       = $this->input->post('id_konsumen');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp        = $this->input->post('no_hp');
    $password  = $this->input->post('password');
   
    $data = array(
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'password' => $password
    );

    $where = array(
        'id_konsumen' => $id_konsumen
    );

    $this->M_reservasirumahmakan->updatekonsumen($where,$data,'tb_konsumen');
    $this->session->set_userdata($data); 
    $this->load->view('sukses');
    $this->load->view('homeandroid');
}

public function updateriwayatreservasi(){
    $id_reservasi       = $this->input->post('id_reservasi');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp        = $this->input->post('no_hp');
    $nama_rm  = $this->input->post('nama_rm');
    $no_meja    = $this->input->post('no_meja');
    $nama_menu    = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $total_harga    = $this->input->post('total_harga');
    $tanggal_reservasi    = $this->input->post('tanggal_reservasi');
    $waktu_reservasi    = $this->input->post('waktu_reservasi');
    $status_reservasi    = $this->input->post('status_reservasi');

    $data = array(
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'status_reservasi' => $status_reservasi
    );

    $where = array(
        'id_reservasi' => $id_reservasi
    );

    $this->M_reservasirumahmakan->updatereservasi($where,$data,'tb_reservasi');
    redirect('dashboard/datariwayatreservasi');
}



public function updatereservasi(){
    $id_reservasi       = $this->input->post('id_reservasi');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp        = $this->input->post('no_hp');
    $nama_rm  = $this->input->post('nama_rm');
    $no_meja    = $this->input->post('no_meja');
    $nama_menu    = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $total_harga    = $this->input->post('total_harga');
    $tanggal_reservasi    = $this->input->post('tanggal_reservasi');
    $waktu_reservasi    = $this->input->post('waktu_reservasi');
    $status_reservasi    = $this->input->post('status_reservasi');

    $data = array(
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'status_reservasi' => $status_reservasi
    );

    $where = array(
        'id_reservasi' => $id_reservasi
    );

    $this->M_reservasirumahmakan->updatereservasi($where,$data,'tb_reservasi');
    redirect('dashboard/datareservasi');
}


public function updateuser(){
    $id_rm      = $this->input->post('id_rm');
    $username       = $this->input->post('username');
    $password       = $this->input->post('password');
    
    $data = array(
        'username' => $username,
        'password' => $password,
    );

    $where = array(
        'id_rm' => $id_rm
    );

    $this->M_reservasirumahmakan->updateuser($where,$data,'tb_rm');
    
    $sess_data =  array(
        'username' => $username,
        'password' => $password,
        'id_rm' => $id_rm,
        );

    $this->session->set_userdata($sess_data);   
    



    redirect('dashboard/dataprofilpengguna');
}




public function datakonsumen(){
    $data['tb_konsumen'] = $this->M_reservasirumahmakan->tampil_data_datakonsumen()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $sess_data);
    $this->load->view('datakonsumen',$data);
    $this->load->view('template/footer');

    

}

 public function datameja(){
    $data['tb_meja'] = $this->M_reservasirumahmakan->tampil_data_datameja()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $sess_data);
    $this->load->view('datameja',$data);
    $this->load->view('template/footer');

}

public function datareservasi(){
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datareservasi()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $sess_data);
    $this->load->view('datareservasi',$data);
    $this->load->view('template/footer');

}

public function dataprofilpengguna(){
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $sess_data);
    $this->load->view('dataprofil',$sess_data);
    $this->load->view('template/footer');

}

public function datariwayatreservasi(){
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datariwayatreservasi()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $sess_data);
    $this->load->view('datariwayatreservasi',$data);
    $this->load->view('template/footer');

}


public function updatemeja(){
    $id_meja       = $this->input->post('id_meja');
    $id_rm       = $this->input->post('id_rm');
    $nama_rm        = $this->input->post('nama_rm');
    $no_meja  = $this->input->post('no_meja');
    $kapasitas    = $this->input->post('kapasitas');
    $status    = $this->input->post('status');

    $data = array(
        'id_rm' => $id_rm,
        'nama_rm' => $nama_rm,
        'no_meja' => $no_meja,
        'kapasitas' => $kapasitas,
        'status' => $status
    );

    $where = array(
        'id_meja' => $id_meja
    );
    $this->M_reservasirumahmakan->updatemeja($where,$data,'tb_meja');
    redirect('dashboard/datameja');
}


public function updaterm(){
    $id_rm              = $this->input->post('id_rm');
    $nama_rm            = $this->input->post('nama_rm');
    $nama_pemilik       = $this->input->post('nama_pemilik');
    $alamat_rm          = $this->input->post('alamat_rm');
    $no_hp              = $this->input->post('no_hp');
    $fotolama           = $this->input->post('fotolama');
    $foto_rm            = $_FILES['foto_rm']['name'];
    $username           = $this->input->post('username');
    $password           = $this->input->post('password');
    $status           = $this->input->post('status');

    $config['upload_path']          = 'asset/foto/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
     
    if (! $this->upload->do_upload('foto_rm')) {
        $this->load->view('errorupload');
    }else{
        $foto=$this->upload->data('file_name');
    }

    if ($foto_rm == null) {
        $foto_rm = $fotolama;
    }

    $data = array(
        'nama_rm' => $nama_rm,
        'nama_pemilik' => $nama_pemilik,
        'alamat_rm' => $alamat_rm,
        'no_hp' =>$no_hp,
        'foto_rm' => $foto_rm,
        'username' => $username,
        'password' => $password,
        'status' => $status
    );

    $where = array(
        'id_rm' => $id_rm
    );
    $this->M_reservasirumahmakan->updaterm($where,$data,'tb_rm');
    redirect(base_url('dashboard/datarumahmakan'));
}

public function hapusrm($id){
    $id_menu =    array ('id_rm' => $id);
    $this->M_reservasirumahmakan->hapus_data_rumahmakan($id_menu,'tb_menu');
    redirect(base_url('dashboard/datarumahmakan'));
}

public function hapusrekapmasuk($id){
    $id =    array ('id' => $id);
    $this->m_simsurat->hapus_data_rekapmasuk($id,'rekapmasuk');
    redirect(base_url('dashboard/rekapmasuk'));
}

public function logout(){
    $this->session->sess_destroy();
    redirect(base_url('home_android'));    
}

     
}


?>