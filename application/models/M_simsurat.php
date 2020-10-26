<?php

class M_simsurat extends CI_Model{

    function cek_login($where){
        return $this->db->get_where('user',$where);
    }

    public function tampil_data_rekapmasuk(){
        return $this->db->get('rekapmasuk');
     }

     public function hapus_data_rekapmasuk($id)
     {   
         $this->db->delete('rekapmasuk',$id);  
     }
}
?>