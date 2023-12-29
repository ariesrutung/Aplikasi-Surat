<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data = $this->dashboard->user();
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Profil',
            'sub_title' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ];
        $data['profil'] = $this->db->get_where('informasi', ['kategori' => 'profil'])->row_array();
        $this->load->view('frontend/new_ui/header', $judul);
        $this->load->view('frontend/new_ui/profil', $data);
        $this->load->view('frontend/new_ui/footer', $data);
    }
}
