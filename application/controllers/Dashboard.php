<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
		if (empty($this->session->userdata('login'))) {
			redirect(base_url());
		}
        
    }

    public function index(){
            $sess_data = $this->session->userdata();
            $data['tb_rm'] = $this->M_reservasirumahmakan->hitung_data_all('tb_rm');
            $data['tb_meja'] = $this->M_reservasirumahmakan->hitung_data_all('tb_meja');
            $data['tb_menu'] = $this->M_reservasirumahmakan->hitung_data_all('tb_menu');
            $data['tb_konsumen'] = $this->M_reservasirumahmakan->hitung_data_all('tb_konsumen');
            $data['tb_reservasi'] = $this->M_reservasirumahmakan->hitung_data_all('tb_reservasi');
            $this->load->view('template/header');
            $this->load->view('template/sidebar', $sess_data);
            $this->load->view('home',$data);
            $this->load->view('template/footer');

     }

     public function datarumahmakan(){
        $data['tb_rm'] = $this->M_reservasirumahmakan->tampil_data_datarumahmakan()->result();
        $sess_data = $this->session->userdata();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $sess_data);
        $this->load->view('datarumahmakan',$data);
        $this->load->view('template/footer');

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



public function updateriwayatreservasi(){
    $id_reservasi       = $this->input->post('id_reservasi');
    $id_konsumen      = $this->input->post('id_konsumen');
    $nama_konsumen       = $this->input->post('nama_konsumen');
    $no_hp        = $this->input->post('no_hp');
    $nama_rm  = $this->input->post('nama_rm');
    $no_meja    = $this->input->post('no_meja');
    $nama_menu    = $this->input->post('nama_menu');
    $jumlah_pemesanan    = $this->input->post('jumlah_pemesanan');
    $total_harga    = $this->input->post('total_harga');
    $tanggal_reservasi    = $this->input->post('tanggal_reservasi');
    $waktu_reservasi    = $this->input->post('waktu_reservasi');
    $keterangan_tambahan    = $this->input->post('keterangan_tambahan');
    $status_reservasi    = $this->input->post('status_reservasi');

    $data = array(
        'id_konsumen' => $id_konsumen,
        'nama_konsumen' => $nama_konsumen,
        'no_hp' => $no_hp,
        'nama_rm' => $nama_rm,
        'no_meja' => $no_meja,
        'nama_menu' => $nama_menu,
        'jumlah_pemesanan' => $jumlah_pemesanan,
        'total_harga' => $total_harga,
        'tanggal_reservasi' => $tanggal_reservasi,
        'waktu_reservasi' => $waktu_reservasi,
        'keterangan_tambahan' => $keterangan_tambahan,
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
    $keterangan_tambahan    = $this->input->post('keterangan_tambahan');
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
        'keterangan_tambahan' => $keterangan_tambahan,
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

public function tambahrm(){
    $nama_rm            = $this->input->post('nama_rm');
    $nama_pemilik       = $this->input->post('nama_pemilik');
    $alamat_rm          = $this->input->post('alamat_rm');
    $no_hp              = $this->input->post('no_hp');
    $foto_rm            = $_FILES['foto_rm'];
    $username           = $this->input->post('username');
    $password           = $this->input->post('password');
    $status             = $this->input->post('status');



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
            $foto_rm=$this->upload->data('file_name');
        }

    
    $data = array(
        'nama_rm' => $nama_rm,
        'nama_pemilik' => $nama_pemilik,
        'alamat_rm' => $alamat_rm,
        'no_hp' => $no_hp,
        'foto_rm' =>$foto_rm,
        'username' => $username,
        'password' => $password,
        'status' => $status
    );

    $this->M_reservasirumahmakan->inputrm($data,'tb_rm');
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
    redirect(base_url());    
}

     
}


?>