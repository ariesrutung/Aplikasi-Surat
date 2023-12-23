<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function berita()
    {
        $data['informasi'] = $this->db->get_where('informasi', ['kategori' => 'berita'])->result_array();
        $judul = [
            'title' => 'Berita',
            'sub_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];

        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/berita', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
    public function pengumuman()
    {
        $data['informasi'] = $this->db->get_where('informasi', ['kategori' => 'pengumuman'])->result_array();
        $judul = [
            'title' => 'Pengumuman',
            'sub_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];

        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/pengumuman', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
    public function pelatihan()
    {
        $data['informasi'] = $this->db->get_where('informasi', ['kategori' => 'berita'])->result_array();
        $judul = [
            'title' => 'Pelatihan',
            'sub_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];

        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/pelatihan', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
}
