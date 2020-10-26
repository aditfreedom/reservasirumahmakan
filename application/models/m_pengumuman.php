<?php

class M_pengumuman extends CI_Model{

    public function get_data(){
       return $this->db->get('sd')->result_array();
    }

    public function get_data1(){
        return $this->db->get('smp')->result_array();
     }

}
?>