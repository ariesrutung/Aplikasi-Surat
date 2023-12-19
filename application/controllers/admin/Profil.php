<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');

        $this->load->helper(array('form', 'url', 'Cookie', 'String'));
        $this->load->library('form_validation');

        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {
        $judul = [
            'title' => 'Profil Desa',
            'sub_title' => ''
        ];

        $data['galeri'] = $this->Galeri_model->getProfil();
        $this->load->view('new_ui/template/header', $judul);
        $this->load->view('new_ui/galery/profil_kelurahan', $data);
        $this->load->view('new_ui/template/footer');
    }

    public function edit()
    {
        $data['galeri'] = $this->Galeri_model->getProfil();
        $this->load->view('new_ui/template/header');
        $this->load->view('new_ui/galery/edit_profil_kelurahan', $data);
        $this->load->view('new_ui/template/footer');
    }

    public function update()
    {
        $data['profile'] = $this->input->post('profile');
        $this->Galeri_model->updateProfil($data);
        $this->session->set_flashdata('success', 'Berhasil Di Update!');
        redirect('admin/profil');
    }
}
