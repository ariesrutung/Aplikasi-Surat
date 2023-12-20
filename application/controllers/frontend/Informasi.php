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
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Home - Kelurahan Pulau',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/berita', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
    public function pengumuman()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Home - Kelurahan Pulau',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/pengumuman', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
    public function pelatihan()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Home - Kelurahan Pulau',
            'sub_title' => ''
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/pelatihan', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
}
