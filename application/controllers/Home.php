<?php

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }
        public function index(){
            $this->load->model('M_reservasirumahmakan');
            $this->load->view('login');
        }

    

    public function login_aksi(){
       $username = $this->input->post('username',true);
       $password = $this->input->post('password',true);

       $this->form_validation->set_rules('username','Username','required');
       $this->form_validation->set_rules('password','Password','required');

       if($this->form_validation->run() != FALSE){
            $where = array(
                'username' => $username,
                'password' => $password,
            );

            $ceklogin = $this->M_reservasirumahmakan->cek_login($where)->num_rows();
            $cekloginid = $this->M_reservasirumahmakan->cek_login($where)->result();
            if ($ceklogin > 0) {
                foreach ($cekloginid as $cek) {
                    $id_rm = $cek->id_rm;}

                $sess_data =  array(
                    'username' => $username,
                    'password' => $password,
                    'id_rm' => $id_rm,
                    'nama_rm' => $nama_rm,
                    'nama_pemilik' => $nama_pemilik,
                    'alamat_rm' => $alamat_rm,
                    'no_hp' => $no_hp,
                    'login' => 'Berhasil'
                );

                $this->session->set_userdata($sess_data); 
                if ($sess_data['username']=="admin"){
                    redirect(base_url('dashboard')); 
                }else {
                    redirect(base_url('dashboardrumahmakan')); 
                }
                
            }else{
                $this->load->view('error');
            }

       }else{
        $this->load->view('error');

       }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());    
    }
}

?>