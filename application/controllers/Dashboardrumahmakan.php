<?php

class Dashboardrumahmakan extends CI_Controller{
    function __construct(){
        parent::__construct();
		if (empty($this->session->userdata('login'))) {
			redirect(base_url());
		}
        
    }

    public function index(){
            $sess_data = $this->session->userdata();
            $where = $this->session->userdata('id_rm');
            $data['tb_meja'] = $this->M_reservasirumahmakan->hitung_data_mejarm($where);
            $data['tb_menu'] = $this->M_reservasirumahmakan->hitung_data_menurm($where);
            $data['tb_reservasi'] = $this->M_reservasirumahmakan->hitung_data_reservasirm($where);
            $this->load->view('template/header');
            $this->load->view('template/sidebarrumahmakan', $sess_data);
            $this->load->view('homerumahmakan',$data);
            $this->load->view('template/footer');

     }

     public function datarumahmakan(){
        $data['tb_rm'] = $this->M_reservasirumahmakan->tampil_data_datarumahmakan()->result();
        $sess_data = $this->session->userdata();
        $where = $this->session->userdata('nama_rm');
        $this->load->view('template/header');
        $this->load->view('template/sidebarrumahmakan', $sess_data);
        $this->load->view('datarumahmakan',$data);
        $this->load->view('template/footer');

 }

