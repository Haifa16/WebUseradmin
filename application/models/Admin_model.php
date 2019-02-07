<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function getAllbarang()
    {
        $this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori', 'left');
        return $this->db->get('barang')->result_array();
        
    }

    public function getAllkategori()
    {
        return $this->db->get('kategori')->result_array();
    }

}

/* End of file Admin_model.php */

?>