<?php

class Home_android extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }
        public function index(){
            $this->load->model('M_reservasirumahmakan');
            $this->load->view('loginandroid');
        }

        public function tambahpengguna(){
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
            $this->load->view('status');    
            $this->load->view('login');  
            // redirect(base_url('home/registrasi'));
        
        }
    

    public function login_aksi(){
       $username = $this->input->post('username',true);
       $password = $this->input->post('password',true);

       $this->form_validation->set_rules('username','Username','required');
       $this->form_validation->set_rules('password','Password','required');

       if($this->form_validation->run() != FALSE){
            $where = array(
                'no_hp' => $username,
                'password' => $password,
            );

            $ceklogin = $this->M_reservasirumahmakan->cek_login_android($where)->num_rows();
            $cekloginid = $this->M_reservasirumahmakan->cek_login_android($where)->result();
            if ($ceklogin > 0) {
                foreach ($cekloginid as $cek) {
                    $id_konsumen = $cek->id_konsumen;
                    $nama_konsumen = $cek->nama_konsumen;
                    $no_hp = $cek->no_hp;
                    $password = $cek->password;
                    $nama_rm = $cek->nama_rm;}

                    
                    $sess_data =  array(
                        'id_konsumen' => $id_konsumen,
                        'nama_konsumen' => $nama_konsumen,
                        'no_hp' => $no_hp,
                        'nama_rm' => $nama_rm,
                        'password' => $password,
                        'login' => 'Berhasil'              
                );

                $this->session->set_userdata($sess_data); 
                    redirect(base_url('dashboardandroid')); 
            }else{
                $this->load->view('error');
            }

       }else{
        $this->load->view('error');

       }
    }

    public function registrasi_android(){
        $this->load->view('registrasi_android');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());    
    }
}

?>