 public function datamenu(){
    $data['tb_menu'] = $this->M_reservasirumahmakan->tampil_data_datamenu()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datamenu',$data);
    $this->load->view('template/footer');
}

public function datamenurumahmakan(){
    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_rm');
    $data['tb_menu'] = $this->M_reservasirumahmakan->tampil_data_datamenurumahmakan($where)->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datamenurumahmakan',$data);
    $this->load->view('template/footer');
}

public function editreservasi($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_reservasi' => $id);
    $data['status_reservasi'] = $this->M_reservasirumahmakan->editreservasi($id,'tb_reservasi')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('editreservasi',$data);
  $this->load->view('template/footer');
}


public function editreservasirumahmakan($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_reservasi' => $id);
    $data['status_reservasi'] = $this->M_reservasirumahmakan->editreservasirumahmakan($id,'tb_reservasi')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('editreservasirumahmakan',$data);
  $this->load->view('template/footer');
}

public function editriwayatreservasi($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_reservasi' => $id);
    $data['status_reservasi'] = $this->M_reservasirumahmakan->editreservasi($id,'tb_reservasi')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('editreservasi',$data);
  $this->load->view('template/footer');
}


public function editmeja($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_meja' => $id);
    $data['status'] = $this->M_reservasirumahmakan->editmeja($id,'tb_meja')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('editmeja',$data);
  $this->load->view('template/footer');
}


public function editmejarumahmakan($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_meja' => $id);
    $data['status'] = $this->M_reservasirumahmakan->editmejarumahmakan($id,'tb_meja')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('editmejarumahmakan',$data);
  $this->load->view('template/footer');
}


public function editmenurumahmakan($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_menu' => $id);
    $data['datamenu'] = $this->M_reservasirumahmakan->editmenurumahmakan($id,'tb_menu')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('editmenurumahmakan',$data);
  $this->load->view('template/footer');
}

public function edituser($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_admin' => $id);
    $data['status_reservasi'] = $this->M_reservasirumahmakan->edituser($id,'tb_useradmin')->result();
    $this->load->view('template/header');
  $this->load->view('template/sidebarrumahmakan',$sess_data);
  $this->load->view('edituser',$data);
  $this->load->view('template/footer');
}

public function edituserrumahmakan($id){
    $sess_data = $this->session->userdata();
    $id =    array ('id_rm' => $id);
    $data['userrumahmakan'] = $this->M_reservasirumahmakan->edituserrumahmakan($id,'tb_rm')->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan',$sess_data);
    $this->load->view('edituserrumahmakan',$data);
    $this->load->view('template/footer');
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


public function updatereservasirumahmakan(){
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

    $this->M_reservasirumahmakan->updatereservasirumahmakan($where,$data,'tb_reservasi');
    redirect('dashboardrumahmakan/datareservasirumahmakan');
}

public function updateuserrumahmakan(){
    $id_rm          = $this->input->post('id_rm');
    $username       = $this->input->post('username');
    $password       = $this->input->post('password');
    
    $data = array(
        'username' => $username,
        'password' => $password,
    );

    $where = array(
        'id_rm' => $id_rm
    );

    $this->M_reservasirumahmakan->updateuserrumahmakan($where,$data,'tb_rm');
    
    $sess_data =  array(
        'username' => $username,
        'password' => $password,
        'id_rm' => $id_rm
        );

    $this->session->set_userdata($sess_data);   
    



    redirect('dashboardrumahmakan/dataprofilpenggunarumahmakan');
}




public function datakonsumen(){
    $data['tb_konsumen'] = $this->M_reservasirumahmakan->tampil_data_datakonsumen()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datakonsumen',$data);
    $this->load->view('template/footer');

    

}

 public function datamejarumahmakan(){
    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_rm');
    $data['tb_meja'] = $this->M_reservasirumahmakan->tampil_data_datamejarumahmakan($where)->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datamejarumahmakan',$data);
    $this->load->view('template/footer');

}

public function datareservasi(){
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datareservasi()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datareservasi',$data);
    $this->load->view('template/footer');

}

public function datareservasirumahmakan(){
    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_rm');
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datareservasirumahmakan($where)->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datareservasirumahmakan',$data);
    $this->load->view('template/footer');

}

public function dataprofilpengguna(){
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('dataprofil',$sess_data);
    $this->load->view('template/footer');

}


public function dataprofilpenggunarumahmakan(){
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('dataprofilpenggunarumahmakan',$sess_data);
    $this->load->view('template/footer');

}


public function datariwayatreservasi(){
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datariwayatreservasi()->result();
    $sess_data = $this->session->userdata();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datariwayatreservasi',$data);
    $this->load->view('template/footer');

}

public function datariwayatreservasirumahmakan(){
    $sess_data = $this->session->userdata();
    $where = $this->session->userdata('id_rm');
    $data['tb_reservasi'] = $this->M_reservasirumahmakan->tampil_data_datariwayatreservasirumahmakan($where)->result();
    $this->load->view('template/header');
    $this->load->view('template/sidebarrumahmakan', $sess_data);
    $this->load->view('datareservasirumahmakan',$data);
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


public function updatemejarumahmakan(){
    $id_meja        = $this->input->post('id_meja');
    $id_rm          = $this->input->post('id_rm');
    $nama_rm        = $this->input->post('nama_rm');
    $no_meja        = $this->input->post('no_meja');
    $kapasitas      = $this->input->post('kapasitas');
    $status         = $this->input->post('status');

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
    redirect('dashboardrumahmakan/datamejarumahmakan');
}


public function updatemenurumahmakan(){
    $id_menu            = $this->input->post('id_menu');
    $id_rm              = $this->input->post('id_rm');
    $nama_rm            = $this->input->post('nama_rm');
    $nama_menu          = $this->input->post('nama_menu');
    $harga              = $this->input->post('harga');
    $ket_menu           = $this->input->post('ket_menu');
    $fotolama           = $this->input->post('fotolama');
    $foto               = $_FILES['foto']['name'];

    $config['upload_path']          = 'asset/fotomenu/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
     
    if (! $this->upload->do_upload('foto')) {
        $this->load->view('errorupload');
    }else{
        $foto=$this->upload->data('file_name');
    }

    if ($foto == null) {
        $foto = $fotolama;
    }

    $data = array(
        'id_rm' => $id_rm,
        'nama_rm' => $nama_rm,
        'nama_menu' => $nama_menu,
        'harga' => $harga,
        'ket_menu' =>$ket_menu,
        'foto' => $foto
    );

    $where = array(
        'id_menu' => $id_menu
    );
    print_r($foto);
    $this->M_reservasirumahmakan->updatemenurumahmakan($where,$data,'tb_menu');
    redirect(base_url('dashboardrumahmakan/datamenurumahmakan'));
}



public function tambahrm(){
    $nama_rm            = $this->input->post('nama_rm');
    $nama_pemilik       = $this->input->post('nama_pemilik');
    $alamat_rm          = $this->input->post('alamat_rm');
    $no_hp              = $this->input->post('no_hp');
    $foto_rm            = $_FILES['foto_rm'];
    $username           = $this->input->post('username');
    $password           = $this->input->post('password');


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
        'password' => $password
    );

    $this->M_reservasirumahmakan->inputrm($data,'tb_rm');
    redirect(base_url('dashboard/datarumahmakan'));

}

public function tambahmenurumahmakan(){
    $id_rm              = $this->input->post('id_rm');
    $nama_rm            = $this->input->post('nama_rm');
    $nama_menu          = $this->input->post('nama_menu');
    $harga              = $this->input->post('harga');
    $ket_menu           = $this->input->post('ket_menu');
    $foto               = $_FILES['foto'];

        $config['upload_path']          = 'asset/fotomenu/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
         
        if (! $this->upload->do_upload('foto')) {
            $this->load->view('errorupload');
        }else{
            $foto=$this->upload->data('file_name');
        }

    $data = array(
        'id_rm' => $id_rm,
        'nama_rm' => $nama_rm,
        'nama_menu' => $nama_menu,
        'harga' => $harga,
        'ket_menu' =>$ket_menu,
        'foto' => $foto
    );

    $this->M_reservasirumahmakan->inputmenurumahmakan($data,'tb_menu');
    redirect(base_url('dashboardrumahmakan/datamenurumahmakan'));

}


public function tambahmejarumahmakan(){
    $id_rm              = $this->input->post('id_rm');
    $nama_rm            = $this->input->post('nama_rm');
    $no_meja            = $this->input->post('no_meja');
    $kapasitas          = $this->input->post('kapasitas');
    $status              = $this->input->post('status');
   
    $data = array(
        'id_rm' => $id_rm,
        'nama_rm' => $nama_rm,
        'no_meja' => $no_meja,
        'kapasitas' => $kapasitas,
        'status' =>$status,
    );

    $this->M_reservasirumahmakan->inputmejarumahmakan($data,'tb_meja');
    redirect(base_url('dashboardrumahmakan/datamejarumahmakan'));

}


public function hapusmejarumahmakan($id){
    $id_meja =    array ('id_meja' => $id);
    $this->M_reservasirumahmakan->hapus_data_mejarumahmakan($id_meja,'tb_meja');
    redirect(base_url('dashboardrumahmakan/datamejarumahmakan'));
}

public function hapusmenurumahmakan($id){
    $id_menu =    array ('id_menu' => $id);
    $this->M_reservasirumahmakan->hapus_data_menurumahmakan($id_menu,'tb_menu');
    redirect(base_url('dashboardrumahmakan/datamenurumahmakan'));
}

public function logout(){
    $this->session->sess_destroy();
    redirect(base_url());    
}
}


?>