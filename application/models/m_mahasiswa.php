<?php

class M_mahasiswa extends CI_Model{

    public function tampil_data(){
       return $this->db->get('tb_mahasiswa');
    }

    public function input_data($data)
    {
        $this->db->insert('tb_mahasiswa', $data);
    }

    public function hapus_data($id)
    {   
        $this->db->delete('tb_mahasiswa',$id);  
    }

    public function edit_data($id)
    {
        return $this->db->get_where('tb_mahasiswa',$id);  
    }

    public function update_data($where,$data)
    {   $this->db->where($where);
        $this->db->update('tb_mahasiswa',$data); 
    }
}
?>