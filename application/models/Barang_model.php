<?php
defined ('BASEPATH') OR exit('No direct script acces allowed'); 

class Barang_model extends CI_Model {


    public function getAllBarang ()
    {
        return $this->db->get('barang')->result_array();
    }
    public function tambahbarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang','true'),
            "nama_barang" => $this->input->post('nama_barang','true'),
            "harga" => $this->input->post('harga','true'),
            "stock" => $this->input->post('stock','true'),
        ];
        $this->db->insert('barang',$data);

    }
    public function hapusdatabarang($id){
        $this->db->where('id_barang',$id);
        $this->db->delete('Barang');
    }

}