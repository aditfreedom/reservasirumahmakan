<?php

class Mahasiswa extends CI_Controller{
    public function index(){
        $data['mahasiswa'] = $this->m_mahasiswa->tampil_data()->result();
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('mahasiswa',$data);
		$this->load->view('template/footer');
    }

    public function tambah_data(){
        $nama       = $this->input->post('nama');
        $nim        = $this->input->post('nim');
        $tgl_lahir  = $this->input->post('tgl_lahir');
        $jurusan    = $this->input->post('jurusan');
    
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan
        );
    
        $this->m_mahasiswa->input_data($data,'tb_mahasiswa');
        redirect('mahasiswa');
    
    }

    public function hapus($id){
        $id =    array ('id' => $id);
        $this->m_mahasiswa->hapus_data($id,'tb_mahasiswa');
        redirect('mahasiswa');
    }
    
    public function edit($id){
        $id =    array ('id' => $id);
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data($id,'tb_mahasiswa')->result();
        $this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit',$data);
		$this->load->view('template/footer');
    }

    public function update(){
        $id       = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $nim        = $this->input->post('nim');
        $tgl_lahir  = $this->input->post('tgl_lahir');
        $jurusan    = $this->input->post('jurusan');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_lahir' => $tgl_lahir,
            'jurusan' => $jurusan
        );

        $where = array(
            'id' => $id
        );

        $this->m_mahasiswa->update_data($where,$data,'tb_mahasiswa');
        redirect('mahasiswa');
    }
}

?>