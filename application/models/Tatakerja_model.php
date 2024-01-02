<?php

class Tatakerja_model extends CI_Model
{

    public function getTatakerja()
    {
        return $this->db->get('tatakerja')->row();
    }

    public function updateTatakerja($data)
    {
        $this->db->where('id', 1); // Sesuaikan dengan kondisi tertentu, jika perlu
        $this->db->update('tatakerja', $data);
    }

    public function update_alur_surat_masuk($data)
    {
        $this->db->where('id', 1); // Sesuaikan dengan kondisi tertentu, jika perlu
        $this->db->update('tatakerja', $data);
    }

    public function updateSuratKeluar($data)
    {
        $this->db->where('id', 1); // Sesuaikan dengan kondisi tertentu, jika perlu
        $this->db->update('tatakerja', $data);
    }
}
