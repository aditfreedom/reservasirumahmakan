<?php

class M_reservasirumahmakan extends CI_Model{

    function cek_login($where){
        return $this->db->get_where('tb_rm',$where);
    }

    function cek_login_android($where){
        return $this->db->get_where('tb_konsumen',$where);
    }

    function cek_loginrumahmakan($where){
        return $this->db->get_where('tb_rm',$where);
    }


    public function tampil_data_datarumahmakan(){
        return $this->db->query("SELECT * FROM tb_rm WHERE status='Diterima' AND NOT nama_rm='admin'");
     }

     public function tampil_data_datarumahmakanapproval(){
        return $this->db->query("SELECT * FROM tb_rm WHERE status='Menunggu' OR status='Ditolak' OR status='Suspend'AND NOT nama_rm='admin'");
     }

     public function tampil_data_datameja(){
        return $this->db->get('tb_meja');
     }

     public function tampil_data_datamejarumahmakan($where){
        return $this->db->query("SELECT id_meja,id_rm,no_meja,kapasitas,status from tb_meja where id_rm='$where'");
     }

     public function tampil_data_datamenurumahmakan($where){
        return $this->db->query("SELECT id_menu,id_rm,nama_rm,nama_menu,harga,ket_menu,foto from tb_menu where id_rm='$where'");
     }

     public function ambil_data_datamenurumahmakan($where){
        return $this->db->get_where('tb_menu',$where);  
    }

    public function ambilmejaready($where){
        $this->db->where('id_rm',$where);
        $this->db->where('status',"Ready");
       return $this->db->get('tb_meja');

    }

     public function tampil_data_datamenu(){
        return $this->db->query("SELECT * FROM tb_menu ORDER BY nama_rm asc");
     }

     public function tampil_data_datakonsumen(){
        return $this->db->get('tb_konsumen');
     }

     public function tampil_data_datareservasi(){
        return $this->db->get_where('tb_reservasi', array('status_reservasi' => 'Menunggu'));
     }
     public function tampil_data_datariwayatreservasirumahmakan($where){
        $query = $this->db->query("SELECT * from tb_reservasi where (status_reservasi = 'Diterima' or status_reservasi='Ditolak') and id_rm='$where'");
      return $query;
   }

   public function tampil_data_datariwayatreservasi(){
    $query = $this->db->query("SELECT * from tb_reservasi where (status_reservasi = 'Diterima' or status_reservasi='Ditolak')");
  return $query;
}

   public function tampil_data_datareservasirumahmakan($where){
    $query = $this->db->query("SELECT * from tb_reservasi where status_reservasi = 'Menunggu' and id_rm='$where'");
  return $query;
}

public function tampil_data_datareservasirumahmakanandroid($where){
    $query = $this->db->query("SELECT * from tb_reservasi where status_reservasi = 'Menunggu' or status_reservasi = 'Ditolak' and id_konsumen='$where'");
  return $query;
}

public function tampil_data_datariwayatreservasirumahmakanandroid($where){
    $query = $this->db->query("SELECT * from tb_reservasi where (status_reservasi = 'Diterima') and id_konsumen='$where'");
  return $query;
}


public function editreservasirumahmakan($id)
{
    return $this->db->get_where('tb_reservasi',$id);  
}

public function ambil_datapengguna($where)
{
    return $this->db->get_where('tb_konsumen',$where);  
}


   
   public function editreservasi($id)
   {
       return $this->db->get_where('tb_reservasi',$id);  
   }

   public function editmeja($id)
   {
       return $this->db->get_where('tb_meja',$id);  
   }

   public function editmejarumahmakan($id)
   {
       return $this->db->get_where('tb_meja',$id);  
   }
   
   public function editmenurumahmakan($id)
   {
       return $this->db->get_where('tb_menu',$id);  
   }

   public function editrm($id)
   {
       return $this->db->get_where('tb_rm',$id);  
   }

   public function edituser($id)
   {
       return $this->db->get_where('tb_rm',$id);  
   }

   public function edituserrumahmakan($id)
   {
       return $this->db->get_where('tb_rm',$id);  
   }


   public function updateuser($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_rm',$data); 
   }

   public function updateuserrumahmakan($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_rm',$data); 
   }

   public function updatekonsumen($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_konsumen',$data); 
   }

   public function updatereservasirumahmakan($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_reservasi',$data); 
   }


   public function updatereservasi($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_reservasi',$data); 
   }

   public function updatemeja($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_meja',$data); 
   }
   public function updatemejarumahmakan($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_meja',$data); 
   }

   public function updatemenurumahmakan($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_menu',$data); 
   }

   public function updaterm($where,$data)
   {   $this->db->where($where);
       $this->db->update('tb_rm',$data); 
   }


   public function hitung_data_all($table){
      $result = $this->db->get($table);
      return $result->num_rows();
 }

    public function hitung_data_mejarm($where){
        $result = $this->db->query("SELECT*FROM tb_meja where id_rm='$where'");
        return $result->num_rows();
    }

    public function hitung_data_menurm($where){
        $result = $this->db->query("SELECT*FROM tb_menu where id_rm='$where'");
        return $result->num_rows();
        }

        public function hitung_data_reservasirm($where){
            $result = $this->db->query("SELECT*FROM tb_reservasi where id_rm='$where'");
            return $result->num_rows();
            }

 public function inputrm($data)
 {
     $this->db->insert('tb_rm', $data);
 }

 public function tambahreservasi($data)
 {
     $this->db->insert('tb_reservasi', $data);
 }

 public function inputpengguna($data)
 {
     $this->db->insert('tb_konsumen', $data);
 }

 public function inputrm2($data)
 {
     $this->db->insert('tb_rm', $data);
 }

 public function inputmenurumahmakan($data)
 {
     $this->db->insert('tb_menu', $data);
 }

 public function inputmejarumahmakan($data)
 {
     $this->db->insert('tb_meja', $data);
 }

 public function hapus_data_mejarumahmakan($id)
 {   
     $this->db->delete('tb_meja',$id);  
 }


 public function hapus_data_menurumahmakan($id)
 {   
     $this->db->delete('tb_menu',$id);  
 }

 public function hapus_data_rumahmakan($id)
 {   
    $this->db->delete('tb_rm',$id);  
     $this->db->delete('tb_menu',$id);  
     $this->db->delete('tb_meja',$id);  
 }


     public function hapus_data_rekapmasuk($id)
     {   
         $this->db->delete('rekapmasuk',$id);  
     }
}
?>