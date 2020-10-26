<?php

class Simsurat extends CI_Controller{
    function __construct(){
        parent::__construct();
        
    }
        public function index(){
            $this->load->model('M_simsurat');
            $this->load->view('login');
        }

    

    public function login_aksi(){
       $username = $this->input->post('username',true);
       $password = md5($this->input->post('password',true));

       $this->form_validation->set_rules('username','Username','required');
       $this->form_validation->set_rules('password','Password','required');

       if($this->form_validation->run() != FALSE){
            $where = array(
                'username' => $username,
                'password' => $password
            );

            $ceklogin = $this->m_simsurat->cek_login($where)->num_rows();
            if ($ceklogin > 0) {
                $sess_data =  array(
                    'username' => $username,
                    'login' => 'Berhasil'
                );

                $this->session->set_userdata($sess_data);             
                redirect(base_url('dashboard')); 
            }else{
                $this->load->view('error');
                $this->load->view('login'); 
            }

       }else{
        $this->load->view('login'); 
            $this->load->view('error');
       }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());    
    }
}

?>