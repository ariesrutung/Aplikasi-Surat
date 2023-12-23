<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_model extends CI_Model
{
    public function get_informasi()
    {
        return $this->db->get('informasi')->result();
    }

    public function tambah_informasi($data)
    {
        $this->db->insert('informasi', $data);
        return $this->db->insert_id();
    }
}
