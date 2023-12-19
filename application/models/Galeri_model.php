<?php

class Galeri_model extends CI_Model
{

    public function getProfil()
    {
        return $this->db->get('gallery')->row();
    }

    public function updateProfil($data)
    {
        $this->db->where('id', 1); // Sesuaikan dengan kondisi tertentu, jika perlu
        $this->db->update('gallery', $data);
    }
}
