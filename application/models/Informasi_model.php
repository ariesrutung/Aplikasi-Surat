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

    public function get_4_berita_terbaru()
    {
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->order_by('tanggal', 'desc');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }
    // public function get_4_pengumuman_terbaru()
    // {
    //     $this->db->select('*');
    //     $this->db->from('informasi');
    //     $this->db->order_by('tanggal', 'desc');
    //     $this->db->limit(4);
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    public function get_4_terbaru_by_kategori($kategori)
    {
        $this->db->select('*');
        $this->db->from('informasi');
        $this->db->where('kategori', $kategori); // Menambahkan kondisi WHERE untuk kategori
        $this->db->order_by('tanggal', 'desc');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
    }
}
